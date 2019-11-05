<div id="data-frame" class="w3-white w3-card w3-round w3-center">

	<div id="top" class="w3-display-container">
			<a href="<?= site_url()?>" class="w3-text-pink w3-display-topleft w3-button w3-margin"><i class="fa fa-arrow-left w3-text-pink">Back</i></a>

<div class="w3-margin-bottom w3-padding-bottom">
	<img 
    src="<?= base_url('assets/images/sv2.svg') ?>" 
    alt="triangle with all three sides equal"
    height="220px"
    width="350px" />
	
</div>
</div>
<br>
<div class="w3-padding">
	<?= form_open("login")?>
	<label for="email" class="w3-text-light-pink">Email Address:</label><br>
	<input type="text" name="email" class="w3-padding w3-margin w3-round w3-border w3-border-pink" placeholder="Email Address" />
<br>
	<label for="password" class="w3-text-light-pink">Password:</label><br>
	<input type="password" name="password" class="w3-padding w3-margin w3-round w3-border w3-border-pink" placeholder="password" />
<br>
<input type="submit" name="submit" style="min-width: 60%;"  value="Sign In" class="w3-button w3-pink w3-padding w3-round w3-margin-top w3-border w3-border-pink w3-hover-white w3-hover-text-pink">
</form>
</div>
<p class="w3-small">Don't have account ? <a href="<?=site_url("register")?>" class="w3-text-pink">Create an acoount</a></p>
<div class="w3-margin-top w3-padding-top">
<a href="<?=site_url("forget_password")?>" class="w3-text-pink">Forget Password ?</a>
<br>
<br>
</div>
</div>