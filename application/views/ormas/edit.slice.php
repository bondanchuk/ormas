@extends('base.main_base')
@section('content')
<!-- Breadcrumb Start -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Data Ormas</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{site_url('ormas/edit')}}">Edit Data Ormas</a>
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
                    <h5>Edit Data - [name]</h5> <!-- Urgent! Change name into ORMAS name -->
                    <a href="#" class="btn btn-warning white">Cancel</a>
                    <a href="#" class="btn btn-primary white">Simpan</a>
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
                                        <div class="col-lg-6">
                                            @php
                                            $tglDaftar = [
                                            'type'=>'text',
                                            'id'=>'tanggal-daftar',
                                            'name'=>'tanggal_daftar',
                                            'class'=>'form-control',
                                            ];

                                            $ormas = [
                                            'type'=>'text',
                                            'id'=>'nama-ormas',
                                            'name'=>'nama_ormas',
                                            'class'=>'form-control',
                                            ];

                                            $notaris = [
                                            'type'=>'text',
                                            'id'=>'nama-notaris',
                                            'name'=>'nama_notaris',
                                            'class'=>'form-control',
                                            ];

                                            $akta = [
                                            'type'=>'text',
                                            'id'=>'tanggal-akta',
                                            'name'=>'tanggal_akta',
                                            'class'=>'form-control',
                                            ];

                                            $permohonan = [
                                            'type'=>'text',
                                            'id'=>'tanggal-permohonan',
                                            'name'=>'tanggal_permohonan',
                                            'class'=>'form-control',
                                            ];

                                            $bidang = [
                                            'type'=>'text',
                                            'id'=>'bidang',
                                            'name'=>'bidang',
                                            'class'=>'form-control',
                                            ];

                                            $proker = [
                                            'type'=>'text',
                                            'id'=>'program-kerja',
                                            'name'=>'program_kerja',
                                            'class'=>'form-control',
                                            ];

                                            $alamatkantor = [
                                            'type'=>'text',
                                            'id'=>'alamat-kantor',
                                            'name'=>'alamat_kantor',
                                            'class'=>'form-control',
                                            ];

                                            $tempatPendirian = [
                                            'type'=>'text',
                                            'id'=>'tempat-pendirian',
                                            'name'=>'tempat_pendirian',
                                            'class'=>'form-control',
                                            ];

                                            $waktuPendirian = [
                                            'type'=>'text',
                                            'id'=>'waktu-pendirian',
                                            'name'=>'waktu_pendirian',
                                            'class'=>'form-control',
                                            ];

                                            $asasCiri = [
                                            'type'=>'text',
                                            'id'=>'asas-ciri',
                                            'name'=>'asas_ciri',
                                            'class'=>'form-control',
                                            ];

                                            $tujuanOrmas = [
                                            'id'=>'tujuan-ormas',
                                            'name'=>'tujuan_ormas',
                                            'class'=>'form-control',
                                            'rows' => '5'
                                            ];
                                            @endphp
                                            <div class="form-group" id="data_2">
                                                {{form_label('Tanggal Daftar')}}
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    {{form_input($tglDaftar)}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Nama Ormas')}}
                                                {{form_input($ormas)}}
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Nama Notaris')}}
                                                {{form_input($notaris)}}
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Nomor Tanggal Akta')}}
                                                {{form_input($akta)}}
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Nomor Surat Permohonan')}}
                                                {{form_input($permohonan)}}
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Bidang*')}}
                                                {{form_input($bidang)}}
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                {{form_label('Program Kerja')}}
                                                {{form_input($proker)}}
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Alamat kantor')}}
                                                {{form_input($alamatkantor)}}
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Tempat Pendirian')}}
                                                {{form_input($tempatPendirian)}}
                                            </div>
                                            <div class="form-group" id="data_1">
                                                {{form_label('Waktu Pendirian')}}
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    {{form_input($waktuPendirian)}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Asas Ciri Ormas')}}
                                                {{form_input($asasCiri)}}
                                            </div>
                                            <div class="form-group">
                                                {{form_label('Tujuan Ormas')}}
                                                {{form_textarea($tujuanOrmas)}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab #2  -->
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    @php
                                    $namaPendiri = [
                                    'type'=>'text',
                                    'id'=>'nama-pendiri',
                                    'name'=>'nama_pendiri',
                                    'class'=>'form-control',
                                    ];

                                    $NIK = [
                                    'type'=>'number',
                                    'id'=>'nik',
                                    'name'=>'nik',
                                    'class'=>'form-control',
                                    ];

                                    $agamaPendiri = [
                                    'id'=>'agama-pendiri',
                                    'name'=>'agama_pendiri',
                                    'class'=>'form-control',
                                    ];
                                    $optionsAgamaPendiri =[
                                    'Islam' => 'Islam',
                                    'Kristen'=> 'Kristen',
                                    'Katolik'=> 'Katolik',
                                    'Hindu'=> 'Hindu',
                                    'Buddha'=> 'Buddha',
                                    'Konghucu'=> 'Konghucu'
                                    ];

                                    $kewarganegaraan = [
                                    'id'=>'kewarganegaraan',
                                    'name'=>'kewarganegaraan',
                                    'class'=>'form-control',
                                    ];
                                    $optionsKw =[
                                    'WNA' => 'WNA',
                                    'WNI'=> 'WNI'
                                    ];

                                    $jk = [
                                    'id'=>'jenis-kelamin',
                                    'class'=>'form-control',
                                    ];
                                    $optionsJk =[
                                    'WNA' => 'Pria',
                                    'WNI'=> 'Wanita'
                                    ];

                                    $alamat = [
                                    'type'=>'text',
                                    'id'=>'alamat',
                                    'name'=>'alamat',
                                    'class'=>'form-control',
                                    ];

                                    $tempatLahir = [
                                    'type'=>'text',
                                    'id'=>'tempat-lahir',
                                    'name'=>'tempat_lahir',
                                    'class'=>'form-control',
                                    ];

                                    $tanggalLahir = [
                                    'type'=>'text',
                                    'id'=>'tanggal-lahir',
                                    'name'=>'tanggal_lahir',
                                    'class'=>'form-control',
                                    ];

                                    $statusPKW = [
                                    'id'=>'status-pkw',
                                    'id'=>'status_pkw',
                                    'class'=>'form-control',
                                    ];
                                    $optionsPkw =[
                                    'Kawin' => 'Kawin',
                                    'Belum Kawin'=> 'Belum Kawin'
                                    ];

                                    $noTelp = [
                                    'type'=>'text',
                                    'id'=>'no-telp',
                                    'name'=>'no_telp',
                                    'class'=>'form-control',
                                    ];

                                    $pekerjaan = [
                                    'type'=>'text',
                                    'id'=>'pekerjaan',
                                    'name'=>'pekerjaan',
                                    'class'=>'form-control',
                                    ];
                                    @endphp
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Nama Pendiri')}}
                                                    {{form_input($namaPendiri)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('NIK Pendiri')}}
                                                    {{form_input($NIK)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Agama')}}
                                                    {{form_dropdown('agama-pendiri', $optionsAgamaPendiri, '', $agamaPendiri)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Kewarganegaraan')}}
                                                    {{form_dropdown('kewarganegaraan', $optionsKw, '', $kewarganegaraan)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Jenis Kelamin')}}
                                                    {{form_dropdown('jenis-kelamin', $optionsJk, '', $jk)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Alamat')}}
                                                    {{form_input($alamat)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Tempat lahir')}}
                                                    {{form_input($tempatLahir)}}
                                                </div>
                                                <div class="form-group" id="data_3">
                                                    {{form_label('Tanggal lahir')}}
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        {{form_input($tanggalLahir)}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Status Perkawinan')}}
                                                    {{form_dropdown('status-pkw', $optionsPkw, '', $statusPKW)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('No. Telp')}}
                                                    {{form_input($noTelp)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Pekerjaan')}}
                                                    {{form_input($pekerjaan)}}
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!-- Tab #3  -->
                            <div role="tabpanel" id="tab-3" class="tab-pane">
                                <div class="panel-body">
                                    @php

                                    $namaPembina = [
                                    'type'=>'text',
                                    'id'=>'nama-pembina',
                                    'name'=>'nama_pembina',
                                    'class'=>'form-control',
                                    ];

                                    $namaPenasihat = [
                                    'type'=>'text',
                                    'id'=>'nama-penasihat',
                                    'name'=>'nama_penasihat',
                                    'class'=>'form-control',
                                    ];

                                    $namaKetua = [
                                    'type'=>'text',
                                    'id'=>'nama-ketua',
                                    'name'=>'nama_ketua',
                                    'class'=>'form-control',
                                    ];

                                    $nikKetua = [
                                    'type'=>'number',
                                    'id'=>'nik-ketua',
                                    'name'=>'nik_ketua',
                                    'class'=>'form-control',
                                    ];

                                    $agamaKetua = [
                                    'id'=>'agama-ketua',
                                    'id'=>'agama_ketua',
                                    'class'=>'form-control',
                                    ];
                                    $optionsAgama =[
                                    'Islam' => 'Islam',
                                    'Kristen'=> 'Kristen',
                                    'Katolik'=> 'Katolik',
                                    'Hindu'=> 'Hindu',
                                    'Buddha'=> 'Buddha',
                                    'Konghucu'=> 'Konghucu'
                                    ];

                                    $kwKetua = [
                                    'id'=>'kw-ketua',
                                    'id'=>'kw_ketua',
                                    'class'=>'form-control',
                                    ];
                                    $optionsKw =[
                                    'WNA' => 'WNA',
                                    'WNI'=> 'WNI'
                                    ];

                                    $tlKetua = [
                                    'type'=>'text',
                                    'id'=>'tempatlahir-ketua',
                                    'name'=>'tempatlahir_ketua',
                                    'class'=>'form-control',
                                    ];

                                    $tLahirKetua = [
                                    'type'=>'text',
                                    'id'=>'tanggallahir-ketua',
                                    'name'=>'tanggallahir_ketua',
                                    'class'=>'form-control',
                                    ];

                                    $statusPKWKetua = [
                                    'id'=>'status-pkw-ketua',
                                    'id'=>'status_pkw_ketua',
                                    'class'=>'form-control',
                                    ];
                                    $optionsPkwKetua =[
                                    'Kawin' => 'Kawin',
                                    'Belum Kawin'=> 'Belum Kawin'
                                    ];

                                    $jenisKelaminKetua = [
                                    'id'=>'jenis-kelamin-ketua',
                                    'id'=>'jenis_kelamin_ketua',
                                    'class'=>'form-control',
                                    ];
                                    $optionsJkKetua =[
                                    'Pria' => 'Pria',
                                    'Wanita'=> 'Wanita'
                                    ];

                                    $alamatKetua = [
                                    'type'=>'text',
                                    'id'=>'alamat-ketua',
                                    'name'=>'alamat_ketua',
                                    'class'=>'form-control',
                                    ];

                                    $noTelpKetua = [
                                    'type'=>'text',
                                    'id'=>'telp-ketua',
                                    'name'=>'telp_ketua',
                                    'class'=>'form-control',
                                    ];

                                    $sekretaris = [
                                    'type'=>'text',
                                    'id'=>'nama-sekretaris',
                                    'name'=>'nama_sekretaris',
                                    'class'=>'form-control',
                                    ];

                                    $bendahara = [
                                    'type'=>'text',
                                    'id'=>'nama-bendahara',
                                    'name'=>'nama_bendahara',
                                    'class'=>'form-control',
                                    ];

                                    $masaBakti = [
                                    'type'=>'text',
                                    'id'=>'masa-bakti',
                                    'name'=>'masa_bakti',
                                    'class'=>'form-control',
                                    ];

                                    $keputusan = [
                                    'type'=>'text',
                                    'id'=>'keputusan',
                                    'name'=>'keputusan',
                                    'class'=>'form-control',
                                    ];

                                    $cabang = [
                                    'type'=>'text',
                                    'id'=>'cabang',
                                    'name'=>'cabang',
                                    'class'=>'form-control',
                                    ];

                                    $npwp = [
                                    'type'=>'npwp',
                                    'name'=>'npwp',
                                    'class'=>'form-control',
                                    ];

                                    $keuangan = [
                                    'id'=>'keuangan',
                                    'name'=>'keuangan',
                                    'class'=>'form-control',
                                    ];
                                    $optionsKeuangan =[
                                    'LN' => 'Luar Negri',
                                    'DN'=> 'Dalam Negri'
                                    ];

                                    $hukum = [
                                    'id'=>'hukum',
                                    'name'=>'hukum',
                                    'class'=>'form-control',
                                    ];
                                    $optionsHukum =[
                                    '1' => 'Sudah',
                                    '0'=> 'Belum'
                                    ];

                                    $usaha = [
                                    'type'=>'text',
                                    'id'=>'usaha',
                                    'name'=>'usaha',
                                    'class'=>'form-control',
                                    ];

                                    @endphp
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Nama Pembina')}}
                                                    {{form_input($namaPembina)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Nama Penasihat')}}
                                                    {{form_input($namaPenasihat)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Nama Ketua')}}
                                                    {{form_input($namaKetua)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('NIK Ketua')}}
                                                    {{form_input($nikKetua)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Agama')}}
                                                    {{form_dropdown('agama-ketua', $optionsAgama, '', $agamaKetua)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Kewarganegaraan')}}
                                                    {{form_dropdown('kw-ketua', $optionsKw, '', $kwKetua)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Jenis Kelamin')}}
                                                    {{form_dropdown('jenis-kelamin-ketua', $optionsJkKetua, '', $jenisKelaminKetua)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Status Perkawinan')}}
                                                    {{form_dropdown('status-pkw-ketua', $optionsPkwKetua, '', $statusPKWKetua)}}
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Tempat lahir')}}
                                                    {{form_input($tlKetua)}}
                                                </div>
                                                <div class="form-group" id="data_4">
                                                    {{form_label('Tanggal lahir')}}
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        {{form_input($tLahirKetua)}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('No. Telp.')}}
                                                    {{form_input($noTelpKetua)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Alamat')}}
                                                    {{form_input($alamatKetua)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Nama Bendahara')}}
                                                    {{form_input($bendahara)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Nama Sekretaris')}}
                                                    {{form_input($sekretaris)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Keputusan Tertinggi Ormas')}}
                                                    {{form_input($keputusan)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Masa Bakti Kepengurusan')}}
                                                    {{form_input($masaBakti)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('NPWP')}}
                                                    {{form_input($npwp)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Cabang')}}
                                                    {{form_input($cabang)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{form_label('Berbadan Hukum')}}
                                                    {{form_dropdown('hukum', $optionsHukum, '', $hukum)}}
                                                </div>
                                                <div class="form-group">
                                                    {{form_label('Sumber Keuangan')}}
                                                    {{form_dropdown('keuangan', $optionsKeuangan, '', $keuangan)}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="form-group">
                                                    {{form_label('Usaha Ormas')}}
                                                    {{form_input($usaha)}}
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!-- Tab #4  -->
                            <div role="tabpanel" id="tab-4" class="tab-pane">
                                <div class="panel-body">
                                    {{form_open('',['id'=>'form-verif-01'])}}
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <!-- @php
                                            $id_ormas = [
                                            'type'=>'hidden',
                                            'id'=>'id-ormas',
                                            'name'=>'id_ormas',
                                            'class'=>'form-control',
                                            'value'=> $ID,
                                            'required'=>'required'
                                            ];

                                            @endphp
                                            {{form_input($id_ormas)}} -->
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Surat Permohonan')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_surat_permohonan}}" data-judul="{{'Surat Permohonan'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Lambang Ormas')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_lambang_logo}}" data-judul="{{'Lambang Ormas'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Bendera Ormas')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_bendera_ormas}}" data-judul="{{'Bendera Ormas'}}" data-toggle="modal">Lihat File</a> -->
                                            
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Akta')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_akta}}" data-judul="{{'Akta'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('AD ART')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_ad_art}}" data-judul="{{'AD ART'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('SK Pengurus')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_skpengurus}}" data-judul="{{'SK Pengurus'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Program Ormas')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_program_ormas}}" data-judul="{{'Program Ormas'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('SK Domisili')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_sk_domisili}}" data-judul="{{'SK Domisili'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Fotocopy KTP Ketua')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_fc_ktpketua}}" data-judul="{{'Fotocopy KTP Ketua'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Fotocopy KTP Sekretaris')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_fc_ktpsekretaris}}" data-judul="{{'Fotocopy KTP Sekretaris'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Fotocopy KTP Bendahara')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_fc_ktpbendahara}}" data-judul="{{'Fotocopy KTP Bendahara'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('NPWP')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_npwp}}" data-judul="{{'NPWP'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Foto Sekretariat')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_fotosekretariat}}" data-judul="{{'Foto Sekretariat'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Surat Pernyataan')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_surat_pernyataan}}" data-judul="{{'Surat Pernyataan'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('SKT')}} <br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_skt}}" data-judul="{{'SKT'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Daftar Isian')}}<br>
                                                <!-- <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_daftarisian}}" data-judul="{{'Daftar Isian'}}" data-toggle="modal">Lihat File</a> -->
                                                <a href="#" class="open btn btn-primary">Lihat File</a>
                                                <a href="#" class="open btn btn-info">Upload File Baru</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{form_close()}}
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
    $(document).ready(function() {
        $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

        $('#data_2 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

        $('#data_3 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

        $('#data_4 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true


        });
        $("#waktu-pendirian").datepicker().datepicker("setDate", new Date());
        $("#tanggal-daftar").datepicker().datepicker("setDate", new Date());
        $("#tanggal-lahir").datepicker().datepicker("setDate", new Date());
        $("#tanggallahir-ketua").datepicker().datepicker("setDate", new Date());
    });
</script>
@endsection