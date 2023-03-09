@extends('layouts.index')

@section('title', 'Inicio')

@section('content')
<div class="text-center" style="margin-top: 18%">
    <img src="{{asset('storage/logo.png')}}">
</div>

<div class="text-center d-flex justify-content-center">
        <a href="{{route('production.create')}}" class="text-decoration-none p-2" style="color: #E8B800;"><h5>Registro producción</h5></a>
</div>
@endsection