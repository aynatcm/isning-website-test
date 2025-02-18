<?php
$subtitleSolutions = $cp->subtitle_solutions;
$titleSolutions = $cp->title_solutions;
$descriptionSolutions = $cp->description_solutions;
$imageSolutions = $cp->elements_solution;
?>

<section class="container--solution-section ">

    <div class="container--wrapper">

        <div class="container--info-solution">
            <h4 class="subtitle-solutions"><?php echo $subtitleSolutions ?></h4>
            <h3 class="title-solutions"><?php echo $titleSolutions ?></h3>
            <div class="description-solution"><?php echo $descriptionSolutions ?></div>
        </div>

        <div class="container--solutions-elements">

            <?php foreach ($imageSolutions as $id => $item): ?>
                <div class="container--element" id="element-<?php echo $id ?>">

                    <div class="container-info">
                        <h5 class="subtitle-element"><?php echo $item['subtitle_element'] ?></h5>
                        <h4 class="title-element"><?php echo $item['title_element'] ?></h4>
                        <div class="description-element">
                            <?php echo $item['description_element'] ?>
                        </div>
                        <a href="<?php echo $item['cta_element']['url'] ?>" class="cta-element">
                            <?php echo $item['cta_element']['title'] ?>
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.0003 6.63379L1.00024 6.63379" stroke="#3662D4" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.0003 11.634C12.0003 11.634 17.0002 7.95159 17.0002 6.63399C17.0003 5.3164 12.0002 1.63403 12.0002 1.63403"
                                      stroke="#3662D4" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>

                    <div class="container-image">
                        <img src="<?php echo $item['image_element'] ?>" alt="image element" class="image-element">
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>

</section>
