create table if not exists ville
(
	id int auto_increment
		primary key,
	label varchar(255) not null,
	region_id int null,
	lat decimal not null,
	lon decimal not null,
	constraint FK_43C3D9C398260155
		foreign key (region_id) references region (id)
			on delete cascade
)
collate=utf8mb4_unicode_ci;

create index IDX_43C3D9C398260155
	on ville (region_id);

