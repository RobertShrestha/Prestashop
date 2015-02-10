<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:42
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\blockcategories\category-tree-branch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221354833df6a4f1c0-26307772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24600b2c71af83bf2589a8d5722b4bbcc39a6217' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\blockcategories\\category-tree-branch-top.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221354833df6a4f1c0-26307772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'last' => 0,
    'currentCategoryId' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833df6dc0dd2_40886647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833df6dc0dd2_40886647')) {function content_54833df6dc0dd2_40886647($_smarty_tpl) {?>

<li class="category_<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
<?php if (isset($_smarty_tpl->tpl_vars['last']->value)&&$_smarty_tpl->tpl_vars['last']->value=='true') {?> last<?php }?>">
	<h4>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['currentCategoryId']->value)&&$_smarty_tpl->tpl_vars['node']->value['id']==$_smarty_tpl->tpl_vars['currentCategoryId']->value) {?> class="selected"<?php }?> title="<?php echo htmlspecialchars(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['desc'])), ENT_QUOTES, 'UTF-8', true);?>
">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

		</a>
	</h4>
		
	<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
		<ul class="main-level-submenus">
			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['last']) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0);?>

				<?php }?>
			<?php } ?>
		</ul>		
	<?php }?>
</li>
<?php }} ?>
