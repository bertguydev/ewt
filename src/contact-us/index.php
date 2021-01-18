<?php 

/*
**
** Industries Served Page
**
*/

$page_title = 'Contact Easy Way Transportation';
$meta_description = 'Contact Us Today.';
$seo_title = 'Contact Easy Way Transportation';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title; ?></title>
    <meta name="description" content="<?= $meta_description; ?>">
    <?php include '../components/header/header-css-paths.php' ?>
</head>
<style>
    
</style>
<body class="contact-us-page sub-page">

    <?php include '../components/header/header.php'; ?>
    <?php include '../components/header/sub-page-title.php'; ?>

    <main>
        <div class="container">
            <div class="d-flex">
                <div class="col-12 m-auto">
                    <p>EWT is here to help you with all your trucking and warehousing needs. Contact us with any questions or comments which you can fill out on the form below and will be happy to answer any questions as quickly possible.</p>
                </div>
            </div>
            <div class="d-flex mb-md">
                <div class="col-3">
                    <div class="contact-left">
                        <h2>Phone & Email:</h2>
                        <p>555-555-5555</p>
                        <p>shipping@ewt-transportation.com</p>
                    </div>
                </div>
                <div class="col-9">
                    <h2>Send Us a Message</h2>
                    <form action="#" class="d-flex flex-column">
                        <input type="text" name="full_name" placeholder="Full Name">
                        <input type="text" name="email_address" placeholder="Email">
                        <textarea name="message" id="contactMessage" cols="30" rows="7"></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <?php include '../components/footer/footer.php'; ?>

    <?php include '../components/js-includes.php'; ?>
</body>
</html>