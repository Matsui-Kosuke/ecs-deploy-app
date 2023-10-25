## PHPの公式リリースに含まれるDebianベースのimage
## busterのDebian10は使わずに検証
FROM php:8.2-fpm

## オペキャッシュをインストール
RUN docker-php-ext-install opcache

## appディレクトリの作成
RUN mkdir /app

## 起動時にappディレクトリを選択
WORKDIR /app