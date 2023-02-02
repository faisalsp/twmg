<?php $location = !empty($args['location']) ? $args['location'] : ""; ?>
<div class="top-banner">
    <div class="container-fluid">
        <div class="breadcrumb">
            <div class="row">
                <div class="col-md-12">
                    <?php echo get_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-banner <?php echo !empty($location) ? "with-location" : ""; ?>">
            <div class="row">
                <?php if ($location != "case-studies") { ?>
                    <div class="col-md-6">
                        <?php if (!empty($args['subtitle'])) { ?>
                            <span>
                                <?php echo $args['subtitle'] ?>
                            </span>
                        <?php } ?>
                        <?php if (!empty($args['title'])) { ?>
                            <h1>
                                <?php echo $args['title']; ?>
                            </h1>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="col-md-12 text-center">
                        <div class="sub-banner w-50 mx-auto position-relative">
                            <?php if (!empty($args['subtitle'])) { ?>
                                <span class="position-absolute">
                                    <?php echo $args['subtitle'] ?>
                                </span>
                            <?php } ?>
                            <?php if (!empty($args['title'])) { ?>
                                <h1>
                                    <?php echo $args['title']; ?>
                                </h1>
                            <?php } ?>
                            <?php if (!empty($args['banner_desc'])) { ?>
                                <p>
                                    <?php echo $args['banner_desc']; ?>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>