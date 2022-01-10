README
====
## Modification de ecDB en francais
Modification de plusieurs fichiers, adaptés en francais, et mysqli

## ecDB and PartsBox

ecDB, ou Electronics Component DataBase, est un projet créé par [Nils Fredriksson](http://nilsf.se) aka. ElectricMan, et conçu avec [Buildlog](http://buildlog.se).

En mai  ecDB.net est acheté par la société partsbox.com et les utilisateurs du service ecDB ont été invités a migrer vers une nouvelle solution.

PartsBox est une application en ligne qui vous permet de contrôler votre inventaire de pièces électroniques, la tarification de la nomenclature et la production à petite échelle. Il permet de savoir où les composants sont stockés, quels sont les niveaux de stock actuels et quels composants sont utilisés dans quels projets/BOM. PartsBox étend considérablement ce que propose ecDB, avec de nombreuses nouvelles fonctionnalités et une recherche de pièces incroyablement rapide. Il est disponible dans le commerce (avec des fonctionnalités telles que la tarification des nomenclatures, la lecture de codes-barres, les sous-ensembles, les téléchargements de fichiers et bien plus encore), mais il existe également une version gratuite pour les amateurs/fabricants, avec tout ce dont les amateurs ont besoin.

## ecDB Source Code

Bien que la propriété d'ecDB ait été transférée à PartsBox, il n'y a aucune intention d'extraire le code d'Internet. Il continuera à rester disponible gratuitement pour toute personne souhaitant s'appuyer dessus ou exécuter sa propre instance ecDB. Ce référentiel restera public et accessible.

## Support

Veuillez noter que ce code n'est pas pris en charge. N'essayez pas de signaler des problèmes ou d'émettre des demandes d'extraction, car nous n'avons aucune ressource pour les traiter.

## Documentation

Actuellement, il n'y a pas de documentation disponible. N'hésitez pas à le créer !

## Installation

- Consultez le référentiel git.
- Créez une base MySQL.
- Importez `ecdb_databse.sql` dans votre structure MySQL-database.
- Inserez vos données MySQL dans le fichier de cofiguration, `include/mysql_connect.php` et 'include/login'.
- **Maintenant vous etes prêt a démarrer**.
- Pour enregistrer un utilisateur, tappez: http://nom_de_domaine/register.php
J'ai désactivé l'affichage de la page enregistrement de base. Si vous voulez quelle soit afficher tout le temps, allez dans le fichier 'login.php', et enlever "cotes" de la ligne <!--<li><a href="register.php"><span class="icon medium user"></span> S'enregistrer</a></li>-->

### Requirements

-  Web Server.
-  PHP Version 5.2.4 et suppérieur.
-  MySQL Version 5.0 et suppérieur.

## License

-  ecDB is licensed under a Creative Commons [Attribution-NonCommercial-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-nc-sa/3.0/).
-  The ecDB code is not allowed for public use.
-  You are allowed to set up a private ecDB database for yourself, or whithin an organisation.
