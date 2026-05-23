@extends('layouts.app')

@section('content')
  <!--  PAGE HEADER -->
  <x-header titulo="Nuestra empresa" text1="Quiénes " text2="Somos" />


  <!-- HISTORIA-->
  <x-historia />

  <!--  OBJETIVOS / MISIÓN-VISIÓN -->
  <x-objetivosMision />>

  <!-- BANNER -->
  <x-banner titulo="Formá parte de nuestra comunidad"
    desc="Más de 15.000 usuarios ya confían en nosotros. Unite al equipo." href="/catalogo"
    button-name="Ver catálogo" />


@endsection
