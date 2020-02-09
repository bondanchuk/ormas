<div class="modal inmodal fade" id="modal-tambah" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><span class="fa fa-user"></span> Tambah Pejabat</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'tambah-pejabat','role'=>'form'])}}
            <div class="modal-body">
        @php 
         $jabatan = [
            'type'=>'text',
            'id'=>'Jabatan',
            'name'=>'jabatan',
            'class'=>'form-control',
            'placeholder'=>'Masukkan jabatan..',
            'required'=>'required'
         ];
         $nama = [
            'type'=>'text',
            'id'=>'Nama',
            'name'=>'nama',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nama..',
            'required'=>'required'
         ];
         $pangkat = [
            'type'=>'text',
            'id'=>'Pangkat',
            'name'=>'pangkat',
            'class'=>'form-control',
            'placeholder'=>'Masukkan pangkat..',
            'required'=>'required'

         ];
         $nip = [
            'type'=>'text',
            'id'=>'NIP',
            'name'=>'nip',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nip..',
            'maxlength'=>'18',
            'minlength'=>'18',
            'required'=>'required'
         ];
         $dinas = [
            'type'=>'text',
            'id'=>'Dinas',
            'name'=>'dinas',
            'class'=>'form-control',
            'placeholder'=>'Masukkan dinas..',
            'required'=>'required'
         ];
         $provinsi = [
            'type'=>'text',
            'id'=>'Provinsi',
            'name'=>'provinsi',
            'class'=>'form-control',
            'placeholder'=>'Masukkan provinsi..',
            'required'=>'required'
         ];
         $status = [
            'type'=>'text',
            'id'=>'Status',
            'name'=>'status',
            'class'=>'form-control',
            'placeholder'=>'Masukkan status..',
            'required'=>'required'
         ];
        @endphp
        <div class="form-group">
            {{form_label('Jabatan')}}
            {{form_input($jabatan)}}
        </div>
        <div class="form-group">
            {{form_label('Nama Pejabat')}}
            {{form_input($nama)}}
        </div>
        <div class="form-group">
            {{form_label('Pangkat Pejabat')}}
            {{form_input($pangkat)}}
        </div>
        <div class="form-group">
            {{form_label('NIP Pejabat')}}
            {{form_input($nip)}}
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                {{form_label('Dinas Pejabat')}}
                {{form_input($dinas)}}
            </div>
            <div class="col-md-6">
                {{form_label('Provinsi Pejabat')}}
                {{form_input($provinsi)}}
            </div>
        </div>
        <div class="form-group">
            {{form_label('Status Pejabat')}}
            {{form_input($status)}}
        </div>
            </div>
            <div class="modal-footer">
                {{form_submit('submit', 'Simpan', 'class="btn btn-primary"')}}
            </div>
            {{form_close()}}
        </div>
     </div>
</div>


<div class="modal inmodal fade" id="modal-ubah" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><span class="fa fa-edit"></span> Ubah Pejabat</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'ubah-pejabat','role'=>'form'])}}
            <div class="modal-body">
        @php 
         $id_pejabat = [
            'type'=>'hidden',
            'id'=>'ubah-id-pejabat',
            'name'=>'ubah_id_pejabat',
            'required'=>'required'

         ];
         $jabatan = [
            'type'=>'text',
            'id'=>'ubah-jabatan',
            'name'=>'ubah_jabatan',
            'class'=>'form-control',
            'placeholder'=>'Masukkan jabatan..',
            'required'=>'required'
         ];
         $nama = [
            'type'=>'text',
            'id'=>'ubah-nama',
            'name'=>'ubah_nama',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nama..',
            'required'=>'required'
         ];
         $pangkat = [
            'type'=>'text',
            'id'=>'ubah-pangkat',
            'name'=>'ubah_pangkat',
            'class'=>'form-control',
            'placeholder'=>'Masukkan pangkat..',
            'required'=>'required'
         ];
         $nip = [
            'type'=>'text',
            'id'=>'ubah-nip',
            'name'=>'ubah_nip',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nip..',
            'maxlength'=>'18',
            'minlength'=>'18',
            'required'=>'required'
         ];
         $dinas = [
            'type'=>'text',
            'id'=>'ubah-dinas',
            'name'=>'ubah_dinas',
            'class'=>'form-control',
            'placeholder'=>'Masukkan dinas..',
            'required'=>'required'
         ];
         $provinsi = [
            'type'=>'text',
            'id'=>'ubah-provinsi',
            'name'=>'ubah_provinsi',
            'class'=>'form-control',
            'placeholder'=>'Masukkan provinsi..',
            'required'=>'required'
         ];
         $status = [
            'type'=>'text',
            'id'=>'ubah-status',
            'name'=>'ubah_status',
            'class'=>'form-control',
            'placeholder'=>'Masukkan status..',
            'required'=>'required'
         ];
        @endphp
        {{form_input($id_pejabat)}}
        <div class="form-group">
            {{form_label('Jabatan')}}
            {{form_input($jabatan)}}
        </div>
        <div class="form-group">
            {{form_label('Nama Pejabat')}}
            {{form_input($nama)}}
        </div>
        <div class="form-group">
            {{form_label('Pangkat Pejabat')}}
            {{form_input($pangkat)}}
        </div>
        <div class="form-group">
            {{form_label('NIP Pejabat')}}
            {{form_input($nip)}}
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                {{form_label('Dinas Pejabat')}}
                {{form_input($dinas)}}
            </div>
            <div class="col-md-6">
                {{form_label('Provinsi Pejabat')}}
                {{form_input($provinsi)}}
            </div>
        </div>
        <div class="form-group">
            {{form_label('Status Pejabat')}}
            {{form_input($status)}}
        </div>
            </div>
            <div class="modal-footer">
                {{form_submit('submit', 'Simpan', 'class="btn btn-primary"')}}
            </div>
            {{form_close()}}
        </div>
     </div>
</div>

<div class="modal inmodal fade" id="modal-hapus" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><span class="fa fa-trash"></span> Hapus Pejabat</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'hapus-pejabat','role'=>'form'])}}
            <div class="modal-body">
            @php
            $id_pejabat = [
                'type'=>'hidden',
                'id'=>'id-pejabat',
                'name'=>'id_pejabat',
                'class'=>'form-control',
                'required'=>'required'
            ];
            @endphp 
            {{form_input($id_pejabat)}}
            <p class="text-center">Anda yakin ingin menghapus data pejabat <span id="nama" class="text-danger"></span>?</p>
            </div>
            <div class="modal-footer">
                {{form_submit('submit', 'Ya', 'class="btn btn-danger mr-3 ml-3"')}}
            </div>
            {{form_close()}}
        </div>
     </div>
</div>