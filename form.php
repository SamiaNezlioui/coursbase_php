<!-- formulaire La method GET=> Récuperer des données & POST => pour envoyer des données-->

<form action="form.php" method="GET">
Name: <input type="text" name="f_name">
<br>
Last: <input type="text" name="lname">

<input type="submit">
</form>

<?php

echo $_GET["f_name"];
echo $_GET["lname"];

?>