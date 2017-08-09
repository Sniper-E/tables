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
	/** @var \phpbb\user */
	protected $user;
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\auth\auth */
	protected $auth;
	/** @var \phpbb\config\config */
	protected $config;
	/** @var \phpbb\controller\helper */
	protected $helper;
	/** @var \phpbb\extension\manager */
	protected $extension_manager;

	/**
	* Constructor
	*
	* @param \phpbb\user				$user
	* @param \phpbb\template\template	$template
	* @param \phpbb\auth\auth			$auth
	* @param \phpbb\config\config		$config
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\extension\manager 	$extension_manager
	*/
	public function __construct(
		\phpbb\user $user,
		\phpbb\template\template $template,
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\controller\helper $helper,
		\phpbb\extension\manager $extension_manager)
	{
		$this->user				= $user;
        $this->template         = $template;
		$this->auth				= $auth;
		$this->config				= $config;
		$this->helper 				= $helper;
		$this->extension_manager	= $extension_manager;
	}

	public static function getSubscribedEvents()
	{
		return array(
			'core.permissions'					=> 'permissions',
			'core.user_setup'					=> 'load_language_on_setup',
			'core.page_header_after'			=> 'page_header_after',
		);
	}

	public function permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_use_tables_bbcode'] = array('lang' => 'ACL_U_USE_TABLES_BBCODE', 'cat' => 'post');
		$event['permissions'] = $permissions;
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

	public function page_header_after($event)
	{
		$this->template->assign_vars(array(
			'U_USE_TABLES_BBCODE'			=> $this->auth->acl_get('u_use_tables_bbcode') ? true : false,
		));
	}
}
