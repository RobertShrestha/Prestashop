<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:50
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\blockwishlist\blockwishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1110854833dfeac10e4-53227036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a96cb3c89c1372c171dc4cb23574e31a4a7241' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\blockwishlist\\blockwishlist.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1110854833dfeac10e4-53227036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'wishlist_products' => 0,
    'product' => 0,
    'token' => 0,
    'wishlists' => 0,
    'wishlist' => 0,
    'id_wishlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833dff4e7875_80041034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833dff4e7875_80041034')) {function content_54833dff4e7875_80041034($_smarty_tpl) {?>
<div id="wishlist_block" class="block account">
	<h4 class="title_block">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
" rel="nofollow">
			<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

		</a>
	</h4>
	<div class="block_content">
		<div id="wishlist_block_list" class="expanded">
			<?php if ($_smarty_tpl->tpl_vars['wishlist_products']->value) {?>
				<dl class="products">
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlist_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
						<dt class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']) {?>last_item<?php } else { ?>item<?php }?>">
							<span class="quantity-formated">
								<span class="quantity"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
</span>x
							</span>
							<a class="cart_block_product_name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true);?>

							</a>
							<a class="ajax_cart_block_remove_link" href="javascript:;" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'remove this product from my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
, '0', '<?php if (isset($_smarty_tpl->tpl_vars['token']->value)) {?><?php echo $_smarty_tpl->tpl_vars['token']->value;?>
<?php }?>');">
								<i class="icon-remove-sign "></i>
							</a>
						</dt>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
							<dd class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']) {?>last_item<?php } else { ?>item<?php }?>">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail'),$_smarty_tpl);?>
">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</dd>
						<?php }?>
					<?php } ?>
				</dl>
			<?php } else { ?>
				<dl class="products no-products">
					<dt><?php echo smartyTranslate(array('s'=>'No products','mod'=>'blockwishlist'),$_smarty_tpl);?>
</dt>
					<dd></dd>
				</dl>
			<?php }?>
		</div> <!-- #wishlist_block_list -->

		<div class="lnk">
			<?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
				<div class="form-group selector1">
					<select name="wishlists" id="wishlists" class="form-control">
						<?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
 $_smarty_tpl->tpl_vars['wishlist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->index++;
 $_smarty_tpl->tpl_vars['wishlist']->first = $_smarty_tpl->tpl_vars['wishlist']->index === 0;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['first'] = $_smarty_tpl->tpl_vars['wishlist']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
"<?php if ($_smarty_tpl->tpl_vars['id_wishlist']->value==$_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist']||($_smarty_tpl->tpl_vars['id_wishlist']->value==false&&$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first'])) {?> selected="selected"<?php }?>>
									<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['wishlist']->value['name'],22,'...'), ENT_QUOTES, 'UTF-8', true);?>

								</option>
						<?php } ?>
					</select>
				</div>
			<?php }?>
			<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
				<span>
					<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i>
				</span>
			</a>
		</div> <!-- .lnk -->
	</div> <!-- .block_content -->
</div> <!-- #wishlist_block --><?php }} ?>
