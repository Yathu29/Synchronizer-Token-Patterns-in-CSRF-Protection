<?php

class csrf_token
{

	public static function check_csrf_token($csrf_token,$session_identifier)
	{
	
	
		
		$csrf_file = fopen("token.txt", "r") or die("Unable to open file");
		list($token,$session_id) = explode(",",chop(fgets($csrf_file)),2);
		fclose($csrf_file);
		if($token == $csrf_token)
		{
			if($session_identifier == $session_id )
			{
				return true;
			}
		}
	}
	
}

?>