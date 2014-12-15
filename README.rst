Introduction
------------
This just takes wp-recaptcha and adds a few callbacks to make it work with
Buddypress.

You only need this plugin if you use Buddypress with wordpress and want a
recaptcha at the registration page.

Future
------
The patch to do this on top of wp-recaptcha is **VERY simple**.

As google is the owner of wp-recaptcha, it is expected to be always up to date.
And as the patch to add Buddypress is very simple, updating the wp-recaptcha
plugin version this is based on is expected to be very simple.

Hopefully, this plugin won't be needed in the future as a better way to handle
this issue with registration callbacks for plugins will be found. Some
discussion about it here [#]_.

.. [#] https://wordpress.org/support/topic/easy-way-to-add-recaptcha-to-custom-actions-like-buddypress-actions?replies=1#post-6296863

Version of wp-recaptcha it is based
-----------------------------------
Currently is based on wp-recaptcha 4.1.

See it live!
------------
You can see this plugin in a site using buddypress here [#]_. If you go to "join",
you will see the recaptcha there.

.. [#] http://community.phplist.com
