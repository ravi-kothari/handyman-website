<?php
/**
 * Main index file for CJs All In One Handyman Services
 */
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJs All In One Handyman Services | Sacramento & West Sacramento, CA</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Professional, reliable home repairs, carpentry, painting, drywall, and fencing by CJs All In One Handyman Services. Serving Sacramento and West West Sacramento. Call 916-813-3659 today!">
    <meta name="keywords" content="handyman sacramento, home repair west sacramento, carpentry sacramento, dry wall repair sacramento, local handyman, home maintenance sacramento, repair services sacramento">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="CJs All In One Handyman Services | Sacramento & West Sacramento">
    <meta property="og:description" content="Professional and reliable home repairs, carpentry, painting, and maintenance. Local, trusted handyman servicing Sacramento and West Sacramento.">
    <meta property="og:image" content="assets/hero-bg.png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css?v=2.2">
    
    <!-- Local Business Structured Data (JSON-LD) for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "HomeAndConstructionBusiness",
      "name": "CJs All In One Handyman Services",
      "image": "assets/hero-bg.png",
      "telephone": "+1-916-813-3659",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Sacramento",
        "addressRegion": "CA",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": 38.5816,
          "longitude": -121.4944
        },
        "geoRadius": "40000"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Sacramento"
        },
        {
          "@type": "AdministrativeArea",
          "name": "West Sacramento"
        }
      ],
      "url": "https://cjhandyman916.com"
    }
    </script>
</head>
<body>

    <!-- Header & Navigation -->
    <header class="header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <span class="logo-highlight">CJ's</span> Handyman
            </a>
            
            <nav class="nav-menu" id="navMenu">
                <a href="#home" class="nav-link active">Home</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#about" class="nav-link">About CJ</a>
                <a href="#gallery" class="nav-link">Our Work</a>
                <a href="#why-us" class="nav-link">Why Us</a>
                <a href="#faq" class="nav-link">FAQ</a>
                <a href="#contact" class="nav-link nav-btn-mobile">Get a Quote</a>
            </nav>
            
            <div class="nav-actions">
                <a href="tel:9168133659" class="nav-phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>916-813-3659</span>
                </a>
                <a href="#contact" class="nav-btn">Get a Quote</a>
                <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <div class="tagline">
                    <i class="fa-solid fa-screwdriver-wrench"></i> Your Local Sacramento Handyman
                </div>
                <h1>Reliable Repairs & Home Improvements Made Simple</h1>
                <p>From custom carpentry and paint jobs to quick home repairs, get premium quality work without the premium price tag. Servicing Sacramento & West Sacramento.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Request Free Estimate</a>
                    <a href="tel:9168133659" class="btn btn-secondary">
                        <i class="fa-solid fa-phone"></i> Call 916-813-3659
                    </a>
                </div>
                <div class="hero-highlights">
                    <div class="highlight-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>On-Time & Dependable</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Free Estimates</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Fair, Transparent Pricing</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">What We Do</span>
                <h2>Our Premium Handyman Services</h2>
                <div class="accent-line"></div>
                <p>No job is too small. We specialize in keeping your home in perfect condition with professional, quality service you can trust.</p>
            </div>
            
            <div class="services-grid">
                <!-- Service 1: Carpentry -->
                <div class="service-card">
                    <div class="service-image-container">
                        <img src="assets/carpentry.png" alt="Carpentry and Woodworking Services" class="service-img">
                        <div class="service-icon"><i class="fa-solid fa-hammer"></i></div>
                    </div>
                    <div class="service-content">
                        <h3>Carpentry & Woodwork</h3>
                        <p>Custom shelves, cabinet repairs, door hanging, baseboards, crown molding, furniture assembly, and custom wooden fence repairs.</p>
                        <ul class="service-list">
                            <li><i class="fa-solid fa-check"></i> Furniture Assembly</li>
                            <li><i class="fa-solid fa-check"></i> Cabinet & Door Repairs</li>
                            <li><i class="fa-solid fa-check"></i> Trim & Baseboard Installation</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2: Repairs & Installations -->
                <div class="service-card">
                    <div class="service-image-container">
                        <img src="assets/repairs.png" alt="Kitchen and bathroom plumbing fixture repairs" class="service-img">
                        <div class="service-icon"><i class="fa-solid fa-wrench"></i></div>
                    </div>
                    <div class="service-content">
                        <h3>Fixture & Appliance Repairs</h3>
                        <p>Leaky faucet replacements, garbage disposal install, light fixtures, ceiling fans, smart thermostats, and appliance installations.</p>
                        <ul class="service-list">
                            <li><i class="fa-solid fa-check"></i> Faucet & Valve Replacement</li>
                            <li><i class="fa-solid fa-check"></i> Ceiling Fans & Lights</li>
                            <li><i class="fa-solid fa-check"></i> Smart Home Upgrades</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 3: Drywall & Painting -->
                <div class="service-card">
                    <div class="service-image-container">
                        <img src="assets/painting.png" alt="Painting and drywall work" class="service-img">
                        <div class="service-icon"><i class="fa-solid fa-paint-roller"></i></div>
                    </div>
                    <div class="service-content">
                        <h3>Drywall, Patching & Painting</h3>
                        <p>Repairing wall holes, water damage drywall replacement, texturing, accent walls, door painting, trim touch-ups, and outdoor paint repair.</p>
                        <ul class="service-list">
                            <li><i class="fa-solid fa-check"></i> Drywall Patching & Texturing</li>
                            <li><i class="fa-solid fa-check"></i> Interior Paint & Touch-ups</li>
                            <li><i class="fa-solid fa-check"></i> Water Damage Repair</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 4: General Maintenance -->
                <div class="service-card">
                    <div class="service-image-container">
                        <img src="assets/maintenance.png" alt="Home maintenance services" class="service-img">
                        <div class="service-icon"><i class="fa-solid fa-toolbox"></i></div>
                    </div>
                    <div class="service-content">
                        <h3>General Maintenance</h3>
                        <p>Gutter cleaning, pressure washing decks and driveways, TV wall mounting, hanging blinds and pictures, and seasonal home prep.</p>
                        <ul class="service-list">
                            <li><i class="fa-solid fa-check"></i> Gutter & Downspout Cleanout</li>
                            <li><i class="fa-solid fa-check"></i> TV Mounting & Heavy Hanging</li>
                            <li><i class="fa-solid fa-check"></i> Deck & Siding Power Washing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery / Google Drive Album Section -->
    <section id="gallery" class="gallery section bg-light">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Real Work</span>
                <h2>Recent Projects & Work Gallery</h2>
                <div class="accent-line"></div>
                <p>See the results of our craftsmanship. This gallery is synced live from CJ's Google Drive. The moment a project is finished, we upload it for you to see.</p>
            </div>
            
            <!-- Gallery Display -->
            <div class="gallery-container">
                <div class="gallery-slider-wrapper">
                    <button class="slider-nav prev" id="slidePrev" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
                    
                    <div class="gallery-carousel" id="galleryCarousel">
                        <!-- Dynamic content will be injected here via Javascript -->
                        <div class="gallery-loading">
                            <div class="spinner"></div>
                            <p>Loading projects from Google Drive...</p>
                        </div>
                    </div>
                    
                    <button class="slider-nav next" id="slideNext" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
                
                <!-- Dots navigation for slider -->
                <div class="carousel-dots" id="carouselDots"></div>
                
                <!-- Grid Display Option -->
                <div class="gallery-grid" id="galleryGrid">
                    <!-- Dynamic grid items will also load here -->
                </div>
                
                <div class="gallery-social-cta">
                    <p>Want to see more before-and-after work? Follow CJ's online!</p>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank" rel="noopener" class="social-btn facebook">
                            <i class="fa-brands fa-facebook"></i> Facebook Page
                        </a>
                        <a href="https://instagram.com" target="_blank" rel="noopener" class="social-btn instagram">
                            <i class="fa-brands fa-instagram"></i> Instagram Feed
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox for viewing gallery images full-screen -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close" id="lightboxClose">&times;</span>
        <img class="lightbox-content" id="lightboxImg" alt="Enlarged project view">
        <div id="lightboxCaption" class="lightbox-caption"></div>
    </div>

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-image-column">
                    <div class="about-image-card">
                        <img src="assets/cesar.jpg" alt="Cesar (CJ) - Owner and Handyman at CJ's All In One Handyman Services" class="about-photo">
                        <div class="about-image-badge">
                            <div class="badge-icon"><i class="fa-solid fa-circle-check"></i></div>
                            <div class="badge-text">
                                <strong>Cesar "CJ"</strong>
                                <span>Owner & Lead Handyman</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-text-column">
                    <span class="section-subtitle">Meet The Owner</span>
                    <h2>About CJ & Our Service</h2>
                    <div class="accent-line align-left"></div>
                    <p class="about-highlight">CJ has been keeping Sacramento and West Sacramento homes in top shape for over 10 years.</p>
                    <p>CJ started CJs All In One Handyman Services with a clear goal: to offer the local community an honest, reliable, and high-quality handyman service. Unlike big corporate contractor services, when you work with CJ, you get direct, personalized communication, fair upfront quotes, and clean, high-standard workmanship.</p>
                    <p>Whether he is building custom floating shelves, patching drywall, repairing damage from a storm, or replacing household fixtures, CJ approaches every single job with the same passion and precision. He treats your home with the same respect he would treat his own.</p>
                    <div class="about-stats">
                        <div class="stat-box">
                            <strong>10+</strong>
                            <span>Years Experience</span>
                        </div>
                        <div class="stat-box">
                            <strong>100%</strong>
                            <span>Satisfaction Rate</span>
                        </div>
                        <div class="stat-box">
                            <strong>Local</strong>
                            <span>Sacramento Native</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us" class="why-us section">
        <div class="container">
            <div class="why-us-wrapper">
                <div class="why-us-content">
                    <span class="section-subtitle">The CJ Difference</span>
                    <h2>A Handyman You Can Actually Depend On</h2>
                    <div class="accent-line align-left"></div>
                    <p>Finding a reliable handyman shouldn't be a project itself. At CJ's All In One Handyman Services, we make sure the process is simple, honest, and high-quality from start to finish.</p>
                    
                    <div class="features-list">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-user-shield"></i></div>
                            <div class="feature-text">
                                <h3>Licensed & Insured Local Business</h3>
                                <p>We operate fully legally and carry comprehensive general liability insurance, ensuring your home is 100% protected.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-comments-dollar"></i></div>
                            <div class="feature-text">
                                <h3>Clear, Upfront Pricing</h3>
                                <p>No hidden fees. We provide detailed estimates before starting work so you know exactly what to expect.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-broom"></i></div>
                            <div class="feature-text">
                                <h3>Clean Workspaces</h3>
                                <p>We respect your home. We lay down protective sheets and clean up thoroughly so your house looks better than when we arrived.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="why-us-badge-panel">
                    <div class="badge-card">
                        <div class="badge-icon"><i class="fa-solid fa-star"></i></div>
                        <h3>100% Satisfaction</h3>
                        <p>We don't pack up and leave until you check the work and are completely happy with the results.</p>
                    </div>
                    <div class="badge-card card-dark">
                        <div class="badge-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <h3>Sacramento Native</h3>
                        <p>Proudly serving Sacramento, West Sacramento, Midtown, Land Park, Natomas, and surrounding neighborhoods.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials section bg-light">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Testimonials</span>
                <h2>What Sacramento Neighbors Say</h2>
                <div class="accent-line"></div>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p>"CJ did an amazing job fixing our fence after a storm and installing new floating shelves in our kitchen. He arrived on time, was extremely polite, and cleaned up everything afterward. Highly recommended!"</p>
                    <div class="client-info">
                        <strong>Marcus K.</strong>
                        <span>West Sacramento, CA</span>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p>"I needed help mounting a heavy 75-inch TV and replacing a bathroom faucet. CJ got back to my text within an hour, quoted a fair price, and finished the work beautifully the next day. A+ service!"</p>
                    <div class="client-info">
                        <strong>Sarah T.</strong>
                        <span>Land Park, Sacramento</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p>"Great communication, punctual, and highly skilled. CJ patched drywalls in two rooms and painted them. You can't even tell where the holes used to be. Very reasonable rates."</p>
                    <div class="client-info">
                        <strong>Robert M.</strong>
                        <span>East Sacramento, CA</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Accordion) -->
    <section id="faq" class="faq section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">FAQ</span>
                <h2>Frequently Asked Questions</h2>
                <div class="accent-line"></div>
            </div>
            
            <div class="faq-accordion-container">
                <div class="faq-item">
                    <button class="faq-question">
                        <span>What areas in Sacramento do you service?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>We primarily serve the Sacramento and West Sacramento areas, including East Sacramento, Land Park, Midtown, Downtown, Natomas, Pocket-Greenhaven, Rosemont, and parts of Elk Grove and Davis. If you're nearby but not in these cities, give us a call and we'll let you know if we can travel to your project!</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">
                        <span>How do you charge for your handyman services?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Depending on the type of project, we offer both flat-rate pricing for clear-cut tasks (like hanging a door, painting a room, or mounting a TV) and hourly rates for smaller, list-based tasks (fixing a list of minor things around the house). We will always discuss pricing upfront and provide a written estimate before starting any work.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>Are you licensed and insured?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, CJ's All In One Handyman Services is fully registered as a local business and carries a comprehensive General Liability insurance policy. This guarantees that your property is completely protected and you can have peace of mind while we work.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>How quickly can you schedule a job?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Typically, we can book standard repair jobs within 2 to 5 business days. If you have an urgent minor repair (like a leaking valve), we always do our best to squeeze you in on the same or next day. The fastest way to check availability is by calling/texting us at 916-813-3659 or filling out our contact form.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>What if I need to supply materials?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>If you have already purchased fixtures (like a specific ceiling fan, faucet, or shelving unit), we will happily install them for you. For standard raw materials (wood, drywall, screws, pipes), we can pick them up for your project. Any materials we supply are detailed in the estimate so everything is completely transparent.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Quote Form Section -->
    <section id="contact" class="contact section bg-light">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info-panel">
                    <span class="section-subtitle">Get In Touch</span>
                    <h2>Ready to Start Your Project?</h2>
                    <p>Have a repair or home improvement job in mind? Fill out the form to request a free estimate. For urgent inquiries, feel free to call or text directly.</p>
                    
                    <div class="contact-methods">
                        <a href="tel:9168133659" class="contact-card">
                            <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="contact-text">
                                <span>Call or Text</span>
                                <strong>916-813-3659</strong>
                            </div>
                        </a>
                        
                        <div class="contact-card">
                            <div class="contact-icon"><i class="fa-solid fa-clock"></i></div>
                            <div class="contact-text">
                                <span>Service Hours</span>
                                <strong>Mon - Sat: 8:00 AM - 6:00 PM</strong>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="contact-text">
                                <span>Service Area</span>
                                <strong>Sacramento & West Sacramento</strong>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-panel">
                    <h3>Request a Free Estimate</h3>
                    
                    <!-- Web3Forms Form Integration -->
                    <form id="quoteForm" action="https://api.web3forms.com/submit" method="POST">
                        <!-- We fetch the access key dynamically from our config.php file -->
                        <input type="hidden" name="access_key" id="web3forms_key" value="<?php echo htmlspecialchars(WEB3FORMS_ACCESS_KEY); ?>">
                        
                        <!-- Form Settings -->
                        <input type="hidden" name="subject" value="New Estimate Request - CJ's Handyman">
                        <input type="hidden" name="from_name" value="CJ's Handyman Website">
                        
                        <!-- Honeypot Spam Protection -->
                        <input type="checkbox" name="botcheck" class="hidden-honeypot" style="display: none;">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" id="name" name="name" placeholder="John Doe" required>
                                <span class="error-msg" id="nameError">Name is required</span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" placeholder="(916) 555-0199" required>
                                <span class="error-msg" id="phoneError">Valid phone is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com">
                            <span class="error-msg" id="emailError">Please enter a valid email</span>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="service">Service Needed *</label>
                                <select id="service" name="service" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="Carpentry & Woodwork">Carpentry & Woodwork</option>
                                    <option value="Fixture & Appliance Repairs">Fixture & Appliance Repairs</option>
                                    <option value="Drywall & Painting">Drywall & Painting</option>
                                    <option value="General Maintenance">General Maintenance</option>
                                    <option value="Other / Multiple Services">Other / Multiple Services</option>
                                </select>
                                <span class="error-msg" id="serviceError">Please select a service</span>
                            </div>
                            <div class="form-group">
                                <label for="city">Your Location *</label>
                                <select id="city" name="city" required>
                                    <option value="" disabled selected>Select Location</option>
                                    <option value="West Sacramento">West Sacramento</option>
                                    <option value="Sacramento (Downtown/Midtown)">Sacramento (Downtown/Midtown)</option>
                                    <option value="Sacramento (East/Land Park)">Sacramento (East/Land Park)</option>
                                    <option value="Sacramento (Natomas)">Sacramento (Natomas)</option>
                                    <option value="Sacramento (Other)">Sacramento (Other Neighboring Area)</option>
                                </select>
                                <span class="error-msg" id="cityError">Location is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Project Description *</label>
                            <textarea id="message" name="message" rows="4" placeholder="Please describe the repairs or work you need done (e.g. dimensions, materials, urgency)..." required></textarea>
                            <span class="error-msg" id="messageError">Please describe your project</span>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" id="formSubmitBtn">
                            <span>Submit Request</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                        
                        <div class="form-status" id="formStatus"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-main">
        <div class="container footer-container">
            <div class="footer-brand">
                <h3>CJs All In One Handyman Services</h3>
                <p>Reliable, affordable, and high-quality home maintenance, repairs, painting, and custom carpentry in Sacramento & West Sacramento, CA.</p>
                <div class="footer-contacts">
                    <a href="tel:9168133659"><i class="fa-solid fa-phone"></i> 916-813-3659</a>
                    <span><i class="fa-solid fa-clock"></i> Mon-Sat: 8:00 AM - 6:00 PM</span>
                </div>
            </div>
            
            <div class="footer-links-group">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#gallery">Our Work</a></li>
                    <li><a href="#why-us">Why Choose Us</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Request Estimate</a></li>
                </ul>
            </div>
            
            <div class="footer-socials">
                <h4>Follow CJ's</h4>
                <p>Stay up to date with new work and customer reviews on social media.</p>
                <div class="social-icons">
                    <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container footer-bottom-container">
                <p>&copy; 2026 CJs All In One Handyman Services. All Rights Reserved. Servicing the Sacramento & West Sacramento region.</p>
                <p class="hosting-credits">Designed with care &bull; Hosted on GoDaddy</p>
            </div>
        </div>
    </footer>

    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
