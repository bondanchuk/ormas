@extends('base.main_base')
@section('content')
<!-- Breadcrumb Start -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Data Ormas</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{site_url('pejabat')}}">Verifikasi Data Ormas</a>
            </li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End-->

<!-- Content -->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Verifikasi Data - {{$Nama}}</h5> <!-- Urgent! Change name into ORMAS name -->
                    <!-- <a href="#" class="btn btn-primary" target="_blank">Submit Verifikasi</a> -->
                </div>
                <div class="ibox-content">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1">Data Pendukung</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- Tab #1  -->
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    {{form_open('',['id'=>'form-verif-01'])}}
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            @php
                                            $id_ormas = [
                                            'type'=>'hidden',
                                            'id'=>'id-ormas',
                                            'name'=>'id_ormas',
                                            'class'=>'form-control',
                                            'value'=> $ID,
                                            'required'=>'required'
                                            ];

                                            @endphp
                                            {{form_input($id_ormas)}}
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Surat Permohonan')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_surat_permohonan}}" data-judul="{{'Surat Permohonan'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-3" name="verif_03" type="checkbox" value="{{$verif_03}}" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Lambang Ormas')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_lambang_logo}}" data-judul="{{'Lambang Ormas'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Bendera Ormas')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_bendera_ormas}}" data-judul="{{'Bendera Ormas'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Akta')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_akta}}" data-judul="{{'Akta'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-4" name="verif_04" value="{{$verif_04}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('AD ART')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_ad_art}}" data-judul="{{'AD ART'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-5" name="verif_05" value="{{$verif_05}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('SK Pengurus')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_skpengurus}}" data-judul="{{'SK Pengurus'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-7" name="verif_07" value="{{$verif_07}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Program Ormas')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_program_ormas}}" data-judul="{{'Program Ormas'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-6" name="verif_06" value="{{$verif_06}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('SK Domisili')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_sk_domisili}}" data-judul="{{'SK Domisili'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-11" name="verif_11" value="{{$verif_11}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Fotocopy KTP Ketua')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_fc_ktpketua}}" data-judul="{{'Fotocopy KTP Ketua'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-8" name="verif_08" value="{{$verif_08}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Fotocopy KTP Sekretaris')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_fc_ktpsekretaris}}" data-judul="{{'Fotocopy KTP Sekretaris'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-9" name="verif_09" value="{{$verif_09}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Fotocpy KTP Bendahara')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_fc_ktpbendahara}}" data-judul="{{'Fotocopy KTP Bendahara'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-10" name="verif_10" value="{{$verif_10}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('NPWP')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_npwp}}" data-judul="{{'NPWP'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-12" name="verif_12" value="{{$verif_12}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Foto Sekretariat')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_fotosekretariat}}" data-judul="{{'Foto Sekretariat'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-13" name="verif_13" value="{{$verif_13}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Surat Keabsahan')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_suketkeabsahan}}" data-judul="{{'Surat Keabsahan'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-16" name="verif_16" value="{{$verif_16}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Surat Pernyataan')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_surat_pernyataan}}" data-judul="{{'Surat Pernyataan'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-14" name="verif_14" value="{{$verif_14}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('SKT')}} <br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_skt}}" data-judul="{{'SKT'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-17" name="verif_17" value="{{$verif_17}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-9 col-md-10 col-lg-10 form-control">
                                                {{form_label('Daftar Isian')}}<br>
                                                <a href="javascript:void(0)" class="open btn btn-primary" data-id="{{$file_daftarisian}}" data-judul="{{'Daftar Isian'}}" data-toggle="modal">Lihat File</a>
                                            </div>
                                            <div class="col-3 col-lg-2 text-center">
                                                <label class='form-control-plaintext'>Verifikasi</label>
                                                <input id="verif-15" name="verif_15" value="{{$verif_15}}" type="checkbox" class="js-switch" />
                                            </div>
                                        </div>
                                    </div>
                                    {{form_close()}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('ormas.modal')

@section('js')
<script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });
    $(window).on("load", function() {
        for (i = 0; i <= 17; i++) {
            if ($("#verif-" + i).val() == 1) {
                $("#verif-" + i).attr("checked", true);
                $("#verif-" + i).trigger("click");
            }
        }
    });

    $(document).on("click", ".open", function() {
        $('#modal-lihat').modal('show');
        var namaFile = $(this).data('id');
        var judulFile = $(this).data('judul');
        var data = "{{site_url('data-upload/'.$Nama.'/'.'" + namaFile + "'.'')}}";
        $("#judul-file").html(judulFile);
        $(".modal-body #nama-file").attr("src", data);
    });

    $('#verif-3').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_01: 1,
                verif_02: 1,
                verif_03: 1,
            };
            processChange03(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_01: 0,
                verif_02: 0,
                verif_03: 0,
            };
            processChange03(dataObj);
        }
    });

    $('#verif-4').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_04: 1,
            };
            processChange04(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_04: 0,
            };
            processChange04(dataObj);
        }
    });

    $('#verif-5').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_05: 1,
            };
            processChange05(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_05: 0,
            };
            processChange05(dataObj);
        }
    });

    $('#verif-6').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_06: 1,
            };
            processChange06(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_06: 0,
            };
            processChange06(dataObj);
        }
    });

    $('#verif-7').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_07: 1,
            };
            processChange07(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_07: 0,
            };
            processChange07(dataObj);
        }
    });

    $('#verif-8').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_08: 1,
            };
            processChange08(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_08: 0,
            };
            processChange08(dataObj);
        }
    });

    $('#verif-9').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_09: 1,
            };
            processChange09(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_09: 0,
            };
            processChange09(dataObj);
        }
    });

    $('#verif-10').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_10: 1,
            };
            processChange10(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_10: 0,
            };
            processChange10(dataObj);
        }
    });

    $('#verif-11').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_11: 1,
            };
            processChange11(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_11: 0,
            };
            processChange11(dataObj);
        }
    });

    $('#verif-12').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_12: 1,
            };
            processChange12(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_12: 0,
            };
            processChange12(dataObj);
        }
    });

    $('#verif-13').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_13: 1,
            };
            processChange13(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_13: 0,
            };
            processChange13(dataObj);
        }
    });

    $('#verif-14').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_14: 1,
            };
            processChange14(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_14: 0,
            };
            processChange14(dataObj);
        }
    });

    $('#verif-15').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_15: 1,
            };
            processChange15(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_15: 0,
            };
            processChange15(dataObj);
        }
    });

    $('#verif-16').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_16: 1,
            };
            processChange16(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_16: 0,
            };
            processChange16(dataObj);
        }
    });

    $('#verif-17').on('change', function() {
        var checked = $(this).is(':checked');
        if (checked) {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_17: 1,
            };
            processChange17(dataObj);
        } else {
            var dataObj = {
                id_ormas: $("#id-ormas").val(),
                verif_17: 0,
            };
            processChange17(dataObj);
        }
    });

    function processChange03(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check03')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange04(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check04')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange05(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check05')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange06(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check06')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange07(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check07')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange08(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check08')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange09(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check09')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange10(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check10')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange11(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check11')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange12(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check12')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange13(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check13')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange14(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check14')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange15(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check15')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange16(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check16')}}",
            data: dataObj,
            dataType: "json",
        });
    };

    function processChange17(dataObj) {
        $.ajax({
            type: "POST",
            url: "{{base_url('ormas/verif_check17')}}",
            data: dataObj,
            dataType: "json",
        });
    };
</script>


@endsection