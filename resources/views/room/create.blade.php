@extends('layouts.main')

@section('content')
<div class="content-body">
	<section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Bilik</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('room') }}" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Nama Bilik</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Nama Bilik" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">Aras / Tingkat</label>
                                        <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Aras / Tingkat" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">Kapasiti Bilik</label>
                                        <input type="number" id="contact-info-vertical" class="form-control" name="contact" placeholder="Kapasiti Bilik" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Fasiliti / Kemudahan</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Fasiliti / Kemudahan" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Penerangan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Penerangan"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Status</label>
                                        <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="demo-inline-spacing">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked />
                                                            <label class="form-check-label" for="inlineRadio1">Aktif</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                            <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="col-12">
                                    <button type="reset" class="btn btn-primary me-1">Simpan</button>
                                    <button type="reset" class="btn btn-outline-secondary">Padam</button>
                                </div>
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