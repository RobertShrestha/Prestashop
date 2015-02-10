<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 22:44:59
         compiled from "E:\wamp\www\Emusic\prestashop\modules\socialsharing\views\templates\hook\socialsharing_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315935489133b5d82f8-78916847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d49a074555f198ead5b644d7845f0717f3773b2' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\socialsharing\\views\\templates\\hook\\socialsharing_header.tpl',
      1 => 1406797060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315935489133b5d82f8-78916847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_rewrite' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5489133b6801b0_19591907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489133b6801b0_19591907')) {function content_5489133b6801b0_19591907($_smarty_tpl) {?>
<meta property="og:title" content="" />
<meta property="og:type" content="product" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:email" content="" />
<meta property="og:phone_number" content="" />
<meta property="og:street-address" content="" />
<meta property="og:locality" content="" />
<meta property="og:country-name" content="" />
<meta property="og:postal-code" content="" />
<?php if (isset($_smarty_tpl->tpl_vars['link_rewrite']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value['id_image'])) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['link_rewrite']->value,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />
<?php }?><?php }} ?>
