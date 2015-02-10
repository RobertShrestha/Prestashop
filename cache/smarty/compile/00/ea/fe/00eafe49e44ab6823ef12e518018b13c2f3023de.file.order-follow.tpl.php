<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:34:10
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\order-follow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:809254833e127fa864-36622523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00eafe49e44ab6823ef12e518018b13c2f3023de' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\order-follow.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809254833e127fa864-36622523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'errorQuantity' => 0,
    'errorMsg' => 0,
    'ids_order_detail' => 0,
    'id_order_detail' => 0,
    'order_qte_input' => 0,
    'key' => 0,
    'value' => 0,
    'id_order' => 0,
    'errorDetail1' => 0,
    'errorDetail2' => 0,
    'errorNotReturnable' => 0,
    'ordersReturn' => 0,
    'return' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e12da9819_49852931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e12da9819_49852931')) {function content_54833e12da9819_49852931($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>

	</a>
	<span class="navigation-pipe">
		<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

	</span>
	<span class="navigation_page">
		<?php echo smartyTranslate(array('s'=>'Return Merchandise Authorization (RMA)'),$_smarty_tpl);?>

	</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading bottom-indent">
	<?php echo smartyTranslate(array('s'=>'Return Merchandise Authorization (RMA)'),$_smarty_tpl);?>

</h1>
<?php if (isset($_smarty_tpl->tpl_vars['errorQuantity']->value)&&$_smarty_tpl->tpl_vars['errorQuantity']->value) {?>
	<p class="error">
		<?php echo smartyTranslate(array('s'=>'You do not have enough products to request an additional merchandise return.'),$_smarty_tpl);?>

	</p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errorMsg']->value)&&$_smarty_tpl->tpl_vars['errorMsg']->value) {?>
	<p class="alert alert-danger">
		<?php echo smartyTranslate(array('s'=>'Please provide an explanation for your RMA.'),$_smarty_tpl);?>

	</p>
	<form method="POST"  id="returnOrderMessage">
		<p class="textarea form-group">
        	<label><?php echo smartyTranslate(array('s'=>'Please provide an explanation for your RMA:'),$_smarty_tpl);?>
</label>
			<textarea name="returnText" class="form-control"></textarea>
		</p>
		<?php  $_smarty_tpl->tpl_vars['id_order_detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_order_detail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ids_order_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_order_detail']->key => $_smarty_tpl->tpl_vars['id_order_detail']->value) {
$_smarty_tpl->tpl_vars['id_order_detail']->_loop = true;
?>
			<input type="hidden" name="ids_order_detail[<?php echo intval($_smarty_tpl->tpl_vars['id_order_detail']->value);?>
]" value="<?php echo intval($_smarty_tpl->tpl_vars['id_order_detail']->value);?>
"/>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_qte_input']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="order_qte_input[<?php echo intval($_smarty_tpl->tpl_vars['key']->value);?>
]" value="<?php echo intval($_smarty_tpl->tpl_vars['value']->value);?>
"/>
		<?php } ?>
		<input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['id_order']->value);?>
"/>
		<input class="unvisible" type="submit" name="submitReturnMerchandise" value="<?php echo smartyTranslate(array('s'=>'Make an RMA slip'),$_smarty_tpl);?>
"/>
		<p>
	        <button type="submit" name="submitReturnMerchandise" class="btn btn-default button button-small">
	        	<span>
	        		<?php echo smartyTranslate(array('s'=>'Make an RMA slip'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i>
	        	</span>
	        </button>
	   	</p>
	</form>
	
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errorDetail1']->value)&&$_smarty_tpl->tpl_vars['errorDetail1']->value) {?>
	<p class="alert alert-danger">
		<?php echo smartyTranslate(array('s'=>'Please check at least one product you would like to return.'),$_smarty_tpl);?>

	</p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errorDetail2']->value)&&$_smarty_tpl->tpl_vars['errorDetail2']->value) {?>
	<p class="alert alert-danger">
		<?php echo smartyTranslate(array('s'=>'For each product you wish to add, please specify the desired quantity.'),$_smarty_tpl);?>

	</p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errorNotReturnable']->value)&&$_smarty_tpl->tpl_vars['errorNotReturnable']->value) {?>
	<p class="alert alert-danger">
		<?php echo smartyTranslate(array('s'=>'This order cannot be returned.'),$_smarty_tpl);?>

	</p>
<?php }?>

<p class="info-title">
	<?php echo smartyTranslate(array('s'=>'Here is a list of pending merchandise returns'),$_smarty_tpl);?>
.
</p>
<div class="block-center" id="block-history">
	<?php if ($_smarty_tpl->tpl_vars['ordersReturn']->value&&count($_smarty_tpl->tpl_vars['ordersReturn']->value)) {?>
	<table id="order-list" class="table table-bordered footab">
		<thead>
			<tr>
				<th data-sort-ignore="true" class="first_item"><?php echo smartyTranslate(array('s'=>'Return'),$_smarty_tpl);?>
</th>
				<th data-sort-ignore="true" class="item"><?php echo smartyTranslate(array('s'=>'Order'),$_smarty_tpl);?>
</th>
				<th data-hide="phone" class="item"><?php echo smartyTranslate(array('s'=>'Package status'),$_smarty_tpl);?>
</th>
				<th data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Date issued'),$_smarty_tpl);?>
</th>
				<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item"><?php echo smartyTranslate(array('s'=>'Return slip'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['return'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['return']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordersReturn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['return']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['return']->iteration=0;
 $_smarty_tpl->tpl_vars['return']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['return']->key => $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->_loop = true;
 $_smarty_tpl->tpl_vars['return']->iteration++;
 $_smarty_tpl->tpl_vars['return']->index++;
 $_smarty_tpl->tpl_vars['return']->first = $_smarty_tpl->tpl_vars['return']->index === 0;
 $_smarty_tpl->tpl_vars['return']->last = $_smarty_tpl->tpl_vars['return']->iteration === $_smarty_tpl->tpl_vars['return']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['return']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['return']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } else { ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?>alternate_item<?php }?>">
					<td class="bold">
						<a 
						class="color-myaccount" 
						href="javascript:showOrder(0, <?php echo intval($_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-return',true), ENT_QUOTES, 'UTF-8', true);?>
');">
							<?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>

						</a>
					</td>
					<td class="history_method">
						<a 
						class="color-myaccount" 
						href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['return']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
');">
							<?php echo $_smarty_tpl->tpl_vars['return']->value['reference'];?>

						</a>
					</td>
					<td class="history_method" data-value="<?php echo $_smarty_tpl->tpl_vars['return']->value['state'];?>
">
						<span class="label label-info">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8', true);?>

						</span>
					</td>
					<td class="bold" data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['return']->value['date_add'],"/[\-\:\ ]/",'');?>
">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['return']->value['date_add'],'full'=>0),$_smarty_tpl);?>

					</td>
					<td class="history_invoice">
						<?php if ($_smarty_tpl->tpl_vars['return']->value['state']==2) {?>
							<a class="link-button" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
<?php $_tmp26=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-return',true,null,"id_order_return=".$_tmp26), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Order return'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
">
								<i class="icon-file-text"></i> <?php echo smartyTranslate(array('s'=>'Print out'),$_smarty_tpl);?>

							</a>
						<?php } else { ?>
							--
						<?php }?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<div id="block-order-detail" class="unvisible">&nbsp;</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You have no merchandise return authorizations.'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>

<ul class="footer_links clearfix">
	<li>
		<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
			<span>
				<i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Back to your account'),$_smarty_tpl);?>

			</span>
		</a>
	</li>
	<li>
		<a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">
			<span>
				<i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

			</span>
		</a>
	</li>
</ul>
<?php }} ?>
