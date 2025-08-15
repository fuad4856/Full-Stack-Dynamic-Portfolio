
@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<section class="portfolio-hero">
    <div class="container">
        <h1>My Portfolio</h1>
        <p class="hero-subtitle">Explore my recent projects and creative work</p>
    </div>
</section>

<section class="portfolio-content">
    <div class="container">
        <div class="portfolio-items">
            <div class="portfolio-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5wcFct5RnQ4JzGsiBDL0oIvoQ9m_k3rzbjt099E7LZYPHlleU6J6IKW4P3IVxt0sKiqc&usqp=CAU" alt="E-commerce Platform">
                <div class="portfolio-overlay">
                    <h3>E-commerce Platform</h3>
                    <p>Full-stack e-commerce solution with modern UI/UX</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPzoCcge20gwSTYXK4q-qiEaYf_kRJ_Hwv5fKDgFvIMe57XNC6sNPQon9FTtj57NKivYc&usqp=CAU" alt="Mobile App">
                <div class="portfolio-overlay">
                    <h3>Mobile Application</h3>
                    <p>Cross-platform mobile app with React Native</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqzoHv-xVOM4yeKde5BPpLhLqphWt5JLd-B-o_-qRk0U_2koMeO6qW_ll4mp6n_Xrk04A&usqp=CAU" alt="Web Dashboard">
                <div class="portfolio-overlay">
                    <h3>Analytics Dashboard</h3>
                    <p>Data visualization dashboard with real-time analytics</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsrNQUXgb3jPYCEHrpJL1Vqg5caJb1V6d5ZZnTslrWM6u6F9Naw0fJLiQpaJ8ZgdQp3nY&usqp=CAU" alt="CMS System">
                <div class="portfolio-overlay">
                    <h3>Content Management System</h3>
                    <p>Custom CMS built with Laravel and Vue.js</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFUoo8tBpv8H0HDR-xO8iJYRleBOb3pN-ZjXjL_Wvz8ZQPdsX-ldus3KyO_BktmTt02To&usqp=CAU" alt="API Service">
                <div class="portfolio-overlay">
                    <h3>RESTful API Service</h3>
                    <p>Scalable API service with microservices architecture</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5wcFct5RnQ4JzGsiBDL0oIvoQ9m_k3rzbjt099E7LZYPHlleU6J6IKW4P3IVxt0sKiqc&usqp=CAU" alt="Portfolio Website">
                <div class="portfolio-overlay">
                    <h3>Portfolio Website</h3>
                    <p>Responsive portfolio website with modern design</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="technologies-section">
    <div class="container">
        <h2>Technologies Used</h2>
        <div class="tech-grid">
            <div class="tech-item">
                <i class="fab fa-laravel"></i>
                <span>Laravel</span>
            </div>
            <div class="tech-item">
                <i class="fab fa-vue"></i>
                <span>Vue.js</span>
            </div>
            <div class="tech-item">
                <i class="fab fa-react"></i>
                <span>React</span>
            </div>
            <div class="tech-item">
                <i class="fab fa-node-js"></i>
                <span>Node.js</span>
            </div>
            <div class="tech-item">
                <i class="fas fa-database"></i>
                <span>MySQL</span>
            </div>
            <div class="tech-item">
                <i class="fab fa-docker"></i>
                <span>Docker</span>
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

.portfolio-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.portfolio-hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.hero-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
}

.portfolio-content {
    padding: 4rem 0;
    background: #f8f9fa;
}

.portfolio-items {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.portfolio-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: white;
}

.portfolio-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.portfolio-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    display: block;
}

.portfolio-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.9), rgba(0,0,0,0.3));
    color: white;
    padding: 1.5rem;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.portfolio-item:hover .portfolio-overlay {
    transform: translateY(0);
}

.portfolio-overlay h3 {
    margin: 0 0 0.5rem 0;
    font-size: 1.3rem;
    font-weight: 600;
}

.portfolio-overlay p {
    margin: 0;
    font-size: 0.95rem;
    opacity: 0.9;
    line-height: 1.4;
}

.technologies-section {
    padding: 4rem 0;
    background: white;
    text-align: center;
}

.technologies-section h2 {
    margin-bottom: 3rem;
    color: #333;
    font-size: 2.5rem;
}

.tech-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 2rem;
    max-width: 800px;
    margin: 0 auto;
}

.tech-item {
    background: #f8f9fa;
    padding: 2rem 1rem;
    border-radius: 15px;
    transition: transform 0.3s ease, background 0.3s ease;
    border: 2px solid transparent;
}

.tech-item:hover {
    transform: translateY(-5px);
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
}

.tech-item i {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    display: block;
    color: #667eea;
}

.tech-item:hover i {
    color: white;
}

.tech-item span {
    font-weight: 600;
    font-size: 1rem;
}

@media (max-width: 768px) {
    .portfolio-hero h1 {
        font-size: 2rem;
    }
    
    .portfolio-items {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .tech-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }
    
    .tech-item {
        padding: 1.5rem 1rem;
    }
    
    .tech-item i {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .tech-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection