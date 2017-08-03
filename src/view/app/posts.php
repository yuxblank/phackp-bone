<?php
?>
<?php if ($posts): ?>
    <?php foreach ($posts as $post): ?>
        <?php $this->hook('POST', ['post' => $post])?>
<?php endforeach; ?>
<?php else: ?>

    <div><p>Sorry, no posts found...</p></div>

<?php endif; ?>

