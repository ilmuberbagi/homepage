<?php  

/**
 * @package    ilmuberbagi / 2016
 * @author     Sabbana
 * @copyright  Ilmu Berbagi 
 * @version    1.0
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function gen_url($str){
	return strtolower(str_replace(' ','-', $str));
}

function get_image_from_content($html){
	preg_match_all('/<img[^>]+>/i',$html, $result);
	$res = '';
	if(!empty($result[0])){
		$res = $result[0][0]; 
		return str_replace('img', 'img class="img-responsive"', $res);
	}else{
		return '';
	}
}

function headline($txt){
	$str = strip_tags($txt);
	return substr($str, 0, 100).' ...';
}


?>