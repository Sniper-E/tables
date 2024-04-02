<?php
/**
 * @ package phpBB Extension - Tables
 * @ copyright (c) 2015 Sniper_E - http://sniper-e.com
 * @ license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 * @ migration written by 3DI, http://3di.space/32 in 2016
 * @ migration based on the hard work of Matt Friedman and VSE for ABBC3
 */

namespace sniper\tables\migrations;

class update_table extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}
	public function effectively_installed()
	{
		return isset($this->config['tables_version']) && version_compare($this->config['tables_version'], '2.1.4', '>=');
	}
	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'install_tables_bbcodes'))),
			 // Add config
			 array('config.add', array('use_tables_bbcode', '0')),
			// Permission
			array('permission.add', array('u_use_tables_bbcode', true)),
			// Set Permission
			array('permission.permission_set', array('ADMINISTRATORS', 'u_use_tables_bbcode', 'group', true)),
		);
	}
	public function revert_data()
	{
		return array(
			array('custom', array(array(&$this, 'tables_bbcodes_behind'))),
		);
	}
	/**
	 * notebbcodes left behind, hides the bbcode buttons on posting
	 *
	 * @param array $bbcode_tags Array of noteBBCodes tags to hide
	 * @return null
	 * @access public
	 */
	public function tables_bbcodes_behind($bbcode_tags)
	{
	/**
	 * @var array An array of notebbcodes (tags) to be left behind
	 */
	$bbcode_tags = array('tables=', 'tr=', 'th-', 'td=', 'thead', 'tbody', 'center', 'align=', 'float=');
	// set to null the display on posting
	$sql = 'UPDATE ' . BBCODES_TABLE . '
		SET display_on_posting = 0
		WHERE ' . $this->db->sql_in_set('bbcode_tag', $bbcode_tags);
		$this->db->sql_query($sql);
	}
	/**
	 * Installs BBCodes, used by migrations to perform add/updates
	 *
	 * @param array $bbcode_data Array of BBCode data to install
	 * @return null
	 * @access public
	 */
	public function install_tables_bbcodes($bbcode_data)
	{
		// Load the acp_bbcode class
		if (!class_exists('acp_bbcodes'))
		{
			include($this->phpbb_root_path . 'includes/acp/acp_bbcodes.' . $this->php_ext);
		}
		$bbcode_tool = new \acp_bbcodes();
		/**
		 * @var array An array of bbcodes data to install
		 */
		$bbcode_data = array(
			'table=' => array(
				'bbcode_match'		=> '[table={NUMBER},{IDENTIFIER}]{TEXT}[/table]',
				'bbcode_tpl'		=> '<div class="forumbg forumbg-table tables1 {IDENTIFIER} $tagLimit=0" style="width: {NUMBER}%"><div class="inner"><table class="table1">{TEXT}</table></div></div>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 0,
			),
			'tr=' => array(
				'bbcode_match'		=> '[tr={IDENTIFIER}]{TEXT}[/tr]',
				'bbcode_tpl'		=> '<tr class="{IDENTIFIER}">{TEXT}</tr>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 0,
			),
			'th=' => array(
				'bbcode_match'		=> '[th={NUMBER},{IDENTIFIER}]{TEXT}[/th]',
				'bbcode_tpl'		=> '<th class="{IDENTIFIER}" style="width: {NUMBER}%">{TEXT}</th>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 0,
			),
			'td=' => array(
				'bbcode_match'		=> '[td={IDENTIFIER},{NUMBER}]{TEXT}[/td]',
				'bbcode_tpl'		=> '<td class="{IDENTIFIER}" colspan="{NUMBER}">{TEXT}</td>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 0,
			),
			'thead' => array(
				'bbcode_match'		=> '[thead]{TEXT}[/thead]',
				'bbcode_tpl'		=> '<thead>{TEXT}</thead>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 0,
			),
			'tbody' => array(
				'bbcode_match'		=> '[tbody]{TEXT}[/tbody]',
				'bbcode_tpl'		=> '<tbody>{TEXT}</tbody>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 0,
			),
			'tfoot' => array(
				'bbcode_match'		=> '[tfoot]{TEXT}[/tfoot]',
				'bbcode_tpl'		=> '<tfoot>{TEXT}</tfoot>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 0,
			),
			'align=' => array(
				'bbcode_match'		=> '[align={IDENTIFIER}]{TEXT}[/align]',
				'bbcode_tpl'		=> '<div style="width:100%;text-align:{IDENTIFIER}; display:block;">{TEXT}</div>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 1,
			),
			'float=' => array(
				'bbcode_match'		=> '[float={IDENTIFIER}]{TEXT}[/float]',
				'bbcode_tpl'		=> '<div style="float:{IDENTIFIER}; padding:0 10px;">{TEXT}</div>',
				'bbcode_helpline'	=> '',
				'display_on_posting'=> 1,
			),
		);
		foreach ($bbcode_data as $bbcode_name => $bbcode_array)
		{
			// Build the BBCodes
			$data = $bbcode_tool->build_regexp($bbcode_array['bbcode_match'], $bbcode_array['bbcode_tpl'], $bbcode_array['bbcode_helpline']);
			$bbcode_array += array(
				'bbcode_tag'			=> $data['bbcode_tag'],
				'first_pass_match'		=> $data['first_pass_match'],
				'first_pass_replace'	=> $data['first_pass_replace'],
				'second_pass_match'		=> $data['second_pass_match'],
				'second_pass_replace'	=> $data['second_pass_replace']
			);
			$sql = 'SELECT bbcode_id
				FROM ' . BBCODES_TABLE . "
				WHERE LOWER(bbcode_tag) = '" . strtolower($bbcode_name) . "'
				OR LOWER(bbcode_tag) = '" . strtolower($bbcode_array['bbcode_tag']) . "'";
			$result = $this->db->sql_query($sql);
			$row_exists = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);
			if ($row_exists)
			{
				// Update existing BBCode
				$bbcode_id = $row_exists['bbcode_id'];
				$sql = 'UPDATE ' . BBCODES_TABLE . '
					SET ' . $this->db->sql_build_array('UPDATE', $bbcode_array) . '
					WHERE bbcode_id = ' . $bbcode_id;
				$this->db->sql_query($sql);
			}
			else
			{
				// Create new BBCode
				$sql = 'SELECT MAX(bbcode_id) AS max_bbcode_id
					FROM ' . BBCODES_TABLE;
				$result = $this->db->sql_query($sql);
				$max_bbcode_id = $this->db->sql_fetchfield('max_bbcode_id');
				$this->db->sql_freeresult($result);
				if ($max_bbcode_id)
				{
					$bbcode_id = $max_bbcode_id + 1;
					// Make sure it is greater than the core BBCode ids...
					if ($bbcode_id <= NUM_CORE_BBCODES)
					{
						$bbcode_id = NUM_CORE_BBCODES + 1;
					}
				}
				else
				{
					$bbcode_id = NUM_CORE_BBCODES + 1;
				}
				if ($bbcode_id <= BBCODE_LIMIT)
				{
					$bbcode_array['bbcode_id'] = (int) $bbcode_id;
					$bbcode_array['display_on_posting'] = ((int) $bbcode_array['display_on_posting']);
					$this->db->sql_query('INSERT INTO ' . BBCODES_TABLE . ' ' . $this->db->sql_build_array('INSERT', $bbcode_array));
				}
			}
		}
	}
}
