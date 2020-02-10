@extends('base.main_base')
@section('content')
<!-- Bread Crumb -->
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Manajemen Data</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{site_url('pejabat')}}">Pejabat</a>
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
                        <h5>Data Pejabat</h5>
                        <div class="ibox-tools">
                            <a href="javascript:void(0)" class="text-primary" data-toggle="modal" data-target="#modal-tambah">
                            <i class="fa fa-plus"></i> Tambah Pejabat
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dt" id="tabel-pejabat" width="100%">
                                <thead class="text-center">
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>Jabatan</th>
                                        <th>Nama</th>
                                        <th>Pangkat</th>
                                        <th width="20%">NIP</th>
                                        <th>Dinas</th>
                                        <th>Provinsi</th>
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
@include('pejabat.modal')
@endsection
@section('js')
<script>
$(document).ready(function() {
    $('#Status').select2({
            placeholder: "Pilih Status",
            width: '100%',
            dropdownParent: $('#modal-tambah')

      });
    $('#ubah-status').select2({
            placeholder: "Pilih Status",
            width: '100%',
            dropdownParent: $('#modal-ubah')
      });

      var table = $('#tabel-pejabat').DataTable({
           "dom": 'lTfgitp',
           "processing":true,  
           "serverSide":true,  
           "responsive": true,
           "order":[],  
           "ajax":{  
                url:"{{base_url('pejabat/ambil_pejabat')}}",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0,8],  
                     "orderable":false,
                     "className":"text-center",
  
                },
                {
                    "targets":[3,4,5,6,7],
                    "className":"text-center",
                }  
           ],  
            "pageLength": 10,
            });


            $('#tambah-pejabat').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('pejabat/tambah_pejabat')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#Jabatan').val("");
                        $('#Nama').val("");
                        $('#Pangkat').val("");
                        $('#NIP').val("");
                        $('#Dinas').val("");
                        $('#Provinsi').val("");
                        $('#Status').val("");
                        $('#modal-tambah').modal('hide');
                        toastr.success('Data berhasil ditambah','Berhasil');                        
                        table.ajax.reload();
                    },
                   error: function(data){
                         $('#modal-tambah').modal('hide');
                        toastr.warning('Data tidak bisa ditambah, karena sudah ada','Gagal');
                        table.ajax.reload();                        
                    }
                });
                return false;
            });

            $('#tabel-pejabat').on('click','.hapus_record',function(){
                $('#modal-hapus').modal('show');
                $("#id-pejabat").val($(this).data('kode'));
                $("#nama").html($(this).data('nama'));
            });

            $('#hapus-pejabat').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('pejabat/hapus_pejabat')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#modal-hapus').modal('hide');
                        toastr.success('Data berhasil dihapus','Berhasil');                                                
                        table.ajax.reload();
                    },
                   error: function(data){
                        $('#modal-hapus').modal('hide');
                        toastr.warning('Data gagal dihapus','Gagal');                                                
                        table.ajax.reload();
                    }
                });
                return false;
            });

            
            $('#tabel-pejabat').on('click','.ubah_record',function(){
                var id_pejabat = $(this).data('kode');
                $.ajax({
                    url:"{{base_url('pejabat/ambil_satu_pejabat')}}",
                    method:"POST",
                    data:{id_pejabat:id_pejabat},
                    dataType:"json",
                    success: function(data){
                        $('#modal-ubah').modal('show');
                        $('#ubah-id-pejabat').val(data.ubah_id_pejabat);
                        $('#ubah-jabatan').val(data.ubah_jabatan);
                        $('#ubah-nama').val(data.ubah_nama);
                        $('#ubah-pangkat').val(data.ubah_pangkat);
                        $('#ubah-nip').val(data.ubah_nip);
                        $('#ubah-dinas').val(data.ubah_dinas);
                        $('#ubah-provinsi').val(data.ubah_provinsi);
                        $('#ubah-status').val(data.ubah_status).trigger("change");
                    }
                })
            });

            $('#ubah-pejabat').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('pejabat/ubah_pejabat')}}",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        $('#modal-ubah').modal('hide');
                        toastr.success('Data berhasil diubah','Berhasil');                                                                        
                        table.ajax.reload();
                    },
                   error: function(data){
                        $('#modal-ubah').modal('hide');
                        toastr.warning('Data tidak berhasil diubah','Gagal');                                                                        
                        table.ajax.reload();
                    }
                });
                return false;
            });

});
</script>
@endsection