<?php

//test php
function Saluti($nome){
//aggiungo una formattazione
	return "Ciao <strong>". $nome ."</strong> !";
}

 echo Saluti("Poldo");

//ciao nginx
?>
<form>
 <label>Nome:</label>
 <input type="text" name="nome">
 <input type="submit" value="INVIA">
</form>
