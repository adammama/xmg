<?php
function p($var)
{
    if (is_bool($var)) {
        var_dump($var);
    } elseif (is_null($var)) {
        var_dump(null);
    } else {
        echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#f5f5f5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" .print_r($var, true) . "</pre>";
    }
}

function post($name,$default=false,$filter=false)
{
	if(isset($_POST[$name])){
		if($filter){
			switch ($filter){
				case 'int':
					if(is_numeric($_POST[$name])){
						return $_POST[$name];
					}else{
						return $default;
					}
					break;
				default:;
			}
		}else{
			return $default;
		}
	}
}
function get($name,$default=false,$filter=false)
{
	if(isset($_GET[$name])){
		if($filter){
			switch ($filter){
				case 'int':
					if(is_numeric($_GET[$name])){
						return $_GET[$name];
					}else{
						return $default;
					}
					break;
				default:;
			}
		}else{
			return $default;
		}
	}
}
function jump($url)
{
	header('location:'.$url);
	exit();
}