@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Informasi Profil User</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btnsuccess" href="{{ route('teller.create') }}"> Input Teller</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No Rekening</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Tabungan</th>
            <th>Saldo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teller as $teller)
        <tr>
            <td>{{ $teller->no_rekening }}</td>
            <td>{{ $teller->nama }}</td>
            <td>{{ $teller->alamat }}</td>
            <td>{{ $teller->jenis_tabungan }}</td>
            <td>{{ $teller->saldo }}</td>
            <td>
        <form action="{{ route('teller.destroy',$teller->no_rekening) }}" method="POST">
            <a class="btn btninfo" href="{{ route('teller.show',$teller->no_rekening) }}">Show</a>
            <a class="btn btnprimary" href="{{ route('teller.edit',$teller->no_rekening) }}">Edit</a>
        @csrf

        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
