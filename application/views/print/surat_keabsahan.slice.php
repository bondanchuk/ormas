<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
        h3{
            text-decoration: underline;
        }
        .text-center{
            text-align:center;
        }
        td {
            padding:5px;
            border: 1px solid black;
        }
        .h-50{
            height: 150px;
        }
        .h-25{
            height: 25px;
        }
        .h-10{
            height: 10px;
        }
        .buwu{
            border-style: solid;
            border-color: red;
        }
    </style>
<body class="buwu">
<h3 class="text-center pb-5">Formulir Keabsahan Dokumen</h3>
<table class="border" width="100%">
    <tr>
        <td>1.</td>
        <td>Nama Organisasi</td>
        <td>:</td>
        <td>{{$lihat_nama_ormas}}</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Nama Notaris</td>
        <td>:</td>
        <td>{{$lihat_nama_notaris}}</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Nomor dan Tgl Akta Notaris</td>
        <td>:</td>
        <td>{{$lihat_nomortglakta}}</td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Nomor dan Tgl Surat Permohonan</td>
        <td>:</td>
        <td>{{$lihat_nomosrtpermohonan}}</td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Bidang Kegiatan</td>
        <td>:</td>
        <td>{{$lihat_bidang}}</td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Program Kerja Ormas</td>
        <td>:</td>
        <td>{{$lihat_program_kerja}}</td>
    </tr>
    <tr>
        <td>7.</td>
        <td>Alamat Kantor</td>
        <td>:</td>
        <td>{{$lihat_alamat_kantor}}</td>
    </tr>
    <tr>
        <td>8.</td>
        <td>Tempat dan Waktu Pendirian</td>
        <td>:</td>
        <td>{{$lihat_tempat_pendirian}} pada {{date('d-m-Y', strtotime($lihat_waktu_pendirian))}}</td>
    </tr>
    <tr>
        <td>9.</td>
        <td>Asas Ciri Organisasi</td>
        <td>:</td>
        <td>{{$lihat_asas_ciri_ormas}}</td>
    </tr>
    <tr>
        <td>10.</td>
        <td>Tujuan Organisasi</td>
        <td>:</td>
        <td>{{$lihat_tujuan_ormas}}</td>
    </tr>
<!-- Data pendiri  -->
    <tr>
        <td>11.</td>
        <td>Nama Pendiri</td>
        <td>:</td>
        <tr>
            <td colspan="1"></td>
            <td>Nama</td>
            <td>:</td>
            <td>{{$lihat_nama_pendiri}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>NIK</td>
            <td>:</td>
            <td>{{$lihat_nik_pendiri}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Agama</td>
            <td>:</td>
            <td>{{$lihat_agama_pendiri}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td>{{$lihat_kewarganegaraan_pendiri}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{$lihat_jenis_kelamin_pendiri}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td>{{$lihat_tempat_lahir_pendiri}}/{{date('d-m-Y', strtotime($lihat_tanggal_lahir_pendiri))}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td>{{$lihat_status_pkw_pendiri}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$lihat_alamat_pendiri}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Nomor Telepon/Hp</td>
            <td>:</td>
            <td>{{$lihat_notelp_pendiri}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{$lihat_pekerjaan_pendiri}}</td>
        </tr>
    </tr>
<!-- Data pendiri End  -->
    <tr>
        <td>12.</td>
        <td>Nama Pembina</td>
        <td>:</td>
        <td>{{$lihat_nama_pembina}}</td>
    </tr>
    <tr>
        <td>13.</td>
        <td>Nama Penasehat</td>
        <td>:</td>
        <td>{{$lihat_nama_penasehat}}</td>
    </tr>
    <tr>
        <td>14.</td>
        <td>Biodata Pengurus</td>
        <td>:</td>
    </tr>
<!-- Ketua  -->
    <tr>
        <td colspan="1"></td>
        <td>a.Ketua/Sebutan Lain</td>
        <tr>
            <td colspan="1"></td>
            <td>Nama</td>
            <td>:</td>
            <td>{{$lihat_nama_ketua}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>NIK</td>
            <td>:</td>
            <td>{{$lihat_nik_ketua}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Agama</td>
            <td>:</td>
            <td>{{$lihat_agama_ketua}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td>{{$lihat_kewarganegaraan_ketua}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{$lihat_jenis_kelamin_ketua}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td>{{$lihat_tempat_lahir_ketua}}/{{date('d-m-Y', strtotime($lihat_tanggal_lahir_ketua))}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td>{{$lihat_status_perkawinan_ketua}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$lihat_alamat_ketua}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Nomor Telepon/Hp</td>
            <td>:</td>
            <td>{{$lihat_nomor_telpon_ketua}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{$lihat_pekerjaan_ketua}}</td>
        </tr>
    </tr>
    <tr>
        <td class="h-25"></td>
    </tr>
<!-- Lainnya  -->
    <tr>
        <td></td>
        <td>b. Sekretaris/Sebutan Lain</td>
        <td>:</td>
        <td>{{$lihat_nama_sekretaris}}
        </td>
    </tr>
    <tr>
        <td></td>
        <td>c. Bendahara/Sebutan Lain</td>
        <td>:</td>
        <td>{{$lihat_nama_bendahara}}
        </td>
    </tr>
    <tr>
        <td>15.</td>
        <td>Masa Bakti Kepengurusan</td>
        <td>:</td>
        <td>{{$lihat_masa_bakti}}</td>
    </tr>
    <tr>
        <td>16.</td>
        <td>Keputusan Tertinggi Organisasi</td>
        <td>:</td>
        <td>{{$lihat_keputusan_tertinggi}}</td>
    </tr>
    <tr>
        <td>17.</td>
        <td>Unit/Cabang</td>
        <td>:</td>
        <td>{{$lihat_cabang}}</td>
    </tr>
    <tr>
        <td>18.</td>
        <td>NPWP</td>
        <td>:</td>
        <td>{{$lihat_npwp}}</td>
    </tr>
    <tr>
        <td>19.</td>
        <td>Sumber Keuangan</td>
        <td>:</td>
        <td>{{$lihat_sumber_keuangan}}</td>
    </tr>
    <tr>
        <td>20.</td>
        <td>Lambang/Logo Organisasi</td>
        <td>:</td>
        <td>Foto Terlampir</td>
        <!-- @php 
            $this->db->where('id_ormas', $lihat_id_ormas);
            $row = $this->db->get('tb_verifikasi')->row();
        @endphp -->
        <!-- <td><img src="{{site_url()}}data-upload/{{$lihat_nama_ormas}}/{{$row->file_lambang_logo}}" width="50" height="50"></td> -->
    </tr>
    <tr>
        <td class="h-25"></td>
    </tr>
    <tr>
        <td colspan="2" class="text-center">
            <label>Pejabat Pemeriksa</label>
        </td>
        <td colspan="2" class="text-center">
            <label>Tanjungpinang, {{date('d-m-Y')}}</label><br/>
            <label>Kepala Badan/Kantor Kesatuan Bangsa dan Politik<br> Kabupaten Bintan</label>
        </td>
    </tr>
    <tr>
        <td class="h-50" colspan="2"></td>
        <td class="h-50" colspan="2"></td>
    </tr>
    <tr>
        @php 
            $this->db->where('id_pejabat', $row->id_pejabat);
            $pemeriksa = $this->db->get('tb_pejabat')->row();

            $this->db->where('Status', 'Kepala Badan');
            $kepala_badan = $this->db->get('tb_pejabat')->row();
        @endphp
        <td colspan="2" class="text-center">{{$pemeriksa->Nama}}</td>
        <td colspan="2" class="text-center">{{$kepala_badan->Nama}}</td>
    </tr>
    <tr>
        <td colspan="2" class="text-center">{{$pemeriksa->Pangkat}}</td>
        <td colspan="2" class="text-center">{{$kepala_badan->Pangkat}}</td>
    </tr>
    <tr>
        <td colspan="2" class="text-center">{{konversi_nip($pemeriksa->NIP)}}</td>
        <td colspan="2" class="text-center">{{konversi_nip($kepala_badan->NIP)}}</td>
    </tr>
</table>
</body>
</html>