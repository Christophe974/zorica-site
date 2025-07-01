<?php
// Configuration de la page d'accueil
$page_title = "Zorica Vucic - Architecte de votre épanouissement professionnel | Coaching & Formation";
$page_description = "Zorica Vucic, coach professionnelle à Épinal. Coaching, développement personnel, mindset et Espace Éclore - location bureaux & coworking. 26 Rue Bel Air, Épinal.";
$page_keywords = "coaching, développement personnel, formation, épinal, espace professionnel, mindset, zorica vucic, éclore";
$current_page = "accueil";
$page_css = "index";

// Inclusion du header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero" id="accueil">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Zorica Vucic, l'architecte de votre épanouissement professionnel</h1>
                <p class="subtitle">Aligner qui vous êtes avec ce que vous montrez. Et vous offrir l'espace pour faire éclore votre réussite.</p>
                <div class="hero-buttons">
                    <a href="/contact" class="cta-button">
                        <i class="fas fa-calendar-check"></i>
                        Découvrir comment je peux vous accompagner
                    </a>
                    <a href="#accompagnements" class="cta-button outline">
                        <i class="fas fa-arrow-down"></i>
                        Voir mes services
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-container">
                    <img src="/images/zorica.jpg" alt="Zorica Vucic - Coach professionnelle à Épinal" loading="eager">
                    <div class="sparkles">
                        <div class="sparkle"></div>
                        <div class="sparkle"></div>
                        <div class="sparkle"></div>
                        <div class="sparkle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="introduction">
    <div class="container">
        <div class="intro-content">
            <!-- Logo à gauche -->
            <div class="logo-section">
                <div class="logo-container">
                    <img src="/images/logo.png" 
                         alt="Zorica.pro Logo" 
                         class="intro-logo"
                         loading="lazy">
                </div>
            </div>
            
            <!-- Contenu texte à droite -->
            <div class="content-section">
                <h2>Un écosystème pour faire grandir vos ambitions</h2>
                <div class="intro-text">
                    <p class="highlight"><strong>Coach professionnelle certifiée, facilitatrice de parcours, créatrice d'espaces…</strong></p>
                    <p>Je vous accompagne à révéler votre potentiel, à vous connecter à une communauté vivante, et à matérialiser votre projet dans un lieu conçu pour votre réussite.</p>
                    <blockquote class="quote">
                        Bienvenue dans un accompagnement où l'humain, le collectif et l'environnement se répondent.
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pillars Section -->
<section class="pillars" id="accompagnements">
    <div class="container">
        <div class="section-title">
            <h2>Les 3 Piliers de Votre Transformation</h2>
            <p>Un accompagnement complet pour révéler votre potentiel, développer vos connexions et créer l'espace de votre réussite.</p>
        </div>
        <div class="pillars-grid">
            <div class="pillar-card reveal-pillar" data-aos="fade-up" data-aos-delay="100">
                <div class="pillar-icon">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3>Se Révéler</h3>
                <p>Coaching personnalisé pour découvrir et affirmer votre identité professionnelle authentique. Alignez vos valeurs avec vos actions.</p>
                <div class="pillar-features">
                    <span class="feature-tag">Coaching individuel</span>
                    <span class="feature-tag">Développement personnel</span>
                    <span class="feature-tag">Alignement professionnel</span>
                </div>
                <a href="/accompagnements#se-reveler" class="pillar-link">
                    Découvrir le coaching <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="pillar-card connect-pillar" data-aos="fade-up" data-aos-delay="200">
                <div class="pillar-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>Se Connecter</h3>
                <p>Formation et animation de réseau pour développer vos connexions professionnelles et créer des opportunités durables.</p>
                <div class="pillar-features">
                    <span class="feature-tag">Formations</span>
                    <span class="feature-tag">Réseautage</span>
                    <span class="feature-tag">Communication</span>
                </div>
                <a href="/accompagnements#se-connecter" class="pillar-link">
                    Explorer les formations <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="pillar-card eclore-pillar" data-aos="fade-up" data-aos-delay="300">
                <div class="pillar-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Éclore</h3>
                <p>Espace de travail professionnel à Épinal, conçu pour favoriser votre productivité et votre épanouissement.</p>
                <div class="pillar-features">
                    <span class="feature-tag">Bureaux privés</span>
                    <span class="feature-tag">Coworking</span>
                    <span class="feature-tag">Événements</span>
                </div>
                <a href="/accompagnements#eclore-espace" class="pillar-link">
                    Visiter l'espace <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-number">25+</div>
                <div class="stat-label">Années d'expérience RH</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-number">200+</div>
                <div class="stat-label">Professionnels accompagnés</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-number">3</div>
                <div class="stat-label">Piliers d'accompagnement</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-number">1</div>
                <div class="stat-label">Espace unique à Épinal</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <div class="container">
        <div class="section-title">
            <h2>Ils me font confiance</h2>
            <p>Découvrez les témoignages de professionnels qui ont transformé leur carrière grâce à nos accompagnements.</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card" data-aos="fade-right" data-aos-delay="100">
                <div class="testimonial-quote">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>Zorica m'a permis de passer un cap décisif dans mon rôle de manager. Ce n'est pas juste du coaching, c'est un véritable catalyseur.</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">VR</div>
                    <div class="author-info">
                        <h4>Valérie R.</h4>
                        <p>Directrice d'agence bancaire</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-quote">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>L'Espace Éclore, ce n'est pas juste un bureau : c'est une énergie, un réseau, une dynamique. J'ai trouvé bien plus que ce que je cherchais.</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">JB</div>
                    <div class="author-info">
                        <h4>Julie B.</h4>
                        <p>Entrepreneure</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card" data-aos="fade-left" data-aos-delay="300">
                <div class="testimonial-quote">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>La cohérence entre qui je suis, ce que je montre et où je travaille, c'est ce qui a tout changé.</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">MP</div>
                    <div class="author-info">
                        <h4>Marc P.</h4>
                        <p>Consultant indépendant</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="about-preview">
    <div class="container">
        <div class="about-content">
            <div class="about-image" data-aos="fade-right">
                <div class="image-wrapper">
                    <img src="/images/zorica-about.jpg" alt="Zorica Vucic - À propos" loading="lazy">
                </div>
            </div>
            <div class="about-text" data-aos="fade-left">
                <h2>Qui est Zorica ?</h2>
                <p class="about-intro"><strong>Une carrière de 25 ans en RH. Un virage assumé vers l'accompagnement humain.</strong></p>
                <p>Aujourd'hui, je fais de chaque parcours professionnel un chemin de transformation.</p>
                <div class="about-highlights">
                    <div class="highlight-item">
                        <i class="fas fa-certificate"></i>
                        <span>Coach professionnelle certifiée</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-users"></i>
                        <span>25 ans d'expérience RH</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-heart"></i>
                        <span>Passion pour l'humain</span>
                    </div>
                </div>
                <a href="/a-propos" class="about-link">
                    Découvrir mon histoire <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="final-cta">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Vous êtes au bon endroit si vous sentez que c'est le moment d'aligner l'intérieur et l'extérieur</h2>
            <p>Que vous soyez en transition, en quête de clarté, ou prêt·e à passer à l'action…</p>
            <div class="cta-buttons">
                <a href="/contact" class="cta-button">
                    <i class="fas fa-phone"></i> 
                    Réserver un appel découverte
                </a>
                <a href="/accompagnements#eclore-espace" class="cta-button outline">
                    <i class="fas fa-map-marker-alt"></i> 
                    Visiter l'espace Éclore
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Contact Section -->
<section class="quick-contact" id="contact-rapide">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info" data-aos="fade-right">
                <h3>Commençons Ensemble</h3>
                <p>Prêt(e) à transformer votre parcours professionnel ? Contactez-moi pour échanger sur vos projets.</p>
                
                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="method-info">
                            <h4>Appelez-moi</h4>
                            <a href="tel:0754835583">07 54 83 55 83</a>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="method-info">
                            <h4>Écrivez-moi</h4>
                            <a href="mailto:bonjour@zorica.pro">bonjour@zorica.pro</a>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="method-info">
                            <h4>Retrouvez-moi</h4>
                            <span>26 Rue Bel Air, 88000 Épinal</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container" data-aos="fade-left">
                <form class="contact-form" id="quickContactForm">
                    <div class="form-group">
                        <label for="name">Nom complet *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Quel service vous intéresse ?</label>
                        <select id="service" name="service">
                            <option value="">Sélectionnez un service</option>
                            <option value="coaching">Coaching - Se Révéler</option>
                            <option value="formation">Formation - Se Connecter</option>
                            <option value="espace">Espace de travail - Éclore</option>
                            <option value="multiple">Plusieurs services</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required placeholder="Décrivez brièvement vos besoins et objectifs..."></textarea>
                    </div>
                    
                    <button type="submit" class="cta-button full-width">
                        <i class="fas fa-paper-plane"></i>
                        Envoyer ma demande
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
// Inclusion du footer
include 'includes/footer.php';
?><!-- Test auto-deploy -->
