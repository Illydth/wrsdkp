<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['NEWS_PAGINATION'])) ? $this->_tpldata['.'][0]['NEWS_PAGINATION'] : '') . '</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" width="16" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="150" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_NEWS'])) ? $this->_tpldata['.'][0]['U_LIST_NEWS'] : '') . '&amp;o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
    <th align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_NEWS'])) ? $this->_tpldata['.'][0]['U_LIST_NEWS'] : '') . '&amp;o=' . ((isset($this->_tpldata['.'][0]['O_USERNAME'])) ? $this->_tpldata['.'][0]['O_USERNAME'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_USERNAME'])) ? $this->_tpldata['.'][0]['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERNAME'))) . ' 	}')) . '</a></th>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_NEWS'])) ? $this->_tpldata['.'][0]['U_LIST_NEWS'] : '') . '&amp;o=' . ((isset($this->_tpldata['.'][0]['O_HEADLINE'])) ? $this->_tpldata['.'][0]['O_HEADLINE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_HEADLINE'])) ? $this->_tpldata['.'][0]['L_HEADLINE'] : ((isset($user->lang['HEADLINE'])) ? $user->lang['HEADLINE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HEADLINE'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN news_row
$_news_row_count = (isset($this->_tpldata['news_row.'])) ?  sizeof($this->_tpldata['news_row.']) : 0;
if ($_news_row_count) {
for ($_news_row_i = 0; $_news_row_i < $_news_row_count; $_news_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['news_row.'][$_news_row_i]['ROW_CLASS'])) ? $this->_tpldata['news_row.'][$_news_row_i]['ROW_CLASS'] : '') . '">
    <td width="16" nowrap="nowrap" align="center"><a href="' . ((isset($this->_tpldata['news_row.'][$_news_row_i]['U_VIEW_NEWS'])) ? $this->_tpldata['news_row.'][$_news_row_i]['U_VIEW_NEWS'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.gif" width="16" height="16" alt="Edit" /></a></td>
    <td width="150" nowrap="nowrap">' . ((isset($this->_tpldata['news_row.'][$_news_row_i]['DATE'])) ? $this->_tpldata['news_row.'][$_news_row_i]['DATE'] : '') . '</td>
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['news_row.'][$_news_row_i]['USERNAME'])) ? $this->_tpldata['news_row.'][$_news_row_i]['USERNAME'] : '') . '</td>
    <td width="100%"><a href="' . ((isset($this->_tpldata['news_row.'][$_news_row_i]['U_VIEW_NEWS'])) ? $this->_tpldata['news_row.'][$_news_row_i]['U_VIEW_NEWS'] : '') . '">' . ((isset($this->_tpldata['news_row.'][$_news_row_i]['HEADLINE'])) ? $this->_tpldata['news_row.'][$_news_row_i]['HEADLINE'] : '') . '</a></td>
  </tr>
  ';}}
// END news_row
echo '
  <tr>
    <th colspan="4" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTNEWS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTNEWS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['NEWS_PAGINATION'])) ? $this->_tpldata['.'][0]['NEWS_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>