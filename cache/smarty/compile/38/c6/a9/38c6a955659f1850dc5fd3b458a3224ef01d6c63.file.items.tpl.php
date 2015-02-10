<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 13:04:59
         compiled from "E:\wamp\www\Emusic\prestashop\modules\themeconfigurator\views\templates\admin\items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15195483454b121831-86888596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c6a955659f1850dc5fd3b458a3224ef01d6c63' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\themeconfigurator\\views\\templates\\admin\\items.tpl',
      1 => 1406797092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15195483454b121831-86888596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'lang' => 0,
    'langItems' => 0,
    'hook' => 0,
    'hookItems' => 0,
    'hItem' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5483454b3befe2_13855752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5483454b3befe2_13855752')) {function content_5483454b3befe2_13855752($_smarty_tpl) {?>

<ul class="nav nav-tabs">
	<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
		<li id="lang-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="lang-flag<?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang']==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?> active<?php }?>">
			<a href="#items-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-toggle="tab"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
		</li>
	<?php } ?>
</ul>
<div class="lang-items tab-content">
<?php  $_smarty_tpl->tpl_vars['langItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langItems']->_loop = false;
 $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langItems']->key => $_smarty_tpl->tpl_vars['langItems']->value) {
$_smarty_tpl->tpl_vars['langItems']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->value = $_smarty_tpl->tpl_vars['langItems']->key;
?>
	<div id="items-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="lang-content tab-pane <?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?>active<?php }?>" >
	<?php  $_smarty_tpl->tpl_vars['hookItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hookItems']->_loop = false;
 $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hookItems']->key => $_smarty_tpl->tpl_vars['hookItems']->value) {
$_smarty_tpl->tpl_vars['hookItems']->_loop = true;
 $_smarty_tpl->tpl_vars['hook']->value = $_smarty_tpl->tpl_vars['hookItems']->key;
?>
		<h4 class="hook-title"><?php echo smartyTranslate(array('s'=>'Hook','mod'=>'themeconfigurator'),$_smarty_tpl);?>
 "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"</h4>
		<?php if ($_smarty_tpl->tpl_vars['hookItems']->value) {?>
			<ul id="items" class="list-unstyled">
				<?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hookItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
?>
					<li id="item-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['id_item'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="item well">
						<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlitems']->value['postAction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" enctype="multipart/form-data" class="item-form defaultForm  form-horizontal">
							<div class="btn-group pull-right">
								<button class="btn btn-default button-edit">
									<span class="button-edit-edit"><i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Edit','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</span>
									<span class="button-edit-close hide"><i class="icon-remove"></i> <?php echo smartyTranslate(array('s'=>'Close','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</span>
								</button>
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="icon-caret-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlitems']->value['postAction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&removeItem&item_id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['id_item'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="removeItem" class="link-item-delete">
											<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete item','mod'=>'themeconfigurator'),$_smarty_tpl);?>

										</a>
									</li>
								</ul>
							</div>
							<span class="item-order"><?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_order']<=9) {?>0<?php }?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_order'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<span class="item-title"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
							<br>
							<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image'];?>
" rel="#comments_<?php echo $_smarty_tpl->tpl_vars['hItem']->value['id_item'];?>
" class="preview img-thumbnail" />
							<?php }?>
							<div class="item-container clearfix">
								<input type="hidden" name="id_lang" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
								<input type="hidden" name="item_id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['id_item'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
								<input type="hidden" name="item_order" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_order'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
								<div class="item-field form-group">
									<div class="col-lg-9 col-lg-offset-3">
										<div class="checkbox">
											<label class="control-label">
												<?php echo smartyTranslate(array('s'=>'Enable','mod'=>'themeconfigurator'),$_smarty_tpl);?>

												<input type="checkbox" name="item_active" value="1"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['active']==1) {?> checked="checked"<?php }?> />
											</label>
										</div>
									</div>
								</div>
								<div class="title item-field form-group">
									<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image title','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
									<div class="col-lg-7">
										<input type="text" name="item_title" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
									</div>
								</div>
								<div class="hook item-field form-group">
									<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Hook to which the image should be attached','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
									<div class="col-lg-7">
										<select name="item_hook" default="home" class="fixed-width-lg">
											<option value="home"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='home') {?> selected="selected"<?php }?>>home</option>  
											<option value="top"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='top') {?> selected="selected"<?php }?>>top</option>
											<option value="left"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='left') {?> selected="selected"<?php }?>>left</option>
											<option value="right"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='right') {?> selected="selected"<?php }?>>right</option>
											<option value="footer"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['hook']=='footer') {?> selected="selected"<?php }?>>footer</option>  
										</select>
									</div>
								</div>
								<div class="image item-field form-group">
									<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Load your image','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
									<div class="col-lg-7">
										<input type="file" name="item_img" />
									</div>
								</div>
								<div class="image_w item-field form-group">
									<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image width','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
									<div class="col-lg-7">
										<div class="input-group fixed-width-lg">
											<input name="item_img_w" type="text" maxlength="4" size="4" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['image_w'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
											<span class="input-group-addon"><?php echo smartyTranslate(array('s'=>'pixels'),$_smarty_tpl);?>
</span>
										</div>
									</div>
								</div>
								<div class="image_h item-field form-group">
									<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image height','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
									<div class="col-lg-7">
										<div class="input-group fixed-width-lg">
											<input name="item_img_h" type="text" maxlength="4" size="4" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['image_h'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
											<span class="input-group-addon"><?php echo smartyTranslate(array('s'=>'pixels'),$_smarty_tpl);?>
</span>
										</div>
									</div>
								</div>
								<div class="url item-field form-group">
									<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Target link','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
									<div class="col-lg-7">
										<input type="text" name="item_url" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
									</div>
								</div>
								<div class="target item-field form-group">
									<div class="col-lg-9 col-lg-offset-3">
										<div class="checkbox">
											<label class="control-label">
												<?php echo smartyTranslate(array('s'=>'Open link in a new tab/page','mod'=>'themeconfigurator'),$_smarty_tpl);?>

												<input type="checkbox" name="item_target" value="1"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1) {?> checked="checked"<?php }?> />
											</label>
										</div>
									</div>
								</div>
								<div class="html item-field form-group">
									<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Optional HTML code','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
									<div class="col-lg-7">
										<textarea name="item_html" cols="65" rows="12"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['html'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-7 col-lg-offset-3">
										<button type="button" class="btn btn-default button-item-edit-cancel" >
											<i class="icon-remove"></i> <?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'themeconfigurator'),$_smarty_tpl);?>

										</button>
										<input type="hidden" name="updateItem" value="" />
										<button type="submit" value="updateItem" class="btn btn-success button-save pull-right" onClick="this.form.submit();">
											<i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'themeconfigurator'),$_smarty_tpl);?>

										</button>
									</div>
								</div>
							</div>
						</form>
					</li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<div class="item">
				<span class="text-muted"><?php echo smartyTranslate(array('s'=>'No items available','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</span>
			</div>
		<?php }?>
	<?php } ?>
	</div>
<?php } ?>
</div>
<?php }} ?>
