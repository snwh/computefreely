# Compute Freely

Compute Freely is a website that's meant to be a friendly place to start for the Free & Open Source Software and Linux curious.

## Simple Templating

* PHP-based
* Pages go in root as .php files
* Include `_templates/sitewide.php`, set any variables, then `include $template['header'];` (see [404.php](https://github.com/snwh/computefreely/blob/master/404.php) for an example) at top of page.
* `include $template['footer'];` at bottom of page.
* Page variables:
  * `$page['title']`
  * `$page['description']`
  * `$page['author']`

## Local Development

For a simple local development environment, you will need:

* [A supported version of PHP](http://php.net/supported-versions.php)

Then inside the project directory, run `php -S localhost:8000 router.php` then, open http://localhost:8000/ to view the site.


## Terms & Licensing

This website is copyright © 2016 Sam Hewitt, with some rights reserved.

Site content is licensed under the [Creative Commons Attribution-ShareAlike 4.0](http://creativecommons.org/licenses/by-sa/4.0/), unless otherwise noted. Any unique source code is free software, licensed under the terms of the [Apache License v2.0](http://www.apache.org/licenses/LICENSE-2.0), unless otherwise noted.

Non-unique elements are licensed under the terms of their accompanying licenses, or stated within their source code.

All logos used are trademarks of their respective projects and this site has been in no way endorsed by any of the featured projects.

