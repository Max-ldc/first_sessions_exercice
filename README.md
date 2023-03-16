# PDO

## Configuration

Pour configurer l'accès à MySQL, créer dans le dossier `config/` un fichier `db.ini` avec la structure suivante :

```ini
DB_HOST=host.docker.internal
DB_PORT=3306
DB_NAME=dbname
DB_CHARSET=utf8mb4
DB_USER=dbuser
DB_PASSWORD='password'
```