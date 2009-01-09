<?php
if ($this->security()) {
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=' . ((isset($this->_tpldata['.'][0]['ENCODING'])) ? $this->_tpldata['.'][0]['ENCODING'] : '') . '" />
' . ((isset($this->_tpldata['.'][0]['META'])) ? $this->_tpldata['.'][0]['META'] : '') . '
<title>' . ((isset($this->_tpldata['.'][0]['PAGE_TITLE'])) ? $this->_tpldata['.'][0]['PAGE_TITLE'] : '') . '</title>
<style type="text/css">
form { display: inline; }
img { vertical-align: middle; border: 0px; }

BODY { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE1'])) ? $this->_tpldata['.'][0]['T_FONTFACE1'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE2'])) ? $this->_tpldata['.'][0]['T_FONTSIZE2'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR1'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR1'] : '') . '; margin-left: 1%; margin-right: 1%; margin-top: 1%; background-color: #' . ((isset($this->_tpldata['.'][0]['T_BODY_BACKGROUND'])) ? $this->_tpldata['.'][0]['T_BODY_BACKGROUND'] : '') . '; }
TABLE { border-top: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'] : '') . 'px; border-right: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'] : '') . 'px; border-bottom: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'] : '') . 'px; border-left: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_WIDTH'] : '') . 'px; border-color: #' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_COLOR'] : '') . '; border-style: ' . ((isset($this->_tpldata['.'][0]['T_TABLE_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['T_TABLE_BORDER_STYLE'] : '') . '; }
TABLE.borderless { border-style: none; }

th { font-weight: bold; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; white-space: nowrap; }
tr, td { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE1'])) ? $this->_tpldata['.'][0]['T_FONTFACE1'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE2'])) ? $this->_tpldata['.'][0]['T_FONTSIZE2'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR1'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR1'] : '') . '; }

a:link, a:visited, a:active { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_BODY_LINK_STYLE'])) ? $this->_tpldata['.'][0]['T_BODY_LINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_BODY_LINK'])) ? $this->_tpldata['.'][0]['T_BODY_LINK'] : '') . '; }
a:hover { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_BODY_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['T_BODY_HLINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_BODY_HLINK'])) ? $this->_tpldata['.'][0]['T_BODY_HLINK'] : '') . '; }

th a:link, th a:visited, th a:active { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; font-weight: bold; }
th a:hover { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; font-weight: bold; }

th.smalltitle { font-weight: bold; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; white-space: nowrap; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; }
th.smalltitle a:link, th.smalltitle a:visited, th.smalltitle a:active { text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'] : '') . '; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; font-weight: bold; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; }
th.smalltitle a:hover { color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; font-weight: bold; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'] : '') . '; }

th.footer { color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; text-align: right; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; white-space: nowrap; font-weight: normal; }
th.footer a:link, th.footer a:visited, th.footer a:active { color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK_STYLE'] : '') . ';  font-weight: normal; }
th.footer a:hover { color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; text-decoration: ' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK_STYLE'] : '') . '; font-weight: normal; }

.row1 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . '; }
.row2 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR2'])) ? $this->_tpldata['.'][0]['T_TR_COLOR2'] : '') . '; }

.quote1 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR2'])) ? $this->_tpldata['.'][0]['T_TR_COLOR2'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE2'])) ? $this->_tpldata['.'][0]['T_FONTSIZE2'] : '') . 'px; line-height: 125%; }
.quote2 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE2'])) ? $this->_tpldata['.'][0]['T_FONTSIZE2'] : '') . 'px; line-height: 125%; }

.positive { color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR_POS'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR_POS'] : '') . '; }
.negative { color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR_NEG'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR_NEG'] : '') . '; }
.neutral  { color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR1'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR1'] : '') . '; }

.maintitle { font-size: 18px; font-weight: bold; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.subtitle  { font-size: 12px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }

.menu { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.menu a:link, .menu a:active, .menu a:visited { text-decoration: none; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.menu a:hover { text-decoration: underline; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; }

.small { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; }

.copy { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.copy a:link, .copy a:active, .copy a:visited { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR2'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR2'] : '') . '; }
.copy a:hover { font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_HLINK'])) ? $this->_tpldata['.'][0]['T_HEADER_HLINK'] : '') . '; }

.input { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE2'])) ? $this->_tpldata['.'][0]['T_FONTFACE2'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; color: #' . ((isset($this->_tpldata['.'][0]['T_FONTCOLOR3'])) ? $this->_tpldata['.'][0]['T_FONTCOLOR3'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_INPUT_BACKGROUND'])) ? $this->_tpldata['.'][0]['T_INPUT_BACKGROUND'] : '') . '; 
         border-top: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-right: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-bottom: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-left: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-color: #' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_COLOR'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_COLOR'] : '') . '; border-style: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'] : '') . '; }

input.helpline1 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR1'])) ? $this->_tpldata['.'][0]['T_TR_COLOR1'] : '') . '; border-style: none; }
input.helpline2 { background-color: #' . ((isset($this->_tpldata['.'][0]['T_TR_COLOR2'])) ? $this->_tpldata['.'][0]['T_TR_COLOR2'] : '') . '; border-style: none; }

input.mainoption { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE2'])) ? $this->_tpldata['.'][0]['T_FONTFACE2'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; font-weight: bold; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; border-top: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px;
                   border-right: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-bottom: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-left: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; border-style: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'] : '') . '; }
input.liteoption { font-family: ' . ((isset($this->_tpldata['.'][0]['T_FONTFACE2'])) ? $this->_tpldata['.'][0]['T_FONTFACE2'] : '') . '; font-size: ' . ((isset($this->_tpldata['.'][0]['T_FONTSIZE1'])) ? $this->_tpldata['.'][0]['T_FONTSIZE1'] : '') . 'px; font-weight: normal; color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; background-color: #' . ((isset($this->_tpldata['.'][0]['T_TH_COLOR1'])) ? $this->_tpldata['.'][0]['T_TH_COLOR1'] : '') . '; border-top: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px;
                   border-right: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-bottom: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-left: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_WIDTH'] : '') . 'px; border-color: #' . ((isset($this->_tpldata['.'][0]['T_HEADER_LINK'])) ? $this->_tpldata['.'][0]['T_HEADER_LINK'] : '') . '; border-style: ' . ((isset($this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'])) ? $this->_tpldata['.'][0]['T_INPUT_BORDER_STYLE'] : '') . '; }

' . ((isset($this->_tpldata['.'][0]['EXTRA_CSS'])) ? $this->_tpldata['.'][0]['EXTRA_CSS'] : '') . '
</style>
</head>

<body' . ((isset($this->_tpldata['.'][0]['ONLOAD'])) ? $this->_tpldata['.'][0]['ONLOAD'] : '') . '>
';// IF S_NORMAL_HEADER
if ($this->_tpldata['.'][0]['S_NORMAL_HEADER']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td width="201" nowrap="nowrap"><img src="' . ((isset($this->_tpldata['.'][0]['TEMPLATE_PATH'])) ? $this->_tpldata['.'][0]['TEMPLATE_PATH'] : '') . '/images/' . ((isset($this->_tpldata['.'][0]['LOGO_PATH'])) ? $this->_tpldata['.'][0]['LOGO_PATH'] : '') . '" alt="Logo" /><br /></td>
    <td width="100%">
      <center><span class="maintitle">' . ((isset($this->_tpldata['.'][0]['MAIN_TITLE'])) ? $this->_tpldata['.'][0]['MAIN_TITLE'] : '') . '</span><br />
      <span class="subtitle">' . ((isset($this->_tpldata['.'][0]['SUB_TITLE'])) ? $this->_tpldata['.'][0]['SUB_TITLE'] : '') . '</span><br /><br />
      <span class="menu">
      ' . ((isset($this->_tpldata['.'][0]['MAIN_MENU1'])) ? $this->_tpldata['.'][0]['MAIN_MENU1'] : '') . '
      <br />
      ' . ((isset($this->_tpldata['.'][0]['MAIN_MENU2'])) ? $this->_tpldata['.'][0]['MAIN_MENU2'] : '') . '
      </span></center>
    </td>
  </tr>
</table>
<br />
';// IF S_IN_ADMIN
if ($this->_tpldata['.'][0]['S_IN_ADMIN']) { 
echo '
<table width="100%" border="0" cellspacing="0" cellpadding="2" class="borderless">
  <tr>
    <td width="175" valign="top" nowrap="nowrap">
      <table width="100%" border="0" cellspacing="1" cellpadding="2">
        <tr>
          <th class="smalltitle" align="center">' . ((isset($this->_tpldata['.'][0]['L_ADMINISTRATION'])) ? $this->_tpldata['.'][0]['L_ADMINISTRATION'] : ((isset($user->lang['ADMINISTRATION'])) ? $user->lang['ADMINISTRATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMINISTRATION'))) . ' 	}')) . '</th>
        </tr>
        <tr>
          <td class="row1">&nbsp;<img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" />&nbsp;<a href="index.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADMIN_INDEX'])) ? $this->_tpldata['.'][0]['L_ADMIN_INDEX'] : ((isset($user->lang['ADMIN_INDEX'])) ? $user->lang['ADMIN_INDEX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMIN_INDEX'))) . ' 	}')) . '</a></td>
        </tr>
        <tr>
          <td class="row2">&nbsp;<img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" />&nbsp;<a href="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . '' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_INDEX'])) ? $this->_tpldata['.'][0]['L_EQDKP_INDEX'] : ((isset($user->lang['EQDKP_INDEX'])) ? $user->lang['EQDKP_INDEX'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_INDEX'))) . ' 	}')) . '</a></td>
        </tr>
        ';// BEGIN header_row
$_header_row_count = (isset($this->_tpldata['header_row.'])) ?  sizeof($this->_tpldata['header_row.']) : 0;
if ($_header_row_count) {
for ($_header_row_i = 0; $_header_row_i < $_header_row_count; $_header_row_i++)
{
echo '
        <tr>
          <th align="left" class="smalltitle">' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['HEADER'])) ? $this->_tpldata['header_row.'][$_header_row_i]['HEADER'] : '') . '</th>
        </tr>
        ';// BEGIN menu_row
$_menu_row_count = (isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'])) ? sizeof($this->_tpldata['header_row.'][$_header_row_i]['menu_row.']) : 0;
if ($_menu_row_count) {
for ($_menu_row_i = 0; $_menu_row_i < $_menu_row_count; $_menu_row_i++)
{
echo '
        <tr>
          <td class="' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['ROW_CLASS'])) ? $this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['ROW_CLASS'] : '') . '">&nbsp;<img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/arrow.gif" alt="arrow" />&nbsp;' . ((isset($this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['LINK'])) ? $this->_tpldata['header_row.'][$_header_row_i]['menu_row.'][$_menu_row_i]['LINK'] : '') . '</td>
        </tr>
        ';}}
// END menu_row
}}
// END header_row
echo '
      </table>
    </td>
    <td width="100%" valign="top">
';// ENDIF
}
// ENDIF
}

}
?>