show databases; -- menampilkan seluruh database yang tersedia 
use classicmodels; -- menggunakan database classi
show tables; -- menampilkan seluruh table yang terdapayt di dalam database classicmodels
describe employees; -- menampilkan detail table employees

select * -- memilih semua kolom
from employees; -- di table employees

select lastName, firstName, jobTitle -- memilih dan menampilkan isi kolom lastName, firstName, dan jobTitle
from employees -- dari table employees
where jobTitle = 'Sales Rep'; -- di mana value kolom jobTitle adalah Sales Rep

select lastName, firstName, jobTitle, officeCode -- memilih dan menampilkan isi kolom lastName, firstName, dan officeCode
from employees -- dari table employees
where jobTitle = 'Sales Rep' and officeCode = 1; -- di mana value kolom jobTitle adalah Sales Rep dan officeCode adalah 1

select lastName, firstName, jobTitle, officeCode -- memilih dan menampilkan isi kolom lastName, firstName, dan officeCode
from employees -- dari table employees
where jobTitle = 'Sales Rep' or officeCode = 1;  -- di mana value kolom jobTitle adalah Sales Rep atau officeCode adalah 1

select lastName, firstName, jobTitle, officeCode -- memilih dan menampilkan isi kolom lastName, firstName, dan officeCode
from employees -- dari table employees
where jobTitle = 'Sales Rep' or officeCode = 1  -- di mana value kolom jobTitle adalah Sales Rep atau officeCode adalah 1
order by officeCode, jobTitle; -- mengurutkan hasil berdasarkan kolom officeCode dan jobTitle

select lastName, firstName, jobTitle, officeCode -- memilih dan menampilkan isi kolom lastName, firstName, dan officeCode
from employees -- dari table employees
where officeCode between 1 and 3 -- di mana value kolom officeCode berada di antara 1 sampai 3
order by officeCode, jobTitle; -- mengurutkan hasil berdasarkan kolom officeCode dan jobTitle

-- % merepresentasikan karakter apapun dalam jumlah berapapun
-- _ merepresentasikan karakter apapun dalam jumlah 1
select lastName, firstName, jobTitle, officeCode -- memilih dan menampilkan isi kolom lastName, firstName, dan officeCode
from employees -- dari table employees
where lastName like '%son' -- di mana value kolom lastName diakhiri dengan 'son'
order by officeCode, jobTitle; -- mengurutkan hasil berdasarkan kolom officeCode dan jobTitle

select lastName, firstName, jobTitle, officeCode -- memilih dan menampilkan isi kolom lastName, firstName, dan officeCode
from employees -- dari table employees
where firstName like '_a%' -- dimana value kolom firstName memiliki karakter kedua 'a'
order by officeCode, jobTitle; -- mengurutkan hasil berdasarkan kolom officeCode dan jobTitle

-- menampilkan data yang memiliki nilai officeCode 1, 3, dan 7
select lastName, firstName, jobTitle, officeCode -- memilih dan menampilkan isi kolom lastName, firstName, dan officeCode
from employees -- dari table employees
where officeCode in (1, 3, 7) -- di mana value officeCode adalah 1, 3, dan 7
order by officeCode, jobTitle; -- mengurutkan hasil berdasarkan kolom officeCode dan jobTitle

-- menampilkan data officeCode > 5
select lastName, firstName, jobTitle, officeCode -- memilih dan menampilkan isi kolom lastName, firstName, dan officeCode
from employees -- dari table employees
where officeCode > 5 -- di mana value officeCode > 5
order by officeCode, jobTitle; -- mengurutkan hasil berdasarkan kolom officeCode dan jobTitle

-- menampilkan kolom reportsTo 
select lastName, firstName, reportsTo -- memilih dan menampilkan isi kolom lastName, firstName, dan reportsTo
from employees; -- dari table employees

-- menampilkan baris yang tidak memiliki value di kolom reportsTo
select lastName, firstName, reportsTo -- memilih dan menampilkan isi kolom lastName, firstName, dan reportsTo
from employees -- dari table employees
where reportsTo is null; -- di mana value kolom reportsTo adalah NULL

-- tugas
-- menampilkan data dari table orderdetails yang quantity order > 40
select * -- memilih dan menampilkan semua kolom
from orderdetails  -- dari table orderdetails
where quantityOrdered > 40; -- di mana value kolom quantityOrdered > 40

-- menampilkan data dari table orders dengan status on hold, disputed, atau canceled
select * -- memilih dan menampilkan semua kolom
from orders -- dari table orders
where status like 'On Hold' or status like 'Disputed' or status like 'Cancelled'; -- di mana value kolom status seperti 'On Hold' atau 'Disputed' atau 'Cancelled'
-- where status in ('On Hold', 'Disputed', 'Cancelled'); -- di mana value kolom status adalah 'On Hold', 'Disputed', dan 'Cancelled'