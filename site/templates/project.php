<?php snippet('head'); ?>
<?php snippet('header'); ?>
<main>
    <?php foreach($page->project_link_list()->toStructure() as $list_item): ?>
        <a href="<?php echo $list_item->project_link(); ?>"><?php echo $list_item->project_link(); ?></a>
    <?php endforeach ?>
</main>
<footer>
  
</footer>
<?php snippet('foot'); ?>