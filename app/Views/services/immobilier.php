<?= $this->extend('layouts/main.php');?>
<?= $this->section('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Immobilier</h1>
                    <p class="hero-description">
                        Expertise complète en immobilier : achat, vente, estimation et conseil en rénovation.
                        Expertise complète en immobilier : achat, vente, estimation et conseil en rénovation.
                        Des solutions personnalisées pour tous vos projets immobiliers.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="/uploads/illustrations/services/immobilier.jpg" 
                             alt="Services immobiliers professionnels" 
                             class="img-fluid rounded-lg shadow">
                    </div>
                </div>
            </div>

            <div class="row g-4">
            <!-- Conseil Immobilier Card -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Conseil Immobilier</h3>
                    <ul class="service-list">
                        <li>Analyse de marché détaillée</li>
                        <li>Stratégie d'investissement</li>
                        <li>Optimisation fiscale</li>
                        <li>Accompagnement personnalisé</li>
                    </ul>
                </div>
            </div>

            <!-- Estimation Card -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Estimation</h3>
                    <ul class="service-list">
                        <li>Évaluation précise du bien</li>
                        <li>Analyse comparative du marché</li>
                        <li>Rapport d'estimation détaillé</li>
                        <li>Projection de valorisation</li>
                    </ul>
                </div>
            </div>

            <!-- Transaction Card -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Achat & Vente</h3>
                    <ul class="service-list">
                        <li>Recherche personnalisée</li>
                        <li>Négociation optimale</li>
                        <li>Gestion administrative</li>
                        <li>Suivi des transactions</li>
                    </ul>
                </div>
            </div>

            <!-- Rénovation Card -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Conseil en Rénovation</h3>
                    <ul class="service-list">
                        <li>Étude de faisabilité</li>
                        <li>Estimation des travaux</li>
                        <li>Coordination des artisans</li>
                        <li>Suivi de chantier</li>
                    </ul>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="quality-content">
                        <h2>Jaffimmo</h2>
                        <p>Partenaire pour les affaires immobilières locales.</p>
                        <div class="quality-features">
                            <div class="feature-item">
                                <i class="fas fa-house-user"></i>
                                <span>Achat & Vente</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-chart-line"></i>
                                <span>Estimations & Plans</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-pencil-ruler"></i>
                                <span>Aménagement</span>
                            </div>
                        </div>
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