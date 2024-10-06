#!/bin/sh

# Обновление сертификатов
certbot renew --webroot -w /var/www/certbot --quiet --renew-hook "nginx -s reload"

# Проверка успешности обновления
if [ $? -eq 0 ]; then
  echo "[$(date)] SSL-сертификаты успешно обновлены и Nginx перезагружен."
else
  echo "[$(date)] Ошибка при обновлении SSL-сертификатов."
fi