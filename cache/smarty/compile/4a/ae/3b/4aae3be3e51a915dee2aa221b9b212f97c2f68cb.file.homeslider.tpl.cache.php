<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 13:06:17
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\homeslider\homeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2916054834599d043c0-51370705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aae3be3e51a915dee2aa221b9b212f97c2f68cb' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\homeslider\\homeslider.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2916054834599d043c0-51370705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54834599e171d0_91833758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54834599e171d0_91833758')) {function content_54834599e171d0_91833758($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
<!-- Module HomeSlider -->
    <?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)) {?>
		<div id="homepage-slider">
			<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value[0])&&isset($_smarty_tpl->tpl_vars['homeslider_slides']->value[0]['sizes'][1])) {?><?php $_smarty_tpl->_capture_stack[0][] = array('height', null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['homeslider_slides']->value[0]['sizes'][1];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
			<ul id="homeslider"<?php if (isset(Smarty::$_smarty_vars['capture']['height'])&&Smarty::$_smarty_vars['capture']['height']) {?> style="max-height:<?php echo Smarty::$_smarty_vars['capture']['height'];?>
px;"<?php }?>>
				<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
						<li class="homeslider-container">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."homeslider/images/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
"<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['size'])&&$_smarty_tpl->tpl_vars['slide']->value['size']) {?> <?php echo $_smarty_tpl->tpl_vars['slide']->value['size'];?>
<?php } else { ?> width="100%" height="100%"<?php }?> alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
							</a>
							<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['description'])&&trim($_smarty_tpl->tpl_vars['slide']->value['description'])!='') {?>
								<div class="homeslider-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
							<?php }?>
						</li>
					<?php }?>
				<?php } ?>
			</ul>
		</div>
	<?php }?>
<!-- /Module HomeSlider -->
<?php }?><?php }} ?>
