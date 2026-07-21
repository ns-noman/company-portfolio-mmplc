<?php
  $Name = $_REQUEST['Name'] ?? '';
  $Email = $_REQUEST['Email'] ?? '';
  $Subject = $_REQUEST['Subject'] ?? '';
  $Comment = $_REQUEST['Comment'] ?? '';
  $error = $error ?? false;
  $errorMessage = $errorMessage ?? '';
?>

<div class="bg-white rounded shadow p-4" style="margin:auto;">
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
        <p class="mb-1"><strong>Phone:</strong> +88 01616499869</p>
        <p class="mb-1"><strong>Tel:</strong> 55036456, 55036457 Ext. 402</p>
        <p class="mb-4"><strong>Fax:</strong> 55036698</p>
        <p>
          <strong>Email:</strong> <a href="mailto:marketing@maguramultiplex.com.bd" class="text-decoration-none">marketing@maguramultiplex.com.bd</a><br>
          <strong>Website:</strong> <a href="https://maguramultiplex.com.bd" target="_blank" class="text-decoration-none">maguramultiplex.com.bd</a>
        </p>
      </div>

      <div>
        <h5 class="text-uppercase text-secondary">Factory Office</h5>
        <address class="fst-italic">
          Sreerampur, Dhamrai
        </address>
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
<section class="map-section bg-light py-5">
  <div class="container">
    <div class="row justify-content-center text-center mb-4">
      <div class="col-lg-8">
        <h2 class="text-dark fw-bold mb-3">Find Us on Google Maps</h2>
        <p class="text-muted">We are located in the heart of Dhaka. You can reach us easily using the map below.</p>
      </div>
    </div>
    
    <!--<iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->

    <div class="row">
      <div class="col-12">
        <h3>Corporate Office Map</h3>
        <div class="map-responsive shadow rounded-3 overflow-hidden">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2846.920746007351!2d90.4348843!3d23.8135408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65555555555%3A0x23c2934f4c81fc4!2sMagura%20Group!5e1!3m2!1sen!2sbd!4v1753357104443!5m2!1sen!2sbd"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
    <!-- <div class="row mt-5">
      <div class="col-12">
        <h3>Factory Office Map</h3>
        <div class="map-responsive shadow rounded-3 overflow-hidden">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d571.1563081512882!2d90.6112418963872!3d23.615655645326203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37544d2630bb72e5%3A0x176b3004646d0c6a!2sMagura%20Multiplex%20PLC!5e1!3m2!1sen!2sbd!4v1784612308760!5m2!1sen!2sbd"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div> -->
  </div>
</section>


<!-- AOS CSS & JS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true, // Animate once
    duration: 1000, // Animation duration in ms
  });
</script>
