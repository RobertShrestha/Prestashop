<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:58
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\referralprogram\views\templates\front\program.tpl" */ ?>
<?php /*%%SmartyHeaderCode:338154833e06274807-54644670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae85adc5a550af3b48499776928ed12b2910ba02' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\front\\program.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338154833e06274807-54644670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'error' => 0,
    'mails_exists' => 0,
    'mail' => 0,
    'invitation_sent' => 0,
    'nbInvitation' => 0,
    'revive_sent' => 0,
    'nbRevive' => 0,
    'activeTab' => 0,
    'discount' => 0,
    'canSendInvitations' => 0,
    'orderQuantity' => 0,
    'nbFriends' => 0,
    'lang_iso' => 0,
    'file' => 0,
    'pendingFriends' => 0,
    'pendingFriend' => 0,
    'subscribeFriends' => 0,
    'subscribeFriend' => 0,
    'base_dir' => 0,
    'img_ps_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e0767fdd3_88936339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e0767fdd3_88936339')) {function content_54833e0767fdd3_88936339($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my account','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'referralprogram'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo smartyTranslate(array('s'=>'Referral Program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
	<p class="alert alert-danger">
		<?php if ($_smarty_tpl->tpl_vars['error']->value=='conditions not valided') {?>
			<?php echo smartyTranslate(array('s'=>'You need to agree to the conditions of the referral program!','mod'=>'referralprogram'),$_smarty_tpl);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='email invalid') {?>
			<?php echo smartyTranslate(array('s'=>'At least one e-mail address is invalid!','mod'=>'referralprogram'),$_smarty_tpl);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='name invalid') {?>
			<?php echo smartyTranslate(array('s'=>'At least one first name or last name is invalid!','mod'=>'referralprogram'),$_smarty_tpl);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='email exists') {?>
			<?php echo smartyTranslate(array('s'=>'Someone with this e-mail address has already been sponsored!','mod'=>'referralprogram'),$_smarty_tpl);?>
: <?php  $_smarty_tpl->tpl_vars['mail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mails_exists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mail']->key => $_smarty_tpl->tpl_vars['mail']->value) {
$_smarty_tpl->tpl_vars['mail']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
 <?php } ?>
		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='no revive checked') {?>
			<?php echo smartyTranslate(array('s'=>'Please mark at least one checkbox','mod'=>'referralprogram'),$_smarty_tpl);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='cannot add friends') {?>
			<?php echo smartyTranslate(array('s'=>'Cannot add friends to database','mod'=>'referralprogram'),$_smarty_tpl);?>

		<?php }?>
	</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['invitation_sent']->value) {?>
	<p class="alert alert-success">
	<?php if ($_smarty_tpl->tpl_vars['nbInvitation']->value>1) {?>
		<?php echo smartyTranslate(array('s'=>'E-mails have been sent to your friends!','mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'An e-mail has been sent to your friend!','mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php }?>
	</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['revive_sent']->value) {?>
	<p class="alert alert-success">
	<?php if ($_smarty_tpl->tpl_vars['nbRevive']->value>1) {?>
		<?php echo smartyTranslate(array('s'=>'Reminder e-mails have been sent to your friends!','mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'A reminder e-mail has been sent to your friend!','mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php }?>
	</p>
<?php }?>
<ul class="nav nav-tabs" id="idTabs">
	<li class="active"><a data-toggle="tab" href="#idTab1" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['activeTab']->value=='sponsor') {?> active<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Sponsor my friends','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Sponsor my friends','mod'=>'referralprogram'),$_smarty_tpl);?>
</a></li>
	<li><a data-toggle="tab" href="#idTab2"  class="tab-pane <?php if ($_smarty_tpl->tpl_vars['activeTab']->value=='pending') {?> selected<?php }?>" title="<?php echo smartyTranslate(array('s'=>'List of pending friends','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Pending friends','mod'=>'referralprogram'),$_smarty_tpl);?>
</a></li>
	<li><a data-toggle="tab" href="#idTab3" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['activeTab']->value=='subscribed') {?> selected<?php }?>" title="<?php echo smartyTranslate(array('s'=>'List of friends I sponsored','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Friends I sponsored','mod'=>'referralprogram'),$_smarty_tpl);?>
</a></li>
</ul>
<div class="sheets tab-content">

	<div id="idTab1" class="tab-pane active">
		<p class="bold">
			<strong><?php echo smartyTranslate(array('s'=>'Get a discount of %1$s for you and your friends by recommending this Website.','sprintf'=>array($_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>
</strong>
		</p>
		<?php if ($_smarty_tpl->tpl_vars['canSendInvitations']->value) {?>
			<p>
				<?php echo smartyTranslate(array('s'=>'It\'s quick and it\'s easy. Just fill in the first name, last name, and e-mail address(es) of your friend(s) in the fields below.','mod'=>'referralprogram'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['orderQuantity']->value>1) {?>
					<?php echo smartyTranslate(array('s'=>'When one of them makes at least %d orders, ','sprintf'=>$_smarty_tpl->tpl_vars['orderQuantity']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'When one of them makes at least %d order, ','sprintf'=>$_smarty_tpl->tpl_vars['orderQuantity']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

				<?php }?>,
				<?php echo smartyTranslate(array('s'=>'he or she will receive a %1$s voucher and you will receive your own voucher worth %1$s.','sprintf'=>array($_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

			</p>
			<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" class="std">
				<table class="table table-bordered">
				<thead>
					<tr>
						<th class="first_item">&nbsp;</th>
						<th class="item"><?php echo smartyTranslate(array('s'=>'Last name','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
						<th class="item"><?php echo smartyTranslate(array('s'=>'First name','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
						<th class="last_item"><?php echo smartyTranslate(array('s'=>'E-mail','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['friends'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['name'] = 'friends';
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nbFriends']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['friends']['total']);
?>
					<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['friends']['index']%2) {?>item<?php } else { ?>alternate_item<?php }?>">
						<td class="align_right"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['friends']['iteration'];?>
</td>
						<td><input type="text" class="form-control" name="friendsLastName[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['friends']['index'];?>
]" size="14" value="<?php if (isset($_POST['friendsLastName'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['friends']['index']])) {?><?php echo htmlspecialchars($_POST['friendsLastName'][$_smarty_tpl->getVariable('smarty')->value['section']['friends']['index']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></td>
						<td><input type="text" class="form-control" name="friendsFirstName[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['friends']['index'];?>
]" size="14" value="<?php if (isset($_POST['friendsFirstName'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['friends']['index']])) {?><?php echo htmlspecialchars($_POST['friendsFirstName'][$_smarty_tpl->getVariable('smarty')->value['section']['friends']['index']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></td>
						<td><input type="text" class="form-control" name="friendsEmail[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['friends']['index'];?>
]" size="20" value="<?php if (isset($_POST['friendsEmail'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['friends']['index']])) {?><?php echo htmlspecialchars($_POST['friendsEmail'][$_smarty_tpl->getVariable('smarty')->value['section']['friends']['index']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></td>
					</tr>
					<?php endfor; endif; ?>
				</tbody>
				</table>
				<p class="bold">
					<strong><?php echo smartyTranslate(array('s'=>'Important: Your friends\' e-mail addresses will only be used in the referral program. They will never be used for other purposes.','mod'=>'referralprogram'),$_smarty_tpl);?>
</strong>
				</p>
				<p class="checkbox">
					<input type="checkbox" name="conditionsValided" id="conditionsValided" value="1" <?php if (isset($_POST['conditionsValided'])&&$_POST['conditionsValided']==1) {?>checked="checked"<?php }?> />
					<label for="conditionsValided"><?php echo smartyTranslate(array('s'=>'I agree to the terms of service and adhere to them unconditionally.','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','rules',array('height'=>'500','width'=>'400'),true), ENT_QUOTES, 'UTF-8', true);?>
" class="thickbox" title="<?php echo smartyTranslate(array('s'=>'Conditions of the referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Read conditions.','mod'=>'referralprogram'),$_smarty_tpl);?>
</a>
				</p>
				<p class="see_email">
					<?php echo smartyTranslate(array('s'=>'Preview','mod'=>'referralprogram'),$_smarty_tpl);?>
 
					<?php $_smarty_tpl->tpl_vars["file"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['lang_iso']->value)."/referralprogram-invitation.html", null, 0);?>
					<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','email',array('height'=>'500','width'=>'600','mail'=>$_tmp4),true), ENT_QUOTES, 'UTF-8', true);?>
" class="thickbox" title="<?php echo smartyTranslate(array('s'=>'Invitation e-mail','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'the default e-mail','mod'=>'referralprogram'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'that will be sent to your friend(s).','mod'=>'referralprogram'),$_smarty_tpl);?>

				</p>
				<p class="submit">
                    <button type="submit" id="submitSponsorFriends" name="submitSponsorFriends" class="btn btn-default button button-medium"><span><?php echo smartyTranslate(array('s'=>'Validate','mod'=>'referralprogram'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></button>
				</p>
			</form>
		<?php } else { ?>
			<p class="alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'To become a sponsor, you need to have completed at least','mod'=>'referralprogram'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['orderQuantity']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['orderQuantity']->value>1) {?><?php echo smartyTranslate(array('s'=>'orders','mod'=>'referralprogram'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'order','mod'=>'referralprogram'),$_smarty_tpl);?>
<?php }?>.
			</p>
		<?php }?>
	</div>

	<div id="idTab2" class="tab-pane">
	<?php if ($_smarty_tpl->tpl_vars['pendingFriends']->value&&count($_smarty_tpl->tpl_vars['pendingFriends']->value)>0) {?>
		<p>
			<?php echo smartyTranslate(array('s'=>'These friends have not yet placed an order on this Website since you sponsored them, but you can try again! To do so, mark the checkboxes of the friend(s) you want to remind, then click on the button "Remind my friend(s)"','mod'=>'referralprogram'),$_smarty_tpl);?>

		</p>
		<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" class="std">
			<table class="table table-bordered">
			<thead>
				<tr>
					<th class="first_item">&nbsp;</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Last name','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'First name','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'E-mail','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
					<th class="last_item"><b><?php echo smartyTranslate(array('s'=>'Last invitation','mod'=>'referralprogram'),$_smarty_tpl);?>
</b></th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['pendingFriend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pendingFriend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pendingFriends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['pendingFriend']->key => $_smarty_tpl->tpl_vars['pendingFriend']->value) {
$_smarty_tpl->tpl_vars['pendingFriend']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
?>
				<tr>
					<td>
						<input type="checkbox" name="friendChecked[<?php echo $_smarty_tpl->tpl_vars['pendingFriend']->value['id_referralprogram'];?>
]" id="friendChecked[<?php echo $_smarty_tpl->tpl_vars['pendingFriend']->value['id_referralprogram'];?>
]" value="1" />
					</td>
					<td>
						<label for="friendChecked[<?php echo $_smarty_tpl->tpl_vars['pendingFriend']->value['id_referralprogram'];?>
]"><?php echo substr($_smarty_tpl->tpl_vars['pendingFriend']->value['lastname'],0,22);?>
</label>
					</td>
					<td><?php echo substr($_smarty_tpl->tpl_vars['pendingFriend']->value['firstname'],0,22);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['pendingFriend']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['pendingFriend']->value['date_upd'],'full'=>1),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
			</tbody>
			</table>
			<p class="submit">
                <button type="submit" name="revive" id="revive" class="button_large btn btn-default"><?php echo smartyTranslate(array('s'=>'Remind my friend(s)','mod'=>'referralprogram'),$_smarty_tpl);?>
</button>
			</p>
		</form>
		<?php } else { ?>
			<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You have not sponsored any friends.','mod'=>'referralprogram'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>

	<div id="idTab3" class="tab-pane">
	<?php if ($_smarty_tpl->tpl_vars['subscribeFriends']->value&&count($_smarty_tpl->tpl_vars['subscribeFriends']->value)>0) {?>
		<p>
			<?php echo smartyTranslate(array('s'=>'Here are sponsored friends who have accepted your invitation:','mod'=>'referralprogram'),$_smarty_tpl);?>

		</p>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th class="first_item">&nbsp;</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Last name','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'First name','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'E-mail','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Inscription date','mod'=>'referralprogram'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['subscribeFriend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subscribeFriend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subscribeFriends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['subscribeFriend']->key => $_smarty_tpl->tpl_vars['subscribeFriend']->value) {
$_smarty_tpl->tpl_vars['subscribeFriend']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
?>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration'];?>
.</td>
				<td><?php echo substr($_smarty_tpl->tpl_vars['subscribeFriend']->value['lastname'],0,22);?>
</td>
				<td><?php echo substr($_smarty_tpl->tpl_vars['subscribeFriend']->value['firstname'],0,22);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subscribeFriend']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['subscribeFriend']->value['date_upd'],'full'=>1),$_smarty_tpl);?>
</td>
			</tr>
			<?php } ?>
		</tbody>
		</table>
	<?php } else { ?>
		<p class="alert alert-warning">
			<?php echo smartyTranslate(array('s'=>'No sponsored friends have accepted your invitation yet.','mod'=>'referralprogram'),$_smarty_tpl);?>

		</p>
	<?php }?>
	</div>
</div>

<ul class="footer_links clearfix">
	<li>
		<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to Your Account','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow">
		<span><i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Back to Your Account','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a>
	</li>
	<li><a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home','mod'=>'referralprogram'),$_smarty_tpl);?>
"><span><i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a></li>
</ul>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'ThickboxI18nClose')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ThickboxI18nClose'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Close','mod'=>'referralprogram','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ThickboxI18nClose'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'ThickboxI18nOrEscKey')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ThickboxI18nOrEscKey'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'or Esc key','mod'=>'referralprogram','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ThickboxI18nOrEscKey'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('tb_pathToImage'=>($_smarty_tpl->tpl_vars['img_ps_dir']->value).('loadingAnimation.gif')),$_smarty_tpl);?>

<?php }} ?>
