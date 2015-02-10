<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:52
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\blockwishlist\views\templates\front\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1781154833e00b7a162-17616612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51afba683b6f6e234c6e91bc30e96262d06bff02' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\blockwishlist\\views\\templates\\front\\view.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1781154833e00b7a162-17616612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'current_wishlist' => 0,
    'wishlists' => 0,
    'wishlist' => 0,
    'products' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'product' => 0,
    'ajax' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e01c22113_48420022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e01c22113_48420022')) {function content_54833e01c22113_48420022($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\function.math.php';
?>
<div id="view_wishlist">
    <?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
        <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
        <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
        <?php echo $_smarty_tpl->tpl_vars['current_wishlist']->value['name'];?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <h1 class="page-heading bottom-indent">
        <?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

    </h1>
    <?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
        <p>
            <strong class="dark">
                <?php echo smartyTranslate(array('s'=>'Other wishlists of %1s %2s:','sprintf'=>array($_smarty_tpl->tpl_vars['current_wishlist']->value['firstname'],$_smarty_tpl->tpl_vars['current_wishlist']->value['lastname']),'mod'=>'blockwishlist'),$_smarty_tpl);?>

            </strong>
            <?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['total'] = $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
                <?php if ($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist']!=$_smarty_tpl->tpl_vars['current_wishlist']->value['id_wishlist']) {?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','view',array('token'=>$_smarty_tpl->tpl_vars['wishlist']->value['token'])), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['name'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['wishlist']->value['name'];?>

                    </a>
                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']) {?>
                        /
                    <?php }?>
                <?php }?>
            <?php } ?>
        </p>
    <?php }?>

    <div class="wlp_bought">
        <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
        <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

        <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

        <ul class="row wlp_bought_list">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
                <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

                <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, null, 0);?><?php }?>
                <li
                        id="wlp_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
"
                        class="ajax_block_product col-xs-12 col-sm-6 col-md-4 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?> last-in-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> first-in-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0) {?>last-item-of-tablet-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1) {?>first-item-of-tablet-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total']-$_smarty_tpl->tpl_vars['totModuloTablet']->value)) {?>last-tablet-line<?php }?>">
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <div class="product_image">
                                <a
                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                        title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                                    <img
                                            class="replace-2x img-responsive"
                                            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
"
                                            alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <div class="product_infos">
                                <p id="s_title" class="product-name">
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
                                        <a
                                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                                title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                                            <small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>
</small>
                                        </a>
                                    <?php }?>
                                </p>
                                <div class="wishlist_product_detail">
                                    <p class="form-group">
                                        <label for="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
">
                                            <?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl);?>
:
                                        </label>
                                        <input class="form-control grey" type="text"
                                               id="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
"
                                               value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
" size="3"/>
                                    </p>

                                    <p class="form-group selector1">
                                        <span><strong><?php echo smartyTranslate(array('s'=>'Priority','mod'=>'blockwishlist'),$_smarty_tpl);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['product']->value['priority_name'];?>
</span>
                                    </p>
                                    <div class="btn_action">
                                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['attribute_quantity']>=1||!isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_quantity']>=1) {?>
                                            <?php if (!$_smarty_tpl->tpl_vars['ajax']->value) {?>
                                                <form id="addtocart_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
"
                                                      action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
"
                                                      method="post">
                                                    <p class="hidden">
                                                        <input type="hidden" name="id_product"
                                                               value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"
                                                               id="product_page_product_id"/>
                                                        <input type="hidden" name="add" value="1"/>
                                                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/>
                                                        <input type="hidden" name="id_product_attribute"
                                                               id="idCombination"
                                                               value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
"/>
                                                    </p>
                                                </form>
                                            <?php }?>
                                            <a
                                                    href="javascript:void(0);"
                                                    class="button ajax_add_to_cart_button btn btn-default"
                                                    onclick="WishlistBuyProduct('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', this, <?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>
);"
                                                    title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
"
                                                    rel="nofollow">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <span class="button ajax_add_to_cart_button btn btn-default disabled">
												<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
											</span>
                                        <?php }?>
                                        <a
                                                class="button lnk_view btn btn-default"
                                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                                title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>
"
                                                rel="nofollow">
                                            <span><?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                                        </a>
                                    </div>
                                    <!-- .btn_action -->
                                </div>
                                <!-- .wishlist_product_detail -->
                            </div>
                            <!-- .product_infos -->
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div> <!-- #view_wishlist --><?php }} ?>
