FROM alpine:3.18

RUN apk update && \
    apk add --no-cache certbot bash wget

ENV SUPERCRONIC_VERSION v0.1.0
RUN wget -qO /usr/local/bin/supercronic https://github.com/aptible/supercronic/releases/download/$SUPERCRONIC_VERSION/supercronic-linux-arm64 && \
    chmod +x /usr/local/bin/supercronic

COPY renew-certs.sh /renew-certs.sh
RUN chmod +x /renew-certs.sh

RUN mkdir -p /var/log

COPY crontab /etc/crontab

CMD ["supercronic", "/etc/crontab"]