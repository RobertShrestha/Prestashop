<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 13:05:23
         compiled from "E:\wamp\www\Emusic\prestashop\modules\themeconfigurator\views\templates\admin\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29329548345634a9523-26069198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf9ccb823d7602a9bad65ffa0bd18bdb7d8015d8' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\themeconfigurator\\views\\templates\\admin\\messages.tpl',
      1 => 1406797092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29329548345634a9523-26069198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54834563652001_40864274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54834563652001_40864274')) {function content_54834563652001_40864274($_smarty_tpl) {?>

<div id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-response" <?php if (!isset($_smarty_tpl->tpl_vars['text']->value)) {?>style="display:none;"<?php }?> class="message alert alert-<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value=='error') {?>danger<?php } else { ?>success<?php }?>">
	<div><?php if (isset($_smarty_tpl->tpl_vars['text']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></div>
</div><?php }} ?>
