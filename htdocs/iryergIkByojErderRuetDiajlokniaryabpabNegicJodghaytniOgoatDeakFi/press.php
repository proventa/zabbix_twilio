<?php header('Content-Type: application/xml'); ?>
<?php echo'<?xml version="1.0" encoding="UTF-8"?>'; ?>
<Response>
    <?php
      if(isset($_REQUEST['Digits']) && $_REQUEST['Digits'] == '1'){
    ?>
      <Say voice="woman">Thanks for confirming! goodbye!</Say>
      <Hangup/>
    <?php
      }else{
    ?>
      <Redirect method="GET">call.php?message=<?= urlencode($_REQUEST['message']) ?></Redirect>
    <?php
      }
    ?>
</Response>

