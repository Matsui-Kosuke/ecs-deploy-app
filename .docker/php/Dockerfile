## PHPの公式リリースに含まれるDebianベースのimage
## busterのDebian10は使わずに検証
FROM php:8.2-fpm

EXPOSE 5173

## オペキャッシュをインストール
RUN docker-php-ext-install opcache

## composer install際に、gitをインストールしないとエラーが出るためインストール
RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

## mysqlを操作できるライブラリ
RUN docker-php-ext-install pdo pdo_mysql

## appディレクトリの作成
RUN mkdir /app

## 起動時にappディレクトリを選択
WORKDIR /app

## composer installできるようにDocker に Composer をインストール
## composer installがないとlaravelのwelcomeページ表示できない
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

## nodejsのインストール
RUN curl -sL https://deb.nodesource.com/setup_lts.x | bash -
RUN apt install -y nodejs
RUN npm install --global yarn
