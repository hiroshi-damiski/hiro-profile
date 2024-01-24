# Learning Web Development with Hiro Profile

Welcome to the Hiro Profile tutorial, designed to introduce you to both basic and advanced concepts of web development. The website is built using a variety of web technologies, each contributing to different aspects of its functionality.

1. [Installation and setup](#installation-and-setup)
   1. [Install PHP](#1-install-php)
   2. [Enable PHP extensions](#2-enable-php-extensions)
      1. [Enable PDO SQLite in `php.ini` in `Linux` and `Mac`](#1-enable-pdo-sqlite-in-phpini-in-linux-and-mac)
      2. [Enable PDO SQLite in `php.ini` in `Laragon - Windows`](#2-enable-pdo-sqlite-in-phpini-in-laragon---windows)
         1. [Open Laragon Menu](#1-open-laragon-menu)
         2. [Select PHP Version](#2-select-php-version)
         3. [Enable `pdo_sqlite` Extension](#3-enable-pdo_sqlite-extension)
         4. [Restart Laragon](#4-restart-laragon)
      3. 
   3. [Start the website](#3-start-the-website)
2. [HTML](#1-html)
3. [CSS](#2-cascading-style-sheets-css)
4. [JS](#3-javascript-js)
5. [PHP and PHP PDO to access the database](#2-php-pdo-for-database-access)
   1. [PHP](#1-php)
   2. [PHP PDO to access the database](#2-php-pdo-for-database-access)
6. [SQLite databse](#5-sqlite-database)
7. [Cookies (accessible for both client and the server)](#6-cookies)
8. [Server session storage (only accessible for the server)](#7-server-session-storage)
9. [File System](#8-project-structure)
   1. [Database file](#1-database-file)
   2. [Database initialization and connection files](#2-database-initialization-and-connection-files)
   3. [Git configuration](#3-git-configuration)
   4. [Project scripts](#4-project-scripts)
   5. [Web pages](#5-web-pages)

## 1. Installation and setup

First of all let's install it first. You will need to install bellow softwares and extensions.

### 1. Install PHP

1. [Linux - LAMP](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04)
2. [Mac - MAMP](https://documentation.mamp.info/en/MAMP-Mac/Installation/)
3. Windows - 
   1. Laragon(recomonded) 
      1. [Article](https://www.nexcess.net/help/laragon/)
      2. [Youtube Tutorial](https://youtu.be/IvcEGATf7dU)
   2. WAMP
      1. [Article](https://blog.templatetoaster.com/how-to-install-wamp/)
      2. [Youtube Tutorial](https://www.youtube.com/watch?v=7gMplrbDZJs)

### 2. Enable PHP extensions

The required extension to run this site is

```ini
extension=pdo_sqlite
```

#### 1. Enable PDO SQLite in `php.ini` in `Linux` and `Mac`

Open your `php.ini` configuration file and make sure that the above line is uncommented (remove the leading semicolon if it's commented).

#### 2. Enable PDO SQLite in `php.ini` in `Laragon - Windows`

##### 1. Open Laragon Menu

Launch Laragon and open the menu by clicking on the Laragon tray icon in your system tray.

##### 2. Select PHP Version

In the Laragon menu, go to PHP and then select the version you are currently using or the version you want to enable `pdo_sqlite` for. If you are not sure which version you are using, check your Laragon dashboard.

##### 3. Enable `pdo_sqlite` Extension

Within the PHP version menu, hover over Extensions and find `php_pdo_sqlite`. Ensure that it is checked. This will enable the `pdo_sqlite` extension.

##### 4. Restart Laragon

After enabling the extension, restart Laragon. You can do this by right-clicking on the Laragon icon in the system tray and selecting "Reload" or by choosing "Stop All" and then "Start All" from the Laragon menu.

### 3. Start the website

Go to your `www`/`htdocs` folder and move the website files in to a new folder inside of `www`/`htdocs`.

Then you have to open your site according to the given settings.

## 2. HTML

HTML forms the foundation of web development. Start with [HTML Basics](https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML) on MDN, interactive tutorials on [Codecademy](https://www.codecademy.com/learn/learn-html), and deepen your knowledge with [freeCodeCamp](https://www.freecodecamp.org/learn/). Practice on online editors like [JSFiddle](https://jsfiddle.net/) and [CodePen](https://codepen.io/).

Mastering HTML is crucial for anyone aspiring to become a proficient web developer. Dive into these resources and embark on your journey to becoming a well-rounded web developer with Hiro Profile.

## 3. Cascading Style Sheets (CSS)

CSS is essential for styling web pages. Learn from the comprehensive [MDN guide](https://developer.mozilla.org/en-US/docs/Web/CSS), interactive tutorials on [W3Schools](https://www.w3schools.com/css/), coding challenges on [freeCodeCamp](https://www.freecodecamp.org/), and practical tips on [CSS-Tricks](https://css-tricks.com/).

## 4. JavaScript (JS)

JavaScript is a crucial language for web development. Begin with the comprehensive guide on [MDN](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide), interactive courses on [Codecademy](https://www.codecademy.com/learn/introduction-to-javascript), and deepen your understanding with "Eloquent JavaScript" [here](https://eloquentjavascript.net/). Practice on platforms like [LeetCode](https://leetcode.com/) and [HackerRank](https://www.hackerrank.com/domains/tutorials/10-days-of-javascript). Stay updated with the [ECMAScript specification](https://www.ecma-international.org/ecma-262/) and explore frameworks like [React](https://reactjs.org/) and [Node.js](https://nodejs.org/).

## 5. PHP and PHP PDO for Database Access

### 1. PHP

Discover PHP, a widely-used server-side language, with official documentation [here](https://www.php.net) and tutorials on [W3Schools](https://www.w3schools.com/php/default.asp).

### 2. PHP PDO for Database Access

Explore PHP Data Objects (PDO) for secure and flexible database interaction. Resources include [official PHP documentation](https://www.php.net/manual/en/book.pdo.php), [W3Schools](https://www.w3schools.com/php/php_mysql_pdo.asp), and [PHP The Right Way](https://phptherightway.com/#pdo_extension).

## 6. SQLite Database

Learn about SQLite, a permanent data storage solution ideal for small to medium-sized applications. Start with the [official documentation](https://www.sqlite.org/docs.html) and practical examples on [SQLite Tutorial](https://www.sqlitetutorial.net/).

## 7. Cookies

Understand how cookies send data as tokens between the server and client. Explore client-side cookie usage with [MDN](https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies) and server-side implementation in PHP [here](https://www.php.net/manual/en/features.cookies.php).

## 8. Server Session Storage

Learn about server session storage, a feature inherent in web servers using PHP or Node.js. This temporary storage persists data for the duration of the client-server connection. Explore more at [W3Schools](https://www.w3schools.com/php/php_sessions.asp).

## 9. Project Structure

### 1. Database file

- `./db/database.sqlite`: SQLite database file. (This kind of file only created in sqllite only.)

### 2. Database initialization and connection files

- `./db/connection.php`: PHP file for database connection.
- `./db/migrations.php`: PHP file related to database migrations.

### 3. Git configuration

- `.git`: Git configuration and version control directory.

### 4. Project scripts

- `./helpers.php`: PHP file containing helper functions. These functions are used everywhere in the website.
- `./process.php`: PHP file for handling processes including user registrations and logins.

### 5. Web pages

- `./index.php`: Main index page.
- `./login.php`: Login page.
- `./profile.php`: User profile page.
- `./register.php`: User registration page.

Feel free to explore the files and modify them as needed for your project. If you have any questions or need assistance, please refer to the documentation or reach out to the project contributors. Happy coding!