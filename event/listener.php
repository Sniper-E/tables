<?php
/**
* @ package phpBB Extension - Tables
* @ copyright (c) 2015 Sniper_E - http://sniper-e.com
* @ license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace sniper\tables\event;

/**
* Event listener
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => 'load_language_on_setup',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'sniper/tables',
			'lang_set' => 'tables',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
