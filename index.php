<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Inline styles for quick enhancements */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, rgb(80, 194, 220), #2193b0);
            color: #fff;
            overflow-x: hidden; /* Prevent horizontal scroll due to animations */
        }

        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: none; /* Disable all animations for navbar */
            opacity: 1; /* Ensure full visibility */
            background: rgba(19, 62, 76, 0.8); /* Light blue with transparency */
        }

        .navbar-brand img {
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .container {
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        .quote {
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 1rem;
        }

        .quote-subtext {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #f0f0f0;
        }

        .btn-primary {
            background-color:rgba(19, 62, 76, 0.8); 
            border: none;
            padding: 0.8rem 2rem;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color:rgba(33, 55, 63, 0.8); ;
            transform: scale(1.05);
        }

        .floating-icons {
            position: absolute;
            z-index: 0;
            opacity: 0.2;
            animation: float 6s ease-in-out infinite;
        }

        .icon-1 {
            top: 10%;
            left: 15%;
            width: 100px;
            height: 100px;
            background: url('assets/icon1.png') no-repeat center/contain;
        }

        .icon-2 {
            top: 50%;
            left: 70%;
            width: 120px;
            height: 120px;
            background: url('assets/icon2.png') no-repeat center/contain;
            animation-delay: 2s;
        }

        .icon-3 {
            top: 80%;
            left: 30%;
            width: 80px;
            height: 80px;
            background: url('assets/icon3.png') no-repeat center/contain;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .quote {
                font-size: 1.5rem;
            }

            .quote-subtext {
                font-size: 1rem;
            }

            .btn-primary {
                font-size: 1rem;
                padding: 0.6rem 1.5rem;
            }

            .navbar-brand img {
                width: 30px;
                height: 30px;
            }

            .container {
                padding: 1rem;
            }
        }

        @media (max-width: 576px) {
            .quote {
                font-size: 1.2rem;
            }

            .quote-subtext {
                font-size: 0.9rem;
            }

            .btn-primary {
                font-size: 0.9rem;
                padding: 0.5rem 1.2rem;
            }

            .navbar-brand {
                font-size: 1rem;
            }

            .container {
                padding: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Floating Icons -->
    <div class="floating-icons icon-1"></div>
    <div class="floating-icons icon-2"></div>
    <div class="floating-icons icon-3"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="assets/logo.png" alt="Logo" width="40" height="40" class="me-2">
                <span>Resume Builder</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Page Content -->
    <div class="container text-center d-flex flex-column align-items-center justify-content-center vh-100" style="margin-top: 56px;">
        <h2 class="quote">"Your resume is your first impression. Make it count!"</h2>
        <p class="quote-subtext">Create a stunning resume with ease and stand out from the crowd.</p>
        <button class="btn btn-lg btn-primary mt-3" onclick="location.href='templates.php'">Create Resume</button>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2023 Resume Builder. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</body>

</html>