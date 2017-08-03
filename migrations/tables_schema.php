<?php
/**
 * @ package phpBB Extension - Tables
 * @ copyright (c) 2015 Sniper_E - http://sniper-e.com
 * @ license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

namespace sniper\tables\migrations;

class tables_schema extends \phpbb\db\migration\migration
{
	public function update_schema()
	{
		return 	array(
			'add_columns' => array(
				$this->table_prefix . 'users' => array(
					'use_tables_bbcode'	=> array('BOOL', 0),
				),
			),
		);
	}

	public function revert_schema()
	{
		return 	array(
			'drop_columns' => array(
				$this->table_prefix . 'users' => array(
					'use_tables_bbcode',
				),
			),
		);
	}
}
