FROM php:apache

MAINTAINER danchukas

# @see apache.conf
ENV project_root /data/tech_task_123

WORKDIR ${project_root}

# Include file of apache config from project to apache of this image.
# Command "ln" create symbolic link (analog shortcut) on file.
# It is better way because anybody who list apache configs will understand
# where editable source is situated.
RUN ln -sf ${project_root}/apache.conf /etc/apache2/sites-enabled/tech_task_123.conf \
# Fix for error: Invalid command 'RewriteEngine', perhaps misspelled or
#                defined by a module not included in the server configuration
# For remove extra layer and for a tiny speed increase used "&&" after previous "Run" instead new "RUN".
&& a2enmod rewrite



