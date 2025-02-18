<?php
$imageSection = $cp->image_section;
$titleSection = $cp->title_section;
$subtitleSection = $cp->subtitle_section;
$descriptionSection = $cp->description_section;
$ctaButtons = $cp->cta_buttons;
$firstCtaButton = $cp->first_cta_section;
$secondCtaButton = $cp->second_cta_section;
?>

<section class="container--text-media">
    <div class="container--wrapper">

        <div class="container--image-section">
            <img src="<?php echo $imageSection ?>" alt="image section">
        </div>

        <div class="container--info-section">
            <h4 class="subtitle--section-text"><?php echo $subtitleSection ?></h4>
            <h3 class="title--section-text"><?php echo $titleSection ?></h3>
            <div class="description--section-text"><?php echo $descriptionSection ?></div>
            <div class="container--list-cta">
                <?php foreach ($ctaButtons as $item): ?>
                    <div class="container--info-cta">
                        <div class="container--icon">
                            <img src="<?php echo $item['icon_cta'] ?>" alt="icon info">
                        </div>
                        <h5><?php echo $item['title_cta'] ?></h5>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="container--cta">
                <a href="<?php echo $firstCtaButton['url'] ?>"
                   class="first-cta"><?php echo $firstCtaButton['title'] ?></a>
                <a href="<?php echo $secondCtaButton['url'] ?>"
                   class="second-cta"><?php echo $secondCtaButton['title'] ?>
                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.0003 6.63379L1.00024 6.63379" stroke="#3662D4" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.0003 11.634C12.0003 11.634 17.0002 7.95159 17.0002 6.63399C17.0003 5.3164 12.0002 1.63403 12.0002 1.63403"
                              stroke="#3662D4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
