以下がローカル環境にインストールされていること。

- PHP 8.4 以上
- Composer
- MySQL（起動済み）


セットアップ手順

リポジトリをクローン

git clone https://github.com/TuttIIIIIIIIIII/FPS-TOPIC-backend.git

composer install

cp .env.example .env

.env を開き、DB設定を自分の環境に合わせて変更

php artisan key:generate

php artisan migrate

php artisan serve

http://localhost:8000でAPIきどう
