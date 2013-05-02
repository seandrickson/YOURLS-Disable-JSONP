YOURLS Disable JSONP Plugin
===========================

Disables JSONP access for the YOURLS API. Might be a good idea for private installs that don't want any sort of public access to the API (even though you would still need a user/pass or signature for requests.)

Installation
------------

Move the `disable-jsonp` folder into the `/users/plugins` folder. Then, activate the plugin in the admin interface. That's all there is to it.

Requirements
------------

User must have [YOURLS](http://yourls.org/#Install) 1.5.1+ installed.