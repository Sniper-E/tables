<?php
/**
*
* Tables BBCode Extension
* @author (c) 2015 Sniper_E - http://www.sniper-e.com
*
* @license		GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge(
	$lang, array(

/**
* Tables - English Language
*/

/**
* Buttons Titles for Selections and Guidelines
*/
		'TABLE_TITLE'				=> 'Table Selections',
		'TABLE_SELECTIONS_SHOW'		=> 'Show Table Selections',
		'TABLE_SELECTIONS_HIDE'		=> 'Hide Table Selections',
		'TABLE_GUIDELINES_SHOW'		=> 'Show Table Guidelines',
		'TABLE_GUIDELINES_HIDE'		=> 'Hide Table Guidelines',
		'TABLE_GUIDELINES'			=> '<strong>Table Guidelines:</strong> [table=75 sets the width% of a table. Max width% of table is 98%. [th=20], [th=30], [th=50] sets width% of each column. All [th=#% need to equal 100%. [table=75 tleft] floats the table left of the text. Use null, tleft, tright or tcenter. When using tcenter in the table, use [center] around the Table Title for it to line up. <strong>Instructions:</strong> Click the Preview button after inserting your table codes in textarea. From your preview, edit all of the Title names and Text areas to suit your post. Adjust all the width% to balance out the look of your table, Preview and Submit.',

/**
* Selections Column Numbers
*/
		'COLUMN_ONE'				=> '1 Column',
		'COLUMN_TWO'				=> '2 Columns',
		'COLUMN_THREE'				=> '3 Columns',
		'COLUMN_FOUR'				=> '4 Columns',
		'COLUMN_FIVE'				=> '5 Columns',
		'COLUMN_SIX'				=> '6 Columns',

/**
* Table Icon Selections Titles on Hover
*/
		'TABLE11_TITLE'			=> 'Table - 1 Column - 1 Row',
		'TABLE12_TITLE'			=> 'Table - 1 Column - 2 Rows',
		'TABLE13_TITLE'			=> 'Table - 1 Column - 3 Rows',
		'TABLE14_TITLE'			=> 'Table - 1 Column - 4 Rows',
		'TABLE15_TITLE'			=> 'Table - 1 Column - 5 Rows',
		'TABLE16_TITLE'			=> 'Table - 1 Column - 6 Rows',
		'TABLE17_TITLE'			=> 'Table - 1 Column - 7 Rows',
		'TABLE18_TITLE'			=> 'Table - 1 Column - 8 Rows',
		'TABLE19_TITLE'			=> 'Table - 1 Column - 9 Rows',
		'TABLE110_TITLE'		=> 'Table - 1 Column - 10 Rows',
		'TABLE21_TITLE'			=> 'Table - 2 Columns - 1 Row',
		'TABLE22_TITLE'			=> 'Table - 2 Columns - 2 Rows',
		'TABLE23_TITLE'			=> 'Table - 2 Columns - 3 Rows',
		'TABLE24_TITLE'			=> 'Table - 2 Columns - 4 Rows',
		'TABLE25_TITLE'			=> 'Table - 2 Columns - 5 Rows',
		'TABLE26_TITLE'			=> 'Table - 2 Columns - 6 Rows',
		'TABLE27_TITLE'			=> 'Table - 2 Columns - 7 Rows',
		'TABLE28_TITLE'			=> 'Table - 2 Columns - 8 Rows',
		'TABLE29_TITLE'			=> 'Table - 2 Columns - 9 Rows',
		'TABLE210_TITLE'		=> 'Table - 2 Columns - 10 Rows',
		'TABLE31_TITLE'			=> 'Table - 3 Columns - 1 Row',
		'TABLE32_TITLE'			=> 'Table - 3 Columns - 2 Rows',
		'TABLE33_TITLE'			=> 'Table - 3 Columns - 3 Rows',
		'TABLE34_TITLE'			=> 'Table - 3 Columns - 4 Rows',
		'TABLE35_TITLE'			=> 'Table - 3 Columns - 5 Rows',
		'TABLE36_TITLE'			=> 'Table - 3 Columns - 6 Rows',
		'TABLE37_TITLE'			=> 'Table - 3 Columns - 7 Rows',
		'TABLE38_TITLE'			=> 'Table - 3 Columns - 8 Rows',
		'TABLE39_TITLE'			=> 'Table - 3 Columns - 9 Rows',
		'TABLE310_TITLE'		=> 'Table - 3 Columns - 10 Rows',
		'TABLE41_TITLE'			=> 'Table - 4 Columns - 1 Row',
		'TABLE42_TITLE'			=> 'Table - 4 Columns - 2 Rows',
		'TABLE43_TITLE'			=> 'Table - 4 Columns - 3 Rows',
		'TABLE44_TITLE'			=> 'Table - 4 Columns - 4 Rows',
		'TABLE45_TITLE'			=> 'Table - 4 Columns - 5 Rows',
		'TABLE46_TITLE'			=> 'Table - 4 Columns - 6 Rows',
		'TABLE47_TITLE'			=> 'Table - 4 Columns - 7 Rows',
		'TABLE48_TITLE'			=> 'Table - 4 Columns - 8 Rows',
		'TABLE49_TITLE'			=> 'Table - 4 Columns - 9 Rows',
		'TABLE410_TITLE'		=> 'Table - 4 Columns - 10 Rows',
		'TABLE51_TITLE'			=> 'Table - 5 Columns - 1 Row',
		'TABLE52_TITLE'			=> 'Table - 5 Columns - 2 Rows',
		'TABLE53_TITLE'			=> 'Table - 5 Columns - 3 Rows',
		'TABLE54_TITLE'			=> 'Table - 5 Columns - 4 Rows',
		'TABLE55_TITLE'			=> 'Table - 5 Columns - 5 Rows',
		'TABLE56_TITLE'			=> 'Table - 5 Columns - 6 Rows',
		'TABLE57_TITLE'			=> 'Table - 5 Columns - 7 Rows',
		'TABLE58_TITLE'			=> 'Table - 5 Columns - 8 Rows',
		'TABLE59_TITLE'			=> 'Table - 5 Columns - 9 Rows',
		'TABLE510_TITLE'		=> 'Table - 5 Columns - 10 Rows',
		'TABLE61_TITLE'			=> 'Table - 6 Columns - 1 Row',
		'TABLE62_TITLE'			=> 'Table - 6 Columns - 2 Rows',
		'TABLE63_TITLE'			=> 'Table - 6 Columns - 3 Rows',
		'TABLE64_TITLE'			=> 'Table - 6 Columns - 4 Rows',
		'TABLE65_TITLE'			=> 'Table - 6 Columns - 5 Rows',
		'TABLE66_TITLE'			=> 'Table - 6 Columns - 6 Rows',
		'TABLE67_TITLE'			=> 'Table - 6 Columns - 7 Rows',
		'TABLE68_TITLE'			=> 'Table - 6 Columns - 8 Rows',
		'TABLE69_TITLE'			=> 'Table - 6 Columns - 9 Rows',
		'TABLE610_TITLE'		=> 'Table - 6 Columns - 10 Rows',

/**
* Tables Posted by Columns and Rows - DO NOT CHANGE
*/

/**
* Column 1
*/
		'TABLE11'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text[/td][/tr][/tbody][/table]',
		'TABLE12'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr][/tbody][/table]',
		'TABLE13'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr]\n[tr=bg2][td]Text3[/td][/tr][/tbody][/table]',
		'TABLE14'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr]\n[tr=bg2][td]Text3[/td][/tr]\n[tr=bg1][td]Text4[/td][/tr][/tbody][/table]',
		'TABLE15'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr]\n[tr=bg2][td]Text3[/td][/tr]\n[tr=bg1][td]Text4[/td][/tr]\n[tr=bg2][td]Text5[/td][/tr][/tbody][/table]',
		'TABLE16'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr]\n[tr=bg2][td]Text3[/td][/tr]\n[tr=bg1][td]Text4[/td][/tr]\n[tr=bg2][td]Text5[/td][/tr]\n[tr=bg1][td]Text6[/td][/tr][/tbody][/table]',
		'TABLE17'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr]\n[tr=bg2][td]Text3[/td][/tr]\n[tr=bg1][td]Text4[/td][/tr]\n[tr=bg2][td]Text5[/td][/tr]\n[tr=bg1][td]Text6[/td][/tr]\n[tr=bg2][td]Text7[/td][/tr][/tbody][/table]',
		'TABLE18'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr]\n[tr=bg2][td]Text3[/td][/tr]\n[tr=bg1][td]Text4[/td][/tr]\n[tr=bg2][td]Text5[/td][/tr]\n[tr=bg1][td]Text6[/td][/tr]\n[tr=bg2][td]Text7[/td][/tr]\n[tr=bg1][td]Text8[/td][/tr][/tbody][/table]',
		'TABLE19'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr]\n[tr=bg2][td]Text3[/td][/tr]\n[tr=bg1][td]Text4[/td][/tr]\n[tr=bg2][td]Text5[/td][/tr]\n[tr=bg1][td]Text6[/td][/tr]\n[tr=bg2][td]Text7[/td][/tr]\n[tr=bg1][td]Text8[/td][/tr]\n[tr=bg2][td]Text9[/td][/tr][/tbody][/table]',
		'TABLE110'	=> '[size=130]Table Title[/size]\n[table=15 null][thead][tr=null][th=100 left]Title[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][/tr]\n[tr=bg1][td]Text2[/td][/tr]\n[tr=bg2][td]Text3[/td][/tr]\n[tr=bg1][td]Text4[/td][/tr]\n[tr=bg2][td]Text5[/td][/tr]\n[tr=bg1][td]Text6[/td][/tr]\n[tr=bg2][td]Text7[/td][/tr]\n[tr=bg1][td]Text8[/td][/tr]\n[tr=bg2][td]Text9[/td][/tr]\n[tr=bg1][td]Text10[/td][/tr][/tbody][/table]',

/**
* Column 2
*/
		'TABLE21'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][td]Text2[/td][/tr][/tbody][/table]',
		'TABLE22'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr][/tbody][/table]',
		'TABLE23'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][/tr][/tbody][/table]',
		'TABLE24'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][/tr][/tbody][/table]',
		'TABLE25'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][/tr][/tbody][/table]',
		'TABLE26'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][/tr][/tbody][/table]',
		'TABLE27'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][/tr][/tbody][/table]',
		'TABLE28'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][/tr][/tbody][/table]',
		'TABLE29'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][/tr][/tbody][/table]',
		'TABLE210'	=> '[size=130]Table Title[/size]\n[table=30 null][thead][tr=null][th=50 left]Title1[/th][th=50 left]Title2[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][/tr]\n[tr=bg1][td]Text110[/td][td]Text210[/td][/tr][/tbody][/table]',

/**
* Column 3
*/
		'TABLE31'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][td]Text2[/td][td]Text3[/td][/tr][/tbody][/table]',
		'TABLE32'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr][/tbody][/table]',
		'TABLE33'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][/tr][/tbody][/table]',
		'TABLE34'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][/tr][/tbody][/table]',
		'TABLE35'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][/tr][/tbody][/table]',
		'TABLE36'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][/tr][/tbody][/table]',
		'TABLE37'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][/tr][/tbody][/table]',
		'TABLE38'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][/tr][/tbody][/table]',
		'TABLE39'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][td]Text39[/td][/tr][/tbody][/table]',
		'TABLE310'	=> '[size=130]Table Title[/size]\n[table=45 null][thead][tr=null][th=33 left]Title1[/th][th=33 left]Title2[/th][th=34 left]Title3[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][td]Text39[/td][/tr]\n[tr=bg1][td]Text110[/td][td]Text210[/td][td]Text310[/td][/tr][/tbody][/table]',

/**
* Column 4
*/
		'TABLE41'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][td]Text2[/td][td]Text3[/td][td]Text4[/td][/tr][/tbody][/table]',
		'TABLE42'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr][/tbody][/table]',
		'TABLE43'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][/tr][/tbody][/table]',
		'TABLE44'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][/tr][/tbody][/table]',
		'TABLE45'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][/tr][/tbody][/table]',
		'TABLE46'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][/tr][/tbody][/table]',
		'TABLE47'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][/tr][/tbody][/table]',
		'TABLE48'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][/tr][/tbody][/table]',
		'TABLE49'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][td]Text39[/td][td]Text49[/td][/tr][/tbody][/table]',
		'TABLE410'	=> '[size=130]Table Title[/size]\n[table=60 null][thead][tr=null][th=25 left]Title1[/th][th=25 left]Title2[/th][th=25 left]Title3[/th][th=25 left]Title4[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][td]Text39[/td][td]Text49[/td][/tr]\n[tr=bg1][td]Text110[/td][td]Text210[/td][td]Text310[/td][td]Text410[/td][/tr][/tbody][/table]',

/**
* Column 5
*/
		'TABLE51'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][td]Text2[/td][td]Text3[/td][td]Text4[/td][td]Text5[/td][/tr][/tbody][/table]',
		'TABLE52'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr][/tbody][/table]',
		'TABLE53'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][/tr][/tbody][/table]',
		'TABLE54'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][/tr][/tbody][/table]',
		'TABLE55'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][/tr][/tbody][/table]',
		'TABLE56'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][/tr][/tbody][/table]',
		'TABLE57'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][td]Text57[/td][/tr][/tbody][/table]',
		'TABLE58'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][td]Text57[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][td]Text58[/td][/tr][/tbody][/table]',
		'TABLE59'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][td]Text57[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][td]Text58[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][td]Text39[/td][td]Text49[/td][td]Text59[/td][/tr][/tbody][/table]',
		'TABLE510'	=> '[size=130]Table Title[/size]\n[table=75 null][thead][tr=null][th=20 left]Title1[/th][th=20 left]Title2[/th][th=20 left]Title3[/th][th=20 left]Title4[/th][th=20 left]Title5[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][td]Text57[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][td]Text58[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][td]Text39[/td][td]Text49[/td][td]Text59[/td][/tr]\n[tr=bg1][td]Text110[/td][td]Text210[/td][td]Text310[/td][td]Text410[/td][td]Text510[/td][/tr][/tbody][/table]',

/**
* Column 6
*/
		'TABLE61'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text1[/td][td]Text2[/td][td]Text3[/td][td]Text4[/td][td]Text5[/td][td]Text6[/td][/tr][/tbody][/table]',
		'TABLE62'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr][/tbody][/table]',
		'TABLE63'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][td]Text63[/td][/tr][/tbody][/table]',
		'TABLE64'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][td]Text63[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][td]Text64[/td][/tr][/tbody][/table]',
		'TABLE65'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][td]Text63[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][td]Text64[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][td]Text65[/td][/tr][/tbody][/table]',
		'TABLE66'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][td]Text63[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][td]Text64[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][td]Text65[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][td]Text66[/td][/tr][/tbody][/table]',
		'TABLE67'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][td]Text63[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][td]Text64[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][td]Text65[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][td]Text66[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][td]Text57[/td][td]Text67[/td][/tr][/tbody][/table]',
		'TABLE68'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][td]Text63[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][td]Text64[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][td]Text65[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][td]Text66[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][td]Text57[/td][td]Text67[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][td]Text58[/td][td]Text68[/td][/tr][/tbody][/table]',
		'TABLE69'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][td]Text63[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][td]Text64[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][td]Text65[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][td]Text66[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][td]Text57[/td][td]Text67[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][td]Text58[/td][td]Text68[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][td]Text39[/td][td]Text49[/td][td]Text59[/td][td]Text69[/td][/tr][/tbody][/table]',
		'TABLE610'	=> '[size=130]Table Title[/size]\n[table=90 null][thead][tr=null][th=17 left]Title1[/th][th=16 left]Title2[/th][th=17 left]Title3[/th][th=16 left]Title4[/th][th=17 left]Title5[/th][th=16 left]Title6[/th][/tr][/thead]\n[tbody][tr=bg2][td]Text11[/td][td]Text21[/td][td]Text31[/td][td]Text41[/td][td]Text51[/td][td]Text61[/td][/tr]\n[tr=bg1][td]Text12[/td][td]Text22[/td][td]Text32[/td][td]Text42[/td][td]Text52[/td][td]Text62[/td][/tr]\n[tr=bg2][td]Text13[/td][td]Text23[/td][td]Text33[/td][td]Text43[/td][td]Text53[/td][td]Text63[/td][/tr]\n[tr=bg1][td]Text14[/td][td]Text24[/td][td]Text34[/td][td]Text44[/td][td]Text54[/td][td]Text64[/td][/tr]\n[tr=bg2][td]Text15[/td][td]Text25[/td][td]Text35[/td][td]Text45[/td][td]Text55[/td][td]Text65[/td][/tr]\n[tr=bg1][td]Text16[/td][td]Text26[/td][td]Text36[/td][td]Text46[/td][td]Text56[/td][td]Text66[/td][/tr]\n[tr=bg2][td]Text17[/td][td]Text27[/td][td]Text37[/td][td]Text47[/td][td]Text57[/td][td]Text67[/td][/tr]\n[tr=bg1][td]Text18[/td][td]Text28[/td][td]Text38[/td][td]Text48[/td][td]Text58[/td][td]Text68[/td][/tr]\n[tr=bg2][td]Text19[/td][td]Text29[/td][td]Text39[/td][td]Text49[/td][td]Text59[/td][td]Text69[/td][/tr]\n[tr=bg1][td]Text110[/td][td]Text210[/td][td]Text310[/td][td]Text410[/td][td]Text510[/td][td]Text610[/td][/tr][/tbody][/table]',
	)
);
