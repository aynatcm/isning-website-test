<?php
$titleSection = $cp->title_section;
$subtitleSection = $cp->subtitle_section;
$servicesInfo = $cp->services_info;

?>

<section class="container--services">
    <div class="container--wrapper">

        <div class="container--info-services">
            <h4 class="title--info-services"><?php echo $titleSection ?></h4>
            <div class="container--subtitle-services">
                <?php echo $subtitleSection ?>
            </div>
        </div>


        <div class="container--item-services">
            <?php foreach ($servicesInfo as $service): ?>
                <div class="item--service">
                    <div class="container--image-item">
                        <img src="<?php echo $service['image_service'] ?>" alt="image section" class="image--item">
                    </div>

                    <div class="container--info-item">
                        <h5 class="title--item"><?php echo $service['title_service'] ?></h5>

                        <div class="container--description-item">
                            <?php echo $service['description_service'] ?>
                        </div>
                    </div>

                    <div class="container--item-cta">
                        <a href="<?php echo $service['cta_service']['url'] ?>" class="cta--item"><?php echo $service['cta_service']['title'] ?>
                            <img src="<?php echo $service['icon_service']?>" alt="icon service" class="image--icon-item">
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
