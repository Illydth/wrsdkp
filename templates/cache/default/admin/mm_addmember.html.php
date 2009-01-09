<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
<!--
function check_form()
{
    if (document.post.member_name.value.length < 2)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_NAME_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_NAME_EMPTY'] : '') . '\');
        return false;
    }
    return true;
}               
//-->
</script>

<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_MEMBER'])) ? $this->_tpldata['.'][0]['F_ADD_MEMBER'] : '') . '" name="post" onsubmit="return check_form(this)">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_NAME'])) ? $this->_tpldata['.'][0]['URI_NAME'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['V_MEMBER_NAME'])) ? $this->_tpldata['.'][0]['V_MEMBER_NAME'] : '') . '" />
<input type="hidden" name="compare_ids[]" value="' . ((isset($this->_tpldata['.'][0]['MEMBER_ID'])) ? $this->_tpldata['.'][0]['MEMBER_ID'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="6">' . ((isset($this->_tpldata['.'][0]['L_ADD_MEMBER_TITLE'])) ? $this->_tpldata['.'][0]['L_ADD_MEMBER_TITLE'] : ((isset($user->lang['ADD_MEMBER_TITLE'])) ? $user->lang['ADD_MEMBER_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_MEMBER_TITLE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="member_name" size="20" maxlength="30" value="' . ((isset($this->_tpldata['.'][0]['MEMBER_NAME'])) ? $this->_tpldata['.'][0]['MEMBER_NAME'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_MEMBER_NAME'])) ? $this->_tpldata['.'][0]['FV_MEMBER_NAME'] : '') . '</td>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2">
      <input type="text" name="member_earned" size="8" maxlength="14" value="' . ((isset($this->_tpldata['.'][0]['MEMBER_EARNED'])) ? $this->_tpldata['.'][0]['MEMBER_EARNED'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_MEMBER_EARNED'])) ? $this->_tpldata['.'][0]['FV_MEMBER_EARNED'] : '') . '
      / ' . ((isset($this->_tpldata['.'][0]['L_SHOULD_BE'])) ? $this->_tpldata['.'][0]['L_SHOULD_BE'] : ((isset($user->lang['SHOULD_BE'])) ? $user->lang['SHOULD_BE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOULD_BE'))) . ' 	}')) . ': <span class="positive">' . ((isset($this->_tpldata['.'][0]['CORRECT_MEMBER_EARNED'])) ? $this->_tpldata['.'][0]['CORRECT_MEMBER_EARNED'] : '') . '</span>
    </td>
  </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_RACE'])) ? $this->_tpldata['.'][0]['L_RACE'] : ((isset($user->lang['RACE'])) ? $user->lang['RACE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RACE'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2">
      <select name="member_race_id" class="input">
        ';// BEGIN race_row
$_race_row_count = (isset($this->_tpldata['race_row.'])) ?  sizeof($this->_tpldata['race_row.']) : 0;
if ($_race_row_count) {
for ($_race_row_i = 0; $_race_row_i < $_race_row_count; $_race_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['race_row.'][$_race_row_i]['VALUE'])) ? $this->_tpldata['race_row.'][$_race_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['race_row.'][$_race_row_i]['SELECTED'])) ? $this->_tpldata['race_row.'][$_race_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['race_row.'][$_race_row_i]['OPTION'])) ? $this->_tpldata['race_row.'][$_race_row_i]['OPTION'] : '') . '</option>
        ';}}
// END race_row
echo '
      </select>
    </td>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2">
      <input type="text" name="member_spent" size="8" maxlength="14" value="' . ((isset($this->_tpldata['.'][0]['MEMBER_SPENT'])) ? $this->_tpldata['.'][0]['MEMBER_SPENT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_MEMBER_SPENT'])) ? $this->_tpldata['.'][0]['FV_MEMBER_SPENT'] : '') . '
      / ' . ((isset($this->_tpldata['.'][0]['L_SHOULD_BE'])) ? $this->_tpldata['.'][0]['L_SHOULD_BE'] : ((isset($user->lang['SHOULD_BE'])) ? $user->lang['SHOULD_BE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SHOULD_BE'))) . ' 	}')) . ': <span class="negative">' . ((isset($this->_tpldata['.'][0]['CORRECT_MEMBER_SPENT'])) ? $this->_tpldata['.'][0]['CORRECT_MEMBER_SPENT'] : '') . '</span>
    </td>
  </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2">
      <select name="member_class_id" class="input">
        ';// BEGIN class_row
$_class_row_count = (isset($this->_tpldata['class_row.'])) ?  sizeof($this->_tpldata['class_row.']) : 0;
if ($_class_row_count) {
for ($_class_row_i = 0; $_class_row_i < $_class_row_count; $_class_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['VALUE'])) ? $this->_tpldata['class_row.'][$_class_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['SELECTED'])) ? $this->_tpldata['class_row.'][$_class_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['OPTION'])) ? $this->_tpldata['class_row.'][$_class_row_i]['OPTION'] : '') . '</option>
        ';}}
// END class_row
echo '
      </select>
    </td>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="member_adjustment" size="8" maxlength="14" value="' . ((isset($this->_tpldata['.'][0]['MEMBER_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['MEMBER_ADJUSTMENT'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_MEMBER_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['FV_MEMBER_ADJUSTMENT'] : '') . '</td>
  </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_LEVEL'])) ? $this->_tpldata['.'][0]['L_LEVEL'] : ((isset($user->lang['LEVEL'])) ? $user->lang['LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEVEL'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2"><input type="text" name="member_level" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['MEMBER_LEVEL'])) ? $this->_tpldata['.'][0]['MEMBER_LEVEL'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_MEMBER_LEVEL'])) ? $this->_tpldata['.'][0]['FV_MEMBER_LEVEL'] : '') . '</td>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . ':</td>
    <td width="50%" nowrap="nowrap" class="row2"><span class="' . ((isset($this->_tpldata['.'][0]['C_MEMBER_CURRENT'])) ? $this->_tpldata['.'][0]['C_MEMBER_CURRENT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['MEMBER_CURRENT'])) ? $this->_tpldata['.'][0]['MEMBER_CURRENT'] : '') . '</span></td>
  </tr>
  <tr>
    <td width="100" nowrap="nowrap" class="row1">' . ((isset($this->_tpldata['.'][0]['L_MEMBER_RANK'])) ? $this->_tpldata['.'][0]['L_MEMBER_RANK'] : ((isset($user->lang['MEMBER_RANK'])) ? $user->lang['MEMBER_RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBER_RANK'))) . ' 	}')) . '</td>
    <td colspan="3" nowrap="nowrap" class="row2">
      <select name="member_rank_id" class="input">
        ';// BEGIN rank_row
$_rank_row_count = (isset($this->_tpldata['rank_row.'])) ?  sizeof($this->_tpldata['rank_row.']) : 0;
if ($_rank_row_count) {
for ($_rank_row_i = 0; $_rank_row_i < $_rank_row_count; $_rank_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['rank_row.'][$_rank_row_i]['VALUE'])) ? $this->_tpldata['rank_row.'][$_rank_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['rank_row.'][$_rank_row_i]['SELECTED'])) ? $this->_tpldata['rank_row.'][$_rank_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['rank_row.'][$_rank_row_i]['OPTION'])) ? $this->_tpldata['rank_row.'][$_rank_row_i]['OPTION'] : '') . '</option>
        ';}}
// END rank_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <th align="center" colspan="6">
    ';// IF S_ADD
if ($this->_tpldata['.'][0]['S_ADD']) { 
echo '
    <input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_MEMBER'])) ? $this->_tpldata['.'][0]['L_ADD_MEMBER'] : ((isset($user->lang['ADD_MEMBER'])) ? $user->lang['ADD_MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_MEMBER'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />
    ';// ELSE
} else {
echo '
    <input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_UPDATE_MEMBER'])) ? $this->_tpldata['.'][0]['L_UPDATE_MEMBER'] : ((isset($user->lang['UPDATE_MEMBER'])) ? $user->lang['UPDATE_MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_MEMBER'))) . ' 	}')) . '" class="mainoption" /> <input type="submit"  name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE_MEMBER'])) ? $this->_tpldata['.'][0]['L_DELETE_MEMBER'] : ((isset($user->lang['DELETE_MEMBER'])) ? $user->lang['DELETE_MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_MEMBER'))) . ' 	}')) . '" class="liteoption" />
    ';// ENDIF
}
echo '
    </th>
  </tr>
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>