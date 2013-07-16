<?php
// Regular way to pull the email
$fd = fopen("php://stdin", "rb");
$data = ""; // This will be the variable holding the data.
while (!feof($fd)) {
    $data .= fread($fd, 1024);
}
fclose($fd);

// Include the library
require_once('MimeMailParser.class.php');


// Start parsing
$Parser = new MimeMailParser();
$Parser->setText($data);

$to = $Parser->getHeader('to');
$from = $Parser->getHeader('from');
$subject = $Parser->getHeader('subject');
$text = $Parser->getMessageBody('text');
$html = $Parser->getMessageBody('html');
$attachments = $Parser->getAttachments();

?>