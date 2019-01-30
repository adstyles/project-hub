<section class="<?= $update['type'];?> <?= $update['device'];?> ">
	<div class="row type">
		<span><?= $update['type'];?> </span>
	</div>
	<? if($update['title']){ ?>
	<div class="row">

		<? if($update['link']){ ?>
			<a href="<?= $update['link'];?> " class="link" target="_blank"><?= $update['title'];?> </a>
		<? } else { 
			echo $update['title'];
		} ?>
		
	</div>
	<? } ?>
	<? if($update['notes']){ ?>
		<div class="row note">
			<?= $update['notes'];?> 
		</div>
	<? } ?>
</section>