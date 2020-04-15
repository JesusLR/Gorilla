@extends('templates.sideBar')
@section('contenido')


<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h1 class="m-0 font-weight-bold text-primary">Agregar Categoria</h1>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="content">
                        <form name="form-create" id="form-create" class="form-horizontal row-fluid" action="{{url('/Categorias')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <!--token de seguridad-->    
                        <div class="control-group">
                                <label class="control-label" for="categoria">{{'Categoria'}}</label>
                                <div class="controls">
                                    <input type="text" name="categoria" id="categoria" placeholder="Nombre de Categoria" class="form-control span8 tip" required>
                                </div>
                            </div>
        <br>
                            <div class="control-group">
                                <div class="controls">         
                                    <input type="submit" value="Agregar" class="btn btn-success">
                                    <a href="{{url('/Categorias')}}" class="btn btn-danger ">    
                                        <span class="text">Cancelar</span>
                                      </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
      </div>
    </div>
  </div>


@endsection