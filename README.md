# Take home test (Full stack) Laravel 8, Inertia.js and Vue 3

## Install

once you've cloned the repository locally, run.

```bash
composer install && npm ci
```
Once you've done that you should set up your local database connections and copy over the `.env.example` and update the `.env.testing` to work with your local testing databse.

You should have access the following locally.

- PHP 7.4
- postgres 12+ if needed you can install [DBngin](https://dbngin.com/)

Once those are configured, you can run 

```bash
php artisan migrate:fresh --seed
```

Which will create the following user to login with.

```
username: admin@realtor.com
password: password
```

follow the instructions in the [the pitch](https://www.notion.so/aryeo/Aryeo-Full-Stack-Engineering-Project-d814733e3e614a019f391b0816551bdf) to add the listings table view.
