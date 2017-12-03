drop database if exists ciloja;

create database ciloja;

use ciloja;

create table users (
    id int(11) primary key auto_increment,
    name varchar(255),
    email varchar(255) unique,
    password varchar(255),
    is_admin TINYINT(1)
);

create table addresses (
    id int(11) primary key auto_increment,
    user_id int(11),
    display_name varchar(255),
    street varchar(255),
    neighborhood varchar(255),
    city varchar(255),
    state varchar(255),
    zip_code varchar(255),

    foreign key (user_id) references users(id)
);

create table products (
    id int(11) primary key auto_increment,
    name varchar(255),
    price decimal(10,2),
    photo_url varchar(255)
);

create table categories (
    id int(11) primary key auto_increment,
    name varchar(255)
);

create table categories_products (
    id int(11) primary key auto_increment,
    category_id int(11),
    product_id int(11),
    
    foreign key (category_id) references categories(id),
    foreign key (product_id) references products(id)
);

