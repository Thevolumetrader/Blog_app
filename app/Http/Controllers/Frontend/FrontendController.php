<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\About;
use App\Models\Contact;
use App\Models\Backend\Category;
use App\Models\Backend\Post;
use App\Models\Backend\Tag;
use App\Models\Backend\Comment;
use Illuminate\Support\Facades\Auth;
class FrontendController extends Controller
{
  public function homepage(){

    // dd('here');
    $posts= Post::inRandomOrder()->orderBy('updated_at','desc')->limit(2)->get();
    $sidepost= Post::inRandomOrder()->orderBy('updated_at','desc')->limit(1)->get();
    $posts= Post::inRandomOrder()->orderBy('updated_at','desc')->paginate(2);
    $categories = Category::all();
    $tags = Tag::all();
    $comments = Comment::with('posts')->get();
    // dd($comments);
    return view('frontend.pages.homepage',compact('posts', 'sidepost', 'categories', 'tags' ,'comments'));
  }
public function aboutUs(){
    $AboutUs = About::all();
    return view('frontend.pages.about', compact('AboutUs'));
}

public function storeAboutUs(Request $request)
{


    $validatedData = $request->validate([
        'text' => 'required',
    ]);

    $data = new  About();
    $data->text = $request->text;

    $data->save();
    return redirect()->back()->with('success', 'contact added sucessfully');
}


public function updateAboutUs(Request $request, $id)
{
    $data = About::find($id);


    $data->text = $request->text;
    $data->save();
    return redirect()->back()->with('success', 'about updated sucessfully');

}
public function contactUs(){
    $ContactUs = Contact::all();
    return view('frontend.pages.contact', compact('ContactUs'));
}

public function storeContactUs(Request $request)
{
    $validatedData = $request->validate([



        'text' => 'required',

    ]);

    $data = new  Contact();
    $data->text = $request->text;

    $data->save();
    return redirect()->back()->with('success', 'About added sucessfully');

}

public function updateContactUs(Request $request, $id)
{
    $data = Contact::find($id);


    $data->text = $request->text;
    $data->save();
    return redirect()->back()->with('success', 'contact updated sucessfully');

}
//   function detail(Request $request,$slug,$postId){
//     // Update post count
//     Post::find($postId)->increment('count');
//     $detail=Post::find($postId);
//     return view('frontend.pages.singleblog',['detail'=>$detail]);
// }
    public function tagsWisePost($id){
        $tag = Tag::findOrFail($id);
        $post = Post::findOrFail($id);
        return view('frontend.pages.tagwisepost', compact('tag', 'post'));
    }
    public function categoryWisePost($id){
        $tag =Category::findOrFail($id);

        $post = Post::findOrFail($id);

        return view('frontend.pages.categorywisepost', compact('tag', 'post'));
    }
    public function getLogin(){
        return view('frontend.pages.login');
    }

    public function postRegister(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email|max:255',

            // 'password' => 'required|between:8,255|confirmed',
            // 'password_confirmation' => 'required'
        ]);


        $user = new User;


        $user->name = $request->name;
        $user->email = $request->email;

        $user->password = bcrypt($request->password);
        $user->save();
    }

    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
            $cred = $request->only('email', 'password');

            if(Auth::guard('web')->attempt($cred)){


                return redirect()->route('homepage')->with('success', 'login successsfully');
            }else{

                return  redirect()->route('getlogin')->with('error', 'invalid credentials');
            }
    }
    public  function logOut(){

        Auth::logout();
        return redirect()->route('homepage')->with('success', 'logout successfully');

   }
}
