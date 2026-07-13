<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Magura Multiplex PLC.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="shortcut icon" href="./images/mmplc-logo-short.png" type="image/x-icon">
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid p-0">
    <?php include('components/header.php'); ?>

    <?php 
      $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
      if ($page == '') {
        include('components/slider.php');
      }
    ?>

    <main>
      <?php
        include('components/breadcrumb.php');
        ($page && file_exists("./pages/{$page}.php") && include("./pages/{$page}.php")) || include("./pages/home.php");
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

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toggle = document.querySelector(".search-toggle");
      const box = document.getElementById("navbarSearchBox");

      if (toggle && box) {
        toggle.addEventListener("click", function (e) {
          e.preventDefault();
          box.classList.toggle("d-none");
        });

        document.addEventListener("click", function (event) {
          if (!box.contains(event.target) && !toggle.contains(event.target)) {
            box.classList.add("d-none");
          }
        });

        document.addEventListener("keydown", function (event) {
          if (event.key === "Escape") {
            box.classList.add("d-none");
          }
        });
      }
    });
  </script>
</body>
</html>
