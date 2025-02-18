<?php
$image = $cp->hero_image;
$title = $cp->hero_title;
$subtitle = $cp->hero_subtitle;
$call_to_action = $cp->first_call_to_action;
$second_call_to_action = $cp->second_call_to_action;
$textCta = $cp->text_cta;

$htmlAnchor = $cp->html_anchor;
$classCss = $cp->class_css;
$backgroundColor = $cp->background;

?>


<section class="container--section-hero">
    <div class="container--wrapper">

        <div class="container--hero-image">
            <img src="<?php echo $image ?>" class="image--hero" alt="image hero">
        </div>


        <div class="container--hero-info">
            <h1 class="title--hero"><?php echo $title ?></h1>
            <h2 class="subtitle--hero"><?php echo $subtitle ?></h2>

            <div class="container--hero-cta">
                <a href="<?php echo $call_to_action['url'] ?>" class="first--cta"><?php echo $call_to_action['title'] ?></a>
                <a href="<?php echo $second_call_to_action['url'] ?>" class="second--cta"><?php echo $second_call_to_action['title'] ?></a>
            </div>
        </div>


        <div class="container--hero-text">
            <h3 class="text--hero"><?php echo $textCta ?></h3>
        </div>

    </div>
</section>