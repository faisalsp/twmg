<footer>
    <div class="container medium-padding">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
            <div class="col col-md-4 mb-3">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $image_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];
                ?>
                <a href="<?php echo get_site_url(); ?>"
                    class="d-flex footer-icon align-items-center link-dark text-decoration-none">
                    <img src="<?php echo $image_url; ?>" width="130" alt="footer logo">
                </a>
                <p class="footer-desc">We are a digital marketing service provider that helps businesses achieve online
                    success through customized strategies and expert implementation. Our goal is to drive results and
                    increase revenue for our clients.</p>
                <div class="footer-info">
                    <h5 class="mb-0">Give Us a Buzz</h5>
                    <p>1300 000 000</p>
                    <h5 class="mb-0">Flick Us an Email</h5>
                    <a href="mailto">hello@twmg.com.au</a>
                </div>
            </div>

            <div class="col col-md-5 mb-3">
                <h5>Navigate</h5>
                <ul class="nav flex-column footer-navigation">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Service</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">- SEO</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">- Website Design</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">- Website Redesign</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">- PPC</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">- Digital Strategy</a></li>
                </ul>
            </div>

            <div class="col col-md-3 mb-3">
                <h5>Socials</h5>
                <ul class="nav flex-row social-icons">
                    <li class="nav-item"><a href="#" class="nav-link p-0"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link p-0"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link p-0"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link p-0"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                </ul>
                <div class="subscribe-form mt-5">
                    <p>Subscribe to our marketing tips</p>
                    <form class="mc-form">
                        <input type="email" class="mb-3" name="#" placeholder="*Email">
                        <input type="Submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $year = date("Y"); ?>
    <p class="text-center mb-0 copyright">&copy; Copyright TWMG
        <?php echo $year; ?>
    </p>
</footer>