FROM debian:10-slim

MAINTAINER Eli Guterres <elieserguterres@gmail.com>

RUN apt-get -y update && \
    apt-get -y upgrade && \
    apt-get -y install \
    wget \
    vim \
	git \
    curl \
    apt-transport-https \
    lsb-release \
    ca-certificates \
    zip \
    unzip \
    jpegoptim \
    optipng \
    build-essential \
    nginx \
    supervisor

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
	    sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list' && \
	    apt-get -y update && \
	    apt-get -y install \
            php7.4-bcmath \
            php7.4-curl \
            php7.4-fpm \
            php7.4-gd \
            php7.4-json \
            php7.4-mbstring \
            php7.4-memcached \
            php7.4-mysql \
            php7.4-xml \
            php7.4-zip \
            php7.4-cli \
            php7.4-intl \
            php7.4-mbstring \
            php7.4-mysql \
            php7.4-redis \
            php7.4-xdebug \
            php7.4-xml

RUN update-alternatives --set php /usr/bin/php7.4

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN useradd -rm -d /home/www -s /bin/bash -g root -G sudo -u 1000 www

USER www

WORKDIR /home/www

