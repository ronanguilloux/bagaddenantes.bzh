Bagad de Nantes
===============

Re-index website on Google: https://www.google.com/ping?sitemap=https://bagaddenantes.bzh/sitemap.xml

Optimization
------------------

Resources :

- https://search.google.com/search-console?resource_id=sc-domain%3Abagaddenantes.bzh
- https://search.google.com/search-console/insights/?resource_id=sc-domain:bagaddenantes.bzh
- https://pagespeed.web.dev/report?url=https%3A%2F%2Fbagaddenantes.bzh%2F&hl=fr
- https://web.dev/codelab-serve-images-webp/

Install the [webp command-line tool](https://developers.google.com/speed/webp/docs/precompiled)

Run it in the `image` folders:

```bash
cd assets/images; for file in *; do cwebp -q 50 "$file" -o "${file%.*}.webp"; done
```


Development
-----------

- HTML template: https://www.gettemplate.com/demo/progressus/
- Font: https://fonts.google.com/specimen/Open+Sans
- Icon library: https://fontawesome.com/v5.0/icons?d=gallery

CSS: https://getbootstrap.com/docs/5.1/getting-started/introduction/

Simple localhost run:

```bash
cd some_folder
php -S 127.0.0.1:8000
```


Apache2 *local* Vhost:

```
<VirtualHost *:80>
    ServerName bagad
    DocumentRoot /Users/ronan/Work/www/bagad
    <Directory /Users/ronan/Work/www/bagad>
        Options FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    SetEnvIf Request_URI "\.(ico|pdf|flv|jpg|jpeg|png|gif|js|css|swf|txt|cur)$" dontlog
    SetEnvIf Request_URI "^_" dontlog
    SetEnvIf Request_URI "^/_" dontlog
    LogFormat "%V %h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\" \"%{cookie}i\" test" combined_cookie_vhost
    CustomLog /usr/local/var/log/httpd/access.bagad.log combined_cookie_vhost env=!dontlog
    ErrorLog  /usr/local/var/log/httpd/error.bagad.log
    # Possible values include: debug, info, notice, warn, error, crit, alert, emerg.
    LogLevel warn

    #LogLevel debug
    #php_flag apc.cache_by_default Off

    <IfModule mod_expires.c>
        ExpiresActive on
        ExpiresByType text/css                  "access plus 0 seconds"
        ExpiresByType application/javascript    "access plus 0 seconds"
    </IfModule>
</VirtualHost>
```

+ add a local host in `/etc/hosts`:

```
127.0.0.1	bagad
```
