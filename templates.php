<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select Resume Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Resume Builder</a>
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
    </div>

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