create table if not exists region
(
	id int auto_increment
		primary key,
	label varchar(255) not null
)
collate=utf8mb4_unicode_ci;

