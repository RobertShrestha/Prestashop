<?php /* Smarty version Smarty-3.1.19, created on 2015-01-28 04:33:39
         compiled from "E:\wamp\www\Emusic\prestashop\admin1914\themes\default\template\controllers\customers\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1942054c8acf3d6c426-24486914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd153305815cdf4d7fc72bac77460fe40a2e3af62' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin1914\\themes\\default\\template\\controllers\\customers\\helpers\\view\\view.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
    'f4db45d49ce24c2afb4afe73d9b4d0187814a493' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin1914\\themes\\default\\template\\helpers\\view\\view.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942054c8acf3d6c426-24486914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c8acf48654d8_38947927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8acf48654d8_38947927')) {function content_54c8acf48654d8_38947927($_smarty_tpl) {?>

<div class="leadin"></div>


<div id="container-customer">
	<div class="row">
		
		<div class="col-lg-6">
			<div class="panel clearfix">
				<div class="panel-heading">
					<i class="icon-user"></i>
					<?php echo $_smarty_tpl->tpl_vars['customer']->value->firstname;?>

					<?php echo $_smarty_tpl->tpl_vars['customer']->value->lastname;?>

					[<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['customer']->value->id);?>
]
					-
					<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
"><i class="icon-envelope"></i>
						<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>

					</a>
					<div class="panel-heading-action">
						<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;updatecustomer&amp;id_customer=<?php echo intval($_smarty_tpl->tpl_vars['customer']->value->id);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
">
							<i class="icon-edit"></i>
							<?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

						</a>
					</div>
				</div>
				<div class="form-horizontal">
					<div class="row">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Social Title'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['gender']->value->name) {?><?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Unknown'),$_smarty_tpl);?>
<?php }?></p>
						</div>
					</div>
					<div class="row">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Age'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<p class="form-control-static">
								<?php if (isset($_smarty_tpl->tpl_vars['customer']->value->birthday)&&$_smarty_tpl->tpl_vars['customer']->value->birthday!='0000-00-00') {?>
									<?php echo smartyTranslate(array('s'=>'%1$d years old (birth date: %2$s)','sprintf'=>array($_smarty_tpl->tpl_vars['customer_stats']->value['age'],$_smarty_tpl->tpl_vars['customer_birthday']->value)),$_smarty_tpl);?>

								<?php } else { ?>
									<?php echo smartyTranslate(array('s'=>'Unknown'),$_smarty_tpl);?>

								<?php }?>
							</p>
						</div>
					</div>
					<div class="row">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Registration Date'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['registration_date']->value;?>
</p>
						</div>
					</div>
					<div class="row">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Last Visit'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['customer_stats']->value['last_visit']) {?><?php echo $_smarty_tpl->tpl_vars['last_visit']->value;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Never'),$_smarty_tpl);?>
<?php }?></p>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['count_better_customers']->value!='-') {?>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Best Customer Rank'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['count_better_customers']->value;?>
</p>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['shop_is_feature_active']->value) {?>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Shop'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['name_shop']->value;?>
</p>
							</div>
						</div>
					<?php }?>
					<div class="row">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Language'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<p class="form-control-static">
								<?php if (isset($_smarty_tpl->tpl_vars['customerLanguage']->value)) {?>
									<?php echo $_smarty_tpl->tpl_vars['customerLanguage']->value->name;?>

								<?php } else { ?>
									<?php echo smartyTranslate(array('s'=>'Unknown'),$_smarty_tpl);?>

								<?php }?>
							</p>
						</div>
					</div>
					<div class="row">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Registrations'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<p class="form-control-static">
								<?php if ($_smarty_tpl->tpl_vars['customer']->value->newsletter) {?>
									<span class="label label-success">
										<i class="icon-check"></i>
										<?php echo smartyTranslate(array('s'=>'Newsletter'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="label label-danger">
										<i class="icon-remove"></i>
										<?php echo smartyTranslate(array('s'=>'Newsletter'),$_smarty_tpl);?>

									</span>
								<?php }?>
								&nbsp;
								<?php if ($_smarty_tpl->tpl_vars['customer']->value->optin) {?>
									<span class="label label-success">
										<i class="icon-check"></i>
										<?php echo smartyTranslate(array('s'=>'Opt in'),$_smarty_tpl);?>

									</span>
									<?php } else { ?>
									<span class="label label-danger">
										<i class="icon-remove"></i>
										<?php echo smartyTranslate(array('s'=>'Opt in'),$_smarty_tpl);?>

									</span>
								<?php }?>
							</p>
						</div>
					</div>
					<div class="row">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Latest Update'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
</p>
						</div>
					</div>
					<div class="row">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<p class="form-control-static">
								<?php if ($_smarty_tpl->tpl_vars['customer']->value->active) {?>
									<span class="label label-success">
										<i class="icon-check"></i>
										<?php echo smartyTranslate(array('s'=>'Active'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="label label-danger">
										<i class="icon-remove"></i>
										<?php echo smartyTranslate(array('s'=>'Inactive'),$_smarty_tpl);?>

									</span>
								<?php }?>
							</p>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['customer']->value->isGuest()) {?>
					<?php echo smartyTranslate(array('s'=>'This customer is registered as a Guest.'),$_smarty_tpl);?>

					<?php if (!$_smarty_tpl->tpl_vars['customer_exists']->value) {?>
					<form method="post" action="index.php?tab=AdminCustomers&amp;id_customer=<?php echo intval($_smarty_tpl->tpl_vars['customer']->value->id);?>
&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCustomers'),$_smarty_tpl);?>
">
						<input type="hidden" name="id_lang" value="<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
" />
						<p class="text-center">
							<input class="button" type="submit" name="submitGuestToCustomer" value="<?php echo smartyTranslate(array('s'=>'Transform to a customer account'),$_smarty_tpl);?>
" />
						</p>
						<?php echo smartyTranslate(array('s'=>'This feature generates a random password before sending an email to your customer.'),$_smarty_tpl);?>

					</form>
					<?php } else { ?>
					<p class="text-muted text-center">
						<?php echo smartyTranslate(array('s'=>'A registered customer account using the defined email address already exists. '),$_smarty_tpl);?>

					</p>
					<?php }?>
				<?php }?>
			</div>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-file"></i> <?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['orders']->value);?>
</span>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['orders']->value&&count($_smarty_tpl->tpl_vars['orders']->value)) {?>
					<?php $_smarty_tpl->tpl_vars['count_ok'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['orders_ok']->value), null, 0);?>
					<?php $_smarty_tpl->tpl_vars['count_ko'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['orders_ko']->value), null, 0);?>
					<div class="panel">
						<div class="row">
							<div class="col-lg-6">
								<i class="icon-ok-circle icon-big"></i>
								<?php echo smartyTranslate(array('s'=>'Valid orders:'),$_smarty_tpl);?>

								<span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['count_ok']->value;?>
</span>
								<?php echo smartyTranslate(array('s'=>'for a total amount of %s','sprintf'=>$_smarty_tpl->tpl_vars['total_ok']->value),$_smarty_tpl);?>

							</div>
							<div class="col-lg-6">
								<i class="icon-exclamation-sign icon-big"></i>
								<?php echo smartyTranslate(array('s'=>'Invalid orders:'),$_smarty_tpl);?>

								<span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['count_ko']->value;?>
</span>
							</div>
						</div>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['count_ok']->value) {?>
						<table class="table">
							<thead>
								<tr>
									<th class="center"><span class="title_box "><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Payment'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Products'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Total spent'),$_smarty_tpl);?>
</span></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orders_ok']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
								<tr onclick="document.location = '?tab=AdminOrders&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
&amp;vieworder&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
'">
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
</td>
									<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['payment'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_state'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['nb_products'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['total_paid_real'];?>
</td>
									<td>
										<a class="btn btn-default" href="?tab=AdminOrders&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
&amp;vieworder&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
">
											<i class='icon-search'></i> <?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>

										</a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['count_ko']->value) {?>
						<table class="table">
							<thead>
								<tr>
									<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Payment'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Products'),$_smarty_tpl);?>
</span></th>
									<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Total spent'),$_smarty_tpl);?>
</span></th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orders_ko']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
								<tr onclick="document.location = '?tab=AdminOrders&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
&amp;vieworder&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
'">
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
</td>
									<td><a href="?tab=AdminOrders&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
&amp;vieworder&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['payment'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_state'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['nb_products'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['order']->value['total_paid_real'];?>
</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>	
					<?php }?>
				<?php } else { ?>
				<p class="text-muted text-center">
					<?php echo smartyTranslate(array('s'=>'%1$s %2$s has not placed any orders yet','sprintf'=>array($_smarty_tpl->tpl_vars['customer']->value->firstname,$_smarty_tpl->tpl_vars['customer']->value->lastname)),$_smarty_tpl);?>

				</p>
				<?php }?>
			</div>

			<div class="panel">
				<div class="panel-heading">
					<i class="icon-shopping-cart"></i> <?php echo smartyTranslate(array('s'=>'Carts'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['carts']->value);?>
</span>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['carts']->value&&count($_smarty_tpl->tpl_vars['carts']->value)) {?>
					<table class="table">
						<thead>
							<tr>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</a></span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</span></th>
							</tr>
						</thead>
						<tbody>
						<?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cart']->key;
?>
							<tr onclick="document.location = '?tab=AdminCarts&amp;id_cart=<?php echo intval($_smarty_tpl->tpl_vars['cart']->value['id_cart']);?>
&amp;viewcart&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCarts'),$_smarty_tpl);?>
'">
								<td><?php echo $_smarty_tpl->tpl_vars['cart']->value['id_cart'];?>
</td>
								<td>
									<a href="index.php?tab=AdminCarts&amp;id_cart=<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_cart'];?>
&amp;viewcart&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCarts'),$_smarty_tpl);?>
">
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['cart']->value['date_upd'],'full'=>0),$_smarty_tpl);?>

									</a>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['cart']->value['name'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['cart']->value['total_price'];?>
</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				<?php } else { ?>
				<p class="text-muted text-center">
					<?php echo smartyTranslate(array('s'=>'No cart is available'),$_smarty_tpl);?>

				</p>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['products']->value&&count($_smarty_tpl->tpl_vars['products']->value)) {?>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-archive"></i> <?php echo smartyTranslate(array('s'=>'Purchased products'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
</span>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</span></th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
						<tr onclick="document.location = '?tab=AdminOrders&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order']);?>
&amp;vieworder&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
'">
							<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['product']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
							<td>
								<a href="?tab=AdminOrders&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_order'];?>
&amp;vieworder&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
">
									<?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>

								</a>
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product']->value['product_quantity'];?>
</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php }?>
			<?php if (count($_smarty_tpl->tpl_vars['interested']->value)) {?>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-archive"></i> <?php echo smartyTranslate(array('s'=>'Purchased products'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['interested']->value);?>
</span>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</span></th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['interested']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
						<tr onclick="document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
'">
							<td><?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
</td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<?php }?>
		</div>
		
		<div class="col-lg-6">
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-eye-close"></i> <?php echo smartyTranslate(array('s'=>'Add a private note'),$_smarty_tpl);?>

				</div>
				<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'This note will be displayed to all employees but not to customers.'),$_smarty_tpl);?>
</div>
				<form id="customer_note" class="form-horizontal" action="ajax.php" method="post" onsubmit="saveCustomerNote(<?php echo intval($_smarty_tpl->tpl_vars['customer']->value->id);?>
);return false;" >
					<div class="form-group">
						<div class="col-lg-12">
							<textarea name="note" id="noteContent" onkeyup="$(this).val().length > 0 ? $('#submitCustomerNote').removeAttr('disabled') : $('#submitCustomerNote').attr('disabled', 'disabled')"><?php echo $_smarty_tpl->tpl_vars['customer_note']->value;?>
</textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<button type="submit" id="submitCustomerNote" class="btn btn-default pull-right" disabled="disabled">
								<i class="icon-save"></i>
								<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>

							</button>
						</div>
					</div>
					<span id="note_feedback"></span>
				</form>
			</div>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-envelope"></i> <?php echo smartyTranslate(array('s'=>'Messages'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['messages']->value);?>
</span>
				</div>
				<?php if (count($_smarty_tpl->tpl_vars['messages']->value)) {?>
					<table class="table">
						<thead>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Sent on'),$_smarty_tpl);?>
</span></th>
						</thead>
						<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['message']->value['status'];?>
</td>
								<td>
									<a href="index.php?tab=AdminCustomerThreads&amp;id_customer_thread=<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer_thread'];?>
&amp;viewcustomer_thread&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCustomerThreads'),$_smarty_tpl);?>
">
										<?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
...
									</a>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['message']->value['date_add'];?>
</td>
							</tr>
						<?php } ?>
					</table>
				<?php } else { ?>
				<p class="text-muted text-center">
					<?php echo smartyTranslate(array('s'=>'%1$s %2$s has never contacted you','sprintf'=>array($_smarty_tpl->tpl_vars['customer']->value->firstname,$_smarty_tpl->tpl_vars['customer']->value->lastname)),$_smarty_tpl);?>

				</p>
				<?php }?>
			</div>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-ticket"></i> <?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['discounts']->value);?>
</span>
				</div>
				<?php if (count($_smarty_tpl->tpl_vars['discounts']->value)) {?>
					<table class="table">
						<thead>
							<tr>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Code'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</span></th>
							<tr/>
						</thead>
						<tbody>
					<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['discount']->key;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['discount']->value['id_cart_rule'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['discount']->value['code'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['discount']->value['active']) {?>
										<i class="icon-ok"></i>
									<?php } else { ?>
										<i class="icon-remove"></i>
									<?php }?>
								</td>
								<td>
									<a href="?tab=AdminCartRules&amp;id_cart_rule=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_cart_rule'];?>
&amp;addcart_rule&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCartRules'),$_smarty_tpl);?>
">
										<i class="icon-pencil"></i>
									</a>
									<a href="?tab=AdminCartRules&amp;id_cart_rule=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_cart_rule'];?>
&amp;deletecart_rule&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCartRules'),$_smarty_tpl);?>
">
										<i class="icon-remove"></i>
									</a>
								</td>
							</tr>
						</tbody>
					<?php } ?>
					</table>
				<?php } else { ?>
				<p class="text-muted text-center">
					<?php echo smartyTranslate(array('s'=>'%1$s %2$s has no discount vouchers','sprintf'=>array($_smarty_tpl->tpl_vars['customer']->value->firstname,$_smarty_tpl->tpl_vars['customer']->value->lastname)),$_smarty_tpl);?>

				</p>
				<?php }?>
			</div>

			<?php if (count($_smarty_tpl->tpl_vars['connections']->value)) {?>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-time"></i> <?php echo smartyTranslate(array('s'=>'Last connections'),$_smarty_tpl);?>

				</div>
				<table class="table">
					<thead>
					<tr>
						<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</span></th>
						<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Pages viewed'),$_smarty_tpl);?>
</span></th>
						<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Total time'),$_smarty_tpl);?>
</span></th>
						<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Origin'),$_smarty_tpl);?>
</span></th>
						<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'IP Address'),$_smarty_tpl);?>
</span></th>
					</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['connection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['connection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['connections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['connection']->key => $_smarty_tpl->tpl_vars['connection']->value) {
$_smarty_tpl->tpl_vars['connection']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['connection']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['connection']->value['pages'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['connection']->value['time'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['connection']->value['http_referer'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['connection']->value['ipaddress'];?>
</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<?php }?>

			<div class="panel">
				<div class="panel-heading">
					<i class="icon-group"></i>
					<?php echo smartyTranslate(array('s'=>'Groups'),$_smarty_tpl);?>

					<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['groups']->value);?>
</span>
					<a class="btn btn-default pull-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;updatecustomer&amp;id_customer=<?php echo intval($_smarty_tpl->tpl_vars['customer']->value->id);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

					</a>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['groups']->value&&count($_smarty_tpl->tpl_vars['groups']->value)) {?>
				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</span></th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
						<tr onclick="document.location = '?tab=AdminGroups&amp;id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_group']);?>
&amp;viewgroup&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminGroups'),$_smarty_tpl);?>
'">
							<td><?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
</td>
							<td>
								<a href="?tab=AdminGroups&amp;id_group=<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
&amp;viewgroup&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminGroups'),$_smarty_tpl);?>
">
									<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>

								</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php }?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			
		</div>
		<div class="col-lg-6">
			<?php if (count($_smarty_tpl->tpl_vars['referrers']->value)) {?>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-share-alt"></i> <?php echo smartyTranslate(array('s'=>'Referrers'),$_smarty_tpl);?>

				</div>
				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</span></th>
							<?php if ($_smarty_tpl->tpl_vars['shop_is_feature_active']->value) {?><th><?php echo smartyTranslate(array('s'=>'Shop'),$_smarty_tpl);?>
</th><?php }?>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['referrer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['referrer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['referrers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['referrer']->key => $_smarty_tpl->tpl_vars['referrer']->value) {
$_smarty_tpl->tpl_vars['referrer']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['referrer']->value['name'];?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['shop_is_feature_active']->value) {?><td><?php echo $_smarty_tpl->tpl_vars['referrer']->value['shop_name'];?>
</td><?php }?>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php }?>
		</div>
	</div>

	<div class="row">
		
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAdminCustomers",'id_customer'=>intval($_smarty_tpl->tpl_vars['customer']->value->id)),$_smarty_tpl);?>

		<div class="col-lg-12">
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-map-marker"></i> <?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['addresses']->value);?>
</span>
				</div>
				<?php if (count($_smarty_tpl->tpl_vars['addresses']->value)) {?>
					<table class="table">
						<thead>
							<tr>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
</span></th>
								<th><span class="title_box "><?php echo smartyTranslate(array('s'=>'Phone number(s)'),$_smarty_tpl);?>
</span></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
							<tr>
								<td><?php if ($_smarty_tpl->tpl_vars['address']->value['company']) {?><?php echo $_smarty_tpl->tpl_vars['address']->value['company'];?>
<?php } else { ?>--<?php }?></td>
								<td><?php echo $_smarty_tpl->tpl_vars['address']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['lastname'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['address']->value['address1'];?>
 <?php if ($_smarty_tpl->tpl_vars['address']->value['address2']) {?><?php echo $_smarty_tpl->tpl_vars['address']->value['address2'];?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['address']->value['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['address']->value['country'];?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['address']->value['phone']) {?>
										<?php echo $_smarty_tpl->tpl_vars['address']->value['phone'];?>

										<?php if ($_smarty_tpl->tpl_vars['address']->value['phone_mobile']) {?><br /><?php echo $_smarty_tpl->tpl_vars['address']->value['phone_mobile'];?>
<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['address']->value['phone_mobile']) {?><br /><?php echo $_smarty_tpl->tpl_vars['address']->value['phone_mobile'];?>
<?php } else { ?>--<?php }?>
									<?php }?>
								</td>
								<td class="text-right">
									<div class="btn-group">
										<a class="btn btn-default" href="?tab=AdminAddresses&amp;id_address=<?php echo $_smarty_tpl->tpl_vars['address']->value['id_address'];?>
&amp;addaddress=1&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminAddresses'),$_smarty_tpl);?>
">
											<i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

										</a>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li>
												<a href="?tab=AdminAddresses&amp;id_address=<?php echo $_smarty_tpl->tpl_vars['address']->value['id_address'];?>
&amp;deleteaddress&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminAddresses'),$_smarty_tpl);?>
">
													<i class="icon-trash"></i>
													<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>

												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				<?php } else { ?>
					<p class="text-muted text-center">
						<?php echo smartyTranslate(array('s'=>'%1$s %2$s has not registered any addresses yet','sprintf'=>array($_smarty_tpl->tpl_vars['customer']->value->firstname,$_smarty_tpl->tpl_vars['customer']->value->lastname)),$_smarty_tpl);?>

					</p>
				<?php }?>
			</div>
		</div>
	</div>
</div>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
