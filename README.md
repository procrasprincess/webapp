# 🌴 Hotspots 🌴

## Description
A web application created for capstone course of [Pace University's](https://www.pace.edu/) Masters in Computer Science program.

## Setup
Install and setup [Homestead](https://laravel.com/docs/5.8/homestead) for a Symfony 4 project. All of the following commands should be run in the project root within the VM created.

Run the following commands:
```bash
homestead ssh
cd ~/code
composer install
npm install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

