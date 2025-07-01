<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Zorica Vucic</h3>
                <p>Architecte de votre épanouissement professionnel</p>
                <p>Coach professionnelle certifiée</p>
                <p>Espace Éclore - Épinal</p>
                <div class="social-links">
                    <a href="https://fr.linkedin.com/in/zorica-vučić-coach-communication-branding" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       aria-label="LinkedIn Zorica Vucic">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.facebook.com/zorica.vucic" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       aria-label="Facebook Zorica Vucic">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://zorica.pro" 
                       aria-label="Site Zorica.pro">
                        <i class="fas fa-globe"></i>
                    </a>
                    <a href="mailto:bonjour@zorica.pro" 
                       aria-label="Email Zorica Vucic">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Services</h3>
                <a href="/accompagnements#se-reveler">Coaching personnel</a><br>
                <a href="/accompagnements#se-connecter">Formation & Réseautage</a><br>
                <a href="/accompagnements#eclore-espace">Espace de travail</a><br>
                <a href="/stages">Stages immersifs</a><br>
                <a href="#communaute">Communauté</a>
            </div>
            
            <div class="footer-section">
                <h3>Contact</h3>
                <p><i class="fas fa-envelope"></i> <a href="mailto:bonjour@zorica.pro">bonjour@zorica.pro</a></p>
                <p><i class="fas fa-phone"></i> <a href="tel:0754835583">07 54 83 55 83</a></p>
                <p><i class="fas fa-map-marker-alt"></i> 26 Rue Bel Air, 88000 Épinal</p>
                <p><i class="fas fa-clock"></i> Du lundi au vendredi<br>9h00 - 18h00</p>
            </div>
            
            <div class="footer-section">
                <h3>Informations</h3>
                <a href="/mentions-legales">Mentions légales</a><br>
                <a href="/politique-confidentialite">Politique de confidentialité</a><br>
                <a href="/cgv">Conditions générales</a><br>
                <a href="#blog">Blog</a><br>
                <a href="/plan-site">Plan du site</a>
            </div>
        </div>
        
        <!-- Newsletter signup -->
        <div class="newsletter-section">
            <div class="newsletter-content">
                <h3>Restez connecté(e)</h3>
                <p>Recevez mes conseils et actualités pour votre épanouissement professionnel</p>
                <form class="newsletter-form" id="newsletterForm">
                    <div class="newsletter-input-group">
                        <input type="email" 
                               id="newsletter-email" 
                               name="email" 
                               placeholder="Votre adresse email" 
                               required>
                        <button type="submit" class="newsletter-btn">
                            <i class="fas fa-paper-plane"></i>
                            S'abonner
                        </button>
                    </div>
                    <div class="newsletter-consent">
                        <label class="checkbox-label">
                            <input type="checkbox" name="consent" required>
                            <span class="checkmark"></span>
                            J'accepte de recevoir les actualités de Zorica.pro
                        </label>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p>&copy; <?php echo date('Y'); ?> Zorica.pro - Tous droits réservés</p>
                <div class="footer-bottom-links">
                    <span>Créé avec ❤️ à Épinal</span>
                    <?php if(isset($_SESSION['admin_logged']) && $_SESSION['admin_logged']): ?>
                        <a href="/admin" class="admin-link">
                            <i class="fas fa-cog"></i> Administration
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="/js/main.js"></script>

<!-- Script Newsletter -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForm = document.getElementById('newsletterForm');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('newsletter-email').value;
            const consent = document.querySelector('input[name="consent"]').checked;
            
            if (!email || !consent) {
                alert('Veuillez remplir tous les champs et accepter les conditions.');
                return;
            }
            
            const button = this.querySelector('.newsletter-btn');
            const originalContent = button.innerHTML;
            
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Inscription...';
            button.disabled = true;
            
            // Simulation de l'envoi (à remplacer par votre logique d'inscription)
            setTimeout(() => {
                alert('Merci pour votre inscription ! Vous recevrez bientôt mes actualités.');
                document.getElementById('newsletter-email').value = '';
                document.querySelector('input[name="consent"]').checked = false;
                button.innerHTML = originalContent;
                button.disabled = false;
            }, 1500);
        });
    }
});
</script>

<!-- Google Analytics (remplacez par votre ID) -->
<!-- 
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
</script>
-->

</body>
</html>