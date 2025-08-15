@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="home-hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Hello, I am</h1>
                <h2>Md. Fuad Hossain</h2>
                <p class="role"><b>Full Stack Developer</b></p>
                
                <div class="contact-info">
                    <p><i class="fas fa-envelope"></i> Email: fuad15-4856@email.com</p>
                    <p><i class="fas fa-phone"></i> Phone: 01531349694</p>
                </div>
                
                <div class="hero-buttons">
                    <a href="{{ route('auth.login') }}" class="login-btn">Login</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://avatars.githubusercontent.com/u/196004051?v=4" alt="Profile Picture">
            </div>
        </div>
    </div>
</section>

<section class="home-preview">
    <div class="container">
        <div class="preview-grid">
            <div class="preview-item">
                <div class="preview-icon">
                    <i class="fas fa-user"></i>
                </div>
                <h3>About Me</h3>
                <p>Learn more about my background, skills, and experience in web development.</p>
                <a href="/about" class="preview-link">Learn More</a>
            </div>
            <div class="preview-item">
                <div class="preview-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Services</h3>
                <p>Discover the comprehensive web development services I offer to clients.</p>
                <a href="/services" class="preview-link">View Services</a>
            </div>
            <div class="preview-item">
                <div class="preview-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>Portfolio</h3>
                <p>Explore my recent projects and see examples of my work in action.</p>
                <a href="/portfolio" class="preview-link">View Portfolio</a>
            </div>
            <div class="preview-item">
                <div class="preview-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Contact</h3>
                <p>Get in touch with me for collaborations, projects, or just to say hello.</p>
                <a href="/contact" class="preview-link">Contact Me</a>
            </div>
        </div>
    </div>
</section>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.home-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 4rem 0;
    min-height: 70vh;
    display: flex;
    align-items: center;
}

.hero-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
    align-items: center;
}

.hero-text h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
    font-weight: 400;
}

.hero-text h2 {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
    background: linear-gradient(45deg, #ffffff, #f0f0f0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.role {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.contact-info {
    margin-bottom: 2rem;
}

.contact-info p {
    margin-bottom: 0.8rem;
    font-size: 1.1rem;
    opacity: 0.9;
}

.contact-info i {
    margin-right: 0.5rem;
    width: 20px;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.login-btn, .about-btn {
    padding: 1rem 2rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: inline-block;
}

.login-btn {
    background: white;
    color: #667eea;
}

.about-btn {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border: 2px solid white;
}

.login-btn:hover, .about-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.hero-image {
    text-align: center;
}

.hero-image img {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.home-preview {
    padding: 4rem 0;
    background: #f8f9fa;
}

.preview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.preview-item {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.preview-item:hover {
    transform: translateY(-10px);
}

.preview-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem auto;
}

.preview-icon i {
    font-size: 2rem;
    color: white;
}

.preview-item h3 {
    margin-bottom: 1rem;
    color: #333;
    font-size: 1.3rem;
}

.preview-item p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.preview-link {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 500;
    transition: transform 0.3s ease;
    display: inline-block;
}

.preview-link:hover {
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .hero-content {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 2rem;
    }
    
    .hero-text h1 {
        font-size: 2rem;
    }
    
    .hero-text h2 {
        font-size: 2.5rem;
    }
    
    .hero-image img {
        width: 250px;
        height: 250px;
    }
    
    .hero-buttons {
        justify-content: center;
    }
    
    .preview-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 480px) {
    .hero-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .login-btn, .about-btn {
        width: 200px;
        text-align: center;
    }
}
</style>
@endsection
