<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kusum Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Kusum</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="hero" class="vh-100 d-flex align-items-center justify-content-center text-center"
    style="background-image: url('images/hero-bg.jpg'); background-size: cover; background-position: center;">
    <div class="hero-overlay" data-aos="fade-up">
      <h1>Hello, I'm Kusum</h1>
      <p class="lead">Web Developer | Frontend & Backend Developer</p>
      <a href="#contact" class="btn btn-outline-light btn-lg mt-3">Hire Me</a>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="py-5 bg-neutral">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center mb-4">About Me</h2>
      <p class="text-center">I am a passionate web developer with experience in creating responsive, clean, and modern
        websites. Skilled in HTML, CSS, JavaScript, Bootstrap, PHP, MySQL, and basic Python. I am a fresher looking to
        contribute to professional projects with innovative and scalable solutions.</p>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-5">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-4">Skills</h2>

    <div class="row text-center justify-content-center">
      <div class="col-6 col-md-2 mb-3">
        <i class="fab fa-html5 fa-3x text-nude"></i>
        <h6 class="mt-2">HTML5</h6>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <i class="fab fa-css3-alt fa-3x text-nude"></i>
        <h6 class="mt-2">CSS3</h6>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <i class="fab fa-js-square fa-3x text-nude"></i>
        <h6 class="mt-2">JavaScript</h6>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <i class="fab fa-bootstrap fa-3x text-nude"></i>
        <h6 class="mt-2">Bootstrap</h6>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <i class="fab fa-php fa-3x text-nude"></i>
        <h6 class="mt-2">PHP</h6>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <i class="fas fa-database fa-3x text-nude"></i>
        <h6 class="mt-2">MySQL</h6>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <i class="fab fa-python fa-3x text-nude"></i>
        <h6 class="mt-2">Python</h6>
      </div>
    </div>
  </div>
</section>


  <!-- Projects -->
  <section id="projects" class="py-5 bg-neutral">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center mb-5">Projects</h2>
      <div class="row justify-content-center">

        <!-- Project 1: E-commerce -->
        <div class="col-md-5 mb-4">
          <a href="https://github.com/kusumnegi/shopify-clone" target="_blank" class="text-decoration-none">
            <div class="card card-dark shadow project-card">
              <img src="images/project.png" class="card-img-top" alt="E-commerce Project">
              <div class="card-body">
                <h5 class="card-title">E-commerce Demo</h5>
                <p class="card-text">This e-commerce website is fully dynamic, responsive, and built with PHP and MySQL,
                  showcasing a complete backend integration.</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Project 2: Exam portal-->
        <div class="col-md-5 mb-4">
          <a href="https://github.com/kusumnegi/exam" target="_blank" class="text-decoration-none">
            <div class="card card-dark shadow project-card">
              <img src="images/instruction.png" class="card-img-top" alt="Exam Project">
              <div class="card-body">
                <h5 class="card-title"> Exam Project</h5>
                <p class="card-text">This website is fully dynamic, responsive, and built with PHP and MySQL,A
                  professional-level project built for exam assessment, showcasing web development
                  skills.</p>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>



  <!-- Contact -->
  <!-- Contact -->
  <section id="contact" class="py-5">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center mb-4">Contact Me</h2>

      <!-- Success Message -->
      <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success text-center">
          ✅ Your message has been sent successfully!
        </div>
      <?php } ?>

      <form action="php/contact.php" method="POST" class="mx-auto" style="max-width:600px;">
        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
          <textarea name="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-nude w-100">Send Message</button>
      </form>
    </div>
  </section>


  <!-- Footer -->
  <footer class="py-3 text-center text-light bg-dark">
    &copy; 2026 Kusum Negi.
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="js/main.js"></script>
  <script>
    AOS.init({
      duration: 1000
    });
  </script>
</body>

</html>