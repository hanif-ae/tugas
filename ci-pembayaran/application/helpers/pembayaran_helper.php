<?php
if(!function_exists('listLevel')){
	function listLevel($a){
	switch ($a){
	case '1'  :
		return "Administrator";
		break;
		case  '2' :
		return "Petugas";
		default :
		return "None";
		break;
	}
	}
}