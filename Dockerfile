# Specify base image
FROM php:7.2-cli

# Maintainer information
MAINTAINER Oleksandr Nazarov <nazarov.oleksandr.o@gmail.com>

# Set environment variables for proxy
ENV http_proxy http://10.0.2.2:3128
ENV https_proxy http://10.0.2.2:3128

# Install base components
RUN apt-get -qq update && apt-get -y upgrade && apt-get install --no-install-recommends -y \
        curl \
        wget \
        git \
        mc \
        telnet \
        vim \
        unzip

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --install-dir=/usr/local/bin \
        --filename=composer

# Set environment PATH variable for composer
ENV PATH="${PATH}:/root/.composer/vendor/bin"

# Set workdir
WORKDIR /usr/src/tech-task

# Clean repository
RUN apt-get clean \
    && rm -rf /var/lib/apt/lists/*