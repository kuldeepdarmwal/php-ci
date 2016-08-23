FROM ubuntu:14.04

RUN apt-get update && apt-get install -y iputils-ping apache2


#CMD echo $var1

ENV var1=ping var2=8.8.8.8

CMD $var1 $var2

#ENTRYPOINT ["apache2ctl"]
