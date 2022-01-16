## Installation

This is boilerplate for simple applications. It is based on lightweight [**router**](https://github.com/obscure-code/router) and
and uses docker images (nginx+php+mysql).

## Quick start

2. Clone this repo: `git clone https://github.com/obscure-code/boilerplate.git`
3. Copy `.env.example` to `.env` and modify it.
4. Run `docker-compose up -d --build`
5. Enter php container: `docker exec -it <PROJECT_NAME>-php /bin/bash`
6. Run `composer install`

Now you can see running app at `http://localhost:<EXTERNAL_PORT>`
