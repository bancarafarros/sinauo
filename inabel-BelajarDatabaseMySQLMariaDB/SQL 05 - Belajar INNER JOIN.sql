show databases; -- menampilkan seluruh database yang tersedia
use classicmodels; -- menggunakan database classicmodels
show tables; -- menampilkan seluruh table yang tersedia dalam database

-- mulai dari bagian from baru ke bagian select
select firstName, lastName -- memilih kolom firstName dan lastName
from employees; -- dari table employees

-- concat, menggabungkan kolom firstName dengan lastName menjadi satu 
select concat(firstName, ' ', lastName) -- ' ' sebagai delimiter atau pemisah
from employees;

-- membuat sebuah kolom dengan isi firstName - lastName - email
select concat(firstName, '-', lastName, '-', email) -- memilih dan menggabungkan kolom firstName, lastName, dan email dengan - sebagai pemisah
from employees; -- dari table employees

-- membuat sebuah kolom dengan isi firstName, lastName, dan email dengan menggunakan concat_ws
select concat_ws('-', firstName, lastName, email) -- memilih dan menggabungkan kolom firstName, lastName, dan email dengan - sebagai pemisah
from employees; -- dari table employees

-- membandingkan sebelum dan sesudah digabung
select firstName, lastName, concat_ws(' ', firstName, lastName) -- memilih kolom firstName dan lastName (dipisah) serta memilih dan menggabungkan kolom firstName dan lastName dengan - sebagai pemisah
from employees; -- dari table employees

-- as untuk membuat nama baru bagi sebuah kolom
select firstName, lastName, concat_ws(' ', firstName, lastName) as fullName -- as fullname ditambahkan untuk memberi nama kolom baru hasil concat_ws
from employees;

-- langsung menulis nama alias atau nama baru bagi sebuah kolom tanpa keyword as
select firstName, lastName, concat_ws(' ', firstName, lastName) fullname -- pemberian alias juga bisa dilakukan tanpa keyword as
from employees;

-- mengurutkan data berdasarkan kolom baru
select firstName, lastName, concat_ws(' ', firstName, lastName) fullname
from employees
order by fullname;

-- selain kolom, table juga bisa diberi alias
select e.firstName, e.lastName
from employees e;

-- mengurutkan data dengan menggunakan alias
select e.firstName, e.lastName
from employees e
order by e.lastName;