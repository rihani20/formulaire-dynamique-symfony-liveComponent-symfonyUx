<!-- composer require symfonycasts/dynamic-forms symfony/ux-live-component symfony/ux-autocomplete

symfony console make:twig-component
php bin/console importmap:require tom-select/dist/css/tom-select.default.css -->



# Création d'un Formulaire Dynamique avec Symfony Component Live et Symfony UX

## Étapes pour Installer les Dépendances Nécessaires

### 1. Installer Symfony UX et les Composants Dynamiques
Cette commande installe les packages nécessaires pour créer des formulaires dynamiques avec Symfony UX et Live Component.

```bash
composer require symfonycasts/dynamic-forms symfony/ux-live-component symfony/ux-autocomplete
```

- **symfonycasts/dynamic-forms** : Ce package permet de créer des formulaires dynamiques en ajoutant ou en supprimant des champs de formulaire sans recharger la page.
- **symfony/ux-live-component** : Ce package permet de créer des composants interactifs qui réagissent aux actions des utilisateurs en temps réel.
- **symfony/ux-autocomplete** : Ce package fournit des fonctionnalités d'autocomplétion pour les formulaires Symfony.

## Création du Formulaire Dynamique

### 1. Créer un Composant Live

Créez un composant Live dans votre projet Symfony.

```bash
php bin/console make:twig-component DynamicForm
```

