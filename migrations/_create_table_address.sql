create table address (
	id integer not null,
	full_address varchar(1000),
	suburb varchar(200),
	city varchar(200),
	state varchar(200),
	country varchar(200),
	postal_code varchar(20),
	is_billing integer default 1,
	is_shipping integer default 1,
	is_active integer default 1,
	is_deleted integer default 0,
	date_created timestamp,
	date_updated timestamp,
	customer_id integer default 0 not null references customer(id) on update cascade on delete cascade,
   primary key (id)
);

insert into address (id,full_address,is_active) values(0, '_None_',0);