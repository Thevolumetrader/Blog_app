<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData =  Permission::all();
        return view('admin.permission.index', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $slug = $request->name;
        $data = new  Permission();
        $data->name = $request->name;
        $data->slug = $slug;
        $data->save();

        return redirect()->route('permission.index')->with('success', 'data added successfully');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data =  Permission::find($id);

        $validatedData = $request->validate([
            'name' => 'required',

        ]);

        $data->name = $request->name;

        $data->save();
        return redirect()->route('permission.index')->with('success', 'data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $permission = Permission::find($id);

        $permission->delete();



        return redirect()->back()->with('info', 'data deleted successfully');
    }
}
