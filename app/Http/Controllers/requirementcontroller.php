<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\requirement;
use DB;
use AUTH;
use Hash;

class requirementcontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminaccess',['only'=>['edit','destroy']]);//Users cannot route through these function.
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $requirement = new requirement;

        $requirement->os=$request->input('os');
        $requirement->ram=$request->input('ram');
        $requirement->processor=$request->input('processor');
        $requirement->graphics=$request->input('graphics');
        $requirement->network=$request->input('network');
        $requirement->product_id=$request->input('product_id');
        
        $requirement->Save();

       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requirement = DB::table('requirements')->where('id', $id)->first();
        $site='Requirement Edit';
        return view('admincontrol.requirement.arequirementedit')->with('requirement',$requirement)->with('site',$site);
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
        $this->validate($request,[
            'os'=>'required',
            'ram'=>'required',
            'processor'=>'required',
            'graphics'=>'required',
            'network'=>'required'
        ]);
        
        $requirement = requirement::find($id);

        $requirement->os=$request->input('os');
        $requirement->ram=$request->input('ram');
        $requirement->processor=$request->input('processor');
        $requirement->graphics=$request->input('graphics');
        $requirement->network=$request->input('network');
        
        $requirement->Save();

        return redirect('/arequirement')->with('success',' Requirement is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
