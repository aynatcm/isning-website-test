<?php
$titleSection = $cp->title_section;
$subtitleSection = $cp->subtitle_section;
$blogItems = $cp->blog_items;
$ctaSection = $cp->cta_section;

?>

<section class="container--blog">
    <div class="container--wrapper">

        <div class="container--info-blog">
            <h4 class="title--info-blog"><?php echo $titleSection ?></h4>
            <div class="subtitle--info-blog">
                <?php echo $subtitleSection ?>
            </div>
        </div>


        <div class="container--blog-items">
            <?php foreach ($blogItems as $id => $item): ?>
                <div class="blog--item">

                    <div class="image--blog-item">
                        <img src="<?php echo $item['image_item'] ?>" alt="image blog">
                    </div>

                    <div class="info--blog-item">
                        <h5 class="title--blog-item"><?php echo $item['title_item'] ?></h5>
                        <h6 class="subtitle--blog-item"><?php echo $item['subtitle_item'] ?></h6>
                        <a href="<?php echo $item['link_item']['url'] ?>"
                           class="cta--blog-item"><?php echo $item['link_item']['title'] ?></a>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

        <a href="<?php echo $ctaSection['url'] ?>" class="cta--section-blog"><?php echo $ctaSection['title'] ?></a>

    </div>
</section>
