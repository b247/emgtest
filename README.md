# emgTest WebApp

How to run:

1.Clone the project and cd into the project root (cd emgtest);

2.Build and start the container *

$ `docker build -f docker/Dockerfile -t emgtest -c 2 -m 0.6g --memory-swap 2g .
`

$  `docker run --rm -p 8080:80 emgtest`

3.access localhost:8080 from the browser.

*Alternative, if docker is not available,  you can start a php7.4 webserver within the project /app folder (cd app)
$ `php -S localhost:8080`
