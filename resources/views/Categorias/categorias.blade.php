@extends('templates.sideBar')
@section('contenido')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h1 class="m-0 font-weight-bold text-primary">Categorias</h1>
      <div class="my-2"></div>
                  <a href="{{url('Categorias\create')}}" class="btn btn-success btn-icon-split" >
                    <span class="icon text-white-50">
                        <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">Agregar Categoria</span>
                  </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Acciones</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($categoria as $categorias)
            <tr>
                <td class="text-center">{{$categorias->id}}</td>
                <td class="text-center">{{$categorias->categoria}}</td>
                <td>
                    
                <center>
                    <a class="btn btn-warning btn-circle" href="{{url('/Categorias/'.$categorias->id.'/edit')}}"><i class="fas fa-edit"></i></a>  
                    
                    <form method="post" action="{{url('/Categorias/'.$categorias->id)}}" style="display:inline" > <!--Para agrrar el id unicamente y mandarlo al DESTROY-->
                        {{csrf_field()}} <!--Token de sifrado-->
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-circle" type="submit" onclick="return confirm('¿Desea Borrar este registro?');"><i class="fas fa-trash"></i></button>
                    </form>
                </center>
                    
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection

    