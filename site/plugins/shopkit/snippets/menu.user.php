<nav class="user">

  <?php if ($user->can('panel.access.options')) { ?>

    <a class="button admin" href="<?= url('panel/pages/'.$page->uri().'/edit') ?>">
      <?= f::read('site/plugins/shopkit/assets/svg/pencil.svg') ?>
      <?= l('edit-page') ?>
    </a>

    <a class="button admin" href="<?= url('panel') ?>">
      <?= f::read('site/plugins/shopkit/assets/svg/tachometer.svg') ?>
      <?= l('dashboard') ?>
    </a>

	<a class="button admin" href="<?= url('panel/options') ?>">
      <?= f::read('site/plugins/shopkit/assets/svg/cog.svg') ?>
	  <?= l('site-options') ?>
	</a>

  <?php } ?>
  
  <a class="button admin" href="<?= url('shop/orders') ?>">
    <?php
      $currency_code_lower = str::lower($site->currency_code());
      if (!in_array($currency_code_lower, ['inr','krw','ils','rub','gbp','try','jpy','eur'])) {
        $currency_code_lower = 'dollar';
      }
    ?>
    <?= f::read('site/plugins/shopkit/assets/svg/'.$currency_code_lower.'.svg') ?>
    <?= l('view-orders') ?>
  </a>
  
  <a class="button admin" href="<?= url('panel/users/'.$user->username().'/edit') ?>">
    <?= f::read('site/plugins/shopkit/assets/svg/user.svg') ?>
    <?= l('my-account') ?>
  </a>
  
  <a class="button admin" href="<?= url('logout') ?>">
    <?= f::read('site/plugins/shopkit/assets/svg/sign-out.svg') ?>
    <?= l('logout') ?>
  </a>
  
</nav>