drop database if exists ricemanagement;
create database ricemanagement;
use ricemanagement;

create table rice(
 id int auto_increment primary key,
 name varchar(255),
 image varchar(255),
 price varchar(255)
 );
 
 insert into rice value (1,"Cơm gà xối mỡ","https://gaongon24h.com/wp-content/uploads/2017/10/com-ga-xoi-mo.jpg","20000"),
                        (2,"Cơm gà xối mỡ","https://gaongon24h.com/wp-content/uploads/2017/10/com-ga-xoi-mo.jpg","20000"),
                        (3,"Cơm gà xối mỡ","https://gaongon24h.com/wp-content/uploads/2017/10/com-ga-xoi-mo.jpg","20000");