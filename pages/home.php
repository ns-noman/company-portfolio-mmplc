
<style>



  .chairman-page{
    min-height:100vh;
  }

  /* ---------- LEFT COLUMN ---------- */
  .content-col{
    padding:4rem 3rem 3rem 3.5rem;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    min-height:100vh;
  }

  .eyebrow{
    font-size:.7rem;
    letter-spacing:.15em;
    text-transform:uppercase;
    color:#8a8a8a;
    margin-bottom:auto;
  }

  .page-title{
    font-size:2.4rem;
    font-weight:600;
    line-height:1.15;
    color:var(--brand-blue);
    margin:2.5rem 0 2rem 0;
  }

  .quote-block{
    position:relative;
    padding-left:1.75rem;
    border-left:3px solid var(--brand-blue);
    margin-bottom:2.5rem;
  }

  .quote-block .quote-mark{
    font-size:2rem;
    line-height:0;
    color:var(--brand-blue);
    font-weight:700;
    display:block;
    margin-bottom:.25rem;
  }

  .quote-block .quote-mark.end{
    text-align:right;
    margin-top:.5rem;
    margin-bottom:0;
  }

  .quote-block p{
    font-size:1.35rem;
    font-weight:500;
    line-height:1.35;
    color:var(--brand-blue);
    margin:0;
  }

  .body-copy p{
    font-size:.92rem;
    line-height:1.7;
    color:#4a4a4a;
    margin-bottom:1.1rem;
  }

  .signature{
    margin-top:1.5rem;
  }

  .signature .name{
    font-weight:700;
    color:var(--brand-blue-dark);
    margin-bottom:0;
    font-size:.95rem;
  }

  .signature .title{
    font-size:.85rem;
    color:#6a6a6a;
  }

  .page-footer{
    font-size:.7rem;
    color:#9a9a9a;
    letter-spacing:.05em;
    margin-top:2rem;
  }

  .page-footer strong{
    color:var(--brand-blue);
  }

  /* ---------- RIGHT COLUMN (IMAGE) ---------- */
  .image-col{
    position:relative;
    min-height:100vh;
    background:
      radial-gradient(circle at 75% 30%, rgba(255,191,110,.55), transparent 45%),
      radial-gradient(circle at 90% 15%, rgba(255,214,153,.35), transparent 40%),
      linear-gradient(160deg, #0e1013 0%, #1c1f24 45%, #2b2f36 100%);
    /* Replace the gradient above with your real photo, e.g.: */
    background-image:url('images/basic-images/chairman.jpg'); background-size:cover; background-position:center;
    overflow:hidden;
  }

  .image-col::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(0deg, rgba(0,0,0,.35), rgba(0,0,0,0) 40%);
  }

  .image-col .top-label{
    position:absolute;
    top:2rem;
    right:2.5rem;
    z-index:2;
    color:#fff;
    font-size:.7rem;
    letter-spacing:.15em;
    text-transform:uppercase;
    opacity:.85;
  }

  .image-col .replace-note{
    position:absolute;
    inset:0;
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:1;
    color:rgba(255,255,255,.35);
    font-size:.8rem;
    text-align:center;
    padding:2rem;
    pointer-events:none;
  }

  /* ---------- RESPONSIVE ---------- */
  @media (max-width: 991.98px){
    .image-col{
      min-height:45vh;
      order:-1;
    }
    .content-col{
      min-height:auto;
      padding:2.5rem 1.5rem;
    }
    .page-title{
      font-size:1.8rem;
    }
    .quote-block p{
      font-size:1.1rem;
    }
  }


  .section-title {
    color: #4a7fc9;
    font-weight: 700;
    font-size: 2rem;
    line-height: 1.2;
    text-transform: uppercase;
  }
  .nav-link-custom {
    color: #4a7fc9;
    font-weight: 600;
    font-size: 1.05rem;
    display: inline-block;
    border-bottom: 2px solid #4a7fc9;
    padding-bottom: 4px;
    margin-bottom: 1.75rem;
    text-decoration: none;
  }
  .nav-link-custom:hover {
    color: #2f5fa8;
    border-color: #2f5fa8;
  }
  .card-img-custom {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-bottom: 4px solid #4a7fc9;
  }
  .card-heading {
    color: #1a1a1a;
    font-weight: 700;
    font-size: 1.05rem;
    margin-top: 1.25rem;
    margin-bottom: 0.75rem;
  }
  .card-text-custom {
    font-size: 0.9rem;
    line-height: 1.6;
    color: #3a3a3a;
  }
  .card-text-custom .highlight {
    color: #4a7fc9;
  }


  .section-title {
    color: #4a7fc9;
    font-weight: 700;
    font-size: 2rem;
    line-height: 1.2;
    text-transform: uppercase;
  }
  .card-img-custom {
    width: 100%;
    height: 190px;
    object-fit: cover;
    border-bottom: 4px solid #4a7fc9;
  }
  .stat-block {
    padding: 0.75rem 0;
    border-bottom: 1px solid #d8d8d8;
    text-align: right;
  }
  .stat-block:last-child {
    border-bottom: none;
  }
  .stat-number {
    color: #4a7fc9;
    font-weight: 700;
    font-size: 2rem;
    line-height: 1;
  }
  .stat-label {
    font-size: 0.8rem;
    color: #3a3a3a;
  }
  .stat-label .highlight {
    font-weight: 700;
    color: #1a1a1a;
  }
  .body-text {
    font-size: 0.9rem;
    line-height: 1.7;
    color: #3a3a3a;
  }
  .body-text .highlight {
    color: #4a7fc9;
  }


  
  .section-title {
    color: #4a7fc9;
    font-weight: 700;
    font-size: 2rem;
    line-height: 1.2;
    text-transform: uppercase;
  }
  .body-text {
    font-size: 0.85rem;
    line-height: 1.7;
    color: #3a3a3a;
    border-top: 2px solid #4a7fc9;
    padding-top: 1rem;
    max-width: 340px;
  }
  .nav-link-custom {
    color: #4a7fc9;
    font-weight: 600;
    font-size: 0.95rem;
    display: block;
    border-bottom: 2px solid #4a7fc9;
    padding-bottom: 6px;
    margin-bottom: 1.5rem;
    text-decoration: none;
    line-height: 1.3;
    max-width: 220px;
  }
  .nav-link-custom:hover {
    color: #2f5fa8;
    border-color: #2f5fa8;
  }

  .machine-table-title {
    color: #2b2b2b;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
  }

  .machine-table-wrapper {
    max-height: 620px;
    overflow-y: auto;
  }

  table.machine-table {
    font-size: 0.72rem;
    border-collapse: collapse;
    width: 100%;
  }

  table.machine-table thead th {
    background-color: #ffffff;
    color: #9aa5b1;
    font-weight: 400;
    font-style: italic;
    font-size: 0.68rem;
    border-bottom: 2px solid #4a7fc9;
    padding: 6px 8px;
    white-space: nowrap;
  }

  table.machine-table tbody td {
    padding: 5px 8px;
    border-bottom: 1px solid #e6e9ee;
    vertical-align: middle;
    white-space: nowrap;
  }

  table.machine-table tbody td:nth-child(2),
  table.machine-table tbody td:nth-child(3) {
    color: #4a7fc9;
  }

  table.machine-table tbody td:nth-child(1) {
    color: #4a7fc9;
  }

  table.machine-table tbody tr:nth-child(even) {
    background-color: #f7f9fc;
  }


  

  .tech-section {
    position: relative;
    background-color: #6f9bd1;
    background-image:
      radial-gradient(ellipse 90% 60% at 15% 90%, rgba(255,255,255,0.10) 0%, transparent 60%),
      radial-gradient(ellipse 80% 70% at 90% 10%, rgba(255,255,255,0.08) 0%, transparent 55%),
      linear-gradient(135deg, #7ea6d6 0%, #6f9bd1 45%, #5c8bc4 100%);
    min-height: 520px;
    overflow: hidden;
    color: #ffffff;
  }

  .tech-section .wave-overlay {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0.5;
    pointer-events: none;
  }

  .tech-title {
    font-size: 1.6rem;
    font-weight: 400;
    line-height: 1.3;
    letter-spacing: 0.5px;
  }

  .tech-arrow {
    font-size: 1.4rem;
    margin-left: 6px;
  }

  .tech-body {
    font-size: 0.85rem;
    line-height: 1.7;
    color: #eef3fa;
    max-width: 320px;
  }

  .tech-list-item {
    padding-bottom: 0.9rem;
    margin-bottom: 0.9rem;
    border-bottom: 2px solid rgba(255,255,255,0.6);
  }

  .tech-list-item:last-child {
    margin-bottom: 0;
  }

  .tech-list-item .label {
    font-size: 0.95rem;
    font-weight: 400;
    color: #ffffff;
    line-height: 1.3;
  }


  
  .section-title {
    color: #4a7fc9;
    font-weight: 700;
    font-size: 1.6rem;
    line-height: 1.2;
    text-transform: uppercase;
  }

  .machine-table-title {
    color: #4a7fc9;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
  }

  table.machine-table {
    font-size: 0.7rem;
    border-collapse: collapse;
    width: 100%;
  }

  table.machine-table thead th {
    background-color: #ffffff;
    color: #9aa5b1;
    font-weight: 400;
    font-style: italic;
    font-size: 0.62rem;
    border-bottom: 2px solid #4a7fc9;
    padding: 6px 8px;
    white-space: nowrap;
  }

  table.machine-table tbody td {
    padding: 5px 8px;
    border-bottom: 1px solid #e6e9ee;
    vertical-align: middle;
    white-space: nowrap;
  }

  table.machine-table tbody td:nth-child(1),
  table.machine-table tbody td:nth-child(2),
  table.machine-table tbody td:nth-child(3) {
    color: #4a7fc9;
  }

  table.machine-table tbody tr:nth-child(even) {
    background-color: #f7f9fc;
  }

  /* Right blue panel */
  .showcase-panel {
    background-color: #6f9bd1;
    background-image: linear-gradient(135deg, #7ea6d6 0%, #6f9bd1 45%, #5c8bc4 100%);
    color: #ffffff;
    min-height: 100%;
    padding: 3rem 2.5rem;
  }

  .showcase-title {
    font-size: 1.6rem;
    font-weight: 400;
    line-height: 1.3;
    margin-bottom: 1.75rem;
  }

  .showcase-arrow {
    font-size: 1.4rem;
    margin-left: 6px;
  }

  .showcase-list {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
  }

  .showcase-list li {
    font-size: 0.95rem;
    line-height: 1.9;
    color: #eaf1fb;
  }


  
  .section-title {
    color: #4a7fc9;
    font-weight: 700;
    font-size: 2rem;
    line-height: 1.2;
    text-transform: uppercase;
  }
  .card-img-custom {
    width: 100%;
    height: 190px;
    object-fit: cover;
    border-bottom: 4px solid #4a7fc9;
  }
  .body-text {
    font-size: 0.85rem;
    line-height: 1.7;
    color: #3a3a3a;
  }
  .body-text .highlight {
    color: #4a7fc9;
  }
  .body-text ul {
    padding-left: 1.1rem;
    margin-bottom: 0;
  }
  .nav-link-custom {
    color: #4a7fc9;
    font-weight: 600;
    font-size: 0.95rem;
    display: block;
    border-bottom: 2px solid #4a7fc9;
    padding-bottom: 6px;
    margin-bottom: 1.25rem;
    text-decoration: none;
    line-height: 1.3;
    max-width: 220px;
  }
  .nav-link-custom:hover {
    color: #2f5fa8;
    border-color: #2f5fa8;
  }

  .segment-heading {
    color: #4a7fc9;
    font-weight: 700;
    font-size: 0.9rem;
    border-bottom: 1px solid #d8d8d8;
    padding-bottom: 4px;
    margin-bottom: 0.5rem;
  }

  table.segment-table {
    width: 100%;
    font-size: 0.72rem;
    border-collapse: collapse;
    margin-bottom: 1.75rem;
  }

  table.segment-table td {
    padding: 3px 8px 3px 0;
    color: #3a3a3a;
    vertical-align: top;
  }

  table.segment-table td.col-left {
    color: #c0392b;
    width: 50%;
  }

  table.segment-table td.col-right {
    color: #4a7fc9;
    width: 50%;
  }

  
  .section-title {
    color: #4a7fc9;
    font-weight: 700;
    font-size: 2rem;
    line-height: 1.2;
    text-transform: uppercase;
  }
  .nav-link-custom {
    color: #4a7fc9;
    font-weight: 600;
    font-size: 0.95rem;
    display: block;
    border-bottom: 2px solid #4a7fc9;
    padding-bottom: 6px;
    margin-bottom: 1.25rem;
    text-decoration: none;
    line-height: 1.3;
    max-width: 220px;
  }
  .nav-link-custom:hover {
    color: #2f5fa8;
    border-color: #2f5fa8;
  }

  .logo-grid-wrapper {
    /* border-top: 1px dashed #c9ced4; */
  }

  .logo-row {
    display: flex;
    flex-wrap: wrap;
    border-bottom: 1px dashed #c9ced4;
    padding: 1.25rem 0;
  }

  .logo-cell {
    width: 10%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.5rem;
    flex: 1 1 auto;
    min-width: 60px;
  }

  .logo-placeholder {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background-color: #eef1f5;
    border: 1px solid #d7dce2;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.6rem;
    color: #9aa5b1;
    text-align: center;
  }

  @media (max-width: 992px) {
    .logo-cell { width: 16.66%; }
  }
  @media (max-width: 576px) {
    .logo-cell { width: 25%; }
  }

  
  .expertise-page{
    min-height:100vh;
    padding:3rem 3.5rem 2rem 3.5rem;
    display:flex;
    flex-direction:column;
  }

  /* ---------- HEADER ROW ---------- */
  .top-bar{
    display:flex;
    justify-content:space-between;
    font-size:.65rem;
    letter-spacing:.12em;
    text-transform:uppercase;
    color:#8a8a86;
    margin-bottom:2.5rem;
  }

  .page-title{
    font-size:2rem;
    font-weight:600;
    line-height:1.15;
    color:var(--brand-blue);
    margin-bottom:1rem;
  }

  .title-underline{
    width:60px;
    height:3px;
    background:var(--brand-blue);
    margin-bottom:1.75rem;
  }

  /* ---------- INTRO TEXT ---------- */
  .intro-copy p{
    font-size:.82rem;
    line-height:1.65;
    color:var(--text-body);
    margin-bottom:1rem;
  }

  /* ---------- OFFERINGS ---------- */
  .offerings-heading{
    color:var(--brand-blue);
    font-size:1rem;
    font-weight:600;
    margin-bottom:1.25rem;
  }

  .offering-col{
    border-left:1px solid #b9b7ae;
    padding-left:1rem;
  }

  .offering-col:first-child{
    border-left:none;
    padding-left:0;
  }

  .offering-number{
    color:var(--brand-blue);
    font-size:1.15rem;
    font-weight:700;
    margin-right:.4rem;
  }

  .offering-label{
    font-size:.72rem;
    font-weight:600;
    color:#2c2c2c;
    line-height:1.2;
    display:inline-block;
    vertical-align:middle;
  }

  .offering-head{
    display:flex;
    align-items:flex-start;
    margin-bottom:.6rem;
  }

  .offering-col ul{
    list-style:none;
    padding:0;
    margin:0;
  }

  .offering-col li{
    font-size:.68rem;
    line-height:1.55;
    color:#4a4a4a;
  }

  /* ---------- SHOWCASE IMAGE ---------- */
  .showcase-image-wrap{
    flex:1;
    display:flex;
    align-items:flex-end;
    justify-content:center;
    margin-top:2rem;
    min-height:280px;
  }

  .showcase-image-wrap img{
    max-width:100%;
    max-height:340px;
    object-fit:contain;
  }

  .showcase-placeholder{
    width:100%;
    max-width:700px;
    height:280px;
    border:1px dashed #a9a79f;
    border-radius:.25rem;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#8a8a86;
    font-size:.8rem;
    text-align:center;
    padding:1rem;
  }

  /* ---------- FOOTER ---------- */
  .page-footer{
    display:flex;
    justify-content:space-between;
    font-size:.68rem;
    color:#6f6f6a;
    margin-top:1.5rem;
  }

  .page-footer strong{
    color:#2c2c2c;
  }

  @media (max-width: 991.98px){
    .expertise-page{
      padding:2rem 1.5rem;
    }
    .offering-col{
      border-left:none;
      padding-left:0;
      margin-bottom:1.25rem;
    }
  }

</style>

<section class="bg-white rounded p-4" style="margin:auto;">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <h2 class="mb-4 fw-bold text-primary text-center position-relative d-inline-block custom-underline">Welcome</h2>
      </div>
    </div>
          
  <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="ratio ratio-16x9 rounded shadow overflow-hidden">
            <video controls class="w-100 h-100">
                <source src="videos/magura-multiplex.mp4" type="video/mp4">
                <source src="videos/magura-multiplex.webm" type="video/webm">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
      <div class="col-sm-6 col-md-6 col-lg-6">
          <p class="fs-5" data-aos="fade-up" data-aos-delay="100">
            Magura Multiplex PLC (MMPLC) is one of the oldest, most reputable, and trusted printing and publication houses in Bangladesh. 
            Established with a vision to provide world-class printing and packaging solutions, MMPLC has built a legacy of excellence that spans several decades. 
            Our commitment to quality, innovation, and customer satisfaction has made us a preferred partner for educational institutions, corporate entities, government organizations, and industrial clients across the country.
          </p>
          <p class="fs-5" data-aos="fade-up" data-aos-delay="200">
            The company operates with state-of-the-art equipment and modern production facilities, capable of printing and binding up to 5,000,000 copies of books annually. 
            In addition to books, our production line includes a wide range of high-quality products such as exercise books, notebooks, diaries, calendars, file folders, greeting cards, index dividers, ring binders, wrapping papers, and customized packaging solutions. 
            Our packing section is well-equipped to manufacture various types of boxes and files using approximately 2,000 MT of industrial-grade paper and board each year.
          </p>
      </div>
  </div>
</section>


<section class="container-fluid chairman-page p-0" style="background: #f4f4f4; text-align: justify;">
  <div class="row g-0 flex-lg-row flex-column-reverse">
    <!-- LEFT: TEXT CONTENT -->
    <div class="col-lg-6 content-col">
      <div>
        <h1 class="page-title">MESSAGE<br>FROM<br>CHAIRMAN</h1>
        <div class="quote-block">
          <span class="quote-mark">&#8220;</span>
          <p>To remain ahead, we consistently invest in modern technology, advanced machinery, and skilled human resources.</p>
          <span class="quote-mark end">&#8221;</span>
        </div>

        <div class="body-copy">
          <p>Welcome to Magura Multiplex PLC. Magura Multiplex PLC has grown into one of Bangladesh's leading names in the printing and packaging industry, driven by quality, innovation, and reliability.</p>
          <p>What began as a vision to provide superior printing solutions has evolved into a modern and integrated industrial platform capable of meeting diverse and larger-scale business demands. In today's fast-changing business environment, the printing and packaging industry continues to evolve rapidly.</p>
        </div>
      </div>
    </div>

    <!-- RIGHT: IMAGE -->
    <div class="col-lg-6 position-relative p-0">
      <div class="image-col">
      </div>
    </div>
  </div>
  <div class="row g-0 flex-lg-row flex-column-reverse">
    <!-- LEFT: TEXT CONTENT -->
    <div class="col-lg-12 content-col" style="padding-top: 0px!important;">
      <div>
        <div class="body-copy">
          
          <p>To remain ahead, we consistently invest in modern technology, advanced machinery, and skilled human resources. Through the incessant improvement and strategic investment in advanced technology, efficient production systems and skilled expertise, we have strengthened our ability to deliver precise, high-quality, and timely solutions to our valued clients.</p>

          <p>Our commitment to excellence, customer satisfaction, and long-term partnerships remains at the core of everything we do because we are prolong to embrace innovation, sustainability, and responsible business practices. With a clear strategic direction and a future-ready mindset, we are advancing toward our goal of becoming a regional yardstick in industrial printing and packaging solutions.</p>

          <p>With a forward-looking mindset and a passion for excellence, we are committed to strengthening our position as a leading force in Bangladesh's printing and packaging industry.</p>

          <p>Thank you for being a valued part of our journey and persistent success.</p>
        </div>

        <div class="signature">
          <p class="name mb-0">Mustafa Kamal Mohiuddin</p>
          <p class="title">Chairman</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="expertise-page" style="background-image: url('images/basic-images/portfolio 01.jpg'); background-size: cover;">
  <div class="row">
    <!-- LEFT: TITLE + INTRO -->
    <div class="col-lg-4 mb-4 mb-lg-0">
      <h1 class="page-title">SHOWCASING<br>OUR<br>EXPERTISE</h1>
      <div class="title-underline"></div>
    </div>

    <!-- MIDDLE: INTRO COPY (two paragraphs stacked) -->
    <div class="col-lg-4 mb-4 mb-lg-0">
      <div class="intro-copy">
        <p>Magura Multiplex PLC's portfolio is a true reflection of its technical expertise, operational versatility, and unwavering commitment to excellence. We have developed a comprehensive range of high-quality printing and packaging solutions designed to meet the evolving needs of diverse industries.</p>
        <p>Each solution is produced with meticulous attention to detail, ensuring an optimal balance between functionality, durability, and visual presentation. Every output we deliver is a testament to our disciplined production standards and quality-centric approach.</p>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="intro-copy">
        <p>Through continuous refinement and innovation, we ensure that our products consistently meet the expectations of both institutional and corporate clients.</p>
        <p>Backed by strong production capabilities and a commitment to quality, our portfolio is designed to deliver reliable performance, consistency, and value across a wide range of applications. This approach enables us to meet evolving market requirements while maintaining the high standards our clients expect.</p>
      </div>
    </div>
  </div>

  <!-- PRODUCT OFFERINGS -->
  <div class="mt-4">
    <div class="offerings-heading">Our Product Offerings Include:</div>
    <div class="row gx-4">

      <div class="col-6 col-md-4 col-lg-2 offering-col">
        <div class="offering-head">
          <span class="offering-number">01</span>
          <span class="offering-label">Corporate<br>Stationery</span>
        </div>
        <ul>
          <li>KYC Form</li>
          <li>Security Job Form</li>
          <li>Deposit Slip</li>
          <li>Voucher</li>
          <li>Envelope</li>
          <li>Notebook</li>
          <li>Diary</li>
          <li>Pad</li>
          <li>Tally Khata</li>
          <li>ATM Roll</li>
          <li>Thermal Paper</li>
        </ul>
      </div>

      <div class="col-6 col-md-4 col-lg-2 offering-col">
        <div class="offering-head">
          <span class="offering-number">02</span>
          <span class="offering-label">Collateral &amp;<br>Literature</span>
        </div>
        <ul>
          <li>Brochure</li>
          <li>Leaflet</li>
          <li>Catalogue</li>
          <li>Publications</li>
          <li>Literature</li>
          <li>Poster</li>
          <li>Desk Calendar</li>
          <li>Wall Calendar</li>
        </ul>
      </div>

      <div class="col-6 col-md-4 col-lg-2 offering-col">
        <div class="offering-head">
          <span class="offering-number">03</span>
          <span class="offering-label">Marketing &amp;<br>Packaging</span>
        </div>
        <ul>
          <li>Inner Carton</li>
          <li>Catch Cover</li>
          <li>Label</li>
          <li>Gift Box</li>
          <li>Bag</li>
          <li>Mobile Box</li>
          <li>Sticker</li>
          <li>Dummy Pack</li>
          <li>Cigarette Box</li>
          <li>Match Box</li>
          <li>Lighter Box</li>
        </ul>
      </div>

      <div class="col-6 col-md-4 col-lg-2 offering-col">
        <div class="offering-head">
          <span class="offering-number">04</span>
          <span class="offering-label">POS Displays<br>&amp; Fixtures</span>
        </div>
        <ul>
          <li>Show Card</li>
          <li>Dangler</li>
          <li>Wobbler</li>
          <li>Shelf Talker</li>
          <li>2 Pack Display</li>
          <li>3 Pack Display</li>
          <li>Flat Pack Display</li>
          <li>Out Pack Display</li>
          <li>Iron Frame</li>
          <li>Acrylic Frame</li>
          <li>KV Sticker</li>
        </ul>
      </div>

      <div class="col-6 col-md-4 col-lg-2 offering-col">
        <div class="offering-head">
          <span class="offering-number">05</span>
          <span class="offering-label">Event Promo<br>Materials</span>
        </div>
        <ul>
          <li>Poster</li>
          <li>Festoon</li>
          <li>Banner</li>
          <li>Cut Out</li>
          <li>Price Tag</li>
          <li>VAO Card</li>
        </ul>
      </div>

    </div>
  </div>

  <!-- PRODUCT SHOWCASE IMAGE -->
  <div class="showcase-image-wrap" >
    
  </div>
</section>

<section class="certifications-section py-5 bg-white" style="text-align: justify;">
  <div class="container">
    <div class="row g-5 mb-5">
      <!-- Left: Heading -->
      <div class="col-lg-3">
        <h2 class="fw-bold text-primary lh-sm" data-aos="fade-right">
          RECOGNIZED<br>
          FOR<br>
          EXCELLENCE
        </h2>
      </div>

      <!-- Middle: Tag List -->
      <div class="col-lg-3">
        <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="100">
          <li class="mb-3 pb-2 border-bottom border-2 border-primary border-opacity-25" style="max-width: 180px;">
            <span class="text-primary fw-semibold fs-5">Global<br>Standards</span>
          </li>
          <li class="mb-3 pb-2 border-bottom border-2 border-primary border-opacity-25" style="max-width: 180px;">
            <span class="text-primary fw-semibold fs-5">Operational<br>Precision</span>
          </li>
          <li class="mb-3 pb-2 border-bottom border-2 border-primary border-opacity-25" style="max-width: 180px;">
            <span class="text-primary fw-semibold fs-5">Industry<br>Accreditations</span>
          </li>
          <li class="mb-3 pb-2 border-bottom border-2 border-primary border-opacity-25" style="max-width: 180px;">
            <span class="text-primary fw-semibold fs-5">Sustainable<br>Practices</span>
          </li>
          <li class="mb-0 pb-2 border-bottom border-2 border-primary border-opacity-25" style="max-width: 180px;">
            <span class="text-primary fw-semibold fs-5">Trusted<br>Reliability</span>
          </li>
        </ul>
      </div>

      <!-- Right: Description Paragraphs -->
      <div class="col-lg-6">
        <div data-aos="fade-left" data-aos-delay="150">
          <p class="text-secondary lh-lg mb-4">
            Magura Multiplex PLC's commitment to quality, operational excellence, and continuous
            improvement is strongly reflected in its diverse portfolio of internationally recognized and
            prestigious local certifications and industry accreditations. These achievements
            demonstrate the company's consistent adherence to global as well as
            <span class="fw-semibold text-dark">national standards</span> across quality management systems,
            advanced manufacturing processes, workplace safety, regulatory compliance, and sustainable
            business practices.
          </p>

          <p class="text-secondary lh-lg mb-4">
            Collectively, these certifications highlight a structured and disciplined operational culture
            built on precision, accountability, and continuous improvement. They further reinforce Magura
            Multiplex PLC's capability to deliver dependable, high-quality products, and consistently earn
            the confidence and long-term trust of clients, partners, and stakeholders across a wide range
            of industries.
          </p>

          <p class="text-secondary lh-lg mb-0">
            These certifications also reflect the company's commitment to maintaining best practices,
            meeting evolving industry requirements, and continuously enhancing operational performance.
            They stand as a testament to Magura Multiplex PLC's dedication to excellence, reliability, and
            sustainable growth.
          </p>
        </div>
      </div>
    </div>

    <!-- Certificate Images Row -->
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="border rounded-3 overflow-hidden shadow-sm h-100 d-flex align-items-center justify-content-center bg-white p-2">
          <img src="images/certificates/iso_01.jpg" alt="Registration Certificate" class="img-fluid">
        </div>
      </div>

      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="150">
        <div class="border rounded-3 overflow-hidden shadow-sm h-100 d-flex align-items-center justify-content-center bg-white p-2">
          <img src="images/certificates/iso_02.jpg" alt="Registration Schedule" class="img-fluid">
        </div>
      </div>

      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
        <div class="border rounded-3 overflow-hidden shadow-sm h-100 d-flex align-items-center justify-content-center bg-white p-2">
          <img src="images/certificates/cer_dhaka-champber-of-commerce.jpg" alt="Chamber of Commerce Certificate" class="img-fluid">
        </div>
      </div>

      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="250">
        <div class="border rounded-3 overflow-hidden shadow-sm h-100 d-flex align-items-center justify-content-center bg-white p-2">
          <img src="images/certificates/certificate_mudran-somitee.jpg" alt="Bangladesh Plastic Goods Manufacturers Association Certificate" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>


<section style="min-height: 100vh; background-image: url('images/basic-images/common back.jpg'); background-size: cover; color: #fff; font-family: 'Segoe UI', Arial, sans-serif; padding: 3rem 4rem; position: relative;">

  <!-- main title -->
  <div style="font-weight: 700; font-size: 2.6rem; line-height: 1.15; letter-spacing: 0.02em; margin-top: 3rem;">
    WHAT<br>DRIVES<br>US
  </div>

  <!-- content -->
  <div style="margin-top: 3rem; margin-left: auto; width: 66%;">

    <!-- Row 1 -->
    <div style="border-top: 1px solid rgba(255,255,255,0.4); padding: 1.75rem 0; display: flex; align-items: flex-start;">
      <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem; flex-shrink: 0;">
        <svg viewBox="0 0 24 24" style="width: 42px; height: 42px; stroke: #fff; fill: none; stroke-width: 1.5;">
          <path d="M9.5 2C6 2 4 5 4 8c0 2 1 3.2 1.8 4.2.6.8.7 1.3.7 2.3v1c0 .8.7 1.5 1.5 1.5h3c.8 0 1.5-.7 1.5-1.5v-1c0-1 .1-1.5.7-2.3C14 11.2 15 10 15 8c0-3-2-6-5.5-6z"/>
          <path d="M9.5 15.5v2a1.5 1.5 0 001.5 1.5h0a1.5 1.5 0 001.5-1.5v-2"/>
          <path d="M10 20h2"/>
          <path d="M11 8c1-1.5 2.5-1.5 3-3"/>
          <path d="M9 8c-.5-1.5.5-2.5 0-4"/>
        </svg>
      </div>
      <div>
        <div style="font-weight: 600; font-size: 1.05rem; margin-bottom: 0.4rem;">Our Guiding Principle</div>
        <div style="font-size: 0.85rem; line-height: 1.5; opacity: 0.9; max-width: 700px;">We see business as a responsibility that goes beyond profit by committing to creating lifelong value through ethical practices, responsible operations, and meaningful contributions to society. Our philosophy is grounded in integrity and guided by long-term trust that true success is only achieved when stakeholders, clients, and communities progress and grow in harmony.</div>
      </div>
    </div>

    <!-- Row 2 -->
    <div style="border-top: 1px solid rgba(255,255,255,0.4); padding: 1.75rem 0; display: flex; align-items: flex-start;">
      <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem; flex-shrink: 0;">
        <svg viewBox="0 0 24 24" style="width: 42px; height: 42px; stroke: #fff; fill: none; stroke-width: 1.5;">
          <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/>
          <circle cx="12" cy="12" r="3"/>
          <path d="M12 3v1M12 20v1M3 12h1M20 12h1"/>
        </svg>
      </div>
      <div>
        <div style="font-weight: 600; font-size: 1.05rem; margin-bottom: 0.4rem;">Our Vision Ahead</div>
        <div style="font-size: 0.85rem; line-height: 1.5; opacity: 0.9; max-width: 700px;">To emerge as a benchmark of excellence in the printing and packaging industry by consistently delivering innovative, high-quality, and value-added solutions that set new standards of performance and reliability.</div>
      </div>
    </div>

    <!-- Row 3 -->
    <div style="border-top: 1px solid rgba(255,255,255,0.4); border-bottom: 1px solid rgba(255,255,255,0.4); padding: 1.75rem 0; display: flex; align-items: flex-start;">
      <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem; flex-shrink: 0;">
        <svg viewBox="0 0 24 24" style="width: 42px; height: 42px; stroke: #fff; fill: none; stroke-width: 1.5;">
          <circle cx="12" cy="12" r="9"/>
          <circle cx="12" cy="12" r="5"/>
          <circle cx="12" cy="12" r="1"/>
          <path d="M17 7l3-3M20 3l-1 3 3-1z"/>
        </svg>
      </div>
      <div>
        <div style="font-weight: 600; font-size: 1.05rem; margin-bottom: 0.4rem;">Our Commitment</div>
        <div style="font-size: 0.85rem; line-height: 1.5; opacity: 0.9; max-width: 700px;">To establish Magura Multiplex as the most trusted partner for clients by providing superior printing, paper processing, and packaging solutions powered by advanced technology, skilled expertise, and a commitment to operational excellence.</div>
      </div>
    </div>

  </div>
</section>


<section class="container-fluid py-5 px-4 px-md-5" style="text-align: justify;">
  <div class="row g-5">

    <!-- Left Column: Title + Nav -->
    <div class="col-12 col-lg-2">
      <h1 class="section-title mb-5">What<br>We Do<br>Best</h1>

      <nav class="d-flex flex-column">
        <a href="#printing" class="nav-link-custom">Printing<br>Solutions</a>
        <a href="#packaging" class="nav-link-custom">Packaging<br>Solutions</a>
        <a href="#paper" class="nav-link-custom">Paper Products<br>Manufacturing</a>
      </nav>
    </div>

    <!-- Printing Column -->
    <div class="col-12 col-md-4 col-lg-3" id="printing">
      <img src="images/basic-images/printing solutions.jpg" alt="Printing" class="card-img-custom rounded-0">
      <h3 class="card-heading">Printing:</h3>
      <div class="card-text-custom">
        <p><span class="highlight">Magura Multiplex PLC's printing division</span> is shaped by a long industrial legacy and a deep-rooted understanding of visual communication needs across institutional and corporate sectors.</p>
        <p>Over the years, the company has refined its processes through experience, skilled craftsmanship, and structured production systems that emphasize precision and consistency at every stage. This foundation of knowledge and operational discipline allows it to deliver reliable communication materials such as books, diaries, calendars, and other structured publications, where clarity, accuracy, and presentation remain central to every output.</p>
        <p>Supported by modern production capabilities and a commitment to quality control, the division maintains high standards of efficiency, consistency, and attention to detail throughout the printing process. Its ability to combine technical expertise with dependable execution enables the company to meet diverse client requirements while ensuring professional results that reflect both functionality and visual excellence.</p>
      </div>
    </div>

    <!-- Packaging Column -->
    <div class="col-12 col-md-4 col-lg-3" id="packaging">
      <img src="images/basic-images/packaging solutions.jpg" alt="Packaging" class="card-img-custom rounded-0">
      <h3 class="card-heading">Packaging:</h3>
      <div class="card-text-custom">
        <p><span class="highlight">Magura Multiplex PLC approaches packaging</span> as an engineered outcome that balances structure, function, and presentation. Supported by technical capability and a solutions-driven mindset, the company integrates modern production systems with experienced execution to address diverse industry requirements.</p>
        <p>Its strength lies in understanding how materials behave under practical conditions and translating that knowledge into reliable, application-specific outputs. This includes carton-based structures and tailored packaging formats designed to ensure protection, usability, and brand presentation across different commercial and industrial needs.</p>
        <p>Backed by a strong focus on quality, consistency, and production efficiency, the company ensures that every packaging solution is developed with careful attention to performance and durability. By combining technical expertise with operational excellence, Magura Multiplex PLC delivers packaging solutions that not only safeguard products but also enhance overall market presentation and customer experience.</p>
      </div>
    </div>

    <!-- Paper Products Column -->
    <div class="col-12 col-md-4 col-lg-3" id="paper">
      <img src="images/basic-images/paper product.jpg" alt="Paper Products" class="card-img-custom rounded-0">
      <h3 class="card-heading">Paper Products:</h3>
      <div class="card-text-custom">
        <p>Built on strong material knowledge and process expertise, Magura Multiplex PLC has developed a stable and efficient manufacturing environment focused on the transformation and refinement of paper-based inputs.</p>
        <p><span class="highlight">The company's strength lies</span> in its controlled workflows, experienced workforce, and continuous focus on operational improvement, ensuring uniformity and dependable quality across production cycles. This disciplined approach enables it to support a wide range of everyday and functional paper applications, including stationery formats, envelopes, notebooks, and other utility-oriented paper items, where durability and usability are key expectations.</p>
        <p>Supported by systematic quality controls and efficient production practices, the company maintains consistent standards throughout the manufacturing process. Its commitment to reliability, precision, and continuous improvement enables it to deliver paper products that effectively meet both practical requirements and evolving customer expectations across diverse market segments.</p>
      </div>
    </div>

  </div>
</section>


<section class="container-fluid py-5 px-4 px-md-5" style="text-align: justify; background-color: #f4f4f4;">
  <div class="row g-5">

    <!-- Left Column: Title -->
    <div class="col-12 col-lg-2">
      <h1 class="section-title">Why<br>Choose<br>Us?</h1>
    </div>

    <!-- Image + Stats Column -->
    <div class="col-12 col-md-4 col-lg-3">
      <img src="images/basic-images/why choose_01.jpg" alt="Facility" class="card-img-custom rounded-0 mb-3">

      <div class="stat-block">
        <div class="stat-number">30+</div>
        <div class="stat-label">Products <span class="highlight">Specialized Solutions</span></div>
      </div>

      <div class="stat-block">
        <div class="stat-number">35+</div>
        <div class="stat-label">Years <span class="highlight">Industry Excellence</span></div>
      </div>

      <div class="stat-block">
        <div class="stat-number">1000+</div>
        <div class="stat-label">Clients <span class="highlight">Trusted Nationwide</span></div>
      </div>

      <div class="stat-block">
        <div class="stat-number">100%</div>
        <div class="stat-label">Commitment <span class="highlight">Quality &amp; Reliability</span></div>
      </div>
    </div>

    <!-- Text Column 1 (with image) -->
    <div class="col-12 col-md-4 col-lg-3">
      <img src="images/basic-images/why choose_03.jpg" alt="Team collaboration" class="card-img-custom rounded-0 mb-3">

      <div class="body-text">
    <p><span class="highlight">Magura Multiplex PLC combines over 35 years of industry experience with expertise and trust.</span> Serving more than 1,000 clients across diverse sectors, we deliver over 30 specialized products and solutions with a strong reputation for quality, reliability, and performance.</p>

    <p>Quality is at the heart of everything we do. From raw material selection to final delivery, every process follows strict standards and continuous quality control to ensure consistent, high-performance products that meet industry expectations.</p>

    </div>
    </div>

    <!-- Text Column 2 (with image) -->
    <div class="col-12 col-md-4 col-lg-4">
      <img src="images/basic-images/why choose_05.jpg" alt="Quality inspection" class="card-img-custom rounded-0 mb-3">

      <div class="body-text">
        
        <p>We are committed to on-time delivery, responsive customer service, and long-term partnerships. Supported by integrated systems and a skilled workforce, we provide efficient, dependable solutions tailored to our clients' needs.</p>
        <p>With continuous investment in technology, process improvement, and operational excellence, we remain focused on meeting evolving industry demands. Our commitment to innovation and operational discipline enables us to adapt to changing market expectations while maintaining the highest standards of performance and reliability.</p>

        <p>Through this integrated focus on quality, reliability, and service excellence, Magura Multiplex PLC continues to be a trusted name in the printing and packaging industry, delivering solutions that create lasting value for clients and stakeholders alike.</p>
      </div>
    </div>

  </div>
</section>
<section class="tech-section d-flex flex-column">

  <!-- Decorative wave overlay (SVG, inline) -->
  <svg class="wave-overlay" viewBox="0 0 1200 700" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,500 C250,600 350,400 600,480 C850,560 950,380 1200,450 L1200,700 L0,700 Z" fill="rgba(255,255,255,0.08)"/>
    <path d="M0,600 C300,650 400,550 650,600 C900,650 1000,550 1200,600 L1200,700 L0,700 Z" fill="rgba(255,255,255,0.10)"/>
    <path d="M900,0 C1000,100 950,180 1050,220 C1150,260 1180,150 1200,100 L1200,0 Z" fill="rgba(255,255,255,0.08)"/>
  </svg>

  <div class="container-fluid px-4 px-md-5 py-4 py-md-5 position-relative">

    <!-- Title -->
    <div class="row">
      <div class="col-12">
        <h1 class="tech-title mb-0">
          TECHNOLOGY &amp;<br>INFRASTRUCTURE
          <span class="tech-arrow">&#8594;</span>
        </h1>
      </div>
    </div>

    <!-- Body text + list -->
    <div class="row mt-5 pt-4 justify-content-end">
      <div class="col-12 col-md-5 col-lg-4">
        <div class="tech-body">
          <p>At Magura Multiplex PLC, our technology and infrastructure are built to support efficiency, precision, and consistent performance. Backed by more than 35 years of industry experience, we have invested in advanced machinery and equipment, modern manufacturing and storage facilities, and a reliable transportation and logistics network to ensure seamless operations from production to delivery.</p>
          <p>This integrated infrastructure enables us to maintain high quality standards, enhance productivity, and effectively serve over 1000 trusted clients across diverse sectors. Our continued focus on modernization strengthens our capabilities and supports sustainable, long-term growth.</p>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-3">
        <div class="tech-list-item">
          <div class="label">Machinery &amp; Equipment</div>
        </div>
        <div class="tech-list-item">
          <div class="label">Factory &amp; Storage</div>
        </div>
        <div class="tech-list-item">
          <div class="label">Transport &amp; Other Facilities</div>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="container-fluid py-5 px-4 px-md-5" style="background-color: #f4f4f4;">
  <div class="row g-5">

    <!-- Left Column: Title + Text + Nav -->
    <div class="col-12 col-lg-4">
      <h1 class="section-title mb-4">Machinery &amp;<br>Equipment</h1>

      <div class="body-text mb-5">
        <p>At Magura Multiplex PLC, our advanced manufacturing infrastructure is powered by a comprehensive range of modern machinery and production technologies designed to ensure precision, efficiency, consistency, and superior quality. Continuously upgraded to meet evolving industry demands, these capabilities strengthen our ability to deliver reliable solutions.</p>
        <p>Supported by skilled technical expertise and rigorous quality control processes, our production facilities are equipped to handle both specialized and high-volume requirements with exceptional accuracy.</p>
        <p>This strong technological foundation enhances operational flexibility, productivity, and consistent output across diverse applications. This extensive equipment portfolio enables us to maintain the highest standards of operational excellence across our services in Printing &amp; Packaging, Printing &amp; Publications, Paper Converting &amp; Paper Stationery, Security Printing &amp; Security Products Unite.</p>
      </div>

      <nav class="d-flex flex-column">
        <a href="#" class="nav-link-custom">Printing &amp; Packaging Unite</a>
        <a href="#" class="nav-link-custom">Printing &amp; Publications Unite</a>
        <a href="#" class="nav-link-custom">Paper Converting &amp; Paper Stationery Unite</a>
        <a href="#" class="nav-link-custom">Security Printing &amp; Security Products Unite</a>
      </nav>
    </div>

    <!-- Right Column: Machine List Table -->
    <div class="col-12 col-lg-8">
      <div class="machine-table-title">Avilable Machine List</div>

      <div class="machine-table-wrapper">
        <table class="machine-table">
          <thead>
            <tr>
              <th>S/N</th>
              <th>Name of Machine</th>
              <th>Description</th>
              <th>Size</th>
              <th>No. of Machine</th>
              <th>Dt. of purchase (Approx)</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>01</td><td>CTP Machine</td><td>CTP Machine</td><td>(795 x 1050)"</td><td>1 set</td><td>06.09.16</td></tr>
            <tr><td>02</td><td>Auto Plate Exposure Machine</td><td>Plate Exposure</td><td>(29 x 37)"</td><td>1 set</td><td>14.10.10</td></tr>
            <tr><td>03</td><td>Polar Cutting Machine</td><td>Cutting Machine</td><td>36"</td><td>3 set</td><td>08.12.16</td></tr>
            <tr><td>04</td><td>Perfecta Paper Cutting Machine</td><td>Cutting Machine</td><td>41.5"</td><td>1 set</td><td>08.12.16</td></tr>
            <tr><td>05</td><td>Single color KORD Machine</td><td>Sheet-Fed Offset Printing</td><td>(18 x 23)"</td><td>1 set</td><td>21.07.91</td></tr>
            <tr><td>06</td><td>Single color Parva Machine</td><td>Sheet-Fed Offset Printing</td><td>(22 x 32)"</td><td>1 set</td><td>01.06.16</td></tr>
            <tr><td>07</td><td>Single Color SORD Machine</td><td>Sheet-Fed Offset Printing</td><td>(25 x 36)"</td><td>1 set</td><td>23.08.25</td></tr>
            <tr><td>08</td><td>Single color GTO Machine</td><td>Sheet-Fed Offset Printing</td><td>(14.5 x 20)"</td><td>1 set</td><td>01.12.16</td></tr>
            <tr><td>09</td><td>2 Color Roland Machine</td><td>Sheet-Fed Offset Printing</td><td>(23 x 36)"</td><td>1 set</td><td>08.05.13</td></tr>
            <tr><td>10</td><td>4 Color KBA Machine</td><td>Sheet-Fed Offset Printing</td><td>(28 x 40)"</td><td>1 set</td><td>16.01.25</td></tr>
            <tr><td>11</td><td>UV Lamination Machine</td><td>Lamination Machine</td><td>28x44</td><td>1 set</td><td>19.07.16</td></tr>
            <tr><td>12</td><td>Lamination Machine</td><td>Film Lamination</td><td>42"</td><td>1 Set</td><td>10.04.26</td></tr>
            <tr><td>13</td><td>Foil Stamping Machine</td><td>Foil Stamping Machine</td><td>(23 x 36)"</td><td>1 set</td><td>20.11.25</td></tr>
            <tr><td>14</td><td>Hand Die Cutting Machine</td><td>Die Cutting M/C</td><td>(23 x 36)"</td><td>1 set</td><td>08.10.13</td></tr>
            <tr><td>15</td><td>Auto die cutting and Cre.</td><td>Die Cutting Machine</td><td>(14.75 x 400)"</td><td>1 set</td><td>02.12.25</td></tr>
            <tr><td>16</td><td>Auto Gluing Folding Machine</td><td>Supporting Machine</td><td>32"</td><td>1 set</td><td>23.03.25</td></tr>
            <tr><td>17</td><td>4 Color web offset Machine-Orient-1</td><td>Web Offset Printing</td><td>(20 x 32)"</td><td>1 set</td><td>21.03.17</td></tr>
            <tr><td>18</td><td>4 Color web offset Machine-Orient-2,3</td><td>Web Offset Printing</td><td>(20 x 32)"</td><td>2 set</td><td>12.27.14</td></tr>
            <tr><td>19</td><td>4 Color web offset Machine (Prokash)</td><td>Web Offset Printing</td><td>(20 x 32)"</td><td>1 set</td><td>06.06.12</td></tr>
            <tr><td>20</td><td>Folding Machine</td><td>Folding Machine</td><td>(23 x 36)"</td><td>1 set</td><td>09.12.25</td></tr>
            <tr><td>21</td><td>Sewing Machine</td><td>Book Sewing</td><td>-</td><td>5- Thread</td><td>24.03.26</td></tr>
            <tr><td>22</td><td>18 Clam Binding Machine</td><td>Book Glue Binding</td><td>(15 x 18)"</td><td>1 set</td><td>13.06.15</td></tr>
            <tr><td>23</td><td>6 Clam Binding Machine</td><td>Book Glue Binding</td><td>(15 x 18)"</td><td>2 set</td><td>12.06.17</td></tr>
            <tr><td>24</td><td>3 Knife Book Cutting M/C</td><td>Cutting Machine</td><td>(18 x 20)"</td><td>2 set</td><td>27.07.17</td></tr>
            <tr><td>25</td><td>Belt Binding Machine</td><td>Belt Binding Machine</td><td>14"</td><td>4 set</td><td>21.07.16</td></tr>
            <tr><td>26</td><td>4 Color Miyakoshi Machine</td><td>Business Form</td><td>18"</td><td>1 set</td><td>12.03.10</td></tr>
            <tr><td>27</td><td>5-Color Ukita Machine</td><td>Business Form</td><td>18"</td><td>1 set</td><td>12.03.10</td></tr>
            <tr><td>28</td><td>6 Color Flexo Machine-B100</td><td>Flexo Printing Machine</td><td>42"</td><td>1 set</td><td>13.09.14</td></tr>
            <tr><td>29</td><td>ATM Roll Machine</td><td>ATM/POS-1-700</td><td>32"</td><td>3 set</td><td>21.09.17</td></tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>


<section class="container-fluid p-0">
  <div class="row g-0">

    <!-- Left Column: Table continuation -->
    <div class="col-12 col-lg-7 px-4 px-md-5 py-5">
      <h1 class="section-title mb-3">Machinery &amp;<br>Equipment</h1>
      <div class="machine-table-title">Avilable Machine List</div>

      <table class="machine-table">
        <thead>
          <tr>
            <th>S/N</th>
            <th>Name of Machine</th>
            <th>Description</th>
            <th>Size</th>
            <th>No. of Machine</th>
            <th>Dt. of purchase (Approx)</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>30</td><td>ATM Roll Machine</td><td>ATM/POS Roll</td><td>36"</td><td>1 set</td><td>07.11.14</td></tr>
          <tr><td>31</td><td>Stitching Machine (Osaka)</td><td>Stitching Machine</td><td>12"</td><td>1 set</td><td>20.06.92</td></tr>
          <tr><td>32</td><td>Auto Slitting Machine</td><td>Slitting Machine</td><td>42"</td><td>1 set</td><td>01.09.16</td></tr>
          <tr><td>33</td><td>Manual Slitting Machine</td><td>Slitting Machine</td><td>53"</td><td>1 set</td><td>18.08.09</td></tr>
          <tr><td>34</td><td>8 Color Miyakoshi Machine</td><td>Business Form Printing Mach.</td><td>18"</td><td>1 set</td><td>01.06.2008</td></tr>
          <tr><td>35</td><td>2 Color web offset Machine</td><td>Web Offset Printing Mach.</td><td>(13.75 x 36)"</td><td>1 set</td><td>3.05.2017</td></tr>
          <tr><td>36</td><td>Sewing Machine</td><td>Sewing Machine</td><td>(10 x 22)"</td><td>37 set</td><td>07.05.2010</td></tr>
          <tr><td>37</td><td>OMR Reader</td><td>OMR Reader</td><td>10"</td><td>1 set</td><td>12.08.24</td></tr>
          <tr><td>38</td><td>Auto Slitting machine</td><td>Slitting Machine</td><td>42"</td><td>1 set</td><td>15.09.16</td></tr>
        </tbody>
      </table>
    </div>

    <!-- Right Column: Blue Showcase Panel -->
    <div class="col-12 col-lg-5">
      <div class="showcase-panel h-100 d-flex flex-column justify-content-start">
        <h1 class="showcase-title">
          SHOWCASING<br>MACHINERY
          <span class="showcase-arrow">&#8594;</span>
        </h1>

        <ul class="showcase-list">
          <li>Printing &amp; Packaging Unit</li>
          <li>Printing &amp; Publications Unit</li>
          <li>Paper Converting &amp; Paper Stationery Unit</li>
          <li>Security Printing &amp; Security Products Unit</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<section class="container-fluid py-5 px-4 px-md-5" style="background-color: #f4f4f4;">
  <div class="row g-5">

    <!-- Left Column: Title + Image + Text + Nav -->
    <div class="col-12 col-lg-4">
      <h1 class="section-title mb-4">Who<br>We<br>Serve</h1>

      <img src="images/basic-images/why choose_04.jpg" alt="Operations" class="card-img-custom rounded-0 mb-3" style="max-width: 260px;">

      <div class="body-text mb-4">
        <p>Magura Multiplex PLC serves a diverse and prestigious client base across multiple industries, reflecting its capability to deliver dependable printing, packaging, and paper-based solutions at scale. Its key clients include educational institutions, corporate organizations, government and autonomous bodies, and industrial enterprises, each with distinct operational requirements.</p>

        <p><strong>Our core client segments include:</strong></p>
        <ul>
          <li>Government / Non-government / Autonomous Bodies</li>
          <li>Pharmaceuticals</li>
          <li>Banks &amp; Financial Institutions</li>
          <li>Multinational Corporations (MNCs)</li>
          <li>Educational Institutions</li>
        </ul>

        <p class="mt-3">Each segment demands precision, consistency, and adherence to high standards. By aligning its capabilities with the specific needs of every sector, Magura Multiplex PLC has established itself as a trusted multi-industry partner, delivering reliable performance, operational efficiency, and long-term value.</p>

        <p>This ability to adapt to varying requirements has enabled Magura Multiplex PLC to build lasting relationships across a broad range of sectors.</p>
      </div>

      <nav class="d-flex flex-column">
        <a href="#" class="nav-link-custom">Government<br>Non-government<br>Autonomous Bodies</a>
        <a href="#" class="nav-link-custom">Pharmaceuticals</a>
        <a href="#" class="nav-link-custom">Banks &amp; Financial<br>Institutions</a>
        <a href="#" class="nav-link-custom">Multinational<br>Corporations (MNCs)</a>
        <a href="#" class="nav-link-custom">Educational<br>Institutions</a>
      </nav>
    </div>

    <!-- Right Column: Segment Tables -->
    <div class="col-12 col-lg-8">

      <div class="segment-heading">Government, Semi-Government &amp; Autonomous Institutions</div>
      <table class="segment-table">
        <tr><td class="col-left">Titas Gas</td><td class="col-right">Dhaka and Chattogram WASA</td></tr>
        <tr><td class="col-left">BPDB Organisations</td><td class="col-right">Department of Land Records and Surveys</td></tr>
        <tr><td class="col-left">Petrobangla</td><td class="col-right">West Zone Power Distribution Co. Ltd (WZPDCL)</td></tr>
        <tr><td class="col-left">BMRC</td><td class="col-right">Dhaka Electric Supply Company Ltd (DESCO)</td></tr>
        <tr><td class="col-left">Rural Electrification Boards (REB)</td><td class="col-right">Dhaka Power Distribution Company Ltd (DPDC)</td></tr>
        <tr><td class="col-left">Chattogram Port Authority</td><td class="col-right">Custom Houses (Dhaka, Chattogram &amp; Benapole)</td></tr>
      </table>

      <div class="segment-heading">Pharmaceutical Companies</div>
      <table class="segment-table">
        <tr><td class="col-left">Square Pharmaceuticals</td><td class="col-right">Gaco Pharmaceuticals</td></tr>
        <tr><td class="col-left">Beximco Pharmaceuticals</td><td class="col-right">Pharmacia Ltd</td></tr>
        <tr><td class="col-left">Ibn Sina Pharmaceuticals</td><td class="col-right">Pacific Pharmaceuticals</td></tr>
        <tr><td class="col-left">The ACME Laboratories Ltd</td><td class="col-right">Jayson Pharmaceuticals</td></tr>
        <tr><td class="col-left">ACI Pharmaceuticals</td><td class="col-right">Chemist Laboratories</td></tr>
        <tr><td class="col-left">Orion Laboratories</td><td class="col-right">Renata Pharmaceuticals</td></tr>
        <tr><td class="col-left">Popular Pharmaceuticals</td><td class="col-right">Navana Pharmaceuticals</td></tr>
      </table>

      <div class="segment-heading">Banks</div>
      <table class="segment-table">
        <tr><td class="col-left">Uttara Bank Ltd</td><td class="col-right">Dutch-Bangla Bank Ltd</td></tr>
        <tr><td class="col-left">Rupali Bank Ltd</td><td class="col-right">Mercantile Bank Ltd</td></tr>
        <tr><td class="col-left">Agrani Bank Ltd</td><td class="col-right">Shahjalal Islami Bank Ltd</td></tr>
        <tr><td class="col-left">Sonali Bank Ltd</td><td class="col-right">Eastern Bank Ltd</td></tr>
        <tr><td class="col-left">BASIC Bank Ltd</td><td class="col-right">Bank Alfalah Ltd</td></tr>
        <tr><td class="col-left">Bangladesh Krishi Bank</td><td class="col-right">Premier Bank Ltd</td></tr>
        <tr><td class="col-left">Janata Bank Ltd</td><td class="col-right">South East Bank Ltd</td></tr>
        <tr><td class="col-left">UCBL</td><td class="col-right">BRAC Bank Ltd</td></tr>
        <tr><td class="col-left">AB Bank Ltd</td><td class="col-right">City Bank Ltd</td></tr>
      </table>

      <div class="segment-heading">Insurance Companies</div>
      <table class="segment-table">
        <tr><td class="col-left">Farmest Islami Life Insurance</td><td class="col-right">Prime Life Insurance</td></tr>
        <tr><td class="col-left">Meghna Life Insurance</td><td class="col-right">Metlife Alico Life Insurance</td></tr>
        <tr><td class="col-left">Delta Life Insurance</td><td class="col-right">Sandhani Life Insurance</td></tr>
        <tr><td class="col-left">Pragati Life Insurance</td><td class="col-right">Federal Life Insurance</td></tr>
        <tr><td class="col-left">National Life Insurance Co. Ltd</td><td class="col-right">&nbsp;</td></tr>
      </table>

      <div class="segment-heading">Education Boards &amp; Institutions</div>
      <table class="segment-table mb-0">
        <tr><td class="col-left">Dhaka Education Board</td><td class="col-right">Dinajpur Education Board</td></tr>
        <tr><td class="col-left">Cumilla Education Board</td><td class="col-right">Jashore Education Board</td></tr>
        <tr><td class="col-left">Sylhet Education Board</td><td class="col-right">National University</td></tr>
        <tr><td class="col-left">Chattogram Education Board</td><td class="col-right">Barishal Education Board</td></tr>
        <tr><td class="col-left">Rajshahi Education Board</td><td class="col-right">Directorate of Primary Education</td></tr>
        <tr><td class="col-left">Bangladesh Marine Academy</td><td class="col-right">NTRCA</td></tr>
      </table>

    </div>

  </div>
</section>

<section class="container-fluid py-5 px-4 px-md-5">
  <div class="row g-5">

    <!-- Left Column: Title + Nav -->
    <div class="col-12 col-lg-3">
      <h1 class="section-title mb-5">Our<br>Valued<br>Clients</h1>

      <nav class="d-flex flex-column mt-5 pt-5">
        <a href="#" class="nav-link-custom">Government<br>Non-government<br>Autonomous Bodies</a>
        <a href="#" class="nav-link-custom">Pharmaceuticals</a>
        <a href="#" class="nav-link-custom">Banks &amp; Financial<br>Institutions</a>
        <a href="#" class="nav-link-custom">Multinational<br>Corporations (MNCs)</a>
        <a href="#" class="nav-link-custom">Educational<br>Institutions</a>
      </nav>
    </div>

    <!-- Right Column: Logo Grid -->
    <div class="col-12 col-lg-9"  style="background-image: url('images/basic-images/valued-customers-logo.png'); background-repeat: no-repeat; background-size: cover;">
      <div class="logo-grid-wrapper">

        <!-- <div class="logo-row">
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
        </div>

        <div class="logo-row">
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
        </div>

        <div class="logo-row">
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
        </div>

        <div class="logo-row">
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
        </div>

        <div class="logo-row">
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
        </div>

        <div class="logo-row">
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
          <div class="logo-cell"><div class="logo-placeholder">Logo</div></div>
        </div> -->

      </div>
    </div>

  </div>
</section>


<!-- <div class="row mx-0 my-5">
  <div class="col-sm-12 col-md-12 col-lg-12 text-center">
      <h2 class="mb-4 fw-bold text-primary text-center position-relative d-inline-block custom-underline">Our Product</h2>
  </div>
</div> -->
<?php
    // include('components/product-list.php');
?>

