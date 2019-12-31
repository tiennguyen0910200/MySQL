drop database if exists ricemanagement;
create database ricemanagement;
use ricemanagement;

create table rice(
 id int auto_increment primary key,
 name varchar(255),
 image varchar(255),
 price varchar(255)
 );
 
 insert into rice value (1,"Cơm gà xối mỡ ","../Img/4.jpg","20000"),
                        (2,"Cơm gà chiên","../Img/2.jpg","20000"),
                        (3,"Cơm gà luộc","../Img/1.jpg","20000"),
                        (4,"Cơm đùi gà","../Img/3.jpg","20000");
                        
                        
create table rice2(
 id int auto_increment primary key,
 name varchar(255),
 image varchar(255),
 price varchar(255)
 );
 
 insert into rice2 value (1,"Cơm sườn thịt nướng ","../Img/7.jpg","20000"),
                        (2,"Cơm sườn Nam Bộ","../Img/6.jpg","20000"),
                        (3,"Cơm sườn bì chả","../Img/5.jpg","20000"),
                        (4,"Cơm sườn nướng","../Img/8.jpg","20000");
                        
create table rice3(
 id int auto_increment primary key,
 name varchar(255),
 image varchar(255),
 price varchar(255)
 );
 
 insert into rice3 value (1,"Cơm cá kho tộ ","../Img/9.jpg","20000"),
                        (2,"Cơm cá thu sốt cà chua ","../Img/10.jpg","20000"),
                        (3,"Cơm cá hồi nướng","../Img/11.jpg","20000"),
                        (4,"Cơm cá kho chuối xanh","../Img/12.jpg","20000");
                        
CREATE TABLE members (
        lname VARCHAR(255) NOT NULL,
        fname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        users varchar(255) NOT NULL,
        pw VARCHAR(255) NOT NULL,
        repw varchar(255) NOT NULL
    )