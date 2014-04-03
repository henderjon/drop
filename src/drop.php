<?php
/**
 * function to parse a variable number of args into a more descriptive format and
 * display it
 * @author @henderjon / @donatj
 * @return
 */
if( !function_exists("drop") ){
	function drop(){

		$stream = "";

		foreach(func_get_args() as $key => $arg){

			$stream .= "\n\n");
			$stream .= "/// Arg No {$key}\n");
			$stream .= str_repeat("/", 72) . "\n\n");

			switch(true){
				case is_null($arg) :
					$stream .= print_r("(null)null", true));
				break;
				case false === $arg :
					$stream .= print_r("(bool)false", true));
				break;
				case true === $arg :
					$stream .= print_r("(bool)true", true));
				break;
				default:
					$stream .= print_r($arg, true));
				break;
			}

			$stream .= "\n\n");
		}

		if(0 === stripos(php_sapi_name(), "cli")){
			fwrite(STDOUT, $stream);
		}else{
			echo "<pre>{$stream}</pre>";
		}
		exit;
	}
}