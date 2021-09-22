@extends ('app.layout')
    @section ('content')

        <h1 class="h3 mt-5 mb-4 text-gray-800">Usuarios </h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Nuevo usuario</a>
                    </div>
                    <div class="card-body">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                            {{ session()->get('success') }}  
                            </div><br />
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover">
                              <thead>                                 
                                <tr>
                                  <th>#</th>
                                  <th>Nombre</th>
                                  <th>Correo</th>
                                  <th>Usuario</th>
                                  <th>Acciones</th>
                                </tr>
                              </thead>
                              <tbody>    
                                @if(count($users)>0)
                                    @foreach($users as $user)                             
                                    <tr>
                                    <td> {{$user->id}} </td>
                                    <td> {{$user->name}}</td>                        
                                    <td> {{$user->email}} </td>
                                    <td>
                                        @if ($user->type_user == 1)
                                            <div class="badge badge-info">Administrador</div>
                                        @else
                                            <div class="badge badge-warning">Sub Administrador</div>
                                        @endif
                                    </td> 
                                    <td>
                                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary btn-circle btn-sm"><i class="far fa-edit"></i></a>
                                        <form action="{{ route('users.destroy', $user->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-circle btn-sm" type="submit" 
                                            onclick="return confirm('¿Seguro que deseas eliminar este registro?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <tbody>
                                    <tr>
                                        <td align="center" colspan="5"><h6>NO SE ENCONTRARON REGISTROS</h6></td>
                                    </tr>
                                </tbody>  
                                @endif  
                            </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection