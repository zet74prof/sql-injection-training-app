# Application d'entrainement pour les injections SQL

## Introduction

**Cette application est extrêmement vulnérable. Ne pas déployer en production ou sur une machine connectée à Internet. vous êtes responsable de cette application et de ce que vous en faites.**

Cette application PHP vous permet d'apprendre les injections SQL, les attaques utilisant cette faille et comment s'en défendre.

Ce code PHP est très basique mais démontre clairement les vulnérabilités.

## Setup

Cette application nécessite MySQL/MariaDB.

- dans PHPMyadmin ou MySQL Workbench, exécuter le script `sqlitraining.sql` qui créé une base de données nommée **sqlitraining**
- dans le fichier `db_config.php`, ajuster si nécessaire le compte et le mot de passe utilisés pour la connexion au SGBD

Si l'exécutable mysql fonctionne, vous pouvez installer l'application automatiquement en allant sur `/resetdb.php`.
- dans le fichier `resetdb.php`, ajuster si nécessaire le compte et le mot de passe utilisés pour la connexion au SGBD

## Aide

- La mise en commentaire des éléments de la requête SQL suivant le code injecté se fait avec -- (tiret, tiret, espace / s'il n'y a pas d'espace, ça ne fonctionne pas).
- Dans Searproducts.php, la colonne Id du produit n'est pas affichée.

## Reset DB

Pour réinitialiser la base de données, si l'exécutable mysql est correctement déclaré dans votre PATH, naviguer vers `/resetdb.php`

## Credits

- Cette application a été initialement développée par Riyaz Walikar, @riyazwalikar
