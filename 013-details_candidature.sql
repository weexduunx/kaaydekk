create table if not exists details_candidature
(
	id int auto_increment
		primary key,
	membre_cooperative_id int null,
	compte_bancaire_id int null,
	beneficiaire_appui_ou_subvention_id int null,
	nom_de_la_cooperative varchar(255) not null,
	nombre_de_personne_en_charge decimal not null,
	nom_de_la_banque varchar(255) not null,
	logement_actuel_id int null,
	client_id int null,
	situation_id int null,
	secteur_id int null,
	type_de_contrat_id int null,
	nom_de_la_societe varchar(255) not null,
	revenu_mensuelle varchar(255) not null,
	salaire_mensuelle varchar(255) not null,
	type_de_logement_id int null,
	label varchar(255) not null,
	color varchar(7) null,
	nom longtext null comment '(DC2Type:array)',
	constraint FK_8841F94711CD1DEC
		foreign key (type_de_contrat_id) references details5 (id)
			on delete cascade,
	constraint FK_8841F947193EDACE
		foreign key (beneficiaire_appui_ou_subvention_id) references details1 (id)
			on delete cascade,
	constraint FK_8841F94719EB6921
		foreign key (client_id) references client (id)
			on delete cascade,
	constraint FK_8841F9473408E8AF
		foreign key (situation_id) references details3 (id)
			on delete cascade,
	constraint FK_8841F94745FCA72E
		foreign key (membre_cooperative_id) references details1 (id)
			on delete cascade,
	constraint FK_8841F9477C16B4E8
		foreign key (type_de_logement_id) references type_de_bien (id)
			on delete cascade,
	constraint FK_8841F9479CA5B79A
		foreign key (logement_actuel_id) references details2 (id)
			on delete cascade,
	constraint FK_8841F9479F7E4405
		foreign key (secteur_id) references details4 (id)
			on delete cascade,
	constraint FK_8841F947AF1E371E
		foreign key (compte_bancaire_id) references details1 (id)
			on delete cascade
)
collate=utf8mb4_unicode_ci;

create index IDX_8841F94711CD1DEC
	on details_candidature (type_de_contrat_id);

create index IDX_8841F947193EDACE
	on details_candidature (beneficiaire_appui_ou_subvention_id);

create index IDX_8841F94719EB6921
	on details_candidature (client_id);

create index IDX_8841F9473408E8AF
	on details_candidature (situation_id);

create index IDX_8841F94745FCA72E
	on details_candidature (membre_cooperative_id);

create index IDX_8841F9477C16B4E8
	on details_candidature (type_de_logement_id);

create index IDX_8841F9479CA5B79A
	on details_candidature (logement_actuel_id);

create index IDX_8841F9479F7E4405
	on details_candidature (secteur_id);

create index IDX_8841F947AF1E371E
	on details_candidature (compte_bancaire_id);

