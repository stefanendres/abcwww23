<?php $globals = $site->children()->findBy('intendedTemplate', 'globals'); ?>
<header>
    <nav>
        <?php foreach ($globals->main_menu()->toPages() as $menu_item): ?>
            <a class="menu-link<?php e($menu_item->isOpen(), ' active'); ?>" href="<?= $menu_item->url() ?>">
                <?php if ($menu_item->template() == 'home'): ?>
                    <img class="site-logo"
                        src="<?= $globals->site_logo()->toFile()->url() ?>" 
                        alt="<?= $globals->site_logo()->toFile()->alt() ?>">
                <?php else: ?>
                    <?= $menu_item->title() ?>
                <?php endif ?>
            </a>
        <?php endforeach ?>
    </nav>
</header>