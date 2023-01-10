<?php
/**
 * Controllers allow you to separate the logic of your templates from your markup.
 * This is especially useful for complex logic, but also in general to keep your templates clean.
 *
 *
 * More about controllers:
 * https://getkirby.com/docs/guide/templates/controllers
 */
return function($site, $page, $pages, $kirby) {

    $site_title = $site->title() . ' – ' . $page->title();

    return compact('site_title');
};