#!/bin/bash

# Ścieżki do plików certyfikatu i klucza
CERT_PATH="/etc/ssl/certs/ssl_certificate.crt"
KEY_PATH="/etc/ssl/private/ssl_certificate_secret.key"
CONFIG_PATH="/etc/apache2/sites-enabled/000-default.conf"

# Sprawdź, czy certyfikat już istnieje
if [ ! -f "$CERT_PATH" ] || [ ! -f "$KEY_PATH" ]; then
  echo "Certyfikat SSL nie istnieje. Tworzenie nowego self-signed certyfikatu..."

  # Generowanie self-signed certyfikatu (jeśli nie masz .pfx)
  openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout "$KEY_PATH" -out "$CERT_PATH" -subj "/C=US/ST=State/L=City/O=Organization/OU=Department/CN=localhost"

  echo "Certyfikat SSL został utworzony."
fi

# Dodanie konfiguracji SSL do Apache
#if ! grep -q "<VirtualHost *:443>" "$CONFIG_PATH"; then
#  echo "Konfiguracja SSL dla Apache..."
  
#  cat <<EOL >> "$CONFIG_PATH"
#<VirtualHost *:443>
#    ServerAdmin webmaster@localhost
#    DocumentRoot /var/www/html

#    SSLEngine on
#    SSLCertificateFile $CERT_PATH
#   SSLCertificateKeyFile $KEY_PATH
#
#</VirtualHost>
#EOL
#
# echo "Konfiguracja SSL dodana do Apache."fi

# Włączanie modułu SSL w Apache
service apache2 restart
