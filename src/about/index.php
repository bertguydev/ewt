<?php 

/*
**
** About Page
**
*/

$page_title = 'About Easy Way Transportation';
$meta_description = 'Learn more about Easy Way Transportation. A family owned trucking business here to help get your load to the place it needs to go.';
$seo_title = 'About Us - Easy Way Transportation';

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
   
    .sub-hero {
        background: url(../images/about.jpg);
        min-height: 250px;
        background-size: cover;
    }
    main {
        margin: 0px 0;
    }
    .one {
        padding: 25px 0;
    }
    .one .panel {
        margin: 20px 0;
    }
    .two {
        padding: 20px 0;
        background: #ddd;
    }
    .circle {
        background: url(../images/team-about.jpg);
        height: 460px;
        width: 100%;
        border-radius: 50%;
    }
</style>
<body class="about">
    <?php include '../components/header/header.php'; ?>
    <?php include '../components/header/sub-page-title.php'; ?>

    <p class="text-center">
    EWT, a quickly rising leader in Southern California transportation and warehousing industry. 
    </p>
    <p class="text-center">
    We maintin the strongest commitment to safe and efficient shipping and dedicated customer service.
    </p>
    
    <main>
        <div class="w100 sub-hero">
            
        </div>
    </main>
    <section class="one">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="col-12">
                <div class="panel">
                    <h2>Tralier Load and Less Than Trailer Load Trucking</h2>
                    <p>Easy Way Transportation (EWT) is here for your Trailer Load and Less Than Trailer Load Trucking needs. We provide pick and delivery services to Los Angeles County, the greater Los Angeles area, Orange County and the Inland Empire.</p>
                    <p>Established in 2006, we've made a name for ourselves by providing top of the line customer care and highly dependable drivers. We'll take complete care of your shipment from start to finish.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="two">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="col-4">
                <div class="circle">

                </div>
            </div>
            <div class="col-8">
                
                <div class="panel">
                    <h2>At Easy Way Transportation, We're Family</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque sed ipsam vitae debitis beatae nesciunt nostrum dicta, fugiat possimus nisi quibusdam dolor ducimus consectetur, non sapiente animi quaerat veritatis deleniti.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora provident minus quasi atque enim ipsum architecto hic maiores, dolore voluptas dolorum autem tenetur harum eaque possimus debitis voluptate qui. Atque.</p>
                </div>
            </div>
        </div>
    </section>

    
    <?php include '../components/footer/footer.php'; ?>

    <?php include '../components/js-includes.php'; ?>
</body>
</html>