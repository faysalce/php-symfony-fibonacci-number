# FlixMobility 

# Usage Guide


# Pre-requisites
- Downlod  [Symfony 5](https://symfony.com/download) version latest stable


# Getting started
- Clone the repository
```
git clone  https://github.com/faysalce/php-symfony-fibonacci-number.git
```
- Install dependencies (please make sure your machine have php and composer installed)
```
cd php-symfony-fibonacci-number
composer install
```
-  Run the project
```
symfony serve -d
```
  Navigate to `http://localhost:8000`

-  endpoints

  Get Fibonacci REST Endpoint : http://localhost:8000/get-fibonacci-number/{N-thNumber}



# Additional advice
if you want to run unit test i used PHPUnit for test case please follow blow command

please go to application folder with cd command then 

-  php bin/phpunit tests/FibonacciServiceTest.php

# Comments
From home page i use jQuery ajax using Fibonacci REST Endpoint to get data 

