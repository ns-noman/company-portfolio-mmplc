<div id="slideshow" class="carousel slide" data-bs-ride="carousel" aria-label="Image slideshow">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <?php 
    $action = $_REQUEST['action'] ?? '';
    $totalSlides = ($action != 'sonaliswapno1') ? 3 : 1;
    for ($i = 0; $i < $totalSlides; $i++): ?>
      <button type="button" data-bs-target="#slideshow" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i + 1 ?>"></button>
    <?php endfor; ?>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <?php 
    if ($action != 'sonaliswapno1'):
      for ($i = 1; $i <= 3; $i++): ?>
        <div class="carousel-item <?= $i === 1 ? 'active' : '' ?>">
          <img src="./images/sliders/slide<?= $i ?>.jpg" class="d-block w-100" alt="BDC Slide <?= $i ?>" style="object-fit: cover;aspect-ratio: 960/350;">
        </div>
      <?php endfor;
    else: ?>
      <div class="carousel-item active">
        <img src="./images/sliders/slide3.jpg" class="d-block w-100" alt="BDC Slide 3" style="height: 500px; object-fit: cover;">
      </div>
    <?php endif; ?>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev" aria-label="Previous slide">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next" aria-label="Next slide">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>
