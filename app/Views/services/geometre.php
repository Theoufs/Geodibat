<?= $this->extend('layouts/main.php');?>
<?= $this->section('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Géomètre Expert</h1>
                    <p class="hero-description">
                        Expert en copropriété depuis 1997, nous réalisons des expertises privées et judiciaires 
                        avec une approche juridique et technique complète pour vos projets immobiliers.
                    </p>
                    <div class="hero-stats">
                        <div class="stat-badge">
                            <i class="fas fa-award"></i>
                            <span>28 ans d'expérience</span>
                        </div>
                        <div class="stat-badge">
                            <i class="fas fa-balance-scale"></i>
                            <span>Expertises agréées</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/uploads/illustrations/geometre.jpg" 
                         alt="Services Géomètre Expert" 
                         class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Nos Services</h2>
            
            <div class="row g-4">
                <!-- Copropriété -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3>Copropriété</h3>
                        <p>Création, division, réunion et modification de règlements. État descriptif de division, grilles de charges, surélévation.</p>
                    </div>
                </div>

                <!-- Plans & Relevés -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <h3>Plans & Relevés</h3>
                        <p>Plans d'état des lieux, relevés architecturaux, plans de réaménagement. Du 1/100ème au 1/50ème selon besoins.</p>
                    </div>
                </div>

                <!-- Recherches -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Recherches</h3>
                        <p>Recherches historiques, archives cadastrales, évolution du bâti. Documentation complète pour vos projets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Showcase -->
    <section class="projects-section">
        <div class="container">
            <h2 class="section-title text-center mb-4">Projets Réalisés</h2>
            <p class="text-center text-muted mb-5">Exemples de nos interventions</p>
            
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="/uploads/illustrations/services/plan-100.jpg" alt="Plan 1/100ème" class="project-img">
                        <div class="project-content">
                            <h4>Plan 1/100<sup>ème</sup></h4>
                            <p>Relevé architectural complet - Immeuble Haussmannien 1889</p>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="/uploads/illustrations/services/plan-50.jpg" alt="Plan 1/50ème" class="project-img">
                        <div class="project-content">
                            <h4>Plan 1/50<sup>ème</sup></h4>
                            <p>Projet d'aménagement détaillé avec maquettisme 3D</p>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="/uploads/illustrations/services/recherches.jpg" alt="Recherches historiques" class="project-img">
                        <div class="project-content">
                            <h4>Recherches Historiques</h4>
                            <p>Archives cadastrales et évolution du patrimoine</p>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-lg-6">
                    <div class="project-card horizontal">
                        <img src="/uploads/illustrations/services/coproprietetertiaire.jpg" alt="Copropriété tertiaire" class="project-img">
                        <div class="project-content">
                            <h4>Copropriété Tertiaire</h4>
                            <p>Création de copropriété pour immeuble à usage mixte avec bureaux et commerces</p>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-lg-6">
                    <div class="project-card horizontal">
                        <img src="/uploads/illustrations/services/surelevation.jpg" alt="Surélévation" class="project-img">
                        <div class="project-content">
                            <h4>Surélévation</h4>
                            <p>Modification de copropriété pour extension avec création de nouveaux lots</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2>Besoin d'une expertise géomètre ?</h2>
                    <p class="lead">Contactez-nous pour discuter de votre projet. Intervention sur Paris et Île-de-France.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="/contact" class="btn btn-light btn-lg">
                        <i class="fas fa-envelope me-2"></i>
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--very-light-blue) 0%, #fff 100%);
            padding: 60px 0 40px;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 1.25rem;
        }

        .hero-description {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        .hero-stats {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .stat-badge {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.25rem;
            background: white;
            border-radius: 8px;
            border-left: 3px solid var(--primary-blue);
            box-shadow: 0 2px 8px rgba(52, 152, 219, 0.1);
        }

        .stat-badge i {
            color: var(--primary-blue);
            font-size: 1.25rem;
        }

        /* Services Section */
        .services-section {
            padding: 40px 0;
            background: #f8f9fa;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-blue);
        }

        .service-card {
            background: white;
            border-radius: 12px;
            padding: 1.75rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 2px solid var(--very-light-blue);
            box-shadow: 0 2px 8px rgba(52, 152, 219, 0.08);
        }

        .service-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.15);
            border-color: var(--light-blue);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--light-blue), var(--primary-blue));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .service-icon i {
            font-size: 1.75rem;
            color: white;
        }

        .service-card h3 {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.75rem;
        }

        .service-card p {
            color: #555;
            line-height: 1.6;
            margin: 0;
            font-size: 0.95rem;
        }

        /* Projects Section */
        .projects-section {
            padding: 40px 0;
        }

        .project-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
        }

        .project-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.15);
        }

        .project-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .project-card.horizontal .project-img {
            height: 180px;
        }

        .project-content {
            padding: 1.25rem;
        }

        .project-content h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }

        .project-content p {
            color: #666;
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* CTA Section */
        .cta-section {
            padding: 40px 0;
            background: linear-gradient(135deg, var(--primary-blue), var(--light-blue));
            color: white;
        }

        .cta-section h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }

        .cta-section .lead {
            font-size: 1.1rem;
            opacity: 0.95;
            margin: 0;
        }

        .btn-light {
            background: white;
            color: var(--primary-blue);
            font-weight: 600;
            padding: 0.875rem 2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-light:hover {
            background: var(--very-light-blue);
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                padding: 40px 0 30px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .services-section,
            .projects-section,
            .cta-section {
                padding: 30px 0;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .stat-badge {
                font-size: 0.9rem;
            }

            .project-img {
                height: 180px;
            }

            .cta-section h2 {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            .cta-section .btn-light {
                margin-top: 1rem;
            }
        }
    </style>
<?= $this->endSection('content'); ?>
