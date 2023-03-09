@extends('layouts.template')

@section('title', 'Producción')

@section('content')
<div class="m-4 d-flex">
    <div class="text-center m-2">
        <a href="{{route('index')}}"><img src="{{asset('storage/logo2.png')}}" class="rounded-3"></a>
    </div>

    <div class="w-100">
        <div class="text-center bg-white m-2 rounded-3 border border-dark">
            <h6 style="background-color: #E8B800;" class="text-white p-2 d-inline rounded-3 border border-dark">RANGO DE PRODUCCIÓN</h6>
            <div class="text-center d-flex p-3">
                
                <div class="col-3 p-1">
                    <h6 style="background-color: #631D29;" class="text-white p-1 rounded-3">CÓDIGO DE PRODUCCIÓN</h6>
                    <input type="text" class="form-control text-center" value="{{$productions->id+1}}" disabled readonly>
                </div>
        
                <div class="col-3 p-1">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">FECHA ACTUAL</h6>
                    <input type="text" class="form-control text-center" value="{{date('Y-m-d')}}" disabled readonly>
                </div>
        
                <div class="col-3 p-1">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">FECHA A PROGRAMAR</h6>
                    <input type="date" class="form-control text-center">
                </div>
        
                <div class="col-3 p-1">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">SEMANA NRO.</h6>
                    <input type="text" class="form-control text-center" value="{{date('W')}}" disabled readonly>   
                </div>
            </div>
        </div>

        <div class="text-center bg-white m-2 rounded-3 border border-dark mt-4">
            <h6 style="background-color: #E8B800;" class="text-white p-2 d-inline rounded-3 border border-dark">PROGRAMACIÓN POR GRUPO</h6>
            <div class="row m-3">
                <div class="col-3">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">PRODUCTO</h6>
                    <select class="form-select" size="5">
                        @foreach ($products as $product)
                            <option value="{{$loop->iteration}}">{{$product->name}}</option> 
                        @endforeach
                    </select>
                </div>
                
                <div class="col-3">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">TIPO ASTER</h6>
                    <select class="form-select" size="5">
                        @foreach ($typeProducts as $typeProduct)
                            <option value="{{$loop->iteration}}">{{$typeProduct->name}}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="col-6 form-check">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">LABOR</h6>
                    @foreach ($works as $work)
                        <input class="form-check-input m-1" type="checkbox">
                        <label class="form-check-label float-start">
                            {{$work->name}}
                        </label> <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="m-4">
    <div class="bg-white border border-dark rounded-3 m-2">
        <h6 style="background-color: #E8B800;" class="text-white p-2 d-inline rounded-3 border border-dark m-3">PRODUCCIÓN</h6>
        <div class="row m-3 text-center">
            <div class="col-2">
                <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">SEDE</h6>
                <select class="form-select" aria-label="Default select example">
                    <option disabled selected>Selecciona...</option>
                    @foreach ($locations as $location)
                        <option value="{{$loop->iteration}}">{{$location->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-1">
                <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">BLOQUE</h6>
                <input type="text" class="form-control text-center">
            </div>

            <div class="col-1">
                <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">CAMA</h6>
                <input type="text" class="form-control text-center">
            </div>

            <div class="col-1">
                <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">PERSONAS</h6>
                <input type="number" inputmode="numeric" class="form-control text-center">
            </div>

            <div class="col-3">
                <i class="fa-solid fa-file-circle-plus fa-3x float-start"></i>
            </div>

            <div class="col-2">
                <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">HORA ALIMENTACIÓN</h6>
                <input type="time" class="form-control text-center">
            </div>

            <div class="col-2">
                <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">HORA PAUSA ACTIVA</h6>
                <input type="time" class="form-control text-center">
            </div>
        </div>

        <div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection