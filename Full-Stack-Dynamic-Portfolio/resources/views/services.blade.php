@extends('layouts.app')

@section('title', 'Services')

@section('content')
<section class="services-hero">
    <div class="container">
        <h1>My Services</h1>
        <p class="hero-subtitle">Comprehensive web development solutions tailored to your needs</p>
    </div>
</section>

<section class="services-grid-section">
    <div class="container">
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Full Stack Development</h3>
                <p>End-to-end web application development using modern technologies like Laravel, React, Vue.js, and Node.js. From database design to user interface implementation.</p>
                <ul class="service-features">
                    <li>Custom Web Applications</li>
                    <li>Database Design & Optimization</li>
                    <li>API Development & Integration</li>
                    <li>Performance Optimization</li>
                </ul>
                <div class="service-price">Starting at $1000</div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Responsive Web Design</h3>
                <p>Creating beautiful, user-friendly websites that work perfectly on all devices. Modern, mobile-first designs that engage your audience and drive conversions.</p>
                <ul class="service-features">
                    <li>Mobile-First Design</li>
                    <li>Cross-Browser Compatibility</li>
                    <li>UI/UX Optimization</li>
                    <li>Interactive Animations</li>
                </ul>
                <div class="service-price">Starting at $500</div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3>E-Commerce Solutions</h3>
                <p>Complete e-commerce platforms with payment integration, inventory management, and admin dashboards. Secure, scalable solutions for your online business.</p>
                <ul class="service-features">
                    <li>Payment Gateway Integration</li>
                    <li>Inventory Management</li>
                    <li>Order Processing System</li>
                    <li>Admin Dashboard</li>
                </ul>
                <div class="service-price">Starting at $1500</div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-server"></i>
                </div>
                <h3>API Development</h3>
                <p>RESTful and GraphQL API development for seamless data integration. Secure, documented, and scalable APIs that power your applications and integrations.</p>
                <ul class="service-features">
                    <li>RESTful API Design</li>
                    <li>GraphQL Implementation</li>
                    <li>API Documentation</li>
                    <li>Authentication & Security</li>
                </ul>
                <div class="service-price">Starting at $800</div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>SEO Optimization</h3>
                <p>Technical SEO implementation to improve your website's search engine rankings. Speed optimization, structured data, and search-friendly architecture.</p>
                <ul class="service-features">
                    <li>Technical SEO Audit</li>
                    <li>Page Speed Optimization</li>
                    <li>Schema Markup</li>
                    <li>SEO-Friendly URLs</li>
                </ul>
                <div class="service-price">Starting at $300</div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Maintenance & Support</h3>
                <p>Ongoing website maintenance, updates, and technical support. Keep your website secure, updated, and running smoothly with regular maintenance services.</p>
                <ul class="service-features">
                    <li>Regular Security Updates</li>
                    <li>Performance Monitoring</li>
                    <li>Bug Fixes & Improvements</li>
                    <li>24/7 Technical Support</li>
                </ul>
                <div class="service-price">Starting at $200/month</div>
            </div>
        </div>
    </div>
</section>

<section class="process-section">
    <div class="container">
        <h2>My Development Process</h2>
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <h3>Discovery & Planning</h3>
                <p>Understanding your requirements, goals, and target audience to create a comprehensive project plan.</p>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <h3>Design & Prototyping</h3>
                <p>Creating wireframes and mockups to visualize the user interface and user experience.</p>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <h3>Development</h3>
                <p>Building your application using modern technologies and best practices for quality and performance.</p>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <h3>Testing & Launch</h3>
                <p>Thorough testing across devices and browsers before deploying your project to production.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Ready to Start Your Project?</h2>
        <p>Let's discuss how I can help bring your ideas to life with professional web development services.</p>
        <a href="/contact" class="cta-button">Get In Touch</a>
    </div>
</section>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.services-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.services-hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.hero-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

.services-grid-section {
    padding: 4rem 0;
    background: #f8f9fa;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.service-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.service-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.service-icon i {
    font-size: 1.8rem;
    color: white;
}

.service-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #333;
}

.service-card p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.service-features {
    list-style: none;
    margin-bottom: 2rem;
}

.service-features li {
    padding: 0.5rem 0;
    color: #555;
    position: relative;
    padding-left: 1.5rem;
}

.service-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #667eea;
    font-weight: bold;
}

.service-price {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    text-align: center;
    margin-top: auto;
}

.process-section {
    padding: 4rem 0;
    background: white;
}

.process-section h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.process-step {
    text-align: center;
    padding: 2rem;
}

.step-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 1rem auto;
}

.process-step h3 {
    margin-bottom: 1rem;
    color: #333;
}

.process-step p {
    color: #666;
    line-height: 1.6;
}

.cta-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.cta-section h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.cta-section p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.cta-button {
    background: white;
    color: #667eea;
    padding: 1rem 2rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: inline-block;
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

@media (max-width: 768px) {
    .services-hero h1 {
        font-size: 2rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .process-steps {
        grid-template-columns: 1fr;
    }
    
    .cta-section h2 {
        font-size: 2rem;
    }
}
</style>
@endsection