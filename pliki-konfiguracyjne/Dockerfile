FROM prestashop/prestashop:1.7.8 

RUN a2enmod ssl rewrite 


#COPY ./certs/ssl_certificate.crt /etc/ssl/certs/ssl_certificate.crt
#COPY ./certs/ssl_certificate_secret.key /etc/ssl/private/ssl_certificate_secret.key
COPY ./000-default.conf /etc/apache2/sites-enabled/000-default.conf

COPY ./setup-ssl.sh /usr/local/bin/setup-ssl.sh
RUN chmod +x /usr/local/bin/setup-ssl.sh

RUN /usr/local/bin/setup-ssl.sh

CMD ["apache2-foreground"]
