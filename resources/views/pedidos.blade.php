@extends('layouts.app')

@section('content')

    <x-header titulo="" text1="Mis" text2="Pedidos" />

    <section class="section-dark">
        <div class="container">


            <div id="lista-pedidos">
                {{-- Renderizado por JS --}}
            </div>

        </div>
    </section>

    {{-- Modal --}}
    <div class="modal fade detalle-modal" id="modalPedido" tabindex="-1" aria-labelledby="modalPedidoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPedidoLabel">Detalle del pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body" id="modal-detalle-body">
                    {{-- Rellenado por JS --}}
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script></script>
@endpush