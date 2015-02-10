<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 13:04:58
         compiled from "E:\wamp\www\Emusic\prestashop\modules\themeconfigurator\views\templates\admin\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252945483454af225d4-93748406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b990173e735826400be7e5306550fecf801f9bf' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\themeconfigurator\\views\\templates\\admin\\new.tpl',
      1 => 1406797092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252945483454af225d4-93748406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5483454b105204_84442617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5483454b105204_84442617')) {function content_5483454b105204_84442617($_smarty_tpl) {?>

<div class="new-item">
	<div class="form-group">
		<button type="button" class="btn btn-default btn-lg button-new-item"><i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Add item','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</button>
	</div>
	<div class="item-container">
		<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlitems']->value['postAction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" enctype="multipart/form-data" class="item-form defaultForm  form-horizontal">
			<div class="well">
				<div class="language item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Language','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
							<span id="selected-language">
							<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang']==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['iso_code'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>
							<?php } ?>
							</span>
							<span class="caret">&nbsp;</span>
						</button>
						<ul class="languages dropdown-menu">
							<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
								<li id="lang-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="new-lang-flag"><a href="javascript:setLanguage(<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
, '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['iso_code'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
							<?php } ?>
						</ul>
						<input type="hidden" id="lang-id" name="id_lang" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
					</div>
				</div>
				<div class="title item-field form-group">
					<label class="control-label col-lg-3 "><?php echo smartyTranslate(array('s'=>'Title','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<input class="form-control" type="text" name="item_title"/>
					</div>
				</div>
				<div class="title_use item-field form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<div class="checkbox">
							<label class="control-label">
								<?php echo smartyTranslate(array('s'=>'Use title in front','mod'=>'themeconfigurator'),$_smarty_tpl);?>

								<input type="checkbox" name="item_title_use" value="1" />
							</label>
						</div>
					</div>
				</div>
				<div class="hook item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Hook','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<select class="form-control fixed-width-lg" name="item_hook" default="home">
							<option value="home">home</option>  
							<option value="top">top</option>
							<option value="left">left</option>
							<option value="right">right</option>
							<option value="footer">footer</option>  
						</select>
					</div>
				</div>
				<div class="image item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image','mod'=>'themeconfigurator'),$_smarty_tpl);?>
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
							<span class="input-group-addon"><?php echo smartyTranslate(array('s'=>'px'),$_smarty_tpl);?>
</span>
							<input name="item_img_w" type="text" maxlength="4"/>
						</div>
					</div>
				</div>
				<div class="image_h item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image height','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<div class="input-group fixed-width-lg">
							<span class="input-group-addon"><?php echo smartyTranslate(array('s'=>'px'),$_smarty_tpl);?>
</span>
							<input name="item_img_h" type="text" maxlength="4"/>
						</div>
					</div>
				</div>
				<div class="url item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'URL','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<input type="text" name="item_url" placeholder="http://" />
					</div>
				</div>
				<div class="target item-field form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<div class="checkbox">
							<label class="control-label">
								<?php echo smartyTranslate(array('s'=>'Target blank','mod'=>'themeconfigurator'),$_smarty_tpl);?>

								<input type="checkbox" name="item_target" value="1" />
							</label>
						</div>
					</div>
				</div>
				<div class="html item-field form-group">
					<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'HTML','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<textarea name="item_html" cols="65" rows="12"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-7 col-lg-offset-3">
						<input type="hidden" name="updateItem" value="" />
						<button type="button" class="btn btn-default button-new-item-cancel"><i class="icon-remove"></i> <?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</button>
						<button type="submit" name="newItem" class="button-new-item-save btn btn-default pull-right" onClick="this.form.submit();"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	function setLanguage(language_id, language_code) {
		$('#lang-id').val(language_id);
		$('#selected-language').html(language_code);
	}
</script>
<?php }} ?>
