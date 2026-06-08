<form class="row site-query-form" data-source="contact_form">
	<div class="col-md-6">
		<div class="form-group mb-3 ">
			<input class="form-control" type="text" name="name" placeholder="Your Name" required>
		</div>
		<div class="form-group mb-3 ">
			<input class="form-control" type="email" name="email" placeholder="Your Email" required>
		</div>
		<div class="form-group mb-3 ">
			<input class="form-control" type="text" name="phone" minlength="10" maxlength="12" placeholder="Your Phone" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group mb-3 ">
			<select name="service" class="form-control">
				<option selected="" disabled="">What Are You Looking For?</option>
				<option value="Logo Design">Logo Design</option>
				<option value="Website Design">Website Design</option>
				<option value="Website Maintenance">Website Maintenance</option>
				<option value="Video Animation">Video Animation</option>
				<option value="Ecommerce Website">Ecommerce Website</option>
				<option value="Digital Marketing">Digital Marketing</option>
			</select>
		</div>
		<div class="form-group mb-3 ">
			<textarea class="form-control" autocomplete="nope" name="message" placeholder="Enter Brief" rows="4"></textarea>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group mb-3">
			<label for="agree">
				<input id="agree" type="checkbox" name="agree" value="agree" required>
				I agree to receive communication by text message about my inquiry. You may opt-out by replying STOP or reply HELP for more information. Message frequency varies. Message and data rates may apply.
			</label>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group ">
			<button class="btn w-100" type="submit">Submit</button>
		</div>
	</div>
</form>
