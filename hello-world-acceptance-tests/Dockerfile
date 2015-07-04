FROM php:5.6-cli

MAINTAINER Jeroen van den Heuvel

RUN apt-get update && \
    apt-get install -y zlib1g-dev git && \
    docker-php-ext-install zip mbstring && \
    mkdir -p /usr/src/hello-world-acceptance-tests && \
    rm -rf /var/lib/apt/lists/*

WORKDIR /usr/src/hello-world-acceptance-tests

COPY ./composer.* ./

RUN curl -sS https://getcomposer.org/installer | php && \
    php composer.phar install --prefer-dist --no-scripts && \
    rm composer.phar

COPY . .

CMD [ "./vendor/bin/behat" ]
