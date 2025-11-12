<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Portfolio</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4e73df;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 36px;
        }
        section {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #4e73df;
            margin-bottom: 10px;
        }
        p {
            line-height: 1.6;
        }
        .project {
            margin-bottom: 20px;
        }
        footer {
            background-color: #4e73df;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }
        a {
            color: #4e73df;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Hi, I'm {{ 'Micaella Modelo' }}</h1>
        <p>Web Developer | Designer | Student</p>
    </header>

    <section>
        <h2>About Me</h2>
        <p>Hello! I'm a passionate web developer who loves building websites with Laravel, HTML, CSS, and JavaScript. This e-portfolio showcases some of my recent projects and achievements.</p>
    </section>

    <section>
        <h2>Projects</h2>
        <div class="project">
            <h3>Portfolio Website</h3>
            <p>A personal website built with Laravel to showcase my skills and projects.</p>
        </div>
        <div class="project">
            <h3>To-Do App</h3>
            <p>A simple task management app using Laravel and Vue.js.</p>
        </div>
    </section>

    <section>
        <h2>Contact</h2>
        <p>Email: <a href="mailto:your@email.com">micmodelo0208@gmail.com</a></p>
        <p>GitHub: <a href="https://github.com/yourusername" target="_blank">github.com/yourusername</a></p>
    </section>

    <footer>
        <p>© {{ date('Y') }} Your Name. All Rights Reserved.</p>
    </footer>

</body>
</html>
