<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:34
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\contact-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:410254833dee786b62-47712031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0048f7da2df967f9813de249f7f2a502e7470d95' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\contact-form.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410254833dee786b62-47712031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customerThread' => 0,
    'confirmation' => 0,
    'base_dir' => 0,
    'alreadySent' => 0,
    'request_uri' => 0,
    'contacts' => 0,
    'contact' => 0,
    'email' => 0,
    'PS_CATALOG_MODE' => 0,
    'is_logged' => 0,
    'orderList' => 0,
    'order' => 0,
    'orderedProductList' => 0,
    'id_order' => 0,
    'products' => 0,
    'product' => 0,
    'fileupload' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833deedeefc6_67443821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833deedeefc6_67443821')) {function content_54833deedeefc6_67443821($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h1 class="page-heading bottom-indent">
    <?php echo smartyTranslate(array('s'=>'Customer service'),$_smarty_tpl);?>
 - <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value)&&$_smarty_tpl->tpl_vars['customerThread']->value) {?><?php echo smartyTranslate(array('s'=>'Your reply'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Contact us'),$_smarty_tpl);?>
<?php }?>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
	<p class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Your message has been successfully sent to our team.'),$_smarty_tpl);?>
</p>
	<ul class="footer_links clearfix">
		<li>
            <a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">
                <span>
                    <i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

                </span>
            </a>
        </li>
	</ul>
<?php } elseif (isset($_smarty_tpl->tpl_vars['alreadySent']->value)) {?>
	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Your message has already been sent.'),$_smarty_tpl);?>
</p>
	<ul class="footer_links clearfix">
		<li>
            <a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">
                <span>
                    <i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

                </span>
            </a>
        </li>
	</ul>
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="contact-form-box" enctype="multipart/form-data">
		<fieldset>
        <h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'send a message'),$_smarty_tpl);?>
</h3>
        <div class="clearfix">
            <div class="col-xs-12 col-md-3">
                <div class="form-group selector1">
                    <label for="id_contact"><?php echo smartyTranslate(array('s'=>'Subject Heading'),$_smarty_tpl);?>
</label>
                <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['id_contact'])) {?>
                        <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['contact']->value['id_contact']==$_smarty_tpl->tpl_vars['customerThread']->value['id_contact']) {?>
                                <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly" />
                                <input type="hidden" name="id_contact" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
" />
                            <?php }?>
                        <?php } ?>
                <?php } else { ?>
                    <select id="id_contact" class="form-control" name="id_contact">
                        <option value="0"><?php echo smartyTranslate(array('s'=>'-- Choose --'),$_smarty_tpl);?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
                            <option value="<?php echo intval($_smarty_tpl->tpl_vars['contact']->value['id_contact']);?>
" <?php if (isset($_REQUEST['id_contact'])&&$_REQUEST['id_contact']==$_smarty_tpl->tpl_vars['contact']->value['id_contact']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                    </select>
                </div>
                    <p id="desc_contact0" class="desc_contact">&nbsp;</p>
                    <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
                        <p id="desc_contact<?php echo intval($_smarty_tpl->tpl_vars['contact']->value['id_contact']);?>
" class="desc_contact contact-title" style="display:none;">
                            <i class="icon-comment-alt"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['description'], ENT_QUOTES, 'UTF-8', true);?>

                        </p>
                    <?php } ?>
                <?php }?>
                <p class="form-group">
                    <label for="email"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
</label>
                    <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['email'])) {?>
                        <input class="form-control grey" type="text" id="email" name="from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerThread']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly" />
                    <?php } else { ?>
                        <input class="form-control grey validate" type="text" id="email" name="from" data-validate="isEmail" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                    <?php }?>
                </p>
                <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                    <?php if ((!isset($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])||$_smarty_tpl->tpl_vars['customerThread']->value['id_order']>0)) {?>
                        <div class="form-group selector1">
                            <label><?php echo smartyTranslate(array('s'=>'Order reference'),$_smarty_tpl);?>
</label>
                            <?php if (!isset($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])&&isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
                                <select name="id_order" class="form-control">
                                    <option value="0"><?php echo smartyTranslate(array('s'=>'-- Choose --'),$_smarty_tpl);?>
</option>
                                    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                                        <option value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value['value']);?>
"<?php if (intval($_smarty_tpl->tpl_vars['order']->value['selected'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php } ?>
                                </select>
                            <?php } elseif (!isset($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])&&empty($_smarty_tpl->tpl_vars['is_logged']->value)) {?>
                                <input class="form-control grey" type="text" name="id_order" id="id_order" value="<?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])&&intval($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])>0) {?><?php echo intval($_smarty_tpl->tpl_vars['customerThread']->value['id_order']);?>
<?php } else { ?><?php if (isset($_POST['id_order'])&&!empty($_POST['id_order'])) {?><?php echo htmlspecialchars($_POST['id_order'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" />
                            <?php } elseif (intval($_smarty_tpl->tpl_vars['customerThread']->value['id_order'])>0) {?>
                                <input class="form-control grey" type="text" name="id_order" id="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['customerThread']->value['id_order']);?>
" readonly="readonly" />
                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
                        <div class="form-group selector1">
                            <label class="unvisible"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</label>
                            <?php if (!isset($_smarty_tpl->tpl_vars['customerThread']->value['id_product'])) {?>
                                <?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_smarty_tpl->tpl_vars['id_order'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orderedProductList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['products']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
 $_smarty_tpl->tpl_vars['id_order']->value = $_smarty_tpl->tpl_vars['products']->key;
 $_smarty_tpl->tpl_vars['products']->index++;
 $_smarty_tpl->tpl_vars['products']->first = $_smarty_tpl->tpl_vars['products']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['products']->first;
?>
                                    <select name="id_product" id="<?php echo $_smarty_tpl->tpl_vars['id_order']->value;?>
_order_products" class="unvisible product_select form-control"<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?> style="display:none;"<?php }?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?> disabled="disabled"<?php }?>>
                                        <option value="0"><?php echo smartyTranslate(array('s'=>'-- Choose --'),$_smarty_tpl);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                            <option value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['value']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                <?php } ?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['customerThread']->value['id_product']>0) {?>
                                <input class="form-control grey" type="text" name="id_product" id="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['customerThread']->value['id_product']);?>
" readonly="readonly" />
                            <?php }?>
                        </div>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['fileupload']->value==1) {?>
                    <p class="form-group">
                        <label for="fileUpload"><?php echo smartyTranslate(array('s'=>'Attach File'),$_smarty_tpl);?>
</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                        <input type="file" name="fileUpload" id="fileUpload" class="form-control" />
                    </p>
                <?php }?>
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="form-group">
                    <label for="message"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</label>
                    <textarea class="form-control" id="message" name="message"><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true));?>
<?php }?></textarea>
                </div>
            </div>
        </div>
        <div class="submit">
            <button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium"><span><?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></button>
		</div>
	</fieldset>
</form>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'contact_fileDefaultHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No file selected','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileDefaultHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'contact_fileButtonHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Choose File','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileButtonHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
