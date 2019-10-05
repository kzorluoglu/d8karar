FROM php:7.2-apache
LABEL maintainer="koray@d8devs.com"

RUN echo "Europe/Berlin" > /etc/timezone && dpkg-reconfigure -f noninteractive tzdata

ENV APACHE_DOCUMENT_ROOT /var/www/html/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN /usr/sbin/a2enmod rewrite && /usr/sbin/a2enmod headers && /usr/sbin/a2enmod expires

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN docker-php-ext-install mbstring

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev
RUN docker-php-ext-install zip

RUN apt-get update -y && apt-get install -y sendmail

 RUN apt-get update -y && \
   apt-get install -y --no-install-recommends \
   less vim wget unzip rsync git mariadb-client \
   libcurl4-openssl-dev libfreetype6 libjpeg62-turbo libpng-dev libjpeg-dev libxml2-dev libxpm4 && \
   apt-get clean && \
   apt-get autoremove -y && \
   rm -rf /var/lib/apt/lists/* && \
   echo "export TERM=xterm" >> /root/.bashrc

RUN docker-php-ext-configure gd --with-jpeg-dir=/usr/local/ && \
 docker-php-ext-install -j$(nproc) zip bcmath soap pdo_mysql gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


#RUN mkdir -p setup && cd setup && \
#  curl -sSL https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz -o ioncube.tar.gz && \
#  tar -xzf ioncube.tar.gz && \
#  export PHP_EXT_DIR=$(php-config --extension-dir) && \
#  mv ./ioncube/ioncube_loader_lin_7.2.so  $PHP_EXT_DIR/ && \
#  echo "zend_extension = $PHP_EXT_DIR/ioncube_loader_lin_7.2.so" >> /opt/docker/etc/php/php.ini && \
#  cd .. && rm -rf setup