# order-repository-pattern-laravel
perform Order CRUD using repository pattern in laravel with API. Repository pattern will help us to clean our code further more. Its one of the component of SOLID technique.

# Here are the steps which you can follow for repository pattern, I will use example names accourding to mine project, i.e related to Order:
1) Create a folder with Interface and create file with php extension according to your project name, i.e. OrderInterface.php
- In this file create Interface, i.e Interface OrderRepositoryInterface, and add define functions you want to used inside it. typically they can be related to CRUD
2) After creating Interface, create a folder for repository file, named as Repositories.
- Inside this folder, create file filename.php (filename can be anything like in my case OrderRepository.php)
- In OrderRepository.php file, create a class which implements OrderRepositoryInterface, in this class we will declare the functioned which we created in OrderRepositoryInterface.php. so basically, we will perform functionality on Model which we usually performed in Controller.
# Note: don't forget to import Model and Interface inside this repository file
3) After creating Interface and Repository, we have to bind them with each other, you can do so by either of following 2 steps:
    a) 
        - Create a seprate service provider by typing/copying command `php artisan make:provider OrderServiceProvider`(or any name you want)
            => inside this file there will be a function named as "register", bind Interface with Repository, its code is as
                `$this->app->bind(OrderRepositoryInterface::class, OrderRepository::class)`
        - Register this service provider by adding this serviceProvider class inside `provider` function, which is located in `config/app.php`
    b) Another way is to add `$this->app->bind(OrderRepositoryInterface::class, OrderRepository::class)` inside `AppServiceProvider`, its advantage is that you don't have to register service provider inside the config/app.php
4) Now the repositories are ready to use, In this step we will use Interface inside the controller
- Import Interface inside desired controller
- Create variable as private, i.e `private OrderRepositoryInterface $orderRepository`
- add a constructor and pass OrderRepositoryInterface $orderRepository as parameter inside it.
    =>inside this contructor, store values of parameters in private variable as $this->orderRepository = $orderRepository
- And use the orderRepository function accordingly, i.e `$this->orderRepository->getAllOrders()` inside `index()` function
