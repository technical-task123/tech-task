FROM php:apache

MAINTAINER danchukas

# root "/data" - for more secure, becouse /var/www has default access in apache.
ENV project_root /data/tech_task_123

WORKDIR ${project_root}

# include file of apache config from project to apache of this image
RUN ln -sf ${project_root}/apache.conf /etc/apache2/sites-enabled/tech_task_123.conf \
# Invalid command 'RewriteEngine', perhaps misspelled or defined by a module not included in the server configuration
&& a2enmod rewrite



