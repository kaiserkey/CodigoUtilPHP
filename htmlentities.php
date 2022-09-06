<?php

/**
 * Esta función es idéntica a htmlspecialchars() en todos los aspectos, 
 * excepto que con htmlentities(), todos los caracteres que tienen su 
 * equivalente HTML son convertidos a estas entidades.
 */

$str = "A 'quote' is <b>bold</b>";

// Produce: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);

// Produce: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);
?>