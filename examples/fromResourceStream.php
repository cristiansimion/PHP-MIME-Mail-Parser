<?php

require_once('MimeMailParser.class.php');

$Parser = new MimeMailParser();
$Parser->setStream(fopen($path));

$to = $Parser->getHeader('to');
$from = $Parser->getHeader('from');
$subject = $Parser->getHeader('subject');
$text = $Parser->getMessageBody('text');
$html = $Parser->getMessageBody('html');
$attachments = $Parser->getAttachments();

?>