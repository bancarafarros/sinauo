-- menampilkan seluruh database yang tersedia
show databases;

-- menggunakan database classicmodels
use classicmodels;

-- menampilkan seluruh table yang tersedia dalam database yang sedang digunakan
show tables;

-- menggunakan klausa select untuk menampilkan seluruh isi dari table employees
select * from employees;

-- menggunakan kalusa select untuk menampilkan seluruh isi dari table customers
select * from customers;

-- menampilkan detail dari table employees
describe employees;

-- memnampilkan seluruh data dari kolom lastName yang terdapat di dalam table employees
select lastName from employees;

-- menampilkan seluruh data dari kolom lastName, kolom firstName, dan kolom jobTitle yang terdapat di dalam table employees
select lastName, firstName, jobTitle from employees;

-- tugas
-- menampilkan seluruh data dari kolom lastName, kolom email, dan kolom jobTitle yang terdapat di dalam table employees;
select lastName, email, jobTitle from employees;

-- menampilkan seluruh data dari kolom contactLastName dan kolom contactFistName yang terdapat di dalam table customers
select contactLastName, contactFirstName from customers;