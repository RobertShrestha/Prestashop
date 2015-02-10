<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:34:18
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\order-slip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1463754833e1a2e7039-29228643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af0d897dcc2b65df160921f1e268846bb183dab' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\order-slip.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1463754833e1a2e7039-29228643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'ordersSlip' => 0,
    'slip' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e1a8ba472_49727290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e1a8ba472_49727290')) {function content_54833e1a8ba472_49727290($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading bottom-indent">
	<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>

</h1>
<p class="info-title">
	<?php echo smartyTranslate(array('s'=>'Credit slips you have received after canceled orders'),$_smarty_tpl);?>
.
</p>
<div class="block-center" id="block-history">
	<?php if ($_smarty_tpl->tpl_vars['ordersSlip']->value&&count($_smarty_tpl->tpl_vars['ordersSlip']->value)) {?>
		<table id="order-list" class="table table-bordered footab">
			<thead>
				<tr>
					<th data-sort-ignore="true" class="first_item"><?php echo smartyTranslate(array('s'=>'Credit slip'),$_smarty_tpl);?>
</th>
					<th data-sort-ignore="true" class="item"><?php echo smartyTranslate(array('s'=>'Order'),$_smarty_tpl);?>
</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Date issued'),$_smarty_tpl);?>
</th>
					<th data-sort-ignore="true" data-hide="phone" class="last_item"><?php echo smartyTranslate(array('s'=>'View credit slip'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['slip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordersSlip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slip']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['slip']->iteration=0;
 $_smarty_tpl->tpl_vars['slip']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slip']->key => $_smarty_tpl->tpl_vars['slip']->value) {
$_smarty_tpl->tpl_vars['slip']->_loop = true;
 $_smarty_tpl->tpl_vars['slip']->iteration++;
 $_smarty_tpl->tpl_vars['slip']->index++;
 $_smarty_tpl->tpl_vars['slip']->first = $_smarty_tpl->tpl_vars['slip']->index === 0;
 $_smarty_tpl->tpl_vars['slip']->last = $_smarty_tpl->tpl_vars['slip']->iteration === $_smarty_tpl->tpl_vars['slip']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['slip']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['slip']->last;
?>
					<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } else { ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?>alternate_item<?php }?>">
						<td class="bold">
							<span class="color-myaccount">
								<?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>

							</span>
						</td>
						<td class="history_method">
							<a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail'), ENT_QUOTES, 'UTF-8', true);?>
');">
								<?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order'])),$_smarty_tpl);?>

							</a>
						</td>
						<td class="bold"  data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['slip']->value['date_add'],"/[\-\:\ ]/",'');?>
">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['slip']->value['date_add'],'full'=>0),$_smarty_tpl);?>

						</td>
						<td class="history_invoice">
							<a class="link-button" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
<?php $_tmp35=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-slip',true,null,"id_order_slip=".$_tmp35), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slip'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl);?>
">
								<i class="icon-file-text large"></i><?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>

							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<div id="block-order-detail" class="unvisible">&nbsp;</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You have not received any credit slips.'),$_smarty_tpl);?>
</p>
	<?php }?>
</div><!-- #block-history -->

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
