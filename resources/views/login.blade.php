<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GOLEADOR FC</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito+Sans:wght@300;400;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilosLogin.css') }}">
</head>

<body>
    <div class="background-pattern"></div>

    <div class="login-container">
        <!-- Logo -->
        <div class="login-logo">
            <span class="logo-text">GOLEADOR <span class="logo-accent">FC</span></span>

        </div>

        <!-- Card principal -->
        <div class="login-card">
            <!-- Tabs -->
            <div class="auth-tabs">
                <button class="auth-tab active" data-tab="login">Iniciar Sesión</button>
                <button class="auth-tab" data-tab="register">Registrarse</button>
            </div>

            <!-- Mensaje de éxito -->
            <div class="success-message" id="successMessage"></div>

            <!-- Formulario de Login -->
            <x-FormularioLogin />

            <!-- Formulario de Registro -->
            <x-FormularioRegister />
        </div>

        <!-- Footer -->
        <div class="login-footer">
            <p>¿Necesitas ayuda? <a href="/contacto">Contáctanos</a></p>
            <p style="margin-top: 0.5rem;">
                <a href="/">Volver al inicio</a>
            </p>
        </div>
    </div>

    <script>
        // ========== Alternar entre tabs ==========
        const authTabs = document.querySelectorAll('.auth-tab');
        const authForms = document.querySelectorAll('.auth-form');

        authTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetTab = tab.dataset.tab;

                // Remover active de todos los tabs y forms
                authTabs.forEach(t => t.classList.remove('active'));
                authForms.forEach(f => f.classList.remove('active'));

                // Activar el tab y form seleccionado
                tab.classList.add('active');
                document.getElementById(`${targetTab}Form`).classList.add('active');

                // Limpiar mensajes de éxito
                document.getElementById('successMessage').classList.remove('show');
            });
        });

        // ========== Toggle password visibility ==========
        const togglePasswordButtons = document.querySelectorAll('.toggle-password');

        togglePasswordButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.dataset.target;
                const input = document.getElementById(targetId);
                const type = input.type === 'password' ? 'text' : 'password';

                input.type = type;
                button.classList.toggle('fa-eye');
                button.classList.toggle('fa-eye-slash');
            });
        });

        // ========== Password strength meter ==========
        const registerPasswordInput = document.getElementById('registerPassword');
        const passwordStrength = document.getElementById('passwordStrength');

        if (registerPasswordInput) {
            registerPasswordInput.addEventListener('input', (e) => {
                const password = e.target.value;

                if (password.length === 0) {
                    passwordStrength.classList.remove('show');
                    return;
                }

                passwordStrength.classList.add('show');

                const strengthMeterFill = passwordStrength.querySelector('.strength-meter-fill');
                const strengthText = passwordStrength.querySelector('.strength-text');

                let strength = 'weak';
                let text = 'Débil';

                // Calcular fuerza de contraseña
                if (password.length >= 8) {
                    const hasUpper = /[A-Z]/.test(password);
                    const hasLower = /[a-z]/.test(password);
                    const hasNumber = /[0-9]/.test(password);
                    const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);

                    const criteriaCount = [hasUpper, hasLower, hasNumber, hasSpecial].filter(Boolean).length;

                    if (criteriaCount >= 3) {
                        strength = 'strong';
                        text = 'Fuerte';
                    } else if (criteriaCount >= 2) {
                        strength = 'medium';
                        text = 'Media';
                    }
                }

                strengthMeterFill.className = `strength-meter-fill ${strength}`;
                strengthText.className = `strength-text ${strength}`;
                strengthText.textContent = text;
            });
        }

        // ========== Validación de formularios ==========
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function showError(input, message) {
            const formGroup = input.closest('.form-group');
            formGroup.classList.add('has-error');
            input.classList.add('is-invalid');
            const errorElement = formGroup.querySelector('.form-error');
            if (errorElement && message) {
                errorElement.textContent = message;
            }
        }

        function clearError(input) {
            const formGroup = input.closest('.form-group');
            formGroup.classList.remove('has-error');
            input.classList.remove('is-invalid');
        }

        function showSuccess(message) {
            const successMessage = document.getElementById('successMessage');
            successMessage.textContent = message;
            successMessage.classList.add('show');

            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 5000);
        }

        // ========== Login Form ==========
        const loginForm = document.getElementById('loginForm');

        loginForm.addEventListener('submit', async (e) => {

            e.preventDefault();

            const email = document.getElementById('loginEmail');

            const password = document.getElementById('loginPassword');

            let isValid = true;

            // Limpiar errores previos
            clearError(email);
            clearError(password);

            // Validar email
            if (!email.value.trim()) {

                showError(email, 'El email es requerido');

                isValid = false;

            } else if (!validateEmail(email.value.trim())) {

                showError(email, 'Por favor ingresa un email válido');

                isValid = false;
            }

            // Validar contraseña
            if (!password.value) {

                showError(password, 'La contraseña es requerida');

                isValid = false;
            }

            if (isValid) {

                const submitBtn = loginForm.querySelector('.btn-submit');

                submitBtn.classList.add('loading');

                try {

                    const response = await fetch('/api/login', {

                        method: 'POST',

                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },

                        body: JSON.stringify({

                            email: email.value,

                            password: password.value
                        })
                    });

                    const data = await response.json();

                    console.log(data);

                    // ERROR BACKEND
                    if (!response.ok) {

                        throw new Error(
                            data.message || 'Error al iniciar sesión'
                        );
                    }

                    // Guardar token
                    localStorage.setItem(
                        'token',
                        data.token
                    );

                    // Guardar usuario
                    localStorage.setItem(
                        'user',
                        JSON.stringify(data.user)
                    );

                    showSuccess(
                        '¡Inicio de sesión exitoso!'
                    );

                    console.log('localStorage', localStorage);
                    

                    loginForm.reset();

                    // Redirección
                    /* setTimeout(() => {

                        window.location.href = '/';

                    }, 1500); */

                } catch (error) {

                    console.log(error);

                    showError(email, error.message);


                } finally {

                    submitBtn.classList.remove('loading');
                }
            }
        });
        // ========== Register Form ==========
        const registerForm = document.getElementById('registerForm');

        registerForm.addEventListener('submit', async (e) => {

            e.preventDefault();

            const name = document.getElementById('registerName');
            const email = document.getElementById('registerEmail');
            const password = document.getElementById('registerPassword');

            let isValid = true;

            // validaciones...

            if (isValid) {

                const submitBtn = registerForm.querySelector('.btn-submit');
                submitBtn.classList.add('loading');

                try {

                    const response = await fetch('/api/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            name: name.value,
                            email: email.value,
                            password: password.value
                        })
                    });

                    const data = await response.json();

                    console.log(data);

                    showSuccess('Usuario creado correctamente');

                    registerForm.reset();

                } catch (error) {

                    console.log(error);

                } finally {

                    submitBtn.classList.remove('loading');

                }
            }
        });

        // ========== Limpiar errores al escribir ==========
        const allInputs = document.querySelectorAll('.form-input');
        allInputs.forEach(input => {
            input.addEventListener('input', () => {
                clearError(input);
            });
        });
    </script>
</body>

</html>