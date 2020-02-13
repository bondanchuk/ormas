@extends('base.main_base')
@section('content')
<!--  Isi Kontent -->
<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Data Ormas</h5>
                        <div class="ibox-tools">
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dt" id="tabel-ormas" width="100%">
                                <thead class="text-center">
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>Nama Ormas</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Alamat</th>
                                        <th width="20%">Cabang</th>
                                        <th width="20%">Status</th>
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
      var table = $('#tabel-ormas').DataTable({
           "dom": 'lTfgitp',
           "processing":true,  
           "serverSide":true,  
           "responsive": true,
           "order":[],  
           "ajax":{  
                url:"{{base_url('ormas/ambil_ormas')}}",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0,5,6],  
                     "orderable":false,
                     "className":"text-center",
  
                },
                {
                    "targets":[1,2,3,4],
                    "className":"text-left",
                }  
           ],  
            "pageLength": 10,
            });

            $('#tabel-pejabat').on('click','.hapus_record',function(){
                $('#modal-hapus').modal('show');
                $("#id-pejabat").val($(this).data('kode'));
                $("#nama").html($(this).data('nama'));
            });

            $('#hapus-ormas').submit('click',function(){
                $.ajax({
                    type : "POST",
                    url  : "{{base_url('ormas/hapus_ormas')}}",
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