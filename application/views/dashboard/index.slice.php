@extends('base.main_base')
@section('content')


<!--  Isi Kontent -->
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Dashboard</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <table id="table_dashboard" class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th width="2%">No.</th>
                        <th width="10%">Tanggal Daftar</th>
                        <th>Nama Ormas</th>
                        <th>Alamat Kantor</th>
                        <th>Cabang</th>
                        <th width="5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
@include('dashboard.modal')
<!-- End -->
@endsection
@section('js')
  <!-- Page-Level Scripts -->
  <script>
        $(document).ready(function(){
            $('#table_dashboard').DataTable({
                pageLength: 25,
                responsive: true,
				"processing":true,
				"serverSide":true,
                dom: '<"html5buttons"B>lTfgitp',
				"ajax":{
					url:"{{base_url('Dashboard/get_data')}}",
					type:"POST"
				},
				buttons: [
                    { extend: 'copy'},
                    {extend: 'csv', title: 'Data_Ormas_CSV'},
                    {extend: 'excel', title: 'Data_Ormas_Excel'},
                    {extend: 'pdf', title: 'Data_Ormas_PDF'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]
            });

            $('#table_dashboard').on('click','.cetak_record',function(){
                var kode = $(this).data('kode');
                $('#modal-cetak').modal('show');
                $("#cetak-frame").html('<iframe src="{{base_url()}}dashboard/print_keabsahan/'+kode+'" width="100%" height="450" frameborder="0" ></iframe>');

            });
             

			$('#table_dashboard').on('click','.lihat_record',function(){
				var id_ormas = $(this).data('kode');
				$.ajax({
					url:"{{base_url('Dashboard/get_detail')}}",
					method:"POST",
					data:{id_ormas:id_ormas},
					dataType:"json",
					success: function(data){
						$('#modal-lihat').modal('show');
						$('#lihat_id_ormas').val(data.lihat_id_ormas);
						$('#lihat-tanggal-daftar').val(data.lihat_tanggal_daftar);
						$('#lihat-nama-ormas').val(data.lihat_nama_ormas);
						$('#lihat-nama-notaris').val(data.lihat_nama_notaris);
						$('#lihat-nomortglakta').val(data.lihat_nomortglakta);
						$('#lihat-bidang').val(data.lihat_bidang);
						$('#lihat-program-kerja').val(data.lihat_program_kerja);
						$('#lihat-alamat-kantor').val(data.lihat_alamat_kantor);
						$('#lihat-tujuan-ormas').val(data.lihat_tujuan_ormas);
						$('#lihat-nama-pendiri').val(data.lihat_nama_pendiri);
						$('#lihat-nama-ketua').val(data.lihat_nama_ketua);
						$('#lihat-nama-sekretaris').val(data.lihat_nama_sekretaris);
						$('#lihat-nama-bendahara').val(data.lihat_nama_bendahara);
						$('#lihat-cabang').val(data.lihat_cabang);
						$('#lihat-sumber-keuangan').val(data.lihat_sumber_keuangan);
						$('#head-nama').html(data.lihat_nama_ormas);
					}
				})
			});
        });

    </script>
@endsection
