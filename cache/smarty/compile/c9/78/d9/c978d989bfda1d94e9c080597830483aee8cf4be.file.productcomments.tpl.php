<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:56
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\productcomments\productcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1472354833e04aab083-85035656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c978d989bfda1d94e9c080597830483aee8cf4be' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\productcomments\\productcomments.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1472354833e04aab083-85035656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'comment' => 0,
    'is_logged' => 0,
    'too_early' => 0,
    'allow_guests' => 0,
    'product' => 0,
    'productcomment_cover_image' => 0,
    'mediumSize' => 0,
    'criterions' => 0,
    'criterion' => 0,
    'id_product_comment_form' => 0,
    'productcomments_controller_url' => 0,
    'moderation_active' => 0,
    'productcomments_url_rewriting_activated' => 0,
    'secure_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e053e48b1_05963145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e053e48b1_05963145')) {function content_54833e053e48b1_05963145($_smarty_tpl) {?>
<div id="idTab5">
	<div id="product_comments_block_tab">
		<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?>
				<div class="comment row" itemprop="review" itemscope itemtype="http://schema.org/Review">
					<div class="comment_author col-sm-2">
						<span><?php echo smartyTranslate(array('s'=>'Grade','mod'=>'productcomments'),$_smarty_tpl);?>
&nbsp;</span>
						<div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['comment']->value['grade']<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
									<div class="star"></div>
								<?php } else { ?>
									<div class="star star_on"></div>
								<?php }?>
							<?php endfor; endif; ?>
            				<meta itemprop="worstRating" content = "0" />
							<meta itemprop="ratingValue" content = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['grade'], ENT_QUOTES, 'UTF-8', true);?>
" />
            				<meta itemprop="bestRating" content = "5" />
						</div>
						<div class="comment_author_infos">
							<strong itemprop="author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
							<meta itemprop="datePublished" content="<?php echo substr(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true),0,10);?>
" />
							<em><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
</em>
						</div>
					</div> <!-- .comment_author -->

					<div class="comment_details col-sm-10">
						<p itemprop="name" class="title_block">
							<strong><?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
</strong>
						</p>
						<p itemprop="reviewBody"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['content'], ENT_QUOTES, 'UTF-8', true));?>
</p>
						<ul>
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['total_advice']>0) {?>
								<li>
									<?php echo smartyTranslate(array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['comment']->value['total_useful'],$_smarty_tpl->tpl_vars['comment']->value['total_advice']),'mod'=>'productcomments'),$_smarty_tpl);?>

								</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
								<?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_advice']) {?>
								<li>
									<?php echo smartyTranslate(array('s'=>'Was this comment useful to you?','mod'=>'productcomments'),$_smarty_tpl);?>

									<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="1" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
">
										<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'productcomments'),$_smarty_tpl);?>
</span>
									</button>
									<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="0" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
">
										<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'productcomments'),$_smarty_tpl);?>
</span>
									</button>
								</li>
								<?php }?>
								<?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_report']) {?>
								<li>
									<span class="report_btn" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
">
										<?php echo smartyTranslate(array('s'=>'Report abuse','mod'=>'productcomments'),$_smarty_tpl);?>

									</span>
								</li>
								<?php }?>
							<?php }?>
						</ul>
					</div><!-- .comment_details -->

				</div> <!-- .comment -->
				<?php }?>
			<?php } ?>
			<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<p class="align_center">
				<a id="new_comment_tab_btn" class="btn btn-default button button-small open-comment-form" href="#new_comment_form">
					<span><?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl);?>
 !</span>
				</a>
			</p>
			<?php }?>
		<?php } else { ?>
			<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<p class="align_center">
				<a id="new_comment_tab_btn" class="btn btn-default button button-small open-comment-form" href="#new_comment_form">
					<span><?php echo smartyTranslate(array('s'=>'Be the first to write your review','mod'=>'productcomments'),$_smarty_tpl);?>
 !</span>
				</a>
			</p>
			<?php } else { ?>
			<p class="align_center"><?php echo smartyTranslate(array('s'=>'No customer comments for the moment.','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
			<?php }?>
		<?php }?>
	</div> <!-- #product_comments_block_tab -->
</div>

<!-- Fancybox -->
<div style="display: none;">
	<div id="new_comment_form">
		<form id="id_new_comment_form" action="#">
			<h2 class="page-subheading">
				<?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'productcomments'),$_smarty_tpl);?>

			</h2>
			<div class="row">
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value) {?>
					<div class="product clearfix  col-xs-12 col-sm-6">
						<img src="<?php echo $_smarty_tpl->tpl_vars['productcomment_cover_image']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
						<div class="product_desc">
							<p class="product_name">
								<strong><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</strong>
							</p>
							<?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>

						</div>
					</div>
				<?php }?>
				<div class="new_comment_form_content col-xs-12 col-sm-6">
					<h2><?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'productcomments'),$_smarty_tpl);?>
</h2>
					<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
						<ul></ul>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['criterions']->value)>0) {?>
						<ul id="criterions_list">
						<?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
?>
							<li>
								<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterion']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
:</label>
								<div class="star_content">
									<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="1" />
									<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="2" />
									<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="3" checked="checked" />
									<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="4" />
									<input class="star" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="5" />
								</div>
								<div class="clearfix"></div>
							</li>
						<?php } ?>
						</ul>
					<?php }?>
					<label for="comment_title">
						<?php echo smartyTranslate(array('s'=>'Title','mod'=>'productcomments'),$_smarty_tpl);?>
: <sup class="required">*</sup>
					</label>
					<input id="comment_title" name="title" type="text" value=""/>
					<label for="content">
						<?php echo smartyTranslate(array('s'=>'Comment','mod'=>'productcomments'),$_smarty_tpl);?>
: <sup class="required">*</sup>
					</label>
					<textarea id="content" name="content"></textarea>
					<?php if ($_smarty_tpl->tpl_vars['allow_guests']->value==true&&!$_smarty_tpl->tpl_vars['is_logged']->value) {?>
						<label>
							<?php echo smartyTranslate(array('s'=>'Your name','mod'=>'productcomments'),$_smarty_tpl);?>
: <sup class="required">*</sup>
						</label>
						<input id="commentCustomerName" name="customer_name" type="text" value=""/>
					<?php }?>
					<div id="new_comment_form_footer">
						<input id="id_product_comment_send" name="id_product" type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['id_product_comment_form']->value;?>
' />
						<p class="fl required"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
						<p class="fr">
							<button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-small">
								<span><?php echo smartyTranslate(array('s'=>'Send','mod'=>'productcomments'),$_smarty_tpl);?>
</span>
							</button>&nbsp;
							<?php echo smartyTranslate(array('s'=>'or','mod'=>'productcomments'),$_smarty_tpl);?>
&nbsp;
							<a class="closefb" href="#">
								<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'productcomments'),$_smarty_tpl);?>

							</a>
						</p>
						<div class="clearfix"></div>
					</div> <!-- #new_comment_form_footer -->
				</div>
			</div>
		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productcomments_controller_url'=>addcslashes($_smarty_tpl->tpl_vars['productcomments_controller_url']->value,'\'')),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('moderation_active'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['moderation_active']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productcomments_url_rewrite'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['productcomments_url_rewriting_activated']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('secure_key'=>$_smarty_tpl->tpl_vars['secure_key']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'confirm_report_message')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'confirm_report_message'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Are you sure that you want to report this comment?','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'confirm_report_message'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'productcomment_added')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_added'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your comment has been added!','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_added'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'productcomment_added_moderation')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_added_moderation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your comment has been added and will be available once approved by a moderator','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_added_moderation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'productcomment_title')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'New comment','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_title'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'productcomment_ok')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_ok'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'OK','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_ok'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
