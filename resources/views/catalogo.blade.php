@extends('layouts.app')

@section('content')
  <!-- PAGE HEADER -->
  <x-header titulo="Temporada actual" text1="Catálogo de " text2="Camisetas" />

  <x-gridProductos />

  <!-- BANNER -->
  <x-banner titulo="¿No encontrás lo que buscás?" desc="Consultanos y te buscamos el modelo específico." href="/consultas"
    button-name="Hacer una consulta" />


@endsection


@push('scripts')
  <script>
    loadProducts()

  </script>
@endpush