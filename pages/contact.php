<?php
  $Name = $_REQUEST['Name'] ?? '';
  $Email = $_REQUEST['Email'] ?? '';
  $Subject = $_REQUEST['Subject'] ?? '';
  $Comment = $_REQUEST['Comment'] ?? '';
  $error = $error ?? false;
  $errorMessage = $errorMessage ?? '';
?>

<div class="bg-white rounded shadow p-4" style="margin:auto;">
  <h2 class="mb-4 fw-bold text-primary text-center" data-aos="fade-down" data-aos-delay="100">Contact Us</h2>

  <div class="row gy-5">
    <!-- Contact Info -->
    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
      <div class="mb-4">
        <h5 class="text-uppercase text-secondary">Corporate Office</h5>
        <address class="fst-italic">
          Plot No.-314/A, Road: 18, Block-E,<br>
          Bashundhara Avenue Road, Bashundhara R/A,<br>
          Dhaka-1229
        </address>

        <p class="mb-1"><strong>Phone:</strong> +880-2-8401883-5</p>
        <p class="mb-1"><strong>For Sales:</strong> +8801847091040, +8801847091040</p>
        <p class="mb-4"><strong>For Marketing:</strong> +8801847091040, +8801847091040</p>
        <p class="mb-4"><strong>Fax:</strong> +880-2-8401887</p>
      </div>

      <div>
        <h5 class="text-uppercase text-secondary">Factory Office</h5>
        <address class="fst-italic">
          Sreerampur,<br>
          Dhamrai
        </address>
        <p class="mb-1"><strong>Phone:</strong> +88-2-8431883, +88-2-8431885, +88-2-8431887</p>
        <p class="mb-3"><strong>Fax:</strong> +880-2-9564192</p>

        <p>
          <strong>Email:</strong> <a href="mailto:info@pppl.com.bd" class="text-decoration-none">info@pppl.com.bd</a><br>
          <strong>Website:</strong> <a href="http://www.pppl.com.bd" target="_blank" class="text-decoration-none">www.pppl.com.bd</a>
        </p>
      </div>
    </div>

    <!-- Center Image -->
    <div class="col-lg-2 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="300">
      <img src="./images/contact-div.jpg" alt="Contact" class="img-fluid rounded shadow-sm" />
    </div>

    <!-- Contact Form -->
    <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
      <h5 class="mb-3 fw-semibold">Send Your Comments</h5>
      <p class="mb-4 text-muted">Please send any suggestions or queries using the form below.</p>

      <?php if (!empty($errorMessage)): ?>
        <div class="alert alert-danger" data-aos="fade-in" data-aos-delay="100">
          <ul class="mb-0"><?php echo $errorMessage; ?></ul>
        </div>
      <?php endif; ?>

      <form action="index.php?page=contactaction" method="post" enctype="multipart/form-data" onsubmit="return doValidation(this);" data-aos="fade-up" data-aos-delay="400">
        <div class="mb-3">
          <label for="Name" class="form-label">Name</label>
          <input type="text" id="Name" name="Name" class="form-control" value="<?php echo htmlspecialchars($Name); ?>" placeholder="Your full name" />
        </div>

        <div class="mb-3">
          <label for="Email" class="form-label">Email Address</label>
          <input type="email" id="Email" name="Email" class="form-control" value="<?php echo htmlspecialchars($Email); ?>" placeholder="example@mail.com" />
        </div>

        <div class="mb-3">
          <label for="Subject" class="form-label">Subject</label>
          <input type="text" id="Subject" name="Subject" class="form-control" value="<?php echo htmlspecialchars($Subject); ?>" placeholder="Subject of your message" />
        </div>

        <div class="mb-4">
          <label for="Comment" class="form-label">Comment</label>
          <textarea id="Comment" name="Comment" rows="4" class="form-control" placeholder="Write your message here"><?php echo htmlspecialchars($Comment); ?></textarea>
        </div>

        <div class="d-flex gap-3">
          <button type="submit" class="btn btn-primary px-4" name="Send">Send</button>
          <button type="reset" class="btn btn-outline-secondary px-4">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- AOS CSS & JS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true, // Animate once
    duration: 1000, // Animation duration in ms
  });
</script>
