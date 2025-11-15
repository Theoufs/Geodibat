<!DOCTYPE html>
<html lang="<?= $locale ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <title><?= "Geodibat - Géomètre et travaux" ?></title>
        <style>
            /* Light Blue Color Scheme for All Pages */
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
                --border-color: rgba(52, 152, 219, 0.2);
                --header-height: 70px;
            }

            body {
                background: var(--bg-gradient);
                color: var(--text-dark);
                line-height: 1.6;
                padding-top: var(--header-height);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            }

            /* Typography */
            h1, h2, h3, h4, h5, h6 {
                color: var(--text-dark);
                font-weight: 600;
                margin-bottom: 1rem;
                line-height: 1.3;
            }

            p {
                color: var(--text-dark);
                margin-bottom: 1rem;
                font-size: 1rem;
                line-height: 1.6;
            }

            /* Layout */
            .main-content {
                flex: 1;
                width: 100%;
                padding: 2rem 0;
            }

            .container-fluid {
                max-width: 1400px;
                margin: 0 auto;
            }

            /* Cards and content zones */
            .card {
                background: var(--white);
                border: 1px solid var(--border-color);
                border-radius: 16px;
                box-shadow: var(--shadow);
                transition: all 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: var(--hover-shadow);
            }

            /* Card content */
            .card-title {
                color: var(--text-dark);
                font-weight: 600;
            }

            .card-text {
                color: var(--text-muted);
            }

            /* Headings */
            .display-4 {
                color: var(--text-dark);
                font-weight: 700;
                margin-bottom: 1.5rem;
            }

            .lead {
                color: var(--text-muted);
                font-size: 1.2rem;
                font-weight: 400;
                line-height: 1.6;
            }

            /* Navigation */
            .navbar {
                background: var(--white);
                border-bottom: 2px solid var(--border-color);
                padding: 0.75rem 0;
                box-shadow: var(--shadow);
                height: var(--header-height);
            }

            .navbar-logo {
                height: 40px;
                width: auto;
                object-fit: contain;
                margin-right: 1rem;
            }

            .navbar-brand {
                display: flex;
                align-items: center;
                padding: 0;
                color: var(--text-dark);
                font-weight: 600;
                font-size: 1.25rem;
            }

            .brand-text {
                color: var(--primary-blue);
                font-size: 1.2rem;
                font-weight: 600;
            }

            .navbar-light .navbar-toggler {
                border: none;
                padding: 0.5rem;
            }

            .navbar-collapse {
                background: var(--white);
            }

            .navbar-light .navbar-nav .nav-link {
                color: var(--text-dark);
                padding: 0.5rem 1rem;
                font-weight: 500;
                transition: all 0.3s ease;
                border-radius: 20px;
            }

            .navbar-light .navbar-nav .nav-link:hover {
                color: var(--primary-blue);
                background: rgba(52, 152, 219, 0.1);
                transform: translateY(-1px);
            }

            /* Buttons */
            .btn-primary {
                background: var(--primary-blue);
                border: 2px solid var(--primary-blue);
                color: var(--white);
                padding: 0.75rem 1.5rem;
                border-radius: 25px;
                font-weight: 600;
                transition: all 0.3s ease;
            }

            .btn-primary:hover {
                background: var(--light-blue);
                border-color: var(--light-blue);
                transform: translateY(-2px);
                box-shadow: var(--shadow);
            }

            .btn-secondary {
                background: transparent;
                border: 2px solid var(--primary-blue);
                color: var(--primary-blue);
                padding: 0.75rem 1.5rem;
                border-radius: 25px;
                font-weight: 600;
                transition: all 0.3s ease;
            }

            .btn-secondary:hover {
                background: var(--primary-blue);
                color: var(--white);
                transform: translateY(-2px);
            }

            /* Language selector */
            #languages .btn {
                background: var(--white);
                border: 1px solid var(--border-color);
                color: var(--text-dark);
                border-radius: 20px;
                transition: all 0.3s ease;
            }

            #languages .btn:hover {
                border-color: var(--primary-blue);
                color: var(--primary-blue);
            }

            /* Content sections */
            .section {
                padding: 4rem 0;
            }

            .section-light {
                background: var(--white);
            }

            .section-gradient {
                background: var(--bg-gradient);
            }

            /* Text utility classes */
            .text-muted {
                color: var(--text-muted) !important;
                opacity: 1;
            }
            
            .text-secondary {
                color: var(--text-muted) !important;
                opacity: 1;
            }

            .text-primary {
                color: var(--primary-blue) !important;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .container-fluid {
                    padding-left: 1rem;
                    padding-right: 1rem;
                }

                .navbar {
                    padding: 0.5rem 0;
                }

                .navbar-collapse {
                    padding: 1rem;
                    border-top: 1px solid var(--border-color);
                    margin-top: 0.5rem;
                }

                .brand-text {
                    font-size: 1.1rem;
                }
                
                #languages {
                    margin: 1rem 0;
                    text-align: center;
                }

                .main-content {
                    padding: 1rem 0;
                }

                .section {
                    padding: 3rem 0;
                }
            }
        </style>
    </head>
    <body>
        <header class="fixed-top">
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="container-fluid px-4">
                    <a class="navbar-brand d-flex align-items-center" href=<?= "/" ?>>
                        <span class="brand-text">
                            <i class="fas fa-home"></i>
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?= view_cell('App\Libraries\Home::navigation') ?>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main-content">
            <?= $this->renderSection('content');?>
        </main>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>