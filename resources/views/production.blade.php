@extends('layouts.template')

@section('title', 'Producción')

@section('content')

<style>
    /* *{
        border: 1px solid red;
    }
    .contenedor{
        border: 1px solid black;
    }

    .logo{
        border: 1px solid green;
    } */
</style>
<div class="contenedor">
    <div class="row mt-4">
        <div class="col-3 text-center">
            <img src="..\descargar.png" class="rounded-3">
        </div>

        <div class="col-9">
            <div class="text-center bg-white m-2 rounded-3 border border-dark">
                <h6 style="background-color: #E8B800;" class="p-2 d-inline rounded-3 border border-dark">RANGO DE PRODUCCIÓN</h6>
                <div class="text-center d-flex p-3">
                    
                    <div class="col-3 p-1">
                        <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">CÓDIGO DE PRODUCCIÓN</h6>
                        <input type="text" name="" id="" class="form-control" disabled readonly>
                    </div>
            
                    <div class="col-3 p-1">
                        <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">FECHA ACTUAL</h6>
                        <input type="date" name="" id="" class="form-control" disabled readonly>
                    </div>
            
                    <div class="col-3 p-1">
                        <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">FECHA A PROGRAMAR</h6>
                        <input type="date" name="" id="" class="form-control">
                    </div>
            
                    <div class="col-3 p-1">
                        <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">SEMANA NRO.</h6>
                        <input type="text" name="" id="" class="form-control" disabled readonly>   
                    </div>
                </div>
            </div>

            <div class="text-center bg-white m-2 rounded-3 border border-dark mt-4">
                <h6 style="background-color: #E8B800;" class="p-2 d-inline rounded-3 border border-dark">PROGRAMACIÓN POR GRUPO</h6>
                <div class="row m-3">
                    <div class="col-3">
                        <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">PRODUCTO</h6>
                        <select class="form-select" multiple aria-label="multiple select example">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    
                    <div class="col-3">
                        <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">TIPO ASTER</h6>
                        <select class="form-select" multiple aria-label="multiple select example">
                            <option value="1">PURPLE</option>
                            <option value="2">WHITE</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <h6 style="background-color: #1D3163;" class="text-white p-1 rounded-3">LABOR</h6>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, hic voluptatem. Ex ducimus voluptates architecto velit tempora. Neque adipisci expedita rem, reiciendis corrupti blanditiis maiores labore illum aspernatur! Odit, veritatis!
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection