<?php
/**
 * Home page.
 * 
 * @file
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt GNU General Public License
 * @copyright	2008 David Singer
 * @author		David Singer <david@ramaboo.com>
 * @version		1.0.2
 */

require_once '../includes/lib.php';

$options = array(
	'password16' => 'Password',
	'md5' => 'MD5',
	'sha1' => 'SHA-1',
	'sha256' => 'SHA-256',
	'sha512' => 'SHA-512',
	'wpa2' => 'WPA2 Key',
	'aes128' => 'AES 128-bit',
	'aes256' => 'AES 256-bit',
	'uuid' => 'UUID v4');

$length = strlen(get_msg());
$cow_msg = get_msg();

$cow = '&nbsp;';
for ($i = 0; $i < $length + 2; $i++) {
	$cow .= '_';
}
$cow .= '&nbsp;<br /><&nbsp;' . $cow_msg . '&nbsp;><br />&nbsp;';
for ($i = 0; $i < $length + 2; $i++) {
	$cow .= '-';
}

$cow .= '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;^__^<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\&nbsp;&nbsp;(oo)\_______<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(__)\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)\/\<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||----w&nbsp;|<br  />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||<br />';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head profile="http://www.w3.org/2005/11/profile">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="copyright" content="Copyright 2008-2011 David Singer" />
	<meta name="author" content="David Singer david@ramaboo.com" />

	<title>Password Cow</title>

	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
	<link rel="icon" type="image/png" href="/images/favicon.png" />
	<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/cow.css" type="text/css" media="screen" />
</head>
<body>
	<div id="global" class="clearfix">
		<div id="cow" class="clearfix">
			<p><?php echo $cow; ?></p>
		</div>
		<div id="options" class="clearfix">
			<form method="post" action="/">
				<fieldset>
					<select name="function">
						<?php
							foreach ($options as $key => $value) {
								if (get_key() == $key) {
									echo "<option selected=\"selected\" value=\"{$key}\">{$value}</option>";
								} else {
									echo "<option value=\"{$key}\">{$value}</option>";
								}
							}
						?>
					</select>
					<input type="submit" value="Go!" />
				</fieldset>
			</form>
		</div>
		<div id="quote" class="clearfix">
			<p>
				Freedom is the precondition for acquiring the maturity for freedom, 
				not a gift to be granted when such maturity is achieved. &mdash; Immanuel Kant
			</p>
		</div>
		<div id="copyright" class="clearfix">
			<p>
				&copy; 2008-2011 <a href="http://ramaboo.com/david">David Singer</a>.
			</p>
		</div>
	</div>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-27797225-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>
