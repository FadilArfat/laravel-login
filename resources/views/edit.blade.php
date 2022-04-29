@extends('layout')
@section('content')
<h1>Edit Data</h1>
    <div>
        <form action="{{ route('akun.update', $akun->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label class="my-2" for="username">Username</label><br>
            <input name="username" type="text" value="{{ $akun->username }}"><br>
            <label class="my-2" for="password">Password</label><br>
            <input name="password" type="text" value="{{ $akun->password }}"><br>
            <button class="btn btn-success my-2">Edit Data</button>
        </form>
    </div>
@endsection