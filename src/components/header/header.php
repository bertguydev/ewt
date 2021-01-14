<?php 

/*
**
** Header
**
*/

$pre_header = 'EWT is considered an essential businness and is currently operating under normal hours.'
?>

<?php if(!empty($pre_header)) { ?>
    <div class="pre-header text-center">
        <p class="m-0"><?= $pre_header; ?></p>
    </div>
<?php } ?>
<header class="w100 header">
    
    
    <div class="container">
        <div class="d-flex w100 justify-content-between align-items-center">
            <div class="col-2">
                <a <?php if(empty($is_home)){ ?>href="../"<?php }else { ?>href="#"<?php  } ?> >
                    <picture>
                        <source srcset="<?php if(empty($is_home)){ echo '../'; }?>images/logo/ewt-logo.webp" type="image/webp">
                        <source srcset="<?php if(empty($is_home)){ echo '../'; }?>images/logo/ewt-logo.jpg" type="image/jpeg">
                        <img src="<?php if(empty($is_home)){ echo '../'; }?>images/logo/ewt-logo.jpg">
                    </picture>
                </a>
            </div>
            <div class="col-8">
                <nav class="d-flex justify-content-end">
                    <a href="<?php if(empty($is_home)){ echo '../'; }?>about"><div class="nav-item">About</div></a>
                    <a href="<?php if(empty($is_home)){ echo '../'; }?>services"><div class="nav-item">Services</div></a>
                    <a href="<?php if(empty($is_home)){ echo '../'; }?>industries-served"><div class="nav-item">Industries Served</div></a>
                    <a href="<?php if(empty($is_home)){ echo '../'; }?>areas"><div class="nav-item">Areas</div></a>
                    <a href="<?php if(empty($is_home)){ echo '../'; }?>contact-us"><div class="nav-item">Contact Us</div></a>
                    <a href="<?php if(empty($is_home)){ echo '../'; }?>request-quote" class="quote-btn"><div class="nav-item">Request Quote</div></a>
                </nav>
            </div>
        </div>
    </div>
</header>