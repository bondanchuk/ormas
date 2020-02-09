<div class="modal inmodal fade" id="modal-tambah" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><span class="fa fa-user"></span> Tambah Pemeriksa</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'tambah-pemeriksa','role'=>'form'])}}
            <div class="modal-body">
        @php 
         $nama_pemeriksa = [
            'type'=>'text',
            'id'=>'nama-pemeriksa',
            'name'=>'nama_pemeriksa',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nama..',
            'required'=>'required'
         ];
         $pangkat_pemeriksa = [
            'type'=>'text',
            'id'=>'pangkat-pemeriksa',
            'name'=>'pangkat_pemeriksa',
            'class'=>'form-control',
            'placeholder'=>'Masukkan pangkat..',
            'required'=>'required'

         ];
         $nip_pemeriksa = [
            'type'=>'text',
            'id'=>'nip-pemeriksa',
            'name'=>'nip_pemeriksa',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nip..',
            'maxlength'=>'18',
            'minlength'=>'18',
            'required'=>'required'
         ];
         $status = [
            'type'=>'text',
            'id'=>'status',
            'name'=>'status',
            'class'=>'form-control',
            'placeholder'=>'Masukkan status..',
            'required'=>'required'
         ];
        @endphp
        <div class="form-group">
            {{form_label('Nama Pemeriksa')}}
            {{form_input($nama_pemeriksa)}}
        </div>
        <div class="form-group">
            {{form_label('Pangkat Pemeriksa')}}
            {{form_input($pangkat_pemeriksa)}}
        </div>
        <div class="form-group">
            {{form_label('NIP Pemeriksa')}}
            {{form_input($nip_pemeriksa)}}
        </div>
        <div class="form-group">
            {{form_label('Status Pemeriksa')}}
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
                <h4 class="modal-title"><span class="fa fa-edit"></span> Ubah Pemeriksa</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'ubah-pemeriksa','role'=>'form'])}}
            <div class="modal-body">
            @php 
         $id_pemeriksa = [
            'type'=>'hidden',
            'id'=>'ubah-id-pemeriksa',
            'name'=>'ubah_id_pemeriksa',
            'class'=>'form-control',
            'required'=>'required'
         ];
         $nama_pemeriksa = [
            'type'=>'text',
            'id'=>'ubah-nama-pemeriksa',
            'name'=>'ubah_nama_pemeriksa',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nama..',
            'required'=>'required'
         ];
         $pangkat_pemeriksa = [
            'type'=>'text',
            'id'=>'ubah-pangkat-pemeriksa',
            'name'=>'ubah_pangkat_pemeriksa',
            'class'=>'form-control',
            'placeholder'=>'Masukkan pangkat..',
            'required'=>'required'

         ];
         $nip_pemeriksa = [
            'type'=>'text',
            'id'=>'ubah-nip-pemeriksa',
            'name'=>'ubah_nip_pemeriksa',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nip..',
            'maxlength'=>'18',
            'minlength'=>'18',
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
        {{form_input($id_pemeriksa)}}
        <div class="form-group">
            {{form_label('Nama Pemeriksa')}}
            {{form_input($nama_pemeriksa)}}
        </div>
        <div class="form-group">
            {{form_label('Pangkat Pemeriksa')}}
            {{form_input($pangkat_pemeriksa)}}
        </div>
        <div class="form-group">
            {{form_label('NIP Pemeriksa')}}
            {{form_input($nip_pemeriksa)}}
        </div>
        <div class="form-group">
            {{form_label('Status Pemeriksa')}}
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
                <h4 class="modal-title"><span class="fa fa-trash"></span> Hapus Pemeriksa</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'hapus-pemeriksa','role'=>'form'])}}
            <div class="modal-body">
            @php
            $id_pemeriksa = [
                'type'=>'hidden',
                'id'=>'id-pemeriksa',
                'name'=>'id_pemeriksa',
                'class'=>'form-control'
            ];
            @endphp 
            {{form_input($id_pemeriksa)}}
            <p class="text-center">Anda yakin ingin menghapus data pejabat <span id="nama" class="text-danger"></span>?</p>
            </div>
            <div class="modal-footer">
                {{form_submit('submit', 'Ya', 'class="btn btn-danger mr-3 ml-3"')}}
            </div>
            {{form_close()}}
        </div>
     </div>
</div>