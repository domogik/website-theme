Commentaires des articles
=========================

- Par défaut les commentaires sont autorisés.
- Pour les actualités, ils sont refusés (programmation dans 'single.php')

Traductions
===========

- On utilise le plugin WordPress "codestyling" qui gère les traductions des chaines de caractères dans les fichiers ".php" par les fichiers ".po".
- On utilise le plugin "polylang" pour la gestion des articles, catégories... dans plusieurs langues.


Ajout d'une nouvelle langue :
-----------------------------

* dans l'admin de WP aller dans "Outils - Localisation" puis cliquer sur "Thèmes" et "Ajouter une nouvelle langue" et vérifier que le fichier créé (".po") est bien dans le sous-répertoire "languages"

* faire les adaptations dans home.php

* creer category-id.php (de la nv langue)

* pr ttes les category qui st les mm, faire un include de la category modele (anglais)

* dans l'admin de WP, l'id de la catégorie (slug) doit commencer par la même chaine de caractères et se terminer par la
langue : ex. news-fr, news-en

Ajout d'une nouvelle traduction
-------------------------------

* dans l'admin de WP aller dans "Outils - Localisation" puis cliquer sur "Thèmes" et, en face de la langue souhaitée cliquer sur "Modifier" 
* Ne pas oublier de générer le fichier ".mo"


Mise à jour des traductions
---------------------------
* dans l'admin de WP aller dans "Outils - Localisation" puis cliquer sur "Thèmes" et, en face de la langue souhaitée cliquer sur "Rescanner" puis "Modifier" 
