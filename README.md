    
    # ```Installer les dependences```
        rm -rf vendor
        rm composer.lock

        composer install

    ## ```Migrations```
        php artisan migrate:fresh
        