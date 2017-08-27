alter table `profile`
 add column `pcode` varchar(100) null,
 add column `team_id` int(4) null DEFAULT '0',
 add column `office_id` int(4) null DEFAULT '0',
 add column `branch_id` int(4) null DEFAULT '0',
 add column `org_id` int(4) null DEFAULT '0',
 add column `country_id` int(4) null DEFAULT '0'

