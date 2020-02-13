

<div class="modal inmodal fade" id="modal-lihat" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title"><span class="fa fa-check"></span> <label name="head-nama" id="head-nama"></label></h4>
				<small class="font-bold"></small>
			</div>
			{{form_open('',['id' => 'lihat-ormas','role'=>'form'])}}
			<div class="modal-body">
				@php

				$ormas = [
				'type'=>'text',
				'id'=>'lihat-nama-ormas',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$daftar = [
				'type'=>'text',
				'id'=>'lihat-tanggal-daftar',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$notaris = [
				'type'=>'text',
				'id'=>'lihat-nama-notaris',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$noakta = [
				'type'=>'text',
				'id'=>'lihat-nomortglakta',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$bidang = [
				'type'=>'text',
				'id'=>'lihat-bidang',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$proker = [
				'type'=>'text',
				'id'=>'lihat-program-kerja',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$kantor = [
				'type'=>'text',
				'id'=>'lihat-alamat-kantor',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$tujuan = [
				'type'=>'text',
				'id'=>'lihat-tujuan-ormas',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$pendiri = [
				'type'=>'text',
				'id'=>'lihat-nama-pendiri',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$ketua = [
				'type'=>'text',
				'id'=>'lihat-nama-ketua',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$sekretaris = [
				'type'=>'text',
				'id'=>'lihat-nama-sekretaris',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$bendahara = [
				'type'=>'text',
				'id'=>'lihat-nama-bendahara',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$cabang = [
				'type'=>'text',
				'id'=>'lihat-cabang',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];

				$sumberkeuangan = [
				'type'=>'text',
				'id'=>'lihat-sumber-keuangan',
				'class'=>'form-control',
				'readonly'=>'readonly'
				];





				@endphp
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Nama Ormas</label>
					<div class="col-lg-4">
						{{form_input($ormas)}}
					</div>
					<label class="col-lg-2 col-form-label">Tanggal Daftar</label>
					<div class="col-lg-4">
						{{form_input($daftar)}}
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Nama Notaris</label>
					<div class="col-lg-4">
						{{form_input($notaris)}}
					</div>
					<label class="col-lg-2 col-form-label">Nomor Akta</label>
					<div class="col-lg-4">
						{{form_input($noakta)}}
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Bidang</label>
					<div class="col-lg-4">
						{{form_input($bidang)}}
					</div>
					<label class="col-lg-2 col-form-label">Program Kerja</label>
					<div class="col-lg-4">
						{{form_input($proker)}}
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Alamat Kantor</label>
					<div class="col-lg-4">
						{{form_input($kantor)}}
					</div>
					<label class="col-lg-2 col-form-label">Tujuan Ormas</label>
					<div class="col-lg-4">
						{{form_input($tujuan)}}
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Nama Pendiri</label>
					<div class="col-lg-4">
						{{form_input($pendiri)}}
					</div>
					<label class="col-lg-2 col-form-label">Nama Ketua Ormas</label>
					<div class="col-lg-4">
						{{form_input($ketua)}}
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Nama Sekretaris</label>
					<div class="col-lg-4">
						{{form_input($sekretaris)}}
					</div>
					<label class="col-lg-2 col-form-label">Nama Bendahara</label>
					<div class="col-lg-4">
						{{form_input($bendahara)}}
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Cabang Ormas</label>
					<div class="col-lg-4">
						{{form_input($cabang)}}
					</div>
					<label class="col-lg-2 col-form-label">Sumber Keuangan</label>
					<div class="col-lg-4">
						{{form_input($sumberkeuangan)}}
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			</div>
			{{form_close()}}
		</div>
	</div>
</div>
