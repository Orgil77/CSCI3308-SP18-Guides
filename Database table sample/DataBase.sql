create table if not exists user (Fname varchar(20), Lname varchar(20), Country varchar(20), sex char(1), Email varchar(20), Phone int(11),  bday DATE);

insert into user(Fname, Lname, Country, sex, Email, Phone, bday) values 
("John" ,"Cena", "USA", "M", "JC@gmail.com", 1234567890, "1983-07-18");



create table if not exists guide( Fname varchar(20), Lname varchar(20), Country varchar(20), sex char(1), Email varchar(20), phone int(11), rating int(11), bday DATE);

insert into guide(Fname, Lname, Country, sex, Email, phone, rating, bday) values("Jack","Reacher","UK","M","jr@gmail.com",1234567890,4,"1986-03-08");
