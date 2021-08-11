# PrjtSf

C'est un dashboard d'achat de matériel

## Environnement de développement

### Pré-requis

- PHP
- Composer
- Symfony CLI
- Docker
- Docker-compose

* npm

Vérifiez les pré-requis (sauf Docker et Docker-compose) avec la commande (de la CLI Symfony) :

```bash
symfony check:requirements
```

### Lancer l'environnement de développement

```bash
composer install
npm install
npm run build
docker-compose up -d
symfony serve -d
```

## Lancer des tests

```bash
php bin/phpunit --testdox
```
