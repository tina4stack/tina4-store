create table product (
	id integer not null,
	product_code varchar(30),
	description varchar(1000),
	cost_price numeric(10,2) default 0,
	retail_price numeric(10,2) default 0,
	image blob,
	qty numeric (10,2) default 0,
    is_active integer default 0,
    is_deleted integer default 0,
	date_created timestamp,
	date_updated timestamp,
   primary key (id)
)