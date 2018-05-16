<?php

class connect
{
	public static function make($conf)
	{
		try {
			return new PDO(
				$conf['connection'].';dbname='.$conf['name'],
				$conf['username'],
				$conf['password'],
				$conf['options']
			);
		} catch (PDO $e) {
			die($e->GetMessage());
		}
	}
}

 ?>
