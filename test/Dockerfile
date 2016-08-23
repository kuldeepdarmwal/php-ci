#reducing layers
FROM ubuntu:14.04
MAINTAINER kuldeepdarmwal@gmail.com

RUN apt-get update && apt-get install -y apache2 \
apache2-utils \
vim \
&& apt-get -y clean \
&& rm -rf /var/lib/apt/lists/* /tmp/* /var/lib/tmp/*

EXPOSE 80

CMD ["apache2ctl", "-D","FOREGROUNG"]
