# gurupress_piscine

A basic CMS in pure php used as tutorial for the two days code bootcamp of Codesk Academy

## Installation

Clonez le répertoire dans la racine de votre serveur local "C:\wamp64\www". Pour cela, ouvrez un terminal dans le dossier indiquer ou son équivalent si vous utiliser autre chose que WAMP ou si vous êtes sur un système linux.
Assurez vous que Git est bien installé sur votre machine et que vous disposez d'un compte github.
Faites ensuite la commande suivante:

```bash
 git clone git@github.com:gurulab-open-source/gurupress_piscine.git guru_press
```

Un nouveau dossier (guru_press) devrait être créer. Ouvrez votre éditeur de text (Atom pour les participants à la piscine) depuis le dossier guru_press. Si vous utilisez git bash comme terminal, faites:

```bash
 cd guru_press
 atom .
```

ou

```bash
 cd guru_press
 code .
```

si vous utilisez vscode (Visual Studio Code) comme éditeur. Ouvrez ensuite le fichier config.php à la racine du projet et le fichier tables.sql.

Dans le fichier config.php, changez les identifiants d'accès à la base de données si les votres sont différents de ceux déjà spécifiés.

```php
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
```

Lancez, wamp. Ouvrez votre navigateur, allez sur http://localhost/phpmyadmin
Entrez ensuite vos identifiants de connexion. Une fois connectés, créez une nouvelle base de données nommée "cms" (respectez la case).
Cliquez ensuite sur votre nouvelle base de donnée. Une fois sur la page d'administration de votre base de données, cliquez sur importer.

Copiez et collez (Ctrl + c et Ctrl + v) le code suivant dans le champ de text. Vous pouvez également le copier depuis le fichier tables.sql

```sql
DROP TABLE IF EXISTS articles;
CREATE TABLE articles
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,                              # When the article was published
  title           varchar(255) NOT NULL,                      # Full title of the article
  summary         text NOT NULL,                              # A short summary of the article
  content         mediumtext NOT NULL,                        # The HTML content of the article

  PRIMARY KEY     (id)
);
```
Exécutez la requête. Si tout se passe bien, vous devriez avoir une nouvelle "articles" dans votre base de données.
Rendez vous maintenant sur http://localhost/guru_press

## Structure du projet

Le fichier config.php contient les configurations nécessaires pour faire fonctionne le site, il contient également les définitions de vos [constantes](https://www.php.net/manual/fr/function.define.php). Il est inclut dans le fichier index.php, ce qui étend sa portée à l'ensemble du projet.

Le fichier index.php, c'est le fichier principal. Il est appelé en premier par votre serveur (apache dans notre cas) et permet d'indexer les autres pages.

Le fichier admin.php est rend les différentes pages d'administration du site, c'est un peu l'équivalent de index.php, il inclut également le fichier config.php.

Dans le dossier templates, vous troverez toutes les vues du projet (entendez par là, le code qui rend votre front). Si vous souhaitez faire une modification visuelle, c'est là qu'il faudra vous rendre.

Le dossier static contient tout ce qui est statique, votre css et vos images principalement.

Le dossier classes contient vos [classes](https://www.php.net/manual/fr/language.oop5.php). Généralement on associe une classe à une table comme c'est le cas pour ce projet.

Voilà! Amusez vous bien!

Merci à [Hā ruòdé](https://twitter.com/HaroldSilver), [Neeruam](https://twitter.com/Maureenovich) et [theComicsDealer](https://twitter.com/theComicsDealer)

## License

[MIT](https://choosealicense.com/licenses/mit/)
