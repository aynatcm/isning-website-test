<?php
$titleSection = $cp->title_section;
$companyLogos = $cp->company_logos;

?>

<section class="container--logos-section">

    <div class="container--wrapper">

        <div class="container--title-logo">
            <h4 class="title--logo"><?php echo $titleSection ?></h4>
        </div>


        <?php foreach ($companyLogos as $item): ?>
            <div class="container--logos-images">
                <img src="<?php echo $item['logo_image'] ?>" alt="logo image" class="image--logo">
            </div>
        <?php endforeach; ?>
    </div>

</section>
