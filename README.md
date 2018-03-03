# README tfd

A simple php project to demonstrate a full stack application using:

- composer for dependencies
- laravel with blade for server side view rendering
- guzzle for an http transport
- json for payload
- html/css/jquery for client view rendering and dynamic user controls

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)

## Installation

Clone to your project directory and install dependencies with composer

```sh
git clone https://github.com/mvcuccaro/tfd.git
cd tfd
composer install

```

## Usage
Once your dependencies have finished installing
Start your server at the desired host and port
Use 0.0.0.0 as a host to bind to all interfaces 
```sh
php artisan serve --host 0.0.0.0 --port 8000
````

When your server has started visit http://localhost:8000 in your browser (currently only tested on latest version of chrome)
A page will be displayed with a "Start People App" link. Click it to start the people app =]

![alt text](https://github.com/mvcuccaro/tfd/blob/master/public/images/screenshot.png)

The people app provides a table with people data.  
By default the people data is sorted alphabetically by the last name in descending order. 
You can change the column to sort by clicking on the column header of any column in the table.
Click any column a second time to reveerse the direction of the sort.
The arrow to the right of each column name indicates what direction the sort is currently set to.