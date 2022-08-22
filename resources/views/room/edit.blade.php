@extends('layouts.main')

@section('header')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">BILIK</h2>
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
                        <h4 class="card-title">Kemaskini Bilik</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ Request::root()}}/room/update" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                   <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Nama Bilik</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="Nama Bilik" value="{{$room->name}}" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">Aras / Tingkat</label>
                                        <input type="number" id="email-id-vertical" class="form-control" name="aras" placeholder="Aras / Tingkat" value="{{$room->aras}}" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Kapasiti Bilik</label>
                                        <input type="number" id="contact-info-vertical" class="form-control" name="kapasiti" placeholder="Kapasiti Bilik" value="{{$room->kapasiti}}" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Fasiliti / Kemudahan</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="kemudahan" placeholder="Fasiliti / Kemudahan" value="{{$room->kemudahan}}" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Penerangan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="penerangan" rows="3" placeholder="Penerangan" value="{{$room->penerangan}}"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                    <button type="reset" class="btn btn-outline-secondary">Padam</button>
                                </div>
                            </div>
                            <input type="hidden" name="room_id" value="{{$id}}">
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