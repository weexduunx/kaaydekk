create table if not exists client
(
	id int auto_increment
		primary key,
	nom varchar(255) not null,
	prenom varchar(255) not null,
	adresse varchar(255) not null,
	numero_cin_ou_passeport decimal not null,
	commentaire varchar(255) not null,
	tel varchar(255) not null,
	status tinyint(1) not null,
	email varchar(255) not null,
	date_de_naissance date not null,
	lieu_de_naissance varchar(255) not null,
	nationalite varchar(255) not null,
	profession varchar(255) not null,
	situation_matrimoniale varchar(255) not null,
	ville_id int null,
	created_at datetime not null,
	color varchar(7) null,
	constraint FK_C7440455A73F0036
		foreign key (ville_id) references ville (id)
			on delete cascade
)
collate=utf8mb4_unicode_ci;

create index IDX_C7440455A73F0036
	on client (ville_id);

