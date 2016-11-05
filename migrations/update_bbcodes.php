<?php
/**
*
* Tables BBCode Extension
* @author (c) 2015 Sniper_E - http://www.sniper-e.com
*
* @license		GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace sniper\tables\migrations;

class update_bbcodes extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'update_tables_bbcodes'))),

			// Stop tracking the version number in the db
			array('config.remove', array('tables_version')),
		);
	}

	public function update_tables_bbcodes()
	{
		$bbcode_data = array(
			'table=' => array(
				'bbcode_helpline'	=> '',
				'bbcode_match'		=> '[table={NUMBER} {SIMPLETEXT}]{TEXT}[/table]',
				'bbcode_tpl'		=> '<div class="forumbg forumbg-table tables1 tbg {SIMPLETEXT}" style="width: {NUMBER}%"><div class="inner"><table class="table1">{TEXT}</table></div></div>',
			),
			'tbody' => array(
				'bbcode_helpline'	=> '',
				'bbcode_match'		=> '[tbody]{TEXT}[/tbody]',
				'bbcode_tpl'		=> '<tbody>{TEXT}</tbody>',
			),
			'td=' => array(
				'bbcode_helpline'	=> '',
				'bbcode_match'		=> '[td]{TEXT}[/td]',
				'bbcode_tpl'		=> '<td>{TEXT}</td>',
			),
			'th=' => array(
				'bbcode_helpline'	=> '',
				'bbcode_match'		=> '[th={NUMBER} {IDENTIFIER}]{TEXT}[/th]',
				'bbcode_tpl'		=> '<th style="width: {NUMBER}%;text-align: {IDENTIFIER}">{TEXT}</th>',
			),
			'thead' => array(
				'bbcode_helpline'	=> '',
				'bbcode_match'		=> '[thead]{TEXT}[/thead]',
				'bbcode_tpl'		=> '<thead>{TEXT}</thead>',
			),
			'tr' => array(
				'bbcode_helpline'	=> '',
				'bbcode_match'		=> '[tr={SIMPLETEXT}]{TEXT}[/tr]',
				'bbcode_tpl'		=> '<tr class="{SIMPLETEXT}">{TEXT}</tr>',
			),
			'center' => array(
				'bbcode_helpline'	=> '',
				'bbcode_match'		=> '[center]{TEXT}[/center]',
				'bbcode_tpl'		=> '<div style="width: 100%;text-align: center">{TEXT}</div>',
			),
			'align=' => array(
				'bbcode_helpline'	=> '',
				'bbcode_match'		=> '[align={IDENTIFIER}]{TEXT}[/align]',
				'bbcode_tpl'		=> '<span style="text-align: {IDENTIFIER}; display:block;">{TEXT}</span>',
			),
		);

		global $request, $user;
		$acp_manager = new \sniper\tables\core\acp_manager($this->db, $request, $user, $this->phpbb_root_path, $this->php_ext);
		$acp_manager->install_bbcodes($bbcode_data);
	}
}
