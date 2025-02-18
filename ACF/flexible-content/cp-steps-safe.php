<?php
$subtitleSection = $cp->subtitle_section;
$titleSection = $cp->title_section;
$descriptionSection = $cp->description_section;
$stepsInfo = $cp->steps_info;
$firstCta = $cp->first_cta;
$secondCta = $cp->second_cta;

?>

<section class="container--steps-safe">
    <div class="container--wrapper">

        <div class="container--info-section">
            <h5 class="subtitle-info-section"><?php echo $subtitleSection ?></h5>
            <h4 class="title-info-section"><?php echo $titleSection ?></h4>
            <div class="description-info-section">
                <?php echo $descriptionSection ?>
            </div>
        </div>


        <div class="container--steps-info">

            <?php foreach ($stepsInfo as $item): ?>
                <div class="steps-info">
                    <div class="container--icon-title">
                        <img src="<?php echo $item['icon_steps'] ?>" alt="icon step" class="icon-step">
                        <h5 class="title-step"><?php echo $item['title_steps'] ?></h5>
                    </div>

                    <div class="container--description-steps">
                        <?php echo $item['description_steps'] ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="container--cta-steps">
            <a href="<?php echo $firstCta['url'] ?>" class="first-cta"><?php echo $firstCta['title'] ?></a>
            <a href="<?php echo $secondCta['url'] ?>" class="second-cta"><?php echo $secondCta['title'] ?>
                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.0003 6.63379L1.00024 6.63379" stroke="#3662D4" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12.0003 11.634C12.0003 11.634 17.0002 7.95159 17.0002 6.63399C17.0003 5.3164 12.0002 1.63403 12.0002 1.63403"
                          stroke="#3662D4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>

    </div>
</section>