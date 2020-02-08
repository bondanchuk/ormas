<div class="modal inmodal fade" id="modal-tambah" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"><span class="fa fa-user"></span> Tambah Akun</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'tambah-user','role'=>'form'])}}
            <div class="modal-body">
        @php 
         $nama_user = [
            'type'=>'text',
            'id'=>'nama-user',
            'name'=>'nama_user',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nama..'
         ];
         $username = [
            'type'=>'text',
            'id'=>'username',
            'name'=>'username',
            'class'=>'form-control',
            'placeholder'=>'Masukkan username..'
         ];
         $password = [
            'type'=>'password',
            'id'=>'password',
            'name'=>'password',
            'class'=>'form-control',
            'placeholder'=>'Masukkan password..'

         ];
         $level_akses = [
            'id'=>'level-akses',
            'class'=>'select2 form-control'
         ];
        
         $option = [
            '' => '',
            'Admin' => 'Admin',
            ];
        @endphp
        <div class="form-group">
            {{form_label('Nama Lengkap')}}
            {{form_input($nama_user)}}
        </div>
        <div class="form-group">
            {{form_label('Username')}}
            {{form_input($username)}}
        </div>
        <div class="form-group">
            {{form_label('Password')}}
            {{form_input($password)}}
        </div>
        <div class="form-group">
            {{form_label('Level')}}
            {{form_dropdown('level_akses', $option, '', $level_akses)}}
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
                <h4 class="modal-title"><span class="fa fa-edit"></span> Ubah Akun</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'ubah-user','role'=>'form'])}}
            <div class="modal-body">
        @php 
        $id_user = [
                'type'=>'hidden',
                'id'=>'ubah-id-user',
                'name'=>'ubah_id_user',
                'class'=>'form-control'
        ];
         $nama_user = [
            'type'=>'text',
            'id'=>'ubah-nama-user',
            'name'=>'ubah_nama_user',
            'class'=>'form-control',
            'placeholder'=>'Masukkan nama..'
         ];
         $username = [
            'type'=>'text',
            'id'=>'ubah-username',
            'name'=>'ubah_username',
            'class'=>'form-control',
            'placeholder'=>'Masukkan username..'
         ];
         $password = [
            'type'=>'password',
            'id'=>'ubah-password',
            'name'=>'ubah_password',
            'class'=>'form-control',
            'placeholder'=>'Masukkan password..'
         ];
         
         $level_akses = [
            'id'=>'ubah-level-akses',
            'class'=>'form-control'
         ];
        
         $option = [
            'Admin' => 'Admin',
            ];
        @endphp
        {{form_input($id_user)}}
        <div class="form-group">
            {{form_label('Nama Lengkap')}}
            {{form_input($nama_user)}}
        </div>
        <div class="form-group">
            {{form_label('Username')}}
            {{form_input($username)}}
        </div>
        <div class="form-group">
            {{form_label('Password')}}
            {{form_input($password)}}
        </div>
        <div class="form-group">
            {{form_label('Level')}}
            {{form_dropdown('ubah_level_akses', $option, 'Admin', $level_akses)}}
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
                <h4 class="modal-title"><span class="fa fa-trash"></span> Hapus Akun</h4>
                <small class="font-bold"></small>
            </div>
            {{form_open('',['id' => 'hapus-user','role'=>'form'])}}
            <div class="modal-body">
            @php
            $id_user = [
                'type'=>'hidden',
                'id'=>'id-user',
                'name'=>'id_user',
                'class'=>'form-control'
            ];
            @endphp 
            {{form_input($id_user)}}
            <p class="text-center">Anda yakin ingin menghapus akun <span id="nama-lengkap" class="text-danger"></span>?</p>
            </div>
            <div class="modal-footer">
                {{form_submit('submit', 'Ya', 'class="btn btn-danger mr-3 ml-3"')}}
            </div>
            {{form_close()}}
        </div>
     </div>
</div>