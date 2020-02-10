@extends('base.main_base')
@section('content')
<!-- Bread Crumb -->
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Manajemen Data</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{site_url('auth')}}">Akun</a>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
<!-- End Breadcrumb -->

<!--  Isi Kontent -->
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Tabel</h5>
                        <div class="ibox-tools">
                            <a href="javascript:void(0)" class="text-primary" data-toggle="modal" data-target="#modal-tambah">
                                <i class="fa fa-plus"></i> Tambah Akun
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabel-user" width="100%">
                    <thead class="text-center">
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th width="5%">Aksi</th>
                    </tr>
                    </thead>
                  </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
<!-- End -->                    
@include('auth.modal')
@endsection
@section('js')
<script>
$(document).ready(function() {
      $('#level-akses').select2({
            placeholder: "Pilih Level",
            width: '100%',
      });
  
      $('#ubah-level-akses').select2({
            placeholder: "Pilih Level",
            width: '100%',
      });


      var table = $('#tabel-user').DataTable({
           "processing":true,  
           "serverSide":true,  
           "responsive": true,
           "order":[],  
           "ajax":{  
                url:"{{base_url('auth/ambil_user')}}",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,
                     "className":"text-center",
  
                },  
           ],  
            "pageLength": 10,
            });


            $('#tambah-user').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('auth/tambah_user')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#nama-user').val("");
                        $('#username').val("");
                        $('#password').val("");
                        $('#level-akses').val("");
                        $('#modal-tambah').modal('hide');
                        toastr.success('Akun berhasil ditambah','Yeay!');                        
                        table.ajax.reload();
                    },
                   error: function(data){
                         $('#modal-tambah').modal('hide');
                        toastr.warning('Akun tidak bisa ditambah, karena username sudah ada','Yah..');
                        table.ajax.reload();                        
                    }
                });
                return false;
            });

            $('#tabel-user').on('click','.hapus_record',function(){
                $('#modal-hapus').modal('show');
                $("#id-user").val($(this).data('kode'));
                $("#nama-lengkap").html($(this).data('nama'));
            });

            $('#hapus-user').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('auth/hapus_user')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#modal-hapus').modal('hide');
                        toastr.success('Akun berhasil dihapus','Sip!');                                                
                        table.ajax.reload();
                    },
                   error: function(data){
                        $('#modal-hapus').modal('hide');
                        toastr.warning('Akun gagal dihapus','Sip..');                                                
                        table.ajax.reload();

                    }
                });
                return false;
            });

            
            $('#tabel-user').on('click','.ubah_record',function(){
                var id_user = $(this).data('kode');
                $.ajax({
                    url:"{{base_url('auth/ambil_satu_user')}}",
                    method:"POST",
                    data:{id_user:id_user},
                    dataType:"json",
                    success: function(data){
                        $('#modal-ubah').modal('show');
                        $('#ubah-id-user').val(data.ubah_id_user);
                        $('#ubah-nama-user').val(data.ubah_nama_user);
                        $('#ubah-username').val(data.ubah_username);
                        $('#ubah-level-akses').val(data.ubah_level_akses).trigger("change");
                    }

                })
            });

            $('#ubah-user').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('auth/ubah_user')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#modal-ubah').modal('hide');
                        toastr.success('Akun berhasil diubah','Nah!');                                                                        
                        table.ajax.reload();
                    },
                   error: function(data){
                        $('#modal-ubah').modal('hide');
                        toastr.warning('Akun tidak berhasil diubah','Yah..');                                                                        
                        table.ajax.reload();
                    }
                });
                return false;
            });

});
</script>
@endsection