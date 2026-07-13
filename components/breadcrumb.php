<?php 
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
    $breacrumbTitle = null;

    $breadcrumbTitles = [
        'about'             => 'About Us',
        'products'          => 'Our Products',
        'services'          => 'Our Services',
        'InvestorRelations' => 'Investor Relations',
        'directorlist'      => 'Director List',
        'contact'           => 'Contact Us',
    ];
    
    if ($page):
?>
    <section class="page-header page-header-modern bg-color-grey page-header-lg py-5">
        <div class="container">
            <div class="row">
                <!-- Left Side: Page Title -->
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-color-dark font-weight-bold m-0">
                        <?= $breadcrumbTitles[$page]; ?>
                    </h1>
                </div>

                <!-- Right Side: Breadcrumb -->
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-flex justify-content-md-end text-3-5 m-0">
                        <li class="breadcrumb-item">
                            <a href="index.php" class="text-color-default text-color-hover-primary text-decoration-none">
                                HOME
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= $breadcrumbTitles[$page]; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
