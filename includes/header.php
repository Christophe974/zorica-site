<?php
// header.php - Fichier complet pour Zorica.pro
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Titre et Meta Description -->
    <title><?php echo isset($page_title) ? $page_title : 'Zorica.pro - Coach Professionnelle à Épinal | Développement Personnel & Espace de Travail'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Zorica Vucic, coach professionnelle certifiée à Épinal. Coaching individuel, formations, stages immersifs et espace de travail Éclore. Révélez votre potentiel professionnel.'; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : 'coaching professionnel, développement personnel, formation, épinal, espace de travail, coworking, mindset, zorica vucic'; ?>">
    
    <!-- Meta tags essentiels -->
    <meta name="author" content="Zorica Vucic">
    <meta name="robots" content="index, follow">
    <meta name="language" content="fr">
    <meta name="geo.region" content="FR-88">
    <meta name="geo.placename" content="Épinal">
    <meta name="geo.position" content="48.1761;6.4486">
    <meta name="ICBM" content="48.1761, 6.4486">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Zorica.pro - Coach Professionnelle à Épinal'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Coach professionnelle certifiée à Épinal. Coaching, formations et espace de travail pour révéler votre potentiel.'; ?>">
    <meta property="og:image" content="https://zorica.pro/images/og-image.jpg">
    <meta property="og:site_name" content="Zorica.pro">
    <meta property="og:locale" content="fr_FR">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : 'Zorica.pro - Coach Professionnelle'; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Coach professionnelle certifiée à Épinal. Révélez votre potentiel professionnel.'; ?>">
    <meta name="twitter:image" content="https://zorica.pro/images/twitter-card.jpg">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#1b4d4b">
    <meta name="msapplication-TileColor" content="#1b4d4b">
    <meta name="theme-color" content="#1b4d4b">
    
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <!-- CSS Principal -->
    <link rel="stylesheet" href="/css/global.css?v=<?php echo filemtime(__DIR__ . '/../css/global.css'); ?>">
    
    <!-- CSS spécifique à la page -->
    <?php if (isset($page_css) && !empty($page_css)): ?>
    <link rel="stylesheet" href="/css/<?php echo $page_css; ?>.css?v=<?php echo file_exists(__DIR__ . '/../css/' . $page_css . '.css') ? filemtime(__DIR__ . '/../css/' . $page_css . '.css') : time(); ?>">
    <?php endif; ?>
    
    <!-- Structured Data JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Zorica.pro",
        "url": "https://zorica.pro",
        "logo": "https://zorica.pro/images/logo.png",
        "description": "Coach professionnelle certifiée spécialisée en développement personnel et professionnel à Épinal",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "26 Rue Bel Air",
            "addressLocality": "Épinal",
            "postalCode": "88000",
            "addressRegion": "Vosges",
            "addressCountry": "FR"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 48.1761,
            "longitude": 6.4486
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+33754835583",
            "contactType": "customer service",
            "email": "bonjour@zorica.pro"
        },
        "founder": {
            "@type": "Person",
            "name": "Zorica Vucic",
            "jobTitle": "Coach Professionnelle Certifiée"
        },
        "sameAs": [
            "https://linkedin.com/in/zorica-vucic",
            "https://facebook.com/zorica.pro",
            "https://instagram.com/zorica.pro"
        ],
        "openingHours": "Mo-Fr 09:00-18:00, Sa 09:00-13:00",
        "priceRange": "€€"
    }
    </script>
    
    <!-- Google Analytics (remplacer UA-XXXXXXXXX-X par votre ID) -->
    <?php if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'zorica.pro'): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <?php endif; ?>
</head>
<body class="<?php echo isset($body_class) ? $body_class : ''; ?>">
    
    <!-- Skip Links pour l'accessibilité -->
    <a href="#main-content" class="skip-link">Aller au contenu principal</a>
    <a href="#main-navigation" class="skip-link">Aller à la navigation</a>
    
    <!-- Header avec navigation -->
    <header id="main-header" role="banner">
        <nav class="container" role="navigation" aria-label="Navigation principale" id="main-navigation">
            
            <!-- Logo -->
            <a href="/" class="logo" aria-label="Zorica.pro - Accueil">
                <span>Zorica</span><span style="color: var(--secondary-gold);">.pro</span>
            </a>
            
            <!-- Menu desktop -->
            <ul class="nav-menu" role="menubar">
                <li role="none">
                    <a href="/" 
                       role="menuitem" 
                       <?php echo (isset($current_page) && $current_page == 'accueil') ? 'class="active" aria-current="page"' : ''; ?>
                       aria-label="Accueil">
                        <i class="fas fa-home" aria-hidden="true"></i> 
                        <span>Accueil</span>
                    </a>
                </li>
                
                <li role="none">
                    <a href="/a-propos" 
                       role="menuitem"
                       <?php echo (isset($current_page) && $current_page == 'a-propos') ? 'class="active" aria-current="page"' : ''; ?>
                       aria-label="À propos de Zorica Vucic">
                        <i class="fas fa-user" aria-hidden="true"></i> 
                        <span>À propos</span>
                    </a>
                </li>
                
                <li class="dropdown" role="none">
                    <a href="/accompagnements" 
                       role="menuitem"
                       aria-haspopup="true"
                       aria-expanded="false"
                       <?php echo (isset($current_page) && $current_page == 'accompagnements') ? 'class="active" aria-current="page"' : ''; ?>
                       aria-label="Nos accompagnements - Coaching, Formation, Espace">
                        <i class="fas fa-hands-helping" aria-hidden="true"></i> 
                        <span>Accompagnements</span> 
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-content" role="menu" aria-label="Sous-menu Accompagnements">
                        <a href="/accompagnements#se-reveler" role="menuitem" aria-label="Se Révéler - Coaching individuel">
                            <i class="fas fa-seedling" aria-hidden="true"></i> 
                            <span>Se Révéler - Coaching</span>
                        </a>
                        <a href="/accompagnements#se-connecter" role="menuitem" aria-label="Se Connecter - Formation et réseautage">
                            <i class="fas fa-network-wired" aria-hidden="true"></i> 
                            <span>Se Connecter - Formation</span>
                        </a>
                        <a href="/accompagnements#eclore-espace" role="menuitem" aria-label="Éclore - Espace de travail et coworking">
                            <i class="fas fa-building" aria-hidden="true"></i> 
                            <span>Éclore - Espace de travail</span>
                        </a>
                    </div>
                </li>
                
                <li role="none">
                    <a href="/stages" 
                       role="menuitem"
                       <?php echo (isset($current_page) && $current_page == 'stages') ? 'class="active" aria-current="page"' : ''; ?>
                       aria-label="Stages immersifs">
                        <i class="fas fa-calendar-alt" aria-hidden="true"></i> 
                        <span>Stages</span>
                    </a>
                </li>
                
                <li role="none">
                    <a href="/contact" 
                       role="menuitem"
                       <?php echo (isset($current_page) && $current_page == 'contact') ? 'class="active" aria-current="page"' : ''; ?>
                       aria-label="Nous contacter">
                        <i class="fas fa-envelope" aria-hidden="true"></i> 
                        <span>Contact</span>
                    </a>
                </li>
                
                <li role="none">
                    <a href="/connexion" 
                       role="menuitem"
                       class="login-link"
                       aria-label="Se connecter à son espace personnel">
                        <i class="fas fa-sign-in-alt" aria-hidden="true"></i> 
                        <span>Connexion</span>
                    </a>
                </li>
            </ul>
            
            <!-- Bouton menu mobile -->
            <button class="mobile-menu" 
                    type="button"
                    aria-label="Ouvrir le menu de navigation"
                    aria-expanded="false"
                    aria-controls="mobile-navigation">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </nav>
    </header>
    
    <!-- Menu mobile overlay -->
    <div class="mobile-nav" 
         id="mobile-navigation"
         role="navigation" 
         aria-label="Navigation mobile"
         aria-hidden="true">
        <ul role="menubar" aria-label="Menu de navigation mobile">
            <li role="none">
                <a href="/" 
                   role="menuitem"
                   <?php echo (isset($current_page) && $current_page == 'accueil') ? 'class="active" aria-current="page"' : ''; ?>
                   aria-label="Accueil">
                    <i class="fas fa-home" aria-hidden="true"></i> 
                    <span>Accueil</span>
                </a>
            </li>
            
            <li role="none">
                <a href="/a-propos" 
                   role="menuitem"
                   <?php echo (isset($current_page) && $current_page == 'a-propos') ? 'class="active" aria-current="page"' : ''; ?>
                   aria-label="À propos de Zorica">
                    <i class="fas fa-user" aria-hidden="true"></i> 
                    <span>À propos</span>
                </a>
            </li>
            
            <li role="none">
                <a href="/accompagnements" 
                   role="menuitem"
                   <?php echo (isset($current_page) && $current_page == 'accompagnements') ? 'class="active" aria-current="page"' : ''; ?>
                   aria-label="Nos accompagnements">
                    <i class="fas fa-hands-helping" aria-hidden="true"></i> 
                    <span>Accompagnements</span>
                </a>
            </li>
            
            <li role="none">
                <a href="/stages" 
                   role="menuitem"
                   <?php echo (isset($current_page) && $current_page == 'stages') ? 'class="active" aria-current="page"' : ''; ?>
                   aria-label="Stages immersifs">
                    <i class="fas fa-calendar-alt" aria-hidden="true"></i> 
                    <span>Stages</span>
                </a>
            </li>
            
            <li role="none">
                <a href="/contact" 
                   role="menuitem"
                   <?php echo (isset($current_page) && $current_page == 'contact') ? 'class="active" aria-current="page"' : ''; ?>
                   aria-label="Nous contacter">
                    <i class="fas fa-envelope" aria-hidden="true"></i> 
                    <span>Contact</span>
                </a>
            </li>
            
            <li role="none">
                <a href="/connexion" 
                   role="menuitem"
                   aria-label="Se connecter">
                    <i class="fas fa-sign-in-alt" aria-hidden="true"></i> 
                    <span>Connexion</span>
                </a>
            </li>
        </ul>
        
        <!-- Informations de contact dans le menu mobile -->
        <div class="mobile-contact-info">
            <div class="mobile-contact-item">
                <a href="tel:0754835583" aria-label="Appeler Zorica au 07 54 83 55 83">
                    <i class="fas fa-phone" aria-hidden="true"></i>
                    <span>07 54 83 55 83</span>
                </a>
            </div>
            <div class="mobile-contact-item">
                <a href="mailto:bonjour@zorica.pro" aria-label="Envoyer un email à bonjour@zorica.pro">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    <span>bonjour@zorica.pro</span>
                </a>
            </div>
            <div class="mobile-social-links">
                <a href="https://linkedin.com/in/zorica-vucic" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   aria-label="Suivre Zorica sur LinkedIn">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                </a>
                <a href="https://facebook.com/zorica.pro" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   aria-label="Suivre Zorica sur Facebook">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a href="https://instagram.com/zorica.pro" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   aria-label="Suivre Zorica sur Instagram">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Overlay pour fermer le menu mobile -->
    <div class="mobile-overlay" aria-hidden="true"></div>
    
    <!-- Contenu principal -->
    <main id="main-content" role="main">
        <!-- Le contenu de chaque page sera inséré ici -->

<!-- CSS additionnel pour les éléments du menu mobile -->
<style>
/* Styles pour les éléments additionnels du menu mobile */
.mobile-contact-info {
    margin-top: var(--spacing-xl);
    padding: var(--spacing-lg);
    background: rgba(255, 255, 255, 0.9);
    border-radius: var(--radius-lg);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(27, 77, 75, 0.1);
    text-align: center;
}

.mobile-contact-item {
    margin: var(--spacing-md) 0;
}

.mobile-contact-item a {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-sm);
    color: var(--primary-teal);
    font-weight: 600;
    font-size: 1.1rem;
    padding: var(--spacing-sm) var(--spacing-md);
    border-radius: var(--radius-md);
    transition: var(--transition-normal);
    text-decoration: none;
}

.mobile-contact-item a:hover {
    background: var(--secondary-gold);
    color: var(--white);
    transform: scale(1.02);
}

.mobile-social-links {
    display: flex;
    justify-content: center;
    gap: var(--spacing-md);
    margin-top: var(--spacing-lg);
    padding-top: var(--spacing-md);
    border-top: 1px solid rgba(27, 77, 75, 0.1);
}

.mobile-social-links a {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--primary-teal);
    color: var(--white);
    border-radius: 50%;
    font-size: 1.2rem;
    transition: var(--transition-normal);
    text-decoration: none;
}

.mobile-social-links a:hover {
    background: var(--secondary-gold);
    transform: scale(1.1);
}

.mobile-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition-normal);
}

.mobile-overlay.active {
    opacity: 1;
    visibility: visible;
}

/* Skip links pour l'accessibilité */
.skip-link {
    position: absolute;
    top: -40px;
    left: 6px;
    background: var(--primary-teal);
    color: var(--white);
    padding: 8px;
    text-decoration: none;
    border-radius: 0 0 4px 4px;
    z-index: 10000;
    font-weight: 600;
    transition: var(--transition-fast);
}

.skip-link:focus {
    top: 0;
}

/* Améliorations responsive pour le menu mobile */
@media (max-width: 768px) {
    .mobile-nav ul {
        max-height: 60vh;
        overflow-y: auto;
    }
    
    .mobile-contact-info {
        margin: var(--spacing-md);
    }
}

@media (max-width: 480px) {
    .mobile-nav ul li a {
        font-size: 1.5rem;
        padding: var(--spacing-sm) var(--spacing-md);
    }
    
    .mobile-contact-item a {
        font-size: 1rem;
    }
    
    .mobile-social-links a {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}
</style>