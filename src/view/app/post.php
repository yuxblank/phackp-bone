<?php
use yuxblank\phackp\core\Router; ?>
<div class="post">
    <h1><?php echo $post->title ?></h1>
    <p><?php echo $post->content?></p>

    <div class="tags">
        <?php foreach ($post->tags() as $tag): ?>
        <a href="<?php Router::link('tag/{id}', array($tag->id)) ?>"><?php echo $tag->tag?></a>
        <?php endforeach;?>
    </div>
</div>