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
    <x-sideBarAdmin/>

    <!-- Header -->
    <x-headerAdmin/>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Dashboard Section -->
        <x-dashboardAdmin/> 

        <!-- Products Section -->
        <x-productAdmin/>

        <!-- Orders Section -->
        <x-ordenAdmin/>

        <!-- Users Section -->
        <x-userAdmin/>

        <!-- Messages Section -->
        <x-mensajesAdmin/>

        <!-- Stock Section -->
       <x-stockAdmin/>
        <!-- Statistics Section -->
        <x-statsAdmin/>
    </main>

    <!-- <script>
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const themeOptions = themeToggle.querySelectorAll('.theme-option');
        const html = document.documentElement;

        // Load saved theme
        const savedTheme = localStorage.getItem('theme') || 'light';
        html.setAttribute('data-theme', savedTheme);
        themeOptions.forEach(option => {
            option.classList.toggle('active', option.dataset.theme === savedTheme);
        });

        themeOptions.forEach(option => {
            option.addEventListener('click', () => {
                const theme = option.dataset.theme;
                html.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
                
                themeOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
            });
        });

        // Navigation
        const navItems = document.querySelectorAll('.nav-item[data-section]');
        const sections = document.querySelectorAll('.section');

        navItems.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const sectionId = item.dataset.section;
                
                // Update nav items
                navItems.forEach(nav => nav.classList.remove('active'));
                item.classList.add('active');
                
                // Update sections
                sections.forEach(section => section.classList.remove('active'));
                document.getElementById(sectionId).classList.add('active');

                // Close mobile menu
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('mobile-open');
                    overlay.classList.remove('active');
                }
            });
        });

        // Mobile Menu
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('mobile-open');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('mobile-open');
            overlay.classList.remove('active');
        });

        // Tabs in Products Section
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const tabId = tab.dataset.tab;
                
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                tabContents.forEach(content => {
                    content.classList.toggle('active', content.id === tabId);
                });
            });
        });

        // Image Upload Click Handler
        const imageUpload = document.querySelector('.image-upload');
        if (imageUpload) {
            imageUpload.addEventListener('click', () => {
                const input = imageUpload.querySelector('input[type="file"]');
                input.click();
            });
        }

        // Show Add Product Form Function
        function showAddProduct() {
            const addTab = document.querySelector('[data-tab="add"]');
            if (addTab) {
                addTab.click();
            }
        }
    </script> -->
</body>

</html>