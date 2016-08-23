#
# Ubuntu Dockerfile
#
# https://github.com/dockerfile/ubuntu
#

# Pull base image.
FROM ubuntu:14.04

# Install.
RUN apt-get update

#Install git
RUN apt-get install -y git  

#RUN apt-get install -y openjdk-7-jdk

RUN apt-get update
RUN apt-get install software-properties-common -y
RUN add-apt-repository ppa:webupd8team/java -y
RUN apt-get update
RUN echo debconf shared/accepted-oracle-license-v1-1 select true | debconf-set-selections
RUN apt-get install oracle-java8-installer -y
RUN apt-get install oracle-java8-set-default


RUN apt-get install -y ant 

RUN apt-get -y install php5-cli php5-common php5-mysql php5-xdebug libapache2-mod-php5

RUN curl -sS https://getcomposer.org/installer | php
COPY composer.phar /usr/local/bin/composer
#RUN mv composer.phar /usr/local/bin/composer
RUN apt-get -y install php5-xsl
RUN find /etc/php5/cli/conf.d/ -name "*.ini" -exec sed -i -re 's/^(\s*)#(.*)/\1;\2/g' {} \;
RUN find /etc/php5/cli/ -name "*.ini" -exec sed -i -re 's/^(\s*)#(.*)/\1;\2/g' {} \;

RUN apt-get -y install mcrypt php5-mcrypt
RUN php5enmod mcrypt
RUN service apache2 restart
COPY resolv.conf /etc/
RUN apt-get install -y openssh-server
RUN sed -i 's|session required pam_loginuid.so|session optional pam_loginuid.so|g' /etc/pam.d/sshd
RUN mkdir -p /var/run/sshd

RUN adduser --quiet jenkins

RUN echo "jenkins:jenkins" | chpasswd

ADD . /var/www/html/phpapp/
#RUN rm -rf composer.lock vendor/

RUN apt-get -y install apache2
#RUN service apache2 start
#RUN echo "service apache2 start">>/etc/bash.bashrc
RUN apt-get install nano
RUN rm -f /etc/apache2/mods-available/dir.conf
COPY dir.conf /etc/apache2/mods-available/
#RUN rm -f /etc/resolv.conf
#COPY resolv.conf /etc/	
COPY auth.json /root/.composer/
COPY auth.json /home/jenkins/.composer/
COPY auth.json /home/ajinkyab/.composer/
RUN chmod -R 755 /root/.composer/auth.json 

ENV APP_PATH /var/www/html/phpapp
WORKDIR $APP_PATH/

#CMD ["ant"]

EXPOSE 80
