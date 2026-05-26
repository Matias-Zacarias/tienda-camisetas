<form class="auth-form active" id="loginForm">
    <div class="form-group">
        <label class="form-label">Email</label>
        <div class="input-wrapper">
            <input type="email" class="form-input" placeholder="tu@email.com" id="loginEmail" required>
            <i class="fas fa-envelope input-icon"></i>
        </div>
        <span class="form-error">Por favor ingresa un email válido</span>
    </div>

    <div class="form-group">
        <label class="form-label">Contraseña</label>
        <div class="input-wrapper">
            <input type="password" class="form-input" placeholder="••••••••" id="loginPassword" required>
            <i class="fas fa-lock input-icon"></i>
            <i class="fas fa-eye toggle-password" data-target="loginPassword"></i>
        </div>
        <span class="form-error">La contraseña es requerida</span>
    </div>

    <div class="form-checkbox-wrapper">
        <input type="checkbox" class="form-checkbox" id="rememberMe">
        <label for="rememberMe" class="form-checkbox-label">Recordarme</label>
    </div>

    <button type="submit" class="btn-submit">Iniciar Sesión</button>

    <div class="form-links">
        <a href="#" class="form-link">¿Olvidaste tu contraseña?</a>
    </div>

    <div class="divider">
        <span>O continúa con</span>
    </div>

    <div class="social-buttons">
        <button type="button" class="btn-social">
            <i class="fab fa-google"></i>
            Google
        </button>
        <button type="button" class="btn-social">
            <i class="fab fa-facebook-f"></i>
            Facebook
        </button>
    </div>
</form>