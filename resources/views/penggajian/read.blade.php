@extends('layouts.app')

@section('content')

 <div class="row">
 <div class="col-md-8 col-md-offset-2">
 <div class="panel panel-primary">
 <h2><center><div class="panel-heading">Detail Penggajian</div></center></h2>
 <div class="panel-body">

         <table class="table table-striped table-hover table-bordered">
          <center>
                <p><img width="200px" height="150px" src="<?php echo url('assets/image/') ?>/<?php echo $penggajian->tunjangan_pegawai->pegawai->photo; ?>"  alt="Cinque Terre" ></p>

                        <h3>{{$penggajian->tunjangan_pegawai->pegawai->user->name}}</h3>
                        <h5>{{$penggajian->tunjangan_pegawai->pegawai->nip}}</h5>

                        <b>@if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0")

                            Gaji Belum Diambil

                        @elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @else

                            Gaji Sudah Diambil Pada {{$penggajian->tanggal_pengambilan}}

                        @endif</b>

                    <h5>Gaji Lembur Sebesar Rp.{{$penggajian->jumlah_uang_lembur}}
                        <hr> Gaji Pokok Sebesar Rp.{{$penggajian->gaji_pokok}}
                        <hr>Tunjangan Sebesar Rp.{{$penggajian->Tunjangan_pegawai->Tunjangan->besaran_uang}}
                        <hr>Total Gaji Rp.{{$penggajian->total_gaji}}
                    </h5>

            <hr><a class="btn btn-primary" href="{{url('penggajian')}}">Kembali</a>

    </center>
    </div> 
</table>

@endsection