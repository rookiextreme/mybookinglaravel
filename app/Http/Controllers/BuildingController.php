<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use Illuminate\Support\Facades\DB;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Building::all();
 
        return view('building.index', ['buildings' => $model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('building.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $model = new Building;
        $model->name=$name;
        $model->save();
        return redirect()->action([BuildingController::class, 'index']);
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
        $model = Building::find($id);
        return view('building.edit', [
            'id' => $id,
            'building' => $model
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $model = Building::find($request->input('building_id'));

        $model = Building::where('id',$request->input('building_id'))->first();
 
        $name = $request->input('name');

        $model->name = $name ;
         
        $model->save();

        return redirect()->action([BuildingController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Building::where('id',$id)->delete();
 
        return redirect()->action([BuildingController::class, 'index']);
    }
}
