
(function() {
    'use strict';

    var CACHE_NAME = 'site-cache-v2';
    var urlsToCache = [
        '/',
        '/manifest.json'
    ];
    var urlsNotToCache = [];

    self.addEventListener('install', function(event) {
        console.log("ServiceWorker [install]");
        event.waitUntil(
            Promise.all(
                urlsToCache.map(function(urlToCache) {
                    return self.fetchAndCache(new Request(urlToCache));
                })
            )
        );
    });

    self.addEventListener('activate', function(event) {
        console.log("ServiceWorker [activate]");
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


    self.fetchAndCache = function(fetchRequest, callback) {
        console.log("fetchAndCache", fetchRequest.url);
        if(fetchRequest.url.match(new RegExp('https?://iot\.lquast\.de'))) {
            if(fetchRequest.mode != 'navigate') {
                if(fetchRequest.method === 'GET' || fetchRequest.method === 'HEAD') {
                    fetchRequest = new Request(fetchRequest.url, {
                        method: fetchRequest.method,
                        headers: fetchRequest.headers,
                        mode: fetchRequest.mode,
                        credentials: fetchRequest.credentials,
                        redirect: fetchRequest.redirect
                    });
                    fetchRequest.headers.set('Authorization', 'Basic bHVrYXM6cXVhc3Q=');
                }
            }
        }
        var result = fetch(fetchRequest).then(function(response) {
            // Check if we received a valid response
            if(response && response.status === 200 && response.type === 'basic') {

                var globalScope = response.url.match(new RegExp("^https?://[^/]+"))[0];
                var path = response.url.substr(globalScope.length);

                console.log("path", path, "urlsNotToCache.indexOf(path)", urlsNotToCache.indexOf(path));
                if(urlsNotToCache.indexOf(path) !== -1) {

                    var responseToCache = response.clone();
                    caches.open(CACHE_NAME).then(function(cache) {
                        cache.put(event.request, responseToCache);
                    });
                }
            }

            return response;
        });

        return callback ? result.then(callback) : result;
    };

    self.addEventListener('fetch', function(event) {
        console.log("ServiceWorker [fetch]", event.request.url);
        event.respondWith(
            caches.match(event.request).then(function(response) {
                // Cache hit - return response
                if (response) {
                    var globalScope = response.url.match(new RegExp("^https?://[^/]+"))[0];
                    var path = response.url.substr(globalScope.length);

                    console.log("path", path, "urlsNotToCache.indexOf(path)", urlsNotToCache.indexOf(path));
                    if(urlsNotToCache.indexOf(path) === -1) {
                        return response;
                    }
                }

                return self.fetchAndCache(event.request.clone())
            })
        );
    });
})();