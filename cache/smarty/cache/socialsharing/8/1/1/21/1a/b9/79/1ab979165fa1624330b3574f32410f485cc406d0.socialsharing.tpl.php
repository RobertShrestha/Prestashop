<?php /*%%SmartyHeaderCode:148305489133c50c351-07399418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab979165fa1624330b3574f32410f485cc406d0' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1406797060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148305489133c50c351-07399418',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c3cc78e1bce2_59299464',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c3cc78e1bce2_59299464')) {function content_54c3cc78e1bce2_59299464($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Epiphone Gothic 1958 Explorer Satin Black http://localhost:8000/Emusic/prestashop/index.php?id_product=8&controller=product');">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://localhost:8000/Emusic/prestashop/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Share
				<!-- <img src="http://localhost:8000/Emusic/prestashop/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://localhost:8000/Emusic/prestashop/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
										<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click('http://localhost:8000/Emusic/prestashop/img/p/-thickbox_default.jpg');">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://localhost:8000/Emusic/prestashop/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>
