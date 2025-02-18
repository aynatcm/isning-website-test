<?php

$title = $cp->hero_title;
$subtitle = $cp->hero_subtitle;
$call_to_action = $cp->first_call_to_action;
$second_call_to_action = $cp->second_call_to_action;
$image = $cp->hero_image;
$textCta = $cp->text_cta;
?>


<section class="hero">
    <div class="hero__info box">
        <div class="wrapper">
            <?php if (isset($title)): ?>
                <h1><?php echo $title ?></h1>
            <?php endif ?>

            <?php if (isset($subtitle)): ?>
                <p><?php echo $subtitle ?></p>
            <?php endif ?>

            <div class="buttons">
                <?php if (isset($call_to_action) && !empty($call_to_action['url']) && !empty($call_to_action['title'])): ?>
                    <a class="btn-1"
                       href="<?php echo htmlspecialchars($call_to_action['url']); ?>"><?php echo htmlspecialchars($call_to_action['title']); ?></a>
                <?php endif; ?>

                <?php if (isset($second_call_to_action) && !empty($second_call_to_action['url']) && !empty($second_call_to_action['title'])): ?>
                    <a href="<?php echo htmlspecialchars($second_call_to_action['url']); ?>"
                       class="btn-2"><?php echo htmlspecialchars($second_call_to_action['title']); ?></a>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <div class="hero__image box">
        <?php if (isset($image)): ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['filename'] ?>">
        <?php endif; ?>

        <div class="container--cta-texts">
            <?php foreach ($textCta as $id => $text): ?>
                <div class="cta-text" id="cta-<?php echo $id; ?>">
                    <div class="container--icon-cta">
                        <img src="<?php echo $text['icon_text'] ?>" alt="icon image">
                    </div>
                    <div class="container--texts">
                        <h3 class="title--cta-text"><?php echo $text['title_cta']; ?></h3>
                        <h4 class="subtitle--cta-text"><?php echo $text['subtitle_cta']; ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>