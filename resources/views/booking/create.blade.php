@extends('layouts.main')

@section('header')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">TEMPAHAN</h2>
               <!--  <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Forms</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Form Layouts</a>
                        </li>
                    </ol>
                </div> -->
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-right">
            <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content-body">
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Borang Tempahan</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('booking') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Nama Mesyuarat</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="nama_mesyuarat" placeholder="Nama Mesyuarat" />
                                    </div>                                           
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Nama Urusetia</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="nama_urusetia" placeholder="Nama Urusetia" />
                                    </div>                                 
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">IC Urusetia</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="ic_urusetia" placeholder="IC Urusetia" />
                                    </div>    
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label" for="fp-date-time">Tarikh & Masa Mula</label>
                                        <input type="text" id="fp-date-time" class="form-control flatpickr-date-time" placeholder="YYYY-MM-DD HH:MM" name="tarikh_mula" />
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label class="form-label" for="fp-date-time">Tarikh & Masa Akhir</label>
                                        <input type="text" id="fp-date-time" class="form-control flatpickr-date-time" placeholder="YYYY-MM-DD HH:MM" name="tarikh_akhir" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Nama Pegawai</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="nama_pegawai" placeholder="Nama Pegawai" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">Bilangan Pegawai Agensi</label>
                                        <div class="input-group">
                                        <input type="number" class="touchspin-icon" value="0" name="bil_pegawai_agensi" />
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">Bilangan Pegawai Luar</label>
                                        <div class="input-group">
                                        <input type="number" class="touchspin-icon" value="0" name="bil_pegawai_luar" />
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Catatan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Catatan" name="catatan"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                    <button type="reset" class="btn btn-outline-secondary">Padam</button>
                                </div>
                            </div>  
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('customJS')

@endsection