<?php snippet('head'); ?>
<?php snippet('header'); ?>
<main>
  <div class="starter-image-container">
    <img class="starter-image"
      src="<?= $page->home_starter_image()->toFile()->url() ?>" 
      alt="<?= $page->home_starter_image()->toFile()->alt() ?>">
  </div>
  <div class="description-container">
    <?= $page->home_description() ?>
  </div>
  <div class="projects-container">
    <?php foreach ($page->children() as $project_page): ?>
      <a class="project-link" href="<?= $project_page->url() ?>">
        <?php if ($project_page->project_thumbnail()->isNotEmpty()): ?>
          <img class="project-thumbnail" src="<?= $project_page->project_thumbnail()->toFile()->url() ?>">
        <?php endif ?>
        <div class="project-title fontsize-l">
          <?= $project_page->title() ?>
        </div>
      </a>
    <?php endforeach ?>
</main>
<footer>
  
</footer>
<?php snippet('foot'); ?>