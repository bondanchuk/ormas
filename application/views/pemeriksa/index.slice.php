@extends('base.main_base')
@section('content')
<!-- Bread Crumb -->
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Master</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{site_url('pemeriksa')}}">Pemeriksa</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Data Pemeriksa</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Tabel</strong>
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
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-tambah">
                                <i class="fa fa-plus"></i> Tambah Pemeriksa
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabel-pemeriksa" width="100%">
                    <thead class="text-center">
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>Pangkat</th>
                        <th width="20%">NIP</th>
                        <th>Status</th>
                        <th class="text-center" width="5%">Aksi</th>
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
@include('pemeriksa.modal')
@endsection
@section('js')
<script>
$(document).ready(function() {
      var table = $('#tabel-pemeriksa').DataTable({
           "processing":true,  
           "serverSide":true,  
           "responsive": true,
           "order":[],  
           "ajax":{  
                url:"{{base_url('pemeriksa/ambil_pemeriksa')}}",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0,5],  
                     "orderable":false,
                     "className":"text-center",
  
                },
                {
                    "targets":[2,3,4],
                    "className":"text-center",
                }  
           ],  
            "pageLength": 10,
            });


            $('#tambah-pemeriksa').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('pemeriksa/tambah_pemeriksa')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#nama_pemeriksa').val("");
                        $('#pangkat_pemeriksa').val("");
                        $('#nip_pemeriksa').val("");
                        $('#status').val("");
                        $('#modal-tambah').modal('hide');
                        toastr.success('Data berhasil ditambah','Yeay!');                        
                        table.ajax.reload();
                    },
                   error: function(data){
                         $('#modal-tambah').modal('hide');
                        toastr.warning('Data tidak bisa ditambah, karena sudah ada','Yah..');
                        table.ajax.reload();                        
                    }
                });
                return false;
            });

            $('#tabel-pemeriksa').on('click','.hapus_record',function(){
                $('#modal-hapus').modal('show');
                $("#id-pemeriksa").val($(this).data('kode'));
                $("#nama").html($(this).data('nama'));
            });

            $('#hapus-pemeriksa').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('pemeriksa/hapus_pemeriksa')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#modal-hapus').modal('hide');
                        toastr.success('Data berhasil dihapus','Sip!');                                                
                        table.ajax.reload();
                    },
                   error: function(data){
                        $('#modal-hapus').modal('hide');
                        toastr.warning('Data gagal dihapus','Sip..');                                                
                        table.ajax.reload();
                    }
                });
                return false;
            });

            
            $('#tabel-pemeriksa').on('click','.ubah_record',function(){
                var id_pemeriksa = $(this).data('kode');
                $.ajax({
                    url:"{{base_url('pemeriksa/ambil_satu_pemeriksa')}}",
                    method:"POST",
                    data:{id_pemeriksa:id_pemeriksa},
                    dataType:"json",
                    success: function(data){
                        $('#modal-ubah').modal('show');
                        $('#ubah-id-pemeriksa').val(data.ubah_id_pemeriksa);
                        $('#ubah-nama-pemeriksa').val(data.ubah_nama_pemeriksa);
                        $('#ubah-pangkat-pemeriksa').val(data.ubah_pangkat_pemeriksa);
                        $('#ubah-nip-pemeriksa').val(data.ubah_nip_pemeriksa);
                        $('#ubah-status').val(data.ubah_status);
                    }
                })
            });

            $('#ubah-pemeriksa').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('pemeriksa/ubah_pemeriksa')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#modal-ubah').modal('hide');
                        toastr.success('Data berhasil diubah','Nah!');                                                                        
                        table.ajax.reload();
                    },
                   error: function(data){
                        $('#modal-ubah').modal('hide');
                        toastr.warning('Data tidak berhasil diubah','Yah..');                                                                        
                        table.ajax.reload();
                    }
                });
                return false;
            });

});
</script>
@endsection