<?php
$imageSection = $cp->image_section;
$subtitleSection = $cp->subtitle_section;
$titleSection = $cp->title_section;
$descriptionSection = $cp->description_section;
$columnInfo = $cp->column_info;
$firstCta = $cp->first_cta;
$secondCta = $cp->second_cta;

?>

<section class="container--two-columns">
    <div class="container--wrapper">

        <?php if ($imageSection): ?>
            <div class="container-image">
                <img src="<?php echo $imageSection ?>" alt="image section">
            </div>
        <?php endif; ?>

        <div class="container--info-section">
            <?php if ($subtitleSection || $titleSection || $descriptionSection): ?>
                <div class="container-info">
                    <h5 class="subtitle-info"><?php echo $subtitleSection ?></h5>
                    <h4 class="title-info"><?php echo $titleSection ?></h4>
                    <div class="description-info">
                        <?php echo $descriptionSection ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($columnInfo)): ?>
                <div class="container--info-column">
                    <?php foreach ($columnInfo as $id => $item): ?>

                        <?php if ($item['icon_column'] != false || $item['title_column'] != '' || $item['description_column'] != ''): ?>
                            <div class="container--column-data column-<?php echo $id ?>">

                                <?php if ($item['icon_column'] || $item['title_column']): ?>
                                    <div class="container-icon-title">

                                        <img src="<?php echo $item['icon_column'] ?>" alt="icon" class="icon-column">
                                        <h4 class="title-column"><?php echo $item['title_column'] ?></h4>

                                    </div>
                                <?php endif; ?>


                                <div class="container--description-data">
                                    <?php echo $item['description_column']; ?>
                                </div>

                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if ($firstCta || $secondCta): ?>
                <div class="container--cta-section">
                    <?php if (!empty($firstCta) && !empty($firstCta['url']) && !empty($firstCta['title'])): ?>
                        <a href="<?php echo $firstCta['url'] ?>" class="first-cta"><?php echo $firstCta['title'] ?></a>
                    <?php endif; ?>

                    <?php if (!empty($secondCta) && !empty($secondCta['url']) && !empty($secondCta['title'])): ?>
                        <a href="<?php echo $secondCta['url'] ?>" class="second-cta"><?php echo $secondCta['title'] ?>
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.0003 6.63379L1.00024 6.63379" stroke="#3662D4" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12.0003 11.634C12.0003 11.634 17.0002 7.95159 17.0002 6.63399C17.0003 5.3164 12.0002 1.63403 12.0002 1.63403"
                                      stroke="#3662D4" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</section>
