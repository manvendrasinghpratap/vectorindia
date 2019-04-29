<?php

 function encodeParam($param)
	{
		$result = '';
		if(!empty($param))
			$result = urlencode(base64_encode($param));
		return $result;
	}

	function decodeParam($param = NULL)
	{
		if(!empty($param))
			return base64_decode(urldecode($param));
		else
			return 'Wrong input key.';
	}
