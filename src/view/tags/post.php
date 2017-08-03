<?php
?>
<?php if ($_post): ?>
  <div class="post">
    <header>
      <h1><?php echo $_post->title ?></h1>
      <h3 style="float:right"><?php echo $_post->date_created ?></h3>
    </header>
    <p><?php echo $_post->content ?></p>

    <div class="tags">
        <?php foreach ($_post->tags() as $tag): ?>
          <a href="<?php $this->router->link('tag/{id}', array($tag->id)) ?>"><?php echo $tag->tag ?></a>
        <?php endforeach; ?>
    </div>
    <div class="comments">
      <header>
      <h3>comments</h3>
      </header>
        <?php foreach ($_post->comments() as $comment): ?>
          <div class="comment">
            <p><?php echo htmlspecialchars_decode($comment->text) ?></p>
          </div>
        <?php endforeach; ?>
    </div>
    <div class="add-comment">
      <h3>Add comment</h3>
      <form method="post">
        <input type="hidden" name="post_id" value="<?php echo $_post->id ?>"/>
        <textarea title="comment_text" class="form-control" name="comment_text"> </textarea>
        <button class="form-control btn btn-primary " type="submit">comment</button>
      </form>
    </div>
  </div>
<?php else: ?>

  <div><p>The post does not exist.</p></div>

<?php endif; ?>

<script>
    $(document).ready(function () {

        $('form').submit(function () {
            var formData = $('form').serialize();
            event.preventDefault();
            $.ajax({
                dataType: 'json',
                data: formData,
                type: "POST",
                url: "/comment",
                success: onSuccess
            });

            function onSuccess(data) {
                console.info("Ok!");
                $('form').find("input[type=text], textarea").val("");
                $('.comments').append(  '<div class="comment"> <p>'+data.text+'</p></div>');
            }
        })


    });
</script>

