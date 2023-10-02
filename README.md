# Back-Office pour Agence

Voici un simple back-office pour gerer les modèles, chatteurs et demandes de contact.


## Installation

Pour installer ce projet il faut installer les composants :

```bash
  composer install
```

Ensuite il faut créer un fichier .env.local et le configurer

```bash
  DATABASE_URL="mysql://user:mdp@127.0.0.1:3306/nomdb?serverVersion=5.7.42&charset=utf8mb4"
  MAILER_DSN=null://null
```
Ensuite il faut créer la base de données sur PhpMyAdmin et migrer les entités.

```bash
 php bin/console make:migration
```

Puis :

```bash
php bin/console doctrine:migrations:migrate
```
Et pour finir n'oublions pas de lancer le serveur PHP !

```bash
php -S 0.0.0.0:8080 -t public
```

Le tour est joué, rendez-vous sur localhost:8080/admin !