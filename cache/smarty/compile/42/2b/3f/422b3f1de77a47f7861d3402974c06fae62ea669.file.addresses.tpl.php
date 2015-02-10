<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:30
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\addresses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1591254833dea508f05-26853386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '422b3f1de77a47f7861d3402974c06fae62ea669' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\addresses.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1591254833dea508f05-26853386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'multipleAddresses' => 0,
    'addresses_style' => 0,
    'address' => 0,
    'pattern' => 0,
    'addressKey' => 0,
    'key' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833dea852969_64442806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833dea852969_64442806')) {function content_54833dea852969_64442806($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
</h1>
<p><?php echo smartyTranslate(array('s'=>'Please configure your default billing and delivery addresses when placing an order. You may also add additional addresses, which can be useful for sending gifts or receiving an order at your office.'),$_smarty_tpl);?>
</p>
<?php if (isset($_smarty_tpl->tpl_vars['multipleAddresses']->value)&&$_smarty_tpl->tpl_vars['multipleAddresses']->value) {?>
<div class="addresses">
	<p><strong class="dark"><?php echo smartyTranslate(array('s'=>'Your addresses are listed below.'),$_smarty_tpl);?>
</strong></p>
	<p class="p-indent"><?php echo smartyTranslate(array('s'=>'Be sure to update your personal information if it has changed.'),$_smarty_tpl);?>
</p>
	<?php $_smarty_tpl->tpl_vars["adrs_style"] = new Smarty_variable($_smarty_tpl->tpl_vars['addresses_style']->value, null, 0);?>
	<div class="bloc_adresses row">
	<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multipleAddresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['address']->iteration=0;
 $_smarty_tpl->tpl_vars['address']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['address']->iteration++;
 $_smarty_tpl->tpl_vars['address']->index++;
 $_smarty_tpl->tpl_vars['address']->first = $_smarty_tpl->tpl_vars['address']->index === 0;
 $_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['address']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['address']->last;
?>
    	<div class="col-xs-12 col-sm-6 address">
			<ul class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?> alternate_item<?php } else { ?> item<?php }?> box">
                <li><h3 class="page-subheading"><?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
</h3></li>
                <?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address']->value['ordered']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['addressKey'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['pattern']->value), null, 0);?>
                    <li>
                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addressKey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                        <span <?php if (isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value])) {?> class="<?php echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"<?php }?>>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')], ENT_QUOTES, 'UTF-8', true);?>

                        </span>
                    <?php } ?>
                    </li>
                <?php } ?>
                <li class="address_update">
                <a class="btn btn-default button button-small" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_tmp1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a>
                <a class="btn btn-default button button-small" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_tmp2."&delete"), ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Are you sure?','js'=>1),$_smarty_tpl);?>
');" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
<i class="icon-remove right"></i></span></a></li>
            </ul>
        </div>
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?> 
	</div>
	<div class="bloc_adresses row">
	<?php }?>
	<?php } ?>
	</div>
</div>
<?php } else { ?>
	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No addresses are available.'),$_smarty_tpl);?>
&nbsp;<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>
</a></p>
<?php }?>
<div class="clearfix main-page-indent">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add an address'),$_smarty_tpl);?>
" class="btn btn-default button button-medium"><span><?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a>
</div>
<ul class="footer_links clearfix">
	<li><a class="btn btn-defaul button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><span><i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Back to your account'),$_smarty_tpl);?>
</span></a></li>
	<li><a class="btn btn-defaul button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><span><i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</span></a></li>
</ul><?php }} ?>
