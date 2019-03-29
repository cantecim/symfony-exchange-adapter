FROM composer:1.8

WORKDIR /app

COPY composer.json .

RUN composer install

COPY . .

RUN apk --no-cache add postgresql-dev && \
        docker-php-ext-install pcntl pdo pdo_pgsql

CMD php bin/console doctrine:migrations:migrate && php bin/console server:run 0.0.0.0:8000