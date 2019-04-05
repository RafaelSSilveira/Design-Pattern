FROM php:7-alpine

RUN mkdir -p /var/www

WORKDIR /var/www

COPY . var/www