<p align="center">
    <img src="https://avatars1.githubusercontent.com/u/33844443" height="100px">
    <h1 align="center">Webpack</h1>
    <br>
</p>


REQUIREMENTS
------------

The minimum requirements for this project:
- PHP >= 7.1.3
- MySQL 8.0.3
- Redis 4.0.6


Installing using Docker
-----------------------

> You need to have [docker](http://www.docker.com) (1.17.0+) and
[docker-compose](https://docs.docker.com/compose/install/) (1.14.0+) installed.

You can install the application using the following commands:

sh
git clone git@github.com:StanislavAshykhmin/webpack.git .
cd webpack
cp .env.example .env
docker-compose up -d --build



It may take some minutes to download the required docker images. When
done, you need to install vendors as follows:

sh
docker exec -it webpack-web-container bash
composer install
chown -R www-data:www-data .


When done, you need to execute the following commands in the web container:
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`

After this steps, you can access your app from [http://localhost:xxxxx](http://localhost:xxxxx).

