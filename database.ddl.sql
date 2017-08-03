create table category
(
  id int auto_increment
  primary key,
  title varchar(200) null
)
;

create table comment
(
  id int auto_increment
  primary key,
  text varchar(255) null,
  post_id int null
)
;

create table post
(
  id int auto_increment
  primary key,
  title varchar(200) null,
  content text null,
  category_id int null,
  date_created datetime null
)
;

create table tag
(
  id int auto_increment
  primary key,
  tag varchar(200) null,
  post_id int null
)
;

