# ChipDB-Webpage

**This project is currently UNDER CONSTRUCTION, if you want to contribute feel free to contact me.**

This from the functionality nearly the same as the original [www.msarnoff.org/chipdb](http://www.msarnoff.org/chipdb/).
But the difference is that this project is a single HTML-page,
so you could easily include just a download the .html file and use the complete database offline.
Another reason I decided to create a own project to represent this functionality of the original [www.msarnoff.org/chipdb](http://www.msarnoff.org/chipdb/)
is that this project doesn't look really pretty on a mobile device.

I found out that the App [ElectroDroid](http://electrodroid.it/electrodroid/) uses the original website,
and it would be really nice if it would work offline too.

**Feel free to contribute** this project or the ChipDB data itself.
For contributing ChipDB data take a look at [CONTRIBUTING.md](https://github.com/74hc595/chipdb/blob/master/CONTRIBUTING.md).

## Setup

``` bash
# clone this project
git clone git@github.com:DarkLuk42/chipdb-webpage.git

# clone data-source
git clone git@github.com:DarkLuk42/chipdb.git
# or git@github.com:74hc595/chipdb.git

cd chipdb-webpage
composer install
php ./update ../chipdb

npm install webpack bower -g

bower install
npm install

npm run build
# or for development
npm run dev
```

## Todo's

+ Surrounding with tildes
+ Split pin-names to be shorter in Diagram
+ Add sub and negate in Diagram
+ Add total list
+ Add description how the YAML-files should be formatted
+ Add favorites functionality (using `window.localStorage`)
+ Complete to progressive Web-App

## Disclaimer/License

The information in ChipDB has been maintained by independent sources and accuracy is not guaranteed.
You should always check with the manufacturer's datasheets for up-to-date information.

The ChipDB data is from [this](https://github.com/74hc595/chipdb) repository on GitHub by Matt Sarnoff ([twitter](https://twitter.com/txsector), [website](http://www.msarnoff.org/))
**Visit the ChipDB Repository to see the license of the ChipDB data.**

This project (`chipdb-webpage`) is free software distributed under the terms of the MIT license.

- Lukas Quast ([lukas@lquast.de](mailto:lukas@lquast.de))