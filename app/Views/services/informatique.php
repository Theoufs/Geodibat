<?= $this->extend('layouts/main.php');?>
<?= $this->section('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Informatique</h1>
                    <p class="hero-description">
                        Solutions informatiques complètes : conseil, dépannage et maintenance.
                        Expertise professionnelle pour tous vos besoins en informatique.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="/uploads/illustrations/services/informatique.jpg" 
                             alt="Services informatiques professionnels" 
                             class="img-fluid rounded-lg shadow">
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Conseil Card -->
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3>Conseil</h3>
                        <ul class="service-list">
                            <li>Audit informatique</li>
                            <li>Solutions personnalisées</li>
                            <li>Optimisation système</li>
                            <li>Recommandations matériel</li>
                        </ul>
                    </div>
                </div>

                <!-- Dépannage Card -->
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h3>Dépannage</h3>
                        <ul class="service-list">
                            <li>Résolution de pannes</li>
                            <li>Support à distance</li>
                            <li>Intervention sur site</li>
                            <li>Maintenance préventive</li>
                        </ul>
                    </div>
                </div>

                <!-- Récupération de données Card -->
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3>Récupération de données</h3>
                        <ul class="service-list">
                            <li>Récupération de fichiers</li>
                            <li>Sauvegarde sécurisée</li>
                            <li>Réparation de disques</li>
                            <li>Protection des données</li>
                        </ul>
                    </div>
                </div>

                <!-- Matériel reconditionné Card -->
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h3>Matériel reconditionné</h3>
                        <ul class="service-list">
                            <li>Ordinateurs garantis</li>
                            <li>Tests qualité</li>
                            <li>Installation logiciels</li>
                            <li>Service après-vente</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Partner Section -->
    <section class="quality-section partner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="quality-content">
                        <h2>Partenaire</h2>
                        <p>Expert en solutions innovantes, accompagne vos projets avec une expertise pointue en développement et conseil.</p>
                        <div class="quality-features">
                            <div class="feature-item">
                                <i class="fas fa-laptop-code"></i>
                                <span>Développement web sur mesure</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-table"></i>
                                <span>Expertise Excel avancée</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-lightbulb"></i>
                                <span>Prototypage et innovation</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-tools"></i>
                                <span>Outils et automatisation</span>
                            </div>
                        </div>
                        <a href="https://www.outinnov.fr" class="btn btn-outline-accent">
                            Découvrir Outinnov
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="quality-image text-center d-flex align-items-center justify-content-center" style="min-height: 200px;">
                        <a href="https://www.outinnov.fr">
                            <img src="/uploads/illustrations/outinnov_logo.png" 
                             alt="Outinnov Logo" 
                             class="img-fluid"
                             style="max-width: 250px;">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Hero Section */
        .hero-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, var(--bg-subtle) 0%, var(--bg-white) 100%);
        }

        .hero-title {
            font-size: 2.75rem;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .hero-description {
            font-size: 1.2rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .hero-image img {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Services Grid */
        .services-grid {
            padding: 4rem 0;
            background: var(--bg-white);
        }

        .service-card {
            background: var(--bg-white);
            border-radius: 16px;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .service-icon {
            width: 64px;
            height: 64px;
            background: var(--bg-subtle);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .service-icon i {
            font-size: 1.75rem;
            color: var(--accent);
        }

        .service-card h3 {
            color: var(--text-dark);
            font-size: 1.25rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            color: var(--text-muted);
            margin-bottom: 0.75rem;
            padding-left: 1.5rem;
            position: relative;
        }

        .service-list li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: var(--accent);
        }

        /* Featured Project */
        .featured-project {
            padding: 4rem 0;
            background: linear-gradient(135deg, var(--bg-subtle) 0%, var(--bg-white) 100%);
        }

        .project-content {
            padding: 2rem;
        }

        .project-content h2 {
            color: var(--text-dark);
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .project-content .lead {
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .feature-list li {
            color: var(--text-muted);
            margin-bottom: 1rem;
            padding-left: 1.75rem;
            position: relative;
        }

        .feature-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
        }

        .mb-5 {
            margin-bottom: 3rem !important;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 3rem 0;
            }

            .hero-title {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            .hero-description {
                font-size: 1.1rem;
            }

            .hero-image {
                margin-top: 2rem;
            }

            .service-card {
                padding: 1.5rem;
            }

            .project-content {
                padding: 1.5rem;
                margin-top: 2rem;
            }
        }
    </style>
<?= $this->endSection('content'); ?>