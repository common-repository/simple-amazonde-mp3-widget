=== Simple Amazon.de MP3 Widget ===
Contributors: Bernd K.
Tags: shortcodes, sidebar, posts, plugin, amazon.de, amazon, associates, mp3, make money, money, affiliate, geld verdienen, widget
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KKTHZHPWBLTLS
Requires at least: 2.5
Tested up to: 3.8.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


MP3 Widget vom Amazon.de Marktplatz - Einfaches platzieren an x-beliebiger Stelle im Blog durch Shortcodes.

== Description ==

Simple Amazon.de MP3 Widget - verfolgt ein einfaches Ziel: Ein MP3 Widget mittels Shortcode in Deine Beitr&auml;ge einzuf&uuml;gen. Wie? Ganz Simple. F&uuml;ge den Shortcode [music] an die Stelle, an der das Widget erscheinen soll. Fertig ;)

Amazon Widgets sind geniale kleine Helferlein f&uuml;r Deinen Blog. Ausserdem kannst Du nebenbei auch noch Geld mit dem Widget verdienen, wenn Du &uuml;ber eine AmazonAffiliateID verf&uuml;gst.


= Information =

Hier einige M&ouml;glichkeiten wie das MP3 Widget eingebunden werden kann:

1. [music] 
Dieses Widget zeigt die Bestseller Mp3 Artikel als Standard Widget an.

2. [music width="336" height="280"]
Ein Mp3 Widget mit spezieller Gr&ouml;ssenangabe. G&uuml;ltige Kombinationen in Breite x H&ouml;he sind: 250 x 250, 336 x 280, 120 x 300, 160 x 300, 125 x 125, 120 x 90, 234 x 60

3. [music tag="DeineAmazonAffiliateID-21" width="234" height="60"]
Ein Mp3 Widget mit Deiner AmazonAffiliateID und einer weiteren Gr&ouml;sse wird angezeigt. Der 'tag' Parameter ist hier das Highlight. Damit kannst Du, solltest Du &uuml;ber eine AmazonAffiliateID verf&uuml;gen, bei jedem Produktverkauf &uuml;ber das Widget eine Provision verdienen.


== Installation ==

Erstens: Lade folgende Datei `simple-amazon.de-mp3-widget.php` in das Plugin-Verzeichnis `/wp-content/plugins/` Deines Blogs
Zweitens: Aktiviere das Plugin unter ==> Plugins ==> Installierte Plugins im Admin Account Deines Blogs
Drittens: Gehe im Admin-Account zu den ==> Plugins und w&auml;hle ==> Editor. &Auml;ndere in der Datei 'simple-amazon.de-mp3-widget.php' die AmazonAffiliateID und trage Deine ID ein, die Du vom Amazon Partnerprogramm erhalten hast.

== Upgrade Notice ==

N/A

== Frequently Asked Questions ==

Mein Widget wird in der Sidebar nicht angezeigt? Was kann ich tun?
In Wordpress ist die Anzeige von Shortcodes in Sidebars nicht direkt vorgesehen. 
F&uuml;ge einfach folgenden Code: 

`add_filter('widget_text', 'do_shortcode');`

in die functions.php innerhalb dieser Tags 

`<?php und ?>` 

am Anfang oder am Ende ein. Die functions.php findest Du &uuml;blicherweise im Order 'wp-content/themes/DeinTheme/functions.php'

Das wars. Geschafft. Nun kannst Du mit dem Einbinden der Widgets beginnen. Viel Spass!


= Systemanforderungen =
PHP 5.2.4
WordPress ab 3.8


= Unterstützung =
PayPal: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KKTHZHPWBLTLS


== Changelog ==
1.0
Kompatibilit&auml;t zu WordPress 3.8.1


== Screenshots ==
1. Widget Ladevorgang
2. Widget 250 x 250 px
3. Widget 336 x 280 px
4. Widget 120 x 300 px
5. Widget 160 x 300 px
6. Widget 125 x 125 px
7. Widget 120 x  90 px
8. Widget 234 x  60 px