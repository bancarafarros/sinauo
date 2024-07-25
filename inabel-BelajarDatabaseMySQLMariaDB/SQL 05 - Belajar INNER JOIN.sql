show databases;
use classicmodels;
show tables;
describe productlines;
select * from productlines;
describe products;
select * from products;

-- foreign key, sebuah kolom yang berasosiasi dengan primary key dari table lain
-- productlines -> products = one to many, pemilik primary key dan pemilik foreign key

select p1.productcode, p1.productName, p2.textDescription -- kolom yang ingin ditampilkan
from products p1                                          -- table yang ingin dijoinkan
inner join productlines p2                                -- table yang ingin dijoinkan
on p1.productLine=p2.productLine;                         -- nama kolom yang terdapat di kedua table

select p1.productcode, p1.productName, p2.textDescription -- kolom yang ingin ditampilkan
from products p1                                          -- table yang ingin dijoinkan
inner join productlines p2s                               -- table yang ingin dijoinkan
using (productline);                                      -- nama kolom yag terdapat di kedua table

select p1.productcode, p1.productName, p2.textDescription
from products p1 inner join productlines p2
using (productline)
where p1.buyPrice > 100;

select o.orderNumber, o.orderDate, p.productName, od.quantityOrdered, od.priceEach -- kolom yang ingin ditampilkan
from orders o                                                                      -- table pertama yang digunakan dalam join
inner join orderdetails od                                                         -- join table orders dengan table orderdetails
using (orderNumber)                                                                -- berdasarkan kolom orderNumber (ada di kedua table)
inner join products p                                                              -- join table orderdetails dengan table products
using (productCode)                                                                -- berdasarkan kolom productCode (ada di kedua table)
order by o.orderNumber;                                                            -- mengurutkan hasil berdasarkan kolom orderNumber table orders

select o.orderNumber, o.orderDate, p.productName, od.quantityOrdered, od.priceEach -- kolom yang ingin ditampilkan
from orders o                                                                      -- table pertama yang digunakan dalam join
inner join orderdetails od                                                         -- join table orders dengan table orderdetails
using (orderNumber)                                                                -- berdasarkan kolom orderNumber (ada di kedua table)
inner join products p                                                              -- join table orderdetails dengan table products
using (productCode)                                                                -- berdasarlan kolom productCode (ada di kedua table)
where o.orderNumber = 10200                                                        -- yang memiliki nilai 10200 di kolom ordernumber
order by o.orderNumber;                                                            -- diurutkan berdasarkan nilai kolom orderNumber

select o.orderNumber, o.orderDate, p.productName, od.quantityOrdered, od.priceEach, c.customerNumber, c.customerName -- kolom yang ingin ditampilkan
from orders o                                                                                                        -- table pertama yang digunakan dalam join
inner join orderdetails od                                                                                           -- join table orders dengan table orderdetails
using (orderNumber)                                                                                                  -- berdasarkan kolom orderNumber (ada di kedua table)
inner join products p                                                                                                -- join table orderdetails dengan table products
using (productCode)                                                                                                  -- berdasarkan table productCode (ada di kedua table)
inner join customers c                                                                                               -- join table products dengan table customers
using (customerNumber)                                                                                               -- berdasarkan kolom customerNumber (ada di kedua table)
order by o.orderNumber;                                                                                              -- diurutkan berdasarkan kolom orderNumber di table orders