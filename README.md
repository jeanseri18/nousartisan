    
    # ```Installer les dependences```
        rm -rf vendor
        rm composer.lock

        composer install

    ## ```Migrations```
        php artisan migrate:fresh
        php artisan db:seed
        
     #LES DOSSIERS AJOUTE
     Welcome pour les pages dacceuil
     workerhome pour les pages apres la connexion du worker
     customerhome pour les pages apres la connexion du customer
