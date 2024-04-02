<?php
/**
* @ package phpBB Extension - Tables
* @ copyright (c) 2015 Sniper_E - http://sniper-e.com
* @ license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace sniper\tables;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], '3.3.0', '>=');
	}
}
