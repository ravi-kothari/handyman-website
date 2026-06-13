/**
 * Frontend script for CJs All In One Handyman Services
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================
    // 1. Header Scroll Effect & Active Link
    // ==========================================
    const header = document.querySelector('.header');
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');
    
    const checkScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };
    
    // Highlight menu link matching active section on scroll
    const activeMenuOnScroll = () => {
        let currentSectionId = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120; // offset header height
            const sectionHeight = section.offsetHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });
        
        if (currentSectionId) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }
    };
    
    window.addEventListener('scroll', () => {
        checkScroll();
        activeMenuOnScroll();
    });
    
    checkScroll(); // Run initially
    
    // ==========================================
    // 2. Mobile Menu Toggle
    // ==========================================
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navMenu.classList.toggle('open');
        });
        
        // Close menu when clicking a link
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                navMenu.classList.remove('open');
            });
        });
        
        // Close menu when clicking outside header
        document.addEventListener('click', (e) => {
            if (!header.contains(e.target) && navMenu.classList.contains('open')) {
                menuToggle.classList.remove('active');
                navMenu.classList.remove('open');
            }
        });
    }
    
    // ==========================================
    // 3. FAQ Accordion
    // ==========================================
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            const answer = question.nextElementSibling;
            
            // Close other open FAQ items
            document.querySelectorAll('.faq-item').forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.maxHeight = null;
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
            
            if (item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = null;
            }
        });
    });
    
    // ==========================================
    // 4. Dynamic Google Drive Gallery Loader
    // ==========================================
    const galleryCarousel = document.getElementById('galleryCarousel');
    const carouselDots = document.getElementById('carouselDots');
    const slidePrev = document.getElementById('slidePrev');
    const slideNext = document.getElementById('slideNext');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const lightboxClose = document.getElementById('lightboxClose');
    
    // Fetch gallery images
    const fetchGallery = async () => {
        try {
            // Call the local PHP scraper
            const response = await fetch('gallery.php');
            if (!response.ok) throw new Error('Network response was not ok');
            
            const images = await response.json();
            
            if (images.error) {
                console.warn('Gallery loading notice:', images.error);
                renderGallery(getFallbackImages());
                return;
            }
            
            renderGallery(images);
        } catch (error) {
            console.error('Failed to fetch gallery images, loading fallbacks:', error);
            renderGallery(getFallbackImages());
        }
    };
    
    const renderGallery = (images) => {
        if (!galleryCarousel) return;
        
        if (!images || images.length === 0) {
            galleryCarousel.innerHTML = `
                <div class="gallery-loading">
                    <p><i class="fa-solid fa-folder-open" style="font-size: 2rem; color: var(--primary);"></i></p>
                    <p style="margin-top: 10px;">No photos available in the gallery yet.</p>
                </div>
            `;
            return;
        }
        
        // Clear loading spinner
        galleryCarousel.innerHTML = '';
        if (carouselDots) carouselDots.innerHTML = '';
        
        images.forEach((img, index) => {
            // Create gallery slide item
            const item = document.createElement('div');
            item.className = 'gallery-item';
            item.dataset.index = index;
            item.dataset.fullUrl = img.url;
            item.dataset.label = img.label;
            
            item.innerHTML = `
                <div class="gallery-item-image">
                    <img src="${img.thumbnail}" alt="${img.label}" loading="lazy">
                    <div class="gallery-overlay-hover">
                        <div class="gallery-zoom-icon">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="gallery-item-desc">
                    <h4>${img.label}</h4>
                </div>
            `;
            
            // Add click listener for Lightbox
            item.addEventListener('click', () => openLightbox(img.url, img.label));
            
            galleryCarousel.appendChild(item);
            
            // Add dot indicator
            if (carouselDots) {
                const dot = document.createElement('div');
                dot.className = `carousel-dot ${index === 0 ? 'active' : ''}`;
                dot.addEventListener('click', () => {
                    const scrollAmount = item.offsetLeft - galleryCarousel.offsetLeft;
                    galleryCarousel.scrollTo({ left: scrollAmount, behavior: 'smooth' });
                });
                carouselDots.appendChild(dot);
            }
        });
        
        setupCarouselScrollHandlers();
    };
    
    // Lightbox Controls
    const openLightbox = (url, label) => {
        if (!lightbox || !lightboxImg || !lightboxCaption) return;
        lightboxImg.src = url;
        lightboxCaption.textContent = label;
        lightbox.style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Lock background scroll
    };
    
    const closeLightbox = () => {
        if (!lightbox) return;
        lightbox.style.display = 'none';
        document.body.style.overflow = ''; // Restore scroll
    };
    
    if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
    if (lightbox) {
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.classList.contains('lightbox-close')) {
                closeLightbox();
            }
        });
    }
    
    // Close lightbox on ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && lightbox && lightbox.style.display === 'flex') {
            closeLightbox();
        }
    });
    
    // Setup carousel navigation button click handlers & indicator synchronization
    const setupCarouselScrollHandlers = () => {
        if (!galleryCarousel) return;
        
        // Left / Right arrow navigation
        if (slidePrev) {
            slidePrev.addEventListener('click', () => {
                const itemWidth = galleryCarousel.querySelector('.gallery-item')?.offsetWidth || 350;
                galleryCarousel.scrollBy({ left: -(itemWidth + 24), behavior: 'smooth' });
            });
        }
        
        if (slideNext) {
            slideNext.addEventListener('click', () => {
                const itemWidth = galleryCarousel.querySelector('.gallery-item')?.offsetWidth || 350;
                galleryCarousel.scrollBy({ left: itemWidth + 24, behavior: 'smooth' });
            });
        }
        
        // Sync dots highlight on scroll
        galleryCarousel.addEventListener('scroll', () => {
            const dots = carouselDots?.querySelectorAll('.carousel-dot');
            if (!dots || dots.length === 0) return;
            
            const carouselWidth = galleryCarousel.offsetWidth;
            const scrollLeft = galleryCarousel.scrollLeft;
            const itemWidth = galleryCarousel.querySelector('.gallery-item')?.offsetWidth || 350;
            const gap = 24;
            
            // Calculate which item is closest to the middle of the container view
            const activeIndex = Math.round(scrollLeft / (itemWidth + gap));
            
            dots.forEach((dot, index) => {
                if (index === activeIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        });
    };
    
    // Hardcoded fallback list in case PHP fails or isn't set up yet
    const getFallbackImages = () => {
        return [
            { label: 'Custom Wood Bench', url: 'assets/carpentry.png', thumbnail: 'assets/carpentry.png' },
            { label: 'Kitchen Faucet Repair', url: 'assets/repairs.png', thumbnail: 'assets/repairs.png' },
            { label: 'Interior Painting Project', url: 'assets/painting.png', thumbnail: 'assets/painting.png' },
            { label: 'Gate Repair & Installation', url: 'assets/maintenance.png', thumbnail: 'assets/maintenance.png' }
        ];
    };
    
    // Initialize Gallery fetch
    fetchGallery();
    
    // ==========================================
    // 5. Contact Form Validation & Web3Forms Submit
    // ==========================================
    const quoteForm = document.getElementById('quoteForm');
    const formSubmitBtn = document.getElementById('formSubmitBtn');
    const formStatus = document.getElementById('formStatus');
    
    if (quoteForm) {
        
        // Input validation helpers
        const setError = (element, errorElement, show) => {
            const group = element.closest('.form-group');
            if (show) {
                group.classList.add('invalid');
            } else {
                group.classList.remove('invalid');
            }
        };
        
        const validatePhone = (phone) => {
            // Validates standard 10 digit formats, like (916) 555-0199 or 9168133659
            const re = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            return re.test(String(phone).trim());
        };
        
        const validateEmail = (email) => {
            if (!email) return true; // Email is optional in our form structure
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        };
        
        // Remove error on input keypress
        quoteForm.querySelectorAll('input, textarea, select').forEach(element => {
            element.addEventListener('input', () => {
                setError(element, null, false);
            });
            element.addEventListener('change', () => {
                setError(element, null, false);
            });
        });
        
        quoteForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Validate inputs
            const nameEl = document.getElementById('name');
            const phoneEl = document.getElementById('phone');
            const emailEl = document.getElementById('email');
            const serviceEl = document.getElementById('service');
            const cityEl = document.getElementById('city');
            const messageEl = document.getElementById('message');
            
            let isValid = true;
            
            if (!nameEl.value.trim()) {
                setError(nameEl, null, true);
                isValid = false;
            }
            
            if (!validatePhone(phoneEl.value)) {
                setError(phoneEl, null, true);
                isValid = false;
            }
            
            if (emailEl.value && !validateEmail(emailEl.value)) {
                setError(emailEl, null, true);
                isValid = false;
            }
            
            if (!serviceEl.value) {
                setError(serviceEl, null, true);
                isValid = false;
            }
            
            if (!cityEl.value) {
                setError(cityEl, null, true);
                isValid = false;
            }
            
            if (!messageEl.value.trim() || messageEl.value.trim().length < 5) {
                setError(messageEl, null, true);
                isValid = false;
            }
            
            if (!isValid) {
                formStatus.className = 'form-status error';
                formStatus.textContent = 'Please fill out all required fields correctly.';
                formStatus.style.display = 'block';
                return;
            }
            
            // Submit the form using Fetch API
            formSubmitBtn.disabled = true;
            formSubmitBtn.querySelector('span').textContent = 'Sending...';
            formSubmitBtn.querySelector('i').className = 'fa-solid fa-spinner fa-spin';
            
            formStatus.className = 'form-status';
            formStatus.style.display = 'none';
            
            const formData = new FormData(quoteForm);
            
            try {
                // If Web3Forms access key is still the placeholder, we warn the user
                const accessKey = formData.get('access_key');
                if (accessKey === 'YOUR_WEB3FORMS_ACCESS_KEY_HERE') {
                    throw new Error('WEB3FORMS_ACCESS_KEY is not configured yet. Please configure it in config.php.');
                }
                
                const response = await fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                });
                
                const result = await response.json();
                
                if (response.status === 200 && result.success) {
                    formStatus.className = 'form-status success';
                    formStatus.textContent = 'Thank you! Your estimate request was sent. CJ will contact you shortly.';
                    formStatus.style.display = 'block';
                    quoteForm.reset();
                } else {
                    throw new Error(result.message || 'Submission failed.');
                }
            } catch (error) {
                console.error('Submission error:', error);
                formStatus.className = 'form-status error';
                formStatus.textContent = error.message.includes('Web3Forms') 
                    ? error.message 
                    : 'Oops! Something went wrong sending your message. Please call or text CJ directly at 916-813-3659.';
                formStatus.style.display = 'block';
            } finally {
                formSubmitBtn.disabled = false;
                formSubmitBtn.querySelector('span').textContent = 'Submit Request';
                formSubmitBtn.querySelector('i').className = 'fa-solid fa-paper-plane';
            }
        });
    }
});
