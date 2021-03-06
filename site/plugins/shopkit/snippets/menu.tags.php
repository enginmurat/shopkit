<?php $tags = $allProducts->filterBy('tags', '!=', '')->pluck('tags', ',', true) ?>
<?php if (count($tags) > 0) { ?>
  <section>
    <h3 dir="auto"><?= l('tags') ?></h3>
    <ul dir="auto" class="menu tags">
      <?php natcasesort($tags) ?>
      <?php foreach ($tags as $tag) { ?>
        <li><a href="<?= url('search/?q='.urlencode($tag)) ?>">#<?= str::lower($tag) ?></a></li>
      <?php } ?>
    </ul>
  </section>
<?php } ?>