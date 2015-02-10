<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:51
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\blockwishlist\views\templates\front\managewishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:865354833dff59c3d9-84604569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89f3abf9687224d1374fe7682e12f18567b36534' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\blockwishlist\\views\\templates\\front\\managewishlist.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '865354833dff59c3d9-84604569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'refresh' => 0,
    'productsBoughts' => 0,
    'token_wish' => 0,
    'link' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'product' => 0,
    'id_wishlist' => 0,
    'bought' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e0032a072_30488048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e0032a072_30488048')) {function content_54833e0032a072_30488048($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\modifier.date_format.php';
?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['refresh']->value) {?>
        <div class="wishlistLinkTop">
        <a id="hideSendWishlist" class="button_account icon"  href="#" onclick="WishlistVisibility('wishlistLinkTop', 'SendWishlist'); return false;" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Close this wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
            <i class="icon-remove"></i>
        </a>
        <ul class="clearfix display_list">
            <li>
                <a  id="hideBoughtProducts" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="<?php echo smartyTranslate(array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl);?>

                </a>
                <a id="showBoughtProducts" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="<?php echo smartyTranslate(array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl);?>

                </a>
            </li>
            <?php if (count($_smarty_tpl->tpl_vars['productsBoughts']->value)) {?>
                <li>
                    <a id="hideBoughtProductsInfos" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="<?php echo smartyTranslate(array('s'=>'Hide products','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                        <?php echo smartyTranslate(array('s'=>"Hide bought product's info",'mod'=>'blockwishlist'),$_smarty_tpl);?>

                    </a>
                    <a id="showBoughtProductsInfos" class="button_account" href="#" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="<?php echo smartyTranslate(array('s'=>'Show products','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                        <?php echo smartyTranslate(array('s'=>"Show bought product's info",'mod'=>'blockwishlist'),$_smarty_tpl);?>

                    </a>
                </li>
            <?php }?>
        </ul>
        <p class="wishlisturl form-group">
            <label><?php echo smartyTranslate(array('s'=>'Permalink','mod'=>'blockwishlist'),$_smarty_tpl);?>
:</label>
            <input type="text" class="form-control" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','view',array('token'=>$_smarty_tpl->tpl_vars['token_wish']->value)), ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly"/>
        </p>
        <p class="submit">
            <a id="showSendWishlist" class="btn btn-default button button-small" href="#" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" title="<?php echo smartyTranslate(array('s'=>'Send this wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                <span><?php echo smartyTranslate(array('s'=>'Send this wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    <?php }?>
    <div class="wlp_bought">
        <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(3, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
        <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

        <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

        <ul class="row wlp_bought_list">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']++;
?>
                <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

                <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, null, 0);?><?php }?>
                <li id="wlp_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
"
                    class="col-xs-12 col-sm-4 col-md-3 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?> last-in-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> first-in-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0) {?>last-item-of-tablet-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1) {?>first-item-of-tablet-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total']-$_smarty_tpl->tpl_vars['totModuloTablet']->value)) {?>last-tablet-line<?php }?>">
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <div class="product_image">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                                    <img class="replace-2x img-responsive"  src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <div class="product_infos">
                                <a class="lnkdel" href="javascript:;" onclick="WishlistProductManage('wlp_bought', 'delete', '<?php echo $_smarty_tpl->tpl_vars['id_wishlist']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', $('#quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
').val(), $('#priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
').val());" title="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                                    <i class="icon-remove-sign"></i>
                                </a>

                                <p id="s_title" class="product-name">
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
                                        <small>
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </small>
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
                                        <input type="text" class="form-control grey" id="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
" size="3"/>
                                    </p>

                                    <p class="form-group">
                                        <label for="priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
">
                                            <?php echo smartyTranslate(array('s'=>'Priority','mod'=>'blockwishlist'),$_smarty_tpl);?>
:
                                        </label>
                                        <select id="priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" class="form-control grey">
                                            <option value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==0) {?> selected="selected"<?php }?>>
                                                <?php echo smartyTranslate(array('s'=>'High','mod'=>'blockwishlist'),$_smarty_tpl);?>

                                            </option>
                                            <option value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==1) {?> selected="selected"<?php }?>>
                                                <?php echo smartyTranslate(array('s'=>'Medium','mod'=>'blockwishlist'),$_smarty_tpl);?>

                                            </option>
                                            <option value="2"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==2) {?> selected="selected"<?php }?>>
                                                <?php echo smartyTranslate(array('s'=>'Low','mod'=>'blockwishlist'),$_smarty_tpl);?>

                                            </option>
                                        </select>
                                    </p>
                                </div>
                                <div class="btn_action">
                                    <a class="btn btn-default button button-small"  href="javascript:;" onclick="WishlistProductManage('wlp_bought_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', 'update', '<?php echo $_smarty_tpl->tpl_vars['id_wishlist']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', $('#quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
').val(), $('#priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
').val());" title="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Save','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['refresh']->value) {?>
        <form method="post" class="wl_send box unvisible" onsubmit="return (false);">
            <fieldset>
                <div class="required form-group">
                    <label for="email1"><?php echo smartyTranslate(array('s'=>'Email','mod'=>'blockwishlist'),$_smarty_tpl);?>
1 <sup>*</sup></label>
                    <input type="text" name="email1" id="email1" class="form-control"/>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int) 2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <div class="form-group">
                        <label for="email<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
"><?php echo smartyTranslate(array('s'=>'Email','mod'=>'blockwishlist'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</label>
                        <input type="text" name="email<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" id="email<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
"
                               class="form-control"/>
                    </div>
                <?php endfor; endif; ?>
                <div class="submit">
                    <button class="btn btn-default button button-small" type="submit" name="submitWishlist"
                            onclick="WishlistSend('wl_send', '<?php echo $_smarty_tpl->tpl_vars['id_wishlist']->value;?>
', 'email');">
                        <span><?php echo smartyTranslate(array('s'=>'Send','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
                    </button>
                </div>
                <p class="required">
                    <sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required field','mod'=>'blockwishlist'),$_smarty_tpl);?>

                </p>
            </fieldset>
        </form>
        <?php if (count($_smarty_tpl->tpl_vars['productsBoughts']->value)) {?>
            <table class="wlp_bought_infos unvisible table table-bordered table-responsive">
                <thead>
                <tr>
                    <th class="first_item"><?php echo smartyTranslate(array('s'=>'Product','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
                    <th class="item"><?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
                    <th class="item"><?php echo smartyTranslate(array('s'=>'Offered by','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
                    <th class="last_item"><?php echo smartyTranslate(array('s'=>'Date','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
                </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsBoughts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']++;
?>
                    <?php  $_smarty_tpl->tpl_vars['bought'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bought']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['bought']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bought']->key => $_smarty_tpl->tpl_vars['bought']->value) {
$_smarty_tpl->tpl_vars['bought']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['bought']->value['quantity']>0) {?>
                            <tr>
                                <td class="first_item">
									<span style="float:left;">
										<img
                                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'small'), ENT_QUOTES, 'UTF-8', true);?>
"
                                                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
									</span>			
									<span style="float:left;">
										<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],40,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
                                            <br/>
                                            <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>
</i>
                                        <?php }?>
									</span>
                                </td>
                                <td class="item align_center">
                                    <?php echo intval($_smarty_tpl->tpl_vars['bought']->value['quantity']);?>

                                </td>
                                <td class="item align_center">
                                    <?php echo $_smarty_tpl->tpl_vars['bought']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['bought']->value['lastname'];?>

                                </td>
                                <td class="last_item align_center">
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['bought']->value['date_add'],"%Y-%m-%d");?>

                                </td>
                            </tr>
                        <?php }?>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
        <?php }?>
    <?php }?>
<?php } else { ?>
    <p class="alert alert-warning">
        <?php echo smartyTranslate(array('s'=>'No products','mod'=>'blockwishlist'),$_smarty_tpl);?>

    </p>
<?php }?>
<?php }} ?>
