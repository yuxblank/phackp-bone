<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pHackp-bone</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $APP_URL.'/resource/css/application.css'; ?>"> </link>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<div class="main-container container">
    <div class="row col-xs-12">
    <?php
    $this->hook('NAVBAR');
    ?>
    </div>
    <div class="row col-xs-12" >
    <?php $this->content()?>
    </div>


    <?php
    //$this->hook('FOOTER', array('message' => $message));
    $this->hook('FOOTER', array('message' => 'pHackp-bone app version: '. $APP_VERSION));
    ?>
</div>

</body>
</html>

