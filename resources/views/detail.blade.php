@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Teller
            </div>
            <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>No Rekening: </b>{{$teller->no_rekening}}</li>
                        <li class="list-group-item"><b>Nama: </b>{{$teller->nama}}</li>
                        <li class="list-group-item"><b>Alamat: </b>{{$teller->alamat}}</li>
                        <li class="list-group-item"><b>Jenis tabungan: </b>{{$teller->jenis_tabungan}}</li>
                        <li class="list-groupitem"><b>Saldo: </b>{{$teller->saldo}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt3" href="{{ route('teller.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
