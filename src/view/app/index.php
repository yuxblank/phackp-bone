<header>
<div class="welcomebox">
    <h1><?php echo $message ?></h1>
    <a href="<?php echo yuxblank\phackp\core\Router::link('blog/{id}/prova/{n}', array(1,'valore'))?>">Link</a>
    <a href="<?php echo yuxblank\phackp\core\Router::link('blog/')?>">Link</a>
</div>
</header>