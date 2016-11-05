<?php
/**
*
* Tables BBCode Extension
* @author (c) 2015 Sniper_E - http://www.sniper-e.com
*
* @license		GNU General Public License, version 2 (GPL-2.0)
*
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
