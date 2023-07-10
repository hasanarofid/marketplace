# marketplace
project cms marketplace v.1.0
by : hasanarofid

## Marketplace cms hasan - Ecommerce Website

### Features

Guest
1. View Product
2. Register
3. Add product to cart

Customer
1. Login
2. Add product to cart
3. Checkout (No payment gateway implemented, all checkout status=PAID)
4. View purchase history

Admin 
1. Login to admin panel
2. CRUD product
3. CRUD size
4. Manage order
5. View user
6. Notes

### Installation
1. Clone the repository using the command "git clone [link]"
2. Create database in MySql
3. Configure the .env file accordingly
4. Run command 
```
$composer install
$php artisan migrate
$php artisan db:seed
$php artisan serve
$php artisan storage:link
```

### Built With
* Bootstrap- CSS framework
* JQuery- Javascript framework
* Laravel - PHP framework
* MySql- Databse

### Progress fitur 9/7/2023
* migrate - seed profile perusahan (done)
* ubah profile perusahan (done)
* ubah logo dan favicon perusahaan (done)

### Progress fitur 10/7/2023
* migrate - seed rekening perusahan (done)
* CRUD rekening admin (done)
* rekening admin on order user (done)

### Progress fitur 11/7/2023
* Checkout - user
* Dinamis Kategori - admin
* Whatsapp fitur - user & admin
