@extends('layouts.panelAdmin')

@section('section')


    <div class="page-header">
        <div>
            <h1 class="page-title">Usuarios</h1>
            <p class="page-subtitle">Administra los usuarios de tu tienda</p>
        </div>

    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Usuarios</h3>
            <select id="roleFilter" class="form-select" style="width: auto;">
                <option value="">Todos los roles</option>
                <option value="admin">Administrador</option>

                <option value="user">usuario</option>
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

                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="usersTableBody"></tbody>
            </table>
        </div>
    </div>




@endsection

@push('scripts')
    <script>
        loadUsers();
    </script>
@endpush