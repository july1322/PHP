<?php

	if ($_POST) {
	    echo '<pre>';
	    echo htmlspecialchars(print_r($_POST, true));
	    echo '</pre>';
}

?>

<?php
  setcookie("MiCookie[Edad]", '18', time()+5);
  setcookie("MiCookie[Nombre]", 'July', time()+5);
?>

<form action="" method="post">

	    Nombre:  <input type="text" name="personal[nombre]" /><br />
	    Email:   <input type="text" name="personal[email]" /><br />
	    Cerveza: <br/>

	    <select multiple name="cerveza[]">
	        <option value="Reds">Reds</option>
	        <option value="Aguila Light">Aguila Light</option>
	        <option value="Club"> Club </option>
	    </select><br />

	    <input type="submit" value="¡enviarme!" />


</form>


