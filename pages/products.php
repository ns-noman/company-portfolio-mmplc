<style>
  .product-box:hover {
    transform: translateY(-8px);
    cursor: pointer;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
  .product-box {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
</style>

<div class="bg-white rounded shadow p-4" style="margin:auto;">
  <h2 class="mb-4 fw-bold text-primary text-center" data-aos="fade-up" data-aos-delay="100">Our Products</h2>

  <p class="fs-5" data-aos="fade-up" data-aos-delay="100">
    The project has equipment capable of printing and binding 5,000,000 copies of books per annum. 
    The packing section is equipped to produce different types of boxes and files by using approximately 
    2000 MT of industrial-grade paper and board per year.
  </p>
  <p class="fs-5" data-aos="fade-up" data-aos-delay="200">
    The wide range of production includes exercise books, spiral pads, loose leaves, bound books, hard cover books, 
    gift wrapping papers, envelopes, and shopping bags. Other inclusions are box files, continuous forms, design paper, 
    file folders, greeting cards, index dividers, letter sets, and ring binders.
  </p>

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

  <div id="product-list" class="row gy-4 mt-4">
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
</div>
