FROM elieser/base:latest

# USER
USER root

# WORKDIR
WORKDIR projeto/

COPY --chown=www:root nginx.conf /etc/nginx/conf.d/
COPY --chown=www:root supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# EXPOSE
EXPOSE 80

# PHP-FPM DIRECTORY
RUN  mkdir /var/run/php

# CMD
CMD ["/usr/bin/supervisord"]

