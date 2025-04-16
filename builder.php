<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <style>
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


        
    .resume-container {
        max-width: 800px;
        margin: auto;
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h4 {
        font-size: 28px;
        margin-bottom: 5px;
        color: #333;
    }

    p {
        margin: 0;
        color: #555;
        font-size: 16px;
    }

    hr {
        margin: 20px 0;
        border: none;
        border-top: 1px solid #ccc;
    }

    div {
        margin-bottom: 20px;
    }

    strong {
        display: block;
        font-size: 18px;
        color: #222;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    ul {
        list-style-type: disc;
        padding-left: 20px;
        color: #444;
        font-size: 16px;
    }

    li {
        margin-bottom: 5px;
    }

    /* Container for buttons */
    #buttonContainer {
        display: flex;
        /* Align buttons in a row */
        justify-content: space-between;
        /* Distribute space between buttons */
        gap: 20px;
        /* Add space between buttons */
        margin-top: 20px;
        /* Add margin above the button container */
        align-items: center;
        /* Center the buttons vertically */
    }

    /* Style for each button */
    button {
        padding: 10px 20px;
        /* Add padding for better button size */
        font-size: 16px;
        /* Set font size */
        border: none;
        /* Remove default border */
        cursor: pointer;
        /* Change cursor to pointer on hover */
        border-radius: 5px;
        /* Round the corners */
        min-width: 150px;
        /* Ensure minimum width for each button */
    }

    /* Button specific styles */

    /* Download Resume button */
    #downloadButton {
        background-color: #007bff;
        /* Blue background */
        color: white;
        /* White text */
        transition: background-color 0.3s ease;
        /* Smooth transition for hover */
    }

    #downloadButton:hover {
        background-color: #0056b3;
        /* Darker blue on hover */
    }

    /* Generate QR button */
    #generateQRButton {
        background-color: #28a745;
        /* Green background */
        color: white;
        /* White text */
        transition: background-color 0.3s ease;
        /* Smooth transition for hover */
    }

    #generateQRButton:hover {
        background-color: #218838;
        /* Darker green on hover */
    }

    /* Check ATS button */
    #checkATSButton {
        background-color: #ffc107;
        /* Yellow background */
        color: black;
        /* Black text */
        transition: background-color 0.3s ease;
        /* Smooth transition for hover */
    }

    #checkATSButton:hover {
        background-color: #e0a800;
        /* Darker yellow on hover */
    }

    /* ATS Result section */
    #atsResult {
        margin-top: 20px;
        /* Add margin above ATS result */
        padding: 15px;
        border: 1px solid #ccc;
        background-color: #f8f9fa;
        border-radius: 5px;
    }

    #atsResult h3 {
        font-size: 18px;
        /* Set font size for the score */
        color: #333;
        /* Darker color for the score */
    }

    #atsResult ul {
        list-style-type: none;
        padding: 0;
    }

    #atsResult ul li {
        color: #d9534f;
        /* Red color for issues */
        margin-bottom: 5px;
        /* Add margin between issues */
    }

    .card {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 20px;
        margin-bottom: 20px;
    }

    .card h3 {
        font-size: 1.8rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }

    .card-body {
        padding: 15px;
    }

    .resume-preview {
        background-color: #f8f9fa;
        
        padding: 20px;
       
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

    <div class="container mt-4">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Enter Your Details</h3>
                        <form id="resume-form">
                            <!-- Dynamic form content will be loaded here -->
                        </form>
                    </div>
                </div>
            </div>

            <!-- Resume Preview Section -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Resume Preview</h3>
                        <div class="resume-preview" id="resume-preview">
                            <!-- Dynamic preview content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>


    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const selectedTemplate = localStorage.getItem("selectedTemplate");
        console.log("Retrieved template:", selectedTemplate); // Debug: Check template retrieval
        const formContainer = document.getElementById("form-container");
        const resumePreview = document.getElementById("resume-preview");
        console.log("Resume preview element:", resumePreview); // Debug: Check preview element
        let formHTML = "";
        let previewHTML = "";

        // Handle case where no template is selected
        if (!selectedTemplate) {
            console.warn("No template selected, using default");
        }

        switch (selectedTemplate) {
            case "template1": // Enhanced Professional Template
                formHTML = `
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" class="form-control">
                        <label for="email" class="form-label mt-3">Email</label>
                        <input type="email" id="email" class="form-control">
                        <label for="mobile" class="form-label mt-3">Mobile No</label>
                        <input type="text" id="mobile" class="form-control">
                        <label for="objective" class="form-label mt-3">Objective</label>
                        <textarea id="objective" class="form-control" rows="3"></textarea>
                        <label for="skills" class="form-label mt-3">skills</label>
                        <textarea id="skills" class="form-control" rows="3"></textarea>

                        <div id="education-section">
                            <label class="form-label mt-3">Education</label>
                            <div class="education-entry">
                                <textarea id="education-1" class="form-control education-field" rows="2" placeholder="Degree, Institution, Year"></textarea>
                            </div>
                            <button type="button" class="btn btn-secondary mt-2" id="add-education">Add Education</button>
                        </div>

                        <label for="achievements" class="form-label mt-3">Achievements</label>
                        <textarea id="achievements" class="form-control" rows="3" placeholder="e.g., Won 1st place in coding competition"></textarea>
                        <button type="button" class="btn btn-secondary mt-2" id="add-achievement">Achievements</button><br>
                        <label for="projects" class="form-label mt-3">Projects</label>
                        <textarea id="projects" class="form-control" rows="3" placeholder="e.g., Developed a web app using React"></textarea>
                        <button type="button" class="btn btn-secondary mt-2" id="add-project">Add Projects</button><br>
                        <label for="interests" class="form-label mt-3">Areas of Interest</label>
                        <textarea id="interests" class="form-control" rows="3" placeholder="e.g., Machine Learning, Web Development"></textarea>
                        <button type="button" class="btn btn-secondary mt-2" id="add-interests">Add Projects</button><br>
                        <label for="extracurricular" class="form-label mt-3">Extra Curricular Activities</label>
                        <textarea id="extracurricular" class="form-control" rows="3" placeholder="e.g., Member of debate club"></textarea>
                        <button type="button" class="btn btn-secondary mt-2" id="add-extracurricular">Add Projects</button><br>
                        <label for="certificates" class="form-label mt-3">Certificates</label>
                        <textarea id="certificates" class="form-control" rows="3" placeholder="e.g., Certified in Python from Coursera"></textarea>
                        <button type="button" class="btn btn-secondary mt-2" id="add-certificates">Add Projects</button><br>
                        <div id="buttonContainer">                       
                        <button type="button"  onclick="downloadResume()" id="downloadButton">Download Resume</button>
                        

                        <button id="generateQRButton" type="button" >Generate QR Code</button>
                       
                        
                        <!-- ATS Check Button -->
                        <button id="checkATSButton">Check ATS Friendliness</button>
                         </div>
                         <!-- Make sure this container is available for QR -->
                        <div id="qrcode" ></div>
                        <!-- ATS Result Display -->
                        <div id="atsResult" >
                            <h3 id="score"></h3>
                            <ul id="issues"></ul>
                        </div>



                    `;
                previewHTML = `
                        <h4 id="preview-name">Your Name</h4>
                        <p id="preview-email">Email</p>
                        <p id="preview-mobile">Mobile No</p>
                        <hr>
                        <div><strong>Skills</strong> <p id="preview-skills">Skills will appear here</p></div>
                        <div><strong>Objective</strong> <p id="preview-objective">Objective</p></div>
                        <hr>
                        <div><strong>Education</strong> <ul id="preview-education">
  <li id="preview-education-1">Education Details</li>
</ul>
</div>
                        <hr>
                        <div><strong>Achievements</strong><ul id="preview-achievements">
  <li id="preview-achievements-1">Your achievement goes here</li>
</ul></div>
                        <hr>
                        <div><strong>Projects</strong> <ul id="preview-projects">
  <li id="preview-projects-1">Your project goes here</li>
</ul>
</div>
                        <hr>
                        <div><strong>Areas of Interest</strong> <ul id="preview-interests">
  <li id="preview-interests-1">Your certificate goes here</li>
</ul>
</div>
                        <hr>
                        <div><strong>Extra Curricular Activities</strong><ul id="preview-extracurricular"
  <li id="preview-extracurricular-1">Your Extra curricular goes here</li>
</ul>
</div>
                        <hr>
                        <div><strong>Certificates</strong><ul id="preview-certificates">
  <li id="preview-certificates-1">Your certificate goes here</li>
</ul>
</div>
                    `;
                break;

            case "template2": // Creative with Skills
                formHTML = `
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" id="name" class="form-control" value="">
                    <label for="title" class="form-label mt-3">Professional Title</label>
                    <input type="text" id="title" class="form-control" value="">
                    

                    <h5 class="mt-4">Contact</h5>
                    <label for="phone" class="form-label mt-2">Phone</label>
                    <input type="text" id="phone" class="form-control" value="">
                    <label for="email" class="form-label mt-2">Email</label>
                    <input type="email" id="email" class="form-control" value="">
                    <label for="address" class="form-label mt-2">Address</label>
                    <input type="text" id="address" class="form-control" value="">
                    <label for="website" class="form-label mt-2">Website</label>
                    <input type="url" id="website" class="form-control" value="">

                    <h5 class="mt-4">Profile</h5>
                    <label for="profile" class="form-label mt-2">Summary</label>
                    <textarea id="profile" class="form-control" rows="4"></textarea>

                    <h5 class="mt-4">Education</h5>
                    <div id="education-section">
                        <div class="education-entry">
                            <label for="education-1" class="form-label mt-2">Degree, Institution, Years</label>
                            <textarea id="education-1" class="form-control education-field" rows="2" placeholder="e.g., Master of Business Management, Wardiere University, 2029 - 2030"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary mt-2" id="add-education">Add Education</button>
                    </div>

                    

                    <h5 class="mt-4">Skills</h5>
                    <label for="skills" class="form-label mt-2">List your skills (comma-separated)</label>
                    <input type="text" id="skills" class="form-control" value="" placeholder="e.g., Project Management, Public Relations">

                    <h5 class="mt-4">Languages</h5>
                    <label for="languages" class="form-label mt-2">List your languages and proficiency (comma-separated)</label>
                    <textarea id="languages" class="form-control" rows="2" placeholder="e.g., English (Fluent), French (Fluent)"></textarea>

                    <h5 class="mt-4">Extra Curricular Activities</h5>
                    <label for="extracurricular" class="form-label mt-2">List your extra curricular activities</label>
                    <textarea id="extracurricular" class="form-control" rows="2"></textarea>

                    

                    <button type="button" class="btn btn-primary mt-3" onclick="downloadResume()">Download Resume</button>
                `;

                previewHTML = `
                    <div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 20px; max-width: 700px; margin: 0 auto; color: #333;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div>
                                <h1 id="preview-name" style="margin: 0;">Your Name</h1>
                                <p id="preview-title" style="margin: 5px 0; color: #555;">Professional Title</p>
                            </div>
                            
                        </div>
                        <hr style="border: 1px solid #007bff; margin: 10px 0;">
                        <div style="background-color: #f0f0f0; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                            <h5 style="margin-top: 0; color: #007bff;">Contact</h5>
                            <p><strong>Phone:</strong> <span id="preview-phone"></span></p>
                            <p><strong>Email:</strong> <span id="preview-email"></span></p>
                            <p><strong>Address:</strong> <span id="preview-address"></span></p>
                            <p><strong>Website:</strong> <a href="#" id="preview-website" target="_blank"></a></p>
                        </div>
                        <hr style="border: 1px solid #007bff; margin: 10px 0;">
                        <div style="margin-bottom: 20px;">
                            <h5 style="color: #007bff;">Profile</h5>
                            <p id="preview-profile" style="white-space: pre-line;">Professional Summary</p>
                        </div>
                        <hr style="border: 1px solid #007bff; margin: 10px 0;">
                        <div style="margin-bottom: 20px;">
                            <h5 style="color: #007bff;">Education</h5>
                           
                            <ul id="preview-education">
  <li id="preview-education-1">Education Details</li>
</ul>

                            
                        </div>
                        <hr style="border: 1px solid #007bff; margin: 10px 0;">

                        

                        <div style="margin-bottom: 20px;">
                            <h5 style="color: #007bff;">Skills</h5>
                            <p id="preview-skills">Skills will appear here</p>
                        </div>
                        <hr style="border: 1px solid #007bff; margin: 10px 0;">
                        <div style="margin-bottom: 20px;">
                            <h5 style="color: #007bff;">Languages</h5>
                            <p id="preview-languages" style="white-space: pre-line;">Languages will appear here</p>
                        </div>
                        <hr style="border: 1px solid #007bff; margin: 10px 0;">
                        <div style="margin-bottom: 20px;">
                            <h5 style="color: #007bff;">Extra Curricular Activities</h5>
                            <p id="preview-extracurricular" style="white-space: pre-line;">Activities will appear here</p>
                        </div>

                        
                    </div>
                `;
                break;

            case "template3": // Academic/Research
                formHTML = `
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" class="form-control">
                        <label for="email" class="form-label mt-3">Email</label>
                        <input type="email" id="email" class="form-control">
                        <label for="education" class="form-label mt-3">Education (Degree, Institution, Year)</label>
                        <textarea id="education" class="form-control" rows="3"></textarea>
                        <label for="research" class="form-label mt-3">Research Experience</label>
                        <textarea id="research" class="form-control" rows="3"></textarea>
                        <label for="publications" class="form-label mt-3">Publications (if any)</label>
                        <textarea id="publications" class="form-control" rows="3"></textarea>
                        <button type="button" class="btn btn-primary mt-3" onclick="downloadResume()">Download Resume</button>
                    `;
                previewHTML = `
                        <h2 id="preview-name">Your Name</h2>
                        <p id="preview-email">Email</p>
                        <div><strong>Education:</strong> <p id="preview-education">Education Details</p></div>
                        <div><strong>Research Experience:</strong> <p id="preview-research">Research Experience</p></div>
                        <div><strong>Publications:</strong> <p id="preview-publications">Publications</p></div>
                    `;
                break;

            default: // Fallback
                formHTML = `
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" class="form-control">
                        <label for="email" class="form-label mt-3">Email</label>
                        <input type="email" id="email" class="form-control">
                        <button type="button" class="btn btn-primary mt-3" onclick="downloadResume()">Download Resume</button>
                    `;
                previewHTML = `
                        <h2 id="preview-name">Your Name</h2>
                        <p id="preview-email">Email</p>
                    `;
        }




        // Populate the form and preview
        document.getElementById("resume-form").innerHTML = formHTML;
        resumePreview.innerHTML = previewHTML;
        console.log("Form HTML set:", formHTML); // Debug: Confirm form content

        // Handle adding more education fields (specific to template1)
        let educationCount = 1;
        document
            .getElementById("add-education")
            ?.addEventListener("click", function() {
                educationCount++;
                const educationSection =
                    document.getElementById("education-section");
                const newEducation = document.createElement("div");
                newEducation.className = "education-entry mt-2";
                newEducation.innerHTML = `
                    <textarea id="education-${educationCount}" class="form-control education-field" rows="2" placeholder="Degree, Institution, Year"></textarea>
                `;
                educationSection.insertBefore(
                    newEducation,
                    document.getElementById("add-education")
                );

                // Update preview for new education field
                const previewEducation =
                    document.getElementById("preview-education");
                const newPreview = document.createElement("li");
                newPreview.id = `preview-education-${educationCount}`;
                newPreview.textContent = "Education Details";
                previewEducation.appendChild(newPreview);
            });

        // Real-time preview update
        document
            .getElementById("resume-form")
            .addEventListener("input", function() {
                const inputs = {
                    name: "preview-name",
                    phone: "preview-phone",
                    address: "preview-address",
                    website: "preview-website",
                    profile: "preview-profile",
                    email: "preview-email",
                    mobile: "preview-mobile",
                    objective: "preview-objective",
                    achievements: "preview-achievements",
                    projects: "preview-projects",
                    interests: "preview-interests",
                    extracurricular: "preview-extracurricular",
                    certificates: "preview-certificates",
                    title: "preview-title",
                    skills: "preview-skills",
                    portfolio: "preview-portfolio",
                    education: "preview-education",
                    research: "preview-research",
                    publications: "preview-publications",
                    languages: "preview-languages",
                };

                // Update single-field previews
                for (const [inputId, previewId] of Object.entries(inputs)) {
                    const input = document.getElementById(inputId);
                    const preview = document.getElementById(previewId);
                    if (input && preview) {
                        preview.textContent = input.value || preview.textContent;
                        if (inputId === "portfolio") preview.href = input.value || "#";
                    }
                }

                // Update education fields dynamically (for template1)
                const educationFields =
                    document.querySelectorAll(".education-field");
                educationFields.forEach((field, index) => {
                    const preview = document.getElementById(
                        `preview-education-${index + 1}`
                    );
                    if (preview) {
                        preview.textContent = field.value || "Education Details";
                    }
                });
            });
    });


    document.addEventListener('DOMContentLoaded', function() {
        let countAchievement = 1;
        document.getElementById("add-achievement").addEventListener("click", function() {
            countAchievement++;
            const newField = document.createElement("input");
            newField.type = "text";
            newField.id = "achievement-" + countAchievement;
            newField.placeholder = "Enter Achievement";
            newField.className = "resume-field";

            const newPreview = document.createElement("li");
            newPreview.id = "preview-achievements-" + countAchievement;
            newPreview.textContent = "";

            newField.addEventListener("input", function() {
                newPreview.textContent = newField.value;
            });

            document.getElementById("achievements-section").appendChild(newField);
            document.getElementById("preview-achievements").appendChild(newPreview);
        });

    });



    document.addEventListener("DOMContentLoaded", function() {
        const qrBtn = document.getElementById("generateQRButton");

        qrBtn.addEventListener("click", async function() {
            const resume = document.getElementById("resume-preview");

            if (!resume) {
                alert("Resume preview not found.");
                return;
            }

            // Convert resume section to canvas
            const canvas = await html2canvas(resume, {
                scale: 2
            });

            // Convert canvas to image data
            const imgData = canvas.toDataURL("image/png");

            // Create PDF from the image
            const {
                jsPDF
            } = window.jspdf;
            const pdf = new jsPDF("p", "mm", "a4");

            const pageWidth = pdf.internal.pageSize.getWidth();
            const pageHeight = pdf.internal.pageSize.getHeight();

            const imgWidth = pageWidth;
            const imgHeight = (canvas.height * imgWidth) / canvas.width;

            pdf.addImage(imgData, "PNG", 0, 0, imgWidth, imgHeight);

            // Convert to Blob
            const pdfBlob = pdf.output("blob");

            // Upload PDF to the server (PHP code for database insertion)
            const formData = new FormData();
            formData.append("resumePdf", pdfBlob, "resume.pdf");

            const response = await fetch("upload-pdf.php", {
                method: "POST",
                body: formData
            });

            const result = await response.json();

            if (result.pdfUrl) {
                // Make sure the container for QR code exists
                const qrContainer = document.getElementById("qrcode");
                if (qrContainer) {
                    qrContainer.innerHTML = ""; // Clear any previous QR
                    const qr = new QRCode(qrContainer, {
                        text: result.pdfUrl,
                        width: 297,
                        height: 210
                    });

                    // Convert QR image to download link
                    setTimeout(() => {
                        const img = qrContainer.querySelector("img");
                        if (img) {
                            const link = document.createElement("a");
                            link.href = img.src;
                            link.download = "resume-qr.png";
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        } else {
                            alert("QR image not found.");
                        }
                    }, 500);
                } else {
                    alert("QR container not found.");
                }
            } else {
                alert("PDF upload failed.");
                console.log(result);
            }
        });
    });

    function downloadResume() {
        window.scrollTo(0, 0); // Avoid spacing issues

        const element = document.getElementById("resume-preview");

        const opt = {
            margin: 0, // Already handled in CSS
            filename: "resume.pdf",
            image: {
                type: "jpeg",
                quality: 0.98
            },
            html2canvas: {
                scale: 2,
                scrollY: 0
            },
            jsPDF: {
                unit: "px",
                format: [794, 1123],
                orientation: "portrait"
            }, // A4 in pixels
        };

        html2pdf().set(opt).from(element).save();
    }


    document
        .getElementById("resume-form")
        .addEventListener("input", function() {
            localStorage.setItem(
                "resumeData",
                JSON.stringify(
                    Object.fromEntries(
                        [
                            ...document.querySelectorAll(
                                "#resume-form input, #resume-form textarea"
                            ),
                        ].map((el) => [el.id, el.value])
                    )
                )
            );
        });

    // On page load
    const savedData = JSON.parse(localStorage.getItem("resumeData") || "{}");
    for (const [key, value] of Object.entries(savedData)) {
        const el = document.getElementById(key);
        if (el) el.value = value;
    }
    document.addEventListener('DOMContentLoaded', function() {
        var checkATSButton = document.getElementById('checkATSButton');

        if (checkATSButton) {
            checkATSButton.addEventListener('click', function(event) {
                event.preventDefault();

                // Get the input elements
                var phoneNumberElement = document.getElementById('mobile');
                var educationElement = document.getElementById('education-1');
                var skillsElement = document.getElementById('skills');

                // Initialize variables for the values
                var phoneNumber = phoneNumberElement ? phoneNumberElement.value : null;
                var education = educationElement ? educationElement.value : null;
                var skills = skillsElement ? skillsElement.value : null;

                // Initialize issues array
                var issues = [];

                // Validate phone number
                if (!phoneNumber) {
                    issues.push("Phone number is missing.");
                } else if (!validatePhoneNumber(phoneNumber)) {
                    issues.push("Phone number format is invalid.");
                }

                // Validate education
                if (!education) {
                    issues.push("Education is missing.");
                }

                // Validate skills
                if (!skills) {
                    issues.push("Skills are missing.");
                }

                // If issues are present, display them
                if (issues.length > 0) {
                    document.getElementById("atsResult").style.display =
                    "block"; // Show result container
                    document.getElementById("score").innerText =
                    `ATS Friendliness Score: 0%`; // Default 0% score if issues
                    document.getElementById("issues").innerHTML = issues.map(issue =>
                        `<li>${issue}</li>`).join('');
                } else {
                    // Send the valid form data for ATS checking
                    var formData = {
                        phoneNumber: phoneNumber,
                        education: education,
                        skills: skills
                    };

                    // Send the data to check_ats.php for validation
                    fetch('check_ats.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify(formData)
                        })
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById("atsResult").style.display =
                            "block"; // Show result
                            document.getElementById("score").innerText =
                                `ATS Friendliness Score: ${data.score}%`;
                            document.getElementById("issues").innerHTML = data.issues.map(issue =>
                                `<li>${issue}</li>`).join('');
                        })
                        .catch(error => console.error('Error:', error));
                }
            });
        }

        // Function to validate phone number format
        function validatePhoneNumber(phoneNumber) {
            var phoneRegex = /^\+?\d{1,4}[-\s]?\(?\d{1,4}\)?[-\s]?\d{1,4}[-\s]?\d{1,4}$/;
            return phoneRegex.test(phoneNumber);
        }
    });
    </script>
</body>

</html>