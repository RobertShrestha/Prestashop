<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:34:18
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\order-return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2518954833e1a1e3953-40612196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09aca293c5d88bc94a843c6bf8a25705ca8f886a' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\order-return.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2518954833e1a1e3953-40612196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderRet' => 0,
    'order' => 0,
    'nbdaysreturn' => 0,
    'state_name' => 0,
    'products' => 0,
    'returnedCustomizations' => 0,
    'customization' => 0,
    'product' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'addressDeliveryId' => 0,
    'customizationId' => 0,
    'customizedDatas' => 0,
    'type' => 0,
    'datas' => 0,
    'pic_dir' => 0,
    'data' => 0,
    'customizationFieldName' => 0,
    'quantityDisplayed' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e1b162700_16133705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e1b162700_16133705')) {function content_54833e1b162700_16133705($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['orderRet']->value)) {?>
	<div class="box">
		<h2 class="page-subheading"><?php echo smartyTranslate(array('s'=>'RE#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['orderRet']->value->id);?>
 <?php echo smartyTranslate(array('s'=>'on'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</h2>
		<p class="bold"><?php echo smartyTranslate(array('s'=>'We have logged your return request.'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'Your package must be returned to us within'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['nbdaysreturn']->value;?>
 <?php echo smartyTranslate(array('s'=>'days of receiving your order.'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'The current status of your merchandise return is:'),$_smarty_tpl);?>
 <span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></p>
		<p><?php echo smartyTranslate(array('s'=>'List of items to be returned:'),$_smarty_tpl);?>
</p>
	</div>
	<div id="order-detail-content" class="table_block">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Reference'),$_smarty_tpl);?>
</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
					<th class="last_item"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>

				<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['returnedCustomizations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['customization']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
 $_smarty_tpl->tpl_vars['customization']->index++;
 $_smarty_tpl->tpl_vars['customization']->first = $_smarty_tpl->tpl_vars['customization']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['customization']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>
					<?php if ($_smarty_tpl->tpl_vars['customization']->value['product_id']==$_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
						<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>first_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">
							<td><?php if ($_smarty_tpl->tpl_vars['customization']->value['reference']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>--<?php }?></td>
							<td class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<td><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['customization']->value['product_quantity']);?>
</span></td>
						</tr>
						<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['customization']->value['product_id'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['customization']->value['product_attribute_id'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['customizationId'] = new Smarty_variable($_smarty_tpl->tpl_vars['customization']->value['id_customization'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['addressDeliveryId'] = new Smarty_variable($_smarty_tpl->tpl_vars['customization']->value['id_address_delivery'], null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datas']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['addressDeliveryId']->value][$_smarty_tpl->tpl_vars['customizationId']->value]['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
							<tr class="alternate_item">
								<td colspan="3">
									<?php if ($_smarty_tpl->tpl_vars['type']->value==@constant('_CUSTOMIZE_FILE_')) {?>
									<ul class="customizationUploaded">
										<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
											<li><img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li>
										<?php } ?>
									</ul>
									<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==@constant('_CUSTOMIZE_TEXTFIELD_')) {?>
									<ul class="typedText"><?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

										<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
											<?php $_smarty_tpl->tpl_vars['customizationFieldName'] = new Smarty_variable(("Text #").($_smarty_tpl->tpl_vars['data']->value['id_customization_field']), null, 0);?>
											<li><?php echo smartyTranslate(array('s'=>'%s:','sprintf'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['customizationFieldName']->value : $tmp)),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
</li>
										<?php } ?>
									</ul>
									<?php }?>
								</td>
							</tr>
						<?php } ?>
						<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable($_smarty_tpl->tpl_vars['quantityDisplayed']->value+$_smarty_tpl->tpl_vars['customization']->value['product_quantity'], null, 0);?>
					<?php }?>
				<?php } ?>

				<?php if ($_smarty_tpl->tpl_vars['product']->value['product_quantity']>$_smarty_tpl->tpl_vars['quantityDisplayed']->value) {?>
					<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>first_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">
						<td><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_reference'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>--<?php }?></td>
						<td class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['product_quantity']);?>
</span></td>
					</tr>
				<?php }?>
			<?php } ?>
			</tbody>
		</table>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['orderRet']->value->state==2) {?>
	<div class="box">
    	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Reminder'),$_smarty_tpl);?>
</h3>
		<ul>
			<li><?php echo smartyTranslate(array('s'=>'All merchandise must be returned in its original packaging and in its original state.'),$_smarty_tpl);?>
</li>
			<li><?php echo smartyTranslate(array('s'=>'Please print out the'),$_smarty_tpl);?>
 <a href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['orderRet']->value->id);?>
<?php $_tmp33=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-return',true,null,"id_order_return=".$_tmp33), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'PDF return slip'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'and include it with your package.'),$_smarty_tpl);?>
</li>
			<li><?php echo smartyTranslate(array('s'=>'Please see the PDF return slip'),$_smarty_tpl);?>
 (<a href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['orderRet']->value->id);?>
<?php $_tmp34=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-return',true,null,"id_order_return=".$_tmp34), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'for the correct address.'),$_smarty_tpl);?>
</a>)</li>
		</ul>
		<?php echo smartyTranslate(array('s'=>'When we receive your package, we will notify you by email. We will then begin processing order reimbursement.'),$_smarty_tpl);?>

		<br /><br /><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Please let us know if you have any questions.'),$_smarty_tpl);?>
</a>
		<br />
		<p class="bold"><?php echo smartyTranslate(array('s'=>'If the conditions of return listed above are not respected, we reserve the right to refuse your package and/or reimbursement.'),$_smarty_tpl);?>
</p>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['orderRet']->value->state==1) {?>
		<p class="bold"><?php echo smartyTranslate(array('s'=>'You must wait for confirmation before returning any merchandise.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>

<?php }} ?>
