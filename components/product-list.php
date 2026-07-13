<?php
    $products = [
      ['src' => './images/products/Books Publication (1).gif', 'title' => 'Books Publication'],
      ['src' => './images/products/Calendar.jpg', 'title' => 'Calendar'],
      ['src' => './images/products/Cartridge Paper.jpg', 'title' => 'Cartridge Paper'],
      ['src' => './images/products/Computer Paper.jpg', 'title' => 'Computer Paper'],
      ['src' => './images/products/Diary.jpg', 'title' => 'Diary'],
      ['src' => './images/products/Exercise Book.jpg', 'title' => 'Exercise Book'],
      ['src' => './images/products/Note Books.png', 'title' => 'Note Books'],
      ['src' => './images/products/Wrapping Paper.jpg', 'title' => 'Wrapping Paper'],
    ];
?>

<div id="product-list" class="row gy-4 mt-4 mx-0 my-5">
<?php foreach ($products as $index => $product): ?>
  <div class="col-6 col-sm-4 col-md-3 d-flex" data-aos="zoom-in" data-aos-delay="<?= 300 + $index * 100 ?>">
    <div class="bg-light rounded-3 p-3 shadow-sm h-100 w-100 d-flex flex-column justify-content-between text-center product-box">
      <img 
        src="<?= $product['src'] ?>" 
        alt="<?= $product['title'] ?>" 
        class="img-fluid mb-2" 
        style="max-height: 180px; object-fit: contain;"
      >
      <p class="fw-semibold fs-6 text-dark mb-0"><?= $product['title'] ?></p>
    </div>
  </div>
<?php endforeach; ?>
</div>