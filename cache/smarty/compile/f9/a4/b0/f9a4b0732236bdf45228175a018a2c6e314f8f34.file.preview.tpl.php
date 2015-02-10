<?php /* Smarty version Smarty-3.1.19, created on 2015-01-24 10:50:19
         compiled from "E:\wamp\www\Emusic\prestashop\modules\blockfacebook\views\admin\_configure\preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1689554c3bf3b7f50d7-23561173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a4b0732236bdf45228175a018a2c6e314f8f34' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\blockfacebook\\views\\admin\\_configure\\preview.tpl',
      1 => 1406797006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1689554c3bf3b7f50d7-23561173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_js_url' => 0,
    'facebook_css_url' => 0,
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c3bf3b912de2_26898152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c3bf3b912de2_26898152')) {function content_54c3bf3b912de2_26898152($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['facebook_js_url']->value;?>
"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['facebook_css_url']->value;?>
" rel="stylesheet">
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div class="bootstrap panel">
	<div class="panel-heading">
		<i class="icon-picture-o"></i> <?php echo smartyTranslate(array('s'=>"Preview"),$_smarty_tpl);?>

	</div>
	<div id="fb-root"></div>
	<div id="facebook_block">
		<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
		<div class="facebook-fanbox">
			<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
