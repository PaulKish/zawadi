<form action="index" method="POST" id="donationForm">
	<div class="row">
		<div class="six columns">
			<h5 id="sponsershipCard">Sponsership Card</h5>
			<label for="donation_type">Donation Type</label>
			<select class="u-full-width" name="donation_type" id="donation_type" required>
				<option value="">--Please select--</option>
				<option value="platinum">Platinum</option>
				<option value="gold">Gold</option>
				<option value="silver">Silver</option>
				<option value="bronze">Bronze</option>
				<option value="blue">Blue</option>
				<option value="green">Green</option>
			</select>

			<label for="amount">Amount (KES)</label>
			<input id="amount" class="u-full-width" placeholder="amount" name="amount" type="number" required>
		  	
		  	<label for="payment_installment">Which I would like to pay</label>
			<select class="u-full-width" name="payment_installment" id="payment_installment" required>
				<option value="">--Please select--</option>
				<option value="quarterly">4 installments (Quarterly)</option>
				<option value="bi-annualy">2 installments (Bi-Annualy)</option>
				<option value="once">1 installment</option>
			</select>

			<label for="payment_method">Mode of Payment</label>
			<select class="u-full-width" name="payment_method" id="payment_method" required>
				<option value="">--Please select--</option>
				<option value="cash">Cash</option>
				<option value="cheque">Cheque</option>
				<option value="bank-transfer">Bank Transfer (EFT/RTGS)</option>
			</select>

		</div>

		<div class="six columns">
			<h5>Thank You</h5>

			<label for="name">Name <small>(as you would like it to appear in donor recognition)</small></label>
			<input id="name" class="u-full-width" placeholder="name" name="name" type="text" required>

			<label for="physical_address">Physical Address</label>
			<input id="physical_address" class="u-full-width" placeholder="physical address" name="physical_address" type="text" required>

			<label for="email">Email</label>
			<input id="email" class="u-full-width" placeholder="email" name="email" type="email" required>

			<label for="tel_cell">Telephone/Cell</label>
			<input id="tel_cell" class="u-full-width" placeholder="tel/cell" name="tel_cell" type="text" required>

		</div>
	</div>
	
	<label for="anonymous">
		<input id="anonymous" name="anonymous" type="checkbox" value="1">
		<span class="label-body">I wish this gift to remain anonymous</span>
	</label>

	<div class="g-recaptcha" data-sitekey="<?= $site_key; ?>"></div>
    <script src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <br>

	<input class="button-primary" value="Donate" type="submit">
</form>