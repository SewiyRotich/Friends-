
drop table users

create users(
    password varchar(10) not null check (length(password)>=6),
    name varchar(50),
    email varchar(128) not null unique,

)
