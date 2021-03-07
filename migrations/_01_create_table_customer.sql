create table customer (
	id integer not null,
	account_no varchar(20),
	first_name varchar(200),
	last_name varchar(200),
	email varchar(1000),
	telephone varchar(30),
	password varchar(1000),
    reset_url varchar(1000),
	is_active integer default 0,
	is_deleted integer default 0,
	date_created timestamp,
	date_updated timestamp,
   primary key (id)
)