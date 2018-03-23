# It Group PHP Developer Technical Task

## Overview

Hello %username%. Here would be your start point in big company. This task is like a game and I hope it would
be interesting. In any case, imagine a zoo. It contains animals. Animals like birds, fish, etc. These animals have 
their abilities, for instance, birds can fly, fish can swim, monkeys can walk. Every animal has to eat, that's why 
every animal has such ability. There are several issues and we hope you'd solve them for us.
   
## Instructions

* Fork this repository
* Look at our code, believe me, it's kinda shitty
* Make this code as good as you can
  * Make as many commits as you want
  * Show us your power
* Push into your repository
* Create a Pull Request to our repository
* Ping us to check
* ~Wait until our CI commit into your branch a new file with new instructions (in progress, hasn't been done yet)~

## Nice to have in result code

* php 7
* Unit tests
* docker environment

## How to run new code

* docker-compose up --build -d
* docker exec -ti tech-task composer test && php index.php

*You might need to change proxy settings in Dockerfile*
> ENV http_proxy http://10.0.2.2:3128

> ENV https_proxy http://10.0.2.2:3128
