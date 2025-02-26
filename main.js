// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', () => {
  // ================ PRELOADER ================
  const loadingScreen = document.querySelector('.loading-screen');
  
  // Elementos que serão animados após o carregamento
  const textRevealElements = document.querySelectorAll('.text-reveal');
  const profession = document.querySelector('.profession');
  const heroDescription = document.querySelector('.hero-description');
  const scrollIndicator = document.querySelector('.scroll-indicator');
  
  // Inicialmente, remova as animações automáticas
  profession.style.animation = 'none';
  heroDescription.style.animation = 'none';
  scrollIndicator.style.animation = 'none';
  
  window.addEventListener('load', () => {
    // Hide the loading screen after some delay for better UX
    setTimeout(() => {
      loadingScreen.style.opacity = '0';
      setTimeout(() => {
        loadingScreen.style.visibility = 'hidden';
        
        // Iniciar animações da home após o preloader
        startHomeAnimations();
        
        // Start all other animations after loading
        startAnimations();
      }, 500);
    }, 1500);
  });
  
  // Nova função para iniciar as animações da página inicial
  function startHomeAnimations() {
    // Ativar animações de reveal do texto do título
    textRevealElements.forEach((element, index) => {
      element.classList.add('animate-text');
      // Adicione um pequeno atraso entre cada elemento
      element.style.animationDelay = `${index * 0.2}s`;
    });
    
    // Ativar animação da profissão com delay
    profession.style.animation = 'slideInFromLeft 1s ease forwards';
    profession.style.animationDelay = '0.6s';
    
    // Ativar animação da descrição
    heroDescription.style.animation = 'fadeIn 1s ease forwards';
    heroDescription.style.animationDelay = '1.0s';
    
    // Ativar animação do indicador de rolagem
    scrollIndicator.style.animation = 'fadeIn 1s ease forwards';
    scrollIndicator.style.animationDelay = '1.5s';
  }
  
  // ================ STICKY NAVIGATION ================
  const header = document.querySelector('header');
  
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
  
  // ================ MOBILE MENU ================
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');
  const navLinksItems = document.querySelectorAll('.nav-link');
  
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('menu-open');
    navLinks.classList.toggle('active');
    document.body.classList.toggle('no-scroll');
  });
  
  // Close menu when clicking on a link
  navLinksItems.forEach(item => {
    item.addEventListener('click', () => {
      menuToggle.classList.remove('menu-open');
      navLinks.classList.remove('active');
      document.body.classList.remove('no-scroll');
    });
  });
  
  // Update active link on scroll
  const sections = document.querySelectorAll('section');

  window.addEventListener('scroll', () => {
    let current = '';
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      
      if (window.scrollY >= sectionTop - 200) {
        current = section.getAttribute('id');
      }
    });
    
    navLinksItems.forEach(item => {
      item.classList.remove('active');
      if (item.getAttribute('href').includes(current)) {
        item.classList.add('active');
      }
    });
  });
  
  // ================ DARK MODE TOGGLE ================
  const themeToggle = document.querySelector('.theme-toggle');
  const moonIcon = document.querySelector('.theme-toggle i');
  
  // Check if user has dark mode preference
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const storedTheme = localStorage.getItem('theme');
  
  if (storedTheme === 'dark' || (!storedTheme && prefersDark)) {
    document.body.classList.add('dark-theme');
    moonIcon.classList.remove('bi-moon-fill');
    moonIcon.classList.add('bi-sun-fill');
  }
  
  themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
    
    if (document.body.classList.contains('dark-theme')) {
      moonIcon.classList.remove('bi-moon-fill');
      moonIcon.classList.add('bi-sun-fill');
      localStorage.setItem('theme', 'dark');
    } else {
      moonIcon.classList.remove('bi-sun-fill');
      moonIcon.classList.add('bi-moon-fill');
      localStorage.setItem('theme', 'light');
    }
  });
  
  // ================ SCROLL ANIMATIONS ================
  function startAnimations() {
    // Animation elements
    const fadeElements = document.querySelectorAll('.fade-in');
    const slideUpElements = document.querySelectorAll('.slide-up');
    const slideRightElements = document.querySelectorAll('.slide-right');
    const slideLeftElements = document.querySelectorAll('.slide-left');
    
    // Skill progress bars
    const skillBars = document.querySelectorAll('.skill-progress');
    
    // Create intersection observer
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          
          // For skill bars, set the width
          if (entry.target.classList.contains('skill-progress')) {
            const progress = entry.target.getAttribute('data-progress');
            entry.target.style.width = `${progress}%`;
          }
          
          // Unobserve after animation
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    
    // Observe elements
    fadeElements.forEach(el => observer.observe(el));
    slideUpElements.forEach(el => observer.observe(el));
    slideRightElements.forEach(el => observer.observe(el));
    slideLeftElements.forEach(el => observer.observe(el));
    skillBars.forEach(el => observer.observe(el));
  }
  
  // ================ PROJECT FILTERING ================
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');
  
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons
      filterButtons.forEach(btn => btn.classList.remove('active'));
      // Add active class to clicked button
      button.classList.add('active');
      
      const filterValue = button.getAttribute('data-filter');
      
      projectCards.forEach(card => {
        if (filterValue === 'all') {
          card.style.display = 'block';
        } else {
          if (card.getAttribute('data-category').includes(filterValue)) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        }
      });
    });
  });
  
  // ================ CONTACT FORM ================
  const contactForm = document.getElementById('contactForm');
  const feedbackModal = document.getElementById('feedbackModal');
  const feedbackOverlay = document.getElementById('feedbackOverlay');
  const feedbackCloseBtn = document.querySelector('.feedback-modal__button');
  
  // Inicializa o EmailJS
  // IMPORTANTE: Substitua "YOUR_PUBLIC_KEY" pela sua chave pública do EmailJS
  (function() {
    emailjs.init("pujPogUrUGK9kyra2");
  })();
  
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      
      // Get form values
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const subject = document.getElementById('subject').value;
      const message = document.getElementById('message').value;
      
      // Simple validation
      if (name && email && message) {
        // Preparar o objeto de parâmetros para o template
        const templateParams = {
          from_name: name,
          from_email: email,
          subject: subject || "Nova mensagem do portfólio",
          message: message
        };
        
        // Mostrar indicador de carregamento (opcional)
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="bi bi-arrow-repeat bi-spin"></i> Enviando...';
        
        // IMPORTANTE: Substitua "YOUR_SERVICE_ID" e "YOUR_TEMPLATE_ID" pelos IDs do seu serviço e template
        emailjs.send("service_y755jtj", "template_ua1ms3n", templateParams)
          .then(function(response) {
            console.log('Email enviado!', response.status, response.text);
            
            // Mostrar modal de sucesso
            feedbackModal.classList.add('active');
            feedbackOverlay.classList.add('active');
            
            // Reset form
            contactForm.reset();
            
            // Restaurar botão
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
          }, function(error) {
            console.log('Falha ao enviar email...', error);
            alert('Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.');
            
            // Restaurar botão
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
          });
      } else {
        // Show error feedback
        alert('Por favor, preencha todos os campos obrigatórios.');
      }
    });
  }
  
  // Close modal when clicking the close button
  if (feedbackCloseBtn) {
    feedbackCloseBtn.addEventListener('click', () => {
      feedbackModal.classList.remove('active');
      feedbackOverlay.classList.remove('active');
    });
  }
  
  // Close modal when clicking outside
  if (feedbackOverlay) {
    feedbackOverlay.addEventListener('click', () => {
      feedbackModal.classList.remove('active');
      feedbackOverlay.classList.remove('active');
    });
  }
  
  // Close modal on escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && feedbackModal.classList.contains('active')) {
      feedbackModal.classList.remove('active');
      feedbackOverlay.classList.remove('active');
    }
  });

  // ================ SMOOTH SCROLL ================
  const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
  
  smoothScrollLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      
      const targetId = link.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        const offsetTop = targetElement.offsetTop;
        
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });
  
  // ================ PARALLAX EFFECT ================
  const parallaxElements = document.querySelectorAll('.parallax-element');
  
  window.addEventListener('mousemove', (e) => {
    const mouseX = e.clientX / window.innerWidth - 0.5;
    const mouseY = e.clientY / window.innerHeight - 0.5;
    
    parallaxElements.forEach(element => {
      const speed = 20;
      const x = mouseX * speed;
      const y = mouseY * speed;
      
      element.style.transform = `translate(${x}px, ${y}px)`;
    });
  });
  
  // ================ INITIALIZE ON LOAD ================
  // For non-JS users, remove .no-js class
  document.documentElement.classList.remove('no-js');
  
  // Start animations if page already loaded
  if (document.readyState === 'complete') {
    startAnimations();
  }
});