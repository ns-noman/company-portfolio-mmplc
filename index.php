<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Magura Multiplex PLC.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Google Font: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="shortcut icon" href="./images/mmplc-logo-favicon.ico" type="image/x-icon">
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
</head>
<body>
  <!-- Full-width container -->
  <div class="container-fluid p-0">
    <?php include('components/header.php'); ?>
    <?php 
     $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
      if ($page == '') {
        include('components/slider.php');
      }
    ?>
    <!-- Main Content -->
    <main class="">
      <?php
        if ($page && file_exists("./pages/{$page}.php")) {
          include("./pages/{$page}.php");
        } else {
          include("./pages/home.php");
        }
      ?>
    </main>
    <?php include('components/footer.php'); ?>
  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true,
      duration: 800,
      easing: 'ease-in-out',
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const counters = document.querySelectorAll('.counter');
      
      const animateCounter = (el, endVal, duration = 2000) => {
        let start = 0;
        const stepTime = Math.max(Math.floor(duration / endVal), 20);
        const increment = Math.ceil(endVal / (duration / stepTime));

        const timer = setInterval(() => {
          start += increment;
          if (start >= endVal) {
            start = endVal;
            clearInterval(timer);
          }
          el.innerText = start.toLocaleString();
        }, stepTime);
      };

      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const el = entry.target;
            const endVal = parseInt(el.getAttribute('data-count'), 10);
            animateCounter(el, endVal, 2000);
            obs.unobserve(el);
          }
        });
      }, { threshold: 0.2 });

      counters.forEach(counter => observer.observe(counter));
    });
  </script>



</body>

</html>
