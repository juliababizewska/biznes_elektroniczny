FROM prestashop/prestashop:1.7.8 

RUN a2enmod ssl rewrite 


#COPY ./certs/ssl_certificate.crt /etc/ssl/certs/ssl_certificate.crt
#COPY ./certs/ssl_certificate_secret.key /etc/ssl/private/ssl_certificate_secret.key
COPY ./000-default.conf /etc/apache2/sites-enabled/000-default.conf

COPY ./setup-ssl.sh /usr/local/bin/setup-ssl.sh
RUN chmod +x /usr/local/bin/setup-ssl.sh

RUN /usr/local/bin/setup-ssl.sh

CMD ["apache2-foreground"]

#ENV PHP_INI_SCAN_DIR=/:/etc/php
#ENV PHP_OPTIONS="-d stream_context_verify_peer=0 -d stream_context_verify_peer_name=0"

