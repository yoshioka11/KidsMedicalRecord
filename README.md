# KidsMedicalRecord

//データベースの作成
CREATE DATABASE kids_mr;

//こどもカルテのテーブルの作成
CREATE TABLE kids (k_id int NOT NULL primary key, k_pass varchar(100) NOT NULL, k_parent varchar(100) , k_name varchar(100) NOT NULL, k_sex varchar(10), k_birthday int, t_id int, k_allergy varchar(255), k_disease varchar(255),k_character varchar(255), k_other varchar(255), k_like varchar(255), k_dislike varchar(255) );

//先生のテーブル作成
