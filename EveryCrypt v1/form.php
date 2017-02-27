<h1>EncryptEver - Encrypt all!</h1>
<form method="POST" action="form_ok.php">
	<p>Text: <input type="text" name="text" id="text"></p>
	<p>Times of recrypting (raccomanded > 15): <input type="number" name="times" id="times"></p>
	<p>Algorithm (MD5 or SHA512): <input type="text" name="algorithm" id="algorithm"></p>
	<p><input type="submit" value="CRYPT!"></p>
</form>
<?php include("utils/watermark.php"); ?>
