<header class="w100 header">
    <div class="container">
        <div class="d-flex w100 justify-content-between align-items-center">
            <div class="col-2">
                <a <?php if(empty($is_home)){ ?>href="../"<?php }else { ?>href="#"<?php  } ?> >Easy Way Transportation</a>
            </div>
            <div class="col-8">
                <nav class="d-flex justify-content-end">
                <?php if(empty($is_home)){ ?>
                    <a href="../about"><div class="nav-item">About</div></a>
                    <a href="../services"><div class="nav-item">Services</div></a>
                    <a href="../industries-served"><div class="nav-item">Industries Served</div></a>
                    <a href="../areas"><div class="nav-item">Areas</div></a>
                    <a href="../contact"><div class="nav-item">Contact Us</div></a>
                    <a href="../request-quote" class="quote-btn"><div class="nav-item">Request Quote</div></a>
                <?php }else { ?>
                    <a href="about"><div class="nav-item">About</div></a>
                    <a href="services"><div class="nav-item">Services</div></a>
                    <a href="industries-served"><div class="nav-item">Industries Served</div></a>
                    <a href="areas"><div class="nav-item">Areas</div></a>
                    <a href="contact"><div class="nav-item">Contact Us</div></a>
                    <a href="request-quote" class="quote-btn"><div class="nav-item">Request Quote</div></a>
                <?php  } ?>
                </nav>
            </div>
        </div>
    </div>
</header>