@extends('admin.layout.main')

@section('content')
    <div class="breadcrumb">{{url()->current()}}</div>
    <div class="pages">
    <h2>Error 404</h2>
    <p>page does not exist</p>
@endsection
