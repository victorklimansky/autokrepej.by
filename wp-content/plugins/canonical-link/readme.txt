=== Canonical Link ===

Contributors: bhadaway
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DTRTUYSPKJN8N
Tags: canonical, canonicalization, clean url, seo, seo-friendly, user-friendly, search engine optimization, google
Requires at least: 1.2
Tested up to: 3.2
Stable tag: 1.2

Inserts canonical link code into header. After activation, from your WordPress Settings, change Permalinks to Custom Structure: **/&#37;postname&#37;/** and you're done, no further steps are needed. 

If you have any problems please visit: http://wordpress.org/extend/plugins/canonical-link/installation/ for full detailed instructions.

== Description ==

Inserts canonical link code into header. After activation, from your WordPress Settings, change Permalinks to Custom Structure: **/&#37;postname&#37;/** and you're done, no further steps are needed.

If you have any problems please visit: http://wordpress.org/extend/plugins/canonical-link/installation/ for full detailed instructions.

The importance of the canonical link is to give Google a clean representation of what you want your URLs to look like and how you want Google to index them, this can also help to clear up duplicate page issues.

http://bryanhadaway.com/super-simple-dynamic-canonical-link-code/

== Installation ==

**Automatic**

* From your WordPress Admin, navigate to: **Plugins** > **Add New**
* Search for: **Canonical Link**
* Install it
* Activate it
* Please see **Additional Instructions**

**Manual**

* Unzip
* Upload to plugins folder
* Activate
* You should now see a gray or blue "**C**" to the right of URLs in the URL bar in your browser in Firefox with this SEO add-on: https://addons.mozilla.org/en-US/firefox/addon/321/
* Please see **Additional Instructions**

**Additional Instructions**

You will also need to update your Permalinks, which will give you desirable seo-friendly and user-friendly URLs anyways:

* From your WordPress Admin, navigate to: **Settings** > **Permalinks**
* Under "**Common settings**", select "**Custom Structure**" and paste in: **/&#37;postname&#37;/**
* Click "**Save Changes**" and you're done

**NOTE**: 

- Some older versions of WordPress do not allow: **/&#37;postname&#37;/** and you'll need to use: **/&#37;year&#37;/&#37;monthnum&#37;/&#37;day&#37;/&#37;postname&#37;/**

- If you have an already established website and are applying seo-friendly URLs for the first time, I recommend using this plugin: http://wordpress.org/extend/plugins/advanced-permalinks/ so that people are automatically redirected to your new permalink structure and not an error page.

**WARNING**:

- If you're changing permalink structure dramatically and already have well established PageRank on pages, you will likely lose it and have to rebuild it.

- Since WordPress 2.9, they have implemented their own canonical link solution, it does not quite work the same as this plugin and has it's own flaws. If you're running the latest WordPress, but would rather use this plugin as your canonical link solution, you may want to compare, in my testing there didn't seem to be a conflict with the two, my plugin seemed to simply override the default canonical link.

== Frequently Asked Questions ==

To verify that the canonical link has been activated properly you will need to use Firefox which I highly recommend anyways ( http://www.mozilla.com/?from=sfx&amp;uid=266924&amp;t=318 ) to check for a "**C**" to the right of URLs in the URL bar in your browser with this SEO add-on: https://addons.mozilla.org/en-US/firefox/addon/321/.

*Learn more about the **canonical link** from Google: http://www.google.com/support/webmasters/bin/answer.py?hl=en&amp;answer=139394*

**How to have SEO-Friendly URLs in WordPress**:

* From your WordPress Admin, navigate to: **Settings** > **Permalinks**
* Under "**Common settings**", select "**Custom Structure**" and paste in: **/&#37;postname&#37;/**
* Click "**Save Changes**" and you're done

**For more help or suggestions, please visit the Support Forum**:

http://bryanhadaway.com/forum/canonical-link/

== Screenshots ==

You should see a gray or blue "**C**" to the right of URLs in the URL bar in your browser in Firefox with this SEO add-on: https://addons.mozilla.org/en-US/firefox/addon/321/.

== Changelog ==

- 1.1 cleans URLs better removing query strings (**?**)

- 1.2 removed syntax error from code

== Upgrade Notice ==

1.1 cleans URLs better removing query strings (**?**)