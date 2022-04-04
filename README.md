# Quote Listing - Laravel

## Installation Steps

```
git clone https://github.com/wtsjignesh/quote-app.git
cd quote-app
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

For feature testing

```
php artisan test --filter test_index_page_render
php artisan test --filter test_fetch_data_of_quotes
```
