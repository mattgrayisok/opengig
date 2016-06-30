FROM node:6.2-wheezy

WORKDIR /project

COPY ./package.json package.json

COPY ./provision.sh /tmp/provision.sh
RUN chmod +x /tmp/provision.sh
RUN /tmp/provision.sh

COPY ./gulpfile.js gulpfile.js

CMD ./node_modules/.bin/gulp watch
