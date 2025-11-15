<?= $this->extend('layouts/main.php');?>
<?= $this->section('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Division Travaux</h1>
                    <p class="hero-description">
                        De l'étude de faisabilité à la réalisation complète, nous coordonnons et encadrons 
                        tous vos projets de rénovation et de construction dans le bâtiment.
                    </p>
                    <div class="hero-stats">
                        <div class="stat-badge">
                            <i class="fas fa-hard-hat"></i>
                            <span>Rénovation complète</span>
                        </div>
                        <div class="stat-badge">
                            <i class="fas fa-tools"></i>
                            <span>Suivi de chantier</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/uploads/illustrations/travaux.jpg" 
                         alt="Division Travaux" 
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
                <!-- Rénovation -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Rénovation</h3>
                        <p>Logements privés et publics, appartements, maisons. Carrelage, parquet, peinture, plomberie, électricité. Mise aux normes.</p>
                    </div>
                </div>

                <!-- Sous-sols & Caves -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h3>Sous-sols & Caves</h3>
                        <p>Rénovation de caves voûtées, assainissement, isolation thermique. Aménagement d'espaces et mise en conformité.</p>
                    </div>
                </div>

                <!-- Coordination -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h3>Coordination</h3>
                        <p>Collaboration avec architectes, coordination artisans, suivi quotidien. Reportage photo et documentation complète.</p>
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
                        <img src="/uploads/illustrations/services/reportage-photo.jpg" alt="Reportage photographique" class="project-img">
                        <div class="project-content">
                            <h4>Reportage Photo</h4>
                            <p>Documentation complète avant travaux - Maison de pêcheur Normandie</p>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="/uploads/illustrations/services/renovation-loge.jpg" alt="Rénovation loge" class="project-img">
                        <div class="project-content">
                            <h4>Rénovation Loge</h4>
                            <p>Transformation complète avec plans 1/50ème et maquette 3D</p>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-lg-4">
                    <div class="project-card">
                        <img src="/uploads/illustrations/services/renovation-sous-sol.jpg" alt="Sous-sol voûté" class="project-img">
                        <div class="project-content">
                            <h4>Sous-sol Voûté</h4>
                            <p>Rénovation avec assistance architecte et suivi chantier</p>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-lg-12">
                    <div class="project-card featured">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="/uploads/illustrations/services/effondrement-rdc.jpg" alt="Rénovation suite effondrement" class="project-img-featured">
                            </div>
                            <div class="col-md-7">
                                <div class="project-content-featured">
                                    <h4>Rénovation Suite Effondrement</h4>
                                    <p class="mb-3">Mission d'expertise en collaboration avec la Mairie de Paris et Préfecture de Police. Intervention d'urgence comprenant réalisation de plans, inspection des lots, coordination des travaux et documentation photographique complète.</p>
                                    <div class="project-badges">
                                        <span class="badge bg-primary">Mairie de Paris</span>
                                        <span class="badge bg-primary">Préfecture</span>
                                        <span class="badge bg-primary">Urgence</span>
                                    </div>
                                </div>
                            </div>
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
                    <h2>Un projet de travaux ?</h2>
                    <p class="lead">De l'étude à la réalisation, nous vous accompagnons. Intervention sur Paris et Île-de-France.</p>
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

        .project-img-featured {
            width: 100%;
            height: 100%;
            min-height: 250px;
            object-fit: cover;
        }

        .project-content {
            padding: 1.25rem;
        }

        .project-content-featured {
            padding: 2rem;
        }

        .project-content h4,
        .project-content-featured h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }

        .project-content-featured h4 {
            font-size: 1.35rem;
        }

        .project-content p,
        .project-content-featured p {
            color: #666;
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .project-content-featured p {
            font-size: 1rem;
        }

        .project-badges {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .project-badges .badge {
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.5rem 1rem;
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

            .project-img,
            .project-img-featured {
                height: 180px;
                min-height: 180px;
            }

            .project-content-featured {
                padding: 1.5rem;
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
