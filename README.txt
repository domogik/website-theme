Translations
============

- On utilise le plugin WordPress "codestyling" qui gère les traductions des chaines de caractères dans les fichiers ".php" par les fichiers ".po".
- On utilise le plugin "polylang" pour la gestion des articles, catégories... dans plusieurs langues.


Ajout d'une nouvelle langue :
-----------------------------

* dans l'admin de WP aller dans "Outils - Localisation" puis cliquer sur "Thèmes" et "Ajouter une nouvelle langue"

* faire les adaptations dans home.php

* creer category-id.php (de la nv langue)

* pr ttes les category qui st les mm, faire un include de la category modele (anglais)

single.php : delete l.18

Ajout d'une nouvelle traduction
-------------------------------

* dans l'admin de WP aller dans "Outils - Localisation" puis cliquer sur "Thèmes" et, en face de la langue souhaitée cliquer sur "Modifier" 
* Ne pas oublier de générer le fichier ".mo"


Mise à jour des traductions
---------------------------
* dans l'admin de WP aller dans "Outils - Localisation" puis cliquer sur "Thèmes" et, en face de la langue souhaitée cliquer sur "Rescanner" puis "Modifier" 
