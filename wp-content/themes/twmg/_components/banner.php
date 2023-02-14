<?php $style = !empty($args['style']) ? $args['style'] : ""; ?>
<div class="top-banner extra-small-padding bg-dark-blue-twmg">
    <div class="container">
        <div class="breadcrumb">
            <div class="row">
                <div class="col-md-12">
                    <?php echo get_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-banner <?php echo !empty($style) ? $style . "-style" : ""; ?>">
            <div class="row">
                <?php if ($style === "subscribe") { ?>
                    <div class="col-md-12 text-center">
                        <div class="sub-banner w-50 mx-auto position-relative">
                            <?php if (!empty($args['title'])) { ?>
                                <h1 class="main-heading-white mb-4">
                                    <?php echo $args['title']; ?>
                                </h1>
                            <?php } ?>
                            <form>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Email Address" />
                                    <button class="btn orange-button" type="submit">Subscribe for 1 month</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } elseif ($style === "box") { ?>
                    <div class="col-md-12 text-center">
                        <div class="sub-banner w-50 mx-auto position-relative">
                            <?php if (!empty($args['subtitle'])) { ?>
                                <span class="position-absolute">
                                    <?php echo $args['subtitle'] ?>
                                </span>
                            <?php } ?>
                            <?php if (!empty($args['title'])) { ?>
                                <h1 class="mb-2">
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
                <?php } else { ?>
                    <div class="col-md-6">
                        <?php if (!empty($args['subtitle'])) { ?>
                            <span class="blog-category-orange">
                                <?php echo $args['subtitle'] ?>
                            </span>
                        <?php } ?>
                        <?php if (!empty($args['title'])) { ?>
                            <h1 class="main-heading-white mb-0">
                                <?php echo $args['title']; ?>
                            </h1>
                        <?php } ?>
                        <?php if (!empty($args['banner_desc'])) { ?>
                            <p class="banner-desc">
                                <?php echo $args['banner_desc']; ?>
                            </p>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>