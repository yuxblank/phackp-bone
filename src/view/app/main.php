<?php
use yuxblank\phackp\core\view;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pHackp-bone</title>
    <link rel="stylesheet" type="text/css"
          href="<?php echo \yuxblank\phackp\core\Application::getAppUrl() . '/resource/css/application.css'; ?>"></link>
</head>
<body>

<div class="main-container">
    <?php $this->content()?>



    <?php
    //$this->hook('FOOTER', array('message' => $message));
    $this->hook('FOOTER', array('message' => 'pHackp-bone app version: '.\yuxblank\phackp\core\Application::getConfig()['APP_VERSION']));
    ?>
</div>

</body>
</html>

