@extends('admin.layout.main')

@section('content')
    <div class="breadcrumb">{{url()->current()}}</div>
    <div class="pages">
    <h2>Ustawienia:</h2>
    <ul class="d-flex flex-column">
        <li>Wersja larvel: {{ App::VERSION() }}</li>
        <li>Wersja php: {{phpversion()}}</li>
    </ul>
    </div>
@endsection
