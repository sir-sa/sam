<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;

class ManagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = Manager::all();
        return view('managers.index',compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('managers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $managers =array(
            'manager_id'=>$request->manager_id,
            'manager_name'=>$request->manager_name,
            'manager_department'=>$request->manager_department,
            'manager_role'=>$request->manager_role,
             
        );

        Manager::create($managers);

        return redirect()->route('managers.index')->with('sucess','emloyee information inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $managers = Manager::findOrFail($id);
        return view('managers.show',compact('managers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $managers = Manager::findOrFail($id);
        return view('managers.edit',compact('managers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'manager_id'=>'required',
            'manager_name'=>'required',
            'manager_department'=>'required',
            'manager_role'=>'required',
             
             
        ]);

        $managers = Manager::find($id);
        $managers->manager_id = $request->input('manager_id');
        $managers->manager_name = $request->input('manager_name');
        $managers->manager_department = $request->input('manager_department');
        $managers->manager_role = $request->input('manager_role');
         
        $managers->save(); //persist the data
        return redirect()->route('managers.index')->with('info','managers Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $managers= Manager::findOrFail($id);
        $managers->delete();

        return redirect(route('managers.index'))->with('success', 'Show is successfully deleted');
    }
}
