@extends('base.main_base')
@section('content')


<!--  Isi Kontent -->
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Data Ormas</h5>

                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th width="2%">No.</th>
                        <th width="10%">Tanggal Daftar</th>
                        <th>Nama Ormas</th>
                        <th>Alamat Kantor</th>
                        <th>Cabang</th>
                        <th width="5%">Status</th>
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
            $('.dataTables-example').DataTable({
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
                    {extend: 'excel', title: 'Data Ormas'},
                    {extend: 'pdf', title: 'Data Ormas'},

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

        });

    </script>
@endsection
