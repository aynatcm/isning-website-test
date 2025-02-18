<?php
$imagesSection = $cp->image_section;
$titleSection = $cp->title_section;
$subtitleSection = $cp->subtitle_section;
$descriptionCta = $cp->description_cta;
$ctaSection = $cp->cta_section;


?>

<section class="container--text-media">
    <div class="container--wrapper">

        <div class="container--images-section">
            <?php foreach ($imagesSection as $image): ?>
                <img src="<?php echo $image['image_cta'] ?>" alt="image section" class="image--section">
            <?php endforeach; ?>
        </div>

        <div class="container--info-section">
            <h4 class="title--text-media"><?php echo $titleSection ?></h4>
            <div class="description--text-media">
                <?php echo $subtitleSection ?>
            </div>


            <div class="container--description-cta">
                <?php foreach ($descriptionCta as $description): ?>
                    <div class="description--cta">
                        <?php echo $description['info_cta']; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="container--cta-text-media">
                <a href="<?php echo $ctaSection['url'] ?>"
                   class="cta--text-media"><?php echo $ctaSection['title'] ?></a>
            </div>

        </div>

    </div>
</section>
