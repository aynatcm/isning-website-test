<?php
$title = $cp->contact_title;
$description = $cp->contact_description;
$info = $cp->contact_info;
$shortcode_title = $cp->contact_shortcode_title;
$shortcode = $cp->shortcode;
?>

<section class="contact">

    <div class="container--wrapper">
        <div class="contact--wrapper">
            <?php if (!empty($title) || !empty($description) || !empty($info)): ?>
                <div class="contact--wrapper-info">
                    <?php if (!empty($title)): ?>
                        <h2 class="contact--wrapper-info-title"><?php echo $title ?></h2>
                    <?php endif ?>

                    <?php if (!empty($description)): ?>
                        <p class="contact--wrapper-info-description"><?php echo $description ?></p>
                    <?php endif ?>

                    <?php if (!empty($info) || count($info) > 0): ?>
                        <div class="contact--wrapper-info-data">
                            <?php foreach ($info as $item): ?>
                                <div class="contact--wrapper-info-data-wrapper">
                                    <?php if ($item['info_icon']): ?>
                                        <img src="<?php echo $item['info_icon']['url'] ?>" alt=""
                                             class="contact--wrapper-info-data-wrapper-image">
                                    <?php endif ?>

                                    <?php if (!empty($item['info_subtitle']) || !empty($item['info_description'])): ?>
                                        <div class="contact--wrapper-info-data-wrapper-text">
                                            <?php if (!empty($item['info_subtitle'])): ?>
                                                <span class="contact--wrapper-info-data-wrapper-text-subtitle"><?php echo $item['info_subtitle'] ?></span>
                                            <?php endif ?>

                                            <?php if (!empty($item['info_description'])): ?>
                                                <h6 class="contact--wrapper-info-data-wrapper-text-description"><?php echo $item['info_description'] ?></h6>
                                            <?php endif ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>
                </div>
            <?php endif ?>

            <?php if (!empty($shortcode_title) || !empty($shortcode)): ?>
                <div class="contact--wrapper-shortcode">
                    <?php if (!empty($shortcode_title)): ?>
                        <h3 class="contact--wrapper-shortcode-title"><?php echo $shortcode_title ?></h3>
                    <?php endif ?>

                    <?php if (!empty($shortcode)): ?>
                        <div class="contact--wrapper-shortcode-code">
                            <?php echo do_shortcode($shortcode) ?>
                        </div>
                    <?php endif ?>
                </div>
            <?php endif ?>
        </div>
    </div>

</section>