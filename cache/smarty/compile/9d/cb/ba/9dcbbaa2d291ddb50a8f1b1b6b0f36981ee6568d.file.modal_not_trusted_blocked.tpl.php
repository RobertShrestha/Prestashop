<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:39
         compiled from "E:\wamp\www\Emusic\prestashop\admin\themes\default\template\controllers\modules\modal_not_trusted_blocked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1915854833df308ae07-26102988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dcbbaa2d291ddb50a8f1b1b6b0f36981ee6568d' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin\\themes\\default\\template\\controllers\\modules\\modal_not_trusted_blocked.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1915854833df308ae07-26102988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833df311cb55_86016662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833df311cb55_86016662')) {function content_54833df311cb55_86016662($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['module_name'] = new Smarty_variable('<strong><span class="module-name-placeholder"></span></strong>', null, 0);?>
<div class="modal-body">
	<div class="alert alert-danger">
		<h4><?php echo smartyTranslate(array('s'=>'The module "%s" could not be securely identified by PrestaShop.','sprintf'=>$_smarty_tpl->tpl_vars['module_name']->value),$_smarty_tpl);?>
</h4>
		<p>
			<?php echo smartyTranslate(array('s'=>'This generally happens when the module is not distributed through our official marketplace, PrestaShop Addons - or when your server failed to communicate with PrestaShop Addons.'),$_smarty_tpl);?>

			<?php echo smartyTranslate(array('s'=>'Since you did not download the module from PrestaShop Addons, we cannot assert that the module is safe (i.e. that it is not adding some undisclosed functionality like backdoors, ads, hidden links, spam, etc.).'),$_smarty_tpl);?>

		</p>
	</div>
	<h3><?php echo smartyTranslate(array('s'=>'What Should I Do?'),$_smarty_tpl);?>
</h3>
	<p><?php echo smartyTranslate(array('s'=>'You can look for similar modules on the official marketplace.'),$_smarty_tpl);?>
 <a class="catalog-link" target="_blank" href="#"><?php echo smartyTranslate(array('s'=>'Click here to browse PrestaShop Addons.'),$_smarty_tpl);?>
</a></p>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Back to safety'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
