FROM node:6.2-wheezy

COPY ./provision.sh /tmp/provision.sh
RUN chmod +x /tmp/provision.sh
RUN /tmp/provision.sh

CMD tail -f /dev/null
