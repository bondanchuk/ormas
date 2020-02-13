@extends('base.main_base')
@section('content')


<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox">
				<div class="ibox-title">
					<h5>Pendaftaran</h5>
				</div>
				<div class="ibox-content">
			<!-- Field Data Ormas -->
					<h2>
						Form Pendaftaran Ormas
					</h2>
					{{form_open_multipart('register/add', ['id' => 'form', 'class' => 'wizard-big'])}}
					<h1>Data Ormas</h1>
					<fieldset>
						<h2>Informasi Ormas</h2>
						<div class="row">
							<div class="col-12 col-lg-6">
								@php
								$tglDaftar = [
								'type'=>'text',
								'id'=>'tanggal-daftar',
								'name'=>'tanggal_daftar',
								'class'=>'form-control',
								'required'=>'required',
								];

								$ormas = [
								'type'=>'text',
								'id'=>'nama-ormas',
								'name'=>'nama_ormas',
								'class'=>'form-control',
								'required'=>'required'
								];

								$notaris = [
								'type'=>'text',
								'id'=>'nama-notaris',
								'name'=>'nama_notaris',
								'class'=>'form-control',
								'required'=>'required'
								];

								$akta = [
								'type'=>'text',
								'id'=>'tanggal-akta',
								'name'=>'tanggal_akta',
								'class'=>'form-control',
								'required'=>'required'
								];

								$permohonan = [
								'type'=>'text',
								'id'=>'tanggal-permohonan',
								'name'=>'tanggal_permohonan',
								'class'=>'form-control',
								'required'=>'required'
								];

								$bidang = [
								'type'=>'text',
								'id'=>'bidang',
								'name'=>'bidang',
								'class'=>'form-control',
								'required'=>'required'
								];

								$proker = [
								'type'=>'text',
								'id'=>'program-kerja',
								'name'=>'program_kerja',
								'class'=>'form-control',
								'required'=>'required'
								];

								$alamatkantor = [
								'type'=>'text',
								'id'=>'alamat-kantor',
								'name'=>'alamat_kantor',
								'class'=>'form-control',
								'required'=>'required'
								];

								$tempatPendirian = [
								'type'=>'text',
								'id'=>'tempat-pendirian',
								'name'=>'tempat_pendirian',
								'class'=>'form-control',
								'required'=>'required'
								];

								$waktuPendirian = [
								'type'=>'text',
								'id'=>'waktu-pendirian',
								'name'=>'waktu_pendirian',
								'class'=>'form-control',
								'required'=>'required'
								];

								$asasCiri = [
								'type'=>'text',
								'id'=>'asas-ciri',
								'name'=>'asas_ciri',
								'class'=>'form-control',
								'required'=>'required'
								];

								$tujuanOrmas = [
								'id'=>'tujuan-ormas',
								'name'=>'tujuan_ormas',
								'class'=>'form-control',
								'required'=>'required',
								'rows' => '5'
								];
								@endphp
								<div class="form-group" id="data_2">
									{{form_label('Tanggal Daftar*')}}
									<div class="input-group date">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										{{form_input($tglDaftar)}}
									</div>
								</div>
								<div class="form-group">
									{{form_label('Nama Ormas*')}}
									{{form_input($ormas)}}
								</div>
								<div class="form-group">
									{{form_label('Nama Notaris*')}}
									{{form_input($notaris)}}
								</div>
								<div class="form-group">
									{{form_label('Nomor Tanggal Akta*')}}
									{{form_input($akta)}}
								</div>
								<div class="form-group">
									{{form_label('Nomor Surat Permohonan*')}}
									{{form_input($permohonan)}}
								</div>
								<div class="form-group">
									{{form_label('Bidang*')}}
									{{form_input($bidang)}}
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="form-group">
									{{form_label('Program Kerja*')}}
									{{form_input($proker)}}
								</div>
								<div class="form-group">
									{{form_label('Alamat kantor*')}}
									{{form_input($alamatkantor)}}
								</div>
								<div class="form-group">
									{{form_label('Tempat Pendirian*')}}
									{{form_input($tempatPendirian)}}
								</div>
								<div class="form-group" id="data_1">
									{{form_label('Waktu Pendirian*')}}
									<div class="input-group date">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										{{form_input($waktuPendirian)}}
									</div>
								</div>
								<div class="form-group">
									{{form_label('Asas Ciri Ormas*')}}
									{{form_input($asasCiri)}}
								</div>
								<div class="form-group">
									{{form_label('Tujuan Ormas*')}}
									{{form_textarea($tujuanOrmas)}}
								</div>
							</div>
						</div>
					</fieldset>
			<!-- Field Data Ormas End  -->			
			<!-- Field Data Pendiri -->
					@php
					$namaPendiri = [
					'type'=>'text',
					'id'=>'nama-pendiri',
					'name'=>'nama_pendiri',
					'class'=>'form-control',
					'required'=>'required'
					];

					$NIK = [
					'type'=>'number',
					'id'=>'nik',
					'name'=>'nik',
					'class'=>'form-control',
					'required'=>'required'
					];

					$agamaPendiri = [
					'id'=>'agama-pendiri',
					'name'=>'agama_pendiri',
					'class'=>'form-control',
					'required'=>'required'
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
					'required'=>'required'
					];
					$optionsKw =[
					'WNA' => 'WNA',
					'WNI'=> 'WNI'
					];

					$jk = [
					'id'=>'jenis-kelamin',
					'class'=>'form-control',
					'required'=>'required'
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
					'required'=>'required'
					];

					$tempatLahir = [
					'type'=>'text',
					'id'=>'tempat-lahir',
					'name'=>'tempat_lahir',
					'class'=>'form-control',
					'required'=>'required'
					];

					$tanggalLahir = [
					'type'=>'text',
					'id'=>'tanggal-lahir',
					'name'=>'tanggal_lahir',
					'class'=>'form-control',
					'required'=>'required'
					];

					$statusPKW = [
					'id'=>'status-pkw',
					'id'=>'status_pkw',
					'class'=>'form-control',
					'required'=>'required'
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
					'required'=>'required'
					];

					$pekerjaan = [
					'type'=>'text',
					'id'=>'pekerjaan',
					'name'=>'pekerjaan',
					'class'=>'form-control',
					'required'=>'required'
					];


					@endphp
					<h1>Data Pendiri</h1>
					<fieldset>
						<h2>Informasi Pendiri</h2>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Nama Pendiri*')}}
									{{form_input($namaPendiri)}}
								</div>
								<div class="form-group">
									{{form_label('NIK Pendiri*')}}
									{{form_input($NIK)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Agama*')}}
									{{form_dropdown('agama-pendiri', $optionsAgamaPendiri, '', $agamaPendiri)}}
								</div>
								<div class="form-group">
									{{form_label('Kewarganegaraan*')}}
									{{form_dropdown('kewarganegaraan', $optionsKw, '', $kewarganegaraan)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Jenis Kelamin*')}}
									{{form_dropdown('jenis-kelamin', $optionsJk, '', $jk)}}
								</div>
								<div class="form-group">
									{{form_label('Alamat*')}}
									{{form_input($alamat)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Tempat lahir*')}}
									{{form_input($tempatLahir)}}
								</div>
								<div class="form-group" id="data_3">
									{{form_label('Tanggal lahir*')}}
									<div class="input-group date">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										{{form_input($tanggalLahir)}}
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Status Perkawinan*')}}
									{{form_dropdown('status-pkw', $optionsPkw, '', $statusPKW)}}
								</div>
								<div class="form-group">
									{{form_label('No. Telp*')}}
									{{form_input($noTelp)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Pekerjaan*')}}
									{{form_input($pekerjaan)}}
								</div>
							</div>
						</div>
					</fieldset>
			<!-- Field Data Pendiri End  -->
			<!-- Field Data Ketua  -->
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
					'required'=>'required'
					];

					$nikKetua = [
					'type'=>'number',
					'id'=>'nik-ketua',
					'name'=>'nik_ketua',
					'class'=>'form-control',
					'required'=>'required'
					];

					$agamaKetua = [
					'id'=>'agama-ketua',
					'id'=>'agama_ketua',
					'class'=>'form-control',
					'required'=>'required'
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
					'required'=>'required'
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
					'required'=>'required'
					];

					$tLahirKetua = [
					'type'=>'text',
					'id'=>'tanggallahir-ketua',
					'name'=>'tanggallahir_ketua',
					'class'=>'form-control',
					'required'=>'required'
					];


					$statusPKWKetua = [
					'id'=>'status-pkw-ketua',
					'id'=>'status_pkw_ketua',
					'class'=>'form-control',
					'required'=>'required'
					];
					$optionsPkwKetua =[
					'Kawin' => 'Kawin',
					'Belum Kawin'=> 'Belum Kawin'
					];

					$jenisKelaminKetua = [
					'id'=>'jenis-kelamin-ketua',
					'id'=>'jenis_kelamin_ketua',
					'class'=>'form-control',
					'required'=>'required'
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
					'required'=>'required'
					];

					$noTelpKetua = [
					'type'=>'text',
					'id'=>'telp-ketua',
					'name'=>'telp_ketua',
					'class'=>'form-control',
					'required'=>'required'
					];

					$sekretaris = [
					'type'=>'text',
					'id'=>'nama-sekretaris',
					'name'=>'nama_sekretaris',
					'class'=>'form-control',
					'required'=>'required'
					];

					$bendahara = [
					'type'=>'text',
					'id'=>'nama-bendahara',
					'name'=>'nama_bendahara',
					'class'=>'form-control',
					'required'=>'required'
					];

					$masaBakti = [
					'type'=>'text',
					'id'=>'masa-bakti',
					'name'=>'masa_bakti',
					'class'=>'form-control',
					'required'=>'required'
					];

					$keputusan = [
					'type'=>'text',
					'id'=>'keputusan',
					'name'=>'keputusan',
					'class'=>'form-control',
					'required'=>'required'
					];

					$cabang = [
					'type'=>'text',
					'id'=>'cabang',
					'name'=>'cabang',
					'class'=>'form-control',
					'required'=>'required'
					];

					$npwp = [
					'type'=>'npwp',
					'name'=>'npwp',
					'class'=>'form-control',
					'required'=>'required'
					];

					$keuangan = [
					'id'=>'keuangan',
					'name'=>'keuangan',
					'class'=>'form-control',
					'required'=>'required'
					];
					$optionsKeuangan =[
					'LN' => 'Luar Negri',
					'DN'=> 'Dalam Negri'
					];


					$hukum = [
					'id'=>'hukum',
					'name'=>'hukum',
					'class'=>'form-control',
					'required'=>'required'
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
					'required'=>'required'
					];


					@endphp
					<h1>Data Ketua</h1>
					<fieldset>
						<h2>Informasi Ketua</h2>
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
									{{form_label('Nama Ketua*')}}
									{{form_input($namaKetua)}}
								</div>
								<div class="form-group">
									{{form_label('NIK Ketua*')}}
									{{form_input($nikKetua)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Agama*')}}
									{{form_dropdown('agama-ketua', $optionsAgama, '', $agamaKetua)}}
								</div>
								<div class="form-group">
									{{form_label('Kewarganegaraan*')}}
									{{form_dropdown('kw-ketua', $optionsKw, '', $kwKetua)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Jenis Kelamin*')}}
									{{form_dropdown('jenis-kelamin-ketua', $optionsJkKetua, '', $jenisKelaminKetua)}}
								</div>
								<div class="form-group">
									{{form_label('Status Perkawinan*')}}
									{{form_dropdown('status-pkw-ketua', $optionsPkwKetua, '', $statusPKWKetua)}}
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Tempat lahir*')}}
									{{form_input($tlKetua)}}
								</div>
								<div class="form-group" id="data_4">
									{{form_label('Tanggal lahir*')}}
									<div class="input-group date">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										{{form_input($tLahirKetua)}}
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('No. Telp.*')}}
									{{form_input($noTelpKetua)}}
								</div>
								<div class="form-group">
									{{form_label('Alamat*')}}
									{{form_input($alamatKetua)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Nama Bendahara*')}}
									{{form_input($bendahara)}}
								</div>
								<div class="form-group">
									{{form_label('Nama Sekretaris*')}}
									{{form_input($sekretaris)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Keputusan Tertinggi Ormas*')}}
									{{form_input($keputusan)}}
								</div>
								<div class="form-group">
									{{form_label('Masa Bakti Kepengurusan*')}}
									{{form_input($masaBakti)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('NPWP*')}}
									{{form_input($npwp)}}
								</div>
								<div class="form-group">
									{{form_label('Cabang*')}}
									{{form_input($cabang)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('Berbadan Hukum*')}}
									{{form_dropdown('hukum', $optionsHukum, '', $hukum)}}
								</div>
								<div class="form-group">
									{{form_label('Sumber Keuangan*')}}
									{{form_dropdown('keuangan', $optionsKeuangan, '', $keuangan)}}
								</div>
							</div>
							<div class="col-lg-6">

								<div class="form-group">
									{{form_label('Usaha Ormas*')}}
									{{form_input($usaha)}}
								</div>
							</div>
						</div>
					</fieldset>
			<!-- Field Data Ketua End  -->
			<!-- Field data file  -->
					@php

					$verif01 = [
					'type'=>'file',
					'id'=>'verif1',
					'name'=>'verif1',
					'class'=>'form-control',
					'accept' => 'application/pdf'

					];

					$verif02 = [
					'type'=>'file',
					'id'=>'verif2',
					'name'=>'verif2',
					'class'=>'form-control',
					'accept' => 'application/pdf'
					];

					$verif03 = [
					'type'=>'file',
					'id'=>'verif3',
					'name'=>'verif3',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif04 = [
					'type'=>'file',
					'id'=>'verif4',
					'name'=>'verif4',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif05 = [
					'type'=>'file',
					'id'=>'verif5',
					'name'=>'verif5',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif06 = [
					'type'=>'file',
					'id'=>'verif6',
					'name'=>'verif6',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif07 = [
					'type'=>'file',
					'id'=>'verif7',
					'name'=>'verif7',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif08 = [
					'type'=>'file',
					'id'=>'verif8',
					'name'=>'verif8',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif09 = [
					'type'=>'file',
					'id'=>'verif9',
					'name'=>'verif9',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif10 = [
					'type'=>'file',
					'id'=>'verif10',
					'name'=>'verif10',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif11 = [
					'type'=>'file',
					'id'=>'verif11',
					'name'=>'verif11',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif12 = [
					'type'=>'file',
					'id'=>'verif12',
					'name'=>'verif12',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif13 = [
					'type'=>'file',
					'id'=>'verif13',
					'name'=>'verif13',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif14 = [
					'type'=>'file',
					'id'=>'verif14',
					'name'=>'verif14',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif15 = [
					'type'=>'file',
					'id'=>'verif15',
					'name'=>'verif15',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif16 = [
					'type'=>'file',
					'id'=>'verif16',
					'name'=>'verif16',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					$verif17 = [
					'type'=>'file',
					'id'=>'verif17',
					'name'=>'verif17',
					'class'=>'form-control',
					'required'=>'required',
					'accept' => 'application/pdf'
					];

					@endphp
					<h1>Upload File</h1>
					<fieldset>
						<h2>Data File Pendukung</h2>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File Lambang | PDF Max 1mb')}}
									{{form_input($verif01)}}
								</div>
								<div class="form-group">
									{{form_label('File Bendera Ormas | PDF Max 1mb')}}
									{{form_input($verif02)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File Surat Permohonan* | PDF Max 1mb')}}
									{{form_input($verif03)}}
								</div>
								<div class="form-group">
									{{form_label('File Akta* | PDF Max 1mb')}}
									{{form_input($verif04)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File AD ART* | PDF Max 1mb')}}
									{{form_input($verif05)}}
								</div>
								<div class="form-group">
									{{form_label('File Program Ormas* | PDF Max 1mb')}}
									{{form_input($verif06)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File SK Pengurus* | PDF Max 1mb')}}
									{{form_input($verif07)}}
								</div>
								<div class="form-group">
									{{form_label('File Fotocopy KTP Ketua* | PDF Max 1mb')}}
									{{form_input($verif08)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File Fotocopy KTP Sekretaris* | PDF Max 1mb')}}
									{{form_input($verif09)}}
								</div>
								<div class="form-group">
									{{form_label('File Fotocopy KTP Bendahara* | PDF Max 1mb')}}
									{{form_input($verif10)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File SK Domisili* | PDF Max 1mb')}}
									{{form_input($verif11)}}
								</div>
								<div class="form-group">
									{{form_label('File NPWP* | PDF Max 1mb')}}
									{{form_input($verif12)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File Foto Sekretariat* | PDF Max 1mb')}}
									{{form_input($verif13)}}
								</div>
								<div class="form-group">
									{{form_label('File Surat Pernyataan* | PDF Max 1mb')}}
									{{form_input($verif14)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File Surat Keabsahan* | PDF Max 1mb')}}
									{{form_input($verif16)}}
								</div>
								<div class="form-group">
									{{form_label('File SKT* | PDF Max 1mb')}}
									{{form_input($verif17)}}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{{form_label('File Daftar Isian* | PDF Max 1mb')}}
									{{form_input($verif15)}}
								</div>
							</div>
						</div>
					</fieldset>
			<!-- Field data file end  -->
					{{form_close()}}
				</div>
			</div>
		</div>

	</div>
</div>

@endsection

@section('js')

<script>
	$(document).ready(function(){
		$("#wizard").steps();
		$("#form").steps({
			bodyTag: "fieldset",
			onStepChanging: function (event, currentIndex, newIndex)
			{
				// Always allow going backward even if the current step contains invalid fields!
				if (currentIndex > newIndex)
				{
					return true;
				}

				// Forbid suppressing "Warning" step if the user is to young
				if (newIndex === 3 && Number($("#age").val()) < 18)
				{
					return false;
				}

				var form = $(this);

				// Clean up if user went backward before
				if (currentIndex < newIndex)
				{
					// To remove error styles
					$(".body:eq(" + newIndex + ") label.error", form).remove();
					$(".body:eq(" + newIndex + ") .error", form).removeClass("error");
				}

				// Disable validation on fields that are disabled or hidden.
				form.validate().settings.ignore = ":disabled,:hidden";

				// Start validation; Prevent going forward if false
				return form.valid();
			},
			onStepChanged: function (event, currentIndex, priorIndex)
			{
				// Suppress (skip) "Warning" step if the user is old enough.
				if (currentIndex === 2 && Number($("#age").val()) >= 18)
				{
					$(this).steps("next");
				}

				// Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
				if (currentIndex === 2 && priorIndex === 3)
				{
					$(this).steps("previous");
				}
			},
			onFinishing: function (event, currentIndex)
			{
				var form = $(this);

				// Disable validation on fields that are disabled.
				// At this point it's recommended to do an overall check (mean ignoring only disabled fields)
				form.validate().settings.ignore = ":disabled";

				// Start validation; Prevent form submission if false
				return form.valid();
			},
			onFinished: function (event, currentIndex)
			{
				$.ajax({
					url:"{{base_url('Register/add')}}",
					type:"post",
					data:new FormData(this),
					processData:false,
					contentType:false,
					cache:false,
					async:false,
					success: function(data){
						swal({
							title: "Terimakasih!",
							text: "Pendaftaran Ormas Telah Berhasil",
							type: "success"
						},function() {
								window.location = "{{base_url('Dashboard')}}";
						});
					}
				});
			}
		}).validate({
			errorPlacement: function (error, element)
			{
				element.before(error);
			},
			rules: {
				confirm: {
					equalTo: "#password"
				}
			}
		});

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
