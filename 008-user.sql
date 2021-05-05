create table if not exists user
(
	id int auto_increment
		primary key,
	email varchar(180) not null,
	roles json not null,
	password varchar(255) not null,
	is_verified tinyint(1) not null,
	username varchar(255) not null,
	constraint UNIQ_8D93D649E7927C74
		unique (email)
)
collate=utf8mb4_unicode_ci;

