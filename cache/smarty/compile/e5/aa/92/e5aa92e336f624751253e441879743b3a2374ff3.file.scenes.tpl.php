<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:34:29
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\scenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:982554833e25172a26-79813486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5aa92e336f624751253e441879743b3a2374ff3' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\scenes.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '982554833e25172a26-79813486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scenes' => 0,
    'scene' => 0,
    'base_dir' => 0,
    'largeSceneImageType' => 0,
    'product' => 0,
    'scene_key' => 0,
    'product_key' => 0,
    'imageIds' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'thumbSceneImageType' => 0,
    'content_dir' => 0,
    'thumbSceneSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e256d5666_74356584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e256d5666_74356584')) {function content_54833e256d5666_74356584($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\function.math.php';
?>
<?php if ($_smarty_tpl->tpl_vars['scenes']->value) {?>
<div id="scenes">
	<div>
		<?php  $_smarty_tpl->tpl_vars['scene'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scene']->_loop = false;
 $_smarty_tpl->tpl_vars['scene_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['scenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['scene']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['scene']->iteration=0;
 $_smarty_tpl->tpl_vars['scene']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['scene']->key => $_smarty_tpl->tpl_vars['scene']->value) {
$_smarty_tpl->tpl_vars['scene']->_loop = true;
 $_smarty_tpl->tpl_vars['scene_key']->value = $_smarty_tpl->tpl_vars['scene']->key;
 $_smarty_tpl->tpl_vars['scene']->iteration++;
 $_smarty_tpl->tpl_vars['scene']->index++;
 $_smarty_tpl->tpl_vars['scene']->first = $_smarty_tpl->tpl_vars['scene']->index === 0;
 $_smarty_tpl->tpl_vars['scene']->last = $_smarty_tpl->tpl_vars['scene']->iteration === $_smarty_tpl->tpl_vars['scene']->total;
?>
		<div class="screen_scene" id="screen_scene_<?php echo $_smarty_tpl->tpl_vars['scene']->value->id;?>
" style="background:transparent url(<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
img/scenes/<?php echo $_smarty_tpl->tpl_vars['scene']->value->id;?>
-scene_default.jpg); height:<?php echo $_smarty_tpl->tpl_vars['largeSceneImageType']->value['height'];?>
px; width:<?php echo $_smarty_tpl->tpl_vars['largeSceneImageType']->value['width'];?>
px;<?php if (!$_smarty_tpl->tpl_vars['scene']->first) {?> display:none;<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['product_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['scene']->value->products; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product_key']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['product']->value['id_image'])) {?>
				<?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['product']->value['id_image']), null, 0);?>
			<?php }?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" class="popover-button" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_width'];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_height'];?>
px; margin-left:<?php echo $_smarty_tpl->tpl_vars['product']->value['x_axis'];?>
px ;margin-top:<?php echo $_smarty_tpl->tpl_vars['product']->value['y_axis'];?>
px;" data-id_product_scene="<?php echo intval($_smarty_tpl->tpl_vars['scene_key']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_key']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
					<span style="margin-top:<?php echo smarty_function_math(array('equation'=>'a/2 -10','a'=>$_smarty_tpl->tpl_vars['product']->value['zone_height']),$_smarty_tpl);?>
px; margin-left:<?php echo smarty_function_math(array('equation'=>'a/2 -10','a'=>$_smarty_tpl->tpl_vars['product']->value['zone_width']),$_smarty_tpl);?>
px;"></span>
				</a>
				<div id="scene_products_cluetip_<?php echo $_smarty_tpl->tpl_vars['scene_key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['product_key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" style="display:none;">
                	<div class="product-image-container">
						<?php if (isset($_smarty_tpl->tpl_vars['imageIds']->value)) {?>
							<img class="img-responsive replace-2x" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="" />
						<?php }?>
                    </div>
					<p class="product-name"><span class="product_name"><?php echo $_smarty_tpl->tpl_vars['product']->value['details']->name;?>
</span></p>
					<div class="description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['details']->description_short),170,'...');?>
</div>
                    <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['product']->value['details']->show_price) {?>
					<div class="prices">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['details']->new)&&$_smarty_tpl->tpl_vars['product']->value['details']->new) {?><span class="new-box"><span class="new-label"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span></span><?php }?>
						<p class="price product-price"><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['details']->getPrice(false,$_smarty_tpl->tpl_vars['product']->value['details']->getDefaultAttribute($_smarty_tpl->tpl_vars['product']->value['id_product']))),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['details']->getPrice(true,$_smarty_tpl->tpl_vars['product']->value['details']->getDefaultAttribute($_smarty_tpl->tpl_vars['product']->value['id_product']))),$_smarty_tpl);?>
<?php }?></p>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['details']->on_sale) {?>
							<span class="sale-box"><span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale'),$_smarty_tpl);?>
</span></span>
						<?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']) {?>
							<span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
						<?php }?>
					</div>
					<?php }?>
				</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['scenes']->value[1])) {?>
	<div class="thumbs_banner" style="height:<?php echo $_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height'];?>
px;">
		<span class="space-keeper">
			<a class="prev" href="#" style="height:<?php echo smarty_function_math(array('equation'=>'a+2','a'=>$_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height']),$_smarty_tpl);?>
px;">&nbsp;</a>
		</span>
		<div id="scenes_list">
			<ul style="width:<?php echo smarty_function_math(array('equation'=>'(a*b + (a-1)*10)','a'=>count($_smarty_tpl->tpl_vars['scenes']->value),'b'=>$_smarty_tpl->tpl_vars['thumbSceneImageType']->value['width']),$_smarty_tpl);?>
px; height:<?php echo $_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height'];?>
px;">
			<?php  $_smarty_tpl->tpl_vars['scene'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scene']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['scene']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['scene']->iteration=0;
 $_smarty_tpl->tpl_vars['scene']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['scene']->key => $_smarty_tpl->tpl_vars['scene']->value) {
$_smarty_tpl->tpl_vars['scene']->_loop = true;
 $_smarty_tpl->tpl_vars['scene']->iteration++;
 $_smarty_tpl->tpl_vars['scene']->index++;
 $_smarty_tpl->tpl_vars['scene']->first = $_smarty_tpl->tpl_vars['scene']->index === 0;
 $_smarty_tpl->tpl_vars['scene']->last = $_smarty_tpl->tpl_vars['scene']->iteration === $_smarty_tpl->tpl_vars['scene']->total;
?>
				<li id="scene_thumb_<?php echo $_smarty_tpl->tpl_vars['scene']->value->id;?>
" style="<?php if (!$_smarty_tpl->tpl_vars['scene']->last) {?> padding-right:10px;<?php }?>">
					<a style="width:<?php echo $_smarty_tpl->tpl_vars['thumbSceneImageType']->value['width'];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height'];?>
px" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scene']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" data-id_scene="<?php echo intval($_smarty_tpl->tpl_vars['scene']->value->id);?>
" class="scene_thumb">
						<img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scene']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/scenes/thumbs/<?php echo $_smarty_tpl->tpl_vars['scene']->value->id;?>
-m_scene_default.jpg" width="<?php echo $_smarty_tpl->tpl_vars['thumbSceneSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['thumbSceneSize']->value['height'];?>
" />
					</a>
				</li>
		 	<?php } ?>
		 	</ul>
		</div>
		<span class="space-keeper">
			<a class="next" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" style="height:<?php echo smarty_function_math(array('equation'=>'a+2','a'=>$_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height']),$_smarty_tpl);?>
px;">&nbsp;</a>
		</span>
	</div>
	<?php }?>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'i18n_scene_close')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'i18n_scene_close'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Close','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'i18n_scene_close'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('li_width'=>(intval($_smarty_tpl->tpl_vars['thumbSceneImageType']->value['width'])+10)),$_smarty_tpl);?>

<?php }?><?php }} ?>
