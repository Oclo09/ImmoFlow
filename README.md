# Documentation

## Personne
- Nom: Richard,
- Prénom: Nathan

## Description
Ce projet est une application API sur le web en php.

Il permet de gérer des appartements dans un immeuble contenant par exemple le prix de location de l'appartement, son nombre de pièce et le nom du locataire

## Technologies / Applications
- Visual Studio 2022
- phpMyAdmin,
- Apache (localhost)

## Installation

### Base de données
Importer le fichier sql "config/db/immoFlow.sql" dans phpMyAdmin

### Env
Copier le fichier exemple '/config/env/.env.example' à la racine et mettre les bonnes valeures dans les crochets

```bash
cp /config/env/.env.exemple ./.env
```

### Vhost
Dans le fichier "/config/vhost/immoflow.local.conf" adapter les chemins DocumentRoot et Directory au dossier de votre projet

Activer le site
```bash
sudo a2enmod rewrite
sudo cp config/vhost/immoflow.local.conf /etc/apache2/sites-available/immoflow.local.conf
sudo a2ensite immoflow.local.conf
sudo systemctl reload apache2
```

Ajouter dans votre wsl dans le fichier "/etc/hosts" et dans Windows dans le fichier "C:\Windows\System32\drivers\etc\hosts": 
- 127.0.0.1 panini.local  