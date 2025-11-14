<!DOCTYPE html>
<html lang="<?= $locale ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <title><?= "Nanterre-Solutions à votre service" ?></title>
        <style>
            :root {
                --bg-light: #ffffff;
                --bg-white: #ffffff;
                --bg-subtle: #f8f9fa;
                --text-dark: #2d3748;
                --text-muted: #718096;
                --accent: #2d5a27;
                --accent-light: #4a9142;
                --border-color: #edf2f7;
                --header-height: 70px;
            }

            body {
                background: var(--bg-light);
                color: var(--text-dark);
                line-height: 1.6;
                padding-top: var(--header-height);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
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
                background: var(--bg-white);
                border: 1px solid var(--border-color);
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.04);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .card:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0,0,0,0.08);
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
                background: var(--bg-white);
                border-bottom: 1px solid var(--border-color);
                padding: 0.75rem 0;
                box-shadow: 0 1px 3px rgba(0,0,0,0.04);
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
                color: var(--text-dark);
                font-size: 1.2rem;
                font-weight: 600;
            }

            .navbar-light .navbar-toggler {
                border: none;
                padding: 0.5rem;
            }

            .navbar-collapse {
                background: var(--bg-white);
            }

            .navbar-light .navbar-nav .nav-link {
                color: var(--text-dark);
                padding: 0.5rem 1rem;
                font-weight: 500;
                transition: color 0.2s ease;
            }

            .navbar-light .navbar-nav .nav-link:hover {
                color: var(--accent);
            }

            /* Buttons */
            .btn-primary {
                background-color: var(--accent);
                border-color: var(--accent);
                padding: 0.5rem 1.5rem;
                font-weight: 500;
                transition: all 0.2s ease;
            }

            .btn-primary:hover {
                background-color: var(--accent-light);
                border-color: var(--accent-light);
                transform: translateY(-1px);
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }

            /* Language selector */
            #languages .btn {
                background: var(--bg-white);
                border: 1px solid var(--border-color);
                color: var(--text-dark);
            }

            /* Text utility classes */
            .text-muted {
                color: #6c757d !important;
                opacity: 1;
            }
            
            .text-secondary {
                color: #95a5a6 !important;
                opacity: 1;
            }

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
            }
        </style>
    </head>
    <body>
        <header class="fixed-top">
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="container-fluid px-4">
                    <a class="navbar-brand d-flex align-items-center" href=<?= "/" ?>>
                        <img src="/uploads/illustrations/logo-NS.jpg" 
                             alt="NS"
                             title="Nanterre-Solutions"
                             class="navbar-logo">
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