<?php
?>
<?php if ($post): ?>
<div class="post">
  <header>
    <h1><?php echo $post->getTitle() ?></h1>
    <h3 style="float:right"><?php echo $post->date_created?></h3>
  </header>
    <p><?php echo $post->getContent()?></p>

    <div class="tags">
        <?php foreach ($post->tags() as $tag): ?>
        <a href="<?php $this->router->link('tag/{id}', array($tag->id)) ?>"><?php echo $tag->tag?></a>
        <?php endforeach;?>
    </div>
  <div class="add-comment">
    <h3>Add comment</h3>
    <form method="post" action="/comment">
      <input type="hidden" name="post_id" value="<?php echo $post->getId() ?>">
      <textarea class="form-control" name="comment_text" maxlength="200"></textarea>
      <button class="form-control btn btn-primary " type="submit">comment</button>
    </form>
  </div>
</div>
<?php else: ?>

    <div><p>The post does not exist.</p></div>

<?php endif; ?>

