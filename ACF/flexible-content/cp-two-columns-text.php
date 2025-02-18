<?php
$componentLayout = $cp->component_layout;
$imageSection = $cp->image_section;
$imageSectionRight = $cp->image_section_right;
$titleSection = $cp->title_section;
$subtitleSection = $cp->subtitle_section;
$descriptionSection = $cp->description_section;
$infoSection = $cp->info_section;
$className = '';

if ($componentLayout == 'right') {
    $className = 'right';
    $firstCta = $cp->first_cta;
    $secondCta = $cp->second_cta;
} else {
    $className = 'left';
    $firstCta = $cp->first_cta;
    $secondCta = $cp->second_cta;
}
?>

<section class="container--two-columns-text layout-<?php echo $className ?>">

    <?php if ($componentLayout === 'left'): ?>
        <div class="container--wrapper">

            <div class="container--info-section">
                <?php if ($subtitleSection): ?>
                    <h4 class="subtitle--section"><?php echo $subtitleSection ?></h4>
                <?php endif; ?>

                <?php if ($titleSection): ?>
                    <h4 class="title--section"><?php echo $titleSection ?></h4>
                <?php endif; ?>

                <?php if ($descriptionSection): ?>
                    <div class="description--section"><?php echo $descriptionSection ?></div>
                <?php endif; ?>

                <div class="container--info-section">
                    <?php if (!empty($infoSection)): ?>
                        <?php foreach ($infoSection as $info): ?>
                            <?php if ($info['icon_info'] || $info['title_info'] || $info['description_info']): ?>
                                <div class="info--section">
                                    <div class="container--text-icon">
                                        <?php if ($info['icon_info']): ?>
                                            <img src="<?php echo $info['icon_info'] ?>" alt="" class="icon--info">
                                        <?php endif; ?>
                                        <?php if ($info['title_info']): ?>
                                            <h5 class="title--info"><?php echo $info['title_info'] ?></h5>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($info['description_info']): ?>
                                        <div class="container--description-info">
                                            <?php echo $info['description_info'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <div class="container--cta-info">
                            <?php if ($firstCta && $firstCta['url'] && $firstCta['title']): ?>
                                <a href="<?php echo $firstCta['url'] ?>" class="first--cta"><?php echo $firstCta['title'] ?></a>
                            <?php endif; ?>
                            <?php if ($secondCta && $secondCta['url'] && $secondCta['title']): ?>
                                <a href="<?php echo $secondCta['url'] ?>" class="second--cta"><?php echo $secondCta['title'] ?>
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.0003 5.76807L1.00024 5.76807" stroke="#3662D4" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.0003 10.7681C12.0003 10.7681 17.0002 7.08562 17.0002 5.76803C17.0003 4.45043 12.0002 0.768066 12.0002 0.768066"
                                              stroke="#3662D4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

            <?php if ($imageSection): ?>
                <div class="container--image-section">
                    <img src="<?php echo $imageSection ?>" alt="image section">
                </div>
            <?php endif; ?>

        </div>
    <?php endif; ?>


    <?php if ($componentLayout === 'right'): ?>
        <div class="container--wrapper">

            <?php if ($imageSectionRight): ?>
                <div class="container--image-section">
                    <img src="<?php echo $imageSectionRight ?>" alt="image section">
                </div>
            <?php endif; ?>

            <div class="container--info-section">
                <?php if ($subtitleSection): ?>
                    <h4 class="subtitle--section"><?php echo $subtitleSection ?></h4>
                <?php endif; ?>

                <?php if ($titleSection): ?>
                    <h4 class="title--section"><?php echo $titleSection ?></h4>
                <?php endif; ?>

                <?php if ($descriptionSection): ?>
                    <div class="description--section"><?php echo $descriptionSection ?></div>
                <?php endif; ?>

                <div class="container--cta-info">
                    <?php if ($firstCta && $firstCta['url'] && $firstCta['title']): ?>
                        <a href="<?php echo $firstCta['url'] ?>" class="first--cta"><?php echo $firstCta['title'] ?></a>
                    <?php endif; ?>
                    <?php if ($secondCta && $secondCta['url'] && $secondCta['title']): ?>
                        <a href="<?php echo $secondCta['url'] ?>" class="second--cta"><?php echo $secondCta['title'] ?>
                            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.0003 5.76807L1.00024 5.76807" stroke="#3662D4" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.0003 10.7681C12.0003 10.7681 17.0002 7.08562 17.0002 5.76803C17.0003 4.45043 12.0002 0.768066 12.0002 0.768066"
                                      stroke="#3662D4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    <?php endif; ?>

</section>
