# Docker lemp Stack

## LEMP

**Linux  -  Engine x (nginx)  - Mariadb  -  PHP**

Construction d'un serveur web **nginx** interprétant le langage **php** ,  
d'un serveur de base de donnée relationnel **mariadb**  ,
à l'aide de **docker** et de **docker-compose**.

### A faire

- Copien le fichier `.env.local` en `.env` et y modifier les variables d'environnements
- Renseigner si besoin `.dockerignore`

### Utilisation des conteneurs

Commande **docker-compose** pour gérer les **conteneurs**.

```bash

# Lancer les conteneurs php,nginx et mariadb
docker-compose -f ./docker/compose.yml up  

# Lancer les conteneurs php,nginx et mariadb en mode détaché
docker-compose -f ./docker/compose.yml up -d  

# Lancer les conteneurs nginx,mariadb et reconstruit l'images de php
docker-compose -f ./docker/compose.yml up --build  

# Lancer les conteneurs nginx,mariadb et reconstruit l'images de php en mode détaché
docker-compose -f ./docker/compose.yml up -d --build  

# Télécharge les dernieres versions des images et lance les conteneurs php,nginx et mariadb
docker-compose -f ./docker/compose.yml pull 

# Demarre les conteneurs php,nginx et mariadb
docker-compose -f ./docker/compose.yml start 

# Arret des conteneurs php,nginx et mariadb
docker-compose -f ./docker/compose.yml stop 

# Arret et suppression des conteneurs
docker-compose -f ./docker/compose.yml down --remove-orphans 

# Liste tous les conteneurs actifs
docker list 

# Liste tous les conteneurs actifs et arrétés
docker ps -a  


```

On peut également utiliser un `Makefile` pour gérer les **conteneurs**.

```bash

- make run  # lancer les conteneurs php,nginx et mariadb
- make rund  # lancer les conteneurs php,nginx et mariadb en mode détaché
- make run-build  # lancer les conteneurs nginx,mariadb et reconstruit l'image pour php
- make rund-build  # lancer les conteneurs nginx,mariadb et reconstruit l'images pour php en mode détaché
- make pull # télécharge les dernieres versions des images et lance les conteneurs php,nginx et mariadb
- make start # demarre les conteneurs php,nginx et mariadb
- make stop # arret des conteneurs php,nginx et mariadb
- make clean # arret et suppression des conteneurs
- make list # liste tous les conteneurs actifs
- make list-all # liste tous les conteneurs actifs et arrétés

```

### Accéder à la base de donnée

Quelques clients pour accéder à la base de donnée **mysql** :

- [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)
- [Dbeaver](https://dbeaver.io/)
- [Adminer](https://www.adminer.org)
