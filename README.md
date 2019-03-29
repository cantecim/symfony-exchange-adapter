# exchange app

## How to run with Docker
* cd into project's root folder
* hit "docker-compose up"
* wait a little bit, don't worry it might output some errors about database connections when booting up. It will start to serve eventually
* Browse http://127.0.0.1:5500
* After successful page load
* You can run market:fetch command with "docker-compose run app php bin/console market:fetch" in another terminal 

## How to run on local environment
* cd into project's root folder
* make sure postgresql installed
* make sure pdo and pdo_pgsql extension are installed
* hit "composer install"
* Create "enuygun" user with password 123123
(or setup custom .env and use your credentials)
* Create "enuygun" database with owner "enuygun" user
* or hit "php bin/console doctrine:database:create"
* hit "php bin/console server:run"
* Browse http://127.0.0.1:8000
* hit "php bin/console market:fetch" to run market:fetch command

_Note that this project is not production grade, we are using php's development server to test it out_
