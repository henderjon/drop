<?php
/**
 * function to parse a variable number of args into a more descriptive format and
 * display it
 * @author @henderjon / @donatj
 * @return
 */

function drop(){

	ob_start();
	foreach(func_get_args() as $key => $value){
		echo "\n\n";
		echo "/// Arg No {$key}\n";
		echo str_repeat("/", 72) . "\n\n";
		var_dump($value);
		echo "\n";
	}
	$output = ob_get_clean();

	if(0 === stripos(php_sapi_name(), "cli")){
		echo $output;
	}else{
		echo "<pre>{$output}</pre>";
	}

	exit(1);

}
