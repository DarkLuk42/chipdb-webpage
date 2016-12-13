# ChipDB-Frontend

> A Vue.js project

## Setup

``` bash
# download chipdb
composer install
php ./refresh.php

cd vue
npm install

npm run build
# or for development
npm run dev
```

## Todo's

+ validate yaml files
+ style app and add disclaimer ect.
+ add responsive design

## Available Text Styles:
+ `~([a-zA-Z0-9_]+)` -> `<span class="neg">$1</span>`
+ `([a-zA-Z0-9]+)__([a-zA-Z\(\)\+\-0-9]+)` -> `$1<sub>$2</sub>`
