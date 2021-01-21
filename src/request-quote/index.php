<?php 

/*
**
** Request Quote Page
**
*/

$page_title = 'Request a Quote';
$seo_title = 'Request a Quote For Trucking From Easy Way Transportation';
$request_quote_page = 1;

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

    main {
        margin: 0px 0 20px;
    }

    .request-form input {
        padding: 10px 5px;
        margin: 0 0 5px;
    }

</style>
<body class="request-quote-page sub-page">
    <?php include '../components/header/header.php'; ?>
    <?php include '../components/header/sub-page-title.php'; ?>

    <main>
        <div class="container">
            <div class="panel d-flex justify-content-between">
                <div class="col-3">
                    <h3>How It Works:</h3>
                    <div class="d-flex flex-column">
                        <div class="quote-steps">
                            <h4>Step 1: Name</h4>
                        </div>
                        <div class="quote-steps">
                            <h4>Step 2: Shipment Details</h4>
                        </div>
                        <div class="quote-steps">
                            <h4>Step 3: Contact Information</h4>
                        </div>
                        <div class="quote-steps">
                            <h4>Step 4: We'll Send Your Quote</h4>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <h4 class="text-center">Fill Out The Form Below and a representative will call or email your quote.</h4>
                    <form action="" method="POST" class="d-flex justify-content-around request-form">
                        <input class="col-6" type="text" name="first_name" placeholder="First Name" required>
                        <input class="col-6" type="text" name="last_name" placeholder="Last Name" required>
                        <input class="col-6" type="text" name="company_name" placeholder="Company Name" required>
                        <input class="col-6" type="text" name="pickup_address" placeholder="Pickup Address">
                        <input class="col-6" type="text" name="destination_address" placeholder="Destination Address">
                        <input class="col-6" type="text" name="weight_amount" placeholder="Weight (in lbs)">
                        <input class="col-6" type="text" name="pallet_count" placeholder="Pallet Count">
                        <input class="col-6" type="email" name="email_address" placeholder="Email" required>
                        <input class="col-12" type="text" name="phone" placeholder="Phone Number" required>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>    
        </div>
    </main>
    
    <?php include '../components/footer/footer.php'; ?>

    <?php include '../components/js-includes.php'; ?>
</body>
</html>