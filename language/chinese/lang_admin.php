<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * lang_admin.php
 * Began: Fri January 3 2003
 * 
 * $Id: lang_admin.php 46 2007-06-19 07:29:11Z tsigo $
 * Chinese Simp  converted by  Aoiete     aoiete@gmail.com    WWW.Replays.Net 
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
$lang['addadj_title']         = '����Ŷӵ���';
$lang['addevent_title']       = '����¼�';
$lang['addiadj_title']        = '��Ӹ��˵���';
$lang['additem_title']        = '�����Ʒ����';
$lang['addmember_title']      = '��ӹ����Ա';
$lang['addnews_title']        = '���������Ŀ';
$lang['addraid_title']        = '���һ��Raid';
$lang['addturnin_title']      = "��� Turn-in - Step %1\$d";
$lang['admin_index_title']    = 'WOWdkp ����';
$lang['config_title']         = '�ű� ����';
$lang['manage_members_title'] = '�������Ա';
$lang['manage_users_title']   = '�û��˺ź�Ȩ��';
$lang['parselog_title']       = '������־�ļ�';
$lang['plugins_title']        = '�������';
$lang['styles_title']         = '������';
$lang['viewlogs_title']       = '��־�Ķ�';

// Page Foot Counts
$lang['listusers_footcount']             = "... �ҵ� %1\$d λ�û� / %2\$d λÿҳ";
$lang['manage_members_footcount']        = "... �ҵ� %1\$d λ��Ա";
$lang['online_footcount']                = "... %1\$d λ��Ա����";
$lang['viewlogs_footcount']              = "... �ҵ� %1\$d ����־ / %2\$d ��ÿҳ";

// Submit Buttons
$lang['add_adjustment'] = '��� ������';
$lang['add_account'] = '����˺�';
$lang['add_event'] = 'Add events';
$lang['add_item'] = '�����Ʒ';
$lang['add_member'] = '��ӻ�Ա';
$lang['add_news'] = '�������';
$lang['add_raid'] = 'Add Raid';
$lang['add_style'] = '��ӷ��';
$lang['add_turnin'] = '���Turn-in';
$lang['delete_adjustment'] = 'ɾ��������';
$lang['delete_event'] = 'ɾ���¼�';
$lang['delete_item'] = 'ɾ����Ʒ';
$lang['delete_member'] = 'ɾ����Ա';
$lang['delete_news'] = 'ɾ������';
$lang['delete_raid'] = 'ɾ��Raid';
$lang['delete_selected_members'] = 'ɾ��ѡ����Ա';
$lang['delete_style'] = 'ɾ�������ʽ';
$lang['mass_delete'] = 'Ⱥ��ɾ��';
$lang['mass_update'] = 'Ⱥ�����';
$lang['parse_log'] = '������־';
$lang['search_existing'] = '������������';
$lang['select'] = 'ѡ��';
$lang['transfer_history'] = 'ת����ʷ��¼';
$lang['update_adjustment'] = '���µ���';
$lang['update_event'] = '�����¼�';
$lang['update_item'] = '������Ʒ';
$lang['update_member'] = '���»�Ա';
$lang['update_news'] = '��������';
$lang['update_raid'] = '����Raid';
$lang['update_style'] = '���·����ʽ';

// Misc
$lang['account_enabled'] = '�˺ż���';
$lang['adjustment_value'] = '���ڵ���ֵ';
$lang['adjustment_value_note'] = 'You can use negative Value';
$lang['code'] = '����';
$lang['contact'] = '��ϵ��';
$lang['create'] = '����';
$lang['found_members'] = "���� %1\$d ����, �ҵ� %2\$d λ��Ա";
$lang['headline'] = '�����';
$lang['hide'] = '����?';
$lang['install'] = '��װ';
$lang['item_search'] = '��Ʒ����';
$lang['list_prefix'] = 'ǰ׺�б�';
$lang['list_suffix'] = '��׺�б�';
$lang['logs'] = '��־';
$lang['log_find_all'] = '�������� (��������)';
$lang['manage_members'] = '��Ա����';
$lang['manage_plugins'] = '�������';
$lang['manage_users'] = '�û�����';
$lang['mass_update_note'] = '���������������ѡ����Ŀ�õ�Ӧ�ú͸���,������Щ���������ı�����. Ȼ��ѡ��"Ⱥ�����".
                             ɾ����ѡ�˺�, �� "Ⱥ��ɾ��".';
$lang['members'] = '��Ա';
$lang['member_rank'] = '��Ա����';
$lang['message_body'] = '��Ϣ����';
$lang['results'] = "%1\$d ��� (\"%2\$s\")";
$lang['search'] = 'search';
$lang['search_members'] = '���һ�Ա';
$lang['should_be'] = 'Ӧ����';
$lang['styles'] = '�����ʽ';
$lang['title'] = '����';
$lang['uninstall'] = 'ж��';
$lang['update_date_to'] = "����������<br />%1\$s?";
$lang['version'] = '�汾';
$lang['x_members_s'] = "%1\$d ��Ա";
$lang['x_members_p'] = "%1\$d ��Աs";

// Permission Messages
$lang['noauth_a_event_add']    = '��û��Ȩ������¼�.';
$lang['noauth_a_event_upd']    = '��û��Ȩ�޸����¼�.';
$lang['noauth_a_event_del']    = '��û��Ȩ��ɾ���¼�.';
$lang['noauth_a_groupadj_add'] = '��û��Ȩ������Ŷӵ���.';
$lang['noauth_a_groupadj_upd'] = '��û��Ȩ�޸����Ŷӵ���.';
$lang['noauth_a_groupadj_del'] = '��û��Ȩ��ɾ���Ŷӵ���.';
$lang['noauth_a_indivadj_add'] = '��û��Ȩ����Ӹ��˵���.';
$lang['noauth_a_indivadj_upd'] = '��û��Ȩ�޸��¸��˵���.';
$lang['noauth_a_indivadj_del'] = '��û��Ȩ��ɾ�����˵���.';
$lang['noauth_a_item_add']     = '��û��Ȩ�������Ʒ.';
$lang['noauth_a_item_upd']     = '��û��Ȩ�޸�����Ʒ.';
$lang['noauth_a_item_del']     = '��û��Ȩ��ɾ����Ʒ.';
$lang['noauth_a_news_add']     = '��û��Ȩ�����������Ŀ.';
$lang['noauth_a_news_upd']     = '��û��Ȩ�޸���������Ŀ.';
$lang['noauth_a_news_del']     = '��û��Ȩ��ɾ��������Ŀ.';
$lang['noauth_a_raid_add']     = '��û��Ȩ�����RAIDs.';
$lang['noauth_a_raid_upd']     = '��û��Ȩ�޸���RAIDs.';
$lang['noauth_a_raid_del']     = '��û��Ȩ��ɾ��RAIDs.';
$lang['noauth_a_turnin_add']   = '��û��Ȩ����� turn-ins.';
$lang['noauth_a_config_man']   = '��û��Ȩ�޹���DKPϵͳ ���������.';
$lang['noauth_a_members_man']  = '��û��Ȩ�޹������Ա.';
$lang['noauth_a_plugins_man']  = '��û��Ȩ�޹���ϵͳ���.';
$lang['noauth_a_styles_man']   = '��û��Ȩ�޹���ϵͳ�����ʽ.';
$lang['noauth_a_users_man']    = '��û��Ȩ�޹����û��˺�����.';
$lang['noauth_a_logs_view']    = '��û��Ȩ�޲鿴ϵͳ��־.';

// Submission Success Messages
$lang['admin_add_adj_success']               = "A %1\$s adjustment of %2\$.2f has been added to the database for your guild.";
$lang['admin_add_admin_success']             = "An e-mail has been sent to %1\$s with their administrative information.";
$lang['admin_add_event_success']             = "A value preset of %1\$s for a raid on %2\$s has been added to the database for your guild.";
$lang['admin_add_iadj_success']              = "An individual %1\$s adjustment of %2\$.2f for %3\$s has been added to the database for your guild.";
$lang['admin_add_item_success']              = "An item purchase entry for %1\$s, purchased by %2\$s for %3\$.2f has been added to the database for your guild.";
$lang['admin_add_member_success']            = "%1\$s has been added as a member of your guild.";
$lang['admin_add_news_success']              = 'The news entry has been added to the database for your guild.';
$lang['admin_add_raid_success']              = "The %1\$d/%2\$d/%3\$d raid on %4\$s has been added to the database for your guild.";
$lang['admin_add_style_success']             = 'The new style has been added successfully.';
$lang['admin_add_turnin_success']            = "%1\$s has been transferred from %2\$s to %3\$s.";
$lang['admin_delete_adj_success']            = "The %1\$s adjustment of %2\$.2f has been deleted from the database for your guild.";
$lang['admin_delete_admins_success']         = "The selected administrators have been deleted.";
$lang['admin_delete_event_success']          = "The value preset of %1\$s for a raid on %2\$s has been deleted from the database for your guild.";
$lang['admin_delete_iadj_success']           = "The individual %1\$s adjustment of %2\$.2f for %3\$s has been deleted from the database for your guild.";
$lang['admin_delete_item_success']           = "The item purchase entry for %1\$s, purchased by %2\$s for %3\$.2f has been deleted from the database for your guild.";
$lang['admin_delete_members_success']        = "%1\$s, including all of his/her history, has been deleted from the database for your guild.";
$lang['admin_delete_news_success']           = 'The news entry has been deleted from the database for your guild.';
$lang['admin_delete_raid_success']           = 'The raid and any items associated with it have been deleted from the database for your guild.';
$lang['admin_delete_style_success']          = 'The style has been deleted successfully.';
$lang['admin_delete_user_success']           = "The account with a username of %1\$s has been deleted.";
$lang['admin_set_perms_success']             = "All administrative permissions have been updated.";
$lang['admin_transfer_history_success']      = "All of %1\$s\'s history has been transferred to %2\$s and %1\$s has been deleted from the database for your guild.";
$lang['admin_update_account_success']        = "Your account settings have been updated in the database.";
$lang['admin_update_adj_success']            = "The %1\$s adjustment of %2\$.2f has been updated in the database for your guild.";
$lang['admin_update_event_success']          = "The value preset of %1\$s for a raid on %2\$s has been updated in the database for your guild.";
$lang['admin_update_iadj_success']           = "The individual %1\$s adjustment of %2\$.2f for %3\$s has been updated in the database for your guild.";
$lang['admin_update_item_success']           = "The item purchase entry for %1\$s, purchased by %2\$s for %3\$.2f has been updated in the database for your guild.";
$lang['admin_update_member_success']         = "Membership settings for %1\$s have been updated.";
$lang['admin_update_news_success']           = 'The news entry has been updated in the database for your guild.';
$lang['admin_update_raid_success']           = "The %1\$d/%2\$d/%3\$d raid on %4\$s has been updated in the database for your guild.";
$lang['admin_update_style_success']          = '�����ʽ�Ѿ��ɹ�����.';

$lang['admin_raid_success_hideinactive']     = '���ڸ��� ����/�Ǽ��� ��ҵ�״̬...';

// Delete Confirmation Texts
$lang['confirm_delete_adj']     = 'ȷ��ɾ���Ŷӵ���?';
$lang['confirm_delete_admins']  = 'ȷ��ɾ��ѡ������Ա?';
$lang['confirm_delete_event']   = 'ȷ��ɾ������¼�?';
$lang['confirm_delete_iadj']    = 'ȷ��ɾ�����˵���?';
$lang['confirm_delete_item']    = 'ȷ��ɾ��ѡ����Ʒ?';
$lang['confirm_delete_members'] = 'ȷ��ɾ�����»�Ա?';
$lang['confirm_delete_news']    = 'ȷ��ɾ����������?';
$lang['confirm_delete_raid']    = 'ȷ��ɾ�����Raid?';
$lang['confirm_delete_style']   = 'ȷ��ɾ����������ʽ?';
$lang['confirm_delete_users']   = 'ȷ��ɾ�������û��˺�?';

// Log Actions
$lang['action_event_added']      = '�Ѿ���ӵ��¼�';
$lang['action_event_deleted']    = '�Ѿ�ɾ�����¼�';
$lang['action_event_updated']    = '�Ѿ����µ��¼�';
$lang['action_groupadj_added']   = '�Ѿ���ӵ��Ŷӵ���';
$lang['action_groupadj_deleted'] = '�Ѿ�ɾ�����Ŷӵ���';
$lang['action_groupadj_updated'] = '�Ѿ����µ��Ŷӵ���';
$lang['action_history_transfer'] = '��Ա��ʷ��¼ת��';
$lang['action_indivadj_added']   = '�Ѿ���ӵĸ��˵���';
$lang['action_indivadj_deleted'] = '�Ѿ�ɾ���ĸ��˵���';
$lang['action_indivadj_updated'] = '�Ѿ����µĸ��˵���';
$lang['action_item_added']       = '�Ѿ���ӵ���Ʒ';
$lang['action_item_deleted']     = '�Ѿ�ɾ������Ʒ';
$lang['action_item_updated']     = '�Ѿ����µ���Ʒ';
$lang['action_member_added']     = '�Ѿ���ӵĻ�Ա';
$lang['action_member_deleted']   = '�Ѿ�ɾ���Ļ�Ա';
$lang['action_member_updated']   = '�Ѿ����µĻ�Ա';
$lang['action_news_added']       = '�Ѿ���ӵ�����';
$lang['action_news_deleted']     = '�Ѿ�ɾ��������';
$lang['action_news_updated']     = '�Ѿ����µ�����';
$lang['action_raid_added']       = '�Ѿ���ӵ�RAID';
$lang['action_raid_deleted']     = '�Ѿ�ɾ����RAID';
$lang['action_raid_updated']     = '�Ѿ����µ�RAID';
$lang['action_turnin_added']     = '�Ѿ����Turn-in';

// Before/After
$lang['adjustment_after']  = 'Adjustment After';
$lang['adjustment_before'] = 'Adjustment Before';
$lang['attendees_after']   = 'Attendees After';
$lang['attendees_before']  = 'Attendees Before';
$lang['buyers_after']      = 'Buyer After';
$lang['buyers_before']     = 'Buyer Before';
$lang['class_after']       = 'Class After';
$lang['class_before']      = 'Class Before';
$lang['earned_after']      = 'Earned After';
$lang['earned_before']     = 'Earned Before';
$lang['event_after']       = 'Event After';
$lang['event_before']      = 'Event Before';
$lang['headline_after']    = 'Headline After';
$lang['headline_before']   = 'Headline Before';
$lang['level_after']       = 'Level After';
$lang['level_before']      = 'Level Before';
$lang['members_after']     = 'Members After';
$lang['members_before']    = 'Members Before';
$lang['message_after']     = 'Message After';
$lang['message_before']    = 'Message Before';
$lang['name_after']        = 'Name After';
$lang['name_before']       = 'Name Before';
$lang['note_after']        = 'Note After';
$lang['note_before']       = 'Note Before';
$lang['race_after']        = 'Race After';
$lang['race_before']       = 'Race Before';
$lang['raid_id_after']     = 'Raid ID After';
$lang['raid_id_before']    = 'Raid ID Before';
$lang['reason_after']      = 'Reason After';
$lang['reason_before']     = 'Reason Before';
$lang['spent_after']       = 'Spent After';
$lang['spent_before']      = 'Spent Before';
$lang['value_after']       = 'Value After';
$lang['value_before']      = 'Value Before';

// Configuration
$lang['general_settings'] = '��������';
$lang['guildtag'] = '��������/��ǩ';
$lang['guildtag_note'] = '������ĸ�ҳ��ʹ�õı���';
$lang['parsetags'] = '���������ǩ';
$lang['parsetags_note'] = '������RAID ��־ʱ, �����г��Ľ���ѡ����ʽ��Ӧ��.';
$lang['domain_name'] = '����';
$lang['server_port'] = '�������˿�';
$lang['server_port_note'] = '�����ҳ�������˿� ͨ��Ϊ 80';
$lang['script_path'] = '�ű�·��';
$lang['script_path_note'] = 'dkpϵͳ�ķ���·��, ���������';
$lang['site_name'] = 'վ������';
$lang['site_description'] = 'վ������';
$lang['point_name'] = '��������';
$lang['point_name_note'] = '����: DKP, RP, �ȵ�.';
$lang['enable_account_activation'] = '�����˺ż���';
$lang['none'] = '��';
$lang['admin'] = '����Ա';
$lang['default_language'] = 'Ĭ������';
$lang['default_style'] = 'Ĭ�Ϸ����ʽ';
$lang['default_page'] = 'Ĭ����ҳ';
$lang['hide_inactive'] = 'Ӯ��û�м���Ļ�Ա';
$lang['hide_inactive_note'] = 'Ӯ�� ��û�кܶ�ʱ��û�вμ�Raid �Ļ�Ա?';
$lang['inactive_period'] = '�ǻ�Ծʱ��';
$lang['inactive_period_note'] = 'ȷ������ʱ���Ա���μ�Raid ��Ȼ��Ϊ��Ծ��Ա';
$lang['inactive_point_adj'] = '�ǻ�Ծ��������';
$lang['inactive_point_adj_note'] = '����Ϊ�ǻ�Ծ��Ա��Ҫ���ڵĵ���.';
$lang['active_point_adj'] = '��Ծ��������';
$lang['active_point_adj_note'] = '����Ϊ��Ծ��Ա��Ҫ���ڵĵ���.';
$lang['enable_gzip'] = '���� Gzip ѹ����ʽ';
$lang['show_item_stats'] = '��ʾ��Ʒ״̬';
$lang['show_item_stats_note'] = '��ͼ�����ϻ�ȡ��Ʒ״̬, ����Ӱ�쵽ĳЩҳ����ٶ�';
$lang['default_permissions'] = 'Ĭ��Ȩ��';
$lang['default_permissions_note'] = '��ЩȨ���������û�ʹ��1 û�е�¼�û� 2 ��ע���û�.  ѡ����<b>����</b>��ʾ���ǹ���ԱȨ��
																		 ���鲻Ҫ����Щѡ�����Ĭ��ֵ, <i>б����</i>�Ǹ�ר�Ų��ʹ��.  �������δ���ı���Ӧ�ĸ���Ȩ���������û�.';
$lang['plugins'] = '���';
$lang['cookie_settings'] = 'Cookie ����';
$lang['cookie_domain'] = 'Cookie ����';
$lang['cookie_name'] = 'Cookie ����';
$lang['cookie_path'] = 'Cookie ·��';
$lang['session_length'] = 'Session ���� (��)';
$lang['email_settings'] = 'E-Mail ����';
$lang['admin_email'] = '����Ա E-Mail ��ַ';

// Admin Index
$lang['anonymous'] = '�����û�';
$lang['database_size'] = '���ݿ��С';
$lang['eqdkp_started'] = 'EQdkp���';
$lang['ip_address'] = 'IP��ַ';
$lang['items_per_day'] = 'ƽ��ÿ�����Ʒ';
$lang['last_update'] = '���ĸ���';
$lang['location'] = 'λ��';
$lang['new_version_notice'] = "EQdkp version %1\$s is <a href=\"http://sourceforge.net/project/showfiles.php?group_id=69529\" target=\"_blank\">available for download</a>.";
$lang['number_of_items'] = '��Ʒ������';
$lang['number_of_logs'] = '��־������';
$lang['number_of_members'] = 'raid���� (��Ծ�� / �ǻ�Ծ��)';
$lang['number_of_raids'] = 'raid����';
$lang['raids_per_day'] = 'ƽ��ÿ���raid';
$lang['statistics'] = 'ͳ�Ʊ�';
$lang['totals'] = '����';
$lang['version_update'] = '�汾����';
$lang['who_online'] = '�����û�';

// Style Management
$lang['style_settings'] = '�����ʽ����';
$lang['style_name'] = '�����ʽ����';
$lang['template'] = 'ģ��';
$lang['element'] = 'Ԫ��';
$lang['background_color'] = '������ɫ';
$lang['fontface1'] = '�������1';
$lang['fontface1_note'] = 'Ĭ���������';
$lang['fontface2'] = '�������2';
$lang['fontface2_note'] = '������ڵ��������';
$lang['fontface3'] = '�������3';
$lang['fontface3_note'] = '��ǰû��ʹ�õ�';
$lang['fontsize1'] = '�����С1';
$lang['fontsize1_note'] = 'С����l';
$lang['fontsize2'] = '�����С2';
$lang['fontsize2_note'] = '������2';
$lang['fontsize3'] = '�����С3';
$lang['fontsize3_note'] = '������3';
$lang['fontcolor1'] = '������ɫ1';
$lang['fontcolor1_note'] = 'Ĭ����ɫ';
$lang['fontcolor2'] = '������ɫ2';
$lang['fontcolor2_note'] = '����ʹ�õ���ɫ(�˵�, ����, ��Ȩ)';
$lang['fontcolor3'] = '������ɫ3';
$lang['fontcolor3_note'] = '����������ڲ���������ɫ';
$lang['fontcolor_neg'] = '������������ɫ';
$lang['fontcolor_neg_note'] = 'Ӧ���븺�����ֵ�������ɫ?';
$lang['fontcolor_pos'] = '������������ɫ';
$lang['fontcolor_pos_note'] = 'Ӧ�����������ֵ�������ɫ?';
$lang['body_link'] = '������ɫ';
$lang['body_link_style'] = '������ʽ';
$lang['body_hlink'] = '����������ɫ';
$lang['body_hlink_style'] = '����������ʽ';
$lang['header_link'] = '��������';
$lang['header_link_style'] = '����������ʽ';
$lang['header_hlink'] = '������������';
$lang['header_hlink_style'] = '�����ı���������ʽ';
$lang['tr_color1'] = '�������ɫ1';
$lang['tr_color2'] = '�������ɫ2';
$lang['th_color1'] = '��������ɫ';
$lang['table_border_width'] = '���߿���';
$lang['table_border_color'] = '���߿���ɫ';
$lang['table_border_style'] = '���߿���ʽ';
$lang['input_color'] = '�����ı�����ɫ';
$lang['input_border_width'] = '�����ı߿���';
$lang['input_border_color'] = '�����ı߿���ɫ';
$lang['input_border_style'] = '�����ı߿���ʽ';
$lang['style_configuration'] = '�����ʽ����';
$lang['style_date_note'] = 'For date/time fields, the syntax used is identical to the PHP <a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> function.';
$lang['attendees_columns'] = '��ϯ��';
$lang['attendees_columns_note'] = '�鿴raid��ϯ������';
$lang['date_notime_long'] = '����û��ȷ��ʱ�� (����)';
$lang['date_notime_short'] = '����û��ȷ��ʱ�� (����)';
$lang['date_time'] = '���ں�ʱ��';
$lang['logo_path'] = 'Logo�ļ���';

// Errors
$lang['error_invalid_adjustment'] = '����һ����Ч�ĵ���.';
$lang['error_invalid_plugin']     = '���Ǹ���Ч�Ĳ��.';
$lang['error_invalid_style']      = '���Ǹ���Ч�ķ������.';

// Verbose log entry lines
$lang['new_actions']           = '�������Ա����';
$lang['vlog_event_added']      = "%1\$s ���ѡ���¼� '%2\$s' ��ֵ %3\$.2f ����.";
$lang['vlog_event_updated']    = "%1\$s ����ѡ���¼� '%2\$s'.";
$lang['vlog_event_deleted']    = "%1\$s ɾ��ѡ���¼� '%2\$s'.";
$lang['vlog_groupadj_added']   = "%1\$s ������Ŷӵ��� %2\$.2f ����.";
$lang['vlog_groupadj_updated'] = "%1\$s �������Ŷӵ��� %2\$.2f ����.";
$lang['vlog_groupadj_deleted'] = "%1\$s ɾ�����Ŷӵ��� %2\$.2f ����.";
$lang['vlog_history_transfer'] = "%1\$s ת�� %2\$s'����ʷ��¼o %3\$s.";
$lang['vlog_indivadj_added']   = "%1\$s ���ڻ�Ա�����Ӧ�ĸ��˵������� %2\$.2f  %3\$d .";
$lang['vlog_indivadj_updated'] = "%1\$s ������Ӧ�ĸ��˵������� %2\$.2f  %3\$s.";
$lang['vlog_indivadj_deleted'] = "%1\$s deleted an individual adjustment of %2\$.2f to %3\$s.";
$lang['vlog_item_added']       = "%1\$s ���ѡ����Ʒ '%2\$s' ���� %3\$d member(s) for %4\$.2f points.";
$lang['vlog_item_updated']     = "%1\$s ����ѡ����Ʒ '%2\$s' ���� %3\$d ��Ա.";
$lang['vlog_item_deleted']     = "%1\$s ɾ��ѡ����Ʒ '%2\$s' ���� %3\$d ��Ա.";
$lang['vlog_member_added']     = "%1\$s ���ѡ����Ա %2\$s.";
$lang['vlog_member_updated']   = "%1\$s ����ѡ����Ա %2\$s.";
$lang['vlog_member_deleted']   = "%1\$s ɾ��ѡ����Ա %2\$s.";
$lang['vlog_news_added']       = "%1\$s ���ѡ��ͷĿ '%2\$s'.";
$lang['vlog_news_updated']     = "%1\$s ����ѡ����Ŀ '%2\$s'.";
$lang['vlog_news_deleted']     = "%1\$s ɾ��ѡ����Ŀ '%2\$s'.";
$lang['vlog_raid_added']       = "%1\$s ���һ��raid '%2\$s'.";
$lang['vlog_raid_updated']     = "%1\$s ����һ��raid '%2\$s'.";
$lang['vlog_raid_deleted']     = "%1\$s ɾ��һ��raid '%2\$s'.";
$lang['vlog_turnin_added']     = "%1\$s ��� turn-in �� %2\$s to %3\$s for '%4\$s'.";

// Location messages
$lang['adding_groupadj'] = '����Ŷӵ�����';
$lang['adding_indivadj'] = '��Ӹ��˵�����';
$lang['adding_item'] = '�����Ʒ';
$lang['adding_news'] = '���������Ŀ';
$lang['adding_raid'] = 'Add Raid';
$lang['adding_turnin'] = '���Turn-in';
$lang['editing_groupadj'] = '�༭�����Ŷ���Ϣ';
$lang['editing_indivadj'] = '�༭���ڸ�����Ϣ';
$lang['editing_item'] = '�༭��Ʒ';
$lang['editing_news'] = '�༭������Ŀ';
$lang['editing_raid'] = '�༭Raid';
$lang['listing_events'] = '�¼��б�';
$lang['listing_groupadj'] = '��Ա�����б�';
$lang['listing_indivadj'] = '���˵������б�';
$lang['listing_itemhist'] = '��Ʒ��ʷ��¼�б�';
$lang['listing_itemvals'] = '��ƷPTֵ�б�';
$lang['listing_members'] = '��Ա�б�';
$lang['listing_raids'] = 'Raid�б�';
$lang['managing_config'] = '����EQdkp����';
$lang['managing_members'] = '�������Ա';
$lang['managing_plugins'] = '�������';
$lang['managing_styles'] = '���������';
$lang['managing_users'] = '�����û��ʺ�';
$lang['parsing_log'] = '������־';
$lang['viewing_admin_index'] = '�鿴����Ա����';
$lang['viewing_event'] = '�鿴�¼�';
$lang['viewing_item'] = '�鿴��Ʒ';
$lang['viewing_logs'] = '�鿴��¼';
$lang['viewing_member'] = '�鿴��Ա';
$lang['viewing_mysql_info'] = '�鿴MySQL��Ϣ';
$lang['viewing_news'] = '�鿴����';
$lang['viewing_raid'] = '�鿴Raid';
$lang['viewing_stats'] = '�鿴״̬';
$lang['viewing_summary'] = '�鿴�ܹ����';

// Help lines
$lang['b_help'] = '�����ı�: [b]text[/b] (alt+b)';
$lang['i_help'] = 'б���ı�: [i]text[/i] (alt+i)';
$lang['u_help'] = '�»����ı�: [u]text[/u] (alt+u)';
$lang['q_help'] = '�����ı�: [quote]text[/quote] (alt+q)';
$lang['c_help'] = '�ı�����: [center]text[/center] (alt+c)';
$lang['p_help'] = '����ͼƬ: [img]http://image_url[/img] (alt+p)';
$lang['w_help'] = '����URL����: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';

// Manage Members Menu (yes, MMM)
$lang['add_member'] = '��ӻ�Ա';
$lang['list_edit_del_member'] = '�б�/ɾ��/�༭ ��Ա';
$lang['edit_ranks'] = '�༭��Ա�ȼ�';
$lang['transfer_history'] = 'ת�ƻ�Ա��ʷ';

// MySQL info
$lang['mysql'] = 'MySQL';
$lang['mysql_info'] = 'MySQL��Ϣ';
$lang['eqdkp_tables'] = 'EQdkp���';
$lang['table_name'] = '�������';
$lang['rows'] = '��';
$lang['table_size'] = '����С';
$lang['index_size'] = '������С';
$lang['num_tables'] = "%d ���";
?>
