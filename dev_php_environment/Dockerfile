FROM ubuntu:latest

RUN apt-get update

RUN apt-get install -y software-properties-common && \
    add-apt-repository ppa:ondrej/php && apt-get update

RUN DEBIAN_FRONTEND=noninteractive apt-get install -y php7.4 php7.4-mysql php7.4-dev

RUN apt-get install -y php7.4

RUN apt-get install -y php7.4-curl

RUN apt-get install -y php7.4-mysql

RUN apt-get install -y php7.4-dev

RUN apt-get install -y php7.4-xml

RUN apt-get install -y php7.4-mbstring