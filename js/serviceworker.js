"use strict";

// Listen to fetch events
self.addEventListener('fetch', function(event) {

  // Clone the request
  var req = event.request.clone();

    // Check if the image is a jpeg
    if (/\.jpg$|.png$/.test(event.request.url)) {

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