FROM docbradfordsoftware/php7-dev:1.0
MAINTAINER jkevlin<jkevlin@gmail.com>

COPY ./htdocs /DATA/htdocs

CMD ["/run.sh"]