<div class="row">
	<div class="full column">
		<h5>Donors</h5>
		<hr>
		<table class="u-full-width">
			<thead>
				<th>#</th>
				<th>Donation Type</th>
				<th>Amount</th>
				<th>Name</th>
				<th>Email</th>
				<th>Telephone</th>
				<th></th>
			</thead>
			<tbody>
			<?php foreach($donors as $donor): ?>
				<tr>
					<td><?= $count++ ?></td>
					<td><?= ucfirst($donor['donation_type']) ?></td>
					<td><?= $donor['amount'] ?></td>
					<td><?= $donor['name'] ?></td>
					<td><?= $donor['email'] ?></td>
					<td><?= $donor['tel_cell'] ?></td>
					<td><a href="donor/<?= $donor['id'] ?>" class="button button-primary">More</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>