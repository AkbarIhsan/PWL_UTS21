@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Teller
            </div>
            <div class="card-body">
                @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
        @endif
            <form method="post" action="{{ route('teller.update', $teller->no_rekening) }}" id="myForm">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="no_rekening">No Rekening</label>
                <input type="text" name="no_rekening" class="formcontrol" id="no_rekening" value="{{ $teller->no_rekening }}" ariadescribedby="no_rekening" >
            </div>
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" name="nama" class="formcontrol" id="nama" value="{{ $teller->nama }}" ariadescribedby="nama" >
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="alamat" name="alamat" class="formcontrol" id="alamat" value="{{ $teller->alamat }}" ariadescribedby="alamat" >
            </div>
            <div class="form-group">
                <label for="jenis_tabungan">Jenis Tabungan</label>
                <input type="jenis_tabungan" name="jenis_tabungan" class="formcontrol" id="jenis_tabungan" value="{{ $teller->jenis_tabungan }}" ariadescribedby="jenis_tabungan" >
            </div>
            <div class="form-group">
                <label for="saldo">saldo</label>
                <input type="saldo" name="saldo" class="formcontrol" id="saldo" value="{{ $teller->saldo }}" ariadescribedby="saldo" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
    </div>
</div>
@endsection
