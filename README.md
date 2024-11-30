# Task Assignment Project

This is a Laravel-based task assignment project with user and product management functionalities. It includes APIs for listing products and soft-deleting them.

## Getting Started

Follow these steps to set up and run the project locally:

### 1. Clone the Repository
```
git clone https://github.com/Ankush-rana-work/task-assignment.git
```
### 2. Install Dependencies
```
composer install
npm install
npm run dev
```



##  Configure the Environment

1. Create a .env file in the project root.
2. Add your database configuration to the .env file.

##  Generate database tables
```
php artisan migrate
```
## Generate Application Key
```
php artisan key:generate
```

## Start the Server
```
php artisan serve
```


## Seed the Database
Run the following command to create a demo user:
```
php artisan db:seed --class=UserSeeder
```
This will create a user with the following credentials:

    Email: demo@gmail.com
    Password: password123
    
Run the following command to generate 50 dummy products:
```
php artisan db:seed --class=ProductSeeder
```
## API Endpoints
1. Get Products

Retrieve a paginated list of products.

    Method: GET
    URL: http://127.0.0.1:8000/api/products
    Query Parameters:
        per_page: Number of products per page (default: 10).
        page: Page number (default: 1).

Example:
```
GET http://127.0.0.1:8000/api/products?per_page=10&page=1
```

2. Soft Delete a Product

Soft delete a specific product by ID.

    Method: DELETE
    URL: http://127.0.0.1:8000/api/products/{id}

Example:
```
DELETE http://127.0.0.1:8000/api/products/1
```
## Usage Notes
The product API is used on the homepage via AJAX calls to display the product list.