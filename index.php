<?php
include_once('ColorFont.php');
include_once('FormaterInterface.php');
include_once('Format375.php');
include_once('Format80.php');
include_once('FormatFactory.php');
include_once('Footer.php');
include_once('Contact.php');

$contact = new Contact();
$format = FormatFactory::make('format80');
if (!is_null($format)) {
    $footer = new Footer($contact, $format);
    echo $footer->make();
}
