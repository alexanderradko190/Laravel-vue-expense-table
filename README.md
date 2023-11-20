# Laravel-vue-expense-table

API методы для работы с абстрактной таблицей расходов и реализация создания, удаления и изменения сущностей на стороне frontend. Backend реализован на Laravel, frontend на vue.js +bootstrap <br>
Данные хранятся в таблице MySQL <br>

Для установки проекта необходимо выполнить следующие шаги: <br>

git clone https://github.com/alexanderradko190/Laravel-vue-expense-table.git <br>

cd Laravel-vue_products

Открываем backend часть проекта
cd backend-laravel

Копируем .env.example и создаем в корне проекта файл .env, указываем в этом файле название базы данных, порт, логин и пароль для подключения

composer install или composer update (если composer уже установлен) - создает папку vendor

Создаем миграцию в базе данных
php artisan migrate

Выполняем
php artisan db:seed

php artisan serve - запускаем локальный сервер backend

После того, как бэкнд запустился, переходим в проект frontend-vue
cd frontend-vue

npm install

npm run dev - запускаем локальный сервер frontend

Приложение готово




