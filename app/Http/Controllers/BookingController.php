<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Booking::all();
 
        return view('booking.index', ['bookings' => $model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_mesyuarat = $request->input('nama_mesyuarat');
        $nama_urusetia = $request->input('nama_urusetia');
        $ic_urusetia = $request->input('ic_urusetia');
        $nama_pegawai = $request->input('nama_pegawai');
        $tarikh_mula = $request->input('tarikh_mula');
        $tarikh_akhir = $request->input('tarikh_akhir');
        $bil_pegawai_luar = $request->input('bil_pegawai_luar');
        $bil_pegawai_agensi = $request->input('bil_pegawai_agensi');
        $catatan = $request->input('catatan');

        $model = new Booking;
        $model->nama_mesyuarat=$nama_mesyuarat;
        $model->nama_urusetia=$nama_urusetia;
        $model->ic_urusetia=$ic_urusetia;
        $model->nama_pegawai=$nama_pegawai;
        $model->bil_pegawai_agensi=$bil_pegawai_agensi;
        $model->bil_pegawai_luar=$bil_pegawai_luar;
        $model->tarikh_mula=$tarikh_mula;
        $model->tarikh_akhir=$tarikh_akhir;
        $model->catatan=$catatan;
        $model->delete_id=0;
        $model->flag=0;
        $model->save();

        return redirect()->action([BookingController::class, 'index']);
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
        $model = Booking::find($id);
        return view('booking.edit', [
            'id' => $id,
            'booking' => $model
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
        // $model = Booking::find($request->input('building_id'));

        $model = Booking::where('id',$request->input('booking_id'))->first();
 
        $nama_mesyuarat = $request->input('nama_mesyuarat');
        $nama_urusetia = $request->input('nama_urusetia');
        $ic_urusetia = $request->input('ic_urusetia');
        $nama_pegawai = $request->input('nama_pegawai');
        $tarikh_mula = $request->input('tarikh_mula');
        $tarikh_akhir = $request->input('tarikh_akhir');
        $bil_pegawai_luar = $request->input('bil_pegawai_luar');
        $bil_pegawai_agensi = $request->input('bil_pegawai_agensi');
        $catatan = $request->input('catatan');

        $model->nama_mesyuarat=$nama_mesyuarat;
        $model->nama_urusetia=$nama_urusetia;
        $model->ic_urusetia=$ic_urusetia;
        $model->nama_pegawai=$nama_pegawai;
        $model->bil_pegawai_agensi=$bil_pegawai_agensi;
        $model->bil_pegawai_luar=$bil_pegawai_luar;
        $model->tarikh_mula=$tarikh_mula;
        $model->tarikh_akhir=$tarikh_akhir;
        $model->catatan=$catatan;
        $model->delete_id=0;
        $model->flag=0;
         
        $model->save();

        return redirect()->action([BookingController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Booking::where('id',$id)->delete();
 
        return redirect()->action([BookingController::class, 'index']);
    }
}