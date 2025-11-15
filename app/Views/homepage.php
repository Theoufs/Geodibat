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
                                <img src="/uploads/illustrations/geometre.jpg" 
                                     alt="Geometre" 
                                     class="img-fluid"
                                     style="max-width: 160px; max-height: 160px; object-fit: contain;">
                            </div>
                            <h2 class="company-title mb-3">Géomètre</h2>
                            <p class="company-description mb-4">
                                Division spécialisée dans le secteur de l'immobilier pour les copropriétés depuis 1997.
                            </p>
                            <div class="service-icons mb-4">
                                <i class="fas fa-building mx-2" title="Copropriété"></i>
                                <i class="fas fa-clipboard-check mx-2" title="État des lieux"></i>
                                <i class="fas fa-drafting-compass mx-2" title="Aménagement"></i>
                                <i class="fas fa-handshake mx-2" title="Vente"></i>
                                <i class="fas fa-search-location mx-2" title="Recherches"></i>
                            </div>
                            <a href="/geometre" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Outinnov Card -->
                <div class="col-lg-6">
                    <div class="company-card h-100 bg-white rounded-lg shadow-sm p-4">
                        <div class="card-body text-center">
                            <div class="company-logo mb-4 d-flex justify-content-center align-items-center">
                                <img src="/uploads/illustrations/travaux.jpg" 
                                     alt="Travaux" 
                                     class="img-fluid"
                                     style="max-width: 160px; max-height: 160px; object-fit: contain;">
                            </div>
                            <h2 class="company-title mb-3">Travaux</h2>
                            <p class="company-description mb-4">
                                Etudes de faisabilité, encadrement et réalisation de travaux en batiments.
                            </p>
                            <div class="service-icons mb-4">
                                <i class="fas fa-hammer mx-2" title="Rénovation"></i>
                                <i class="fas fa-hard-hat mx-2" title="Artisanat"></i>
                                <i class="fas fa-city mx-2" title="Immeubles"></i>
                                <i class="fas fa-ruler-combined mx-2" title="Architectes"></i>
                            </div>
                            <a href="/travaux" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Outinnov Footer -->
    <footer class="outinnov-footer">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="https://www.outinnov.fr" target="_blank" class="footer-logo-link">
                            <img src="/uploads/illustrations/outinnov_logo.png" 
                                 alt="Outinnov" 
                                 class="footer-logo">
                        </a>
                        <div class="footer-text ms-3">
                            <small class="text-muted">Site développé par <strong>Outinnov</strong> • Solutions Web, Excel & Énergie</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <style>
        /* Light Blue Color Scheme */
        :root {
            --primary-blue: #3498db;
            --light-blue: #85c1e9;
            --very-light-blue: #ebf5fb;
            --bg-gradient: linear-gradient(135deg, #ebf5fb 0%, #d6eaf8 50%, #ffffff 100%);
            --text-dark: #2c3e50;
            --text-muted: #7f8c8d;
            --white: #ffffff;
            --shadow: 0 8px 32px rgba(52, 152, 219, 0.15);
            --hover-shadow: 0 12px 40px rgba(52, 152, 219, 0.25);
        }

        /* Global Styles */
        .companies-section {
            background: var(--bg-gradient);
            padding: 4rem 0;
        }
        
        .company-card {
            background: var(--white);
            border: 1px solid rgba(52, 152, 219, 0.1);
            border-radius: 16px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
        }
        
        .company-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--hover-shadow);
        }

        .company-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .company-description {
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .service-icons {
            font-size: 1.6rem;
            color: var(--primary-blue);
            margin-bottom: 2rem;
        }

        .service-icons i {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 50%;
            background: rgba(52, 152, 219, 0.1);
            margin: 0.25rem;
        }

        .service-icons i:hover {
            transform: scale(1.2);
            background: var(--light-blue);
            color: var(--white);
        }

        /* Button Styling */
        .btn-primary {
            background: var(--primary-blue);
            border: 2px solid var(--primary-blue);
            color: var(--white);
            padding: 0.75rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--light-blue);
            border-color: var(--light-blue);
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .companies-section {
                padding: 3rem 0;
            }
            
            .company-title {
                font-size: 1.8rem;
            }

            .service-icons {
                font-size: 1.4rem;
            }
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

        /* Clean Company Card Styling */
        .company-card {
            background: var(--white);
            border: 1px solid rgba(52, 152, 219, 0.1);
            border-radius: 16px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
            height: 100%;
        }
        
        .company-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--hover-shadow);
        }

        /* Company Logo Styling - Fixed for Mobile */
        .company-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            width: 100%;
            height: 160px;
        }

        .company-logo img {
            max-width: 160px;
            max-height: 160px;
            width: auto;
            height: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        /* Card Body Centering */
        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 2rem 1.5rem;
            height: 100%;
        }

        /* Mobile Responsive Fixes */
        @media (max-width: 768px) {
            .company-logo {
                height: 140px;
                margin-bottom: 1rem;
            }

            .company-logo img {
                max-width: 140px;
                max-height: 140px;
            }

            .card-body {
                padding: 1.5rem 1rem;
            }

            .company-title {
                font-size: 1.6rem;
                margin-bottom: 0.75rem;
            }

            .company-description {
                font-size: 1rem;
                margin-bottom: 1rem;
            }

            .service-icons {
                font-size: 1.2rem;
                margin-bottom: 1.5rem;
            }

            .service-icons i {
                padding: 0.4rem;
                margin: 0.2rem;
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

        /* Subtle Footer Styling */
        .outinnov-footer {
            background: transparent;
            border-top: 1px solid rgba(52, 152, 219, 0.1);
            padding: 1rem 0;
            margin-top: 0;
        }

        .footer-logo {
            height: 28px;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .footer-logo-link:hover .footer-logo {
            opacity: 1;
        }

        .footer-text {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-left: 0.75rem;
        }

        .footer-text strong {
            color: var(--primary-blue);
            font-weight: 500;
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