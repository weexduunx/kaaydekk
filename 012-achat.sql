create table if not exists achat
(
	id int auto_increment
		primary key,
	client_id int null,
	label varchar(255) not null,
	constraint FK_26A9845619EB6921
		foreign key (client_id) references client (id)
			on delete cascade
)
collate=utf8mb4_unicode_ci;

create index IDX_26A9845619EB6921
	on achat (client_id);

