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


			$('#table_dashboard').on('click','.lihat_record',function(){
				var id_pejabat = $(this).data('kode');
				$.ajax({
					url:"{{base_url('Dashboard/get_detail')}}",
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
        });

    </script>
@endsection
