create table if not exists site
(
	id int auto_increment
		primary key,
	reference_site varchar(255) not null,
	created_at datetime not null,
	updated_at datetime not null,
	ville_id int null,
	constraint FK_694309E4A73F0036
		foreign key (ville_id) references ville (id)
			on delete cascade
)
collate=utf8mb4_unicode_ci;

create index IDX_694309E4A73F0036
	on site (ville_id);

