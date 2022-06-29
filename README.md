### SQUADFORCE

#### Cloner le repos

```bash
git clone git@github.com:Igorballo/SquadForce.git

cd SquadForce
```

##### Installer les dépendances PHP

```bash
composer install
```
##### Configurations

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
php artisan migrate
```

##### Installer les dépendances node

```bash
npm install
#ou
yarn install
```
##### Compiler les assets

```bash
npm run dev
#ou 
yarn dev
```

##### Démarrer l'application

```bash
php artisan serve
```

Ouvrir l'application dans votre navigateur à l'adresse : http://localhost:8000

### Tech Stack

* HTML, CSS, JavaScript
* Laravel 8.x
* TailwindCSS
* Alpine.js
