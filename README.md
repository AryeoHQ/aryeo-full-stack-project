# Aryeo Full-Stack Engineering Project (Full stack) Laravel 8, Inertia.js and Vue 3

## Install & Getting Set Up 

Once you've cloned the repository locally, run

```bash
composer install && npm ci
```

Next, you should set up your local database connections and copy over the `.env.example` and update the `.env.testing` to work with your local testing databse.

You should have access to the following locally: 

- PHP 7.4
- postgres 12+ if needed you can install [DBngin](https://dbngin.com/)

Once those are configured, you can run 

```bash
php artisan migrate:fresh --seed
```

This will create the following user to login with:

```
username: admin@realtor.com
password: password
```

## Project Requirements 

Once set up locally, we've outlined [a pitch](https://www.notion.so/aryeo/Aryeo-Full-Stack-Engineering-Project-d814733e3e614a019f391b0816551bdf) with the project requirements. The pitch includes what you'll be doing and how to submit the project once completed. Let us know if you come accross any questions getting set up or when reading over the pitch, we're happy to help! 

Happy Coding!
