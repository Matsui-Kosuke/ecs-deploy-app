## PHPの公式リリースに含まれるDebianベースのimage
## busterのDebian10は使わずに検証
FROM php:8.2-fpm

## オペキャッシュをインストール
RUN docker-php-ext-install opcache

## composer install際に、gitをインストールしないとエラーが出るためインストール
RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

## appディレクトリの作成
RUN mkdir /app

## 起動時にappディレクトリを選択
WORKDIR /app

## composer installできるようにDocker に Composer をインストール
## composer installがないとlaravelのwelcomeページ表示できない
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer