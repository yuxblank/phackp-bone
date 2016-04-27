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
    <?php $this->content(array('message'=>$message))?>



    <?php
    $this->hook('FOOTER', array('message' => $message));
    ?>
</div>

</body>
</html>

