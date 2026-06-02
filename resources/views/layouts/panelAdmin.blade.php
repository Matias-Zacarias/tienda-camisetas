<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Ecommerce</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="/css/estilosAdmin.css">
</head>

<body>
    <!-- Overlay for mobile menu -->
    <div class="overlay" id="overlay"></div>

    <!-- Sidebar -->
    <x-sideBarAdmin />

    <!-- Header -->
    <x-headerAdmin />

    <!-- Main Content -->
    <main class="main-content">
        @yield('section')


    </main>


    <script>

        // ================================================
        // THEME TOGGLE
        // ================================================
        const html = document.documentElement;

        const themeToggle = document.getElementById('themeToggle');

        if (themeToggle) {

            const themeOptions = themeToggle.querySelectorAll('.theme-option');

            // Tema guardado
            const savedTheme = localStorage.getItem('theme') || 'light';

            html.setAttribute('data-theme', savedTheme);

            themeOptions.forEach(option => {

                option.classList.toggle(
                    'active',
                    option.dataset.theme === savedTheme
                );

                option.addEventListener('click', () => {

                    const theme = option.dataset.theme;

                    html.setAttribute('data-theme', theme);

                    localStorage.setItem('theme', theme);

                    themeOptions.forEach(opt => {
                        opt.classList.remove('active');
                    });

                    option.classList.add('active');
                });

            });
        }

        // ================================================
        // MOBILE MENU
        // ================================================
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        if (menuToggle && sidebar && overlay) {

            menuToggle.addEventListener('click', () => {

                sidebar.classList.toggle('mobile-open');

                overlay.classList.toggle('active');

            });

            overlay.addEventListener('click', () => {

                sidebar.classList.remove('mobile-open');

                overlay.classList.remove('active');

            });
        }

        // ================================================
        // TABS
        // ================================================
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {

            tab.addEventListener('click', () => {

                const tabId = tab.dataset.tab;

                tabs.forEach(t => {
                    t.classList.remove('active');
                });

                tab.classList.add('active');

                tabContents.forEach(content => {

                    content.classList.toggle(
                        'active',
                        content.id === tabId
                    );

                });

            });

        });

        // ================================================
        // IMAGE UPLOAD
        // ================================================
        const imageUpload = document.querySelector('.image-upload');

        if (imageUpload) {

            imageUpload.addEventListener('click', () => {

                const input = imageUpload.querySelector(
                    'input[type="file"]'
                );

                if (input) {
                    input.click();
                }

            });

        }


    </script>
    <script src="/js/admin.js"></script>

    @stack('scripts')
</body>

</html>