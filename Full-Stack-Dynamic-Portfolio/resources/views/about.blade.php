@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<section class="about-hero">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h1>About Me</h1>
                <h3>Hi, I'm <span class="highlight">Md. Fuad Hossain</span></h3>
                <p class="intro">A passionate Full Stack Developer with expertise in modern web technologies and frameworks. I love creating innovative solutions and bringing ideas to life through code.</p>
                
                <div class="about-details">
                    <div class="detail-card">
                        <i class="fas fa-code"></i>
                        <h4>Clean Code</h4>
                        <p>Writing maintainable, scalable, and efficient code following best practices.</p>
                    </div>
                    <div class="detail-card">
                        <i class="fas fa-mobile-alt"></i>
                        <h4>Responsive Design</h4>
                        <p>Creating beautiful, responsive applications that work seamlessly across all devices.</p>
                    </div>
                    <div class="detail-card">
                        <i class="fas fa-rocket"></i>
                        <h4>Performance</h4>
                        <p>Optimizing applications for speed, scalability, and exceptional user experience.</p>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5wcFct5RnQ4JzGsiBDL0oIvoQ9m_k3rzbjt099E7LZYPHlleU6J6IKW4P3IVxt0sKiqc&usqp=CAU" alt="Md. Fuad Hossain">
            </div>
        </div>
    </div>
</section>

<section class="skills-section">
    <div class="container">
        <h2>Technical Skills</h2>
        <div class="skills-grid">
            <div class="skill-category">
                <h3>Frontend</h3>
                <div class="skills">
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS3</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">React</span>
                    <span class="skill-tag">Vue.js</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Backend</h3>
                <div class="skills">
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">Python</span>
                    <span class="skill-tag">MySQL</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Tools & Others</h3>
                <div class="skills">
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">AWS</span>
                    <span class="skill-tag">REST APIs</span>
                    <span class="skill-tag">GraphQL</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="experience-section">
    <div class="container">
        <h2>Experience & Education</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">2023 - Present</div>
                <div class="timeline-content">
                    <h3>Full Stack Developer</h3>
                    <p>Developing robust web applications using modern technologies and frameworks.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2022 - 2023</div>
                <div class="timeline-content">
                    <h3>Frontend Developer</h3>
                    <p>Specialized in creating responsive and interactive user interfaces.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2020 - 2022</div>
                <div class="timeline-content">
                    <h3>Web Development Studies</h3>
                    <p>Learned modern web development technologies and best practices.</p>
                </div>
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

.about-hero {
    padding: 4rem 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.about-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
    align-items: center;
}

.about-text h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.about-text h3 {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    font-weight: 400;
}

.highlight {
    color: #ffd700;
    font-weight: 600;
}

.intro {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 3rem;
    opacity: 0.95;
}

.about-details {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.detail-card {
    background: rgba(255, 255, 255, 0.1);
    padding: 1.5rem;
    border-radius: 10px;
    text-align: center;
    backdrop-filter: blur(10px);
}

.detail-card i {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #ffd700;
}

.detail-card h4 {
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
}

.about-image {
    text-align: center;
}

.about-image img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid rgba(255, 255, 255, 0.2);
}

.skills-section {
    padding: 4rem 0;
    background: #f8f9fa;
}

.skills-section h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.skill-category {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.skill-category h3 {
    margin-bottom: 1rem;
    color: #667eea;
    font-size: 1.3rem;
}

.skills {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.skill-tag {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 500;
}

.experience-section {
    padding: 4rem 0;
    background: white;
}

.experience-section h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.timeline {
    max-width: 800px;
    margin: 0 auto;
    position: relative;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #667eea;
    transform: translateX(-50%);
}

.timeline-item {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    margin-bottom: 3rem;
    position: relative;
}

.timeline-item:nth-child(even) .timeline-date {
    order: 2;
}

.timeline-item:nth-child(even) .timeline-content {
    order: 1;
    text-align: right;
}

.timeline-date {
    font-weight: 600;
    color: #667eea;
    padding: 1rem;
}

.timeline-content {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 10px;
    position: relative;
}

.timeline-content h3 {
    margin-bottom: 0.5rem;
    color: #333;
}

@media (max-width: 768px) {
    .about-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .about-text h1 {
        font-size: 2rem;
    }
    
    .timeline::before {
        left: 2rem;
    }
    
    .timeline-item {
        grid-template-columns: 1fr;
        margin-left: 3rem;
    }
    
    .timeline-item:nth-child(even) .timeline-content {
        text-align: left;
        order: 2;
    }
    
    .timeline-item:nth-child(even) .timeline-date {
        order: 1;
    }
}
</style>
@endsection

