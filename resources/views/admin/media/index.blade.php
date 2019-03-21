@extends('admin.layout.main')

@section('content')
<div class="breadcrumb">{{url()->current()}}</div>
<div class="pages">
    <h2>Media:</h2>
    <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
</div>
@endsection