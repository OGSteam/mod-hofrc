# mod-hofrc — HOF RC

Module pour [OGSpy](http://www.ogsteam.fr) permettant la conversion et la gestion des Halls of Fame de Rapports de Combat (RC) d'OGame.

## Description

**HOF RC** (Hall Of Fame Rapport de Combat) est un module OGSpy qui permet de :

- Convertir des rapports de combat OGame en images illustrées (HOF)
- Classer les rapports de combat par catégorie et taille
- Gérer et publier les HOF sur un forum via BBCode
- Personnaliser l'apparence des images générées via des skins
- Administrer la configuration générale du module

## Prérequis

- [OGSpy](http://www.ogsteam.fr) version **3.3.9** ou supérieure
- PHP avec support GD (génération d'images)
- Base de données MySQL

## Installation

1. Placer le dossier `hofrc` dans le répertoire `mod/` de votre installation OGSpy.
2. Depuis le panneau d'administration d'OGSpy, accéder au gestionnaire de modules.
3. Installer le module **HOF RC** via l'interface d'administration.
4. Le module créera automatiquement les tables nécessaires en base de données.

## Désinstallation

Depuis le panneau d'administration d'OGSpy, désactiver et désinstaller le module **HOF RC**. Les tables suivantes seront supprimées :

- `hofrc_attack`
- `hofrc_config`
- `hofrc_defence`
- `hofrc_info_rc`
- `hofrc_rp`
- `hofrc_skin`
- `hofrc_title`

## Fonctionnalités

### Conversion de RC
Sélectionnez un rapport de combat enregistré dans OGSpy et convertissez-le en image HOF. Vous pouvez également récupérer le BBCode correspondant pour le poster sur un forum.

### Gestion des HOF
Parcourez, filtrez et gérez les HOF générés. Publiez-les ou ignorez-les selon vos besoins.

### Administration
Configurez les paramètres du module : skins, seuils de catégories, dates de début d'univers, polices, dimensions des images, etc.

### Catégories de HOF

| Catégorie    | Taille minimale de pertes |
|--------------|--------------------------|
| Initial      | 2 000 000                |
| Courant      | 5 000 000                |
| Basic        | 10 000 000               |
| Normal       | 20 000 000               |
| Avancé       | 50 000 000               |
| Stratège     | 100 000 000              |
| Expert       | 150 000 000              |
| Guerrier     | 250 000 000              |
| Dévastateur  | 500 000 000              |
| Champion     | 1 000 000 000            |
| Légendaire   | 2 000 000 000            |

## Changelog

### Version 0.0.4
- Remise en service du module
- Suppression des fonctions dépréciées
- Redesign 3.3.9

### Version 0.0.3
- Réindentation des fichiers
- Correction de la non-détection des RC Basic
- Correction d'un problème à la mise à jour

### Version 0.0.2
- Repris par DarkNoon
- Passage en UTF-8

### Version 0.0.1
- Sortie initiale du module

## Auteurs

- **Shad** — Auteur original
- **DarkNoon** — Reprise et mise à jour

## Liens

- Site OGSteam : [http://www.ogsteam.fr](http://www.ogsteam.fr)
