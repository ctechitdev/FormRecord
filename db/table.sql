create table tbl_order (
order_id int not null primary key AUTO_INCREMENT,
sale_id int,
cus_id int,
date_check date
);



create table tbl_order_detail (
ordetail_id int not null primary key AUTO_INCREMENT,
order_id int,
item_id int,
units_name varchar(20),
quantity int
);

create or replace table survey (
shopname varchar(255),
person1 varchar(255),
person2 varchar(255),
salesperson varchar(255),
scquality varchar(255),
scmarket varchar(255),
scprice varchar(255),
comment varchar(255),
product varchar(255),
entry_date date
);