<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
<!--
function pop_preview()
{                   
    selected_style = document.post.default_style.options[document.post.default_style.selectedIndex].value;
    preview = window.open(\'' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'viewnews.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&style=\'+selected_style,\'preview\',\'resizable=yes,toolbar=no,status=yes,height=500,width=600,screenX=50,screenY=25,left=100,top=75\')
    preview.focus();
}
//-->
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_CONFIG'])) ? $this->_tpldata['.'][0]['F_CONFIG'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <colgroup>
    <col width="60%" class="row2" /><col width="40%" class="row1" />
  </colgroup>
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_GENERAL_SETTINGS'])) ? $this->_tpldata['.'][0]['L_GENERAL_SETTINGS'] : ((isset($user->lang['GENERAL_SETTINGS'])) ? $user->lang['GENERAL_SETTINGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GENERAL_SETTINGS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_GUILDTAG'])) ? $this->_tpldata['.'][0]['L_GUILDTAG'] : ((isset($user->lang['GUILDTAG'])) ? $user->lang['GUILDTAG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GUILDTAG'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_GUILDTAG_NOTE'])) ? $this->_tpldata['.'][0]['L_GUILDTAG_NOTE'] : ((isset($user->lang['GUILDTAG_NOTE'])) ? $user->lang['GUILDTAG_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GUILDTAG_NOTE'))) . ' 	}')) . '</span></td>
    <td><input type="text" name="guildtag" size="35" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['GUILDTAG'])) ? $this->_tpldata['.'][0]['GUILDTAG'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_PARSETAGS'])) ? $this->_tpldata['.'][0]['L_PARSETAGS'] : ((isset($user->lang['PARSETAGS'])) ? $user->lang['PARSETAGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PARSETAGS'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_PARSETAGS_NOTE'])) ? $this->_tpldata['.'][0]['L_PARSETAGS_NOTE'] : ((isset($user->lang['PARSETAGS_NOTE'])) ? $user->lang['PARSETAGS_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PARSETAGS_NOTE'))) . ' 	}')) . '</span></td>
    <td><textarea name="parsetags" rows="4" cols="35" class="input">' . ((isset($this->_tpldata['.'][0]['PARSETAGS'])) ? $this->_tpldata['.'][0]['PARSETAGS'] : '') . '</textarea></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_DOMAIN_NAME'])) ? $this->_tpldata['.'][0]['L_DOMAIN_NAME'] : ((isset($user->lang['DOMAIN_NAME'])) ? $user->lang['DOMAIN_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DOMAIN_NAME'))) . ' 	}')) . ':</td>
    <td><input type="text" name="server_name" size="30" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['SERVER_NAME'])) ? $this->_tpldata['.'][0]['SERVER_NAME'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_SERVER_PORT'])) ? $this->_tpldata['.'][0]['L_SERVER_PORT'] : ((isset($user->lang['SERVER_PORT'])) ? $user->lang['SERVER_PORT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVER_PORT'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_SERVER_PORT_NOTE'])) ? $this->_tpldata['.'][0]['L_SERVER_PORT_NOTE'] : ((isset($user->lang['SERVER_PORT_NOTE'])) ? $user->lang['SERVER_PORT_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SERVER_PORT_NOTE'))) . ' 	}')) . '</span></td>
    <td><input type="text" name="server_port" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['SERVER_PORT'])) ? $this->_tpldata['.'][0]['SERVER_PORT'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_SCRIPT_PATH'])) ? $this->_tpldata['.'][0]['L_SCRIPT_PATH'] : ((isset($user->lang['SCRIPT_PATH'])) ? $user->lang['SCRIPT_PATH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SCRIPT_PATH'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_SCRIPT_PATH_NOTE'])) ? $this->_tpldata['.'][0]['L_SCRIPT_PATH_NOTE'] : ((isset($user->lang['SCRIPT_PATH_NOTE'])) ? $user->lang['SCRIPT_PATH_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SCRIPT_PATH_NOTE'))) . ' 	}')) . '</span></td>
    <td><input type="text" name="server_path" size="15" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['SERVER_PATH'])) ? $this->_tpldata['.'][0]['SERVER_PATH'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_SITE_NAME'])) ? $this->_tpldata['.'][0]['L_SITE_NAME'] : ((isset($user->lang['SITE_NAME'])) ? $user->lang['SITE_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SITE_NAME'))) . ' 	}')) . ':</td>
    <td><input type="text" name="main_title" size="40" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['MAIN_TITLE'])) ? $this->_tpldata['.'][0]['MAIN_TITLE'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_SITE_DESCRIPTION'])) ? $this->_tpldata['.'][0]['L_SITE_DESCRIPTION'] : ((isset($user->lang['SITE_DESCRIPTION'])) ? $user->lang['SITE_DESCRIPTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SITE_DESCRIPTION'))) . ' 	}')) . ':</td>
    <td><input type="text" name="sub_title" size="40" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['SUB_TITLE'])) ? $this->_tpldata['.'][0]['SUB_TITLE'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_POINT_NAME'])) ? $this->_tpldata['.'][0]['L_POINT_NAME'] : ((isset($user->lang['POINT_NAME'])) ? $user->lang['POINT_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'POINT_NAME'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_POINT_NAME_NOTE'])) ? $this->_tpldata['.'][0]['L_POINT_NAME_NOTE'] : ((isset($user->lang['POINT_NAME_NOTE'])) ? $user->lang['POINT_NAME_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'POINT_NAME_NOTE'))) . ' 	}')) . '</span></td>
    <td><input type="text" name="dkp_name" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['DKP_NAME'])) ? $this->_tpldata['.'][0]['DKP_NAME'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_ENABLE_ACCOUNT_ACTIVATION'])) ? $this->_tpldata['.'][0]['L_ENABLE_ACCOUNT_ACTIVATION'] : ((isset($user->lang['ENABLE_ACCOUNT_ACTIVATION'])) ? $user->lang['ENABLE_ACCOUNT_ACTIVATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENABLE_ACCOUNT_ACTIVATION'))) . ' 	}')) . ':</td>
    <td><span class="small">
      <input type="radio" name="account_activation" value="0"' . ((isset($this->_tpldata['.'][0]['ACTIVATION_NONE_CHECKED'])) ? $this->_tpldata['.'][0]['ACTIVATION_NONE_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_NONE'])) ? $this->_tpldata['.'][0]['L_NONE'] : ((isset($user->lang['NONE'])) ? $user->lang['NONE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NONE'))) . ' 	}')) . '&nbsp;&nbsp;
      <input type="radio" name="account_activation" value="1"' . ((isset($this->_tpldata['.'][0]['ACTIVATION_USER_CHECKED'])) ? $this->_tpldata['.'][0]['ACTIVATION_USER_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_USER'])) ? $this->_tpldata['.'][0]['L_USER'] : ((isset($user->lang['USER'])) ? $user->lang['USER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USER'))) . ' 	}')) . '&nbsp;&nbsp;
      <input type="radio" name="account_activation" value="2"' . ((isset($this->_tpldata['.'][0]['ACTIVATION_ADMIN_CHECKED'])) ? $this->_tpldata['.'][0]['ACTIVATION_ADMIN_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_ADMIN'])) ? $this->_tpldata['.'][0]['L_ADMIN'] : ((isset($user->lang['ADMIN'])) ? $user->lang['ADMIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMIN'))) . ' 	}')) . '</span>
    </td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENTS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENTS_PER_PAGE'] : ((isset($user->lang['ADJUSTMENTS_PER_PAGE'])) ? $user->lang['ADJUSTMENTS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENTS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td><input type="text" name="default_alimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['DEFAULT_ALIMIT'])) ? $this->_tpldata['.'][0]['DEFAULT_ALIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_DEFAULT_ALIMIT'])) ? $this->_tpldata['.'][0]['FV_DEFAULT_ALIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_EVENTS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_EVENTS_PER_PAGE'] : ((isset($user->lang['EVENTS_PER_PAGE'])) ? $user->lang['EVENTS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENTS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td><input type="text" name="default_elimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['DEFAULT_ELIMIT'])) ? $this->_tpldata['.'][0]['DEFAULT_ELIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_DEFAULT_ELIMIT'])) ? $this->_tpldata['.'][0]['FV_DEFAULT_ELIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_ITEMS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_ITEMS_PER_PAGE'] : ((isset($user->lang['ITEMS_PER_PAGE'])) ? $user->lang['ITEMS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td><input type="text" name="default_ilimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['DEFAULT_ILIMIT'])) ? $this->_tpldata['.'][0]['DEFAULT_ILIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_DEFAULT_ILIMIT'])) ? $this->_tpldata['.'][0]['FV_DEFAULT_ILIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_NEWS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_NEWS_PER_PAGE'] : ((isset($user->lang['NEWS_PER_PAGE'])) ? $user->lang['NEWS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEWS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td><input type="text" name="default_nlimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['DEFAULT_NLIMIT'])) ? $this->_tpldata['.'][0]['DEFAULT_NLIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_DEFAULT_NLIMIT'])) ? $this->_tpldata['.'][0]['FV_DEFAULT_NLIMIT'] : '') . '</td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_RAIDS_PER_PAGE'])) ? $this->_tpldata['.'][0]['L_RAIDS_PER_PAGE'] : ((isset($user->lang['RAIDS_PER_PAGE'])) ? $user->lang['RAIDS_PER_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_PER_PAGE'))) . ' 	}')) . ':</td>
    <td><input type="text" name="default_rlimit" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['DEFAULT_RLIMIT'])) ? $this->_tpldata['.'][0]['DEFAULT_RLIMIT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_DEFAULT_RLIMIT'])) ? $this->_tpldata['.'][0]['FV_DEFAULT_RLIMIT'] : '') . '</td>
  </tr>

  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_DEFAULT_LANGUAGE'])) ? $this->_tpldata['.'][0]['L_DEFAULT_LANGUAGE'] : ((isset($user->lang['DEFAULT_LANGUAGE'])) ? $user->lang['DEFAULT_LANGUAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFAULT_LANGUAGE'))) . ' 	}')) . ':</td>
    <td>
      <select name="default_lang" class="input">
        ';// BEGIN lang_row
$_lang_row_count = (isset($this->_tpldata['lang_row.'])) ?  sizeof($this->_tpldata['lang_row.']) : 0;
if ($_lang_row_count) {
for ($_lang_row_i = 0; $_lang_row_i < $_lang_row_count; $_lang_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['VALUE'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['SELECTED'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['lang_row.'][$_lang_row_i]['OPTION'])) ? $this->_tpldata['lang_row.'][$_lang_row_i]['OPTION'] : '') . '</option>
        ';}}
// END lang_row
echo '
      </select>
    </td>
  </tr>

  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_DEFAULT_LOCALE'])) ? $this->_tpldata['.'][0]['L_DEFAULT_LOCALE'] : ((isset($user->lang['DEFAULT_LOCALE'])) ? $user->lang['DEFAULT_LOCALE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFAULT_LOCALE'))) . ' 	}')) . ':</td>
    <td>
      <select name="default_locale" class="input">
        ';// BEGIN locale_row
$_locale_row_count = (isset($this->_tpldata['locale_row.'])) ?  sizeof($this->_tpldata['locale_row.']) : 0;
if ($_locale_row_count) {
for ($_locale_row_i = 0; $_locale_row_i < $_locale_row_count; $_locale_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['VALUE'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['SELECTED'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['OPTION'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['OPTION'] : '') . '</option>
        ';}}
// END locale_row
echo '
      </select>
    </td>
  </tr>

  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_DEFAULT_GAME'])) ? $this->_tpldata['.'][0]['L_DEFAULT_GAME'] : ((isset($user->lang['DEFAULT_GAME'])) ? $user->lang['DEFAULT_GAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFAULT_GAME'))) . ' 	}')) . ':</td>
    <td>
      <select name="default_game" class="input">
        ';// BEGIN game_row
$_game_row_count = (isset($this->_tpldata['game_row.'])) ?  sizeof($this->_tpldata['game_row.']) : 0;
if ($_game_row_count) {
for ($_game_row_i = 0; $_game_row_i < $_game_row_count; $_game_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['game_row.'][$_game_row_i]['VALUE'])) ? $this->_tpldata['game_row.'][$_game_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['game_row.'][$_game_row_i]['SELECTED'])) ? $this->_tpldata['game_row.'][$_game_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['game_row.'][$_game_row_i]['OPTION'])) ? $this->_tpldata['game_row.'][$_game_row_i]['OPTION'] : '') . '</option>
        ';}}
// END game_row
echo '
      </select>
    </td>
  </tr>
    <td align="center" width="100%" colspan=2 class="row1">' . ((isset($this->_tpldata['.'][0]['L_DEFAULT_GAME_WARN'])) ? $this->_tpldata['.'][0]['L_DEFAULT_GAME_WARN'] : ((isset($user->lang['DEFAULT_GAME_WARN'])) ? $user->lang['DEFAULT_GAME_WARN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFAULT_GAME_WARN'))) . ' 	}')) . '</td>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_DEFAULT_STYLE'])) ? $this->_tpldata['.'][0]['L_DEFAULT_STYLE'] : ((isset($user->lang['DEFAULT_STYLE'])) ? $user->lang['DEFAULT_STYLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFAULT_STYLE'))) . ' 	}')) . ':</td>
    <td>
      <select name="default_style" class="input">
        ';// BEGIN style_row
$_style_row_count = (isset($this->_tpldata['style_row.'])) ?  sizeof($this->_tpldata['style_row.']) : 0;
if ($_style_row_count) {
for ($_style_row_i = 0; $_style_row_i < $_style_row_count; $_style_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['style_row.'][$_style_row_i]['VALUE'])) ? $this->_tpldata['style_row.'][$_style_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['style_row.'][$_style_row_i]['SELECTED'])) ? $this->_tpldata['style_row.'][$_style_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['style_row.'][$_style_row_i]['OPTION'])) ? $this->_tpldata['style_row.'][$_style_row_i]['OPTION'] : '') . '</option>
        ';}}
// END style_row
echo '
      </select>
      &nbsp;&nbsp; (<a href="javascript:pop_preview()">' . ((isset($this->_tpldata['.'][0]['L_PREVIEW'])) ? $this->_tpldata['.'][0]['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PREVIEW'))) . ' 	}')) . '</a>)
    </td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_DEFAULT_PAGE'])) ? $this->_tpldata['.'][0]['L_DEFAULT_PAGE'] : ((isset($user->lang['DEFAULT_PAGE'])) ? $user->lang['DEFAULT_PAGE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFAULT_PAGE'))) . ' 	}')) . ':</td>
    <td>
      <select name="start_page" class="input">
        ';// BEGIN page_row
$_page_row_count = (isset($this->_tpldata['page_row.'])) ?  sizeof($this->_tpldata['page_row.']) : 0;
if ($_page_row_count) {
for ($_page_row_i = 0; $_page_row_i < $_page_row_count; $_page_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['page_row.'][$_page_row_i]['VALUE'])) ? $this->_tpldata['page_row.'][$_page_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['page_row.'][$_page_row_i]['SELECTED'])) ? $this->_tpldata['page_row.'][$_page_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['page_row.'][$_page_row_i]['OPTION'])) ? $this->_tpldata['page_row.'][$_page_row_i]['OPTION'] : '') . '</option>
        ';}}
// END page_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_HIDE_INACTIVE'])) ? $this->_tpldata['.'][0]['L_HIDE_INACTIVE'] : ((isset($user->lang['HIDE_INACTIVE'])) ? $user->lang['HIDE_INACTIVE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HIDE_INACTIVE'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_HIDE_INACTIVE_NOTE'])) ? $this->_tpldata['.'][0]['L_HIDE_INACTIVE_NOTE'] : ((isset($user->lang['HIDE_INACTIVE_NOTE'])) ? $user->lang['HIDE_INACTIVE_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HIDE_INACTIVE_NOTE'))) . ' 	}')) . '</span></td>
    <td><span class="small"><input type="radio" name="hide_inactive" value="1"' . ((isset($this->_tpldata['.'][0]['HIDE_INACTIVE_YES_CHECKED'])) ? $this->_tpldata['.'][0]['HIDE_INACTIVE_YES_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_YES'])) ? $this->_tpldata['.'][0]['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'YES'))) . ' 	}')) . '&nbsp;&nbsp;<input type="radio" name="hide_inactive" value="0"' . ((isset($this->_tpldata['.'][0]['HIDE_INACTIVE_NO_CHECKED'])) ? $this->_tpldata['.'][0]['HIDE_INACTIVE_NO_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_NO'])) ? $this->_tpldata['.'][0]['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO'))) . ' 	}')) . '</span></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_INACTIVE_PERIOD'])) ? $this->_tpldata['.'][0]['L_INACTIVE_PERIOD'] : ((isset($user->lang['INACTIVE_PERIOD'])) ? $user->lang['INACTIVE_PERIOD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INACTIVE_PERIOD'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_INACTIVE_PERIOD_NOTE'])) ? $this->_tpldata['.'][0]['L_INACTIVE_PERIOD_NOTE'] : ((isset($user->lang['INACTIVE_PERIOD_NOTE'])) ? $user->lang['INACTIVE_PERIOD_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INACTIVE_PERIOD_NOTE'))) . ' 	}')) . '</span></td>
    <td><input type="text" name="inactive_period" size="5" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['INACTIVE_PERIOD'])) ? $this->_tpldata['.'][0]['INACTIVE_PERIOD'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_ACTIVE_POINT_ADJ'])) ? $this->_tpldata['.'][0]['L_ACTIVE_POINT_ADJ'] : ((isset($user->lang['ACTIVE_POINT_ADJ'])) ? $user->lang['ACTIVE_POINT_ADJ'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ACTIVE_POINT_ADJ'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_ACTIVE_POINT_ADJ_NOTE'])) ? $this->_tpldata['.'][0]['L_ACTIVE_POINT_ADJ_NOTE'] : ((isset($user->lang['ACTIVE_POINT_ADJ_NOTE'])) ? $user->lang['ACTIVE_POINT_ADJ_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ACTIVE_POINT_ADJ_NOTE'))) . ' 	}')) . '</span></td>
    <td><input type="text" name="active_point_adj" size="7" maxlength="10" value="' . ((isset($this->_tpldata['.'][0]['ACTIVE_POINT_ADJ'])) ? $this->_tpldata['.'][0]['ACTIVE_POINT_ADJ'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_INACTIVE_POINT_ADJ'])) ? $this->_tpldata['.'][0]['L_INACTIVE_POINT_ADJ'] : ((isset($user->lang['INACTIVE_POINT_ADJ'])) ? $user->lang['INACTIVE_POINT_ADJ'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INACTIVE_POINT_ADJ'))) . ' 	}')) . ':<br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_INACTIVE_POINT_ADJ_NOTE'])) ? $this->_tpldata['.'][0]['L_INACTIVE_POINT_ADJ_NOTE'] : ((isset($user->lang['INACTIVE_POINT_ADJ_NOTE'])) ? $user->lang['INACTIVE_POINT_ADJ_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'INACTIVE_POINT_ADJ_NOTE'))) . ' 	}')) . '</span></td>
    <td><input type="text" name="inactive_point_adj" size="7" maxlength="10" value="' . ((isset($this->_tpldata['.'][0]['INACTIVE_POINT_ADJ'])) ? $this->_tpldata['.'][0]['INACTIVE_POINT_ADJ'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_ENABLE_GZIP'])) ? $this->_tpldata['.'][0]['L_ENABLE_GZIP'] : ((isset($user->lang['ENABLE_GZIP'])) ? $user->lang['ENABLE_GZIP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENABLE_GZIP'))) . ' 	}')) . ':</td>
    <td><span class="small"><input type="radio" name="enable_gzip" value="1"' . ((isset($this->_tpldata['.'][0]['GZIP_YES_CHECKED'])) ? $this->_tpldata['.'][0]['GZIP_YES_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_YES'])) ? $this->_tpldata['.'][0]['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'YES'))) . ' 	}')) . '&nbsp;&nbsp;<input type="radio" name="enable_gzip" value="0"' . ((isset($this->_tpldata['.'][0]['GZIP_NO_CHECKED'])) ? $this->_tpldata['.'][0]['GZIP_NO_CHECKED'] : '') . ' /> ' . ((isset($this->_tpldata['.'][0]['L_NO'])) ? $this->_tpldata['.'][0]['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO'))) . ' 	}')) . '</span></td>
  </tr>
</table>
<br />

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <colgroup>
    <col width="40%" class="row2" /><col width="60%" class="row1" />
  </colgroup>
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_DEFAULT_PERMISSIONS'])) ? $this->_tpldata['.'][0]['L_DEFAULT_PERMISSIONS'] : ((isset($user->lang['DEFAULT_PERMISSIONS'])) ? $user->lang['DEFAULT_PERMISSIONS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFAULT_PERMISSIONS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row1" colspan="2"><span class="small">' . ((isset($this->_tpldata['.'][0]['L_DEFAULT_PERMISSIONS_NOTE'])) ? $this->_tpldata['.'][0]['L_DEFAULT_PERMISSIONS_NOTE'] : ((isset($user->lang['DEFAULT_PERMISSIONS_NOTE'])) ? $user->lang['DEFAULT_PERMISSIONS_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DEFAULT_PERMISSIONS_NOTE'))) . ' 	}')) . '</span></td>
  </tr>
  ';// BEGIN permissions_row
$_permissions_row_count = (isset($this->_tpldata['permissions_row.'])) ?  sizeof($this->_tpldata['permissions_row.']) : 0;
if ($_permissions_row_count) {
for ($_permissions_row_i = 0; $_permissions_row_i < $_permissions_row_count; $_permissions_row_i++)
{
echo '
  <tr>
    <td>' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['GROUP'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['GROUP'] : '') . ':</td>
    <td nowrap="nowrap">
      ';// BEGIN check_group
$_check_group_count = (isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'])) ? sizeof($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.']) : 0;
if ($_check_group_count) {
for ($_check_group_i = 0; $_check_group_i < $_check_group_count; $_check_group_i++)
{
echo '
      <input type="checkbox" name="' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y"' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' />
      <span class="small">' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'] : '') . '</span>
      ';}}
// END check_group
echo '
    </td>
  </tr>
  ';}}
// END permissions_row
echo '
</table>
<br />

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <colgroup>
    <col width="60%" class="row2" /><col width="40%" class="row1" />
  </colgroup>
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_COOKIE_SETTINGS'])) ? $this->_tpldata['.'][0]['L_COOKIE_SETTINGS'] : ((isset($user->lang['COOKIE_SETTINGS'])) ? $user->lang['COOKIE_SETTINGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COOKIE_SETTINGS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_COOKIE_DOMAIN'])) ? $this->_tpldata['.'][0]['L_COOKIE_DOMAIN'] : ((isset($user->lang['COOKIE_DOMAIN'])) ? $user->lang['COOKIE_DOMAIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COOKIE_DOMAIN'))) . ' 	}')) . ':</td>
    <td><input type="text" name="cookie_domain" size="25" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['COOKIE_DOMAIN'])) ? $this->_tpldata['.'][0]['COOKIE_DOMAIN'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_COOKIE_NAME'])) ? $this->_tpldata['.'][0]['L_COOKIE_NAME'] : ((isset($user->lang['COOKIE_NAME'])) ? $user->lang['COOKIE_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COOKIE_NAME'))) . ' 	}')) . ':</td>
    <td><input type="text" name="cookie_name" size="25" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['COOKIE_NAME'])) ? $this->_tpldata['.'][0]['COOKIE_NAME'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_COOKIE_PATH'])) ? $this->_tpldata['.'][0]['L_COOKIE_PATH'] : ((isset($user->lang['COOKIE_PATH'])) ? $user->lang['COOKIE_PATH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'COOKIE_PATH'))) . ' 	}')) . ':</td>
    <td><input type="text" name="cookie_path" size="25" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['COOKIE_PATH'])) ? $this->_tpldata['.'][0]['COOKIE_PATH'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_SESSION_LENGTH'])) ? $this->_tpldata['.'][0]['L_SESSION_LENGTH'] : ((isset($user->lang['SESSION_LENGTH'])) ? $user->lang['SESSION_LENGTH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SESSION_LENGTH'))) . ' 	}')) . ':</td>
    <td><input type="text" name="session_length" size="7" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['SESSION_LENGTH'])) ? $this->_tpldata['.'][0]['SESSION_LENGTH'] : '') . '" class="input" /></td>
  </tr>
</table>
<br />

<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <colgroup>
    <col width="60%" class="row2" /><col width="40%" class="row1" />
  </colgroup>
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_EMAIL_SETTINGS'])) ? $this->_tpldata['.'][0]['L_EMAIL_SETTINGS'] : ((isset($user->lang['EMAIL_SETTINGS'])) ? $user->lang['EMAIL_SETTINGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EMAIL_SETTINGS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td>' . ((isset($this->_tpldata['.'][0]['L_ADMIN_EMAIL'])) ? $this->_tpldata['.'][0]['L_ADMIN_EMAIL'] : ((isset($user->lang['ADMIN_EMAIL'])) ? $user->lang['ADMIN_EMAIL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADMIN_EMAIL'))) . ' 	}')) . ':</td>
    <td><input type="text" name="admin_email" size="30" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['ADMIN_EMAIL'])) ? $this->_tpldata['.'][0]['ADMIN_EMAIL'] : '') . '" class="input" /></td>
  </tr>
</table>
<br />


<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2"><input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" /></th>
  </tr>
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>