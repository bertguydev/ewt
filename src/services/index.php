<?php 

/*
**
** About Page
**
*/

$page_title = 'Easy Way Transportation Services';
$meta_description = 'Services provided by Easy Way Transportation. Find out how we can help your shippment to the place it needs to go.';
$seo_title = 'Trucking Services - Easy Way Transportation';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $meta_description; ?></title>
    <meta name="description" content="<?= $seo_title; ?>">
    <?php include '../components/header/header-css-paths.php' ?>
</head>
<style>
    h1 {
        text-align: center;
    }

    h2 {
        font-size: 24px;
    }

    .services.panel p {
        font-size: 16px;
        padding: 3px;
    }
</style>
<body class="services-page">

    <?php include '../components/header/header.php'; ?>
    <?php include '../components/header/sub-page-title.php'; ?>

    

    <main>
        <div class="container">
            <div class="d-flex justify-content-around">
                <div class="col-3">
                    <div class="services panel text-center">
                    <h2>Local Trucking</h2>
                    <p>Our trucking services are specific to products from a variety of different industries. These industries range from raw materials, fragile products, and other dry products.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="services panel text-center">
                    <h2>Warehousing</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid maxime quam ad nobis velit nam quasi reprehenderit optio quibusdam earum.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="services panel text-center">
                    <h2>Cross Docking</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid maxime quam ad nobis velit nam quasi reprehenderit optio quibusdam earum.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php include '../components/footer/footer.php'; ?>

    <?php include '../components/js-includes.php'; ?>
</body>
</html>