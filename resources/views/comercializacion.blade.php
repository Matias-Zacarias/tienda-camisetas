@extends('layouts.app')

@section('content')

    <x-header titulo="Comprá con confianza" text1="Cómo " text2="Comprarnos" />
    <!-- 
                       MÉTODOS DE PAGO
                   -->
    <x-metodosPago />

    <!-- 
                       FORMAS DE ENVÍO
                   -->
    <x-formasDeEnvio />

    <!-- 
                       TIEMPOS DE ENTREGA
                   -->
    <x-tiemposEntrega />

    <!-- BANNER -->

    <x-banner titulo="¿Tenés alguna duda sobre tu pedido?" desc="Nuestro equipo responde en menos de 2 horas."
        href="/consultas" button-name="Contactanos" />

@endsection