<?php if(empty($request_quote_page)){ ?>
    <section class="request-quote">
        <div class="d-flex text-center justify-content-center align-items-center">
            <h3 class="m-0">Easy Way Transportation is there for your trucking needs request your quote now.</h3>
            <a href="<?php if(empty($is_home)){ echo '../'; }?>request-quote"><button>Get a Free Quote</button></a>
        </div>
    </section>
<?php } ?>

<footer>
    <div class="container">
        <div class="w100 copyright text-center">
            <p class="m-0">&#169; Copyright <span id="thisYear"></span> Easy Way Transportation. All Rights Reserved.</p>
        </div>
    </div>
</footer>