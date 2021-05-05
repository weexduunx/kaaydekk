create table if not exists bien
(
	id int auto_increment
		primary key,
	label varchar(255) not null,
	superficie varchar(255) not null,
	created_at datetime not null,
	updated_at datetime not null,
	status tinyint(1) not null,
	thumbnail varchar(100) not null,
	type_de_bien_id int null,
	projet_id int null,
	achat_id int null,
	color varchar(7) null,
	rooms int not null,
	city_id int null,
	bedrooms int not null,
	floor int null,
	price varchar(255) not null,
	address varchar(255) not null,
	postal_code varchar(255) not null,
	sold tinyint(1) default 0 not null,
	description varchar(255) not null,
	prix int null,
	constraint FK_45EDC3868BAC62AF
		foreign key (city_id) references ville (id),
	constraint FK_45EDC3869C8E58A9
		foreign key (type_de_bien_id) references type_de_bien (id)
			on delete cascade,
	constraint FK_45EDC386C18272
		foreign key (projet_id) references projet (id)
			on delete cascade,
	constraint FK_45EDC386FE95D117
		foreign key (achat_id) references achat (id)
			on delete cascade
)
collate=utf8mb4_unicode_ci;

create index IDX_45EDC3868BAC62AF
	on bien (city_id);

create index IDX_45EDC3869C8E58A9
	on bien (type_de_bien_id);

create index IDX_45EDC386C18272
	on bien (projet_id);

create index IDX_45EDC386FE95D117
	on bien (achat_id);

