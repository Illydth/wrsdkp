<?php
/******************************
* EQdkp
* Copyright 2002-2003
* Licensed under the GNU GPL.  See COPYING for full terms.
* ------------------
* lang_main.php
* begin: Wed December 18 2002
*
* $Id: lang_main.php 46 2007-06-19 07:29:11Z tsigo $
*
* Chinese - Converted by zoof@263.net using http://pt.chinaeq.com
******************************/

if ( !defined('EQDKP_INC') )
{
     die('Do not access this file directly.');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang['ENCODING'] = 'gb2312';
$lang['XML_LANG'] = 'cn';

// Titles
$lang['admin_title_prefix']   = "%1\$s %2\$s ����Ա";
$lang['listadj_title']        = '�Ŷӵ����б�';
$lang['listevents_title']     = '�ֵ';
$lang['listiadj_title']       = '���˵����б�';
$lang['listitems_title']      = '��ƷPTֵ';
$lang['listnews_title']       = '������Ŀ';
$lang['listmembers_title']    = '��׼��Ա';
$lang['listpurchased_title']  = '��Ʒ���';
$lang['listraids_title']      = 'raids�б�';
$lang['login_title']          = '��¼';
$lang['message_title']        = 'EQdkp����Ϣ';
$lang['register_title']       = 'ע��';
$lang['settings_title']       = '�˺�����';
$lang['stats_title']          = "%1\$s ״̬";
$lang['summary_title']        = '����ժҪ';
$lang['title_prefix']         = "%1\$s %2\$s";
$lang['viewevent_title']      = "�鿴raid�����¼ for %1\$s";
$lang['viewitem_title']       = "�鿴���������¼ for %1\$s";
$lang['viewmember_title']     = "��� for %1\$s";
$lang['viewraid_title']       = 'raid��Ҫ';

// Main Menu
$lang['menu_admin_panel'] = '�������';
$lang['menu_events'] = '�';
$lang['menu_itemhist'] = '��Ʒ���';
$lang['menu_itemval'] = '��ƷPTֵ';
$lang['menu_news'] = '����';
$lang['menu_raids'] = 'Raids';
$lang['menu_register'] = 'ע��';
$lang['menu_settings'] = '����';
$lang['menu_standings'] = '������Ϣ';
$lang['menu_stats'] = '״̬';
$lang['menu_summary'] = 'ժҪ';

// Column Headers
$lang['account'] = '�˻�';
$lang['action'] = '����';
$lang['active'] = '��Ϊ';
$lang['add'] = '���';
$lang['added_by'] = '��� By';
$lang['adjustment'] = '����';
$lang['administration'] = '����';
$lang['administrative_options'] = '��������';
$lang['admin_index'] = '����Ա�ҳ';
$lang['attendance_by_event'] = '��ϯ�';
$lang['attended'] = '��ϯ';
$lang['attendees'] = '��ϯ��';
$lang['average'] = 'ƽ��';
$lang['backup_database'] = '������ݿ�';
$lang['buyer'] = '��';
$lang['buyers'] = '�˿���';
$lang['class'] = 'ְҵ';
$lang['class_distribution'] = 'ְҵ�ֲ�';
$lang['class_summary'] = "ְҵ��Ҫ: %1\$s to %2\$s";
$lang['configuration'] = '����';
$lang['current'] = '��ǰ';
$lang['date'] = '����';
$lang['delete'] = 'ɾ��';
$lang['delete_confirmation'] = 'ȷ��ɾ��';
$lang['dkp_value'] = "%1\$s ֵ";
$lang['drops'] = '����';
$lang['earned'] = '���';
$lang['enter_dates'] = '��������';
$lang['eqdkp_index'] = 'EQdkp �ҳ';
$lang['eqdkp_upgrade'] = 'EQdkp ����';
$lang['event'] = '�';
$lang['events'] = '�';
$lang['filter'] = '������';
$lang['first'] = '���';
$lang['rank'] = 'ͷ��';
$lang['general_admin'] = '��ͨ����Ա';
$lang['get_new_password'] = '�õ�һ��������';
$lang['group_adj'] = '�Ŷӵ���';
$lang['group_adjustments'] = '�Ŷӵ���';
$lang['individual_adjustments'] = '���˵���';
$lang['individual_adjustment_history'] = '���˵��ڼ�¼';
$lang['indiv_adj'] = '���˵���';
$lang['ip_address'] = 'IP��ַ';
$lang['item'] = '��Ʒ';
$lang['items'] = '��Ʒ';
$lang['item_purchase_history'] = '��Ʒ���׼�¼';
$lang['last'] = '���';
$lang['lastloot'] = '����loot';
$lang['lastraid'] = '����raid';
$lang['last_visit'] = '���ķ��';
$lang['level'] = '�ȼ�';
$lang['log_date_time'] = '��¼������/���';
$lang['loot_factor'] = 'Loot��';
$lang['loots'] = 'Loots';
$lang['manage'] = '����';
$lang['member'] = '��Ա';
$lang['members'] = '��Ա��';
$lang['members_present_at'] = "��ǰ��Ա at %1\$s on %2\$s";
$lang['miscellaneous'] = '����';
$lang['name'] = '����';
$lang['news'] = '��Ϣ';
$lang['note'] = 'ע�';
$lang['online'] = '����';
$lang['options'] = '����';
$lang['paste_log'] = 'ճ��һ��ҳ�׼�¼';
$lang['percent'] = '��ǰ��';
$lang['permissions'] = '���';
$lang['per_day'] = 'ÿ��';
$lang['per_raid'] = 'ÿ��raid';
$lang['pct_earned_lost_to'] = '% ��õ���۷�';
$lang['preferences'] = '���';
$lang['purchase_history_for'] = "������� for %1\$s";
$lang['quote'] = '����';
$lang['race'] = '����';
$lang['raid'] = 'Raid';
$lang['raids'] = 'Raids';
$lang['raid_id'] = 'Raid ID';
$lang['raid_attendance_history'] = 'raid��ϯ��¼';
$lang['raids_lifetime'] = "��Ч��� (%1\$s - %2\$s)";
$lang['raids_x_days'] = "���� %1\$d ��";
$lang['rank_distribution'] = 'ͷ�η���';
$lang['recorded_raid_history'] = "raid�����¼ for %1\$s";
$lang['reason'] = 'ԭ��';
$lang['registration_information'] = 'ע����Ϣ';
$lang['result'] = '���';
$lang['session_id'] = 'Session ID';
$lang['settings'] = '����';
$lang['spent'] = '����';
$lang['summary_dates'] = "Raid ��Ҫ: %1\$s to %2\$s";
$lang['themes'] = '����';
$lang['time'] = '���';
$lang['total'] = '�ܹ�';
$lang['total_earned'] = '���ϼ�';
$lang['total_items'] = '��Ʒ���';
$lang['total_raids'] = 'raid���';
$lang['total_spent'] = '�������';
$lang['transfer_member_history'] = '��Ա���ת��';
$lang['turn_ins'] = '��Ʒת��';
$lang['type'] = '����';
$lang['update'] = '����';
$lang['updated_by'] = '���� By';
$lang['user'] = '�û�';
$lang['username'] = '�û���';
$lang['value'] = 'PTֵ';
$lang['view'] = '�鿴';
$lang['view_action'] = '�鿴��Ϊ';
$lang['view_logs'] = '�۲���־';

// Page Foot Counts
$lang['listadj_footcount']               = "... ���� %1\$d ������ / %2\$d ÿҳ";
$lang['listevents_footcount']            = "... ���� %1\$d � / %2\$d ÿҳ";
$lang['listiadj_footcount']              = "... ���� %1\$d ���˵��� / %2\$d ÿҳ";
$lang['listitems_footcount']             = "... ���� %1\$d ������Ʒ / %2\$d ÿҳ";
$lang['listmembers_active_footcount']    = "... ���� %1\$d ��Ծ��Ա / %2\$sShow All</a>";
$lang['listmembers_compare_footcount']   = "... �Ƚ� %1\$d ��Ա";
$lang['listmembers_footcount']           = "... ���� %1\$d ��Ա";
$lang['listnews_footcount']              = "... ���� %1\$d ��Ϣ��� / %2\$d ÿҳ";
$lang['listpurchased_footcount']         = "... ���� %1\$d ��Ʒ / %2\$d ÿҳ";
$lang['listraids_footcount']             = "... ���� %1\$d raid(s) / %2\$d ÿҳ";
$lang['stats_active_footcount']          = "... ���� %1\$d ��Ծ��Ա / %2\$s�Ծ����</a>";
$lang['stats_footcount']                 = "... ���� %1\$d ��Ա";
$lang['viewevent_footcount']             = "... ���� %1\$d raid(s)";
$lang['viewitem_footcount']              = "... ���� %1\$d ��Ʒ";
$lang['viewmember_adjustment_footcount'] = "... ���� %1\$d ���˵���";
$lang['viewmember_item_footcount']       = "... ���� %1\$d ������Ʒ / %2\$d ÿҳ";
$lang['viewmember_raid_footcount']       = "... ���� %1\$d ��ϯ raid(s) / %2\$d ÿҳ";
$lang['viewraid_attendees_footcount']    = "... ���� %1\$d ��ϯ��";
$lang['viewraid_drops_footcount']        = "... ���� %1\$d ����";

// Submit Buttons
$lang['close_window'] = '�رմ���';
$lang['compare_members'] = '��Ա�Ա�';
$lang['create_news_summary'] = '�½���Ϣ��Ҫ';
$lang['login'] = '����';
$lang['logout'] = '�ǳ�';
$lang['log_add_data'] = '�����������';
$lang['lost_password'] = '�������';
$lang['no'] = '��';
$lang['proceed'] = '����';
$lang['reset'] = '����';
$lang['set_admin_perms'] = '���ù���Ա���';
$lang['submit'] = '�ύ';
$lang['upgrade'] = '����';
$lang['yes'] = '�';

// Form Element Descriptions
$lang['admin_login'] = '����Ա����';
$lang['confirm_password'] = 'ȷ������';
$lang['confirm_password_note'] = '��������Ѹ��ģ�ֻ��ȷ���µ�����';
$lang['current_password'] = '��ǰ����';
$lang['current_password_note'] = '�����Ҫ�����û���/���룬��ȷ�ϵ�ǰ����';
$lang['email'] = 'Email';
$lang['email_address'] = 'Email ��ַ';
$lang['ending_date'] = '��ֹ����';
$lang['from'] = '��';
$lang['guild_tag'] = '�����';
$lang['language'] = '����';
$lang['new_password'] = '������';
$lang['new_password_note'] = '�����Ҫ�������룬ֻ���ṻһ���µ�����';
$lang['password'] = '����';
$lang['remember_password'] = '��ס�� (cookie)';
$lang['starting_date'] = '������';
$lang['style'] = '���';
$lang['to'] = '��';
$lang['username'] = '�û���';
$lang['users'] = '�û�';

// Pagination
$lang['next_page'] = '��ҳ';
$lang['page'] = 'ҳ';
$lang['previous_page'] = '��ҳ';

// Permission Messages
$lang['noauth_default_title'] = 'Ȩ�޾ܾ�';
$lang['noauth_u_event_list'] = '��û���г����Ȩ��.';
$lang['noauth_u_event_view'] = '��û�в鿴���Ȩ��.';
$lang['noauth_u_item_list'] = '��û���г���Ʒ��Ȩ��.';
$lang['noauth_u_item_view'] = '��û�в鿴��Ʒ��Ȩ��.';
$lang['noauth_u_member_list'] = '��û�в鿴��Ա״̬��Ȩ��.';
$lang['noauth_u_member_view'] = '��û�в鿴��Ա�����Ȩ��.';
$lang['noauth_u_raid_list'] = '��û���г�raids��Ȩ��.';
$lang['noauth_u_raid_view'] = '��û�в鿴raids��Ȩ��.';

// Submission Success Messages
$lang['add_itemvote_success'] = '����������Ʒ��ͶƱ�Ѿ���¼.';
$lang['update_itemvote_success'] = '����������Ʒ��ͶƱ�Ѿ�����.';
$lang['update_settings_success'] = '�û������Ѿ�����.';

// Form Validation Errors
$lang['fv_alpha_attendees'] = '��ɫ\' EQ�е�������ֻ������ĸ��.';
$lang['fv_already_registered_email'] = 'e-mail��ַ�Ѿ�ע��.';
$lang['fv_already_registered_username'] = '�û����Ѿ�ע��.';
$lang['fv_difference_transfer'] = '�����¼ת�Ʊ���������ͬ��֮��.';
$lang['fv_difference_turnin'] = 'turn-in����������ͬ��֮��.';
$lang['fv_invalid_email'] = 'e-mail��ַ��Ч.';
$lang['fv_match_password'] = '�������ƥ��.';
$lang['fv_member_associated']  = "%1\$s �Ѿ����������û��˺�.";
$lang['fv_number'] = '��������.';
$lang['fv_number_adjustment'] = '����ֵ��������.';
$lang['fv_number_alimit'] = '�������Ʊ�������.';
$lang['fv_number_ilimit'] = '��Ʒ���Ʊ�������.';
$lang['fv_number_inactivepd'] = 'δ�����ڱ�������.';
$lang['fv_number_pilimit'] = '������Ʒ���Ʊ�������.';
$lang['fv_number_rlimit'] = 'raids���Ʊ�������.';
$lang['fv_number_value'] = 'ֵ��������.';
$lang['fv_number_vote'] = 'ͶƱ��������.';
$lang['fv_range_day'] = '�� �����1-31�����.';
$lang['fv_range_hour'] = '� �����1-23�����.';
$lang['fv_range_minute'] = '���� �����1-59�����.';
$lang['fv_range_month'] = '�� �����1-12�����.';
$lang['fv_range_second'] = '�� �����0-59�����.';
$lang['fv_range_year'] = '�� ����Ǵ���1998�����.';
$lang['fv_required'] = 'Required Field';
$lang['fv_required_acro'] = '�������ĸ��д����Ϊ��.';
$lang['fv_required_adjustment'] = '����ֵ����Ϊ��.';
$lang['fv_required_attendees'] = 'raid����Ҫ��һ���μ���.';
$lang['fv_required_buyer'] = '����ѡ��һ���˿�.';
$lang['fv_required_buyers'] = '����ѡ������һ���˿�.';
$lang['fv_required_email'] = 'e-mail��ַ����Ϊ��.';
$lang['fv_required_event_name'] = 'һ������ѡ��.';
$lang['fv_required_guildtag'] = '����꾲���Ϊ��.';
$lang['fv_required_headline'] = '���ⲻ��Ϊ��.';
$lang['fv_required_inactivepd'] = 'If the hide inactive members field is set to Yes, a value for the inactive period must also be set.';
$lang['fv_required_item_name'] = '��Ʒ�����������д������ѡ��һ���Ѵ��ڵ���Ʒ.';
$lang['fv_required_member'] = 'һ����Ա���뱻ѡ��.';
$lang['fv_required_members'] = '����һ����Ա���뱻ѡ��.';
$lang['fv_required_message'] = '��Ϣ ����Ϊ��.';
$lang['fv_required_name'] = '���� ����Ϊ��.';
$lang['fv_required_password'] = '���� ����Ϊ��.';
$lang['fv_required_raidid'] = 'һ��raid���뱻ѡ��.';
$lang['fv_required_user'] = '�û��� ����Ϊ��.';
$lang['fv_required_value'] = 'ֵ ����Ϊ��.';
$lang['fv_required_vote'] = 'ͶƱ ����Ϊ��.';

// Miscellaneous
$lang['added'] = '����';
$lang['additem_raidid_note'] = "ֻ���������ڵ�RAID�ᱻ�Ծ / %1\$s�Ծ����</a>";
$lang['additem_raidid_showall_note'] = '�Ծ����raids';
$lang['addraid_datetime_note'] = '����log������ںͱ����Զ�.';
$lang['addraid_value_note'] = '���ν�������������ո񣬻���ѡ�����Ĭ��ֵ';
$lang['add_items_from_raid'] = '����Raid���ӵ���Ʒ';
$lang['deleted'] = '��ɾ��';
$lang['done'] = '���';
$lang['enter_new'] = '�µ�¼';
$lang['error'] = '����';
$lang['head_admin'] = '�ϯ����Ա';
$lang['hold_ctrl_note'] = '��סCTRL���ж�ѡ';
$lang['list'] = '�б�';
$lang['list_groupadj'] = '�г��Ŷӵ���';
$lang['list_events'] = '�г��';
$lang['list_indivadj'] = '�г����˵���';
$lang['list_items'] = '�г���Ʒ';
$lang['list_members'] = '�г���Ա';
$lang['list_news'] = '�г���Ϣ';
$lang['list_raids'] = '�г�Raids';
$lang['may_be_negative_note'] = '���ܱ��ܾ�';
$lang['not_available'] = '���ɼ�';
$lang['no_news'] = 'No news entries found.';
$lang['of_raids'] = "%1\$d%% of raids";
$lang['or'] = '����';
$lang['powered_by'] = 'Powered by';
$lang['preview'] = 'Ԥ��';
$lang['required_field_note'] = '��ע*�ı�����д.';
$lang['select_1ofx_members'] = "ѡ�� 1 of %1\$d ��Ա...";
$lang['select_existing'] = 'ѡ���˳�';
$lang['select_version'] = 'ѡ����������EQdkp�汾';
$lang['success'] = '�ɹ�';
$lang['s_admin_note'] = '��Щ��ܱ��û��ı�.';
$lang['transfer_member_history_description'] = '�⽫ת��һ����Ա���е���� (raids, ��Ʒ, adjustments) ����һ����Ա.';
$lang['updated'] = '�Ѹ���';
$lang['upgrade_complete'] = '���EQdkp��װ�����Ѿ��ɹ�����.<br /><br /><b class="negative">Ϊ��ȫ��������Ƴ����ļ���</b>';

// Settings
$lang['account_settings'] = '�˺�����';
$lang['adjustments_per_page'] = '����ÿҳ';
$lang['basic'] = '����';
$lang['events_per_page'] = '¼�ÿҳ';
$lang['items_per_page'] = '��Ʒÿҳ';
$lang['news_per_page'] = '��Ϣ���ÿҳ';
$lang['raids_per_page'] = 'Raidsÿҳ';
$lang['associated_members'] = 'Associated Members';
$lang['guild_members'] = '�����Ա';

// Error messages
$lang['error_account_inactive'] = '�˺�û�м���.';
$lang['error_already_activated'] = '�˺��Ѿ�����.';
$lang['error_invalid_email'] = '��Чe-mail��ַ.';
$lang['error_invalid_event_provided'] = '��Ч event id.';
$lang['error_invalid_item_provided'] = '��Ч item id.';
$lang['error_invalid_key'] = '��Ч����ؼ���.';
$lang['error_invalid_name_provided'] = '��Ч��Ա����.';
$lang['error_invalid_news_provided'] = '��Ч��Ϣ id.';
$lang['error_invalid_raid_provided'] = '��Чraid id.';
$lang['error_user_not_found'] = '��Ч�û�����';
$lang['incorrect_password'] = '�������';
$lang['invalid_login'] = '�û���/���� ������߲�����';
$lang['not_admin'] = '�㲻ǹ���Ա';

// Registration
$lang['account_activated_admin']   = '�˺��Ѽ���.e-mail�ѷ���.';
$lang['account_activated_user']    = "�˺��Ѿ�������ڿ��� %1\$s����%2\$s.";
$lang['password_sent'] = '�µ������Ѿ�ͨ��e_mail��������.';
$lang['register_activation_self']  = "�˺��Ѿ�����, ��ǹ��֮ǰ���뼤��.<br /><br />e-mail�Ѿ����͵� %1\$s �����������μ����˺ŵ���Ϣ.";
$lang['register_activation_admin'] = "�˺��Ѿ�����, ��ǹ��֮ǰ����Ա���뼤����.<br /><br />e-mail�Ѿ����͵� %1\$s �������������Ϣ.";
$lang['register_activation_none']  = "�˺��Ѿ������������ڿ��� %1\$s����%2\$s.<br /><br />e-mail�Ѿ����͵� %3\$s �������������Ϣ.";
?>
