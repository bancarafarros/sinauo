show databases;
use classicmodels;
show tables;
describe employees;
select * from employees;

-- menampilkan data secara urut berdasarkan kolom lastName
-- order by secara default mengurutkan data secara ascending  
select *
from employees
order by lastName;

-- menampilkan data secara urut berdasarkan kolom lastName secara descending
select *
from employees
order by lastName desc;

-- menampilkan data secara urut berdasarkan lastName dan firstName tiap baris
select *
from employees
order by lastName, firstName;

-- menampilkan data secara urut berdasarkan lastName secara ascending dan fisrtName secara descending
select *
from employees
order by lastName, firstName desc;

-- menampilkan data lastName, firstName, dan jobTitle dengan diurutkan berdasarkan lastName
select lastName, firstName, jobTitle
from employees
order by lastName;

describe orderdetails;

-- membuat kolom baru dengan cara quantityOrdered * priceEach dari table orderdetails dan diurutkan berdasarkan hasil quantityOrdered * priceEach secara ascending
select orderNumber, quantityOrdered * priceEach
from orderdetails
order by quantityOrdered * priceEach;

-- menampilkan data dari kolom orderNumber dan quantityOrdered * priceEach dari table orderdetails dan diurutkan berdasarkan hasil quantityOrdered * priceEach secara descending
select orderNumber, quantityOrdered * priceEach
from orderdetails
order by quantityOrdered * priceEach desc;

-- menyederhanakan kolom baru hasil quantityOrdered * priceEach dengan alias atau as menjadi subtotal
select orderNumber, quantityOrdered * priceEach as subtotal
from orderdetails
order by subtotal desc;

-- tugas
-- mencari harga satuan terbesar dari table orderdetails
select *
from orderdetails
order by priceEach desc;

-- menampilkan data customer yang terurut secara alfabet berdasarkan nama belakang
select *
from customers
order by contactLastName;