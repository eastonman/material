"use strict";

// Listen to fetch events
self.addEventListener('fetch', function(event) {

  // Clone the request
  var req = event.request.clone();

    // Check if the image is a jpeg
    if (/\.jpg$|material-\d+\.png/.test(event.request.url)) {

      // Get all of the headers
      let headers = Array.from(req.headers.entries());

      // Inspect the accept header for WebP support
      var acceptHeader = headers.find(item => item[0] == 'accept');
      var supportsWebp = acceptHeader[1].includes('webp');

      // If we support WebP
      if (supportsWebp)
      {
        // Build the return URL
        var returnUrl = req.url.substr(0, req.url.lastIndexOf(".")) + ".webp";

          event.respondWith(
          fetch(returnUrl, {
            mode: 'no-cors'
          })
        );
    }
  }
});



//Workbox Cache. for lwa supprot begin

// workbox 3.x 开始是将 workbox 核心 lib 放在 CDN 维护
// 当然也可以挪到自己的 CDN 维护
importScripts('https://cdn.jsdelivr.net/npm/workbox-sw@3.0.0-beta.0/build/workbox-sw.min.js');

if (workbox) {
    console.log(`Yay! workbox is loaded 🎉`);
}
else {
    console.log(`Boo! workbox didn't load 😬`);
}

const fileManifest = [
    {
        'url': './',
        'revision': '1'
    },
    {
        'url': 'https://cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css',
        'revision': '1'
    }
];


workbox.precaching.precacheAndRoute(fileManifest);


workbox.routing.registerRoute(
    './',
    workbox.strategies.networkFirst()
);


workbox.routing.registerRoute(
    'https://cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css',
    workbox.strategies.cacheFirst()
);
