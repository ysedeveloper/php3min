CREATE TABLE `tbl_member` (
  `member_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `login_id` VARCHAR(40) NOT NULL,
  `login_name` VARCHAR(20) NOT NULL,
  `login_pw` VARCHAR(256) NULL,
  `insert_date` DATETIME NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`member_id`),
  UNIQUE INDEX `login_id` (`login_id`)
)
COMMENT='회원'
COLLATE='utf8mb4_general_ci'
;