@extends('layouts.panelAdmin')

@section('section')

    <div class="page-header">
        <div>
            <h1 class="page-title">Consultas</h1>
            <p class="page-subtitle">Gestiona las consultas de tus clientes</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 1.5rem;">
        <!-- Messages List -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mensajes</h3>
                <select class="form-select" style="width: auto;">
                    <option>Todos</option>
                    <option>No leídos</option>
                    <option>Respondidos</option>
                </select>
            </div>
            <div class="message-list">
                <div class="message-item unread">
                    <div class="message-header">
                        <span class="message-sender">María García</span>
                        <span class="message-time">10:30</span>
                    </div>
                    <div class="message-subject">Consulta sobre envío</div>
                    <div class="message-preview">Hola, quisiera saber cuánto demora el envío a...</div>
                </div>

                <div class="message-item">
                    <div class="message-header">
                        <span class="message-sender">Carlos Ruiz</span>
                        <span class="message-time">Ayer</span>
                    </div>
                    <div class="message-subject">Devolución de producto</div>
                    <div class="message-preview">Buenos días, necesito hacer una devolución...</div>
                </div>

                <div class="message-item unread">
                    <div class="message-header">
                        <span class="message-sender">Ana López</span>
                        <span class="message-time">Hace 2h</span>
                    </div>
                    <div class="message-subject">Talles disponibles</div>
                    <div class="message-preview">Me gustaría saber si tienen talle L en...</div>
                </div>
            </div>
        </div>

        <!-- Message Detail -->
        <div class="card">
            <div class="card-header">
                <div>
                    <h3 class="card-title">Consulta sobre envío</h3>
                    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-top: 0.25rem;">De: María
                        García • maria@email.com</p>
                </div>
                <span class="status warning">Pendiente</span>
            </div>

            <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 12px; margin-bottom: 1.5rem;">
                <p style="color: var(--text-secondary); font-size: 0.85rem; margin-bottom: 1rem;">20/05/2026 -
                    10:30 AM</p>
                <p style="line-height: 1.7;">
                    Hola, quisiera saber cuánto demora el envío a Corrientes, Argentina.
                    También me gustaría saber si hacen envíos contrarembolso.
                    Estoy interesada en comprar varios productos.
                </p>
            </div>

            <div class="form-group">
                <label class="form-label">Respuesta</label>
                <textarea class="form-textarea" placeholder="Escribe tu respuesta aquí..."></textarea>
            </div>

            <div class="action-buttons">
                <button class="btn btn-primary">Enviar Respuesta</button>
                <button class="btn btn-secondary">Marcar como Leído</button>
                <button class="btn btn-outline">Archivar</button>
            </div>
        </div>
    </div>



@endsection