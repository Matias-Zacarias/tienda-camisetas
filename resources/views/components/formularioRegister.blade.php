<form class="auth-form" id="registerForm" method="POST" action="/api/register">
    <div class="form-group">
        <label class="form-label">Nombre Completo</label>
        <div class="input-wrapper">

            <input type="text" name="name" class="form-input" placeholder="Juan Pérez" id="registerName" required>
            <i class="fas fa-user input-icon"></i>
        </div>
        <span class="form-error">El nombre es requerido</span>
    </div>

    <div class="form-group">
        <label class="form-label">Email</label>
        <div class="input-wrapper">
            <input type="email" name="email" class="form-input" placeholder="tu@email.com" id="registerEmail" required>
            <i class="fas fa-envelope input-icon"></i>
        </div>
        <span class="form-error">Por favor ingresa un email válido</span>
    </div>

    <div class="form-group">
        <label class="form-label">Contraseña</label>
        <div class="input-wrapper">
            <input type="password" name="password" class="form-input" placeholder="••••••••" id="registerPassword"
                required>
            <i class="fas fa-lock input-icon"></i>
            <i class="fas fa-eye toggle-password" data-target="registerPassword"></i>
        </div>
        <div class="password-strength" id="passwordStrength">
            <div class="strength-meter">
                <div class="strength-meter-fill"></div>
            </div>
            <span class="strength-text"></span>
        </div>
        <span class="form-error">La contraseña debe tener al menos 8 caracteres</span>
    </div>

    <div class="form-group">
        <label class="form-label">Confirmar Contraseña</label>
        <div class="input-wrapper">
            <input type="password" name="password_confirmation" class="form-input" placeholder="••••••••"
                id="confirmPassword" required>
            <i class="fas fa-lock input-icon"></i>
            <i class="fas fa-eye toggle-password" data-target="registerPasswordConfirm"></i>
        </div>
        <span class="form-error">Las contraseñas no coinciden</span>
    </div>

    <div class="form-checkbox-wrapper">
        <input type="checkbox" class="form-checkbox" id="acceptTerms" required>
        <label for="acceptTerms" class="form-checkbox-label">
            Acepto los <a href="#" class="form-link">términos y condiciones</a>
        </label>
    </div>

    <button type="submit" class="btn-submit">Crear Cuenta</button>

    <!--  <div class="divider">
        <span>O regístrate con</span>
    </div> -->

    <!-- <div class="social-buttons">
        <button type="button" class="btn-social">
            <i class="fab fa-google"></i>
            Google
        </button>
        <button type="button" class="btn-social">
            <i class="fab fa-facebook-f"></i>
            Facebook
        </button>
    </div> -->
</form>