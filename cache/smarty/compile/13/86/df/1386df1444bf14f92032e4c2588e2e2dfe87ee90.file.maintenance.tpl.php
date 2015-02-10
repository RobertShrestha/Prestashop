<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:37
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3118954833df155a530-14890946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1386df1444bf14f92032e4c2588e2e2dfe87ee90' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\maintenance.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3118954833df155a530-14890946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'css_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_MAINTENANCE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833df16a0145_86991313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833df16a0145_86991313')) {function content_54833df16a0145_86991313($_smarty_tpl) {?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,follow" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet" type="text/css" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css' />
	</head>
	<body>
    	<div class="container">
			<div id="maintenance">
			 <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="logo" /></div>
             <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

             <div id="message">
             	<h1 class="maintenance-heading"><?php echo smartyTranslate(array('s'=>'Maintenance mode'),$_smarty_tpl);?>
</h1>
				<?php echo smartyTranslate(array('s'=>'In order to perform website maintenance, our online store will be temporarily offline.'),$_smarty_tpl);?>

				<?php echo smartyTranslate(array('s'=>'We apologize for the inconvenience and ask that you please try again later.'),$_smarty_tpl);?>

			 </div>
		</div>
        </div>
	</body>
</html>
<?php }} ?>
