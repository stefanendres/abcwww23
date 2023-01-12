<?php snippet('head'); ?>
<?php snippet('header'); ?>
<main>
    <div class="project-description-container">
        <?= $page->project_description() ?>
    </div>
    <ol class="project-link-list">
        <?php foreach($page->project_link_list()->toStructure() as $link_item): ?>
            <li class="project-link-list-item">
                <a class="project-link" href="<?= $link_item->link(); ?>" target="_blank">
                    <?= $link_item->name(); ?>
                </a>
            </li>
        <?php endforeach ?>
    </ol>
    <div class="project-content-container">
        <?php foreach($page->content_rows()->toStructure() as $row): ?>
            <div class="project-row">
                <?php foreach($row->content_columns()->toStructure() as $column): ?>
                    <?php if ($column->content_type() == 'content_image'): ?>
                        <div class="project-column column-image width-<?= $column->content_width() ?>">
                            <img class="project-image"
                                src="<?= $column->content_image()->toFile()->url() ?>"
                                alt="<?= $column->content_image()->toFile()->alt() ?>">
                        </div>
                    <?php elseif ($column->content_type() == 'content_text'): ?>
                        <div class="project-column column-text width-<?= $column->content_width() ?>">
                            <div class="project-text">
                                <?= $column->content_text() ?>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>            
            </div>
        <?php endforeach ?>
    </div>
</main>
<?php snippet('footer'); ?>
<?php snippet('foot'); ?>