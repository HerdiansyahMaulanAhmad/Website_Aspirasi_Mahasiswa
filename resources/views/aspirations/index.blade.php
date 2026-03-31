<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMA-TI</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #3a86ff;
            --secondary-color: #8338ec;
            --accent-color: #ff006e;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            background-attachment: fixed;
            position: relative;
            min-height: 100vh;
        }
        
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%233a86ff' fill-opacity='0.05'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: -1;
        }
        
        /* Navbar Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-color);
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .navbar-toggler {
            border: none;
            outline: none;
        }
        
        /* Dropdown Styling */
        .dropdown-menu {
            border: none;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .dropdown-item {
            padding: 10px 20px;
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover {
            background: rgba(58, 134, 255, 0.1);
            color: var(--primary-color);
            transform: translateX(5px);
        }
        
        /* Card Styling */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(50, 50, 93, 0.15), 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            font-weight: 600;
            padding: 15px 20px;
            border: none;
        }
        
        .card-body {
            padding: 30px;
        }
        
        /* Button Styling */
        .btn-primary {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(58, 134, 255, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(58, 134, 255, 0.4);
        }
        
        /* List Styling */
        ul li, ol li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 5px;
        }
        
        ul {
            list-style-type: none;
            padding-left: 20px;
        }
        
        /* Menghilangkan bullet point biru dari ul li sebelumnya */
        ul li:before {
            content: none; /* Ubah dari '•' menjadi none untuk menghilangkan bullet point */
        }
        
        /* Menghilangkan titik biru bundar kecil di bagian atas navbar */
        .navbar .navbar-nav li:before {
            content: none;
        }
        
        /* Jika titik tersebut adalah bagian dari custom styling, pastikan untuk menghilangkannya */
        .navbar .navbar-nav li.nav-item:after {
            display: none;
        }
        
        /* Typography */
        h4 {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 20px;
        }
        
        h5 {
            color: var(--primary-color);
            font-weight: 600;
            margin-top: 25px;
            margin-bottom: 15px;
        }
        
        p {
            color: #4a4a4a;
            line-height: 1.8;
            margin-bottom: 15px;
        }
        
        /* Footer Styling */
        footer {
            background: rgba(26, 26, 46, 0.95);
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }
        
        /* Animation classes */
        .fade-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-up.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card-body {
                padding: 20px;
            }
        }
        
        /* Dark Mode Styling overrides */
        [data-bs-theme="dark"] body {
            background: linear-gradient(135deg, #121212 0%, #2a2a35 100%);
            color: #e0e0e0;
        }
        [data-bs-theme="dark"] .navbar {
            background: rgba(30, 30, 30, 0.8);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        }
        [data-bs-theme="dark"] .nav-link, 
        [data-bs-theme="dark"] .navbar-brand {
            color: #e0e0e0;
        }
        [data-bs-theme="dark"] h4,
        [data-bs-theme="dark"] h5 {
            color: #e0e0e0 !important;
        }
        [data-bs-theme="dark"] h5.text-primary {
            color: var(--primary-color) !important;
        }
        [data-bs-theme="dark"] .card {
            background: rgba(40, 40, 40, 0.9);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3), 0 5px 15px rgba(0, 0, 0, 0.2);
            color: #e0e0e0;
        }
        [data-bs-theme="dark"] p,
        [data-bs-theme="dark"] label,
        [data-bs-theme="dark"] .table {
            color: #b0b0b0;
        }
        [data-bs-theme="dark"] .dropdown-menu {
            background: rgba(40, 40, 40, 0.95);
        }
        [data-bs-theme="dark"] .dropdown-item {
            color: #e0e0e0;
        }
        [data-bs-theme="dark"] .dropdown-item:hover {
            background: rgba(58, 134, 255, 0.2);
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <!-- Navbar - Conditional based on login status -->
    @if(Auth::check())
    <!-- Navbar for Logged-in Users -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-comment-dots me-2"></i>SAMA-TI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="aspirasi"><i class="fas fa-bullhorn me-1"></i> Aspirasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about"><i class="fas fa-info-circle me-1"></i> Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data"><i class="fas fa-history me-1"></i> Data</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link nav-link shadow-none" id="theme-toggle" title="Toggle Dark/Light Mode">
                            <i class="fas fa-moon"></i>
                        </button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-1"></i> <span>{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="profile"><i class="fas fa-id-card me-2"></i>Profil Saya</a></li>
                            <li><a class="dropdown-item" href="settings"><i class="fas fa-cog me-2"></i>Pengaturan</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" 
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @else
    <!-- Original Navbar for Non-logged-in Users -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-comment-dots me-2"></i>SAMA-TI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Menghapus titik biru di sini -->
                    <li class="nav-item">
                        <a class="nav-link" href="aspirasi"><i class="fas fa-bullhorn me-1"></i> Aspirasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about"><i class="fas fa-info-circle me-1"></i> Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register"><i class="fas fa-user-plus me-1"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login"><i class="fas fa-sign-in-alt me-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link nav-link shadow-none" id="theme-toggle" title="Toggle Dark/Light Mode">
                            <i class="fas fa-moon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endif

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Aspirasi</div>
    
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
    
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
    
                        @auth
                        <form method="POST" action="{{ route('aspirations.store') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="content">Tulis Aspirasi Anda</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3" required>{{ old('content') }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Kirim Aspirasi</button>
                            </div>
                        </form>
                        <hr>
                        @else
                        <div class="alert alert-info">
                            Untuk menambahkan aspirasi, silakan <a href="{{ route('login') }}">login</a> atau <a href="{{ route('register') }}">daftar</a> terlebih dahulu.
                        </div>
                        @endauth
    
                        <h4>Daftar Aspirasi Teknologi Informasi</h4>
                        @if ($aspirations->count() > 0)
                            @foreach ($aspirations as $aspiration)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <p class="card-text">{{ $aspiration->content }}</p>
                                    </div>
                                    <div class="card-footer text-muted d-flex justify-content-between">
                                        <div>
                                            <small>Anonim</small> - 
                                            <small>{{ $aspiration->created_at->format('d-m-Y H:i') }}</small>
                                        </div>
                                        @auth
                                            @if (Auth::id() === $aspiration->user_id)
                                                <form action="{{ route('aspirations.destroy', $aspiration) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus aspirasi ini?')">Hapus</button>
                                                </form>
                                            @endif
                                        @endauth
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center">Belum ada aspirasi yang ditambahkan.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-3"><i class="fas fa-comment-dots me-2"></i>SAMA-TI</h5>
                    <p>Sistem Online Suara Aspirasi Mahasiswa Teknologi Informasi Universitas </p>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-3">Tautan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Aspirasi</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Tentang</a></li>
                        @if(Auth::check())
                        <li><a href="#" class="text-white text-decoration-none">Data</a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-3">Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="fab fa-instagram me-2"></i><a href="#" class="text-white text-decoration-none">@hmti.unimus</a></li>
                        <li><i class="fab fa-instagram me-2"></i><a href="#" class="text-white text-decoration-none">@advokastrat.hmti</a></li>
                        <li><i class="fab fa-tiktok me-2"></i><a href="#" class="text-white text-decoration-none">@hmti_unimus</a></li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 SAMA-TI</p>
                <p>Universitas Muhammdiyah Semarang</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Theme toggling logic
        const themeToggles = document.querySelectorAll('#theme-toggle');
        const currentTheme = localStorage.getItem('theme') || 
            (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            
        function setTheme(theme) {
            document.documentElement.setAttribute('data-bs-theme', theme);
            localStorage.setItem('theme', theme);
            themeToggles.forEach(toggle => {
                const icon = toggle.querySelector('i');
                if(theme === 'dark') {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun', 'text-warning');
                } else {
                    icon.classList.remove('fa-sun', 'text-warning');
                    icon.classList.add('fa-moon');
                }
            });
        }
        
        setTheme(currentTheme);
        
        themeToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const newTheme = document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
                setTheme(newTheme);
            });
        });

        // Initialize AOS animation
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Add scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-up');
            
            function checkPosition() {
                for (let i = 0; i < fadeElements.length; i++) {
                    const element = fadeElements[i];
                    const positionFromTop = element.getBoundingClientRect().top;
                    
                    if (positionFromTop - window.innerHeight <= 0) {
                        element.classList.add('active');
                    }
                }
            }
            
            window.addEventListener('scroll', checkPosition);
            checkPosition();
        });
    </script>
</body>
</html>