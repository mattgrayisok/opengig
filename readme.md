OpenGig

`docker-compose up -d` <-- Create containers and start them

`docker exec -i -t opengig_buildchain_1 bash` <-- Log into a bash shell on build server

`cd /project/buildscripts && ./node_modules/.bin/browser-sync start --proxy nginx --files "../src/css/*.css"` <-- Run browsersync and start watching for css changes

-----------------

`localhost` <-- Direct to nginx

`localhost:3000` <-- Browsersync proxy

`localhost:3001` <-- Browsersync dashboard thing

## To Improve
The buildchain server should have its `CMD` set to a long running process which
manages both gulp and browsersync. 1 process per container.
