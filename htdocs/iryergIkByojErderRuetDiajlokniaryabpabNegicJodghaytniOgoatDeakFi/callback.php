<?php header('Content-Type: application/xml'); ?>
<?php echo'<?xml version="1.0" encoding="UTF-8"?>'; ?>
<Response>
    <?php
      if($_REQUEST['AnsweredBy'] == 'machine' || 
         $_REQUEST['CallStatus'] == 'no-answer' || 
         $_REQUEST['CallStatus'] == 'busy' ||
         $_REQUEST['DialCallStatus'] == 'no-answer' || 
         $_REQUEST['DialCallStatus'] == 'busy' ){
    ?>
   <!-- <Dial action="call.php?message=<?= urlencode($_REQUEST['message']) ?>"><?= $_REQUEST['To'] ?></Dial> -->
    <?php
      }
    ?>
</Response>

