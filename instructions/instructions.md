# Instructions de l'exercice

Madame Collard nous demande de réaliser une interface web en intranet.

Cette application devra comporter plusieurs fonctionnalités

Les données seront gérées selon un C.R.U.D

## Un système de todolist 

Pour que ses employés puissent créer des tâches à effectuer, et modifier le statut de celles ci

Les données concernant les todolist : 

* Un `titre` : string
* Une `description` : text
* Un `statut` : string ou bool


## Un journal de bord

Pour que les employés puissent consigner leurs activités au jour le jour

Les données concernant les journaux de bord : 

* Un `titre` : string
* Une `date` : datetime
* Un `texte` : text

## Une liste des contacts

Pour que les employés puissent inscrire leurs contacts et avoir accès a leurs coordonnées

Les données concernant les listes de contact :

* Un `nom` : string
* Un `prénom` : string
* Une `adresse` : text
* Un `code postal` : integer
* Une `ville` : string
* Une `adresse email` : email
* Un `numéro de téléphone` : string

L'application ne nécessitera pas d’inscriptions ni de connexions

## Aide

* Créer une base de données appelée `collard_intranet`.

* Créer toutes les tables de cette base de données ainsi que les colonnes qui correspondent avec le type de données de chaque fonctionnalités

* Utiliser PDO pour communiquer avec la base de données

## Documentation

Aperçu d'une todolist : `image_01.png`

Usecase : `image02.png`

SQL : https://sql.sh







