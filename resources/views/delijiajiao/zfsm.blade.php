@extends('delijiajiao.public.public')
@section('title',mb_substr(session('regionname'),0,2))
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<h1>1</h1>
@endsection
@section('js')

@endsection
