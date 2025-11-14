<?= $this->extend('layouts/main.php');?>

<?= $this->section('content'); ?>

    <!-- Companies Introduction Section -->
    <div class="companies-section bg-super-light py-3">
        <div class="container">
            <div class="row g-4">
                <!-- Nanterre Solutions Card -->
                <div class="col-lg-6">
                    <div class="company-card h-100 bg-white rounded-lg shadow-sm p-4">
                        <div class="card-body text-center">
                            <div class="company-logo mb-4 d-flex justify-content-center align-items-center">
                                <img src="/uploads/illustrations/logo-NS.jpg" 
                                     alt="Nanterre Solutions Logo" 
                                     class="img-fluid"
                                     style="max-width: 160px; max-height: 160px; object-fit: contain;">
                            </div>
                            <h2 class="company-title mb-3">Nanterre Solutions</h2>
                            <p class="company-description mb-4">
                                Votre partenaire local de confiance pour tous vos besoins en électricité, plomberie, 
                                chauffage, sécurité, immobilier, automobile. Une expertise reconnue à Nanterre.
                            </p>
                            <div class="service-icons mb-4">
                                <i class="fas fa-bolt mx-2" title="Électricité"></i>
                                <i class="fas fa-faucet mx-2" title="Plomberie"></i>
                                <i class="fas fa-shield-alt mx-2" title="Sécurité"></i>
                                <i class="fas fa-house-user mx-2" title="Immobilier"></i>
                                <i class="fas fa-car mx-2" title="Automobile"></i>
                            </div>
                            <a href="/contact" class="btn btn-primary">Contactez-nous</a>
                        </div>
                    </div>
                </div>

                <!-- Outinnov Card -->
                <div class="col-lg-6">
                    <div class="company-card h-100 bg-white rounded-lg shadow-sm p-4">
                        <div class="card-body text-center">
                            <div class="company-logo mb-4 d-flex justify-content-center align-items-center">
                                <a href="https://outinnov.fr" target="_blank" class="logo-link">
                                    <img src="/uploads/illustrations/outinnov_logo.png" 
                                         alt="Outinnov Logo" 
                                         class="img-fluid"
                                         style="max-width: 160px; max-height: 160px; object-fit: contain;">
                                </a>
                            </div>
                            <h2 class="company-title mb-3">Outinnov</h2>
                            <p class="company-description mb-4">
                                Expert en solutions informatiques et développement web. 
                                Une approche innovante pour vos projets numériques.
                            </p>
                            <div class="service-icons mb-4">
                                <i class="fas fa-laptop-code mx-2" title="Développement"></i>
                                <i class="fas fa-network-wired mx-2" title="Infrastructure"></i>
                                <i class="fas fa-database mx-2" title="Solutions Cloud"></i>
                                <i class="fas fa-mobile-alt mx-2" title="Applications Mobiles"></i>
                            </div>
                            <a href="https://outinnov.fr" class="btn btn-primary" target="_blank">Visiter le partenaire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .companies-section {
            min-height: auto;
            padding-top: 2rem;
            display: flex;
            align-items: center;
        }
        
        .company-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.1);
        }
        
        .company-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .company-title {
            font-size: 2rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .company-description {
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .service-icons {
            font-size: 1.5rem;
            color: var(--primary);
        }

        .service-icons i {
            transition: transform 0.2s ease;
        }

        .service-icons i:hover {
            transform: scale(1.2);
        }

        @media (max-width: 991.98px) {
            .companies-section {
                min-height: auto;
                padding: 4rem 0;
            }
        }

        .intro-section {
            padding: 3rem 0;
            background: linear-gradient(135deg, var(--bg-subtle) 0%, var(--bg-white) 100%);
        }

        .intro-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 1rem;
        }

        .intro-title {
            font-size: 2.75rem;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .intro-description {
            font-size: 1.2rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .intro-section {
                padding: 3rem 0;
            }
            
            .intro-title {
                font-size: 2rem;
            }

            .intro-description {
                font-size: 1.1rem;
            }
        }
    </style>

    <!-- Skills Showcase -->
    <section class="skills-showcase">
        <div class="container">
            <h2 class="section-title">Nos Expertises</h2>
            <div class="skills-grid">
                <!-- Electrical & Smart Home -->
                <a href="/services/energie" class="skill-link">
                    <div class="skill-card">
                        <div class="skill-icon-wrapper">
                            <div class="skill-icon-placeholder">
                                <div class="placeholder-overlay">
                                    <i class="fas fa-bolt"></i>
                                </div>
                            </div>
                        </div>
                        <h3>Energie & Domotique</h3>
                        <p>Optimisation énergétique, installation, dépannage pour votre habitat intelligent</p>
                    </div>
                </a>

                <!-- Plumbing & Heating -->
                <a href="/services/plomberie" class="skill-link">
                    <div class="skill-card">
                        <div class="skill-icon-wrapper">
                            <div class="skill-icon-placeholder">
                                <div class="placeholder-overlay">
                                    <i class="fas fa-faucet"></i>
                                </div>
                            </div>
                        </div>
                        <h3>Plomberie & Chauffage</h3>
                        <p>Services de qualité pour vos installations sanitaires et systèmes de chauffage</p>
                    </div>
                </a>

                <!-- Security Systems -->
                <a href="/services/securite" class="skill-link">
                    <div class="skill-card">
                        <div class="skill-icon-wrapper">
                            <div class="skill-icon-placeholder">
                                <div class="placeholder-overlay">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                            </div>
                        </div>
                        <h3>Sécurité & Surveillance</h3>
                        <p>Protection et tranquillité d'esprit avec nos solutions de sécurité modernes</p>
                    </div>
                </a>

                <!-- Real Estate -->
                <a href="/services/immobilier" class="skill-link">
                    <div class="skill-card">
                        <div class="skill-icon-wrapper">
                            <div class="skill-icon-placeholder">
                                <div class="placeholder-overlay">
                                    <i class="fas fa-house"></i>
                                </div>
                            </div>
                        </div>
                        <h3>Immobilier</h3>
                        <p>Conseils pour vos projets immobiliers : achat/vente, estimations, aménagements</p>
                    </div>
                </a>

                <!-- Automobile -->
                <a href="/services/automobile" class="skill-link">
                    <div class="skill-card">
                        <div class="skill-icon-wrapper">
                            <div class="skill-icon-placeholder">
                                <div class="placeholder-overlay">
                                    <i class="fas fa-car"></i>
                                </div>
                            </div>
                        </div>
                        <h3>Automobile</h3>
                        <p>Mobilisation de professionnels pour la réparation de votre véhicule : diagnostic, entretien, réparations</p>
                    </div>
                </a>

                <!-- Informatique -->
                <a href="/services/informatique" class="skill-link">
                    <div class="skill-card">
                        <div class="skill-icon-wrapper">
                            <div class="skill-icon-placeholder">
                                <div class="placeholder-overlay">
                                    <i class="fas fa-laptop"></i>
                                </div>  
                            </div>
                        </div>
                        <h3>Informatique</h3>
                        <p>Dépannages, conseils en solutions matérielles, réseau,  sites Webs avec Outinnov</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Quality Section -->
    <section class="quality-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="quality-content">
                        <h2>Notre Engagement Qualité</h2>
                        <p>Reconnus par la ville de Nanterre pour notre excellence de service et notre engagement local.</p>
                        <div class="quality-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Service professionnel garanti</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock"></i>
                                <span>Intervention rapide</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Proximité locale</span>
                            </div>
                        </div>
                        <a href="https://www.nanterre.fr/" class="btn btn-outline-accent">
                            Ville de Nanterre
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quality-image">
                        <img src="/uploads/illustrations/charte_qualite_nanterre.png" 
                             alt="Charte Qualité Nanterre" 
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        /* Background and container styling */
        .bg-super-light {
            background-color: #f8f9fa;
        }

        /* Company cards styling */
        .company-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            background: #ffffff;
            border-radius: 12px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .company-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .company-card.main-card {
            border-color: var(--accent);
        }

        .card-body {
            padding: 2rem 1.5rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .company-logo {
            max-width: 120px;
            height: auto;
            object-fit: contain;
            margin: 1rem auto 0;
            padding: 0.5rem;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes revealCard {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hero Section */
        .hero-section {
            padding: 6rem 0 4rem;
            background: linear-gradient(135deg, var(--bg-subtle) 0%, var(--bg-white) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeInUp 0.6s ease forwards;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-muted);
            margin-bottom: 2.5rem;
            animation: fadeInUp 0.6s ease forwards 0.2s;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            justify-content: center;
            animation: fadeInUp 0.6s ease forwards 0.4s;
        }

        /* Skills Section */
        .company-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .reveal-card {
            animation: revealCard 0.6s ease forwards;
        }

        .card-icon-wrapper {
            padding: 2rem;
            background: rgba(248, 249, 250, 0.5);
            border-radius: 16px 16px 0 0;
        }

        /* Button effects */
        .btn-effect {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .btn-effect i {
            transition: transform 0.3s ease;
        }

        .btn-effect:hover i {
            transform: translateX(4px);
        }

        /* Services Description Section */
        .services-description {
            padding: 5rem 0;
            background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
        }

        .services-description .content-wrapper {
            max-width: 800px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            color: var(--text-dark);
            line-height: 1.2;
        }

        .service-block {
            margin-bottom: 3rem;
            padding: 2rem;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }

        .service-block:hover {
            transform: translateY(-5px);
        }

        .service-block h3 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .service-block p {
            color: #4a5568;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .services-list, .features-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .services-list li, .features-list li {
            position: relative;
            padding-left: 1.8rem;
            color: #4a5568;
            font-size: 1rem;
            line-height: 1.5;
        }

        .services-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        .features-list li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: var(--primary);
        }

        @media (max-width: 768px) {
            .services-description {
                padding: 3rem 0;
            }

            .section-title {
                font-size: 2rem;
                margin-bottom: 2rem;
            }

            .service-block {
                padding: 1.5rem;
                margin-bottom: 2rem;
            }

            .service-block h3 {
                font-size: 1.3rem;
            }

            .service-block p {
                font-size: 1rem;
            }

            .services-list, .features-list {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }
        }

        /* Background and container styling */
        .bg-super-light {
            background-color: #f8f9fa;
        }

        /* Company cards styling */
        .company-card {
            transition: transform 0.3s ease;
            background: transparent;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 1.5rem;
        }

        .company-card:hover {
            transform: translateY(-5px);
        }

        .company-card.main-card {
            background: rgba(var(--accent-rgb), 0.03);
            border-radius: 12px;
        }

        .card-body {
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .company-logo {
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .company-logo img {
            transition: transform 0.3s ease;
        }

        .logo-link {
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .logo-link:hover img {
            transform: scale(1.05);
        }

        .company-logo.main-logo {
            max-width: 140px;
        }

        .card-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .card-text {
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
            flex: 1;
        }

        .badge {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
            font-weight: 500;
        }

        /* Adjust vertical spacing */
        .company-section {
            padding: 4rem 0;
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .company-logo {
                max-width: 100px;
                margin-top: 0.5rem;
            }
            .company-card {
                margin-bottom: 1.5rem;
            }
            .card-body {
                padding: 1.5rem 1rem;
            }
            .card-text {
                margin-bottom: 1rem;
            }
        }

        /* Modern Hero Section */
        .hero-section {
            padding: 6rem 0 4rem;
            background: linear-gradient(135deg, var(--bg-subtle) 0%, var(--bg-white) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-muted);
            margin-bottom: 2.5rem;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        /* Skills Showcase */
        .skills-showcase {
            padding: 3rem 0;
            background: var(--bg-white);
        }

        .section-title {
            font-size: 2.25rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 2rem;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .skill-card {
            background: var(--bg-white);
            border-radius: 16px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        }

        .skill-icon-wrapper {
            margin-bottom: 1rem;
        }

        .skill-icon-placeholder {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            background: var(--bg-subtle);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .placeholder-overlay {
            font-size: 2.5rem;
            color: var(--accent);
            opacity: 0.8;
        }

        .skill-card h3 {
            color: var(--text-dark);
            font-size: 1.25rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .skill-card p {
            color: var(--text-muted);
            line-height: 1.6;
        }

        .skill-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .skill-link:hover {
            text-decoration: none;
            color: inherit;
        }

        .skill-link:hover .skill-card {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        }

        .skill-link:hover .placeholder-overlay i {
            color: var(--accent-light);
            transform: scale(1.1);
            transition: all 0.3s ease;
        }

        /* Quality Section */
        .quality-section {
            padding: 3rem 0;
            background: linear-gradient(135deg, var(--bg-subtle) 0%, var(--bg-white) 100%);
        }

        .quality-content {
            padding: 1.5rem;
        }

        .quality-content h2 {
            font-size: 2.25rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .quality-content p {
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        .quality-features {
            display: grid;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: 1.1rem;
            color: var(--text-dark);
        }

        .feature-item i {
            color: var(--accent);
            font-size: 1.25rem;
        }

        .quality-image {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        }

        .quality-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .quality-image:hover img {
            transform: scale(1.02);
        }

        /* Additional Styling */
        .btn-outline-accent {
            color: var(--accent);
            border: 2px solid var(--accent);
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-outline-accent:hover {
            background: var(--accent);
            color: white;
            transform: translateY(-2px);
        }

        .btn-outline-accent i {
            transition: transform 0.3s ease;
        }

        .btn-outline-accent:hover i {
            transform: translateX(4px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                padding: 4rem 0 3rem;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .hero-cta {
                flex-direction: column;
            }

            .quality-content {
                text-align: center;
                padding: 1rem;
            }

            .quality-features {
                justify-content: center;
            }

            .quality-image {
                margin-top: 2rem;
            }
        }
        }

        .card-header h3 {
            color: var(--light);
            font-size: 1.1rem;
            margin-bottom: 0.75rem;
        }


        .card-body {
            padding: 0;
        }

        .card-body ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .card-body li {
            color: var(--light);
            font-size: 0.9rem;
            margin-bottom: 0.75rem;
            padding-left: 1.5rem;
            position: relative;
        }

        .card-body li::before {
            content: '→';
            color: var(--accent);
            position: absolute;
            left: 0;
            transition: transform 0.2s ease;
        }


        .action-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--accent);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            border: 1px solid var(--accent);
            border-radius: 8px;
            transition: all 0.3s ease;
            background: transparent;
        }

        .action-link:hover {
            background: var(--accent);
            color: var(--darker);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(61, 216, 76, 0.2);
        }

        .action-link i {
            transition: transform 0.2s ease;
        }

        .action-link:hover i {
            transform: translateX(3px);
        }

        .package-card {
            background: var(--dark);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.1);
            padding: 1.5rem;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .learn-more {
            font-size: 0.85rem;
            color: var(--primary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s;
        }

        .learn-more:hover {
            transform: translateX(5px);
            color: var(--light);
        }

        .note-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--accent);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            margin-top: 1.5rem;
            transition: all 0.2s;
        }

        .note-link:hover {
            transform: translateX(5px);
            color: var(--light);
            text-decoration: none;
        }


        .action-note {
            background: var(--dark);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .profile-image-wrapper {
            width: 100%;
            height: 320px;
            overflow: hidden;
            margin-bottom: 1rem;
            position: relative;
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: contain;  /* Changed from default to contain */
            object-position: center;  /* Added to center the image */
            transition: transform 0.3s ease;
        }

        .action-content {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex: 1;
            padding: 1rem 0;
        }

        .action-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            background: var(--primary);
            border-radius: 4px;
            transition: all 0.2s;
            margin: 0 auto;  /* Changed from margin-bottom */
        }

        @media (max-width: 768px) {
            .action-note {
                width: 100%;
                max-width: 300px;
                height: 450px;  /* Adjusted for mobile */
            }

            .profile-image-wrapper {
                height: 350px;  /* Adjusted for mobile */
            }
        }

        .floating-profile {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0,0,0,0.25);
            z-index: 2;
            transition: all 0.3s ease;
        }

        .floating-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.3s ease;
        }

        .floating-profile:hover {
            transform: translate(-50%, -55%);
            box-shadow: 0 12px 40px rgba(61, 216, 76, 0.2);
        }

        @media (max-width: 768px) {
            .pricing-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .floating-profile {
                position: relative;
                top: 0;
                left: 0;
                transform: none;
                margin: 2rem auto;
            }

            .floating-profile:hover {
                transform: translateY(-5px);
            }
        }

        .nav-languages {
            margin-left: 2rem;
        }

        @media (max-width: 768px) {
            .pricing-container {
                padding: 3rem 0 1rem;
            }
            
            .nav-languages {
                margin-left: 0;
                margin-top: 1rem;
            }
        }

        .pricing-note {
            background: var(--darker);
            padding: 2rem;
            border-radius: 8px;
            width: 300px;
            position: relative;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .note-header {
            background: var(--darker);
            border-bottom: 2px solid var(--accent);
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
        }

        .note-title {
            color: var(--light);
            font-size: 1.2rem;
            margin: 0;
            font-weight: 600;
        }

        .price-tag {
            color: var(--accent);
            font-size: 1.8rem;
            font-weight: 700;
            display: block;
            margin-bottom: 0.5rem;
        }
    </style>
<?= $this->endSection('content'); ?>