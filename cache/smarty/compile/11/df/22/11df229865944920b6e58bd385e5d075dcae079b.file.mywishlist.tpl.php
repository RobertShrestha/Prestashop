<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:52
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\blockwishlist\views\templates\front\mywishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269054833e0033c8e0-65621634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11df229865944920b6e58bd385e5d075dcae079b' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\blockwishlist\\views\\templates\\front\\mywishlist.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269054833e0033c8e0-65621634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'id_customer' => 0,
    'token' => 0,
    'errors' => 0,
    'wishlists' => 0,
    'nbProducts' => 0,
    'nb' => 0,
    'n' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e00b67ca1_11952152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e00b67ca1_11952152')) {function content_54833e00b67ca1_11952152($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\modifier.date_format.php';
?>

<div id="mywishlist">
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
			<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockwishlist'),$_smarty_tpl);?>

		</a>
		<span class="navigation-pipe">
			<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

		</span>
		<span class="navigation_page">
			<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>

		</span>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</h1>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php if (intval($_smarty_tpl->tpl_vars['id_customer']->value)!=0) {?>
		<form method="post" class="std box" id="form_wishlist">
			<fieldset>
				<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'New wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</h3>
				<div class="form-group">
					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
					<label class="align_right" for="name">
						<?php echo smartyTranslate(array('s'=>'Name','mod'=>'blockwishlist'),$_smarty_tpl);?>

					</label>
					<input type="text" id="name" name="name" class="inputTxt form-control" value="<?php if (isset($_POST['name'])&&count($_smarty_tpl->tpl_vars['errors']->value)>0) {?><?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
				</div>
				<p class="submit">
                    <button 
                    id="submitWishlist" 
                    class="btn btn-default button button-medium" 
                    type="submit" 
                    name="submitWishlist">
                    	<span><?php echo smartyTranslate(array('s'=>'Save','mod'=>'blockwishlist'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
                    </button>
				</p>
			</fieldset>
		</form>
		<?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
			<div id="block-history" class="block-center">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="first_item"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
							<th class="item mywishlist_first"><?php echo smartyTranslate(array('s'=>'Qty','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
							<th class="item mywishlist_first"><?php echo smartyTranslate(array('s'=>'Viewed','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
							<th class="item mywishlist_second"><?php echo smartyTranslate(array('s'=>'Created','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
							<th class="item mywishlist_second"><?php echo smartyTranslate(array('s'=>'Direct Link','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
							<th class="last_item mywishlist_first"><?php echo smartyTranslate(array('s'=>'Delete','mod'=>'blockwishlist'),$_smarty_tpl);?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wishlists']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
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
							<tr id="wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
">
								<td style="width:200px;">
									<a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
');">
										<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'],30,'...'), ENT_QUOTES, 'UTF-8', true);?>

									</a>
								</td>
								<td class="bold align_center">
									<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(0, null, 0);?>
									<?php  $_smarty_tpl->tpl_vars['nb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nbProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nb']->key => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['nb']->value['id_wishlist']==$_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']) {?>
											<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(intval($_smarty_tpl->tpl_vars['nb']->value['nbProducts']), null, 0);?>
										<?php }?>
									<?php } ?>
									<?php if ($_smarty_tpl->tpl_vars['n']->value) {?>
										<?php echo intval($_smarty_tpl->tpl_vars['n']->value);?>

									<?php } else { ?>
										0
									<?php }?>
								</td>
								<td><?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['counter']);?>
</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date_add'],"%Y-%m-%d");?>
</td>
								<td>
									<a  href="javascript:;"  onclick="javascript:WishlistManage('block-order-detail', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
');">
										<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>

									</a>
								</td>
								<td class="wishlist_delete">
									<a 
									class="icon" 
									href="javascript:;" 
									onclick="return (WishlistDelete('wishlist_<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
', '<?php echo intval($_smarty_tpl->tpl_vars['wishlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_wishlist']);?>
', '<?php echo smartyTranslate(array('s'=>'Do you really want to delete this wishlist ?','mod'=>'blockwishlist','js'=>1),$_smarty_tpl);?>
'));">
										<i class="icon-remove"></i>
									</a>
								</td>
							</tr>
						<?php endfor; endif; ?>
					</tbody>
				</table>
			</div>
			<div id="block-order-detail">&nbsp;</div>
		<?php }?>
	<?php }?>
	<ul class="footer_links clearfix">
		<li>
			<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
				<span>
					<i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Back to Your Account','mod'=>'blockwishlist'),$_smarty_tpl);?>

				</span>
			</a>
		</li>
		<li>
			<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				<span>
					<i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home','mod'=>'blockwishlist'),$_smarty_tpl);?>

				</span>
			</a>
		</li>
	</ul>
</div>
<?php }} ?>
