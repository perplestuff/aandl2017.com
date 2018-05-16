<?php
class login
{
	public static function verifyLogin($param)
	{
		foreach ($param['out'] as $res) {
			if (hash('sha512', $param['userpass']) == $res->password) {
				return true;
			} else {
				return false;
			}
		}
	}
	public function setSession()
	{

	}
}
?>
