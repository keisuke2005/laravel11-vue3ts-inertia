FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y \
    curl \
    software-properties-common \
    lsb-release \
    gnupg \
    unzip \
    git \
    && apt-get clean

# Node.js 22 のインストール
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm@latest

# ondrej/php PPA の追加
RUN add-apt-repository ppa:ondrej/php && \
    apt-get update

# PHP 8.4 のインストール（バージョンを明示）
RUN apt-get install -y \
    php8.4-cli \
    php8.4-mbstring \
    php8.4-xml \
    php8.4-curl \
    php8.4-zip \
    && apt-get clean


WORKDIR /workspace

