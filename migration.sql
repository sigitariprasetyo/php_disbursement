
CREATE DATABASE `disburse_project` ;


CREATE TABLE IF NOT EXISTS `disbursement` ( `id` int(25) UNSIGNED NOT NULL, `amount` int(15) NOT NULL, `status` varchar(15) NOT NULL, `timestamp` datetime NOT NULL, `bank_code` varchar(15) NOT NULL, `account_number` int(15) NOT NULL, `beneficiary_name` varchar(50) NOT NULL, `remark` varchar(50) NOT NULL, `receipt` varchar(50) DEFAULT NULL, `time_served` datetime NOT NULL, `fee` int(15) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1;