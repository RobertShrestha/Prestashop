<?php /* Smarty version Smarty-3.1.19, created on 2015-01-28 04:36:50
         compiled from "E:\wamp\www\Emusic\prestashop\admin1914\themes\default\template\controllers\payment\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1063054c8adb22dc419-14655467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18dd824c8013423c388b4570b8801c2994a57944' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin1914\\themes\\default\\template\\controllers\\payment\\helpers\\view\\view.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
    'f4db45d49ce24c2afb4afe73d9b4d0187814a493' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin1914\\themes\\default\\template\\helpers\\view\\view.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
    '97406a335e00c6f98f37fbf2829708a2ac9b1d09' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin1914\\themes\\default\\template\\controllers\\payment\\restrictions.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1063054c8adb22dc419-14655467',
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
  'unifunc' => 'content_54c8adb274f267_15916023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8adb274f267_15916023')) {function content_54c8adb274f267_15916023($_smarty_tpl) {?>

<div class="leadin"></div>


	<?php if (!$_smarty_tpl->tpl_vars['shop_context']->value) {?>
		<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You have more than one shop and must select one to configure payment.'),$_smarty_tpl);?>
</div>
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['modules_list']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>

		<?php }?>
		<div class="alert alert-info">
			<?php echo smartyTranslate(array('s'=>'This is where you decide what payment modules are available for different variations like your customers\' currency, group, and country.'),$_smarty_tpl);?>

			<br />
			<?php echo smartyTranslate(array('s'=>'A check mark indicates you want the payment module available.'),$_smarty_tpl);?>

			<?php echo smartyTranslate(array('s'=>'If it is not checked then this means that the payment module is disabled.'),$_smarty_tpl);?>

			<br />
			<?php echo smartyTranslate(array('s'=>'Please make sure to click Save for each section.'),$_smarty_tpl);?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['display_restrictions']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
				<?php /*  Call merged included template "controllers/payment/restrictions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('controllers/payment/restrictions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1063054c8adb22dc419-14655467');
content_54c8adb23f5f37_02483596($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "controllers/payment/restrictions.tpl" */?>
			<?php } ?>
		<?php } else { ?>
			<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No payment module installed'),$_smarty_tpl);?>
</div>
		<?php }?>
	<?php }?>


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
<?php /* Smarty version Smarty-3.1.19, created on 2015-01-28 04:36:50
         compiled from "E:\wamp\www\Emusic\prestashop\admin1914\themes\default\template\controllers\payment\restrictions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54c8adb23f5f37_02483596')) {function content_54c8adb23f5f37_02483596($_smarty_tpl) {?>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="form_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
" class="form-horizontal">
	<div class="panel">
		<h3>
			<i class="<?php echo $_smarty_tpl->tpl_vars['list']->value['icon'];?>
"></i>
			<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>

		</h3>
		<p class="help-block"><?php echo $_smarty_tpl->tpl_vars['list']->value['desc'];?>
</p>
		<div class="row table-responsive clearfix ">
			<div class="overflow-y">
				<table class="table">
					<thead>
						<tr>
							<th style="width:40%"><span class="title_box"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span></th>
							<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active) {?>
									<th class="text-center">
										<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id']!='currency'||$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='checkbox') {?>
											<input type="hidden" id="checkedBox_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" value="checked"/>
											<a href="javascript:checkPaymentBoxes('<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
')">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>

										<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id']!='currency'||$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='checkbox') {?>
											</a>
										<?php }?>
									</th>
								<?php }?>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<tr>
							<td>
								<span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
							</td>
							<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['key_module'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['key_module']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active) {?>
									<td class="text-center">
										<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('null', null, 0);?>
										<?php if (!$_smarty_tpl->tpl_vars['item']->value['check_list'][$_smarty_tpl->tpl_vars['key_module']->value]) {?>
											
										<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['name_id']==='currency') {?>
											<?php if ($_smarty_tpl->tpl_vars['module']->value->currencies&&$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='checkbox') {?>
												<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('checkbox', null, 0);?>
											<?php } elseif ($_smarty_tpl->tpl_vars['module']->value->currencies&&$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='radio') {?>
												<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('radio', null, 0);?>
											<?php }?>
										<?php } else { ?>
											<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('checkbox', null, 0);?>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['type']->value!='null') {?>
											<input type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['list']->value['identifier']];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['check_list'][$_smarty_tpl->tpl_vars['key_module']->value]=='checked') {?>checked="checked"<?php }?>/>
										<?php } else { ?>
											<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['list']->value['identifier']];?>
"/>--
										<?php }?>
									</td>
								<?php }?>
							<?php } ?>
						</tr>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id']==='currency') {?>
						<tr>
							<td>
								<span><?php echo smartyTranslate(array('s'=>'Customer currency'),$_smarty_tpl);?>
</span>
							</td>
							<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active) {?>
									<td class="text-center">
										<?php if ($_smarty_tpl->tpl_vars['module']->value->currencies&&$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='radio') {?>
											<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="-1"<?php if (in_array(-1,$_smarty_tpl->tpl_vars['module']->value->{$_smarty_tpl->tpl_vars['list']->value['name_id']})) {?> checked="checked"
										<?php }?> />
										<?php } else { ?>
											--
										<?php }?>
									</td>
								<?php }?>
							<?php } ?>
						</tr>
						<tr>
							<td>
								<span><?php echo smartyTranslate(array('s'=>'Shop default currency'),$_smarty_tpl);?>
</span>
							</td>
							<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active) {?>
									<td class="text-center">
										<?php if ($_smarty_tpl->tpl_vars['module']->value->currencies&&$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='radio') {?>
											<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="-2"<?php if (in_array(-2,$_smarty_tpl->tpl_vars['module']->value->{$_smarty_tpl->tpl_vars['list']->value['name_id']})) {?> checked="checked"
										<?php }?> 
											/>
										<?php } else { ?>
											--
										<?php }?>
									</td>
								<?php }?>
							<?php } ?>
						</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-default pull-right" name="submitModule<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
">
				<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save restrictions'),$_smarty_tpl);?>

			</button>
		</div>
	</div>
</form>
<?php }} ?>
