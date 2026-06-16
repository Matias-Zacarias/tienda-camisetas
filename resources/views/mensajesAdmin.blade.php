@extends('layouts.panelAdmin')

@section('section')

    <div class="page-header">
        <div>
            <h1 class="page-title">Consultas</h1>
            <p class="page-subtitle">Gestiona las consultas de tus clientes</p>
        </div>
    </div>

    <div class="consultas-grid">

        {{-- ── LISTA ── --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mensajes</h3>
                <select class="form-select" style="width:auto;" id="filtro-consultas">
                    <option value="todos">Todos</option>
                    <option value="no-leidos">No leídos</option>
                    <option value="respondidos">Respondidos</option>
                </select>
            </div>

            {{-- Loading --}}
            <div id="lista-loading" class="message-list" style="padding:2rem;text-align:center;color:var(--text-secondary)">
                <span class="spinner-border spinner-border-sm me-2"></span> Cargando...
            </div>

            {{-- Lista renderizada con JS --}}
            <div class="message-list" id="message-list" style="display:none"></div>

            {{-- Vacío --}}
            <div id="lista-empty" style="display:none;padding:2rem;text-align:center;color:var(--text-secondary)">
                No hay consultas para mostrar
            </div>
        </div>

        {{-- ── DETALLE ── --}}
        <div class="card" id="detalle-panel">

            {{-- Estado vacío --}}
            <div id="detalle-empty"
                style="display:flex;flex-direction:column;align-items:center;justify-content:center;height:300px;color:var(--text-secondary)">
                <i class="bi bi-envelope-open" style="font-size:3rem;opacity:.3;margin-bottom:1rem"></i>
                <p>Seleccioná una consulta para verla</p>
            </div>

            {{-- Contenido del detalle --}}
            <div id="detalle-content" style="display:none">

                <div class="card-header">
                    <div>
                        <h3 class="card-title" id="det-nombre">—</h3>
                        <p style="color:var(--text-secondary);font-size:.9rem;margin-top:.25rem">
                            <span id="det-email"></span>
                            &nbsp;·&nbsp;
                            <span id="det-telefono"></span>
                        </p>
                    </div>
                    <div style="display:flex;gap:.5rem;align-items:center">
                        <span id="det-badge-leida"></span>
                        <span id="det-badge-respondida"></span>
                    </div>
                </div>

                <div style="background:var(--bg-tertiary);padding:1.5rem;border-radius:12px;margin-bottom:1.5rem">
                    <p style="color:var(--text-secondary);font-size:.85rem;margin-bottom:1rem" id="det-fecha"></p>
                    <p style="line-height:1.7; color: var(--text-primary)" id="det-mensaje"></p>
                </div>

                <div class="action-buttons">

                    <button class="btn btn-secondary" id="btn-leida" onclick="marcarLeida()">
                        <i class="bi bi-eye me-1"></i> Marcar como leída
                    </button>

                    <button class="btn btn-primary" id="btn-respondida" onclick="marcarRespondida()">
                        <i class="bi bi-check2 me-1"></i> Marcar como respondida
                    </button>

                    <button class="btn btn-outline" onclick="eliminarConsulta()" style="color:#ef4444;border-color:#ef4444">
                        <i class="bi bi-trash3 me-1"></i> Eliminar
                    </button>

                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script>
        // ── Estado ────────────────────────────────────────────────────
        let consultas = [];
        let consultaActual = null;

        function getToken() {
            return localStorage.getItem('token');
        }

        function headers() {
            return {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': `Bearer ${getToken()}`,
            };
        }

        // ── Formato fecha ─────────────────────────────────────────────
        function fmtFecha(iso) {
            if (!iso) return '—';
            return new Date(iso).toLocaleString('es-AR', {
                day: '2-digit', month: '2-digit', year: 'numeric',
                hour: '2-digit', minute: '2-digit',
            });
        }

        function timeAgo(iso) {
            if (!iso) return '';
            const diff = Date.now() - new Date(iso).getTime();
            const m = Math.floor(diff / 60000);
            if (m < 1) return 'Ahora';
            if (m < 60) return `Hace ${m} min`;
            const h = Math.floor(m / 60);
            if (h < 24) return `Hace ${h} h`;
            const d = Math.floor(h / 24);
            if (d === 1) return 'Ayer';
            return `Hace ${d} días`;
        }

        // ── Cargar lista ──────────────────────────────────────────────
        async function cargarConsultas() {
            document.getElementById('lista-loading').style.display = 'block';
            document.getElementById('message-list').style.display = 'none';
            document.getElementById('lista-empty').style.display = 'none';

            try {
                const res = await fetch('/api/consultas', { headers: headers() });
                const data = await res.json();
                if (!res.ok) throw new Error(data.message || 'Error al cargar');
                consultas = data;
                renderLista();
            } catch (err) {
                console.error(err);
            } finally {
                document.getElementById('lista-loading').style.display = 'none';
            }
        }

        // ── Render lista ──────────────────────────────────────────────
        function renderLista() {
            const filtro = document.getElementById('filtro-consultas').value;
            const list = document.getElementById('message-list');
            const empty = document.getElementById('lista-empty');

            let filtradas = [...consultas];

            if (filtro === 'no-leidos') filtradas = filtradas.filter(c => !c.leida);
            if (filtro === 'respondidos') filtradas = filtradas.filter(c => c.respondida);

            if (!filtradas.length) {
                list.style.display = 'none';
                empty.style.display = 'block';
                return;
            }

            empty.style.display = 'none';
            list.style.display = 'block';

            list.innerHTML = filtradas.map(c => `
                                                                                                                        <div
                                                                                                                            class="message-item ${!c.leida ? 'unread' : ''} ${consultaActual?.id === c.id ? 'active' : ''}"
                                                                                                                            onclick="abrirConsulta(${c.id})"
                                                                                                                            style="cursor:pointer"
                                                                                                                        >
                                                                                                                            <div class="message-header">
                                                                                                                                <span class="message-sender">${c.nombre} ${c.apellido}</span>
                                                                                                                                <span class="message-time">${timeAgo(c.created_at)}</span>
                                                                                                                            </div>
                                                                                                                            <div class="message-subject">${c.email}</div>
                                                                                                                            <div class="message-preview">${c.mensaje?.substring(0, 60)}...</div>
                                                                                                                        </div>
                                                                                                                    `).join('');
        }

        // ── Abrir consulta ────────────────────────────────────────────
        async function abrirConsulta(id) {
            try {
                // GET /api/consultas/{id} — también la marca como leída
                const res = await fetch(`/api/consultas/${id}`, { headers: headers() });
                const data = await res.json();
                if (!res.ok) throw new Error(data.message);

                consultaActual = data;

                // Actualizar en el array local
                const idx = consultas.findIndex(c => c.id === id);
                if (idx >= 0) consultas[idx].leida = true;

                renderLista();
                renderDetalle();

            } catch (err) {
                console.error(err);
            }
        }

        // ── Render detalle ────────────────────────────────────────────
        function renderDetalle() {
            const c = consultaActual;
            if (!c) return;

            document.getElementById('detalle-empty').style.display = 'none';
            document.getElementById('detalle-content').style.display = 'block';

            document.getElementById('det-nombre').textContent = `${c.nombre} ${c.apellido}`;
            document.getElementById('det-email').textContent = c.email;
            document.getElementById('det-telefono').textContent = c.telefono ?? 'Sin teléfono';
            document.getElementById('det-fecha').textContent = fmtFecha(c.created_at);
            document.getElementById('det-mensaje').textContent = c.mensaje;

            // Badge leída
            document.getElementById('det-badge-leida').innerHTML = c.leida
                ? `<span class="status success">Leída</span>`
                : `<span class="status warning">No leída</span>`;

            // Badge respondida
            document.getElementById('det-badge-respondida').innerHTML = c.respondida
                ? `<span class="status success">Respondida</span>`
                : `<span class="status" style="background:rgba(99,102,241,.15);color:#818cf8">Sin respuesta</span>`;

            // Botón leída — oculto si ya está leída
            document.getElementById('btn-leida').style.display = c.leida ? 'none' : 'inline-flex';

            // Botón respondida — deshabilitado si ya está respondida
            const btnResp = document.getElementById('btn-respondida');
            btnResp.disabled = c.respondida;
            btnResp.innerHTML = c.respondida
                ? `<i class="bi bi-check2-all me-1"></i> Respondida`
                : `<i class="bi bi-check2 me-1"></i> Marcar como respondida`;
        }

        // ── Marcar leída ──────────────────────────────────────────────
        async function marcarLeida() {
            // El show() del controlador ya la marca como leída
            // Solo actualizamos visualmente (ya se hizo al abrir)
            if (!consultaActual) return;
            consultaActual.leida = true;
            const idx = consultas.findIndex(c => c.id === consultaActual.id);
            if (idx >= 0) consultas[idx].leida = true;
            renderLista();
            renderDetalle();
        }

        // ── Marcar respondida ─────────────────────────────────────────
        async function marcarRespondida() {
            if (!consultaActual) return;

            try {
                const res = await fetch(`/api/consultas/${consultaActual.id}/respondida`, {
                    method: 'PATCH',
                    headers: headers(),
                });
                const data = await res.json();
                if (!res.ok) throw new Error(data.message);

                consultaActual.respondida = true;
                const idx = consultas.findIndex(c => c.id === consultaActual.id);
                if (idx >= 0) consultas[idx].respondida = true;

                renderLista();
                renderDetalle();

            } catch (err) {
                console.error('Error al marcar respondida:', err);
            }
        }

        // ── Eliminar ──────────────────────────────────────────────────
        async function eliminarConsulta() {
            if (!consultaActual) return;
            if (!confirm(`¿Eliminar la consulta de ${consultaActual.nombre}?`)) return;

            try {
                const res = await fetch(`/api/consultas/${consultaActual.id}`, {
                    method: 'DELETE',
                    headers: headers(),
                });
                if (!res.ok) throw new Error('Error al eliminar');

                // Sacar del array local y limpiar detalle
                consultas = consultas.filter(c => c.id !== consultaActual.id);
                consultaActual = null;

                document.getElementById('detalle-empty').style.display = 'flex';
                document.getElementById('detalle-content').style.display = 'none';

                renderLista();

            } catch (err) {
                console.error('Error al eliminar:', err);
            }
        }

        // ── Filtro ────────────────────────────────────────────────────
        document.getElementById('filtro-consultas').addEventListener('change', renderLista);

        // ── Init ──────────────────────────────────────────────────────
        document.addEventListener('DOMContentLoaded', cargarConsultas);
    </script>
@endpush