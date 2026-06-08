									<form action="<?php echo $post_url;?>" method="post" class="row">
										<div class="form-group ">
											<input type="hidden" name="domain" value="<?php echo $domainname?>">
											<input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">
                                            <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">
                                            <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">
                                            <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">
											<input type="hidden" name="url" value='<?php echo $current_url;?>'>
											<input type="hidden" name="domain" value="<?php echo $domainname?>">
											<input type="hidden" name="subject" value="Contact Form (<?php echo $url?>)">
											<input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
                                            <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
                                            <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
                                            
                                            <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
                                            <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
                                            <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">
										</div>
										<div class="col-md-6">
											<div class="form-group mb-3 ">
												<input class="form-control" type="text" name="name" placeholder="Your Name" required=""
													value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
												<?php echo !empty($error['name']) ? $error['name']:'';?>
											</div>
											<div class="form-group mb-3 ">
												<input class="form-control" type="email" name="email" placeholder="Your Email"
													value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>"
													required="required">
												<?php echo !empty($error['email']) ? $error['email']:'';?>
											</div>
											<div class="form-group mb-3 ">
												<input class="form-control" type="text" name="phone" minlength="10" maxlength="12"
													placeholder="Your Phone"
													value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"
													required="required">
												<?php echo !empty($error['phone']) ? $error['phone']:'';?>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group mb-3 ">
												<select name="service" class="form-control" >
													<option selected="" disabled="">What Are You Looking For?</option>
													<option value="Book Writing">Book Writing</option>
													<option value="Book Publishing">Book Publishing</option>
													<option value="Book Marketing">Book Marketing</option>
													<option value="Book Editing / Proofeading">Book Editing / Proofeading</option>
													<option value="Book Cover">Book Cover</option>
												</select>
											</div>
											<div class="form-group mb-3 ">
												<textarea class="form-control" autocomplete="nope" name="message"
													placeholder="Enter Brief" rows="4"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
												<?php echo !empty($error['message']) ? $error['message']:'';?>
											</div>
										</div>
										<div class="col-12">
										    <div class="form-group mb-3"><label for="agree"><input id="agree" type="radio" name="agree" value="agree" required="required" data-gtm-form-interact-field-id="1">I agree to receive communication by text message about my inquiry. You may opt-out by replying STOP or reply HELP for more information. Message frequency varies. Message and data rates may apply. You May review Our <a href="terms-conditions">Terms and Conditions</a> to learn how your data is used</label></div>
										</div>
										<div class="col-12">
											<div class="form-group ">
												<button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="cta2"
													value="Submit Now">Submit</button>
											</div> 
										</div>
									</form>	