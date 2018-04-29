create table if not exists user (
  Fname varchar(20),
  Lname varchar(20),
  Sex char(1),
  UserUserName varchar(20),
  Country varchar(20),
  Description(20),
  Email varchar(20),
  Phone int(11),
  Bday DATE
);
insert into 
	user(
	    Fname,
	    Lname,
      Sex,
	    UserUserName
	    Country,
	    Description,
	    Email,
	    Phone,
	    Bday
		)
create table if not exists guide(
  Fname varchar(20),
  Lname varchar(20),
  Sex char(1),
  GuideUserName varchar(20),
  Country varchar(20),
  Description varchar(20),
  Email varchar(20),
  Phone int(11),
  Bday DATE
);
insert into
  guide(
    Fname,
    Lname,
    Sex,
    GuideUserName,
    Country,
    Description,
    Email,
    phone,
    bday
  )
