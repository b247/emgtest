FROM php:7.4-apache-buster

ENV APP_SRV "emgtest.localnet"
ENV APP_DIR "/var/www/${APP_SRV}"
ENV APP_DIR_PUBLIC "${APP_DIR}/public"
ENV APP_DIR_LOGS "${APP_DIR}/logs"

RUN a2enmod rewrite

RUN mkdir -p ${APP_DIR}
RUN mkdir -p ${APP_DIR_PUBLIC}
RUN mkdir -p ${APP_DIR_LOGS}
RUN chown -R www-data:www-data ${APP_DIR}/

COPY ./app/ $APP_DIR_PUBLIC
COPY ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR ${APP_DIR}

RUN ln -sf /dev/stderr ${APP_DIR_LOGS}/error.log 
RUN ln -sf /dev/stdout ${APP_DIR_LOGS}/access.log 

#$ docker build -f docker/Dockerfile -t emgtest -c 2 -m 0.6g --memory-swap 2g .
#$ docker run --rm -p 8080:80 emgtest