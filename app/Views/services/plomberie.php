<?= $this->extend('layouts/main.php');?>
<?= $this->section('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Plomberie & Chauffage</h1>
                    <p class="hero-description">
                        Solutions complètes pour votre confort thermique et sanitaire. 
                        De l'installation à la maintenance, en passant par la rénovation de vos systèmes de plomberie et de chauffage.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="/uploads/illustrations/services/plomberie.jpg" 
                             alt="Installation sanitaire moderne" 
                             class="img-fluid rounded-lg shadow">
                    </div>
                </div>
            </div>
    
        <div class="row g-4">
            <!-- Plumbing Installation Card -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-faucet"></i>
                    </div>
                    <h3>Installation Sanitaire</h3>
                    <ul class="service-list">
                        <li>Design et conception sur mesure</li>
                        <li>Sanitaires, robinetterie, chauffe-eau</li>
                        <li>Mise aux normes PMR</li>
                        <li>Rénovation complète</li>
                    </ul>
                </div>
            </div>

            <!-- Heating Systems Card -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Systèmes de Chauffage</h3>
                    <ul class="service-list">
                        <li>Installation chaudière</li>
                        <li>Chauffage au sol</li>
                        <li>Radiateurs dernière génération</li>
                        <li>Solutions économes en énergie</li>
                    </ul>
                </div>
            </div>


            <!-- Maintenance Card -->
            <div class="col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Dépannage & Maintenance</h3>
                    <ul class="service-list">
                        <li>Intervention locales</li>
                        <li>Détection et réparation fuites</li>
                        <li>Entretien chaudière</li>
                    </ul>
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