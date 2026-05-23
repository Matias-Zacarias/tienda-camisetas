@extends('layouts.app')

@section('content')
   <!-- 
       PAGE HEADER
   -->
  <x-header titulo="Temporada actual" text1="Catálogo de " text2="Camisetas" />

  <!-- 
       FILTROS (PROXIMANENTE)
   -->
  <!--  <section class="section-surface py-3">
    <div class="container">
      <div class="d-flex flex-wrap gap-2 align-items-center">
        <span style="color:var(--color-muted);font-size:.85rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase">Filtrar por:</span>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem;background:var(--color-red);border-color:var(--color-red)" type="button">Todos</button>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem" type="button">Selecciones</button>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem" type="button">Clubes Europeos</button>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem" type="button">Clubes Locales</button>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem" type="button">Ofertas</button>
      </div>
    </div>
  </section> -->

  <!-- 
       GRID DE PRODUCTOS
   -->
  <x-gridProductos />


  <!-- BANNER -->
  <x-banner titulo="¿No encontrás lo que buscás?" desc="Consultanos y te buscamos el modelo específico."
    href="/consultas" button-name="Hacer una consulta" />


@endsection

