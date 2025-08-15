
@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<section class="contact-hero">
    <div class="container">
        <h1>Get In Touch</h1>
        <p class="hero-subtitle">Let's work together to bring your ideas to life</p>
    </div>
</section>

<section class="contact-info-section">
    <div class="container">
        <h2>Contact Information</h2>
        <div class="contact-grid">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="contact-details">
                    <h3>Name</h3>
                    <p>Md. Fuad Hossain</p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <h3>Email</h3>
                    <p>fuad15-4856@email.com</p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-details">
                    <h3>Phone</h3>
                    <p>01531349694</p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                    <h3>Location</h3>
                    <p>Bangladesh</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="social-section">
    <div class="container">
        <h2>Connect With Me</h2>
        <p>Follow me on social media for updates and insights</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/mdfuadhossain.minhaz.7" target="_blank" class="social-icon facebook">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
            </a>
            <a href="https://www.instagram.com/mdfuadhossainminhaz/" target="_blank" class="social-icon instagram">
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
            </a>
            <a href="#" onclick="copyDiscord()" class="social-icon discord">
                <i class="fab fa-discord"></i>
                <span>Discord: obito007</span>
            </a>
            <a href="mailto:fuad15-4856@email.com" class="social-icon email">
                <i class="fas fa-envelope"></i>
                <span>Email</span>
            </a>
        </div>
    </div>
</section>

<section class="services-preview">
    <div class="container">
        <h2>What I Can Do For You</h2>
        <div class="services-grid">
            <div class="service-item">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Full Stack Development</h3>
                <p>Complete web application development from frontend to backend</p>
            </div>
            <div class="service-item">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Responsive Design</h3>
                <p>Mobile-first, responsive websites that work on all devices</p>
            </div>
            <div class="service-item">
                <div class="service-icon">
                    <i class="fas fa-server"></i>
                </div>
                <h3>API Development</h3>
                <p>RESTful and GraphQL APIs for seamless data integration</p>
            </div>
            <div class="service-item">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>SEO Optimization</h3>
                <p>Technical SEO to improve your search engine rankings</p>
            </div>
        </div>
        <a href="/services" class="services-link">View All Services</a>
    </div>
</section>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.contact-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.contact-hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.hero-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
}

.contact-info-section {
    padding: 4rem 0;
    background: #f8f9fa;
}

.contact-info-section h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.contact-item {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.contact-item:hover {
    transform: translateY(-10px);
}

.contact-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem auto;
}

.contact-icon i {
    font-size: 1.8rem;
    color: white;
}

.contact-details h3 {
    margin-bottom: 0.5rem;
    color: #333;
    font-size: 1.2rem;
}

.contact-details p {
    margin: 0;
    color: #666;
    font-size: 1rem;
}

.social-section {
    padding: 4rem 0;
    background: white;
    text-align: center;
}

.social-section h2 {
    margin-bottom: 1rem;
    color: #333;
    font-size: 2.5rem;
}

.social-section p {
    margin-bottom: 3rem;
    color: #666;
    font-size: 1.1rem;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
}

.social-icon {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 1.5rem;
    border-radius: 15px;
    text-decoration: none;
    color: white;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-width: 120px;
}

.social-icon:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.social-icon.facebook {
    background: linear-gradient(135deg, #3b5998, #8b9dc3);
}

.social-icon.instagram {
    background: linear-gradient(135deg, #e4405f, #ffcc70);
}

.social-icon.discord {
    background: linear-gradient(135deg, #7289da, #99aab5);
    cursor: pointer;
}

.social-icon.email {
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.social-icon i {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.social-icon span {
    font-size: 0.9rem;
    font-weight: 500;
}

.services-preview {
    padding: 4rem 0;
    background: #f8f9fa;
    text-align: center;
}

.services-preview h2 {
    margin-bottom: 3rem;
    color: #333;
    font-size: 2.5rem;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.service-item {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
}

.service-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem auto;
}

.service-icon i {
    font-size: 1.8rem;
    color: white;
}

.service-item h3 {
    margin-bottom: 1rem;
    color: #333;
}

.service-item p {
    color: #666;
    line-height: 1.6;
}

.services-link {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 1rem 2rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    transition: transform 0.3s ease;
}

.services-link:hover {
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .contact-hero h1 {
        font-size: 2rem;
    }
    
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .social-icons {
        gap: 1rem;
    }
    
    .social-icon {
        min-width: 100px;
        padding: 1rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
function copyDiscord() {
    navigator.clipboard.writeText('obito007').then(function() {
        alert('Discord username copied to clipboard: obito007');
    }).catch(function() {
        alert('Discord username: obito007');
    });
}
</script>
@endsection

<section class="social-section">
    <div class="container">
        <h2>Connect With Me</h2>
        <p>Follow me on social media for updates and insights</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/mdfuadhossain.minhaz.7" target="_blank" class="social-icon facebook">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
            </a>
            <a href="https://www.instagram.com/mdfuadhossainminhaz/" target="_blank" class="social-icon instagram">
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
            </a>
            <a href="#" onclick="copyDiscord()" class="social-icon discord">
                <i class="fab fa-discord"></i>
                <span>Discord: obito007</span>
            </a>
            <a href="mailto:fuad15-4856@email.com" class="social-icon email">
                <i class="fas fa-envelope"></i>
                <span>Email</span>
            </a>
        </div>
    </div>
</section>

<section class="services-preview">
    <div class="container">
        <h2>What I Can Do For You</h2>
        <div class="services-grid">
            <div class="service-item">
                <i class="fas fa-code"></i>
                <h3>Full Stack Development</h3>
                <p>Complete web application development from frontend to backend</p>
            </div>
            <div class="service-item">
                <i class="fas fa-mobile-alt"></i>
                <h3>Responsive Design</h3>
                <p>Mobile-first, responsive websites that work on all devices</p>
            </div>
            <div class="service-item">
                <i class="fas fa-server"></i>
                <h3>API Development</h3>
                <p>RESTful and GraphQL APIs for seamless data integration</p>
            </div>
            <div class="service-item">
                <i class="fas fa-search"></i>
                <h3>SEO Optimization</h3>
                <p>Technical SEO to improve your search engine rankings</p>
            </div>
        </div>
        <a href="/services" class="services-link">View All Services</a>
    </div>
</section>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.contact-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.contact-hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.hero-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
}

.contact-content {
    padding: 4rem 0;
    background: #f8f9fa;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
}

.contact-info h2, .contact-form h2 {
    margin-bottom: 2rem;
    color: #333;
    font-size: 2rem;
}

.contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
    background: white;
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.contact-item i {
    font-size: 1.5rem;
    color: #667eea;
    margin-right: 1rem;
    width: 30px;
}

.contact-item h3 {
    margin: 0 0 0.5rem 0;
    color: #333;
    font-size: 1.1rem;
}

.contact-item p {
    margin: 0;
    color: #666;
}

.contact-form {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 1rem;
    border: 2px solid #e1e1e1;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #667eea;
}

.submit-btn {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 1rem 2rem;
    border: none;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 100%;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
}

.social-section {
    padding: 4rem 0;
    background: white;
    text-align: center;
}

.social-section h2 {
    margin-bottom: 1rem;
    color: #333;
    font-size: 2.5rem;
}

.social-section p {
    margin-bottom: 3rem;
    color: #666;
    font-size: 1.1rem;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
}

.social-icon {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 1.5rem;
    border-radius: 15px;
    text-decoration: none;
    color: white;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-width: 120px;
}

.social-icon:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.social-icon.facebook {
    background: linear-gradient(135deg, #3b5998, #8b9dc3);
}

.social-icon.instagram {
    background: linear-gradient(135deg, #e4405f, #ffcc70);
}

.social-icon.discord {
    background: linear-gradient(135deg, #7289da, #99aab5);
    cursor: pointer;
}

.social-icon.email {
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.social-icon i {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.social-icon span {
    font-size: 0.9rem;
    font-weight: 500;
}

.services-preview {
    padding: 4rem 0;
    background: #f8f9fa;
    text-align: center;
}

.services-preview h2 {
    margin-bottom: 3rem;
    color: #333;
    font-size: 2.5rem;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.service-item {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
}

.service-item i {
    font-size: 2.5rem;
    color: #667eea;
    margin-bottom: 1rem;
}

.service-item h3 {
    margin-bottom: 1rem;
    color: #333;
}

.service-item p {
    color: #666;
    line-height: 1.6;
}

.services-link {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 1rem 2rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    transition: transform 0.3s ease;
}

.services-link:hover {
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .contact-hero h1 {
        font-size: 2rem;
    }
    
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .social-icons {
        gap: 1rem;
    }
    
    .social-icon {
        min-width: 100px;
        padding: 1rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
function copyDiscord() {
    navigator.clipboard.writeText('obito007').then(function() {
        alert('Discord username copied to clipboard: obito007');
    }).catch(function() {
        alert('Discord username: obito007');
    });
}
</script>
@endsection