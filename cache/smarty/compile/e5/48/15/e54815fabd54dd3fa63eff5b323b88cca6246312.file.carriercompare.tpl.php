<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:53
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\carriercompare\template\carriercompare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322054833e0171b357-26782380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e54815fabd54dd3fa63eff5b323b88cca6246312' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\carriercompare\\template\\carriercompare.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322054833e0171b357-26782380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'countries' => 0,
    'country' => 0,
    'id_country' => 0,
    'zipcode' => 0,
    'new_base_dir' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'id_carrier' => 0,
    'id_state' => 0,
    'refresh_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e01c1fee3_28609099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e01c1fee3_28609099')) {function content_54833e01c1fee3_28609099($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
<form class="box" id="compare_shipping_form" method="post" action="#" >
	<fieldset id="compare_shipping">
		<h1 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'Estimate the cost of shipping & taxes.','mod'=>'carriercompare'),$_smarty_tpl);?>
</h1>
		<div class="form-group">
			<label for="id_country"><?php echo smartyTranslate(array('s'=>'Country','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<select name="id_country" id="id_country" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_country']->value==$_smarty_tpl->tpl_vars['country']->value['id_country']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
				<?php } ?>
			</select>
		</div>
		<div id="states" class="form-group" style="display: none;">
			<label for="id_state"><?php echo smartyTranslate(array('s'=>'State','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<select name="id_state" id="id_state" class="form-control">
				<option></option>
			</select>
		</div>
		<div class="form-group last">
			<label for="zipcode"><?php echo smartyTranslate(array('s'=>'Zip/postal code','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<input class="form-control" type="text" name="zipcode" id="zipcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zipcode']->value, ENT_QUOTES, 'UTF-8', true);?>
"/> (<?php echo smartyTranslate(array('s'=>'Needed for certain carriers.','mod'=>'carriercompare'),$_smarty_tpl);?>
)
		</div>
		<div id="carriercompare_errors" style="display: none;">
			<ul id="carriercompare_errors_list"></ul><br />
		</div>		
		<div id="SE_AjaxDisplay">
			<img src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
loader.gif" alt="Loading data" /><br />
			<p></p>
		</div>
		<div id="availableCarriers" style="display: none;">
			<table cellspacing="0" cellpadding="0" id="availableCarriers_table" class="table table-bordered">
				<thead>
					<tr>
						<th class="carrier_action first_item"></th>
						<th class="carrier_name item"><?php echo smartyTranslate(array('s'=>'Carrier','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
						<th class="carrier_infos item"><?php echo smartyTranslate(array('s'=>'Information','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
						<th class="carrier_price last_item"><?php echo smartyTranslate(array('s'=>'Price','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
					</tr>
				</thead>
				<tbody id="carriers_list">
					
				</tbody>
			</table>
		</div>
		<p class="alert alert-warning text-center" id="noCarrier" style="display: none;">
			<?php echo smartyTranslate(array('s'=>'No carrier has been made available for this selection.','mod'=>'carriercompare'),$_smarty_tpl);?>

		</p>
		<p class="SE_SubmitRefreshCard">
            <button class="btn btn-default button button-small" id="carriercompare_submit" type="button" name="carriercompare_submit">
            	<span><?php echo smartyTranslate(array('s'=>'Update cart','mod'=>'carriercompare'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
            </button>
            <button id="update_carriers_list" type="button" class="btn btn-default button button-small">
            	<span><?php echo smartyTranslate(array('s'=>'Update carrier list','mod'=>'carriercompare'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
            </button>
		</p>
	</fieldset>
</form>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('taxEnabled'=>$_smarty_tpl->tpl_vars['use_taxes']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('displayPrice'=>$_smarty_tpl->tpl_vars['priceDisplay']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencySign'=>html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8")),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyRate'=>floatval($_smarty_tpl->tpl_vars['currencyRate']->value)),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyFormat'=>intval($_smarty_tpl->tpl_vars['currencyFormat']->value)),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyBlank'=>intval($_smarty_tpl->tpl_vars['currencyBlank']->value)),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('id_carrier'=>intval($_smarty_tpl->tpl_vars['id_carrier']->value)),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('id_state'=>intval($_smarty_tpl->tpl_vars['id_state']->value)),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('SE_RefreshMethod'=>intval($_smarty_tpl->tpl_vars['refresh_method']->value)),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'SE_RedirectTS')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'SE_RedirectTS'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Refreshing the page and updating your cart...','mod'=>'carriercompare','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'SE_RedirectTS'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'SE_RefreshStateTS')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'SE_RefreshStateTS'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Checking available states...','mod'=>'carriercompare','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'SE_RefreshStateTS'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'SE_RetrievingInfoTS')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'SE_RetrievingInfoTS'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Retrieving information...','mod'=>'carriercompare','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'SE_RetrievingInfoTS'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtFree')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtFree'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Free!','mod'=>'carriercompare','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtFree'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
