CREATE TABLE topics (
	id int(8) auto_increment PRIMARY KEY,
	user_id int(8),
	title varchar(100),
	visible tinyint(1),
	created datetime,
	modified datetime
);
