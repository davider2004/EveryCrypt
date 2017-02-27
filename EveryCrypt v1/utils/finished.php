<?php
$extract = $crypted;
$times_a = $times;
$algorithm1 = $algorithm;
$text1 = $text;
?>

<h1>EveryCrypt crypted your string!!</h1>
<p>Now you have this code that is impossible to be decrypted!</p>
<p></p>
<p>Original text: <b><i><?php print $text; ?></i></b></p>
<p>Times: <b><i><?php print $times_a; ?></i></b></p>
<p>Used algorithm: <b><i><?php print $algorithm1 ?></i></b></p>
<p><b>Encrypted string: <i><?php print $extract; ?></i></b></p>
<p></p>
<?php include("utils/watermark.php");
