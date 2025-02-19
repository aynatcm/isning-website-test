<?php
$title = $cp->testimonials_title;
$description = $cp->testimonials_description;
$testimonials = $cp->testimonials;
$link = $cp->testimonials_link;
?>

<section class="testimonials">

    <div class="container--wrapper">
        <div class="testimonials--wrapper">
            <?php if (!empty($title) || !empty($description)): ?>
                <div class="testimonials--wrapper-header">
                    <?php if (!empty($title)): ?>
                        <h2 class="testimonials--wrapper-header-title"><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($description)): ?>
                        <p class="testimonials--wrapper-header-description"><?php echo $description; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($testimonials) || count($testimonials) > 0): ?>
                <div class="testimonials--wrapper-testimonial">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div class="testimonials--wrapper-testimonial-item">
                            <?php if (!empty($testimonial['user_name']) || !empty($testimonial['user_testimonial']) || !empty($testimonial['user_review'])): ?>
                                <div class="testimonials--wrapper-testimonial-item-info">
                                    <?php if (!empty($testimonial['user_name'])): ?>
                                        <h3 class="testimonials--wrapper-testimonial-item-info-name"><?php echo $testimonial['user_name']; ?></h3>
                                    <?php endif; ?>

                                    <?php if (!empty($testimonial['user_testimonial'])): ?>
                                        <p class="testimonials--wrapper-testimonial-item-info-description"><?php echo $testimonial['user_testimonial']; ?></p>
                                    <?php endif; ?>

                                    <?php if (!empty($testimonial['user_review'])): ?>
                                        <div class="testimonials--wrapper-testimonial-item-info-star">
                                            <span class="star-rating"
                                                  data-rating="<?php echo intval($testimonial['user_review']); ?>"></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($testimonial['user_image'])): ?>
                                <img src="<?php echo $testimonial['user_image']['url'] ?>" alt=""
                                     class="testimonials--wrapper-testimonial-item-image">
                            <?php endif ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($link)): ?>
                <a href="<?php echo $link['url'] ?>" class="testimonials--wrapper-link"><?php echo $link['title'] ?></a>
            <?php endif ?>
        </div>
    </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".star-rating").forEach(starContainer => {
            let rating = parseInt(starContainer.getAttribute("data-rating")) || 0;
            rating = Math.max(1, Math.min(5, rating));

            starContainer.innerHTML = Array.from({length: rating}, () => `<span class="star">⭐</span>`).join("");
        });
    });
</script>
