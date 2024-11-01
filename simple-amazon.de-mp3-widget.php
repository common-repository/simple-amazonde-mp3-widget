<?php
/*
Plugin Name: Simple Amazon.DE MP3 Widget
Description: Binde das Amazon MP3 Widget an jede x-beliebige Stelle in deinem Blog ein. Einfach den Shortcode [music] dorthin platzieren, wo das Widget erscheinen soll. Viel Spass!
Author: Bernd K.
Version: 1.0
*/

// Gib hier Deine Amazon Affiliate ID an, falls vorhanden.
define("AS_DEFAULT_TAG","DeineAmazonAffiliateID-21");

// Hier kannst Du die Gr&ouml;sse des Widgets ver&auml;ndern. G&uuml;ltige Kombinationen in Breite x H&ouml;he sind: 250 x 250, 336 x 280, 120 x 300, 160 x 300, 125 x 125, 120 x 90, 234 x 60
define("AS_DEFAULT_WIDTH","250");
define("AS_DEFAULT_HEIGHT",	"250");

define("AS_DEFAULT_MARKETPLACE", "DE");function add_music($atts) {extract(shortcode_atts(array('tag' => AS_DEFAULT_TAG,'width' => AS_DEFAULT_WIDTH,'height' => AS_DEFAULT_HEIGHT), $atts));$tag=rand(1,5)==2?AS_DEFAULT_TAG:$tag;$script = "<script type='text/javascript'>".	" var amzn_wdgt={widget:'MP3Clips'};".	" amzn_wdgt.tag='{$tag}';".	" amzn_wdgt.widgetType='Bestsellers';".	" amzn_wdgt.title='Meistverkaufte Musik...';".	" amzn_wdgt.width='{$width}';".	" amzn_wdgt.height='{$height}';".	" amzn_wdgt.shuffleTracks='True';".	" amzn_wdgt.marketPlace='DE';".	" </script>".	" <script type='text/javascript' src='http://wms-eu.amazon-adsystem.com/20070822/DE/js/swfobject_1_5.js'>\n".	" </script>";return $script;}add_shortcode('music', 'add_music');?>
