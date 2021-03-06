<?php  

/**
 * @package    ilmuberbagi / 2016
 * @author     Sabbana
 * @copyright  Ilmu Berbagi 
 * @version    1.0
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function gen_url_old($str){
	return strtolower(str_replace(array(' ','"',"'",')','('),'-', $str));
}

function gen_url($str){
   $str = str_replace(array('(',')'),'', $str);
   $str = preg_replace('~[^\\pL0-9_]+~u', '-', $str);
   $str = trim($str, "-");
   $str = iconv("utf-8", "us-ascii//TRANSLIT", $str);
   $str = strtolower($str);
   $str = preg_replace('~[^-a-z0-9_]+~', '', $str);
   return $str;
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

function set_image($url, $param = null){
	if($url != null){
		if($param == "thumb"){
			$res = str_replace('uploads/','uploads/thumbs/', $url);
		}else if($param == "profile-thumb"){
			$res = str_replace('/foto/','/thumbs/', $url);
		}else
			$res = $url;
	}else
		$res = base_url().'assets/img/default.jpg';
	
	return $res;
}

function first_paragraph($string){
	$string = substr($string,0, strpos($string, "</p>")+4);
	return $string;
}

function create_navigate($page, $offset, $count){
	
}


?>