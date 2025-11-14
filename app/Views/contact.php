<?= $this->extend('layouts/main.php');?>
<?= $this->section('content'); ?>
    <!-- Contact Section -->
    <div class="container-fluid py-5">  <!-- Changed from container to container-fluid -->
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">  <!-- Changed from col-lg-8 to col-lg-10 -->
                <h2 class="h3 fw-bold animate__animated animate__fadeInDown"> Nous sommes à votre écoute </h2>    
                
                <!-- Contact Options -->
                <div class="d-flex flex-column gap-4 mb-5">
                    <!-- Email Card -->
                    <div class="card border-0 shadow-sm animate__animated animate__fadeInUp" style="--animate-delay: 0.2s">
                        <div class="card-body p-5">  <!-- Increased padding from p-4 to p-5 -->
                            <i class="fas fa-envelope text-primary mb-3" style="font-size: 3rem;"></i>  <!-- Increased icon size -->
                            <h4 class="card-title mb-3 fs-3">Email</h4>  <!-- Increased title size -->
                            <a href="mailto:contact@nanterre-solutions.fr" class="text-decoration-none">
                                <p class="card-text text-muted fs-4">contact@nanterre-solutions.fr</p>  <!-- Increased text size -->
                            </a>
                        </div>
                    </div>
                    
                </div>

                <!-- Local Cooperation Section -->
                <div class="local-cooperation mt-5 animate__animated animate__fadeIn" style="--animate-delay: 0.4s">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6">
                                <div class="card-body p-5">
                                    <h3 class="h4 mb-4">Notre quartier général local</h3>
                                    <p class="text-muted mb-4">
                                        Notre équipe travaille sur une base de coopération locale à Nanterre. Nous nous réunissons 
                                        régulièrement au restaurant Le Cadre, un lieu convivial qui est devenu notre point de rencontre 
                                        pour les discussions professionnelles.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative h-100" style="min-height: 300px;">
                                    <img src="/uploads/illustrations/quartier-general.png" 
                                         alt="Le Cadre - Notre lieu de rencontre" 
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
        .local-cooperation .card {
            border-radius: 16px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .local-cooperation .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .local-cooperation img {
            border-radius: 0 16px 16px 0;
            object-position: center;
        }

        @media (max-width: 768px) {
            .local-cooperation img {
                border-radius: 0 0 16px 16px;
            }
            
            .local-cooperation .position-relative {
                min-height: 200px;
            }
        }
    </style>
<?= $this->endSection('content'); ?>