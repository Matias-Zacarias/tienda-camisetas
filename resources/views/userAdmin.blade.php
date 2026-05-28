@extends('layouts.panelAdmin')

@section('section')


    <div class="page-header">
        <div>
            <h1 class="page-title">Usuarios</h1>
            <p class="page-subtitle">Administra los usuarios de tu tienda</p>
        </div>
        <button class="btn btn-primary">
            <span>+</span> Agregar Usuario
        </button>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Usuarios</h3>
            <select class="form-select" style="width: auto;">
                <option>Todos los roles</option>
                <option>Administrador</option>
                <option>Editor</option>
                <option>Cliente</option>
            </select>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Pedidos</th>
                        <th>Registro</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <div class="user-avatar" style="width: 36px; height: 36px; font-size: 0.8rem;">
                                    MG</div>
                                <strong>María García</strong>
                            </div>
                        </td>
                        <td>maria@email.com</td>
                        <td><span class="status info">Cliente</span></td>
                        <td>12 pedidos</td>
                        <td>15/01/2026</td>
                        <td><span class="status success">Activo</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" title="Ver">👁️</button>
                                <button class="action-btn edit" title="Editar">✏️</button>
                                <button class="action-btn delete" title="Eliminar">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <div class="user-avatar" style="width: 36px; height: 36px; font-size: 0.8rem;">
                                    CR</div>
                                <strong>Carlos Ruiz</strong>
                            </div>
                        </td>
                        <td>carlos@email.com</td>
                        <td><span class="status warning">Editor</span></td>
                        <td>8 pedidos</td>
                        <td>20/02/2026</td>
                        <td><span class="status success">Activo</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" title="Ver">👁️</button>
                                <button class="action-btn edit" title="Editar">✏️</button>
                                <button class="action-btn delete" title="Eliminar">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <div class="user-avatar" style="width: 36px; height: 36px; font-size: 0.8rem;">
                                    AL</div>
                                <strong>Ana López</strong>
                            </div>
                        </td>
                        <td>ana@email.com</td>
                        <td><span class="status info">Cliente</span></td>
                        <td>25 pedidos</td>
                        <td>05/03/2026</td>
                        <td><span class="status success">Activo</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn view" title="Ver">👁️</button>
                                <button class="action-btn edit" title="Editar">✏️</button>
                                <button class="action-btn delete" title="Eliminar">🗑️</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>




@endsection