<?php
$titleSection = $cp->title_section;
$subtitleSection = $cp->subtitle_section;
$gridImages = $cp->grid_images;

?>

<section class="container--gallery">
    <div class="container--wrapper">

        <div class="container--info-gallery">
            <h4 class="title--gallery">
                <?php echo $titleSection ?>
            </h4>

            <div class="description--gallery">
                <?php echo $subtitleSection ?>
            </div>
        </div>


        <div class="container--images-gallery">

            <?php foreach ($gridImages as $id => $item): ?>
                <img src="<?php echo $item['image_gallery'] ?>" alt="image gallery" class="image--gallery"
                     id="image-<?php echo $id ?>">
            <?php endforeach; ?>

        </div>

    </div>
</section>
