# ChipDB-Frontend

This from the functionality nearly the same as the original [www.msarnoff.org/chipdb](http://www.msarnoff.org/chipdb/).
But the difference is that this project is a single HTML-page,
so you could easily include just a download the .html file and use the complete database offline.
Another reason I decided to create a own project to represent this functionality of the original [www.msarnoff.org/chipdb](http://www.msarnoff.org/chipdb/)
is that this project doesn't look really pretty on a mobile device.

I found out that the App [ElectroDroid](http://electrodroid.it/electrodroid/) uses the original website,
and it would be really nice if it would work offline too.

**Feel free to contibute** this project or the ChipDB data itself.
For contibuting ChipDB data take a look at [CONTRIBUTING.md](https://github.com/74hc595/chipdb/blob/master/CONTRIBUTING.md).

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

+ Surrounding with tildes
+ Finish HTML structure
+ Add total list
+ Validate YAML files and add description how they should be formatted
+ Style HTML
+ Add responsive design
+ Add favorites functionality (using `window.localStorage`)
+ Create a webpage to download the newest html file

## Disclaimer/License

The information in ChipDB has been maintained by independent sources and accuracy is not guaranteed.
You should always check with the manufacturer's datasheets for up-to-date information.

The ChipDB data is from [this](https://github.com/74hc595/chipdb) repository on GitHub by Matt Sarnoff ([twitter](https://twitter.com/txsector), [website](http://www.msarnoff.org/))
**Visit the ChipDB Repository to see the license of the ChipDB data.**

I don't like licenses, so this code doesn't have any.
**Do what you want with this code**, a link to my repository would be very nice if using this code.

- Lukas Quast