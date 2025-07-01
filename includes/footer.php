</main>
    
    <!-- Footer avec contraste optimisé -->
    <footer id="main-footer" role="contentinfo">
        <div class="container">
            
            <!-- Newsletter Section -->
            <section class="newsletter-section" aria-labelledby="newsletter-title">
                <div class="newsletter-content">
                    <h3 id="newsletter-title">
                        <i class="fas fa-envelope-open-text" aria-hidden="true"></i> 
                        Restez Connecté·e avec Zorica.pro
                    </h3>
                    <p>Recevez nos conseils exclusifs en développement professionnel, nos actualités et invitations aux événements directement dans votre boîte mail.</p>
                    
                    <form class="newsletter-form" 
                          id="newsletterForm"
                          novalidate
                          aria-label="Formulaire d'inscription à la newsletter">
                        <div class="newsletter-input-group">
                            <label for="newsletter-email" class="sr-only">Votre adresse email</label>
                            <input type="email" 
                                   id="newsletter-email"
                                   name="newsletter-email"
                                   placeholder="Votre adresse email" 
                                   required
                                   aria-describedby="newsletter-error"
                                   autocomplete="email">
                            <button type="submit" 
                                    class="newsletter-btn"
                                    aria-label="S'inscrire à la newsletter">
                                <i class="fas fa-paper-plane" aria-hidden="true"></i> 
                                <span>S'inscrire</span>
                            </button>
                        </div>
                        <div class="newsletter-consent">
                            <label class="checkbox-label">
                                <input type="checkbox" 
                                       id="newsletter-consent"
                                       name="newsletter-consent"
                                       required
                                       aria-describedby="consent-text">
                                <span class="checkmark" aria-hidden="true"></span>
                                <span id="consent-text">J'accepte de recevoir les communications de Zorica.pro et j'ai lu la <a href="/politique-confidentialite" target="_blank" rel="noopener">politique de confidentialité</a></span>
                            </label>
                        </div>
                        <div id="newsletter-error" class="error-message" role="alert" aria-live="polite"></div>
                        <div id="newsletter-success" class="success-message" role="status" aria-live="polite"></div>
                    </form>
                </div>
            </section>
            
            <!-- Contenu principal du footer -->
            <div class="footer-content">
                
                <!-- Section Contact & Adresse -->
                <section class="footer-section" aria-labelledby="contact-title">
                    <h3 id="contact-title">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i> 
                        Contact & Adresse
                    </h3>
                    
                    <div class="contact-info">
                        <p><strong>Zorica Vucic</strong><br>
                        Coach Professionnelle Certifiée RNCP</p>
                        
                        <address>
                            <p>
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i> 
                                <span>26 Rue Bel Air<br>88000 Épinal, France</span>
                            </p>
                        </address>
                        
                        <div class="contact-methods">
                            <p>
                                <i class="fas fa-phone" aria-hidden="true"></i> 
                                <a href="tel:+33754835583" 
                                   aria-label="Appeler Zorica au 07 54 83 55 83">07 54 83 55 83</a>
                            </p>
                            <p>
                                <i class="fas fa-envelope" aria-hidden="true"></i> 
                                <a href="mailto:bonjour@zorica.pro" 
                                   aria-label="Envoyer un email à bonjour@zorica.pro">bonjour@zorica.pro</a>
                            </p>
                            <p>
                                <i class="fas fa-globe" aria-hidden="true"></i> 
                                <a href="https://zorica.pro" 
                                   aria-label="Visiter le site web zorica.pro">www.zorica.pro</a>
                            </p>
                        </div>
                        
                        <div class="business-hours">
                            <p><strong>Horaires :</strong></p>
                            <p>Lundi - Vendredi : 9h00 - 18h00<br>
                            Samedi : 9h00 - 13h00 sur RDV<br>
                            Dimanche : Fermé</p>
                        </div>
                    </div>
                    
                    <nav class="social-links" aria-label="Réseaux sociaux de Zorica">
                        <a href="https://linkedin.com/in/zorica-vucic" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="Suivre Zorica sur LinkedIn (nouvelle fenêtre)">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                        <a href="https://facebook.com/zorica.pro" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="Suivre Zorica sur Facebook (nouvelle fenêtre)">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                        <a href="https://instagram.com/zorica.pro" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="Suivre Zorica sur Instagram (nouvelle fenêtre)">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://youtube.com/@zorica.pro" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="Suivre Zorica sur YouTube (nouvelle fenêtre)">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>
                    </nav>
                </section>
                
                <!-- Section Services -->
                <section class="footer-section" aria-labelledby="services-title">
                    <h3 id="services-title">
                        <i class="fas fa-star" aria-hidden="true"></i> 
                        Nos Services
                    </h3>
                    <nav aria-label="Navigation des services">
                        <a href="/accompagnements#se-reveler" 
                           aria-label="En savoir plus sur le coaching individuel">
                            <i class="fas fa-seedling" aria-hidden="true"></i> 
                            <span>Coaching Individuel</span>
                        </a>
                        <a href="/accompagnements#se-connecter" 
                           aria-label="Découvrir nos formations et ateliers">
                            <i class="fas fa-users" aria-hidden="true"></i> 
                            <span>Formations & Ateliers</span>
                        </a>
                        <a href="/stages" 
                           aria-label="Participer à nos stages immersifs">
                            <i class="fas fa-calendar-alt" aria-hidden="true"></i> 
                            <span>Stages Immersifs</span>
                        </a>
                        <a href="/accompagnements#eclore-espace" 
                           aria-label="Découvrir l'espace de travail Éclore">
                            <i class="fas fa-building" aria-hidden="true"></i> 
                            <span>Espace de Travail Éclore</span>
                        </a>
                        <a href="/contact" 
                           aria-label="Réserver une consultation découverte gratuite">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i> 
                            <span>Consultation Découverte</span>
                        </a>
                        <a href="/temoignages" 
                           aria-label="Lire les témoignages de nos clients">
                            <i class="fas fa-heart" aria-hidden="true"></i> 
                            <span>Témoignages Clients</span>
                        </a>
                    </nav>
                </section>
                
                <!-- Section Ressources & Liens Utiles -->
                <section class="footer-section" aria-labelledby="resources-title">
                    <h3 id="resources-title">
                        <i class="fas fa-book-open" aria-hidden="true"></i> 
                        Ressources & Liens
                    </h3>
                    <nav aria-label="Navigation des ressources">
                        <a href="/a-propos" 
                           aria-label="En savoir plus sur Zorica Vucic">
                            <i class="fas fa-user" aria-hidden="true"></i> 
                            <span>À Propos de Zorica</span>
                        </a>
                        <a href="/blog" 
                           aria-label="Lire notre blog et nos ressources">
                            <i class="fas fa-blog" aria-hidden="true"></i> 
                            <span>Blog & Ressources</span>
                        </a>
                        <a href="/methode" 
                           aria-label="Découvrir notre méthode unique">
                            <i class="fas fa-lightbulb" aria-hidden="true"></i> 
                            <span>Notre Méthode</span>
                        </a>
                        <a href="/faq" 
                           aria-label="Consulter les questions fréquemment posées">
                            <i class="fas fa-question-circle" aria-hidden="true"></i> 
                            <span>Questions Fréquentes</span>
                        </a>
                        <a href="/tarifs" 
                           aria-label="Consulter nos tarifs et formules">
                            <i class="fas fa-euro-sign" aria-hidden="true"></i> 
                            <span>Tarifs & Formules</span>
                        </a>
                        <a href="/rendez-vous" 
                           aria-label="Prendre rendez-vous en ligne">
                            <i class="fas fa-calendar-check" aria-hidden="true"></i> 
                            <span>Prendre RDV</span>
                        </a>
                    </nav>
                </section>
                
                <!-- Section Informations Légales -->
                <section class="footer-section" aria-labelledby="legal-title">
                    <h3 id="legal-title">
                        <i class="fas fa-info-circle" aria-hidden="true"></i> 
                        Informations Légales
                    </h3>
                    
                    <div class="business-info">
                        <p><strong>Informations Entreprise :</strong></p>
                        <p><strong>SIRET :</strong> 123 456 789 00012</p>
                        <p><strong>Code APE :</strong> 7022Z</p>
                        <p><strong>Certification :</strong> Coach Professionnelle RNCP Niveau 6</p>
                        <p><strong>Organisme de Formation :</strong> N° 44 88 12345 88</p>
                        <p><strong>Datadock :</strong> Référencé</p>
                    </div>
                    
                    <nav class="legal-links" aria-label="Navigation des pages légales">
                        <a href="/mentions-legales" 
                           aria-label="Consulter les mentions légales">
                            <i class="fas fa-gavel" aria-hidden="true"></i> 
                            <span>Mentions Légales</span>
                        </a>
                        <a href="/politique-confidentialite" 
                           aria-label="Consulter notre politique de confidentialité">
                            <i class="fas fa-shield-alt" aria-hidden="true"></i> 
                            <span>Confidentialité</span>
                        </a>
                        <a href="/cgv" 
                           aria-label="Consulter nos conditions générales de vente">
                            <i class="fas fa-file-contract" aria-hidden="true"></i> 
                            <span>CGV</span>
                        </a>
                        <a href="/cookies" 
                           aria-label="Gérer les préférences de cookies">
                            <i class="fas fa-cookie-bite" aria-hidden="true"></i> 
                            <span>Cookies</span>
                        </a>
                        <a href="/plan-du-site" 
                           aria-label="Consulter le plan du site">
                            <i class="fas fa-sitemap" aria-hidden="true"></i> 
                            <span>Plan du Site</span>
                        </a>
                        <a href="/accessibilite" 
                           aria-label="Consulter notre déclaration d'accessibilité">
                            <i class="fas fa-universal-access" aria-hidden="true"></i> 
                            <span>Accessibilité</span>
                        </a>
                    </nav>
                </section>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        <p>&copy; <?php echo date('Y'); ?> <strong>Zorica.pro</strong> - Tous droits réservés.</p>
                        <p>Site créé avec passion à Épinal 💙 | <a href="/credits" aria-label="Voir les crédits du site">Crédits</a></p>
                    </div>
                    
                    <div class="footer-bottom-links">
                        <a href="/plan-du-site" 
                           aria-label="Consulter le plan du site">Plan du site</a>
                        <a href="/accessibilite" 
                           aria-label="Consulter notre déclaration d'accessibilité">Accessibilité</a>
                        <a href="/contact" 
                           aria-label="Nous contacter">Contact</a>
                        <a href="/admin" 
                           class="admin-link"
                           aria-label="Accès administrateur">
                            <i class="fas fa-cog" aria-hidden="true"></i> 
                            <span>Admin</span>
                        </a>
                    </div>
                </div>
                
                <!-- Certificats et Labels -->
                <div class="certifications">
                    <div class="cert-item" title="Certifié RNCP Niveau 6">
                        <i class="fas fa-certificate" aria-hidden="true"></i>
                        <span>RNCP</span>
                    </div>
                    <div class="cert-item" title="Référencé Datadock">
                        <i class="fas fa-database" aria-hidden="true"></i>
                        <span>Datadock</span>
                    </div>
                    <div class="cert-item" title="Organisme de Formation">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                        <span>OF</span>
                    </div>
                    <div class="cert-item" title="Site Éco-responsable">
                        <i class="fas fa-leaf" aria-hidden="true"></i>
                        <span>Éco</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bouton retour en haut -->
    <button id="back-to-top" 
            class="back-to-top-btn"
            type="button"
            aria-label="Retourner en haut de la page"
            title="Retourner en haut">
        <i class="fas fa-chevron-up" aria-hidden="true"></i>
    </button>
    
    <!-- JavaScript pour fonctionnalités interactives -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('🚀 Initialisation des fonctionnalités footer...');
            
            // ========================================
            // MENU MOBILE - GESTION HAMBURGER
            // ========================================
            
            const mobileMenuButton = document.querySelector('.mobile-menu');
            const mobileNav = document.querySelector('.mobile-nav');
            const mobileOverlay = document.querySelector('.mobile-overlay');
            const body = document.body;
            
            if (mobileMenuButton && mobileNav) {
                console.log('✅ Éléments du menu mobile trouvés');
                
                function toggleMobileMenu() {
                    const isActive = mobileMenuButton.classList.contains('active');
                    const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                    
                    if (isActive) {
                        // Fermer le menu
                        mobileMenuButton.classList.remove('active');
                        mobileNav.classList.remove('active');
                        if (mobileOverlay) mobileOverlay.classList.remove('active');
                        body.style.overflow = '';
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                        mobileMenuButton.setAttribute('aria-label', 'Ouvrir le menu de navigation');
                        mobileNav.setAttribute('aria-hidden', 'true');
                        console.log('📱 Menu mobile fermé');
                    } else {
                        // Ouvrir le menu
                        mobileMenuButton.classList.add('active');
                        mobileNav.classList.add('active');
                        if (mobileOverlay) mobileOverlay.classList.add('active');
                        body.style.overflow = 'hidden';
                        mobileMenuButton.setAttribute('aria-expanded', 'true');
                        mobileMenuButton.setAttribute('aria-label', 'Fermer le menu de navigation');
                        mobileNav.setAttribute('aria-hidden', 'false');
                        console.log('📱 Menu mobile ouvert');
                    }
                }
                
                // Event listener sur le bouton hamburger
                mobileMenuButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    toggleMobileMenu();
                });
                
                // Fermer le menu quand on clique sur l'overlay
                if (mobileOverlay) {
                    mobileOverlay.addEventListener('click', function() {
                        toggleMobileMenu();
                    });
                }
                
                // Fermer le menu quand on clique sur un lien
                const mobileNavLinks = mobileNav.querySelectorAll('a');
                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        setTimeout(() => {
                            if (mobileMenuButton.classList.contains('active')) {
                                toggleMobileMenu();
                            }
                        }, 150);
                    });
                });
                
                // Fermer le menu avec la touche Escape
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
                        toggleMobileMenu();
                        mobileMenuButton.focus(); // Retourner le focus au bouton
                    }
                });
            }
            
            // ========================================
            // HEADER SCROLL EFFECT
            // ========================================
            
            const header = document.querySelector('header');
            const backToTopBtn = document.getElementById('back-to-top');
            
            if (header) {
                function updateHeader() {
                    const currentScrollY = window.scrollY;
                    
                    // Ajouter la classe 'scrolled' si on a scrollé de plus de 50px
                    if (currentScrollY > 50) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                    
                    // Afficher/masquer le bouton retour en haut
                    if (backToTopBtn) {
                        if (currentScrollY > 300) {
                            backToTopBtn.classList.add('visible');
                        } else {
                            backToTopBtn.classList.remove('visible');
                        }
                    }
                }
                
                // Throttle pour améliorer les performances
                let ticking = false;
                function requestTick() {
                    if (!ticking) {
                        requestAnimationFrame(updateHeader);
                        ticking = true;
                        setTimeout(() => ticking = false, 16); // ~60fps
                    }
                }
                
                window.addEventListener('scroll', requestTick);
                console.log('✅ Effet de scroll du header activé');
            }
            
            // ========================================
            // BOUTON RETOUR EN HAUT
            // ========================================
            
            if (backToTopBtn) {
                backToTopBtn.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
                
                console.log('✅ Bouton retour en haut initialisé');
            }
            
            // ========================================
            // NEWSLETTER FORM
            // ========================================
            
            const newsletterForm = document.getElementById('newsletterForm');
            
            if (newsletterForm) {
                const emailInput = newsletterForm.querySelector('#newsletter-email');
                const consentCheckbox = newsletterForm.querySelector('#newsletter-consent');
                const submitButton = newsletterForm.querySelector('.newsletter-btn');
                const errorDiv = document.getElementById('newsletter-error');
                const successDiv = document.getElementById('newsletter-success');
                
                function showError(message) {
                    if (errorDiv) {
                        errorDiv.textContent = message;
                        errorDiv.style.display = 'block';
                    }
                    if (successDiv) successDiv.style.display = 'none';
                }
                
                function showSuccess(message) {
                    if (successDiv) {
                        successDiv.textContent = message;
                        successDiv.style.display = 'block';
                    }
                    if (errorDiv) errorDiv.style.display = 'none';
                }
                
                function hideMessages() {
                    if (errorDiv) errorDiv.style.display = 'none';
                    if (successDiv) successDiv.style.display = 'none';
                }
                
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    hideMessages();
                    
                    // Validation
                    if (!emailInput.value.trim()) {
                        showError('Veuillez saisir votre adresse email.');
                        emailInput.focus();
                        return;
                    }
                    
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(emailInput.value.trim())) {
                        showError('Veuillez saisir une adresse email valide.');
                        emailInput.focus();
                        return;
                    }
                    
                    if (!consentCheckbox.checked) {
                        showError('Veuillez accepter de recevoir nos communications.');
                        consentCheckbox.focus();
                        return;
                    }
                    
                    // Animation d'envoi
                    const originalText = submitButton.innerHTML;
                    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin" aria-hidden="true"></i> <span>Inscription...</span>';
                    submitButton.disabled = true;
                    
                    // Simulation d'envoi (remplacer par vraie logique)
                    setTimeout(() => {
                        submitButton.innerHTML = '<i class="fas fa-check" aria-hidden="true"></i> <span>Inscrit !</span>';
                        showSuccess('Merci ! Vous êtes maintenant inscrit(e) à notre newsletter.');
                        
                        setTimeout(() => {
                            submitButton.innerHTML = originalText;
                            submitButton.disabled = false;
                            emailInput.value = '';
                            consentCheckbox.checked = false;
                            hideMessages();
                        }, 3000);
                        
                        console.log('✅ Inscription newsletter simulée');
                    }, 2000);
                });
                
                console.log('✅ Gestionnaire de newsletter initialisé');
            }
            
            // ========================================
            // SMOOTH SCROLL POUR LES ANCRES
            // ========================================
            
            function initSmoothScroll() {
                const anchorLinks = document.querySelectorAll('a[href^="#"]');
                
                anchorLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        const href = this.getAttribute('href');
                        
                        // Ignorer les liens vides ou avec juste #
                        if (href === '#' || href === '') return;
                        
                        const targetElement = document.querySelector(href);
                        
                        if (targetElement) {
                            e.preventDefault();
                            
                            // Fermer le menu mobile s'il est ouvert
                            if (mobileNav && mobileNav.classList.contains('active')) {
                                mobileMenuButton.classList.remove('active');
                                mobileNav.classList.remove('active');
                                if (mobileOverlay) mobileOverlay.classList.remove('active');
                                body.style.overflow = '';
                            }
                            
                            // Calculer la position en tenant compte du header fixe
                            const headerHeight = header ? header.offsetHeight : 80;
                            const targetPosition = targetElement.offsetTop - headerHeight - 20;
                            
                            window.scrollTo({
                                top: Math.max(0, targetPosition),
                                behavior: 'smooth'
                            });
                            
                            console.log('🔗 Scroll smooth vers:', href);
                        }
                    });
                });
                
                console.log('✅ Smooth scroll initialisé pour', anchorLinks.length, 'liens');
            }
            
            initSmoothScroll();
            
            console.log('🎉 Footer et interactions initialisés avec succès !');
        });
    </script>
    
    <!-- Styles additionnels pour les nouveaux éléments -->
    <style>
        /* Messages d'erreur et de succès */
        .error-message, .success-message {
            display: none;
            padding: var(--spacing-sm);
            border-radius: var(--radius-sm);
            margin-top: var(--spacing-sm);
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .error-message {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }
        
        .success-message {
            background: rgba(34, 197, 94, 0.1);
            color: #16a34a;
            border: 1px solid rgba(34, 197, 94, 0.3);
        }
        
        /* Screen reader only */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }
        
        /* Bouton retour en haut */
        .back-to-top-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--secondary-gold);
            color: var(--white);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            box-shadow: var(--shadow-medium);
            transition: var(--transition-normal);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
        }
        
        .back-to-top-btn.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .back-to-top-btn:hover {
            background: var(--gold-dark);
            transform: translateY(-3px) scale(1.1);
            box-shadow: var(--shadow-heavy);
        }
        
        /* Certifications */
        .certifications {
            display: flex;
            justify-content: center;
            gap: var(--spacing-md);
            margin-top: var(--spacing-md);
            padding-top: var(--spacing-md);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .cert-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: var(--spacing-xs);
            padding: var(--spacing-sm);
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-sm);
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.8);
            transition: var(--transition-normal);
        }
        
        .cert-item:hover {
            background: rgba(255, 255, 255, 0.15);
            color: var(--secondary-gold);
        }
        
        .cert-item i {
            font-size: 1.2rem;
        }
        
        /* Responsive améliorations */
        @media (max-width: 768px) {
            .back-to-top-btn {
                bottom: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
            
            .certifications {
                flex-wrap: wrap;
                gap: var(--spacing-sm);
            }
            
            .cert-item {
                flex: 1;
                min-width: 70px;
            }
        }
    </style>
    
</body>
</html>