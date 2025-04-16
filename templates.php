<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select Resume Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Inline styles for quick enhancements */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding-top: 70px; /* Ensure content starts after navbar */
            background: linear-gradient(135deg, rgb(80, 194, 220), #2193b0);
            color: #fff;
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

        .container h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
            font-family: 'Arial', sans-serif;
            color:rgba(5, 55, 71, 0.79)
        }

        .template-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            height: 350px; /* Uniform height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .template-card img {
            max-height: 190px; /* Ensure images fit within the card */
            margin-bottom: 10px;
        }

        .template-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: rgba(19, 62, 76, 0.8);
            border: none;
            padding: 0.8rem 2rem;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: rgba(33, 55, 63, 0.8);
            transform: scale(1.05);
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
            .template-card {
                margin-bottom: 1rem;
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
    
   
    <div class="container mt-5">
        <h2 class="text-center">Select a Resume Template</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="template-card" onclick="selectTemplate('template1')">
                    <img src="assets/template1.png" alt="Template 1" class="img-fluid">
                    <p>Basic Professional</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="template-card" onclick="selectTemplate('template2')">
                    <img src="assets/template2.png" alt="Template 2" class="img-fluid">
                    <p>Creative with Skills</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="template-card" onclick="selectTemplate('template3')">
                    <img src="assets/template3.jpg" alt="Template 3" class="img-fluid">
                    <p>Academic/Research</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="template-card" onclick="selectTemplate('template1')">
                    <img src="assets/template1.png" alt="Template 1" class="img-fluid">
                    <p>Basic Professional</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="template-card" onclick="selectTemplate('template2')">
                    <img src="assets/template2.png" alt="Template 2" class="img-fluid">
                    <p>Creative with Skills</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="template-card" onclick="selectTemplate('template3')">
                    <img src="assets/template3.jpg" alt="Template 3" class="img-fluid">
                    <p>Academic/Research</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2023 Resume Builder. All rights reserved.</p>
    </footer>
    <script>
    function selectTemplate(template) {
        localStorage.setItem("selectedTemplate", template);
        console.log("Selected template:", template); // Debug: Confirm template selection
        window.location.href = "builder.php";
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>