<?php header('Content-Type: application/xml'); ?>
<?php echo'<?xml version="1.0" encoding="UTF-8"?>'; ?>
<Response>
    <Say voice="woman" language="de"><?= urldecode($_REQUEST['message']) ?></Say>
    <Gather timeout="50" numDigits="1" action="press.php?message=<?=urlencode($_REQUEST['message'])?>" method="GET">
        <Say voice="woman" language="de" loop="0">Zum Bestätigen drücken Sie bitte die 1. Zum Wiederholen eine beliebige andere Taste.</Say>
    </Gather>
</Response>

