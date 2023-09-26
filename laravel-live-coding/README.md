
## About Project

THis Laravel project for laravel-live-coding testing.
You have to do 3 task here using your knowledge of PHP / Laravel / DB and best-practise (SOLID)

### Our Stack
1. PHP 8.0
2. Laravel Framework 9.52.15
3. Postgresql 16.0
4. Docker
5. NGINX (http://127.0.0.1:8010/api/)
6. RabbitMQ (http://127.0.0.1:15672/) credentials(user user)  <a href="https://www.rabbitmq.com/tutorials/tutorial-one-php.html">Tutorial</a>

##### I prepared few steps to install this project on your PC (Linux).
- git clone https://github.com/DeSKot/Laravel-live-coding
- add .env file and cope data from .env.example
- docker-compose up --build --force-recreate -d
- docker exec -it laravel-live-coding bash
- composer install
- php artisan migrate

## Useful Commands
**grep -w '5432/tcp' /etc/services** - check which service using this port<br>
**sudo systemctl stop <service-name>** - stop /start / restart / status of the service<br>
psql -d mydb -U myuser<br>
**docker system prune -a** - delete not running Containers / Images / Network / Build Cash <br>
**docker volume ls** - display Volumes
**docker volume rm <volume-name>** - remove volume with a name what you saw in last command
