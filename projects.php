<?php include('header.php'); ?>
<?php include('inc/projects_data.php'); ?>

<style>
.glass-proj-card {
    background: rgba(255, 255, 255, 0.03);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(37, 150, 190, 0.15);
    border-radius: 1.5rem;
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
    overflow: hidden;
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease, border-color 0.4s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.glass-proj-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(37, 150, 190, 0.15);
    border-color: rgba(37, 150, 190, 0.6);
    background: rgba(255, 255, 255, 0.05);
}
.glass-proj-card-dashed {
    border-style: dashed;
}
.glass-img-wrapper {
    width: 100%;
    height: 240px;
    position: relative;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.2);
    border-bottom: 1px solid rgba(37, 150, 190, 0.1);
}
.glass-img-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(2, 0, 13, 0.3);
    pointer-events: none;
    transition: background 0.4s ease;
    z-index: 1;
}
.glass-proj-card:hover .glass-img-wrapper::after {
    background: rgba(2, 0, 13, 0.1);
}
.glass-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.glass-proj-card:hover .glass-img-wrapper img {
    transform: scale(1.08);
}
.glass-content {
    padding: 2.5rem 2rem;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.project-title {
    font-family: 'Poppins', monospace; 
    font-size: 1.7em; 
    margin-top: 0;
    margin-bottom: 0.8em; 
    color: #ffffff;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
}
.proj-desc {
    color: #a0a0a0; 
    margin-bottom: 2em; 
    flex-grow: 1;
    font-size: 0.95em;
    line-height: 1.6;
}
.project-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: auto;
}
.proj-tag {
    display: inline-block; 
    border: 1px solid rgba(37, 150, 190, 0.2); 
    border-radius: 6px; 
    padding: 0.3em 0.8em; 
    color: #2596be; 
    font-size: 0.8em; 
    font-family: monospace; 
    background: rgba(37, 150, 190, 0.05); 
}
.proj-link {
    font-size: 0.45em; 
    color: #2596be; 
    border: 1px solid rgba(37, 150, 190, 0.5); 
    border-radius: 6px; 
    padding: 0.3em 0.8em; 
    background: rgba(37, 150, 190, 0.1); 
    text-decoration: none; 
    display: inline-block;
    transition: all 0.3s ease;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}
.proj-link:hover {
    background: #2596be;
    color: #02000d;
}
.proj-badge {
    font-size: 0.4em; 
    color: #2596be; 
    border: 1px dashed rgba(37, 150, 190, 0.5); 
    border-radius: 6px; 
    padding: 0.3em 0.8em; 
    background: rgba(37, 150, 190, 0.05); 
    text-transform: uppercase; 
    letter-spacing: 1px;
}
</style>

<section class="s-projects section" style="padding-top: 15rem; padding-bottom: 12rem; background: #02000d;">
    
    <!-- Our Clients Section -->
    <div class="row section-header align-center" data-num="01">
        <div class="col-full">
            <h1 class="display-1 display-1--light">Our <span class="title-highlight">Clients</span></h1>
            <p class="lead" style="color: #aaa;">We proudly build and support these brands</p>
        </div>
    </div>
    
    <div class="row projects-list block-1-2 block-tab-full">
        <?php
        $client_slugs = ['prime-edu','ayzack','itprolearner','pumpkintours','portal','iipe','uplect'];
        foreach (array_merge($featured_projects, $upcoming_projects) as $project):
            if (in_array($project['slug'], $client_slugs)):
        ?>
            <div class="col-block project-card" style="margin-bottom: 3rem;">
                <div class="glass-proj-card">
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
                        <h2 class="project-title">
                            <?= htmlspecialchars($project['name']) ?>
                            <?php if (!empty($project['url'])): ?>
                                <a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" class="proj-link">Visit Site ↗</a>
                            <?php endif; ?>
                        </h2>
                        <p class="proj-desc">
                            <?= htmlspecialchars($project['description']) ?>
                        </p>
                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="proj-tag"><?= htmlspecialchars($tag) ?></span>
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
            <h2 class="display-2 display-1--light" style="font-size:2.5rem;">Live</h2>
        </div>
    </div>
    <div class="row projects-list block-1-2 block-tab-full">
        <?php
        $live_slugs = ['sonar-code-editor','nothing-dialer-1'];
        foreach ($featured_projects as $project):
            if (in_array($project['slug'], $live_slugs)):
        ?>
            <div class="col-block project-card" style="margin-bottom: 3rem;">
                <div class="glass-proj-card">
                       <div class="glass-img-wrapper">
                           <?php
                           $img_file = isset($img_map[$project['slug']]) ? 'Project_details/' . $img_map[$project['slug']] : 'images/portfolio/gallery/g-shutterbug.jpg';
                           ?>
                           <img src="<?= $img_file ?>" onerror="this.src='images/portfolio/gallery/g-shutterbug.jpg'" alt="<?= htmlspecialchars($project['name']) ?>">
                       </div>
                    <div class="glass-content">
                        <h2 class="project-title">
                            <?= htmlspecialchars($project['name']) ?>
                            <?php if (!empty($project['url'])): ?>
                                <a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" class="proj-link">Visit Site ↗</a>
                            <?php endif; ?>
                        </h2>
                        <p class="proj-desc">
                            <?= htmlspecialchars($project['description']) ?>
                        </p>
                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="proj-tag"><?= htmlspecialchars($tag) ?></span>
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
            <h2 class="display-2 display-1--light" style="font-size:2.5rem;">Upcoming</h2>
        </div>
    </div>
    <div class="row projects-list block-1-2 block-tab-full">
        <?php
        $upcoming_slugs = ['project-titanic','metal-paas','arduino-remote'];
        foreach ($upcoming_projects as $project):
            if (in_array($project['slug'], $upcoming_slugs)):
        ?>
            <div class="col-block project-card" style="margin-bottom: 3rem;">
                <div class="glass-proj-card glass-proj-card-dashed">
                       <div class="glass-img-wrapper">
                           <?php
                           $img_file = isset($img_map[$project['slug']]) ? 'Project_details/' . $img_map[$project['slug']] : 'images/portfolio/gallery/g-shutterbug.jpg';
                           ?>
                           <img src="<?= $img_file ?>" onerror="this.src='images/portfolio/gallery/g-shutterbug.jpg'" alt="<?= htmlspecialchars($project['name']) ?>">
                    </div>
                    <div class="glass-content">
                        <h2 class="project-title">
                            <?= htmlspecialchars($project['name']) ?>
                            <?php if ($project['slug'] === 'project-titanic'): ?>
                                <span class="proj-badge">working title</span>
                            <?php endif; ?>
                            <?php if (!empty($project['url'])): ?>
                                <a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" class="proj-link">Visit Site ↗</a>
                            <?php endif; ?>
                        </h2>
                        <p class="proj-desc">
                            <?= htmlspecialchars($project['description']) ?>
                        </p>
                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="proj-tag"><?= htmlspecialchars($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; endforeach; ?>
    </div>
</section>

<?php include('footer.php'); ?>
