<?php
function contador_sem_static()
{
    if (empty($cont)) {
		$cont = 1;
	} else {
		$cont++; # $cont = $cont + 1;
	};
    echo "Esta é a chamada: $cont <br>";
}
function contador()
{
    static $cont;
	if (empty($cont)) {
		$cont = 1;
	} else {
		$cont++;
	};
    echo "Esta é a chamada: $cont <br>";
}
echo "chamando função contador sem static";
contador_sem_static();
contador_sem_static();
contador_sem_static();
echo "chamando função contador com static";
contador();
contador();
contador();
?>
