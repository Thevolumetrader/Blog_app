<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Backend\Post;
use App\Models\Backend\Category;
use App\Models\Backend\Comment;
use Illuminate\Support\Facades\Auth;

use DB;
use App\Models\Admin;
class AdminController extends Controller
{

    public function getAdminLogin(){
        return view('backend.admin.auth.login');
    }

    public  function postAdminLogin(Request $request){


        //   dd($request->all());
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

            $cred = $request->only('email', 'password');

            if(Auth::guard('admin')->attempt($cred)){

                return redirect()->route('admin.dashboard')->with('success','login successfully');
            }else{

                return  redirect()->route('admin.get.login')->with('error', 'invlaid credentials');
            }
    }

     public function dashboardPage(){
        $posts = Post::all();
        $views = Post::sum('count');

        $comment = Comment::all();
        $users = User::all();
        return view('backend.pages.dashboard', compact('users','comment', 'posts', 'views'));
     }

     public function index(Request $request)
     {
         $users = Admin::orderBy('id', 'desc')->get();

         if($request->ajax()){

             $roles = Role::where('id', $request->role_id)->first();
             dd($roles);

             $permissions = $roles->permissions;

             return $permissions;
         }

         $roles = Role::where('name', "!=", 'superadmin')->where('name', "!=", 'supersuperadmin')->get();
         // dd($roles);
         return view('backend.admin.users.index', [
             'users' => $users,
              'roles' => $roles]);
     }

     public function create(Request $request)
     {
         if($request->ajax()){
             $roles = Role::where('id', $request->role_id)->first();
             $permissions = $roles->permissions;

             return $permissions;
         }

         $roles = Role::all();

         return view('backend.admin.users.create', ['roles' => $roles]);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
 //    dd($request->all());
         //validate the fields
         $request->validate([
             'name' => 'required|max:255',
             'email' => 'required|unique:users|email|max:255',
             'phone_number' => 'required',
             // 'password' => 'required|between:8,255|confirmed',
             // 'password_confirmation' => 'required'
         ]);
         $user = auth()->user();
         $admin = new Admin;
         $code = rand(0000000, 9999999);
         $admin->code = $code;
         $admin->name = $request->name;
         $admin->email = $request->email;
         $admin->phone_number = $request->phone_number;
         $admin->password = bcrypt($code);
         $admin->save();
         if ( $admin) {
             // Add activity logs
             activity('create')
                 ->performedOn( $admin)
                 ->causedBy($user)
                 ->withProperties(['attributes' =>  $admin->name])
                 ->log('admin created by ' . $user->email);
             $request->session()->flash('success', 'new administrator successfully added');
         } else {
             $request->session()->flash('error', 'Oops something went wrong, Todo not saved');
         }
         dispatch(new AdminRegistrationJob($admin->email, new AdminRegistrationMail($admin)));

         if($request->role != null){
             $admin->roles()->attach($request->role);
             $admin->save();
         }

         if($request->permissions != null){
             foreach ($request->permissions as $permission) {
                 $admin->permissions()->attach($permission);
                 $admin->save();
             }
         }

         return redirect()->back()->with('success', 'new admiin created sucessfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show(Admin $user)
     {
         return view('backend.admin.users.show', ['user'=>$user]);
     }

     public function edit(Request $request, $id)
     {
         $user= Admin::find($id);
         $roles = Role::get();
         // dd($user);
         $userRole = $user->roles->first();
         // dd( $userRole);
         if($userRole != null){
             $rolePermissions = $userRole->allRolePermissions;
             //  dd( $rolePermissions);
         }else{
             $rolePermissions = null;
         }
         $userPermissions = $user->permissions;

         // dd($rolePermission);

         return view('admin.users.edit', [
             'user'=>$user,
             'roles'=>$roles,
             'userRole'=>$userRole,
             'rolePermissions'=>$rolePermissions,
             'userPermissions'=>$userPermissions
         ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\User  $user
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $user = Admin::find($id);
         //validate the fields
         $request->validate([
             'name' => 'required|max:255',
             'email' => 'required|email|max:255',
             'password' => 'confirmed',
         ]);


         $user = auth()->user();
         $user->update([
             $user->name = $request->name,
             $user->email = $request->email,
             $user->code = $request->code,
             $user->name = $request->name,
             $user->email = $request->email,
             $user->phone_number = $request->phone_number,

         ]);

         $user->save();

         $user->roles()->detach();
         $user->permissions()->detach();

         if($request->role != null){
             $user->roles()->attach($request->role);
             $user->save();
         }

         if($request->permissions != null){
             foreach ($request->permissions as $permission) {
                 $user->permissions()->attach($permission);
                 $user->save();
             }
         }

         return back();

     }

     public function logOut(){
        Auth::guard('admin')->logout();

        return redirect()->route('homepage')->with('success', 'logout successfully');
     }
}
