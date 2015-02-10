<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:34:16
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\order-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:439554833e186b0045-33411402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1310e7cf2cf8bf4bbf46974e1c3c8b09c7bf3e3' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\order-payment.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '439554833e186b0045-33411402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'HOOK_TOP_PAYMENT' => 0,
    'HOOK_PAYMENT' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'display_tax_label' => 0,
    'total_products' => 0,
    'total_products_wt' => 0,
    'total_wrapping' => 0,
    'total_wrapping_tax_exc' => 0,
    'total_shipping_tax_exc' => 0,
    'virtualCart' => 0,
    'total_shipping' => 0,
    'shippingCost' => 0,
    'shippingCostTaxExc' => 0,
    'total_discounts' => 0,
    'total_discounts_tax_exc' => 0,
    'show_taxes' => 0,
    'total_tax' => 0,
    'total_price' => 0,
    'voucherAllowed' => 0,
    'errors_discount' => 0,
    'error' => 0,
    'link' => 0,
    'discount_name' => 0,
    'displayVouchers' => 0,
    'voucher' => 0,
    'total_price_without_tax' => 0,
    'products' => 0,
    'product' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'id_customization' => 0,
    'customization' => 0,
    'type' => 0,
    'CUSTOMIZE_FILE' => 0,
    'datas' => 0,
    'pic_dir' => 0,
    'picture' => 0,
    'CUSTOMIZE_TEXTFIELD' => 0,
    'textField' => 0,
    'quantityDisplayed' => 0,
    'gift_products' => 0,
    'last_was_odd' => 0,
    'discounts' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e1ae91762_67436353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e1ae91762_67436353')) {function content_54833e1ae91762_67436353($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencySign'=>html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8")),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyRate'=>floatval($_smarty_tpl->tpl_vars['currencyRate']->value)),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyFormat'=>intval($_smarty_tpl->tpl_vars['currencyFormat']->value)),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyBlank'=>intval($_smarty_tpl->tpl_vars['currencyBlank']->value)),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProduct')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProducts')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'products','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your payment method'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Please choose your payment method'),$_smarty_tpl);?>
</h1>
<?php } else { ?>
	<h1 class="page-heading step-num"><span>3</span> <?php echo smartyTranslate(array('s'=>'Please choose your payment method'),$_smarty_tpl);?>
</h1>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<div id="opc_payment_methods" class="opc-main-block">
		<div id="opc_payment_methods-overlay" class="opc-overlay" style="display: none;"></div>
<?php }?>
		<div class="paiement_block">
			<div id="HOOK_TOP_PAYMENT"><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP_PAYMENT']->value;?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value) {?>
					<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
						<div id="order-detail-content" class="table_block table-responsive">
							<table id="cart_summary" class="table table-bordered">
								<thead>
									<tr>
										<th class="cart_product first_item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
										<th class="cart_description item"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</th>
										<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
											<th class="cart_availability item"><?php echo smartyTranslate(array('s'=>'Avail.'),$_smarty_tpl);?>
</th>
										<?php }?>
										<th class="cart_unit item"><?php echo smartyTranslate(array('s'=>'Unit price'),$_smarty_tpl);?>
</th>
										<th class="cart_quantity item"><?php echo smartyTranslate(array('s'=>'Qty'),$_smarty_tpl);?>
</th>
										<th class="cart_total last_item"><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</th>
									</tr>
								</thead>
								<tfoot>
									<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
										<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
											<tr class="cart_total_price">
												<td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total products (tax excl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
<?php }?></td>
												<td colspan="2" class="price" id="total_product"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl);?>
</td>
											</tr>
										<?php } else { ?>
											<tr class="cart_total_price">
												<td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total products (tax incl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
<?php }?></td>
												<td colspan="2" class="price" id="total_product"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products_wt']->value),$_smarty_tpl);?>
</td>
											</tr>
										<?php }?>
									<?php } else { ?>
										<tr class="cart_total_price">
											<td colspan="4" class="text-right"><?php echo smartyTranslate(array('s'=>'Total products'),$_smarty_tpl);?>
</td>
											<td colspan="2" class="price" id="total_product"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl);?>
</td>
										</tr>
									<?php }?>
									<tr class="cart_total_voucher" <?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value==0) {?>style="display:none"<?php }?>>
										<td colspan="4" class="text-right">
											<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
												<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
													<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total gift wrapping (tax excl.):'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total gift wrapping cost:'),$_smarty_tpl);?>
<?php }?>
												<?php } else { ?>
													<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total gift wrapping (tax incl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total gift wrapping cost:'),$_smarty_tpl);?>
<?php }?>
												<?php }?>
											<?php } else { ?>
												<?php echo smartyTranslate(array('s'=>'Total gift wrapping cost:'),$_smarty_tpl);?>

											<?php }?>
										</td>
										<td colspan="2" class="price-discount price" id="total_wrapping">
											<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
												<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl);?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value),$_smarty_tpl);?>

												<?php }?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl);?>

											<?php }?>
										</td>
									</tr>
									<?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value<=0&&!isset($_smarty_tpl->tpl_vars['virtualCart']->value)) {?>
										<tr class="cart_total_delivery">
											<td colspan="4" class="text-right"><?php echo smartyTranslate(array('s'=>'Shipping:'),$_smarty_tpl);?>
</td>
											<td colspan="2" class="price" id="total_shipping"><?php echo smartyTranslate(array('s'=>'Free Shipping!'),$_smarty_tpl);?>
</td>
										</tr>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value!=$_smarty_tpl->tpl_vars['total_shipping']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
												<tr class="cart_total_delivery" <?php if ($_smarty_tpl->tpl_vars['shippingCost']->value<=0) {?> style="display:none"<?php }?>>
													<td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total shipping (tax excl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
<?php }?></td>
													<td colspan="2" class="price" id="total_shipping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['shippingCostTaxExc']->value),$_smarty_tpl);?>
</td>
												</tr>
											<?php } else { ?>
												<tr class="cart_total_delivery"<?php if ($_smarty_tpl->tpl_vars['shippingCost']->value<=0) {?> style="display:none"<?php }?>>
													<td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total shipping (tax incl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
<?php }?></td>
													<td colspan="2" class="price" id="total_shipping" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['shippingCost']->value),$_smarty_tpl);?>
</td>
												</tr>
											<?php }?>
										<?php } else { ?>
											<tr class="cart_total_delivery"<?php if ($_smarty_tpl->tpl_vars['shippingCost']->value<=0) {?> style="display:none"<?php }?>>
												<td colspan="4" class="text-right"><?php echo smartyTranslate(array('s'=>'Total shipping'),$_smarty_tpl);?>
</td>
												<td colspan="2" class="price" id="total_shipping" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['shippingCostTaxExc']->value),$_smarty_tpl);?>
</td>
											</tr>
										<?php }?>
									<?php }?>
									<tr class="cart_total_voucher" <?php if ($_smarty_tpl->tpl_vars['total_discounts']->value==0) {?>style="display:none"<?php }?>>
										<td colspan="4" class="text-right">
											<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
												<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
													<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total vouchers (tax excl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>
<?php }?>
												<?php } else { ?>
													<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total vouchers (tax incl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>
<?php }?>
												<?php }?>
											<?php } else { ?>
												<?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>

											<?php }?>
										</td>
										<td colspan="2" class="price-discount price" id="total_discount">
											<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
												<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1),$_smarty_tpl);?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_discounts']->value*-1),$_smarty_tpl);?>

												<?php }?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1),$_smarty_tpl);?>

											<?php }?>
										</td>
									</tr>
									<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['show_taxes']->value) {?>
										<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value&&$_smarty_tpl->tpl_vars['total_tax']->value!=0) {?>
											<tr class="cart_total_tax">
												<td colspan="4" class="text-right"><?php echo smartyTranslate(array('s'=>'Tax'),$_smarty_tpl);?>
</td>
												<td colspan="2" class="price" id="total_tax" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_tax']->value),$_smarty_tpl);?>
</td>
											</tr>
										<?php }?>
										<tr class="cart_total_price">
											<td colspan="4" class="total_price_container text-right"><span><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</span></td>
											<td colspan="2" class="price" id="total_price_container">
												<span id="total_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl);?>
</span>
											</td>
										</tr>
									<?php } else { ?>
									<tr class="cart_total_price">
										<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
											<td colspan="2" id="cart_voucher" class="cart_voucher">
												<div id="cart_voucher" class="table_block">
													<?php if (isset($_smarty_tpl->tpl_vars['errors_discount']->value)&&$_smarty_tpl->tpl_vars['errors_discount']->value) {?>
														<ul class="alert alert-danger">
														<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors_discount']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
															<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
														<?php } ?>
														</ul>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
														<form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" id="voucher">
															<fieldset>
																<h4><?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
</h4>
																<input type="text" id="discount_name" class="form-control" name="discount_name" value="<?php if (isset($_smarty_tpl->tpl_vars['discount_name']->value)&&$_smarty_tpl->tpl_vars['discount_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['discount_name']->value;?>
<?php }?>" />
																<input type="hidden" name="submitDiscount" />
																<button type="submit" name="submitAddDiscount" class="button btn btn-default button-small"><span><?php echo smartyTranslate(array('s'=>'ok'),$_smarty_tpl);?>
</span></button>
																<?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
																	<p id="title" class="title_offers"><?php echo smartyTranslate(array('s'=>'Take advantage of our offers:'),$_smarty_tpl);?>
</p>
																	<div id="display_cart_vouchers">
																	<?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['displayVouchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
																		<span onclick="$('#discount_name').val('<?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
');return false;" class="voucher_name"><?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
</span> - <?php echo $_smarty_tpl->tpl_vars['voucher']->value['description'];?>
 <br />
																	<?php } ?>
																	</div>
																<?php }?>
															</fieldset>
														</form>
													<?php }?>
												</div>
											</td>
										<?php }?>
										<td colspan="<?php if (!$_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>3<?php } else { ?>2<?php }?>" class="text-right total_price_container">
											<span><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</span>
										</td>
										<td colspan="1" class="price total_price_container" id="total_price_container">
											<span id="total_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl);?>
</span>
										</td>
									</tr>
									<?php }?>
								</tfoot>

								<tbody>
									<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
										<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, 0);?>
										<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, 0);?>
										<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
										<?php $_smarty_tpl->tpl_vars['cannotModify'] = new Smarty_variable(1, null, 0);?>
										<?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->iteration%2, null, 0);?>
										<?php $_smarty_tpl->tpl_vars['noDeleteButton'] = new Smarty_variable(1, null, 0);?>

										
										<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


										
										<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
											<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_smarty_tpl->tpl_vars['id_customization'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
 $_smarty_tpl->tpl_vars['id_customization']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>
												<tr id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" class="alternate_item cart_item">
													<td colspan="4">
														<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datas']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
															<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value) {?>
																<div class="customizationUploaded">
																	<ul class="customizationUploaded">
																		<?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
																			<li>
																				<img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['picture']->value['value'];?>
_small" alt="" class="customizationUploaded" />
																			</li>
																		<?php } ?>
																	</ul>
																</div>
															<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value) {?>
																<ul class="typedText">
																	<?php  $_smarty_tpl->tpl_vars['textField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['textField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['typedText']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['textField']->key => $_smarty_tpl->tpl_vars['textField']->value) {
$_smarty_tpl->tpl_vars['textField']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['typedText']['index']++;
?>
																		<li>
																			<?php if ($_smarty_tpl->tpl_vars['textField']->value['name']) {?>
																				<?php echo smartyTranslate(array('s'=>'%s:','sprintf'=>$_smarty_tpl->tpl_vars['textField']->value['name']),$_smarty_tpl);?>

																			<?php } else { ?>
																				<?php echo smartyTranslate(array('s'=>'Text #%s:','sprintf'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['typedText']['index']+1),$_smarty_tpl);?>

																			<?php }?>
																			<?php echo $_smarty_tpl->tpl_vars['textField']->value['value'];?>

																		</li>
																	<?php } ?>
																</ul>
															<?php }?>
														<?php } ?>
													</td>
													<td class="cart_quantity text-center">
														<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>

													</td>
													<td class="cart_total"></td>
												</tr>
												<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable($_smarty_tpl->tpl_vars['quantityDisplayed']->value+$_smarty_tpl->tpl_vars['customization']->value['quantity'], null, 0);?>
											<?php } ?>
											
											<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
										<?php }?>
									<?php } ?>
									<?php $_smarty_tpl->tpl_vars['last_was_odd'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->iteration%2, null, 0);?>
									<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
										<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, 0);?>
										<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, 0);?>
										<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
										<?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->iteration+$_smarty_tpl->tpl_vars['last_was_odd']->value)%2, null, 0);?>
										<?php $_smarty_tpl->tpl_vars['ignoreProductLast'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]), null, 0);?>
										<?php $_smarty_tpl->tpl_vars['cannotModify'] = new Smarty_variable(1, null, 0);?>
										
										<?php echo $_smarty_tpl->getSubTemplate ("./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first), 0);?>

									<?php } ?>
								</tbody>

								<?php if (count($_smarty_tpl->tpl_vars['discounts']->value)) {?>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['discount']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['discount']->iteration=0;
 $_smarty_tpl->tpl_vars['discount']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
 $_smarty_tpl->tpl_vars['discount']->iteration++;
 $_smarty_tpl->tpl_vars['discount']->index++;
 $_smarty_tpl->tpl_vars['discount']->first = $_smarty_tpl->tpl_vars['discount']->index === 0;
 $_smarty_tpl->tpl_vars['discount']->last = $_smarty_tpl->tpl_vars['discount']->iteration === $_smarty_tpl->tpl_vars['discount']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['discountLoop']['first'] = $_smarty_tpl->tpl_vars['discount']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['discountLoop']['last'] = $_smarty_tpl->tpl_vars['discount']->last;
?>
											<tr class="cart_discount <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['discountLoop']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['discountLoop']['first']) {?>first_item<?php } else { ?>item<?php }?>" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">											
												<td class="cart_discount_name" colspan="<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>3<?php } else { ?>2<?php }?>"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
												<td class="cart_discount_price">
													<span class="price-discount">
														<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real']>0) {?>
															<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
																<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl);?>

															<?php } else { ?>
																<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl);?>

															<?php }?>
														<?php }?>
													</span>
												</td>
												<td class="cart_discount_delete">1</td>
												<td class="cart_discount_price">
													<span class="price-discount">
														<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real']>0) {?>
															<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
																<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl);?>

															<?php } else { ?>
																<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl);?>

															<?php }?>
														<?php }?>
													</span>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								<?php }?>
							</table>
						</div> <!-- end order-detail-content -->
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><div id="opc_payment_methods-content"><?php }?>
					<div id="HOOK_PAYMENT">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value;?>

					</div>
					<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?></div> <!-- end opc_payment_methods-content --><?php }?>
				<?php } else { ?>
					<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No payment modules have been installed.'),$_smarty_tpl);?>
</p>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
					<p class="cart_navigation clearfix">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=2"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
" class="button-exclusive btn btn-default">
							<i class="icon-chevron-left"></i>
							<?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>

						</a>
					</p>
				<?php } else { ?>
					</div> <!-- end opc_payment_methods -->
				<?php }?>
			</div> <!-- end HOOK_TOP_PAYMENT --><?php }} ?>
