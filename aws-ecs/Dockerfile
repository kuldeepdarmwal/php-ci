FROM ubuntu:14.04

MAINTAINER kuldeepd@cybage.com

RUN add-apt-repository ppa:openjdk-r/ppa -y

RUN apt-get update 
RUN apt-get install -y nano apache2 apache2-utils openjdk-8-jdk git  ant openssh-server
RUN apt-get clean


# installing PHP with packages
RUN apt-get -y install php5-cli php5-common php5-mysql php5-xdebug libapache2-mod-php5 php5-xsl php5-mcrypt

RUN find /etc/php5/cli/conf.d/ -name "*.ini" -exec sed -i -re 's/^(\s*)#(.*)/\1;\2/g' {} \;
RUN find /etc/php5/cli/ -name "*.ini" -exec sed -i -re 's/^(\s*)#(.*)/\1;\2/g' {} \;

RUN php5enmod mcrypt



#copy dir.conf file as per php extensions
RUN rm -f /etc/apache2/mods-available/dir.conf
COPY dir.conf /etc/apache2/mods-available/


COPY resolv.conf /etc/
COPY ecomm_project/ /var/www/html/



RUN service apache2 restart



#ADD . /var/www/html/

#RUN apt-get install -y openssh-server



VOLUME /data
EXPOSE 80


