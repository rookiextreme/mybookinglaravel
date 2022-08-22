<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Room::all();
 
        return view('room.index', ['rooms' => $model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.create');
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
        $aras = $request->input('aras');
        $kapasiti = $request->input('kapasiti');
        $kemudahan = $request->input('kemudahan');
        $penerangan = $request->input('penerangan');

        $model = new Room;
        $model->name=$name;
        $model->aras=$aras;
        $model->kapasiti=$kapasiti;
        $model->kemudahan=$kemudahan;
        $model->penerangan=$penerangan;
        $model->delete_id=0;
        $model->fllag=0;
        $model->save();

        return redirect()->action([RoomController::class, 'index']);
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
        $model = Room::find($id);
        return view('room.edit', [
            'id' => $id,
            'room' => $model
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
        // $model = Room::find($request->input('building_id'));

        $model = Room::where('id',$request->input('room_id'))->first();
 
        $name = $request->input('name');
        $aras = $request->input('aras');
        $kapasiti = $request->input('kapasiti');
        $kemudahan = $request->input('kemudahan');
        $penerangan = $request->input('penerangan');

        $model->name = $name ;
        $model->aras = $aras ;
        $model->kapasiti = $kapasiti ;
        $model->kemudahan = $kemudahan ;
        $model->penerangan = $penerangan ;         
        $model->save();

        return redirect()->action([RoomController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Room::where('id',$id)->delete();
 
        return redirect()->action([RoomController::class, 'index']);
    }
}