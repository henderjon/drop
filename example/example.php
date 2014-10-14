<?php

require "vendor/autoload.php";

$array = array(
	true,
	false,
	null,
	"string",
	123,
	array(
		true,
		false,
		null,
		"string",
		123,
	),
);

drop($array);