**How to Use**

1. **Clone Repository or Download**
    
    ```html
    $ https://github.com/dimaspradipto1/company-profile-dinamikasukmamulia.git
    ```
    
2. **Setup**
    
    ```html
    # Go into the repository
    $ cd inventory-management-system
    
    # Install dependencies
    $ composer install
    
    # Open with your text editor
    $ code .
    ```
    
3. **.ENV**
    
    Rename or copy the `.env.example` file to `.env`
    
    ```html
    # Generate app key
    $ php artisan key:generate
    ```
    
4. **Setup Database**
    
    Setup your database credentials in your `.env` file.
    
5. **Seed Database**
    
    ```html
    $ php artisan:migrate:fresh --seed
    
    # Note: If showing an error, please try to rerun this command.
    ```
    
6. **Create Storage Link**
    
    ```html
    $ php artisan storage:link
    ```
    
7. **Run Server**
    
    ```html
    $ php artisan serve
    ```
    
8. **Login**
    Try login with email: admin@gmail.com and password: admin123
