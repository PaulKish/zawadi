<div class="row">
	<div class="full column">
		<h5><?= $donor['name'] ?></h5>
		<hr>
		<table class="u-full-width">
			<tbody>
				<tr>
					<td>Donation Type</td>
					<td><?= ucfirst($donor['donation_type']) ?></td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><?= $donor['amount'] ?></td>
				</tr>
				<tr>
					<td>Payment Installment</td>
					<td><?= ucfirst($donor['payment_installment']) ?></td>
				</tr>
				<tr>
					<td>Payment Method</td>
					<td><?= ucfirst($donor['payment_method']) ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><a href="mailto:<?= $donor['email'] ?>"><?= $donor['email'] ?></a></td>
				</tr>
				<tr>
					<td>Physical Address</td>
					<td><?= $donor['tel_cell'] ?></td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><?= $donor['tel_cell'] ?></td>
				</tr>
				<tr>
					<td>Anonymous</td>
					<td><?= $donor['anonymous'] == 1 ? 'Yes':'No' ?></td>
				</tr>
				<tr>
					<td>Date Signed</td>
					<td><?= $donor['date'] ?></td>
				</tr>
			</tbody>
		</table>
		<a href="/admin" class="button">Back</a>
	</div>
</div>