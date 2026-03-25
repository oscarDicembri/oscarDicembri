<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#624535" />
    <title>Oscar Dicembri - Home</title>
    <?php require_once './components/styles.php'?>
  </head>
  <body>
    <?php require_once './components/navbar.php'?>

    <div class="container">

        <div class="anchorFix" id="toTheTop"></div>

        <h1 class="mt-5">Oscar Dicembri</h1>

        <div class="anchorFix" id="aboutMe"></div>

        <h2 class="mb-5">About Me</h2>

        <div class="col-md-7 lh-base mx-4">
            <p>I'm <b>Oscar Dicembri</b>, a self-driven software developer born in 1990 and based in <a class="text-bg-light" href="https://maps.app.goo.gl/evJoSC4pz1m7JuQ68" target="blank">Terrasini, Sicily.</a></p>
            <p>My journey into technology has been driven by genuine curiosity and a hands-on approach — I learn by building things that actually work.</p>

            <p>My career spans several domains: from <b>.NET backend development</b> and RESTful APIs, to <b>PHP web applications</b>, to experimenting with Generative AI and LLM integrations. I've also worked with <b>Game Development</b> (Unity, Godot), industrial PLC automation, and Cybersecurity fundamentals.</p>

            <p>What drives me is the intersection of practical engineering and emerging technology. I'm currently investing time in AI-assisted development — building tools and automation utilities that combine prompt engineering with solid software architecture.</p>

            <p>Outside of code, I'm a music composer and producer. I write, record, and produce original tracks — a creative outlet that sharpens my attention to detail and pattern recognition, skills that transfer directly to software craftsmanship.</p>
        </div>

        <div class="anchorFix" id="myStudies"></div>

        <h2 class="mb-5">My Studies</h2>
        <div class="my-5 card text-bg-light shadow-lg">
            <dl class="list-group">
                
                <li class="list-group-item p-4">
                    <dt>PHP Web Development Course</dt>
                    <dd class="lead">2025</dd>
                    Professional Training
                    Comprehensive course covering modern PHP 8.x development — including OOP, strict types, PSR-12 standards, namespaces, autoloading with Composer, HTTP fundamentals, routing, forms, sessions, cookies, and web security (SQL Injection, CSRF, password hashing). Also includes SQL/MySQL with PDO prepared statements, and an introduction to Laravel and React.
                </li>
                <li class="list-group-item p-4">
                    <dt>Artificial Intelligence & Machine Learning</dt>
                    <dd class="lead">2025 — In Progress</dd>
                    Datamasters
                    Deep dive into Machine Learning and Deep Learning techniques, with practical applications of AI in software development. Covers the use of AI frameworks and libraries, and the integration of intelligent solutions into real-world projects.
                </li>
                <li class="list-group-item p-4">
                    <dt>Google Cybersecurity Certificate</dt>
                    <dt class="lead">April 2025</dt>
                    Google
                    Foundations of cybersecurity, risk management, threat analysis, firewall and VPN configuration, cryptography, identity management, and an introduction to penetration testing using Kali Linux.
                </li>
                <li class="list-group-item p-4">
                    <dt>Systems & Cybersecurity Course</dt>
                    <dt class="lead">April 2025</dt>
                    Talentform
                    Practical course covering Windows/Linux operating systems, network and user management, virtualization with VMware, backup strategies, RAID configurations, log analysis, and hands-on defense techniques against attacks such as spoofing, sniffing, malware, and exploits.
                </li>
                <li class="list-group-item p-4">
                    <dt>C# Programming – FreeCodeCamp</dt>
                    <dd class="lead">2024</dd>
                    FreeCodeCamp (Score: 97/100)
                    OOP programming, data structures, exception handling, and building interactive applications and games with Unity and C#. Achieved an exceptional score of 97 out of 100.
                </li class="list-group-item p-4">
                    <li class="list-group-item">
                        <dt>Game Development Course – Unity</dt>
                        <dd class="lead">2021</dd>
                        Unity Training
                        Game design fundamentals, UI/UX for games, gameplay logic in C#. Foundation for subsequent professional game development work.
                    </li>
            </dl>
        </div>

    

    </div>

    <?php require_once './components/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', () => {
            const navbar = document.querySelector('.navbar-collapse');
            const bsCollapse = new bootstrap.Collapse(navbar, {
            toggle: false
            });
            bsCollapse.hide();
        });
        });
    </script>
  </body>
</html>