<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Internship Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sticky Banner -->
    <div class="sticky-banner">
        <a href="#apply">Apply for Internship</a>
        <button class="hamburger" onclick="toggleSidebar()">☰ Menu</button>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <button class="close-btn" onclick="toggleSidebar()">×</button>
        <a href="#apply">Internship Application</a>
        <a href="#offer">Offer Letter</a>
        <a href="#verify">Certificate Verification</a>
        <a href="#team">Join Team</a>
        <a href="#contact">Contact Info</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="card" id="apply">
            <h2>Internship Application</h2>
            <p>Submit your application through our form. Fill out all required fields carefully and upload your resume.</p>
        </div>

        <div class="card" id="offer">
            <h2>Offer Letter Generation</h2>
            <p>After approval, your offer letter will be automatically generated and emailed to you in PDF format.</p>
        </div>

        <div class="card" id="verify">
            <h2>Certificate Verification</h2>
            <p>Use this section to verify certificates issued through MITS internship portal using unique IDs.</p>
        </div>

        <div class="card" id="team">
            <h2>Join Our Team</h2>
            <p>Explore open positions and join our development, design, or marketing teams. Submit your interest now!</p>
        </div>

        <div class="card" id="contact">
            <h2>Contact Info</h2>
            <p>Email: support@mitsinterns.com<br>Phone: +91-9876543210<br>Location: Hyderabad, India</p>
        </div>
    </div>

    <!-- JS -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.style.width = sidebar.style.width === "300px" ? "0" : "300px";
        }
    </script>

</body>
</html>
