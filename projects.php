
<?php include('header.php'); ?>
<?php include('inc/projects_data.php'); ?>

<style>
.glass-proj-card {
	background: rgba(255, 255, 255, 0.02);
	backdrop-filter: blur(12px);
	-webkit-backdrop-filter: blur(12px);
	border: 1px solid rgba(0, 255, 255, 0.15);
	border-radius: 1.5rem;
	box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
	overflow: hidden;
	transition: transform 0.3s ease, box-shadow 0.3s ease;
	height: 100%;
	display: flex;
	flex-direction: row;
	align-items: stretch;
	min-height: 320px;
}
.glass-proj-card.reversed {
	flex-direction: row-reverse;
}
.glass-proj-card:hover {
	transform: translateY(-8px);
	box-shadow: 0 15px 40px rgba(0, 255, 255, 0.2);
	border-color: rgba(0, 255, 255, 0.4);
}
.glass-proj-card-dashed {
	border-style: dashed;
}
.glass-img-wrapper {
	width: 45%;
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
	width: 55%;
	padding: 3rem;
	display: flex;
	flex-direction: column;
	justify-content: center;
	flex-grow: 1;
}
@media (max-width: 800px) {
	.glass-proj-card, .glass-proj-card.reversed {
		flex-direction: column;
	}
	.glass-img-wrapper, .glass-content {
		width: 100%;
	}
	.glass-img-wrapper {
		height: 250px;
		-webkit-mask-image: linear-gradient(to bottom, black 60%, transparent 100%) !important;
		mask-image: linear-gradient(to bottom, black 60%, transparent 100%) !important;
	}
	.glass-content {
		padding: 2rem;
	}
}
</style>

<section class="s-projects section" style="padding-top: 15rem; padding-bottom: 12rem; background: linear-gradient(135deg, #030a11 0%, #000000 100%);">
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
						<img src="images/portfolio/<?= htmlspecialchars($project['slug']) ?>.jpg" onerror="this.src='images/portfolio/gallery/g-shutterbug.jpg'" alt="<?= htmlspecialchars($project['name']) ?>">
					</div>
					<div class="glass-content">
						<h2 class="project-title" style="font-family: 'Poppins', monospace; font-size:2em; margin-bottom:0.5em; color:#fff;">
							<?= htmlspecialchars($project['name']) ?>
							<?php if (!empty($project['url'])): ?>
								<a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" style="font-size:0.4em; color:#00ffff; border:1px solid #00ffff99; border-radius:0.5em; padding:0.1em 0.5em; margin-left:0.5em; background:rgba(0,255,255,0.07); vertical-align: middle; text-decoration:none; display: inline-block; transform: translateY(-5px);">Visit Site ↗</a>
							<?php endif; ?>
						</h2>
						<p style="color:#aaa; margin-bottom:1.5em; flex-grow:1;">
							<?= htmlspecialchars($project['description']) ?>
						</p>
						<div class="project-tags">
							<?php foreach ($project['tags'] as $tag): ?>
								<span style="display:inline-block; border:1px solid rgba(0,255,255,0.3); border-radius:0.5em; padding:0.2em 0.8em; margin-right:0.5em; margin-bottom:0.5em; color:#00ffff; font-size:0.9em; font-family:monospace; background:rgba(0,255,255,0.05); backdrop-filter: blur(4px);">
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
						<img src="images/portfolio/<?= htmlspecialchars($project['slug']) ?>.jpg" onerror="this.src='images/portfolio/gallery/g-shutterbug.jpg'" alt="<?= htmlspecialchars($project['name']) ?>">
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
								<span style="display:inline-block; border:1px solid rgba(0,255,255,0.3); border-radius:0.5em; padding:0.2em 0.8em; margin-right:0.5em; margin-bottom:0.5em; color:#00ffff; font-size:0.9em; font-family:monospace; background:rgba(0,255,255,0.05); backdrop-filter: blur(4px);">
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
						<img src="images/portfolio/<?= htmlspecialchars($project['slug']) ?>.jpg" onerror="this.src='images/portfolio/gallery/g-shutterbug.jpg'" alt="<?= htmlspecialchars($project['name']) ?>">
					</div>
					<div class="glass-content">
						<h2 class="project-title" style="font-family: 'Poppins', monospace; font-size:1.5em; margin-bottom:0.5em; color:#fff;">
							<?= htmlspecialchars($project['name']) ?>
							<?php if ($project['slug'] === 'project-titanic' || $project['slug'] === 'arduino-remote'): ?>
								<span style="font-size:0.45em; color:#00ffff; border:1px solid rgba(0,255,255,0.4); border-radius:0.5em; padding:0.2em 0.6em; margin-left:0.5em; background:rgba(0,255,255,0.05); text-transform:uppercase; letter-spacing:1px; vertical-align: middle; display: inline-block; transform: translateY(-3px);">working title</span>
							<?php endif; ?>
						</h2>
						<p style="color:#aaa; margin-bottom:1.5em; font-size:0.95em; flex-grow:1;">
							<?= htmlspecialchars($project['description']) ?>
						</p>
						<div class="project-tags">
							<?php foreach ($project['tags'] as $tag): ?>
								<span style="display:inline-block; border:1px solid rgba(0,255,255,0.3); border-radius:0.5em; padding:0.2em 0.8em; margin-right:0.5em; margin-bottom:0.5em; color:#00ffff; font-size:0.9em; font-family:monospace; background:rgba(0,255,255,0.05); backdrop-filter: blur(4px);">
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