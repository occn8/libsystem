<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
		<div class="alert alert-warning alert-dismissible fade show"style="height:60px;" role="alert">
			<p class="pad-alert"><?php echo $error ?></p>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		</div>
		<?php endforeach ?>
	</div>
<?php  endif ?>
