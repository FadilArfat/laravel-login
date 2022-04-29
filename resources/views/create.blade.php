@extends('layout')
@section('content')
<h1>Tambah Data</h1>
    <div>
        <form action="{{ route('akun.store') }}" method="POST">
            @csrf
            <label class="my-2" for="username">Username</label><br>
            <input name="username" type="text" ><br>
            <label class="my-2" for="password">Password</label><br>
            <input name="password" type="text"><br>
            <button class="btn btn-success my-2">Tambah Data</button>
        </form>
    </div>
@endsection