<?php
$titleSection = $cp->title_section;
$descriptionSection = $cp->description_section;
$firstCta = $cp->first_cta;
$secondCta = $cp->second_cta;
$imageSection = $cp->image_section;

?>

<section class="container--experience-section">

    <div class="container--wrapper">

        <div class="container--info-experience">
            <h4 class="title--experience"><?php echo $titleSection ?></h4>
            <div class="container--description-experience">
                <?php echo $descriptionSection ?>
            </div>

            <div class="container--cta-experience">
                <a href="<?php echo $firstCta['url'] ?>" class="first--cta-experience"><?php echo $firstCta['title'] ?></a>
                <a href="<?php echo $secondCta['url'] ?>" class="second--cta-experience"><?php echo $secondCta['title'] ?></a>
            </div>
        </div>


        <div class="container--image-experience">
            <img src="<?php echo $imageSection ?>" alt="image section">
        </div>

    </div>

</section>
