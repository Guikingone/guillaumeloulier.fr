# Guillaume Loulier 

This source code is linked to the website guillaumeloulier.fr.

# Build phase :

This project is followed by Travis and Jenkins : 

_Travis :_ 

[![Build Status](https://travis-ci.org/Guikingone/guillaumeloulier.fr.svg?branch=master)](https://travis-ci.org/Guikingone/guillaumeloulier.fr)

_Jenkins :_

In progress.

## Installation

In order to be effective, this source code has been compiled with webpack and other stuff, here's the process in order to use it in the best condition :
First, let's start the installation of the Symfony components : 

```
 composer.phar install or composer install 
```

Let's install the database :

```
php bin/console doctrine:database:create
```

```
php bin/console doctrine:schema:update --force
```

After this, your website is ready, clear the cache and install the front assets : 

```
php bin/console c:c
php bin/console c:c --env=prod
```

```
npm install
npm start
```

Here's come the tricky part, every front assets is managed by Webpack and Typescript, even ReactJS is write in Typescript ! 
In order to be effective, "npm start" compile every .tsx files into a .js files, after this part, the files are loaded to the view by the asset() function, in order to be effective, the loading is done asynchronously and AMP is installed, this help to have a fast mobile experience, in the same time, "npm start" run the gulp command and compile the .scss files into a .css file.
After the installation part, let's enjoy the website by running the server :

```
php bin/console server:run
```

Or by starting your local server.