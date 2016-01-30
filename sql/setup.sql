mysql -u petsuser -p --local-infile moviesdb;

drop database if exists petsdb;
drop user if exists petsuser@localhost;

create database petsdb character set ='UTF8';
create user petsuser@localhost identified by 'EDCE40AC-FDA0-4554-AAD1-BB9AF918FEB5';
grant select on petsdb.* to petsuser@localhost;
grant insert on petsdb.* to petsuser@localhost;

use petsdb;