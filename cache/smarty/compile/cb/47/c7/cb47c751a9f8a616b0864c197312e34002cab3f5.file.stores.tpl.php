<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:34:33
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\stores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1457254833e297fc500-99960918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb47c751a9f8a616b0864c197312e34002cab3f5' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\stores.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1457254833e297fc500-99960918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simplifiedStoresDiplay' => 0,
    'stores' => 0,
    'store' => 0,
    'img_store_dir' => 0,
    'id_store' => 0,
    'addresses_formated' => 0,
    'pattern' => 0,
    'addressKey' => 0,
    'key' => 0,
    'addresses_style' => 0,
    'img_ps_dir' => 0,
    'defaultLat' => 0,
    'defaultLong' => 0,
    'hasStoreIcon' => 0,
    'distance_unit' => 0,
    'searchUrl' => 0,
    'logo_store' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e29e5dd76_26675511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e29e5dd76_26675511')) {function content_54833e29e5dd76_26675511($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading">
	<?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>

</h1>

<?php if ($_smarty_tpl->tpl_vars['simplifiedStoresDiplay']->value) {?>
	<?php if (count($_smarty_tpl->tpl_vars['stores']->value)) {?>
		<p class="store-title">
			<strong class="dark">
				<?php echo smartyTranslate(array('s'=>'Here you can find our store locations. Please feel free to contact us:'),$_smarty_tpl);?>

			</strong>
		</p>
	    <table class="table table-bordered">
	    	<thead>
            	<tr>
                	<th class="logo"><?php echo smartyTranslate(array('s'=>'Logo'),$_smarty_tpl);?>
</th>
                    <th class="name"><?php echo smartyTranslate(array('s'=>'Store name'),$_smarty_tpl);?>
</th>
                    <th class="address"><?php echo smartyTranslate(array('s'=>'Store address'),$_smarty_tpl);?>
</th>
                    <th class="store-hours"><?php echo smartyTranslate(array('s'=>'Working hours'),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
			<?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
				<tr class="store-small">
					<td class="logo">
						<?php if ($_smarty_tpl->tpl_vars['store']->value['has_picture']) {?>
							<div class="store-image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_store_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store']->value['id_store'];?>
.jpg" alt="" />
							</div>
						<?php }?>
					</td>
					<td class="name">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

					</td>
		            <td class="address">
		            <?php $_smarty_tpl->tpl_vars["id_store"] = new Smarty_variable($_smarty_tpl->tpl_vars['store']->value['id_store'], null, 0);?>
		            <?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses_formated']->value[$_smarty_tpl->tpl_vars['id_store']->value]['ordered']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
	                    <?php $_smarty_tpl->tpl_vars['addressKey'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['pattern']->value), null, 0);?>
	                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addressKey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
	                        <span <?php if (isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value])) {?> class="<?php echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"<?php }?>>
	                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addresses_formated']->value[$_smarty_tpl->tpl_vars['id_store']->value]['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')], ENT_QUOTES, 'UTF-8', true);?>

	                        </span>
	                    <?php } ?>
	                <?php } ?>
	                	<br/>
						<?php if ($_smarty_tpl->tpl_vars['store']->value['phone']) {?><br/><?php echo smartyTranslate(array('s'=>'Phone:'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['store']->value['fax']) {?><br/><?php echo smartyTranslate(array('s'=>'Fax:'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['fax'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['store']->value['email']) {?><br/><?php echo smartyTranslate(array('s'=>'Email:'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['store']->value['note']) {?><br/><br/><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['note'], ENT_QUOTES, 'UTF-8', true));?>
<?php }?>
					</td>
		            <td class="store-hours">
						<?php if (isset($_smarty_tpl->tpl_vars['store']->value['working_hours'])) {?><?php echo $_smarty_tpl->tpl_vars['store']->value['working_hours'];?>
<?php }?>
		            </td>
				</tr>
			<?php } ?>
	    </table>
	<?php }?>
<?php } else { ?>
	<div id="map"></div>
	<p class="store-title">
		<strong class="dark">
			<?php echo smartyTranslate(array('s'=>'Enter a location (e.g. zip/postal code, address, city or country) in order to find the nearest stores.'),$_smarty_tpl);?>

		</strong>
	</p>
    <div class="store-content">
        <div class="address-input">
            <label for="addressInput"><?php echo smartyTranslate(array('s'=>'Your location:'),$_smarty_tpl);?>
</label>
            <input class="form-control grey" type="text" name="location" id="addressInput" value="<?php echo smartyTranslate(array('s'=>'Address, zip / postal code, city, state or country'),$_smarty_tpl);?>
" />
        </div>
        <div class="radius-input">
            <label for="radiusSelect"><?php echo smartyTranslate(array('s'=>'Radius:'),$_smarty_tpl);?>
</label> 
            <select name="radius" id="radiusSelect" class="form-control">
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" class="middle" alt="" id="stores_loader" />
        </div>
        <div>
            <button name="search_locations" class="button btn btn-default button-small">
            	<span>
            		<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i>
            	</span>
            </button>
        </div>
    </div>
    <div class="store-content-select selector3">
    	<select id="locationSelect" class="form-control">
    		<option>-</option>
    	</select>
    </div>

	<table id="stores-table" class="table table-bordered">
    	<thead>
			<tr>
                <th class="num">#</th>
                <th><?php echo smartyTranslate(array('s'=>'Store'),$_smarty_tpl);?>
</th>
                <th><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</th>
                <th><?php echo smartyTranslate(array('s'=>'Distance'),$_smarty_tpl);?>
</th>
            </tr>		
        </thead>
        <tbody>
        </tbody>
	</table>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('map'=>''),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('markers'=>array()),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('infoWindow'=>''),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('locationSelect'=>''),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('defaultLat'=>$_smarty_tpl->tpl_vars['defaultLat']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('defaultLong'=>$_smarty_tpl->tpl_vars['defaultLong']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('hasStoreIcon'=>$_smarty_tpl->tpl_vars['hasStoreIcon']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('distance_unit'=>$_smarty_tpl->tpl_vars['distance_unit']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_store_dir'=>$_smarty_tpl->tpl_vars['img_store_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('searchUrl'=>$_smarty_tpl->tpl_vars['searchUrl']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('logo_store'=>$_smarty_tpl->tpl_vars['logo_store']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_1')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No stores were found. Please try selecting a wider radius.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_1'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_2')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_2'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'store found -- see details:','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_2'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_3')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_3'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'stores found -- view all results:','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_3'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_4')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_4'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Phone:','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_4'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_5')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_5'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Get directions','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_5'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_6')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_6'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Not found','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_6'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
