<? get_header(); ?>

<?php
if(!post_password_required()){ ?>

	<?php $updates = get_field('updates');
	$gotPinned = false;
	$gotLatest = false;
	$gotArchive = false;
	
	foreach ($updates as $update):

		if($update['status'] === 'Pinned'){$gotPinned = true;}
		if($update['status'] === 'Current'){$gotLatest = true;}
		if($update['status'] === 'Archived'){$gotArchive = true;}

	endforeach; ?>

	<? if($gotPinned === true){ ?>
		
		<main class="pinned">

			<div class="column">
				<header>
					<span class="title">Pinned</span>
				</header>
			</div>

			<div class="column">

				<?
				foreach ($updates as $update): 
					if($update['status'] === 'Pinned'){
						include( locate_template('partials/block.php', false, false )); 
					}
				endforeach; ?>

			</div>
		</main>
	
	<? } ?>

	<? if($gotLatest === true){ ?>
		
		<main class="latest">

			<div class="column">
				<header>
					<span class="title">Latest</span>
				</header>
			</div>

			<div class="column">

				<?
				foreach ($updates as $update): 
					if($update['status'] === 'Current'){
						include( locate_template('partials/block.php', false, false )); 
					}
				endforeach; ?>

			</div>
		</main>
	
	<? } ?>

	<? if($gotArchive === true){ ?>
		
		<main class="archive">

			<div class="column">
				<header>
					<span class="title">Archive</span>
				</header>
			</div>

			<div class="column">

				<?
				$updateCount = 0;
				foreach ($updates as $update): 
					if($update['status'] === 'Archived'){
						include( locate_template('partials/block.php', false, false )); 
					}
				endforeach; ?>

				<!-- <a href="" class="show-all">Show all</a> -->

			</div>
		</main>
	
	<? } ?>

<? } else {

	echo get_the_password_form();

} ?>



<? get_footer(); ?>