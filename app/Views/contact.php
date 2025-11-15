<?= $this->extend('layouts/main.php');?>
<?= $this->section('content'); ?>
    <!-- Contact Section -->
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                
                <!-- Contact Information Cards -->
                <div class="row g-4 mb-5">
                    <!-- Email Card -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm animate__animated animate__fadeInUp" style="--animate-delay: 0.1s">
                            <div class="card-body p-4">
                                <i class="fas fa-envelope text-primary mb-3" style="font-size: 2.5rem;"></i>
                                <h4 class="card-title mb-3">Email</h4>
                                <a href="mailto:geodibat@laposte.net" class="text-decoration-none mb-2 d-block">
                                    <p class="card-text text-muted">geodibat@laposte.net</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm animate__animated animate__fadeInUp" style="--animate-delay: 0.2s">
                            <div class="card-body p-4">
                                <i class="fas fa-phone text-primary mb-3" style="font-size: 2.5rem;"></i>
                                <h4 class="card-title mb-3">Téléphone</h4>
                                <a href="tel:0675100567" class="text-decoration-none">
                                    <p class="card-text text-muted">06 75 10 05 67</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm animate__animated animate__fadeInUp" style="--animate-delay: 0.3s">
                            <div class="card-body p-4">
                                <i class="fas fa-map-marker-alt text-primary mb-3" style="font-size: 2.5rem;"></i>
                                <h4 class="card-title mb-3">Adresse</h4>
                                <p class="card-text text-muted">
                                    14 rue Alibert 75010 PARIS<br>
                                    BAR E ESC E 1ER ETAGE DROITE
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Canal Saint Martin Section -->
                <div class="canal-section mt-5 animate__animated animate__fadeIn" style="--animate-delay: 0.4s">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6">
                                <div class="card-body p-5">
                                    <h3 class="h4 mb-4">Notre quartier parisien</h3>
                                    <p class="text-muted mb-4">
                                        Basés dans le 10ème arrondissement de Paris, nous sommes situés près du Canal Saint-Martin, 
                                        dans un quartier dynamique et accessible pour servir nos clients dans la région parisienne.
                                    </p>
                                    <div class="d-flex align-items-center text-muted">
                                        <i class="fas fa-train me-2"></i>
                                        <small>Métro 11 - Goncourt</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative h-100" style="min-height: 350px;">
                                    <img src="/uploads/illustrations/quartier-general.png" 
                                         alt="Canal Saint-Martin" 
                                         class="w-100 h-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .canal-section .card {
            border-radius: 16px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .canal-section .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(52, 152, 219, 0.15);
        }

        .canal-section img {
            border-radius: 0 16px 16px 0;
            object-position: center;
        }

        /* Contact cards styling */
        .card {
            border-radius: 16px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(52, 152, 219, 0.15);
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .text-primary {
            color: var(--primary-blue, #3498db) !important;
        }

        .card-text a {
            color: var(--text-muted, #7f8c8d);
            transition: color 0.3s ease;
        }

        .card-text a:hover {
            color: var(--primary-blue, #3498db);
        }

        @media (max-width: 768px) {
            .canal-section img {
                border-radius: 0 0 16px 16px;
            }
            
            .canal-section .position-relative {
                min-height: 250px;
            }

            .card-body {
                padding: 2rem 1rem;
            }
        }
    </style>
<?= $this->endSection('content'); ?>