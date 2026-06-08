<div class="col-lg-11 col-xl-10 col-12 mt-4">
	<form action="<?php echo $post_url;?>" method="post" class="row">
		<div class="form-group ">
			<input type="hidden" name="domain" value="<?php echo $domainname?>">
					<input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">
                    <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">
                    <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">
                    <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">
					<input type="hidden" name="url" value='<?php echo $current_url;?>'>
					<input type="hidden" name="domain" value="<?php echo $domainname?>">
					<input type="hidden" name="subject" value="Popup Form (<?php echo $url?>)">
					<input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
                    <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
                    <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
                    
                    <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
                    <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
                    <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">
		</div>
		<div class="form-group mb-3 col-lg col-md-4">
			<input class="form-control" type="text" name="name" placeholder="Your Name" required=""
				value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
			<?php echo !empty($error['name']) ? $error['name']:'';?>
		</div>
		<div class="form-group mb-3 col-lg col-md-4">
			<input class="form-control" type="email" name="email" placeholder="Your Email"
				value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>"
				required="required">
			<?php echo !empty($error['email']) ? $error['email']:'';?>
		</div>
		<div class="form-group mb-3 col-lg col-md-4">
			<input class="form-control" type="text" name="phone" minlength="10" maxlength="12"
				placeholder="Your Phone"
				value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"
				required="required">
			<?php echo !empty($error['phone']) ? $error['phone']:'';?>
		</div>
	
		
		<div class="form-group mb-3 col-lg col-md-8	">
			<input class="form-control" autocomplete="nope" name="message"
				placeholder="Enter Brief" rows="4"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></input>
			<?php echo !empty($error['message']) ? $error['message']:'';?>
		</div>
	
		<div class="form-group col-lg col-md-4">
			<button class=" w-100" cite="Submit" data-hover="Submit" type="submit" name="cta1"
				value="Submit Now">Submit</button>
		</div> 
		
	</form>	
</div>