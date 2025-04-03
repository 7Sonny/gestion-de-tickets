# Système de Gestion de Tickets

Application web de gestion de tickets développée avec une architecture MVC légère en PHP.

## Prérequis

- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- Serveur web (Apache recommandé)
- Composer

## Installation

1. Clonez le dépôt :
```bash
git clone [https://github.com/7Sonny/gestion-de-tickets.git]
```

2. Installez les dépendances via Composer :
```bash
composer install
```

3. Configurez votre base de données MySQL en important le fichier SQL fourni dans le dossier `database`

4. Configurez vos accès à la base de données dans le fichier de configuration approprié

## Structure du Projet

```
litemvc/
├── controllers/     # Contrôleurs de l'application
├── models/         # Modèles pour la gestion des données
├── views/          # Vues de l'application
├── middlewares/    # Middlewares pour la gestion des autorisations
├── database/       # Scripts SQL et configurations
├── vendor/         # Dépendances (généré par Composer)
└── index.php       # Point d'entrée de l'application
```

## Fonctionnalités

- Création et gestion des tickets
- Système d'authentification utilisateur
- Gestion des rôles et permissions
- Interface responsive
- Suivi des statuts des tickets

## Utilisation

1. Connectez-vous à l'application avec vos identifiants
2. Créez ou consultez les tickets existants
3. Gérez les tickets selon vos permissions

## Contribution

Les contributions sont les bienvenues ! N'hésitez pas à :
- Signaler des bugs
- Proposer des améliorations
- Soumettre des pull requests

## Licence

Ce projet est sous licence MIT
