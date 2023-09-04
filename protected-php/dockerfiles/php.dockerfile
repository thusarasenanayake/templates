FROM php:8-fpm-alpine

ARG UID
ARG GID

ENV UID=${UID}
ENV GID=${GID}

RUN mkdir -p /var/www/html

WORKDIR /var/www/html


# MacOS staff group's gid is 20, so is the dialout group in alpine linux. We're not using it, let's just remove it.
RUN delgroup dialout

RUN addgroup -g ${GID} --system php
RUN adduser -G php --system -D -s /bin/sh -u ${UID} php

RUN sed -i "s/user = www-data/user = php/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = php/g" /usr/local/etc/php-fpm.d/www.conf
RUN echo "php_admin_flag[log_errors] = on" >> /usr/local/etc/php-fpm.d/www.conf
    
USER php

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]
