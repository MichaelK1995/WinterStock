<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<h3>Warehouses</h3>
<ul>
	<? foreach($houses as $house): ?>
		<li><? echo $house->name; ?>
	<? endforeach; ?>
</ul>

<h3>Items</h3>
<ul>
	<? foreach($items as $item): ?>
		<li><? echo $item->name; ?>
	<? endforeach; ?>
</ul>
