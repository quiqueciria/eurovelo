<nav class="menu cf" role="navigation">
  <ul class="cf">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menuitem">
      <a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a>
      <?php if($item->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($item->children()->visible() as $item): ?>
        <li>
          <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
  <form class="search" role="search" action="<?php echo url('search') ?>">
    <label class="vh" for="search">Search</label>
    <input type="search" class="searchword" name="q" id="search" placeholder="Buscar..."/>
  </form>
    <div class="btn_twitter"><a href="https://twitter.com/euroveloes" target="_blank">twitter</a></div>
</nav>
