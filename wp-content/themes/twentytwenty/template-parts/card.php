<div class="card">
    <?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']) ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title() ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
        <p class="card-text"><?php the_content('En voir plus') ?></p>
        <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
    </div>
</div>