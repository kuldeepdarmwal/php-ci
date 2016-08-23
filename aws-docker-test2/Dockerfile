FROM openjdk:8-jdk-alpine

MAINTAINER kuldeepd@cybage.com

#RUN apt-get update
#RUN apt-get install software-properties-common -y

#RUN add-apt-repository ppa:openjdk-r/ppa -y

#RUN apt-get update
#RUN apt-get install -y nano openjdk-8-jdk git ant openssh-server

## from jenkins ci jnlp image
ENV HOME /home/jenkins
RUN adduser -S -h $HOME jenkins jenkins


ARG VERSION=2.60

RUN apk add --update --no-cache curl bash git \
  && curl --create-dirs -sSLo /usr/share/jenkins/slave.jar https://repo.jenkins-ci.org/public/org/jenkins-ci/main/remoting/${VERSION}/remoting-${VERSION}.jar \
  && chmod 755 /usr/share/jenkins \
  && chmod 644 /usr/share/jenkins/slave.jar \
  && apk del curl

COPY jenkins-slave /usr/local/bin/jenkins-slave

VOLUME /home/jenkins
WORKDIR /home/jenkins
USER jenkins

ENTRYPOINT ["jenkins-slave"]
#############

RUN apt-get -y install php5-cli php5-common php5-mysql php5-xdebug libapache2-mod-php5 php5-xsl php5-mcrypt mcrypt

RUN find /etc/php5/cli/conf.d/ -name "*.ini" -exec sed -i -re 's/^(\s*)#(.*)/\1;\2/g' {} \;
RUN find /etc/php5/cli/ -name "*.ini" -exec sed -i -re 's/^(\s*)#(.*)/\1;\2/g' {} \;

RUN php5enmod mcrypt

