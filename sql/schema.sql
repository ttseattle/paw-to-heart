drop table if exists pets;
create table pets(
	pet_id int not null auto_increment primary key,
    species varchar(100) null,
    breed varchar(100) null, 
    color varchar(100) null,
    gender varchar(100) null,
    size varchar(100) null, 
    more varchar(500) null,
    img varchar(100) null, 
    lost int not null, 
    found int not null
);

drop table if exists users;
create table users(
	user_id int not null auto_increment primary key,
    first_name varchar(100) null,
    last_name varchar(100) null, 
    phone int null, 
    email varchar(200) null,
    address_id int references addresses null,
    pet_id int references pets 
);

drop table if exists addresses;
create table addresses(
	address_id int primary key null,
	address varchar(200) null,
    city varchar(100) null,
    state varchar(2) null,
    zip int null
);
