<?php
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'home';

$menuList = [
    ['url' => 'index.php', 'menu_label' => 'Home', 'page' => 'home', 'child' => []],
    // ['url' => 'index.php?page=about', 'menu_label' => 'About', 'page' => 'about', 'child' => []],
    // ['url' => 'index.php?page=products', 'menu_label' => 'Products', 'page' => 'products', 'child' => []],
    ['url' => 'index.php?page=services', 'menu_label' => 'Services', 'page' => 'services', 'child' => []],
    [
        'url' => 'javascript:void(0)', 'menu_label' => 'Meetings', 'page' => '', 'child' => [
            [
                'url' => 'javascript:void(0)', 'menu_label' => 'AGM', 'page' => 'agm', 'child' => [
                    [
                        'url' => '/images/7th%20EGM%20Notice_PPP_Details.pdf',
                        'menu_label' => '2024-2025',
                        'page' => '',
                        'child' => [],
                    ],
                    [
                        'url' => '/images/7th%20EGM%20Notice_PPP_Details.pdf',
                        'menu_label' => '2023-2024',
                        'page' => '',
                        'child' => [],
                    ],
                ],
            ],
            [
                'url' => 'javascript:void(0)', 'menu_label' => 'EGM', 'page' => 'egm', 'child' => [
                    [
                        'url' => '/images/7th%20EGM%20Notice_PPP_Details.pdf',
                        'menu_label' => '2024-2025',
                        'page' => '',
                        'child' => [],
                    ],
                    [
                        'url' => '/images/7th%20EGM%20Notice_PPP_Details.pdf',
                        'menu_label' => '2023-2024',
                        'page' => '',
                        'child' => [],
                    ],
                ],
            ],
        ],
    ],
    ['url' => 'index.php?page=InvestorRelations', 'menu_label' => 'Investor Relations', 'page' => 'InvestorRelations', 'child' => []],
    ['url' => 'index.php?page=directorlist', 'menu_label' => 'Directors', 'page' => 'directorlist', 'child' => []],
    ['url' => 'javascript:void(0)', 'menu_label' => 'News', 'page' => '', 'child' => [
        [
            'url' => 'https://www.bangladesherkhabor.net', 'menu_label' => 'Bangladesher Khabor', 'page' => '', 'target' => '_blank', 'child' => [],
        ],
        [
            'url' => 'https://bangladeshnews.live', 'menu_label' => 'Bangladesh News', 'page' => '', 'target' => '_blank', 'child' => [],
        ],
        [
            'url' => 'https://dinparibarton.com', 'menu_label' => 'Dinparibarton', 'page' => '', 'target' => '_blank', 'child' => [],
        ],
    ]],
    ['url' => 'index.php?page=contact', 'menu_label' => 'Contact', 'page' => 'contact', 'child' => []],
];

function hasActiveChild($children, $page) {
    foreach ($children as $child) {
        if ($child['page'] === $page || hasActiveChild($child['child'], $page)) {
            return true;
        }
    }
    return false;
}

function renderMenu($menus, $page, $level = 0) {
    foreach ($menus as $menu) {
        $hasChild = !empty($menu['child']);
        $isActive = ($page === $menu['page']) || hasActiveChild($menu['child'], $page);
        $liClass = $hasChild ? ($level == 0 ? 'dropdown' : 'dropdown-submenu') : '';
        if(isset($menu['target'])){
            $target = $menu['target'];
        }else{
            $target = $level == 2 ? '_blank' : '_self';
        }
        ?>
        <li class="nav-item <?php echo $liClass; ?>">
            <a target="<?php echo $target;?>" class="nav-link <?php echo $hasChild ? 'dropdown-toggle' : ''; ?> <?php echo $isActive ? 'active' : ''; ?>"
               href="<?php echo htmlspecialchars($menu['url']); ?>"
               <?php echo $hasChild ? 'data-bs-toggle="dropdown" aria-expanded="false"' : ''; ?>>
                <?php echo htmlspecialchars($menu['menu_label']); ?>
            </a>
            <?php if ($hasChild): ?>
                <ul class="dropdown-menu">
                    <?php renderMenu($menu['child'], $page, $level + 1); ?>
                </ul>
            <?php endif; ?>
        </li>
        <?php
    }
}
?>


<header>
  <!-- Professional Top Bar -->
  <div class="container-fluid bg-white py-2 shadow-sm border-bottom">
    <div class="container">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">

        <!-- Left: Contact Info -->
        <div class="d-flex flex-column flex-sm-row align-items-center text-secondary gap-3 small">
          <div class="d-flex align-items-center">
            <i class="bi bi-envelope-fill me-2 text-primary"></i>
            <a href="mailto:info@maguramultiplex.com.bd" class="text-decoration-none text-dark fw-semibold hover-underline">
              info@maguramultiplex.com.bd
            </a>
          </div>
          <div class="vr d-none d-sm-inline mx-2"></div>
          <div class="d-flex align-items-center">
            <i class="bi bi-clock-fill me-2 text-primary"></i>
            Sat - Thu <span class="d-none d-md-inline">|</span> <time datetime="09:00-18:00">9:00am - 6:00pm</time>
          </div>
        </div>

        <!-- Social Icons with Font Awesome -->
        <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
          <!-- Facebook -->
          <a href="#" class="text-white bg-primary rounded-circle d-flex justify-content-center align-items-center" style="width: 32px; height: 32px;" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>

          <!-- X (Twitter) -->
          <a href="#" class="text-white bg-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 32px; height: 32px;" aria-label="X Twitter">
            <i class="fab fa-x-twitter"></i>
          </a>

          <!-- LinkedIn -->
          <a href="#" class="text-white bg-primary rounded-circle d-flex justify-content-center align-items-center" style="width: 32px; height: 32px;" aria-label="LinkedIn">
            <i class="fab fa-linkedin-in"></i>
          </a>

          <!-- Instagram -->
          <a href="#" class="text-white bg-danger rounded-circle d-flex justify-content-center align-items-center" style="width: 32px; height: 32px;" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
        </div>

      </div>
    </div>
  </div>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 position-relative">
    <div class="container-fluid px-4">
      <!-- Logo -->
      <a class="navbar-brand" href="index.php">
        <img src="./images/mmplc-logo-short.png" alt="Logo" height="50" class="d-inline-block align-text-top" />
      </a>

      <!-- Mobile Toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links + Search -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center gap-lg-3 gap-2">
          <!-- Dynamically Rendered Menu -->
          <?php renderMenu($menuList, $page); ?>
          <!-- Search Icon with Hover -->
          <li class="nav-item">
            <a href="#" class="nav-link position-relative px-2 text-dark search-toggle" aria-label="Toggle search">
              <i class="fas fa-search fs-5"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Optional Search Dropdown (Hidden initially) -->
    <div id="navbarSearchBox" class="position-absolute end-0 top-100 mt-1 me-4 d-none">
      <div class="bg-white shadow rounded px-3 py-2">
        <form action="javascript:void(0)" method="GET" class="d-flex" role="search">
          <input type="search" name="q" class="form-control form-control-sm me-2" placeholder="Search..." aria-label="Search" />
          <button type="submit" class="btn btn-sm btn-primary" aria-label="Submit search">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
</header>
<script>
document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll('.dropdown-submenu').forEach(function(el){
    el.addEventListener('mouseenter', function(){
      let submenu = el.querySelector('.dropdown-menu');
      if(submenu) submenu.classList.add('show');
    });
    el.addEventListener('mouseleave', function(){
      let submenu = el.querySelector('.dropdown-menu');
      if(submenu) submenu.classList.remove('show');
    });
  });
});
</script>


