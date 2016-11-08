<?php

// jCart v1.3
// http://conceptlogic.com/jcart/

// By default, this file returns the $config array for use with PHP scripts
// If requested via Ajax, the array is encoded as JSON and echoed out to the browser

// Don't edit here, edit config.php
include_once('config.php');

// Use default values for any settings that have been left empty
if (!$config['currencyCode']) $config['currencyCode']                     = 'EUR';
if (!$config['text']['cartTitle']) $config['text']['cartTitle']           = 'Carrito';
if (!$config['text']['singleItem']) $config['text']['singleItem']         = 'Artículo';
if (!$config['text']['multipleItems']) $config['text']['multipleItems']   = 'Artículos';
if (!$config['text']['subtotal']) $config['text']['subtotal']             = 'Subtotal';
if (!$config['text']['update']) $config['text']['update']                 = 'Actualizar';
if (!$config['text']['checkout']) $config['text']['checkout']             = 'Pagar';
if (!$config['text']['checkoutPaypal']) $config['text']['checkoutPaypal'] = 'Pagar con PayPal';
if (!$config['text']['removeLink']) $config['text']['removeLink']         = 'Eliminar';
if (!$config['text']['emptyButton']) $config['text']['emptyButton']       = 'Vacío';
if (!$config['text']['emptyMessage']) $config['text']['emptyMessage']     = 'Su carrito está vacío!';
if (!$config['text']['itemAdded']) $config['text']['itemAdded']           = 'Artículo añadido!';
if (!$config['text']['priceError']) $config['text']['priceError']         = 'Formato de precio invalido!';
if (!$config['text']['quantityError']) $config['text']['quantityError']   = 'Las cantidades de los artículos deben de ser de números enteros!';
if (!$config['text']['checkoutError']) $config['text']['checkoutError']   = 'Su pedido no ha podido ser procesado!';

if ($_GET['ajax'] == 'true') {
	header('Content-type: application/json; charset=utf-8');
	echo json_encode($config);
}
?>