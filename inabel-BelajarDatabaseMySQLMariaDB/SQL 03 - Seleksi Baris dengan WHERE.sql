show databases; -- menampilkan seluruh database yang tersedia 
use classicmodels; -- menggunakan database classi
show tables; -- menampilkan seluruh table yang terdapayt di dalam database classicmodels
describe employees; -- menampilkan detail table employees

-- menampilkan seluruh data yang terdapat di dalam table employees
select * 
from employees;

-- menampilkan isi kolom lastName, firstName, dan jobTitle dari table employees dengan kolom jobTitle yang memiliki value Sales Rep   
select lastName, firstName, jobTitle 
from employees 
where jobTitle = 'Sales Rep';

-- menampilkan seluruh data yang terdapat di kolom lastName, fistName, JobTitle, dan officeCode di table employees yang kolom jobTitle memiliki value 'Sales Rep' dan officeCode 1
select lastName, firstName, jobTitle, officeCode
from employees
where jobTitle = 'Sales Rep' and officeCode = 1;

-- menampilkan seluruh data yang terdapat di kolom lastName, fistName, JobTitle, dan officeCode di table employees yang kolom jobTitle memiliki value 'Sales Rep' atau officeCode 1
select lastName, firstName, jobTitle, officeCode
from employees
where jobTitle = 'Sales Rep' or officeCode = 1;

-- menampilkan isi kolom lastName, firstName, jobTitle, dan officeCode dari table employees dengan kolom jobTitle yang memiliki value Sales Rep dan officeCode 1 kemudian diurutkan berdasarkan officeCode dan jobTitle 
select lastName, firstName, jobTitle, officeCode
from employees
where jobTitle = 'Sales Rep' or officeCode = 1
order by officeCode, jobTitle;

-- menampilkan isi kolom lastName, firstName, jobTitle, dan officeCode dari table employees dengan value 1 sampai 3 pada kolom officeCode dan diurutkan berdasarkan officeCode dan jobTitle 
select lastName, firstName, jobTitle, officeCode
from employees
where officeCode between 1 and 3
order by officeCode, jobTitle;

-- % merepresentasikan karakter apapun dalam jumlah berapapun
-- _ merepresentasikan karakter apapun dalam jumlah 1
-- menampilkan isi kolom lastName, firstName, jobTitle, dan officeCode dari table employees dengan kolom lastName yang memiliki value akhiran son dan diurutkan berdasarakan officeCode dan jobTitle 
select lastName, firstName, jobTitle, officeCode
from employees
where lastName like '%son' -- yang diakhiri 'son' di kolom lastName
order by officeCode, jobTitle;

-- menampilkan isi kolom lastName, firstName, jobTitle, dan officeCode dari table employees yang memilivi value huruf kedua a pada kolom firstName dan diurutkan berdasarkan officeCode dan jobTitle  
select lastName, firstName, jobTitle, officeCode
from employees
where firstName like '_a%' -- huruf kedua adalah a di kolom firstName 
order by officeCode, jobTitle;

-- menampilkan data yang memiliki nilai officeCode 1, 3, dan 7
-- menampilkan isi kolom lastName, firstName, jobTitle, dan officeCode dari table employees yang memiliki value 1, 3, dan 7 di kolom officeCode dan diurutkan berdasarkan officeCode dan jobTitle   
select lastName, firstName, jobTitle, officeCode
from employees
where officeCode in (1, 3, 7)
order by officeCode, jobTitle;

-- menampilkan data officeCode > 5
select lastName, firstName, jobTitle, officeCode
from employees
where officeCode > 5
order by officeCode, jobTitle;

-- menampilkan kolom reportsTo 
select lastName, firstName, reportsTo
from employees;

-- menampilkan baris yang tidak memiliki value di kolom reportsTo
select lastName, firstName, reportsTo
from employees
where reportsTo is null;

-- tugas
-- menampilkan data dari table orderdetails yang quantity order > 40
select *
from orderdetails
where quantityOrdered > 40;

-- menampilkan data dari table orders dengan status on hold, disputed, atau canceled
select *
from orders
where status like 'On Hold' or status like 'Disputed' or status like 'Cancelled';
-- where status in ('On Hold', 'Disputed', 'Cancelled');