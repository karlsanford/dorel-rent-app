<?php
// php captcha error postback
$strScript = "<script>\r\n";
foreach($_POST as $key => $value)
{
	if ($key == "errormessage") {
		$strScript .= "window.location.hash='captcha';\r\n";
		$strScript .= "document.getElementById('captchaerror').style.visibility = 'visible';\r\n";
	}
	else {
		$strScript .= "if (document.forms[0]['" . $key . "'].value != null && document.forms[0]['" . $key . "'].value.length == 0) {\r\n";
		$strScript .= "\tdocument.forms[0]['" . $key . "'].value = '" . $value . "';\r\n}\r\n";
	}
}
$strScript .= "</script>";
echo $strScript;
?>