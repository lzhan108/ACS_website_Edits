FROM php:7.4.33-zts-alpine3.16
# COPY ./ /app
ENTRYPOINT /app/run.sh
EXPOSE 8000
#RUN docker-php-ext-install pdo

