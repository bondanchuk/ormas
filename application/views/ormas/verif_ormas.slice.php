@extends('base.main_base')
@section('content')
<!-- Breadcrumb Start -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Data Ormas</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{site_url('pejabat')}}">Verifikasi Data Ormas</a>
            </li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End-->

<!-- Content -->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Verifikasi Data - [name]</h5> <!-- Urgent! Change name into ORMAS name -->
                </div>
                <div class="ibox-content">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1">Data Ormas</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-2">Informasi Pendiri</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-3">Informasi Ketua</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-4">Data Pendukung</a></li>
                        </ul>
                        <div class="tab-content">
                    <!-- Tab #1  -->
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <!-- Urgent! belum load DB -->
                                        <!-- Data Ormas -->
                                        @php
                                        $tgl_daftar_ormas = [
                                        'type'=>'text',
                                        'id'=>'tanggal_daftar',
                                        'name'=>'tanggal_daftar',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $nama_ormas = [
                                        'type'=>'text',
                                        'id'=>'nama_ormas',
                                        'name'=>'nama_ormas',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $nama_notaris = [
                                        'type'=>'text',
                                        'id'=>'nama_notaris',
                                        'name'=>'nama_notaris',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $tgl_akta = [
                                        'type'=>'text',
                                        'id'=>'tgl_akta',
                                        'name'=>'tgl_akta',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $srt_permohonan = [
                                        'type'=>'text',
                                        'id'=>'srt_permohonan',
                                        'name'=>'srt_permohonan',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];


                                        $bidang_ormas = [
                                        'type'=>'text',
                                        'id'=>'bidang_ormas',
                                        'name'=>'bidang_ormas',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $program_kerja = [
                                        'type'=>'text',
                                        'id'=>'program_kerja',
                                        'name'=>'program_kerja',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $alamat_kantor = [
                                        'type'=>'text',
                                        'id'=>'alamat_kantor',
                                        'name'=>'alamat_kantor',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $tempat_pendirian = [
                                        'type'=>'text',
                                        'id'=>'tempat_pendirian',
                                        'name'=>'tempat_pendirian',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $waktu_pendirian = [
                                        'type'=>'text',
                                        'id'=>'waktu_pendirian',
                                        'name'=>'waktu_pendirian',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $asas_ciri_ormas = [
                                        'type'=>'text',
                                        'id'=>'asas_ciri_ormas',
                                        'name'=>'asas_ciri_ormas',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $tujuan_ormas = [
                                        'type'=>'text',
                                        'id'=>'tujuan_ormas',
                                        'name'=>'tujuan_ormas',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        @endphp
                                        <!-- Data ormas End -->

                                        <!-- Tampilan Data Ormas -->
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Tanggal Daftar')}}
                                                    {{form_input($tgl_daftar_ormas)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nama Ormas')}}
                                                    {{form_input($nama_ormas)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nama Notaris')}}
                                                    {{form_input($nama_notaris)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nomor Tanggal Akta')}}
                                                    {{form_input($tgl_akta)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('No Surat Permohonan')}}
                                                    {{form_input($srt_permohonan)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Bidang')}}
                                                    {{form_input($bidang_ormas)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Program Kerja')}}
                                                    {{form_input($program_kerja)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Alamat Kantor')}}
                                                    {{form_input($alamat_kantor)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Tempat Pendirian')}}
                                                    {{form_input($tempat_pendirian)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Waktu Pendirian')}}
                                                    {{form_input($waktu_pendirian)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Asas & Ciri Ormas')}}
                                                    {{form_input($asas_ciri_ormas)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Tujuan Ormas')}}
                                                    {{form_input($tujuan_ormas)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tampilan Data Ormas End  -->
                                    </div>
                                </div>
                            </div>
                    <!-- Tab #2  -->
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                <div class="row">
                                        <!-- Urgent! belum load DB -->
                                        <!-- Data Ormas -->
                                        @php
                                        $nama_pendiri = [
                                        'type'=>'text',
                                        'id'=>'nama_pendiri',
                                        'name'=>'nama_pendiri',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $nik_pendiri = [
                                        'type'=>'text',
                                        'id'=>'nik_pendiri',
                                        'name'=>'nik_pendiri',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $jenis_kelamin = [
                                        'type'=>'text',
                                        'id'=>'jenis_kelamin',
                                        'name'=>'jenis_kelamin',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $tempat_lahir = [
                                        'type'=>'text',
                                        'id'=>'tempat_lahir',
                                        'name'=>'tempat_lahir',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $tgl_lahir = [
                                        'type'=>'text',
                                        'id'=>'tanggal_lahir',
                                        'name'=>'tanggal_lahir',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];


                                        $alamat_pendiri = [
                                        'type'=>'text',
                                        'id'=>'alamat_pendiri',
                                        'name'=>'alamat_pendiri',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $status_pendiri = [
                                        'type'=>'text',
                                        'id'=>'status_pendiri',
                                        'name'=>'status_pendiri',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $telp_pendiri = [
                                        'type'=>'text',
                                        'id'=>'telp_pendiri',
                                        'name'=>'telp_pendiri',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $agama_pendiri = [
                                        'type'=>'text',
                                        'id'=>'agama_pendiri',
                                        'name'=>'agama_pendiri',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $kewarganegaraan_pendiri = [
                                        'type'=>'text',
                                        'id'=>'kewarganegaraan_pendiri',
                                        'name'=>'kewarganegaraan_pendiri',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $pekerjaan_pendiri = [
                                        'type'=>'text',
                                        'id'=>'pekerjaan_pendiri',
                                        'name'=>'pekerjaan_pendiri',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        @endphp
                                        <!-- Data ormas End -->

                                        <!-- Tampilan Data Ormas -->
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nama Pendiri')}}
                                                    {{form_input($nama_pendiri)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('NIK Pendiri')}}
                                                    {{form_input($nik_pendiri)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Jenis Kelamin')}}
                                                    {{form_input($jenis_kelamin)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Tempat Lahir')}}
                                                    {{form_input($tempat_lahir)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Tanggal Lahir')}}
                                                    {{form_input($tgl_lahir)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Alamat')}}
                                                    {{form_input($alamat_pendiri)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Status Perkawinan')}}
                                                    {{form_input($status_pendiri)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('No. Telp')}}
                                                    {{form_input($telp_pendiri)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Agama')}}
                                                    {{form_input($agama_pendiri)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Kewarganegaraan')}}
                                                    {{form_input($kewarganegaraan_pendiri)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Pekerjaan')}}
                                                    {{form_input($pekerjaan_pendiri)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tampilan Data Ormas End  -->
                                    </div>
                                </div>
                            </div>
                    <!-- Tab #3  -->
                        <div role="tabpanel" id="tab-3" class="tab-pane">
                            <div class="panel-body">
                            <div class="row">
                                        <!-- Urgent! belum load DB -->
                                        <!-- Data Ormas -->
                                        @php
                                        $nama_pembina = [
                                        'type'=>'text',
                                        'id'=>'nama_pembina',
                                        'name'=>'nama_pembina',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $nama_penasihat = [
                                        'type'=>'text',
                                        'id'=>'nama_penasihat',
                                        'name'=>'nama_penasihat',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $nama_ketua = [
                                        'type'=>'text',
                                        'id'=>'nama_ketua',
                                        'name'=>'nama_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $nik_ketua = [
                                        'type'=>'text',
                                        'id'=>'nik_ketua',
                                        'name'=>'nik_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $tempat_lahir_ketua = [
                                        'type'=>'text',
                                        'id'=>'tempat_lahir_ketua',
                                        'name'=>'tempat_lahir_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];


                                        $tgl_lahir_ketua = [
                                        'type'=>'text',
                                        'id'=>'tgl_lahir_ketua',
                                        'name'=>'tgl_lahir_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $alamat_ketua = [
                                        'type'=>'text',
                                        'id'=>'alamat_ketua',
                                        'name'=>'alamat_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $status_ketua = [
                                        'type'=>'text',
                                        'id'=>'status_ketua',
                                        'name'=>'status_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $telp_ketua = [
                                        'type'=>'text',
                                        'id'=>'telp_ketua',
                                        'name'=>'telp_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $agama_ketua = [
                                        'type'=>'text',
                                        'id'=>'agama_ketua',
                                        'name'=>'agama_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $kewarganegaraan_ketua = [
                                        'type'=>'text',
                                        'id'=>'kewarganegaraan_ketua',
                                        'name'=>'kewarganegaraan_ketua',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $nama_sekretaris = [
                                        'type'=>'text',
                                        'id'=>'nama_sekretaris',
                                        'name'=>'nama_sekretaris',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $nama_bendahara = [
                                        'type'=>'text',
                                        'id'=>'nama_bendahara',
                                        'name'=>'nama_bendahara',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $keputusan_tertinggi = [
                                        'type'=>'text',
                                        'id'=>'keputusan_tertinggi',
                                        'name'=>'keputusan_tertinggi',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $masa_bakti = [
                                        'type'=>'text',
                                        'id'=>'masa_bakti',
                                        'name'=>'masa_bakti',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $badan_hukum = [
                                        'type'=>'text',
                                        'id'=>'badan_hukum',
                                        'name'=>'badan_hukum',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $cabang = [
                                        'type'=>'text',
                                        'id'=>'cabang',
                                        'name'=>'cabang',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $npwp = [
                                        'type'=>'text',
                                        'id'=>'npwp',
                                        'name'=>'npwp',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $usaha_ormas = [
                                        'type'=>'text',
                                        'id'=>'usaha_ormas',
                                        'name'=>'usaha_ormas',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        $sumber_keuangan = [
                                        'type'=>'text',
                                        'id'=>'sumber_keuangan',
                                        'name'=>'sumber_keuangan',
                                        'class'=>'form-control',
                                        'disabled'=>'disabled',
                                        ];

                                        @endphp
                                        <!-- Data ormas End -->

                                        <!-- Tampilan Data Ormas -->
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nama Pembina')}}
                                                    {{form_input($nama_pembina)}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nama Penasihat')}}
                                                    {{form_input($nama_penasihat)}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nama Ketua')}}
                                                    {{form_input($nama_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('NIK Ketua')}}
                                                    {{form_input($nik_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Tempat Lahir Ketua')}}
                                                    {{form_input($tempat_lahir_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Tanggal Lahir Ketua')}}
                                                    {{form_input($tgl_lahir_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Alamat Ketua')}}
                                                    {{form_input($alamat_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Status Perkawinan Ketua')}}
                                                    {{form_input($status_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('No Telp Ketua')}}
                                                    {{form_input($telp_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Agama Ketua')}}
                                                    {{form_input($agama_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Kewarganegaraan Ketua')}}
                                                    {{form_input($kewarganegaraan_ketua)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nama Sekretaris')}}
                                                    {{form_input($nama_sekretaris)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Nama Bendahara')}}
                                                    {{form_input($nama_bendahara)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Keputusan Tertinggi Ormas')}}
                                                    {{form_input($keputusan_tertinggi)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Masa Bakti Kepengurusan')}}
                                                    {{form_input($masa_bakti)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Sudah Berbadan Hukum')}}
                                                    {{form_input($badan_hukum)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Cabang')}}
                                                    {{form_input($cabang)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('NPWP')}}
                                                    {{form_input($npwp)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Usaha Ormas')}}
                                                    {{form_input($usaha_ormas)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-9 col-md-10 col-lg-10 b-r">
                                                    {{form_label('Sumber Keuangan')}}
                                                    {{form_input($sumber_keuangan)}}
                                                </div>
                                                <div class="col-3 col-lg-2 text-center">
                                                    <label class='form-control-plaintext'>Verifikasi</label>
                                                    <input type="checkbox" class="js-switch" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tampilan Data Ormas End  -->
                                    </div>
                            </div>
                        </div>
                    <!-- Tab #4  -->
                        <div role="tabpanel" id="tab-4" class="tab-pane">
                            <div class="panel-body">
                                <strong>MUHMUH</strong>

                                <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                    sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
@section('js')
<script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });
</script>


@endsection