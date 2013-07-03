<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Item</th>
			<th>Requested</th>
			<th>State</th>
		</tr>
	</thead>
	<tbody>
		<? foreach($orders as $order): ?>
			<tr>
				<td><? echo $order->id; ?></td>
				<td><? echo $order->name; ?> | <? echo $order->amount; items ?></td>
				<td><? echo $order->requested; ?> by <? echo anchor('orders/user/'.$order->user, $order->user); ?></td>
				<td>
					<? if(!isset($order->state) || $order->state == 0): ?>
						<span class="label label-info">Open</span>
					<? elseif($order->state == 1): ?>
						<span class="label label-success">Accepted</span>
					<? else: ?>
						<span class="label label-important">Denied</span>
					<? endif; ?>
				</td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>