<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .hero { background-color: #fff; padding: 60px 0; text-align: center; }
        .hero img { border-radius: 50%; width: 150px; }
        section { padding: 60px 0; }
        h2 { border-bottom: 2px solid #ff4500; display: inline-block; margin-bottom: 20px; }
        .skill-card { border: 1px solid #ddd; padding: 15px; border-radius: 8px; text-align: center; }
        .timeline { position: relative; padding-left: 40px; }
        .timeline::before { content: ''; position: absolute; left: 15px; top: 0; bottom: 0; width: 2px; background: #ff4500; }
        .timeline-item { position: relative; margin-bottom: 30px; }
        .timeline-item::before { content: ''; position: absolute; left: -5px; top: 0; width: 20px; height: 20px; background: #ff4500; border-radius: 50%; }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero">
    <img src="profile.jpg" alt="Profile Picture">
    <h1>I'm Your Name 👋</h1>
    <h3>UI/UX Designer</h3>
    <p>Brief description about yourself and what you do.</p>
    <a href="resume.pdf" class="btn btn-outline-primary">Download PDF Resume</a>
</div>

<!-- About Section -->
<section class="container">
    <h2>About Me</h2>
    <p>Write a short paragraph about yourself. Your background, experience, and passions.</p>
    <div class="row text-center mt-4">
        <div class="col-md-4">
            <h3>6</h3>
            <p>Years of Experience</p>
        </div>
        <div class="col-md-4">
            <h3>165+</h3>
            <p>Happy Clients</p>
        </div>
        <div class="col-md-4">
            <h3>1800+</h3>
            <p>Projects Completed</p>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="container">
    <h2>Experience</h2>
    <div class="timeline">
        <div class="timeline-item">
            <h5>2018 - Junior UX Designer</h5>
            <p>Worked at <a href="#">Startup.com</a></p>
        </div>
        <div class="timeline-item">
            <h5>2019 - Senior UX Designer</h5>
            <p>Worked at <a href="#">Googly.com</a></p>
        </div>
        <div class="timeline-item">
            <h5>2020-2022 - Team Lead Designer</h5>
            <p>Worked at <a href="#">Company.com</a></p>
        </div>
        <div class="timeline-item">
            <h5>2023+ - Team Lead Designer</h5>
            <p>Working at <a href="#">Latest.com</a></p>
        </div>
    </div>
</section>

<!-- Education & Skills Section -->
<section class="container">
    <h2>Education & Skills</h2>
    <div class="row">
        <div class="col-md-6">
            <h5>Lipsum College - 2010</h5>
            <p>Brief description of degree or major.</p>
            <h5>Master Diploma - 2012</h5>
            <p>Brief description of diploma.</p>
            <h5>Master in User Experience - 2014</h5>
            <p>Brief description of degree.</p>
        </div>
        <div class="col-md-6">
            <div class="row g-3">
                <div class="col-md-4 skill-card">Figma</div>
                <div class="col-md-4 skill-card">Photoshop</div>
                <div class="col-md-4 skill-card">Sketch</div>
                <div class="col-md-4 skill-card">Adobe XD</div>
                <div class="col-md-4 skill-card">Framer</div>
                <div class="col-md-4 skill-card">InVision</div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
