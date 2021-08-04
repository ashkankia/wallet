
## Wallet

Execute below commands to run project with sail
```bash
composer require laravel/sail --dev
php artisan sail:install
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
sail artisan migrate
sail up
php artisan schedule:work
```

Use below curl for adding transaction
```bash
curl --location --request POST 'http://localhost/api/transactions' \
--header 'Content-Type: application/json' \
--data '{
    "user_id": 1,
    "amount": 2000
}'
```

Use below curl to retrieve balance based on ID
```bash
curl --location --request GET 'http://localhost/api/balances/1'
```
