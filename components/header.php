<?php
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'home';

$menuList = [
    ['url' => 'index.php', 'menu_label' => 'Home', 'page' => 'home', 'child' => []],
    ['url' => 'index.php?page=about', 'menu_label' => 'About', 'page' => 'about', 'child' => []],
    ['url' => 'index.php?page=products', 'menu_label' => 'Products', 'page' => 'products', 'child' => []],
    ['url' => 'index.php?page=services', 'menu_label' => 'Services', 'page' => 'services', 'child' => []],
    [
        'url' => 'javascript:void(0)', 'menu_label' => 'Meetings', 'page' => '', 'child' => [
            [
                'url' => 'javascript:void(0)', 'menu_label' => 'AGM', 'page' => 'agm', 'child' => [
                    [
                        'url' => 'http://localhost/laravel/projects-l/magura-multiplex-plc/magura-multiplex-plc/images/7th%20EGM%20Notice_PPP_Details.pdf',
                        'menu_label' => '2024-2025',
                        'page' => '',
                        'child' => [],
                    ],
                    [
                        'url' => 'http://localhost/laravel/projects-l/magura-multiplex-plc/magura-multiplex-plc/images/7th%20EGM%20Notice_PPP_Details.pdf',
                        'menu_label' => '2023-2024',
                        'page' => '',
                        'child' => [],
                    ],
                ],
            ],
            [
                'url' => 'javascript:void(0)', 'menu_label' => 'EGM', 'page' => 'egm', 'child' => [
                    [
                        'url' => 'http://localhost/laravel/projects-l/magura-multiplex-plc/magura-multiplex-plc/images/7th%20EGM%20Notice_PPP_Details.pdf',
                        'menu_label' => '2024-2025',
                        'page' => '',
                        'child' => [],
                    ],
                    [
                        'url' => 'http://localhost/laravel/projects-l/magura-multiplex-plc/magura-multiplex-plc/images/7th%20EGM%20Notice_PPP_Details.pdf',
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
        $target = $level == 2 ? '_blank' : '_self';
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
<style>
  .navbar-light .navbar-nav .nav-link {
    color: #333;
    transition: color 0.3s ease;
    text-decoration: none;
  }
  .navbar-light .navbar-nav .nav-link:hover,
  .navbar-light .navbar-nav .nav-link:focus {
    color: rgb(8, 235, 197) !important;
  }
  .navbar-light .navbar-nav .nav-link.active {
    color: #0d6efd !important;
    font-weight: 700;
  }
  .dropdown-submenu {
    position: relative;
  }
  .dropdown-submenu > .dropdown-menu {
    top: 0;
    left: 100%;
    margin-left: 0;
    margin-top: -1px;
  }
  .dropdown-item:focus, .dropdown-item:active {
    background-color: #f8f9fa;
    color: #333;
  }
</style>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container-fluid px-4">
      <a class="navbar-brand" href="index.php">
        <img src="./images/mmplc-logo-short.png" alt="Logo" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
          <?php renderMenu($menuList, $page); ?>
        </ul>
      </div>
    </div>
  </nav>
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
