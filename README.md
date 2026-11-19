YOURLS Disable JSONP Plugin
===========================

Disables JSONP access for the YOURLS API. Might be a good idea for private installs that don't want any sort of public access to the API (even though you would still need a user/pass or signature for requests.)

Installation
------------

Move the `disable-jsonp` folder into the `user/plugins` folder. Then, activate the plugin in the admin interface. That's all there is to it.

Requirements
------------

Tested with [YOURLS](https://yourls.org/docs/guide/install) 1.10.x (1.10.7-dev). Should work on any YOURLS release from 1.5.1 onward.

When the API is called with `format=jsonp`, the plugin responds with an HTTP 403 and a JSON error instead of a JSONP payload.
