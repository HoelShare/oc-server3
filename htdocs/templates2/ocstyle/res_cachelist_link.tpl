{***************************************************************************
 *  You can find the license in the docs directory
 *
 *  Unicode Reminder メモ
 ***************************************************************************}

<a href="cachelist.php?id={$cachelist.id}">{$cachelist.name|escape}</a> {if !$disable_listwatchicon && $cachelist.watched_by_me}<img src="resource2/{$opt.template.style}/images/viewcache/16x16-watch.png" title="{t}I am watching this list.{/t}" />{/if}