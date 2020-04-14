<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workers;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Workers::all();
       return view('workers.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees =array(
            'employee_id'=>$request->employee_id,
            'employee_name'=>$request->employee_name,
            'employee_email'=>$request->employee_email,
            'employee_phone'=>$request->employee_phone,
            'employee_department'=>$request->employee_department
        );

        Workers::create($employees);

        return redirect()->route('workers.index')->with('sucess','emloyee information inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = Workers::findOrFail($id);
        return view('workers.show',compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees =Workers::findOrFail($id);
        return view('workers.edit',compact('employees'));
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
            'employee_id'=>'required',
            'employee_name'=>'required',
            'employee_email'=>'required',
            'employee_phone'=>'required',
            'employee_department'=>'required',
             
        ]);

        $employee = Workers::find($id);
        $employee->employee_id = $request->input('employee_id');
        $employee->employee_name = $request->input('employee_name');
        $employee->employee_email = $request->input('employee_email');
        $employee->employee_phone = $request->input('employee_phone');
        $employee->employee_department = $request->input('employee_department');
         
         
        $employee->save(); //persist the data
        return redirect()->route('workers.index')->with('info','Employee Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $employee= Workers::findOrFail($id);
        $employee->delete();

        return redirect(route('workers.index'))->with('success', 'Show is successfully deleted');
    }
}
