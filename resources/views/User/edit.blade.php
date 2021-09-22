@extends ('app.layout')
    @section ('content')

        <h1 class="h3 mt-5 mb-4 text-gray-800">Actualizar usuario </h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Todos los campos marcados con * son requeridos</h6>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div><br />
                        @endif
                        <form class="user" method="POST" action="{{ route('users.update', $user->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="name" type="text" class="form-control"
                                        placeholder="Nombre *" required value="{{ $user->name }}">
                                </div>
                                <div class="col-sm-6">
                                    <input name="email" type="email" class="form-control"
                                        placeholder="Correo Electrónico *" required value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="type_user" class="form-control"  required="">
                                    @if ($user->type_user == 1)
                                        <option selected value="1">Administrador</option>
                                        <option value="0">Sub-Administrador</option>
                                    @else
                                        <option value="1">Administrador</option>
                                        <option selected value="0">Sub-Administrador</option>
                                    @endif
                                  </select>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-user"><i class="fa fa-save"></i> Actualizar</button>
                                <a class="btn btn-danger btn-user" href="{{route('users.index')}}"><i class="fa fa-times-circle"></i> Cancelar</a>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection