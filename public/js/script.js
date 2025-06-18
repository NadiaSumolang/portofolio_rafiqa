// Mobile Navigation
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
    });
});

// Header scroll effect
window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Smooth scrolling for all links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});


// Updated Contact Form Submission
const contactForm = document.getElementById('contactForm');
const notification = document.getElementById('notification');

if (contactForm) {
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const formData = new FormData(contactForm);
        
        try {
            const response = await fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });
            
            if (response.ok) {
                showNotification('Your message has been sent successfully!', 'success');
                contactForm.reset();
            } else {
                const data = await response.json();
                if (data.errors) {
                    showNotification('Please fill all required fields correctly.', 'error');
                } else {
                    showNotification('Something went wrong. Please try again.', 'error');
                }
            }
        } catch (error) {
            showNotification('Network error. Please try again.', 'error');
        }
    });
}

function showNotification(message, type) {
    notification.querySelector('span').textContent = message;
    notification.className = 'notification ' + type;
    notification.style.display = 'flex';
    
    // Trigger reflow to restart animation
    void notification.offsetWidth;
    
    notification.classList.add('show');
    
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            notification.style.display = 'none';
        }, 500);
    }, 5000);
}

// Particle Animation
// Improved Particle Animation
function initParticles() {
    const particlesContainer = document.getElementById('particles');
    if (!particlesContainer) return;

    const particleCount = 30;
    const colors = ['#A29BFE', '#F8A5C2', '#A8E6CF', '#FDF1B8', '#B2F7EF'];

    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Random properties
        const size = Math.random() * 8 + 2;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100 + 100; // Start below the viewport
        const duration = Math.random() * 15 + 10;
        const delay = Math.random() * 5;
        const color = colors[Math.floor(Math.random() * colors.length)];
        
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${posX}%`;
        particle.style.bottom = `-${size}px`;
        particle.style.background = color;
        particle.style.animationDuration = `${duration}s`;
        particle.style.animationDelay = `${delay}s`;
        particle.style.opacity = Math.random() * 0.5 + 0.3;
        
        particlesContainer.appendChild(particle);
    }
}

document.addEventListener('DOMContentLoaded', initParticles);
