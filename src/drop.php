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
		echo PHP_EOL, PHP_EOL;
		echo "/// Arg No {$key}", PHP_EOL;
		echo str_repeat("/", 72), PHP_EOL, PHP_EOL;
		var_dump($value);
		echo PHP_EOL;
	}
	$output = ob_get_clean();

	if(0 === stripos(php_sapi_name(), "cli")){
		echo $output, PHP_EOL;
	}else{
		echo "<pre>{$output}</pre>", PHP_EOL;
	}

	exit(1);

}

/**
 * function to parse a variable number of args into a more descriptive format and
 * display it
 * @author @henderjon / @donatj
 * @return
 */

function dropv(){

	ob_start();
	foreach(func_get_args() as $key => $value){
		echo PHP_EOL, PHP_EOL;
		echo "/// Arg No {$key}", PHP_EOL;
		echo str_repeat("/", 72), PHP_EOL, PHP_EOL;
		print_r($value);
		echo PHP_EOL;
	}
	$output = ob_get_clean();

	if(0 === stripos(php_sapi_name(), "cli")){
		echo $output, PHP_EOL;
	}else{
		echo "<pre>{$output}</pre>", PHP_EOL;
	}

	exit(1);

}
