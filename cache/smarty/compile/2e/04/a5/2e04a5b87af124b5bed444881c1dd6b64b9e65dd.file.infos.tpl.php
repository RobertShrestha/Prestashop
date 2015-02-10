<?php /* Smarty version Smarty-3.1.19, created on 2015-01-28 04:37:03
         compiled from "E:\wamp\www\Emusic\prestashop\modules\bankwire\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2754954c8adbfd011f5-53334051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e04a5b87af124b5bed444881c1dd6b64b9e65dd' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\bankwire\\views\\templates\\hook\\infos.tpl',
      1 => 1406796984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2754954c8adbfd011f5-53334051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c8adbfe09fb4_06479164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8adbfe09fb4_06479164')) {function content_54c8adbfe09fb4_06479164($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
