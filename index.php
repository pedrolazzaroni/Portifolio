<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Lazzaroni | Desenvolvedor</title>
    <meta name="description" content="Portfólio de Pedro Lazzaroni - Desenvolvedor Web especializado em PHP, Laravel e Tailwind CSS">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/favicon/favicon.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css?v=<?php echo filemtime('styles.css'); ?>">
</head>
<body>
    <!-- Cursor Follower -->
    <div class="cursor-follower"></div>
    
    <!-- Loading Screen -->
    <div class="loading-screen">
        <div class="loader">
            <svg viewBox="0 0 80 80">
                <circle id="loader-circle" cx="40" cy="40" r="32"></circle>
            </svg>
            <div class="loader-name">PEDRO LAZZARONI</div>
        </div>
    </div>

    <!-- Navigation -->
    <header>
        <nav class="navbar">
            <a href="#home">
              <div class="logo">
                  <img src="assets/favicon/favicon.png" alt="Logo">
                  <span>Pedro.dev</span>
              </div>
            </a>
            
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
            
            <ul class="nav-links">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">Sobre</a></li>
                <li><a href="#projects" class="nav-link">Projetos</a></li>
                <li><a href="#academic" class="nav-link">Formação</a></li>
                <li><a href="#skills" class="nav-link">Habilidades</a></li>
                <li><a href="#contact" class="nav-link">Contato</a></li>
            </ul>
            
            <div class="theme-toggle">
                <i class="bi bi-moon-fill"></i>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 class="animate-text">
                            <span class="text-reveal">PEDRO</span>
                            <span class="text-reveal">LAZZARONI</span>
                        </h1>
                        <div class="animated-subtitle">
                            <span class="profession">DESENVOLVEDOR</span>
                        </div>
                        <p class="hero-description fade-in">
                            Especializado em criar experiências digitais 
                            com foco em desempenho e usabilidade.
                        </p>
                        <div class="hero-buttons">
                            <a href="#projects" class="btn primary-btn">Ver Projetos</a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <div class="image-container parallax-element">
                            <picture>
                                <source srcset="assets/images/novalogo.png" type="image/png">
                                <img src="assets/images/novalogo.png?v=<?php echo filemtime('assets/images/novalogo.png'); ?>" alt="Pedro Lazzaroni">
                            </picture>
                            <div class="blob-animation"></div>
                        </div>
                        <div class="floating-tech-icons">
                            <div class="tech-icon"><i class="bi bi-filetype-php"></i></div>
                            <div class="tech-icon"><i class="bi bi-code-slash"></i></div>
                            <div class="tech-icon"><i class="bi bi-database"></i></div>
                            <div class="tech-icon"><i class="bi bi-braces"></i></div>
                        </div>
                    </div>
                </div>
                <div class="scroll-indicator">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                    <div class="scroll-text">Scroll</div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section section-padding">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag slide-up">SOBRE MIM</span>
                    <h2 class="section-title slide-up">Quem Sou Eu</h2>
                </div>
                
                <div class="about-content">
                    <div class="about-image slide-right">
                        <div class="image-frame">
                            <picture>
                                <source srcset="assets/images/novalogo.png" type="image/png">
                                <img src="assets/images/novalogo.png?v=<?php echo filemtime('assets/images/novalogo.png'); ?>" alt="Pedro Lazzaroni Profile">
                            </picture>
                        </div>
                    </div>
                    
                    <div class="about-text slide-left">
                        <p>
                            Sou um desenvolvedor web apaixonado por criar soluções inovadoras que facilitam a vida das pessoas. 
                            Com experiência em frameworks modernos, design responsivo e IA, busco constantemente aprimorar minhas 
                            habilidades e acompanhar as tendências tecnológicas.
                        </p>
                        
                        <div class="about-details">
                            <div class="detail-item">
                                <span class="detail-icon"><i class="bi bi-code-square"></i></span>
                                <div class="detail-content">
                                    <h4>Especialização</h4>
                                    <p>PHP, Laravel, Tailwind CSS, JavaScript, HTML, CSS</p>
                                </div>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-icon"><i class="bi bi-geo-alt"></i></span>
                                <div class="detail-content">
                                    <h4>Localização</h4>
                                    <p>Brasil</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="https://linkedin.com/in/pedrolazzaroni" class="social-link" target="_blank">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="https://github.com/pedrolazzaroni" class="social-link" target="_blank">
                                <i class="bi bi-github"></i>
                            </a>
                            <a href="https://www.instagram.com/pedro_lazzaroni" class="social-link" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="mailto:contato@pedrolazzaroni.com.br" class="social-link">
                                <i class="bi bi-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="projects-section section-padding">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag slide-up">PORTFÓLIO</span>
                    <h2 class="section-title slide-up">Projetos Recentes</h2>
                </div>
                
                <div class="projects-filter slide-up">
                    <button class="filter-btn active" data-filter="all">Todos</button>
                    <button class="filter-btn" data-filter="web">Web</button>
                    <button class="filter-btn" data-filter="app">Aplicações</button>
                    <button class="filter-btn" data-filter="design">Design</button>
                </div>
                
                <div class="projects-grid">
                    <div class="project-card fade-in" data-category="design">
                        <div class="project-image">
                            <img src="assets/images/portifolio.png" alt="Portfólio Pessoal">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://pedrolazzaroni.com.br/" class="project-link" target="_blank">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                    <a href="https://github.com/pedrolazzaroni/Portifolio" class="project-link" target="_blank">
                                        <i class="bi bi-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">Portfólio Pessoal</h3>
                            <p class="project-description">
                                Site de portfólio moderno gerado integralmente com Inteligência Artificial, combinando animações avançadas e design responsivo.
                            </p>
                            <div class="project-tags">
                                <span class="tag">HTML</span>
                                <span class="tag">CSS</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">AI</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-card fade-in" data-category="web app">
                        <div class="project-image">
                            <img src="assets/images/lazzhub.png" alt="LazzHub">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://pedrolazzaroni.com.br/lazzhub" class="project-link" target="_blank">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                    <a href="https://github.com/pedrolazzaroni/LazzHub" class="project-link" target="_blank">
                                        <i class="bi bi-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">LazzHub</h3>
                            <p class="project-description">
                                Plataforma que utiliza IA Gemini para gerar resumos inteligentes e criar questões personalizadas.
                            </p>
                            <div class="project-tags">
                                <span class="tag">Laravel</span>
                                <span class="tag">Tailwind</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">API</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-card fade-in" data-category="app">
                        <div class="project-image">
                            <img src="assets/images/pontoon.png?v=<?php echo filemtime('assets/images/pontoon.png'); ?>" alt="PontoOn">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://pontoon.pedrolazzaroni.com.br/" class="project-link" target="_blank">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                    <a href="https://github.com/pedrolazzaroni/PontoOn" class="project-link" target="_blank">
                                        <i class="bi bi-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">PontoOn</h3>
                            <p class="project-description">
                                Sistema de ponto eletrônico com interface intuitiva e relatórios detalhados.
                            </p>
                            <div class="project-tags">
                                <span class="tag">PHP</span>
                                <span class="tag">Laravel</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">Tailwind</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-card fade-in" data-category="web app">
                        <div class="project-image">
                            <img src="assets/images/exceltosql.png?v=<?php echo filemtime('assets/images/exceltosql.png'); ?>" alt="ExcelToSql">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://conversor.pedrolazzaroni.com.br/" class="project-link" target="_blank">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                    <a href="https://github.com/pedrolazzaroni/ConverterXlsxToSQL" class="project-link" target="_blank">
                                        <i class="bi bi-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">ExcelToSql</h3>
                            <p class="project-description">
                                Conversor de arquivos Excel para SQL, facilitando a migração de dados para bancos de dados relacionais.
                            </p>
                            <div class="project-tags">
                                <span class="tag">PHP</span>
                                <span class="tag">HTML</span>
                                <span class="tag">Bootstrap</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card fade-in" data-category="web">
                        <div class="project-image">
                            <img src="assets/images/cafedasmarias.png" alt="Café das Marias">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://cafedasmariasoficial.com/" class="project-link" target="_blank">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">Café das Marias</h3>
                            <p class="project-description">
                                Projeto em conjunto: dei apoio no desenvolvimento da página do Café das Marias, uma rede de apoio de prevenção e combate à violência contra a mulher e a menina.
                            </p>
                            <div class="project-tags">
                                <span class="tag">WordPress</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card fade-in" data-category="design web">
                        <div class="project-image">
                            <img src="assets/images/vasistemas.png" alt="VA Sistemas">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://preco.vasistemas.com.br/" class="project-link" target="_blank">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">VA Sistemas</h3>
                            <p class="project-description">
                                Landing page do Cesta de Preços VA, um sistema de banco de preços para órgãos públicos.
                            </p>
                            <div class="project-tags">
                                <span class="tag">Laravel</span>
                                <span class="tag">Tailwind</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">HTML</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card fade-in" data-category="app">
                        <div class="project-image" style="height:420px; max-width:220px; margin:auto; display:flex; align-items:center; justify-content:center; border-radius:20px; box-shadow:0 2px 12px rgba(0,0,0,0.07); background:transparent;">
                            <img src="assets/images/stockcalc.png" alt="StockCalc" style="height:400px; width:auto; border-radius:16px; box-shadow:0 2px 8px rgba(0,0,0,0.10); background:transparent;">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://github.com/pedrolazzaroni/StockCalc" class="project-link" target="_blank">
                                        <i class="bi bi-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">StockCalc</h3>
                            <p class="project-description">
                                Calculadora de investimentos que utiliza a API Gemini 2.0 Flash para análises inteligentes. Desenvolvido em Flutter, com integração de IA para recomendações e simulações.
                            </p>
                            <div class="project-tags">
                                <span class="tag">API</span>
                                <span class="tag">Flutter</span>
                                <span class="tag">IA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Academic Section - NOVA SEÇÃO -->
        <section id="academic" class="academic-section section-padding">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag slide-up">FORMAÇÃO</span>
                    <h2 class="section-title slide-up">Jornada Acadêmica</h2>
                </div>
                
                <div class="academic-content">
                    <div class="academic-info slide-right">
                        <h3 class="academic-subtitle">Sistemas de Informação</h3>
                        <div class="university-info">
                            <span class="university-name">Universidade do Estado de Minas Gerais</span>
                            <span class="academic-period">7º Período</span>
                        </div>
                        <p class="academic-description">
                            Como estudante de Sistemas de Informação na UEMG, venho desenvolvendo habilidades técnicas e 
                            analíticas que me permitem criar soluções inovadoras para desafios complexos. A combinação de 
                            disciplinas teóricas e projetos práticos tem me proporcionado uma visão holística do desenvolvimento 
                            de software e da gestão de sistemas de informação. Meu interesse pela interseção entre tecnologia 
                            e solução de problemas reais tem guiado minha trajetória acadêmica, resultando em contribuições 
                            significativas para a comunidade científica.
                        </p>
                    </div>
                    
                    <div class="publication-card slide-left">
                        <div class="publication-header">
                            <h3>Publicação em Destaque</h3>
                            <span class="publication-badge">Revista Sapiens</span>
                        </div>
                        <div class="publication-content">
                            <div class="publication-image">
                                <img src="assets/images/artigo.png" alt="Artigo Científico">
                            </div>
                            <div class="publication-info">
                                <h4 class="publication-title">PESQUISA DE CAMPO SOBRE O USO DE RECURSOS DE TECNOLOGIA DA INFORMAÇÃO NA CIDADE DE PEDRA DOURADA-MG</h4>
                                <p class="publication-abstract">
                                    Estudo que investiga o impacto da tecnologia da informação nas empresas locais, 
                                    visando identificar oportunidades para estudantes e graduados da UEMG Carangola 
                                    e promover o desenvolvimento tecnológico regional através da integração entre 
                                    academia e setor empresarial.
                                </p>
                                <a href="https://revista.uemg.br/index.php/sps/article/view/8791" target="_blank" class="btn primary-btn publication-link">
                                    <span>Acessar Publicação</span>
                                    <i class="bi bi-journal-text"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="skills-section section-padding">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag slide-up">EXPERTISE</span>
                    <h2 class="section-title slide-up">Minhas Habilidades</h2>
                </div>
                
                <div class="skills-content">
                    <div class="skills-text slide-right">
                        <p>
                            Experiência em desenvolvimento Full Stack com proficiência em JavaScript, PHP, HTML, CSS e IA. 
                            Domínio do framework Laravel e Tailwind CSS, além de ferramentas como Git e GitHub. 
                            Competente em design responsivo e integração de APIs, entregando soluções completas e 
                            eficientes para aplicações web.
                        </p>
                    </div>
                    
                    <div class="skills-grid">
                        <div class="skill-card slide-up">
                            <div class="skill-icon">
                                <i class="bi bi-filetype-php"></i>
                            </div>
                            <h3 class="skill-title">PHP & Laravel</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90"></div>
                            </div>
                        </div>
                        
                        <div class="skill-card slide-up">
                            <div class="skill-icon">
                                <i class="bi bi-filetype-js"></i>
                            </div>
                            <h3 class="skill-title">JavaScript</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="85"></div>
                            </div>
                        </div>
                        
                        <div class="skill-card slide-up">
                            <div class="skill-icon">
                                <i class="bi bi-filetype-css"></i>
                            </div>
                            <h3 class="skill-title">CSS & Tailwind</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="95"></div>
                            </div>
                        </div>
                        
                        <div class="skill-card slide-up">
                            <div class="skill-icon">
                                <i class="bi bi-database"></i>
                            </div>
                            <h3 class="skill-title">MySQL</h3>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="80"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section section-padding">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag slide-up">CONTATO</span>
                    <h2 class="section-title slide-up">Vamos Trabalhar Juntos</h2>
                </div>
                
                <div class="contact-content">
                    <div class="contact-info slide-right">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Email</h3>
                                <a href="mailto:contato@pedrolazzaroni.com.br">contato@pedrolazzaroni.com.br</a>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-linkedin"></i>
                            </div>
                            <div class="contact-details">
                                <h3>LinkedIn</h3>
                                <a href="https://linkedin.com/in/pedrolazzaroni" target="_blank">linkedin.com/in/pedrolazzaroni</a>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-github"></i>
                            </div>
                            <div class="contact-details">
                                <h3>GitHub</h3>
                                <a href="https://github.com/pedrolazzaroni" target="_blank">github.com/pedrolazzaroni</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-form slide-left">
                        <form id="contactForm">
                            <div class="form-group">
                                <input type="text" id="name" name="name" placeholder="Seu Nome" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Seu Email" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" id="subject" name="subject" placeholder="Assunto">
                            </div>
                            
                            <div class="form-group">
                                <textarea id="message" name="message" placeholder="Sua Mensagem" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn primary-btn">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="assets/favicon/favicon.png" alt="Logo">
                    <span>Pedro Lazzaroni</span>
                </div>
                
                <div class="footer-social">
                    <a href="https://linkedin.com/in/pedrolazzaroni" class="social-link" target="_blank">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://github.com/pedrolazzaroni" class="social-link" target="_blank">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://www.instagram.com/pedro_lazzaroni" class="social-link" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="mailto:contato@pedrolazzaroni.com.br" class="social-link">
                        <i class="bi bi-envelope"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Pedro Lazzaroni. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Feedback Modal -->
    <div class="feedback-modal" id="feedbackModal">
        <div class="feedback-modal__content">
            <div class="feedback-modal__icon">
                <i class="bi bi-check-circle"></i>
            </div>
            <h3 class="feedback-modal__title">Mensagem Enviada!</h3>
            <p class="feedback-modal__message">Obrigado pelo contato. Responderei sua mensagem em breve.</p>
            <button class="btn primary-btn feedback-modal__button">Fechar</button>
        </div>
    </div>
    <div class="feedback-modal__overlay" id="feedbackOverlay"></div>

    <!-- EmailJS Script -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    
    <script src="main.js"></script>
</body>
</html>