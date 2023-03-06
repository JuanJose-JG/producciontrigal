@extends('layouts.template')

@section('title', 'Producción')

@section('content')
<div class="m-4 d-flex">
    <div class="text-center m-2">
        <img src="..\descargar.png" class="rounded-3">
    </div>

    <div class="w-100">
        <div class="text-center bg-white m-2 rounded-3 border border-dark">
            <h6 style="background-color: #E8B800;" class="p-2 d-inline rounded-3 border border-dark">RANGO DE PRODUCCIÓN</h6>
            <div class="text-center d-flex p-3">
                
                <div class="col-3 p-1">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">CÓDIGO DE PRODUCCIÓN</h6>
                    <input type="text" class="form-control text-center" disabled readonly>
                </div>
        
                <div class="col-3 p-1">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">FECHA ACTUAL</h6>
                    <input type="text" class="form-control text-center" value="{{date('d-m-Y')}}" disabled readonly>
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
            <h6 style="background-color: #E8B800;" class="p-2 d-inline rounded-3 border border-dark">PROGRAMACIÓN POR GRUPO</h6>
            <div class="row m-3">
                <div class="col-3">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">PRODUCTO</h6>
                    <select class="form-select" size="5">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                    </select>
                </div>
                
                <div class="col-3">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">TIPO ASTER</h6>
                    <select class="form-select" size="5">
                        <option value="1">PURPLE</option>
                        <option value="2">WHITE</option>
                    </select>
                </div>

                <div class="col-6 form-check">
                    <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">LABOR</h6>
                    <input class="form-check-input m-1" type="checkbox">
                    <label class="form-check-label float-start">
                        Default checkbox
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection