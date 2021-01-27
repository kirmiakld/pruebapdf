@extends('layouts.layout_calculadora')
@section('contenido_central')
<div class="container h-100">
    <div class="d-flex justify-content-center">
        <div class="card mt-4 col-md-3 bounceInDown myForm">
            <div class="card-header">
                <h5 align="center">Descripción Paquete</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('calcular') }}" method="post" role="form">
                    @csrf
                    <div id="dynamic_container">
                        <div class="input-group flex-nowrap mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">LARGO_</span>
                            </div>
                            <input type="text" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" class="form-control" name="num_1" id="num_1" placeholder="0" value="@isset($num_1){{ $num_1 }}@endisset">
                        </div>
                        <div class="input-group flex-nowrap mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">ANCHO</span>
                            </div>
                            <input type="text" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" class="form-control" name="num_2" id="num_2" placeholder="0" value="@isset($num_2){{ $num_2 }}@endisset">
                        </div>
                        <div class="input-group flex-nowrap mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">ALTURA</span>
                            </div>
                            <input type="text" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" class="form-control" name="num_3" id="num_3" placeholder="0" value="@isset($num_3){{ $num_3 }}@endisset">
                        </div>
                        <div class="input-group mt-2">
                            <button type="submit" class="btn btn-primary btn-sm flex-center"><i class="fas fa-arrow-alt-circle-right"></i>Calcular</button>
                        </div>
                        @isset($resultado)
                        <div class="input-group mt-2">
                            <label class="col-sm-1-12 col-form-label label_margen_dcha">Resultado: {{ $resultado }} Kg.</label>
                        </div>
                        @endisset
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

