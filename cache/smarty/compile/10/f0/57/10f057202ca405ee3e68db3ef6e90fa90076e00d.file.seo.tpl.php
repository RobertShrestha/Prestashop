<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:53
         compiled from "E:\wamp\www\Emusic\prestashop\admin\themes\default\template\controllers\products\seo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:699554833e01a96479-92698306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f057202ca405ee3e68db3ef6e90fa90076e00d' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin\\themes\\default\\template\\controllers\\products\\seo.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699554833e01a96479-92698306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_lang' => 0,
    'languages' => 0,
    'product' => 0,
    'language' => 0,
    'curent_shop_url' => 0,
    'default_language' => 0,
    'link' => 0,
    'default_form_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e01d78c32_60456121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e01d78c32_60456121')) {function content_54833e01d78c32_60456121($_smarty_tpl) {?>
<div id="product-seo" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Seo" />
	<h3><?php echo smartyTranslate(array('s'=>'SEO'),$_smarty_tpl);?>
</h3>
	<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_tab'=>"Seo"), 0);?>

	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>"meta_title",'type'=>"default",'multilang'=>"true"), 0);?>
</span></div>
		<label class="control-label col-lg-2" for="meta_title_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Public title for the product\'s page, and for search engines. Leave blank to use the product name.'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'The number of remaining characters is displayed to the left of the field.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Meta title'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'meta_title','input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_title,'maxchar'=>70), 0);?>

		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>"meta_description",'type'=>"default",'multilang'=>"true"), 0);?>
</span></div>		
		<label class="control-label col-lg-2" for="meta_description_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'This description will appear in search engines. You need a single sentence, shorter than 160 characters (including spaces).'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Meta description'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'meta_description','input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_description,'maxchar'=>160), 0);?>

		</div>
	</div>
	
	<div class="form-group hide">
		<div class="col-lg-1"><span class="pull-right"><?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>"meta_keywords",'type'=>"default",'multilang'=>"true"), 0);?>
</span></div>	
		<label class="control-label col-lg-2" for="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Keywords for search engines, separated by commas.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Meta keywords'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_keywords,'input_name'=>'meta_keywords'), 0);?>

		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field'=>"link_rewrite",'type'=>"seo_friendly_url",'multilang'=>"true"), 0);?>
</span></div>	
		<label class="control-label col-lg-2" for="link_rewrite_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'This is the human-readable URL, as generated from the product\'s name. You can change it if you want.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Friendly URL:'),$_smarty_tpl);?>

			</span>

		</label>
		<div class="col-lg-6">
				<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->link_rewrite,'input_name'=>'link_rewrite'), 0);?>

		</div>
		<div class="col-lg-2">
			<button type="button" class="btn btn-default" id="generate-friendly-url" onmousedown="updateFriendlyURLByName();"><i class="icon-random"></i> <?php echo smartyTranslate(array('s'=>'Generate'),$_smarty_tpl);?>
</button>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-9 col-lg-offset-3">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<div class="alert alert-warning translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
				<i class="icon-link"></i> <?php echo smartyTranslate(array('s'=>'The product link will look like this:'),$_smarty_tpl);?>
<br/>
				<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curent_shop_url']->value, ENT_QUOTES, 'UTF-8', true);?>
lang/<?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
<?php } else { ?>id_product<?php }?>-<span id="friendly-url_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->link_rewrite[$_smarty_tpl->tpl_vars['default_language']->value], ENT_QUOTES, 'UTF-8', true);?>
</span>.html</strong>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
	</div>
</div>
<script type="text/javascript">
	hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['default_form_language']->value;?>
);
</script>
<?php }} ?>
