<h1>Please Login</h1>

<?php if (\Vendor\Core\Flash::hasFlash()) : ?>
  <?= \Vendor\Core\Flash::getFlash();?>
<?php endif ; ?>

<form method="post"> 
	<label for="email">Email</label>
	<input type="email" name="email" id="email" required />
</br>
	<label for="password">Password></label>
	<input type="password" name="password" id="password" required/>
	<input type="submit" value = "logIn"/>