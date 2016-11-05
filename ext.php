<?php
/**
*
* Tables BBCode Extension
* @author (c) 2015 Sniper_E - http://www.sniper-e.com
*
* @license		GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace sniper\tables;

/**
* Extension class for custom enable/disable/purge actions
*/

class ext extends \phpbb\extension\base
{
	/**
	* Enable extension if phpBB version requirement is met
	*
	* @return bool
	* @access public
	*/
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return version_compare($config['version'], '>=3.1.2-RC1');
	}
}