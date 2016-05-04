<?php
	// connect to the ASP.NET web service
		$client = new SoapClient("http://captchaservice.rentmanager.com/CaptchaService.asmx?WSDL");

		// create the array of parameters for the Create web method;
		// options that are not explicitly specified will automatically
		// use the default value on the server
		$captchaParams = array(
			   'BackColor' => 'white', // the background color of the image canvas
			   'BackgroundNoise' => 'Low', // the amount of splotching on the image
			   'FontName' => 'Times New Roman', // the font used to display the text
			   'FontSize' => 29, // the font point size
			   'FontStyle' => 'Bold', // the font style (e.g. bold, italic, underline)
			   'FontWarp' => 'Low', // the amount of warping applied to the text in the image
			   'ForeColor' => 'black', // the color to use for the text
			   'LineNoise' => 'NotSet', // the amount of random lines to overlay on the image
			   'NoiseColor' => 'white', // the color for noise (e.g. lines and splotching)
			   'TextLength' => 6 // the number of characters to display
			   );

		// wrap these parameters in an object named "parameters" to
		// match the argument name as defined in the WSDL
		$CreateParameters = array('parameters' => $captchaParams);

		// create the CAPTCHA image on the server
		$CreateResult = $client->Create($CreateParameters);

		// retrieve the key returned from the web service result
		$key = $CreateResult->CreateResult;

		// create the parameters for the GetImageUrl method
		$GetImageUrlParameters = array('key' => $key);
		// call the GetImageUrl web service method
		$GetImageUrlResult = $client->GetImageUrl($GetImageUrlParameters);
		// get the image url from the service result
		$url = $GetImageUrlResult->GetImageUrlResult;
	
	
	
	
	
	
	?>