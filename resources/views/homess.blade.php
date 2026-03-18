@extends('layouts.app')

@section('title', 'Prodi Sistem Informasi - UNJA')

@section('content')
<p>BODY | nama: {{ $data['name'] }}, email: {{ $data['email'] }}</p>
@endsection