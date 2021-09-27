@extends ('app.layout')
@section('content')

    <h1 class="h3 mt-5 mb-4 text-gray-800">Empresas </h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{ route('branches.create') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Nueva empresa</a>
                </div>
                <div class="card-body">
                    @if (session()->get('success'))
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
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($branches) > 0)
                                    @foreach ($branches as $branch)
                                        <tr>
                                            <td> {{ $branch->id }} </td>
                                            <td> {{ $branch->name }}</td>
                                            <td>
                                                <a href="{{ route('branches.edit', $branch->id) }}"
                                                    class="btn btn-primary btn-circle btn-sm"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="{{ route('branches.destroy', $branch->id) }}" method="post"
                                                    style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-circle btn-sm" type="submit"
                                                        onclick="return confirm('¿Seguro que deseas eliminar este registro?')"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        @else
                            <tbody>
                                <tr>
                                    <td align="center" colspan="3">
                                        <h6>NO SE ENCONTRARON REGISTROS</h6>
                                    </td>
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
