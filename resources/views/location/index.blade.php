@extends('layouts.main')

@section('header')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">SENARAI LOKASI</h2>
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
    <div class="row">
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                <div class="alert-body">
                    <strong>Info:</strong> This layout can be useful for getting started with empty content section. Please check
                    the&nbsp;<a class="text-primary" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-layout-empty.html" target="_blank">Layout empty documentation</a>&nbsp; for more details.
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection

@section('table')
<tr>
    <th>Id</th>
    <th>Nama Lokasi</th>
    <th>Ditambah Pada</th>
    <th>Dikemaskini Pada</th>
    <th>Tindakan</th>
</tr>
@foreach ($locations as $location)
 <tr>
    <td>{{ $location->id }}</td>
    <td>{{ $location->name }}</td>
    <td>{{ $location->created_at }}</td>
    <td>{{ $location->updated_at }}</td>
    <td>
        <a href="{{ Request::root()}}/location/edit/{{$location->id}}">
            <button type="button" class="btn btn-primary">Kemaskini</button>
        </a>
        <a href="{{ Request::root()}}/location/delete/{{$location->id}}">
            <button type="button" class="btn btn-danger">Padam</button>
        </a>
    </td>
</tr>
@endforeach
@endsection

@section('customJS')

@endsection