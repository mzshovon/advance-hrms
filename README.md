
# Server uptime monitoring

A raw nodeJs project for the begineers.

# Project Installation

- pull from repo
- Run docker build to build dockerized image and up the project to expected server/proxy server
```bash
  docker-compose build
  docker-compose up -d
```

- Run npm start/ npm start local for local setup
```bash
  docker-compose exec -it hrm_php_fpm bash
  composer update
  php artisan optimize
  php artisan config:cache
  php artisan route:clear
```


## Authors

- [@mzshovon](https://www.github.com/mzshovon)

