<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 22:02:26
         compiled from "E:\wamp\www\Emusic\prestashop\modules\blockbanner\blockbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8463548909424e70d0-36336658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe4dc5db83d8e56269f03821daecb450e4a3080' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\blockbanner\\blockbanner.tpl',
      1 => 1406796988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8463548909424e70d0-36336658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548909425d47d2_16231632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548909425d47d2_16231632')) {function content_548909425d47d2_16231632($_smarty_tpl) {?>
<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
	<img class="img-responsive" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="1170" height="65" />
<?php } else { ?>
	<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

<?php }?>
</a>
<?php }} ?>
