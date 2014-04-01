<?php
/**
 * function to parse a variable number of args into a more descriptive format and
 * display it
 * @return
 */
if( !function_exists("drop") ){
	function drop(){

		$stream = fopen("php://memory", "rw");

		foreach(func_get_args() as $key => $arg){

			fwrite($stream, "\n\n");
			fwrite($stream, "/// Arg No {$key}\n");
			fwrite($stream, str_repeat("/", 72) . "\n\n");

			switch(true){
				case is_null($arg) :
					fwrite($stream, print_r("(null)null", true));
				break;
				case false === $arg :
					fwrite($stream, print_r("(bool)false", true));
				break;
				case true === $arg :
					fwrite($stream, print_r("(bool)true", true));
				break;
				default:
					fwrite($stream, print_r($arg, true));
				break;
			}

			fwrite($stream, "\n\n");
		}

		if(0 === stripos(php_sapi_name(), "cli")){
			fwrite(STDOUT, stream_get_contents($stream, -1, 0));
		}else{
			printf("<pre>%s</pre>", stream_get_contents($stream, -1, 0));
		}
		exit;
	}
}