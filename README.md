# ML2-AppFAQ

## Une application de FAQ suivant le projet type ML2 pour la matiere AP2 en BTS SIO1

## Description

le projet sera divisé en 5 étapes (+1 pour la recette)

1. Planification utilisant les éléments suivants
    1. [x] DCU ,MCD
    2. [x] IHM (Interface Homme Machine)
    3. [x] SITEMAP (Plan du site)
2. Modélisation
    1. [x] MLD (Model Logique de Donnees)
    2. [x] MDP (Modèle de Présentation)
3. Developpement Site Statique
    1. HTML
        - [x] Compte
            - [x] Connection
            - [x] Inscription
            - [x] Déconnexion
        - [x] FAQ
        - [x] FAQmodif
            - [x] Ajouter un message
            - [x] Modifier un message
            - [x] Supprimer un message
    2. CSS
        - [x] Style de l'accueil
        - [x] Style des pages de connection/inscription/Déconnection
        - [x] Style des pages de FAQ
        - [x] Style des pages de modification de message
    3. SQL
        - [x] Création de la base de données
        - [x] Creation des tables
        - [x] Insertion de donnees
4. Developpement Site Dynamique
    1. PHP
        - [x] compte
            - [x] Connection
            - [x] Inscription
            - [x] Déconnexion
        - [x] FAQ
            - [x] Liste des messages
            - [x] Ajouter un message
            - [x] Modifier un message
            - [x] Supprimer un message
        - [x] Admin
5. Test et Documentation
    1. Test
        - [x] Test de connection
        - [x] Test d'inscription
        - [x] Test de Déconnexion
        - [x] Test de la liste des messages
        - [x] Test d'ajout de message
        - [x] Test de modification de message
        - [x] Test de suppression de message
    2. Documentation
        - [ ] Documentation de l'application (En cours)
        - [ ] Documentation de l'installation (En cours)
        - [ ] Documentation de l'utilisation (En cours)




## Installation
1. Cloner le repository
```bash
git clone https://www.github.com/lasmate/ML2-AppFaq.git
``` 
2. Acceder au dossier
```bash
cd ML2-AppFaq
```
3. Lancer le serveur
```bash
xampp start
```
4. Acceder à l'application
```bash
http://localhost/htdocs/projects/ML2-AppFaq (Ensure this path matches your local server configuration)
```


## Goals Bonus

- [ ] Ajouter une page de contact
- [ ] Ajouter une page de mentions légales
- [ ] Ajouter une page de politique de confidentialité
- [ ] Ajouter une page de conditions générales d'utilisation
- [ ] renforcer la sécurité de l'application
        - [ ] utiliser un moyen de hachage sécurisé pour les mots de passe
        - [ ] protéger les informations de connexion à la base de données
        - [ ] donner aux utilisateur lambda un acces a SELECT uniquement
        - [ ] donner aux utilisateur admin un acces a SELECT, INSERT, UPDATE, DELETE


## Auteurs

Lya Lasvenes 
Raphael Tonon
