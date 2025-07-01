<?php
// Configuration des variables de page (à définir dans chaque page)
$page_title = isset($page_title) ? $page_title : 'Zorica Vucic - Architecte de votre épanouissement professionnel | Coaching & Formation';
$page_description = isset($page_description) ? $page_description : 'Zorica Vucic, coach professionnelle à Épinal. Coaching, développement personnel, mindset et Espace Éclore - location bureaux & coworking. 26 Rue Bel Air, Épinal.';
$page_keywords = isset($page_keywords) ? $page_keywords : 'coaching, développement personnel, formation, épinal, espace professionnel, mindset';
$current_page = isset($current_page) ? $current_page : 'accueil';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/images/zorica-og.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="twitter:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/images/zorica-og.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/css/global.css">
    <?php if(isset($page_css)): ?>
        <link rel="stylesheet" href="/css/<?php echo $page_css; ?>.css">
    <?php endif; ?>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Zorica Vucic",
        "jobTitle": "Coach professionnelle",
        "description": "Architecte de votre épanouissement professionnel",
        "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>",
        "sameAs": [
            "https://www.linkedin.com/in/zorica-vucic",
            "https://www.a-to-z.fr"
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "26 Rue Bel Air",
            "addressLocality": "Épinal",
            "postalCode": "88000",
            "addressCountry": "FR"
        },
        "telephone": "07 54 83 55 83",
        "email": "zorica.vucic@a-to-z.fr"
    }
    </script>
</head>
<body class="<?php echo $current_page; ?>">

<!-- Header -->
<header>
    <nav class="container">
        <a href="/" class="logo">Zorica.pro</a>
        <ul class="nav-menu">
            <li><a href="/" class="<?php echo ($current_page === 'accueil') ? 'active' : ''; ?>">Accueil</a></li>
            <li><a href="/a-propos" class="<?php echo ($current_page === 'a-propos') ? 'active' : ''; ?>">À propos</a></li>
            <li class="dropdown">
                <a href="/accompagnements" class="<?php echo ($current_page === 'accompagnements') ? 'active' : ''; ?>">
                    Accompagnements <i class="fas fa-chevron-down"></i>
                </a>
                <div class="dropdown-content">
                    <a href="/accompagnements#se-reveler">Se Révéler</a>
                    <a href="/accompagnements#se-connecter">Se Connecter</a>
                    <a href="/accompagnements#eclore-espace">Éclore – Espace Professionnel</a>
                    <a href="/stages">Stages immersifs</a>
                </div>
            </li>
            <li><a href="/stages" class="<?php echo ($current_page === 'stages') ? 'active' : ''; ?>">Stages</a></li>
            <li><a href="#communaute" class="<?php echo ($current_page === 'communaute') ? 'active' : ''; ?>">La Communauté</a></li>
            <li><a href="#blog" class="<?php echo ($current_page === 'blog') ? 'active' : ''; ?>">Blog</a></li>
            <li><a href="/contact" class="<?php echo ($current_page === 'contact') ? 'active' : ''; ?>">Contact</a></li>
            
            <?php if(isset($_SESSION['user_logged']) && $_SESSION['user_logged']): ?>
                <li><a href="/dashboard" class="user-link"><i class="fas fa-user"></i> Mon espace</a></li>
            <?php else: ?>
                <li><a href="/connexion" class="login-link">Connexion</a></li>
            <?php endif; ?>
        </ul>
        <div class="mobile-menu" id="mobileMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    
    <!-- Menu mobile -->
    <div class="mobile-nav" id="mobileNav">
        <ul>
            <li><a href="/" class="<?php echo ($current_page === 'accueil') ? 'active' : ''; ?>">Accueil</a></li>
            <li><a href="/a-propos" class="<?php echo ($current_page === 'a-propos') ? 'active' : ''; ?>">À propos</a></li>
            <li><a href="/accompagnements" class="<?php echo ($current_page === 'accompagnements') ? 'active' : ''; ?>">Accompagnements</a></li>
            <li><a href="/stages" class="<?php echo ($current_page === 'stages') ? 'active' : ''; ?>">Stages</a></li>
            <li><a href="#communaute">La Communauté</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="/contact" class="<?php echo ($current_page === 'contact') ? 'active' : ''; ?>">Contact</a></li>
            
            <?php if(isset($_SESSION['user_logged']) && $_SESSION['user_logged']): ?>
                <li><a href="/dashboard"><i class="fas fa-user"></i> Mon espace</a></li>
            <?php else: ?>
                <li><a href="/connexion">Connexion</a></li>
            <?php endif; ?>
        </ul>
    </div>
</header>