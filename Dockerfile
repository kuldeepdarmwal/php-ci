#test file for docker 
FROM ubuntu:15.04

RUN apt-get update
RUN apt-get install -y apache2
RUN apt-get install -y nano
RUN apt-get install -y apache2-utils
RUN apt-get clean

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]

VOLUME /opt/
