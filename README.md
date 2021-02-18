# SHAMBA-MARKET:
Its a web application used as digital platform used by different farmers to sell and buy their products


# OVERVIEW.
Shamba Market is a web-based application that helps to connect between the farmers and buyers/suppliers. This web-based application deals more on selling of agriculture product, looking for the market of different agriculture product like organic food, providing information about the price fluctuation on different crops and also to solve different problem that facing different farmers in agricultural sectors

# PROBLEM STATEMENT.
There is been a huge difference in prices between the crops producers (Farmers) and the customers (End Users) this price difference is mostly caused by the presence of the middle man who buys the crops from farmers at a very low price and sell them at a very high price in such a way that production becomes low and of low quality due to low prices imposed on the farmers.

# How to Install.
This is a Laravel Project, please follow the instructions to install and run the project

## Requirements.

- PHP >= 5.5.9
- XAMMP or LAMPP (MySql, Apache)

### Clone the repository
```
git clone https://github.com/GROUP16CS335/SHAMBA-MARKET.git
```

### Switch to the repo folder
```
cd shambamarket
```

### Install all the dependencies using composer
```
    composer install
```
### Install node modules
```
    npm install
```
### Install bootstrap
```
    npm install bootstrap
```
### Copy the example env file and make the required configuration changes in the .env file
```
    cp .env.example .env
```    

### Generate a new application key
```
    php artisan key:generate
```

### Run the database migrations (Set the database connection in .env before migrating)
```
    php artisan migrate
```

### Start the local development server
```
    php artisan serve
```
