@extends('layouts.app')

@section('content')
     <!-- ================================================
            PAGE HEADER
       ================================================ -->
     <x-header titulo="Estamos para vos" text1="Contactá" text2="nos" />


     <!-- ================================================
            CONTACTO PRINCIPAL
       ================================================ -->
     <x-contactoPrincipal />

     <!-- ================================================
            MAPA
       ================================================ -->
     <x-mapa />



@endsection
@push('scripts')
     <script>

     </script>
@endpush