<?php
/**
 * Library to get passwords.
 * 
 * @file
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt GNU General Public License
 * @copyright	2008 David Singer
 * @author		David Singer <david@ramaboo.com>
 * @version		1.0.2
 */

class Charset {
	/**
	 * Alphanumeric characters.
	 */
	public static $alpha_num = '0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	
	/**
	 * ASCII printable characters.
	 * 
	 * Characters 33 - 126. Does not include space.
	 */
	public static $printable = '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
	
	/**
	 * Hexadecimal characters.
	 */
	public static $hex = '0123456789abcdef';
	
}

function get_key() {
	if (!empty($_POST) && isset($_POST['function'])) {
		$key = $_POST['function'];
	} else {
		
		$key = 'hello';
	}
	return $key;
}

function get_msg() {
	switch (get_key()) {
		case 'md5':
			$msg = get_md5();
			break;
			
		case 'sha1':
			$msg = get_sha1();
			break;
			
		case 'sha256':
			$msg = get_sha256();
			break;
			
		case 'sha512':
			$msg = get_sha512();
			break;
			
		case 'wpa2':
			$msg = get_wpa2();
			break;
			
		case 'aes128':
			$msg = get_aes128();
			break;
			
		case 'aes256':
			$msg = get_aes256();
			break;
			
		case 'password16':
			$msg = get_password(16, Charset::$alpha_num);
			break;
			
		case 'hello':
			$msg = 'Welcome to Password Cow!';
			break;
		case 'uuid':
			$msg = get_uuid();
			break;
			
		default:
			$msg = 'Moo!';
	}
	return $msg;
}

function get_password($length, $chars) {
	$i = 0;
	$password = '';
	while ($i < $length) {
		$pos = mt_rand(0, strlen($chars) - 1);
		$chars = str_shuffle($chars); // extra randomness
		$char = $chars[$pos];
		$password .= $char;
		$i++;
	}
	return $password;
}

function get_md5() {
	return hash('md5', uniqid(mt_rand(), true));
}

function get_sha1() {
	return hash('sha1', uniqid(mt_rand(), true));
}

function get_sha256() {
	return hash('sha256', uniqid(mt_rand(), true));
}

function get_sha384() {
	return hash('sha384', uniqid(mt_rand(), true));
}

function get_sha512() {
	return hash('sha512', uniqid(mt_rand(), true));
}

function get_wpa2() {
	return get_password(63, Charset::$printable);
}

function get_aes128() {
	return get_password(32, Charset::$hex);
}

function get_aes256() {
	return get_password(64, Charset::$hex);
}

/**
 * Generates a Universally Unique IDentifier, version 4.
 * 
 * @see http://www.ietf.org/rfc/rfc4122.txt
 * @see http://en.wikipedia.org/wiki/UUID
 * @return string A UUID, made up of 32 hex digits and 4 hyphens.
 */
function get_uuid() {
	return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
		mt_rand( 0, 0x0fff ) | 0x4000,
		mt_rand( 0, 0x3fff ) | 0x8000,
		mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ));
}
