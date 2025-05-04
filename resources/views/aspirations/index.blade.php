@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card main-card" data-aos="fade-up">
                <div class="card-header d-flex align-items-center">
                    <i class="fas fa-bullhorn me-2"></i>
                    <span>Aspirasi</span>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @auth
                    <div class="aspirasi-form p-4 mb-4 rounded">
                        <h5 class="mb-3"><i class="fas fa-edit me-2"></i>Tulis Aspirasi Anda</h5>
                        <form method="POST" action="{{ route('aspirations.store') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <textarea class="form-control @error('content') is-invalid @enderror" 
                                    id="content" name="content" rows="4" 
                                    placeholder="Tuliskan aspirasi, saran, atau kritik Anda di sini..." 
                                    required>{{ old('content') }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary pulse-btn">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Aspirasi
                                </button>
                            </div>
                        </form>
                    </div>
                    <hr class="divider">
                    @else
                    <div class="alert custom-alert" role="alert">
                        <div class="d-flex">
                            <div class="alert-icon me-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div>
                                <h5 class="alert-heading">Login Diperlukan</h5>
                                <p class="mb-0">Untuk menambahkan aspirasi, silakan <a href="{{ route('login') }}" class="alert-link">login</a> atau <a href="{{ route('register') }}" class="alert-link">daftar</a> terlebih dahulu.</p>
                            </div>
                        </div>
                    </div>
                    @endauth

                    <h4 class="section-title mb-4 mt-4">
                        <i class="fas fa-list-alt me-2"></i>Daftar Aspirasi
                    </h4>
                    
                    @if ($aspirations->count() > 0)
                        @foreach ($aspirations as $aspiration)
                            <div class="card aspiration-card mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="card-body">
                                    <p class="card-text">{{ $aspiration->content }}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge user-badge me-2">
                                            <i class="fas fa-user-secret me-1"></i>Anonim
                                        </span>
                                        <small class="text-muted">
                                            <i class="far fa-clock me-1"></i>{{ $aspiration->created_at->format('d-m-Y H:i') }}
                                        </small>
                                    </div>
                                    @auth
                                        @if (Auth::id() === $aspiration->user_id)
                                            <form action="{{ route('aspirations.destroy', $aspiration) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger delete-btn" 
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus aspirasi ini?')">
                                                    <i class="fas fa-trash-alt me-1"></i>Hapus
                                                </button>
                                            </form>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="empty-state text-center p-5 my-4">
                            <i class="fas fa-comment-slash empty-icon mb-3"></i>
                            <p class="lead">Belum ada aspirasi yang ditambahkan.</p>
                            <p class="text-muted">Jadilah yang pertama untuk menyampaikan aspirasi Anda!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Modern background and styling */
    body {
        background: linear-gradient(135deg, #f0f6ff 0%, #e3eeff 100%);
        background-attachment: fixed;
        position: relative;
        font-family: 'Poppins', sans-serif;
    }
    
    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234e89e8' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        z-index: -1;
    }

    /* Main card styling */
    .main-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
        overflow: hidden;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .main-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(50, 50, 93, 0.15), 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Card header styling */
    .card-header {
        background: linear-gradient(to right, #4776E6, #8E54E9);
        color: white;
        font-weight: 600;
        padding: 15px 20px;
        border: none;
        font-size: 1.1rem;
    }
    
    /* Aspirasi form container */
    .aspirasi-form {
        background: linear-gradient(135deg, rgba(71, 118, 230, 0.05) 0%, rgba(142, 84, 233, 0.05) 100%);
        border-radius: 12px;
        border-left: 4px solid #4776E6;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }
    
    .aspirasi-form:hover {
        box-shadow: 0 5px 15px rgba(71, 118, 230, 0.1);
    }
    
    /* Text area styling */
    textarea.form-control {
        border-radius: 10px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        padding: 15px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }
    
    textarea.form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(71, 118, 230, 0.25);
        border-color: #4776E6;
    }
    
    /* Button styling */
    .btn-primary {
        background: linear-gradient(to right, #4776E6, #8E54E9);
        border: none;
        border-radius: 30px;
        padding: 10px 25px;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(71, 118, 230, 0.3);
    }
    
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(71, 118, 230, 0.4);
        background: linear-gradient(to right, #3a67d0, #7946cc);
    }
    
    /* Pulse animation for submit button */
    .pulse-btn {
        position: relative;
    }
    
    .pulse-btn:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 30px;
        background: linear-gradient(to right, #4776E6, #8E54E9);
        z-index: -1;
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% {
            opacity: 0.8;
            transform: scale(1);
        }
        50% {
            opacity: 0;
            transform: scale(1.5);
        }
        100% {
            opacity: 0;
            transform: scale(1.5);
        }
    }
    
    /* Divider */
    .divider {
        height: 1px;
        background: linear-gradient(to right, transparent, rgba(71, 118, 230, 0.2), transparent);
        margin: 30px 0;
    }
    
    /* Section titles */
    .section-title {
        color: #3a5e9e;
        font-weight: 600;
        position: relative;
        display: inline-block;
        margin-bottom: 20px;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(to right, #4776E6, #8E54E9);
        border-radius: 2px;
    }
    
    /* Aspirasi card styling */
    .aspiration-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 20px;
        border-left: 3px solid #8E54E9;
    }
    
    .aspiration-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .aspiration-card .card-body {
        padding: 20px;
    }
    
    .aspiration-card .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding: 12px 20px;
    }
    
    /* Badge styling */
    .user-badge {
        background: linear-gradient(to right, #4776E6, #8E54E9);
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 500;
        font-size: 0.8rem;
    }
    
    /* Delete button */
    .btn-outline-danger.delete-btn {
        border-color: #ff6b6b;
        color: #ff6b6b;
        border-radius: 20px;
        transition: all 0.3s ease;
    }
    
    .btn-outline-danger.delete-btn:hover {
        background-color: #ff6b6b;
        color: white;
    }
    
    /* Empty state */
    .empty-state {
        padding: 40px 20px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 12px;
    }
    
    .empty-icon {
        font-size: 4rem;
        color: #cbd5e1;
    }
    
    /* Custom alert */
    .custom-alert {
        background: linear-gradient(135deg, rgba(71, 118, 230, 0.1) 0%, rgba(142, 84, 233, 0.1) 100%);
        border-left: 4px solid #4776E6;
        border-radius: 12px;
        padding: 1.25rem;
    }
    
    .alert-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(71, 118, 230, 0.2);
        border-radius: 50%;
        color: #4776E6;
        font-size: 1.25rem;
    }
    
    .alert-heading {
        color: #3a5e9e;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .alert-link {
        color: #4776E6;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s;
    }
    
    .alert-link:hover {
        color: #8E54E9;
        text-decoration: underline;
    }
    
    /* Animations */
    [data-aos] {
        opacity: 0;
        transition-property: transform, opacity;
    }
    
    [data-aos].aos-animate {
        opacity: 1;
    }
    
    [data-aos="fade-up"] {
        transform: translateY(20px);
    }
    
    [data-aos="fade-up"].aos-animate {
        transform: translateY(0);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .card-body {
            padding: 20px 15px;
        }
        
        .aspirasi-form {
            padding: 15px !important;
        }
    }
</style>

<script>
    // Initialize AOS animation when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Simulate AOS functionality since we're not actually loading the AOS library
        const animateElements = document.querySelectorAll('[data-aos]');
        
        function checkPosition() {
            for (let i = 0; i < animateElements.length; i++) {
                const element = animateElements[i];
                const positionFromTop = element.getBoundingClientRect().top;
                
                if (positionFromTop - window.innerHeight <= 0) {
                    // Add animation class when element is in viewport
                    setTimeout(() => {
                        element.classList.add('aos-animate');
                    }, element.dataset.aosDelay || 0);
                }
            }
        }
        
        // Initial check
        checkPosition();
        
        // Check on scroll
        window.addEventListener('scroll', checkPosition);
    });
</script>
@endsection