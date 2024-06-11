show databases; -- menampilkan seluruh database yang tersedia
use classicmodels; -- menggunakan database classicmodels
show tables; -- menampilkan seluruh table yang tersedia di dalam database
describe employees; -- menampilkan detail table employees
select * -- memilih semua kolom
from employees; -- di table employees

-- menampilkan data secara urut berdasarkan kolom lastName
-- order by secara default mengurutkan data secara ascending  
select * -- memilih semua kolom
from employees -- di table employees
order by lastName; -- mengurutkan data berdasarkan kolom lastName secar aascending (default)

-- menampilkan data secara urut berdasarkan kolom lastName secara descending
select * -- memilih semua kolom
from employees -- di table employees
order by lastName desc; -- mengurutkan data berdasarkan kolom lastName secara descending

-- menampilkan data secara urut berdasarkan lastName dan firstName tiap baris
select * -- memilih semua kolom
from employees -- di table employees
order by lastName, firstName; -- mengurutkan data berdasarkan kolom lastName dan firstName secara ascending (default) untuk keduanya 

-- menampilkan data secara urut berdasarkan lastName secara ascending dan fisrtName secara descending
select * -- memilih semua kolom
from employees -- di table employees
order by lastName, firstName desc; -- mengurutkan data berdasarkan kolom lastName secara ascending (default) dan firstName secara descending

-- menampilkan data lastName, firstName, dan jobTitle dengan diurutkan berdasarkan lastName
select lastName, firstName, jobTitle -- memilih kolom lastName, firstName, dan jobTitle
from employees -- di table employees
order by lastName; -- mengurutkan data berdasarkan kolom lastName secara ascending (default)

describe orderdetails; -- menampilkan detail dari table orderdetails

-- membuat kolom baru dengan cara quantityOrdered * priceEach dari table orderdetails dan diurutkan berdasarkan hasil quantityOrdered * priceEach secara ascending
select orderNumber, quantityOrdered * priceEach -- memilih kolom orderNumber dan quantityOrdered * priceEach
from orderdetails -- di table orderdetails
order by quantityOrdered * priceEach; -- mengurutkan data berdasarkan kolom quantityOrdered * priceEach secara ascending (default)

-- menampilkan data dari kolom orderNumber dan quantityOrdered * priceEach dari table orderdetails dan diurutkan berdasarkan hasil quantityOrdered * priceEach secara descending
select orderNumber, quantityOrdered * priceEach -- memilih kolom orderNumber dan quantityOrdered * priceEach
from orderdetails -- di table orderdetails
order by quantityOrdered * priceEach desc; -- mengurutkan data berdasarkan quantityOrdered * proceEach secara descending

-- menyederhanakan kolom baru hasil quantityOrdered * priceEach dengan alias atau as menjadi subtotal
select orderNumber, quantityOrdered * priceEach as subtotal -- memilih kolom orderNumber dan quantityOrdered * priceEach yang disederhanakan menjadi subtotal dengan as alias
from orderdetails -- di table orderdetails
order by subtotal desc; -- mengurutkan data berdasarkan kolom baru subtotal secara descending

-- tugas
-- mencari harga satuan terbesar dari table orderdetails
select * -- memilih semua kolom
from orderdetails -- di table orderdetails
order by priceEach desc; -- mengurutkan data berdasarkan kolom priceEach secara descending

-- menampilkan data customer yang terurut secara alfabet berdasarkan nama belakang
select * -- memilih semua kolom
from customers -- di table customers
order by contactLastName; -- mengurutkan data berdasarkan kolom contactLastName secara ascending (default)