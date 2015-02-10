<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:34:33
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1833354833e29760f56-70445693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfeea07f8e628f4ae4e1c5ec0f1a1722a0dc3ef5' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\sitemap.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1833354833e29760f56-70445693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'PS_DISPLAY_BEST_SELLERS' => 0,
    'display_manufacturer_link' => 0,
    'PS_DISPLAY_SUPPLIERS' => 0,
    'display_supplier_link' => 0,
    'is_logged' => 0,
    'voucherAllowed' => 0,
    'base_dir_ssl' => 0,
    'categoriesTree' => 0,
    'child' => 0,
    'categoriescmsTree' => 0,
    'cms' => 0,
    'display_store' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e29e9e5c6_52039558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e29e9e5c6_52039558')) {function content_54833e29e9e5c6_52039558($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Sitemap'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading">
    <?php echo smartyTranslate(array('s'=>'Sitemap'),$_smarty_tpl);?>

</h1>
<div id="sitemap_content" class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="sitemap_block box">
    		<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Our offers'),$_smarty_tpl);?>
</h3>
    		<ul>
    			<li>
                    <a 
                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" 
                    title="<?php echo smartyTranslate(array('s'=>'View a new product'),$_smarty_tpl);?>
">
                        <?php echo smartyTranslate(array('s'=>'New products'),$_smarty_tpl);?>

                    </a>
                </li>
    			<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    			<?php if ($_smarty_tpl->tpl_vars['PS_DISPLAY_BEST_SELLERS']->value) {?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        title="<?php echo smartyTranslate(array('s'=>'View top-selling products'),$_smarty_tpl);?>
">
                            <?php echo smartyTranslate(array('s'=>'Best sellers'),$_smarty_tpl);?>

                        </a>
                    </li>
                <?php }?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        title="<?php echo smartyTranslate(array('s'=>'View products with a price drop'),$_smarty_tpl);?>
">
                            <?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>

                        </a>
                    </li>
    			<?php }?>
    			<?php if ($_smarty_tpl->tpl_vars['display_manufacturer_link']->value||$_smarty_tpl->tpl_vars['PS_DISPLAY_SUPPLIERS']->value) {?>
                    <li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        title="<?php echo smartyTranslate(array('s'=>'View a list of manufacturers'),$_smarty_tpl);?>
">
                            <?php echo smartyTranslate(array('s'=>'Manufacturers'),$_smarty_tpl);?>

                        </a>
                    </li>
                <?php }?>
    			<?php if ($_smarty_tpl->tpl_vars['display_supplier_link']->value||$_smarty_tpl->tpl_vars['PS_DISPLAY_SUPPLIERS']->value) {?>
                    <li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        title="<?php echo smartyTranslate(array('s'=>'View a list of suppliers'),$_smarty_tpl);?>
">
                            <?php echo smartyTranslate(array('s'=>'Suppliers'),$_smarty_tpl);?>

                        </a>
                    </li>
                <?php }?>
    		</ul>
	   </div>
    </div>
    <div class="col-xs-12 col-sm-6">
		<div class="sitemap_block box">
    		<h3 class="page-subheading">
                <?php echo smartyTranslate(array('s'=>'Your Account'),$_smarty_tpl);?>

            </h3>
    		<ul>
        		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow" 
                        title="<?php echo smartyTranslate(array('s'=>'Manage your customer account'),$_smarty_tpl);?>
">
                            <?php echo smartyTranslate(array('s'=>'Your Account'),$_smarty_tpl);?>

                        </a>
                    </li>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow" 
                        title="<?php echo smartyTranslate(array('s'=>'Manage your personal information'),$_smarty_tpl);?>
">
                            <?php echo smartyTranslate(array('s'=>'Personal information'),$_smarty_tpl);?>

                        </a>
                    </li>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow" 
                        title="<?php echo smartyTranslate(array('s'=>'View a list of my addresses'),$_smarty_tpl);?>
">
                            <?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>

                        </a>
                    </li>
        			<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                        <li>
                            <a 
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                            rel="nofollow" 
                            title="<?php echo smartyTranslate(array('s'=>'View a list of my discounts'),$_smarty_tpl);?>
">
                                <?php echo smartyTranslate(array('s'=>'Discounts'),$_smarty_tpl);?>

                            </a>
                        </li>
                        <?php }?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow"
                        title="<?php echo smartyTranslate(array('s'=>'View a list of my orders'),$_smarty_tpl);?>
" >
                            <?php echo smartyTranslate(array('s'=>'Order history'),$_smarty_tpl);?>

                        </a>
                    </li>
        		<?php } else { ?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow"
                        title="<?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
" >
                            <?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>

                        </a>
                    </li>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
"
                        rel="nofollow" 
                        title="<?php echo smartyTranslate(array('s'=>'Create new account'),$_smarty_tpl);?>
" >
                            <?php echo smartyTranslate(array('s'=>'Create new account'),$_smarty_tpl);?>

                        </a>
                    </li>
        		<?php }?>
        		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
        			<li>
                        <a 
                        href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
?mylogout" 
                        rel="nofollow"
                        title="<?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>
" >
                            <?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>

                        </a>
                    </li>
        		<?php }?>
    		</ul>
    	</div>
    </div>
</div>
<div id="listpage_content" class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="categTree box">
            <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Categories'),$_smarty_tpl);?>
</h3>
            <div class="tree_top">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoriesTree']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
            </div>
            <ul class="tree">
            <?php if (isset($_smarty_tpl->tpl_vars['categoriesTree']->value['children'])) {?>
                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriesTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
?>
                    <?php if ($_smarty_tpl->tpl_vars['child']->last) {?>
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

                    <?php }?>
                <?php } ?>
            <?php }?>
            </ul>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
		<div class="sitemap_block box">
            <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Pages'),$_smarty_tpl);?>
</h3>
            <ul>
            	<li>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoriescmsTree']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoriescmsTree']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoriescmsTree']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['categoriescmsTree']->value['children'])) {?>
                    <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriescmsTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['child']->value['children'])&&count($_smarty_tpl->tpl_vars['child']->value['children'])>0)||count($_smarty_tpl->tpl_vars['child']->value['cms'])>0) {?>
                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

                        <?php }?>
                    <?php } ?>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['cms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriescmsTree']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms']->key => $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->_loop = true;
?>
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>

                        </a>
                    </li>
                <?php } ?>
                <li>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
">
                        <?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['display_store']->value) {?>
                    <li class="last">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'List of our stores'),$_smarty_tpl);?>
">
                            <?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>

                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php }} ?>
