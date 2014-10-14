<?php
/**
 * function to parse a variable number of args into a more descriptive format and
 * display it
 * @author @henderjon / @donatj
 * @return
 */

function drop(){

	$stream = "";

	foreach(func_get_args() as $key => $arg){

		$stream .= "\n\n";
		$stream .= "/// Arg No {$key}\n";
		$stream .= str_repeat("/", 72) . "\n\n";
		$stream .= var_export($arg, true);
		$stream .= "\n\n";
	}

	if(0 === stripos(php_sapi_name(), "cli")){
		fwrite(STDOUT, $stream);
	}else{
		echo "<pre>{$stream}</pre>";
	}

	exit(1);

}
