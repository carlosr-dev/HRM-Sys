@extends ('app.layout')
    @section ('content')
        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">Parece que la pagina a la que intentas acceder no esta disponible ...</p>
            <a href="{{url('/dashboard')}}">&larr; Back to Dashboard</a>
        </div>
    @endsection