<div class="client-results-wrapper">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-md-6">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="client-item">
                        <button class="text-start btn btn-primary d-block w-100 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#client-left-<?php echo $i; ?>" aria-expanded="false"
                            aria-controls="client-left-<?php echo $i; ?>">
                            Mcdonalds Eatery
                        </button>
                        <div class="collapse" id="client-left-<?php echo $i; ?>">
                            <div class="card card-body text-start">
                                <p>Just starting to go digital or looking to re-create your website so its mor suited to
                                    your
                                    target audience.</p>
                                <span>John Smith - CEO</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <div class="side-image">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/traffic.png'; ?>"
                        class="w-100" />
                </div>
                <div class="traffic-counter">
                    <div class="d-flex flex-row">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <div class="counter-item">
                                <h3>324%</h3>
                                <span>Total Traffic Growth</span>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>