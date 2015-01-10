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

With some luck, this plugin won't be needed in the future. A bug has been opened
to Buddypress here [#]_ to fix it. And they plan to do something in the future, as
that bug says. Also, a bug to meanwhile make wp-recaptcha work with BuddyPress
has been openeded here [#]_ too.

.. [#] https://buddypress.trac.wordpress.org/ticket/6068
.. [#] https://wordpress.org/support/topic/easy-way-to-add-recaptcha-to-custom-actions-like-buddypress-actions?replies=1#post-6296863

Version of wp-recaptcha it is based
-----------------------------------
Currently is based on wp-recaptcha 4.1.

See it live!
------------
You can see this plugin in a site using buddypress here [#]_. If you go to "join",
you will see the recaptcha there.

.. [#] http://community.phplist.com

Bugs and patches
----------------
Please submit bugs and patches via github, on github.com/rata/wp-recaptcha-bp
