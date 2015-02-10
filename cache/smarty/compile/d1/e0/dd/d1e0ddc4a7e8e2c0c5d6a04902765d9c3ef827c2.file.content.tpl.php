<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:56
         compiled from "E:\wamp\www\Emusic\prestashop\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245754833e045e64a8-57766152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1e0ddc4a7e8e2c0c5d6a04902765d9c3ef827c2' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245754833e045e64a8-57766152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e046aead0_55477710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e046aead0_55477710')) {function content_54833e046aead0_55477710($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
