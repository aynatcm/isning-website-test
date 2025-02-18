<?php
$subtitleProactive = $cp->subtitle_proactive;
$titleProactive = $cp->title_proactive;
$descriptionProactive = $cp->description_proactive;
$firstCtaProactive = $cp->first_cta_proactive;
$secondCtaProactive = $cp->second_cta_proactive;
$dataProactive = $cp->container_data;
$iconCtaProactive = $cp->icon_cta_proactive;
$textCtaProactive = $cp->text_cta_proactive;
?>

<section class="container--section-proactive">
    <div class="container--wrapper">

        <div class="container--info-section">
            <div class="container-titles">
                <h4 class="subtitle-proactive"><?php echo $subtitleProactive ?></h4>
                <h5 class="title-proactive"><?php echo $titleProactive ?></h5>
            </div>

            <div class="container--description-cta">
                <div class="description-proactive"><?php echo $descriptionProactive ?></div>
                <div class="container--btn-cta">
                    <a href="<?php echo $firstCtaProactive['url'] ?>"
                       class="first--cta-proactive"><?php echo $firstCtaProactive['title'] ?></a>

                    <a href="<?php echo $secondCtaProactive['url'] ?>"
                       class="second--cta-proactive"><?php echo $secondCtaProactive['title'] ?>
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.0003 6.26782L1.00024 6.26782" stroke="white" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.0003 11.2681C12.0003 11.2681 17.0002 7.58562 17.0002 6.26803C17.0003 4.95043 12.0002 1.26807 12.0002 1.26807"
                                  stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>


        <div class="container--numbers-data">
            <?php foreach ($dataProactive as $item): ?>
                <div class="container-data">

                    <div class="container--info-data">
                        <h5 class="container--number-data"><?php echo $item['data_proactive'] ?></h5>
                    </div>
                    <div class="container--description-data">
                        <?php echo $item['description_proactive'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="container--cta-proactive">
    <div class="icon-cta">
        <img src="<?php echo $iconCtaProactive ?>" alt="icon proactive">
    </div>

    <div class="text-cta">
        <p><?php echo $textCtaProactive ?></p>
    </div>
</div>
