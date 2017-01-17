<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/url_helper.html
 */

// ------------------------------------------------------------------------

if ( ! function_exists('read_more'))
{
	/**
	 * Site URL
	 *
	 * Create a local URL based on your basepath. Segments can be passed via the
	 * first parameter either as a string or an array.
	 *
	 * @param	string	$uri
	 * @param	string	$protocol
	 * @return	string
	 */
	function read_more($string,$limit=100)
	{
		$length = strlen(strip_tags($string));
		if ($length>$limit){
			return substr($string,0,$limit).' . . . ';
		}
		else {
			return $string;
		}
	}
}


if ( ! function_exists('seo'))
{
	function seo($s) {
	    $c = array (' ');
	    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
	    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
	    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
	    return $s;
		}
}

if ( ! function_exists('match'))
{
	function match($val,$val2,$return){
		if ($val==$val2){
			return $return;
		}
	}
}

if( ! function_exists('convertDateTime'))
{
	function convertDateTime($dateTime){
		list($date, $time) = explode(' ', $dateTime);

		$bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

		list($tahun, $bul, $tanggal) = explode('-', $date);


		list($jam, $menit, $detik) = explode(':', $time);

		//return $bulan[intval($bul-1)];
		// if($date == date('Y-m-d')){
		// 	return $jam.':'.$menit;
		// }else{
			return $tanggal.'-'.$bulan[intval($bul-1)].'-'.$tahun.' '.$jam.':'.$menit;
		// }
	}
}

if (!function_exists('img_holder')){
	function img_holder($type=null){
		switch ($type) {
			case 'food':
				return 'http://www.jamesbeard.org/sites/default/files/styles/recipe_335x285/public/default_images/chef_placeholder.jpg?itok=T-01cH_H';
				break;
			case 'profile':
			    return 'https://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png';
				break;
			default:
				return 'http://www.euractiv.com/wp-content/themes/euractiv_base/media/placeholder.png';
				# code...
				break;
		}
	}
}

if (!function_exists('check_login')){
	function check_login(){
		if(!$_SESSION['username']){
			redirect(base_url().'admin');
		}
	}
}

if (!function_exists('tgl_indo')){
	function tgl_indo($tgl){
     	$tanggal = substr($tgl,8,2);
     	switch (substr($tgl,5,2)){
					case '01':
						$bulan= "Januari";
						break;
					case '02':
						$bulan= "Februari";
						break;
					case '03':
						$bulan= "Maret";
						break;
					case '04':
						$bulan= "April";
						break;
					case '05':
						$bulan= "Mei";
						break;
					case '06':
						$bulan= "Juni";
						break;
					case '07':
						$bulan= "Juli";
						break;
					case '08':
						$bulan= "Agustus";
						break;
					case '09':
						$bulan= "September";
						break;
					case '10':
						$bulan= "Oktober";
						break;
					case '11':
						$bulan= "November";
						break;
					case '12':
						$bulan= "Desember";
						break;
				}

		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun;
     }
}

if (!function_exists('yanglalu')){
	date_default_timezone_set('Asia/Jakarta');
	function timeInSentence($val, $lang = 'id', $word = 0, $x = 0, $res = array()) {

	  $y = array(31536000, 2592000, 604800, 86400, 3600, 60, 1);
	  $l['id'] = array('tahun', 'bulan', 'minggu', 'hari', 'jam', 'menit', 'detik');
	  $l['en'] = array('year', 'month', 'week', 'day', 'hour', 'minute', 'second');

	  $end['id'] = 'yang lalu';
	  $end['en'] = 'ago';

	  while($x < count($y)) {

	    $a = $val % $y[$x];
	    if($a != 0) {
	      $res[$l[$lang][$x]] = floor($val/$y[$x]);
	      $val = $a;
	    }
	    else {
	       $res[$l[$lang][$x]] = $val/$y[$x];
	       $val = 0;
	    }

	    return timeInSentence( $val, $lang, $word, $x + 1, $res);
	  }

	  $hasil = '';
	  if($word == 0)
	    $word = count($l[$lang]-1);

	  // if($lang == 'id')
	    // $hasil = 'sekitar ';
	  // if($lang == 'en')
	    // $hasil = 'about ';

	  $i = 0;

	  foreach($res as $k => $v) {
	    if($v > 0) {
	      if($i == $word)
	        break;

	      $res2[$k] = $v;
	      $key[$i] = $k;
	      $i++;
	    }
	  }

	  $bates = count($res2);
	  for($i=0;$i<$bates;$i++) {
	    $angka = $res2[$key[$i]];
	    $kata = $key[$i];

	    if($lang == 'en' && $angka > 1)
	      $kata .= 's';

	    if($i+1 == $bates && $word != 1) {
	      if($lang == 'en')
	        $angka = 'and '.$angka;

	      if($lang == 'id')
	        $angka = 'dan '.$angka;
	    }
	    $hasil .= $angka.' '.$kata.' ';
	  }

	  return trim($hasil.$end[$lang]);
	}
}

function slugify($text){
		$text = preg_replace('~&~', 'dan', $text);

		// replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicated - symbols
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
}

function month_3_char($month){
	$karakter3 = [
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'Mei',
		'Jun',
		'Jul',
		'Ags',
		'Sep',
		'Okt',
		'Nov',
		'Des'
	];

	return $karakter3[$month];
}

// ------------------------------------------------------------------------
