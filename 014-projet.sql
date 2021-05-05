create table if not exists projet
(
	id int auto_increment
		primary key,
	site_id int null,
	reference_projet varchar(255) not null,
	nom_du_projet varchar(255) not null,
	created_at datetime not null,
	update_at datetime not null,
	constraint FK_50159CA9F6BD1646
		foreign key (site_id) references site (id)
			on delete cascade
)
collate=utf8mb4_unicode_ci;

create index IDX_50159CA9F6BD1646
	on projet (site_id);

