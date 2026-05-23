@extends('layouts.app')

@section('content')
  <!-- 
       PAGE HEADER
   -->
  <x-header titulo="Te respondemos en el día" text1="Hacé tu" text2="Consulta" />
  <!-- 
       CONSULTAS RÁPIDAS (FAQ)
   -->
  <x-consultasRapidas />
  <!-- 
       FORMULARIO DE CONSULTA
   -->
  <x-seccionFormulario />


@endsection

