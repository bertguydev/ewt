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
    <link rel="stylesheet" href="../assets/css/styles/custom-pages/request-quote.css">
</head>
<style>



.quote-steps {
    color: #fff;
    padding: 25px 15px;
}

i {
    margin: 0 7px 0 0;
}

h4 {
    margin: 0;
}

h3 {
    font-size: 24px
}

.w75 form {
    padding: 25px;
}

.w75 form h4 {
    text-align: left;
}

button {
    width: 90%;
    max-width: 230px;
    padding: 10px 0;
    text-transform: uppercase;
}

</style>
<body class="request-quote-page sub-page">
    <?php include '../components/header/header.php'; ?>
    <?php include '../components/header/sub-page-title.php'; ?>

    <main>
        <div class="container">
            <div class="panel p-0 d-flex justify-content-between mb-md">
                <div class="w25 how-it-works d-flex flex-column justify-content-end">
                    <h3>How It Works:</h3>
                    <div class="d-flex flex-column">
                        <div class="quote-steps d-flex align-items-center">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <h4>Step 1: Name</h4>
                        </div>
                        <div class="quote-steps d-flex align-items-center">
                            <i class="fa fa-server" aria-hidden="true"></i>
                            <h4>Step 2: Shipment Details</h4>
                        </div>
                        <div class="quote-steps d-flex align-items-center">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <h4>Step 3: Contact Information</h4>
                        </div>
                        <div class="quote-steps d-flex align-items-center">
                        <i class="fa fa-check" aria-hidden="true"></i>
                            <h4>Step 4: We'll Send Your Quote</h4>
                        </div>
                    </div>
                </div>
                <div class="w75">
                    <form action="" method="POST" class="d-flex justify-content-around request-form">
                        <h4>Fill Out The Form Below and a representative will call or email your quote.</h4>
                        <input class="col-6" type="text" name="first_name" placeholder="First Name" required>
                        <input class="col-6" type="text" name="last_name" placeholder="Last Name" required>
                        <input class="col-6" type="text" name="company_name" placeholder="Company Name" required>
                        <input class="col-6" type="text" name="pickup_address" placeholder="Pickup Address">
                        <input class="col-6" type="text" name="destination_address" placeholder="Destination Address">
                        <input class="col-6" type="text" name="weight_amount" placeholder="Weight (in lbs)">
                        <input class="col-6" type="text" name="pallet_count" placeholder="Pallet Count">
                        <input class="col-6" type="email" name="email_address" placeholder="Email" required>
                        <input class="col-12" type="text" name="phone" placeholder="Phone Number" required>
                        <button type="submit" class="m-auto">Submit</button>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-12">
                    <h3 class="text-center">Get Your Shipment Started Today.</h3>
                </div>
                <div class="col-6">
                    <img src="../images/support.jpg" alt="team member">
                </div>
                <div class="col-6">
                    <img src="../images/quote-team.jpg" alt="truck driver">
                </div>
            </div>    
        </div>
    </main>
    
    <?php include '../components/footer/footer.php'; ?>

    <?php include '../components/js-includes.php'; ?>
</body>
</html>