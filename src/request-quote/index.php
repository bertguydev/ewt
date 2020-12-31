<?php 

/*
**
** Request Quote Page
**
*/

$page_title = 'Request a Quote';
$seo_title = 'Request a Quote For Trucking From Easy Way Transportation';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title; ?></title>
    <meta name="description" content="Learn more about Easy Way Transportation. A family owned trucking business here to help get your load to the place it needs to go.">
    <?php include '../components/header/header-css-paths.php' ?>
</head>
<style>
    h1{
        text-align: center;
    }
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
        background: green;
        height: 460px;
        width: 100%;
        border-radius: 50%;
    }
</style>
<body class="about">
    <?php include '../components/header/header.php'; ?>
    <?php include '../components/header/sub-page-title.php'; ?>

    <main>
        <div class="container">
            <div class="panel">
                <h4 class="text-center">Fill Out The Form Below and a representative will call or email your quote.</h4>
                <form action="">
                </form>
            </div>    
        </div>
    </main>
    
    <?php include '../components/footer/footer.php'; ?>

    <?php include '../components/js-includes.php'; ?>
</body>
</html>