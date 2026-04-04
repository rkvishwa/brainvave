
<?php include('header.php'); ?>
<?php include('inc/projects_data.php'); ?>

<style>
.glass-proj-card {
	background: rgba(255, 255, 255, 0.02);
	backdrop-filter: blur(12px);
	-webkit-backdrop-filter: blur(12px);
	border: 1px solid rgba(37, 150, 190, 0.15);
	border-radius: 1.5rem;
	box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
	overflow: hidden;
	transition: transform 0.3s ease, box-shadow 0.3s ease;
	height: 340px;
	min-height: 340px;
	max-height: 340px;
	display: flex;
	flex-direction: row;
	align-items: stretch;
}
.glass-proj-card.reversed {
	flex-direction: row-reverse;
}
.glass-proj-card:hover {
	transform: translateY(-8px);
	box-shadow: 0 15px 40px rgba(37, 150, 190, 0.2);
	border-color: rgba(37, 150, 190, 0.4);
}
.glass-proj-card-dashed {
	border-style: dashed;
}
.glass-img-wrapper {
	width: 52%;
	min-width: 260px;
	max-width: 420px;
	height: 100%;
	position: relative;
	overflow: hidden;
	background: rgba(0, 0, 0, 0.2);
}
/* Image fade mask for default (image on left) */
.glass-proj-card .glass-img-wrapper {
	-webkit-mask-image: linear-gradient(to right, black 60%, transparent 100%);
	mask-image: linear-gradient(to right, black 60%, transparent 100%);
}
/* Image fade mask for reversed (image on right) */
.glass-proj-card.reversed .glass-img-wrapper {
	-webkit-mask-image: linear-gradient(to left, black 60%, transparent 100%);
	mask-image: linear-gradient(to left, black 60%, transparent 100%);
}
.glass-img-wrapper img {
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: transform 0.5s ease;
}
.glass-proj-card:hover .glass-img-wrapper img {
	transform: scale(1.05);
}
.glass-content {
	width: 48%;
	min-width: 0;
	padding: 3rem;
	display: flex;
	flex-direction: column;
	justify-content: center;
	flex-grow: 1;
	height: 100%;
	max-height: 100%;
	overflow: hidden;
}
@media (max-width: 800px) {
   .glass-proj-card, .glass-proj-card.reversed {
	   flex-direction: column;
	   height: 420px;
	   min-height: 420px;
	   max-height: 420px;
   }
   .glass-img-wrapper, .glass-content {
	   width: 100%;
	   min-width: 0;
	   max-width: 100%;
   }
   .glass-img-wrapper {
	   height: 250px;
	   min-height: 180px;
	   max-height: 250px;
	   -webkit-mask-image: linear-gradient(to bottom, black 60%, transparent 100%) !important;
	   mask-image: linear-gradient(to bottom, black 60%, transparent 100%) !important;
   }
   .glass-content {
	   padding: 2rem;
	   height: 170px;
	   max-height: 170px;
   }
}
</style>

<section class="s-projects section" style="padding-top: 15rem; padding-bottom: 12rem; background: #02000d;">
	<?php $global_card_index = 0; ?>
	<!-- Our Clients Section -->
	<div class="row section-header align-center" data-num="01">
		<div class="col-full">
			<h1 class="display-1 display-1--light">Our <span class="title-highlight">Clients</span></h1>
			<p class="lead" style="color: #aaa;">We proudly build and support these brands</p>
		</div>
	</div>
	<div class="row projects-list">
		<?php
		$client_slugs = ['prime-edu','ayzack','itprolearner','pumpkintours','portal','iipe','uplect'];
		foreach (array_merge($featured_projects, $upcoming_projects) as $project):
			if (in_array($project['slug'], $client_slugs)):
				// "1st one right, 2nd one left" implies Index 0 is reversed (reversed shifts image to right, since flex-row naturally puts first child (image) on left)
				$is_reversed = ($global_card_index % 2 === 0);
				$global_card_index++;
		?>
			<div class="col-twelve tab-full project-card" style="margin-bottom: 3rem;">
				<div class="glass-proj-card <?= $is_reversed ? 'reversed' : '' ?>">
					<div class="glass-img-wrapper">
						   <?php
						   // Map project name to Project_details image filename
						   $img_map = [
							   'ayzack' => 'AyzackGlobalEducation.png',
							   'diss-master' => 'Diss-Master.png',
							   'meta-scribe' => 'MetaScribe.png',
							   'nothing-dialer-1' => 'NothingDialer1.png',
							   'portal' => 'Portal.png',
							   'prime-edu' => 'PrimeEdu.png',
							   'pumpkintours' => 'PumkinTours.png',
							   'itprolearner' => 'ScrItProLearners.png',
							   'sonar-code-editor' => 'SonarCodeEditor.png',
							   'iipe' => 'IIPE.jpg',
							   'uplect' => 'uplect.webp',
							   'project-titanic' => 'Titanic-.jpg',
							   'metal-paas' => 'Metal.jpg',
							   'arduino-remote' => 'ArduinoUno.jpg',
						   ];
						   $img_file = isset($img_map[$project['slug']]) ? 'Project_details/' . $img_map[$project['slug']] : 'images/portfolio/gallery/g-shutterbug.jpg';
						   ?>
						   <img src="<?= $img_file ?>" onerror="this.src='images/portfolio/gallery/g-shutterbug.jpg'" alt="<?= htmlspecialchars($project['name']) ?>">
					</div>
					<div class="glass-content">
						<h2 class="project-title" style="font-family: 'Poppins', monospace; font-size:2em; margin-bottom:0.5em; color:#fff;">
							<?= htmlspecialchars($project['name']) ?>
							<?php if (!empty($project['url'])): ?>
								<a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" style="font-size:0.4em; color:#2596be; border:1px solid rgba(37, 150, 190,0.6); border-radius:0.5em; padding:0.1em 0.5em; margin-left:0.5em; background:rgba(37, 150, 190,0.07); vertical-align: middle; text-decoration:none; display: inline-block; transform: translateY(-5px);">Visit Site ↗</a>
							<?php endif; ?>
						</h2>
						<p style="color:#aaa; margin-bottom:1.5em; flex-grow:1;">
							<?= htmlspecialchars($project['description']) ?>
						</p>
						<div class="project-tags">
							<?php foreach ($project['tags'] as $tag): ?>
								<span style="display:inline-block; border:1px solid rgba(37, 150, 190,0.3); border-radius:0.5em; padding:0.2em 0.8em; margin-right:0.5em; margin-bottom:0.5em; color:#2596be; font-size:0.9em; font-family:monospace; background:rgba(37, 150, 190,0.05); backdrop-filter: blur(4px);">
									<?= htmlspecialchars($tag) ?>
								</span>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; endforeach; ?>
	</div>

	<!-- Software Solutions Section -->
	<div class="row section-header align-center" data-num="02" style="margin-top:5rem;">
		<div class="col-full">
			<h1 class="display-1 display-1--light">Software <span class="title-highlight">Solutions</span></h1>
			<p class="lead" style="color: #aaa;">Our own products and platforms</p>
		</div>
	</div>

	<!-- Live Solutions Subsection -->
	<div class="row section-header align-center" style="margin-top:2rem;">
		<div class="col-full">
			<h2 class="display-2 display-1--light">Live</h2>
		</div>
	</div>
	<div class="row projects-list">
		<?php
		$live_slugs = ['sonar-code-editor','nothing-dialer-1','diss-master','meta-scribe'];
		foreach ($featured_projects as $project):
			if (in_array($project['slug'], $live_slugs)):
				$is_reversed = ($global_card_index % 2 === 0);
				$global_card_index++;
		?>
			<div class="col-twelve tab-full project-card" style="margin-bottom: 3rem;">
				<div class="glass-proj-card <?= $is_reversed ? 'reversed' : '' ?>">
					   <div class="glass-img-wrapper">
						   <?php
						   $img_map = [
							   'ayzack' => 'AyzackGlobalEducation.png',
							   'diss-master' => 'Diss-Master.png',
							   'meta-scribe' => 'MetaScribe.png',
							   'nothing-dialer-1' => 'NothingDialer1.png',
							   'portal' => 'Portal.png',
							   'prime-edu' => 'PrimeEdu.png',
							   'pumpkintours' => 'PumkinTours.png',
							   'itprolearner' => 'ScrItProLearners.png',
							   'sonar-code-editor' => 'SonarCodeEditor.png',
							   'iipe' => 'IIPE.jpg',
							   'uplect' => 'uplect.webp',
							   'project-titanic' => 'Titanic-.jpg',
							   'metal-paas' => 'Metal.jpg',
							   'arduino-remote' => 'ArduinoUno.jpg',
						   ];
						   $img_file = isset($img_map[$project['slug']]) ? 'Project_details/' . $img_map[$project['slug']] : 'images/portfolio/gallery/g-shutterbug.jpg';
						   ?>
						   <img src="<?= $img_file ?>" onerror="this.src='images/portfolio/gallery/g-shutterbug.jpg'" alt="<?= htmlspecialchars($project['name']) ?>">
					   </div>
					<div class="glass-content">
						<h2 class="project-title" style="font-family: 'Poppins', monospace; font-size:2em; margin-bottom:0.5em; color:#fff;">
							<?= htmlspecialchars($project['name']) ?>
						</h2>
						<p style="color:#aaa; margin-bottom:1.5em; flex-grow:1;">
							<?= htmlspecialchars($project['description']) ?>
						</p>
						<div class="project-tags">
							<?php foreach ($project['tags'] as $tag): ?>
								<span style="display:inline-block; border:1px solid rgba(37, 150, 190,0.3); border-radius:0.5em; padding:0.2em 0.8em; margin-right:0.5em; margin-bottom:0.5em; color:#2596be; font-size:0.9em; font-family:monospace; background:rgba(37, 150, 190,0.05); backdrop-filter: blur(4px);">
									<?= htmlspecialchars($tag) ?>
								</span>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; endforeach; ?>
	</div>

	<!-- Upcoming Solutions Subsection -->
	<div class="row section-header align-center" style="margin-top:2rem;">
		<div class="col-full">
			<h2 class="display-2 display-1--light">Upcoming</h2>
		</div>
	</div>
	<div class="row projects-list">
		<?php
		$upcoming_slugs = ['project-titanic','metal-paas','arduino-remote'];
		foreach ($upcoming_projects as $project):
			if (in_array($project['slug'], $upcoming_slugs)):
				$is_reversed = ($global_card_index % 2 === 0);
				$global_card_index++;
		?>
			<div class="col-twelve tab-full project-card" style="margin-bottom: 3rem;">
				<div class="glass-proj-card glass-proj-card-dashed <?= $is_reversed ? 'reversed' : '' ?>">
					   <div class="glass-img-wrapper" style="border-bottom-style: dashed;">
						   <?php
						   $img_map = [
							   'ayzack' => 'AyzackGlobalEducation.png',
							   'diss-master' => 'Diss-Master.png',
							   'meta-scribe' => 'MetaScribe.png',
							   'nothing-dialer-1' => 'NothingDialer1.png',
							   'portal' => 'Portal.png',
							   'prime-edu' => 'PrimeEdu.png',
							   'pumpkintours' => 'PumkinTours.png',
							   'itprolearner' => 'ScrItProLearners.png',
							   'sonar-code-editor' => 'SonarCodeEditor.png',
							   'iipe' => 'IIPE.jpg',
							   'uplect' => 'uplect.webp',
							   'project-titanic' => 'Titanic-.jpg',
							   'metal-paas' => 'Metal.jpg',
							   'arduino-remote' => 'ArduinoUno.jpg',
						   ];
						   $img_file = isset($img_map[$project['slug']]) ? 'Project_details/' . $img_map[$project['slug']] : 'images/portfolio/gallery/g-shutterbug.jpg';
						   ?>
						   <img src="<?= $img_file ?>" onerror="this.src='images/portfolio/gallery/g-shutterbug.jpg'" alt="<?= htmlspecialchars($project['name']) ?>">
					</div>
					<div class="glass-content">
						<h2 class="project-title" style="font-family: 'Poppins', monospace; font-size:1.5em; margin-bottom:0.5em; color:#fff;">
							<?= htmlspecialchars($project['name']) ?>
							<?php if ($project['slug'] === 'project-titanic' || $project['slug'] === 'arduino-remote'): ?>
								<span style="font-size:0.45em; color:#2596be; border:1px solid rgba(37, 150, 190,0.4); border-radius:0.5em; padding:0.2em 0.6em; margin-left:0.5em; background:rgba(37, 150, 190,0.05); text-transform:uppercase; letter-spacing:1px; vertical-align: middle; display: inline-block; transform: translateY(-3px);">working title</span>
							<?php endif; ?>
						</h2>
						<p style="color:#aaa; margin-bottom:1.5em; font-size:0.95em; flex-grow:1;">
							<?= htmlspecialchars($project['description']) ?>
						</p>
						<div class="project-tags">
							<?php foreach ($project['tags'] as $tag): ?>
								<span style="display:inline-block; border:1px solid rgba(37, 150, 190,0.3); border-radius:0.5em; padding:0.2em 0.8em; margin-right:0.5em; margin-bottom:0.5em; color:#2596be; font-size:0.9em; font-family:monospace; background:rgba(37, 150, 190,0.05); backdrop-filter: blur(4px);">
									<?= htmlspecialchars($tag) ?>
								</span>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; endforeach; ?>
	</div>
</section>

<?php include('footer.php'); ?>
