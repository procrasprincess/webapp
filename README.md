# 🌴 Hotspots 🌴

## Description
A web application created for capstone course of [Pace University's](https://www.pace.edu/) Masters in Computer Science program.

## Before getting started
This is a list of [topics](https://github.com/procrasprincess/webapp/blob/master/Prep_Hotspots.md) that should be reviewed and research before working on this project.

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

