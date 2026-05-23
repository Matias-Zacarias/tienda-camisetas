@extends('layouts.app')

@section('content')
  <x-hero />

  <x-presentacion />

  <x-productosDestacados />

  <x-banner titulo="¿No encontrás tu camiseta?" desc="Hacenos una consulta y buscamos el modelo que necesitás."
    href="/consultas" button-name="Consultar ahora" />


@endsection

