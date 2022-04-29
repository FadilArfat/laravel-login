@extends('layout')
@section('content')
<h1>Lihat</h1>
    <div>
        <h5>Username : {{ $akun->username }}</h5>
        <h5>Password : {{ $akun->password }}</h5>
    </div>
@endsection