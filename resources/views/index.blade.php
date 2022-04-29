@extends('layout')
@section('content')
<h1>Home</h1>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div class="col">
        <a href="{{ route('akun.create') }}" class="btn btn-primary my-2">Tambah Data</a>
    </div>
</div>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
           <tbody>
            @foreach ($akuns as $akun)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $akun->username }}</td>
                <td>{{ $akun->password }}</td>
                <td>
                    <form action="{{ route('akun.destroy', $akun->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('akun.edit', $akun->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('akun.show', $akun->id) }}" class="btn btn-primary">Show</a>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
           </tbody>
           
           
        </table>
    </div>

    {!! $akuns->links() !!}
@endsection