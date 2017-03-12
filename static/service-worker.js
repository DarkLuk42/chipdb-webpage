
(function() {
    'use strict';

    var CACHE_NAME = 'site-cache-v1';
    var urlsToCache = [
        '/index.html'
    ];
    var urlsNotToCache = [
    ];

    self.addEventListener('install', function(event) {
        //console.log("ServiceWorker [install]");
        event.waitUntil(
            caches.open(CACHE_NAME).then(function(cache) {
                return cache.addAll(urlsToCache);
            })
        );
    });

    self.addEventListener('activate', function(event) {
        //console.log("ServiceWorker [activate]");
        var cacheWhitelist = [CACHE_NAME];

        event.waitUntil(
            caches.keys().then(function(cacheNames) {
                return Promise.all(
                    cacheNames.map(function(cacheName) {
                        if (cacheWhitelist.indexOf(cacheName) === -1) {
                            return caches.delete(cacheName);
                        }
                    })
                );
            })
        );
    });

    self.addEventListener('message', function(event){
        //console.log("ServiceWorker [message]", event.data);
        if(event.data.function) {
            switch(event.data.function) {
                case "reload_chipdb":
                    caches.delete("chipdb");
                    //event.ports[0].postMessage({data: 'testback'});
                    break;
                default:
                    console.log("ServiceWorker message unknown");
                    break;
            }
        }
    });

    self.addEventListener('fetch', function(event) {
        //console.log("ServiceWorker [fetch]", event.request.url);
        event.respondWith(
            caches.match(event.request).then(function(response) {
                // Cache hit - return response
                if (response) {
                    var globalScope = response.url.match(new RegExp("^https?://[^/]+"))[0];
                    var path = response.url.substr(globalScope.length);

                    if(urlsNotToCache.indexOf(path) === -1) {
                        // TODO:
                        // return response;
                    } else {
                        console.log("TODO: Remove urlsNotToCache in activate.")
                    }
                }

                var fetchRequest = event.request.clone();

                return fetch(fetchRequest).then(function(response) {
                    // Check if we received a valid response
                    if(response && response.status === 200 && response.type === 'basic') {

                        var globalScope = response.url.match(new RegExp("^https?://[^/]+"))[0];
                        var path = response.url.substr(globalScope.length);
                        if(urlsNotToCache.indexOf(path) !== -1) {

                            var responseToCache = response.clone();
                            caches.open(CACHE_NAME).then(function(cache) {
                                cache.put(event.request, responseToCache);
                            });
                        }
                    }

                    return response;
                }, function(err){
                    // do nothing
                });
            })
        );
    });
})();