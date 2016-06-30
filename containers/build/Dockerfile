FROM node:6.2-wheezy

WORKDIR /project

COPY ./package.json package.json
COPY ./gulpfile.js gulpfile.js

COPY ./provision.sh /tmp/provision.sh
RUN chmod +x /tmp/provision.sh
RUN /tmp/provision.sh

CMD ./node_modules/.bin/gulp watch
