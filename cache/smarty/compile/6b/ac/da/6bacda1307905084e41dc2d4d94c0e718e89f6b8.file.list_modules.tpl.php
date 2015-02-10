<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:40
         compiled from "E:\wamp\www\Emusic\prestashop\admin\themes\default\template\controllers\modules_positions\list_modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3275754833df4dab275-48390093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bacda1307905084e41dc2d4d94c0e718e89f6b8' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin\\themes\\default\\template\\controllers\\modules_positions\\list_modules.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3275754833df4dab275-48390093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'can_move' => 0,
    'url_show_modules' => 0,
    'modules' => 0,
    'module' => 0,
    'display_key' => 0,
    'url_show_invisible' => 0,
    'hook_position' => 0,
    'url_submit' => 0,
    'hooks' => 0,
    'hook' => 0,
    'current' => 0,
    'token' => 0,
    'live_edit' => 0,
    'url_live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833df5b78d12_31439811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833df5b78d12_31439811')) {function content_54833df5b78d12_31439811($_smarty_tpl) {?>

<script type="text/javascript">
	var come_from = 'AdminModulesPositions';
</script>

<div></div>

<?php if (!$_smarty_tpl->tpl_vars['can_move']->value) {?>
					<p class="alert alert-warning">
						<?php echo smartyTranslate(array('s'=>'If you want to order/move the following data, please select a shop from the shop list.'),$_smarty_tpl);?>

					</p>
<?php }?>

<div class="row">
	<div class="col-lg-9">
		<div class="panel">
			<form class="form-inline well">
				<label><?php echo smartyTranslate(array('s'=>'Show'),$_smarty_tpl);?>
</label>
				<span>
					<select id="show_modules" onchange="autoUrl('show_modules', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_show_modules']->value, ENT_QUOTES, 'UTF-8', true);?>
')" class="filter fixed-width-lg">
						<option value="all"><?php echo smartyTranslate(array('s'=>'All modules'),$_smarty_tpl);?>
&nbsp;</option>
						<option>-</option>
						<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['module']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['module']->iteration++;
?>
							<option value="<?php echo intval($_smarty_tpl->tpl_vars['module']->value->id);?>
"<?php if ($_smarty_tpl->tpl_vars['display_key']->value==$_smarty_tpl->tpl_vars['module']->value->id) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->displayName, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</select>
				</span>
				<p class="checkbox">
					<label class="control-label" for="hook_position">
						<input type="checkbox" id="hook_position" onclick="autoUrlNoList('hook_position', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_show_invisible']->value, ENT_QUOTES, 'UTF-8', true);?>
')" <?php if ($_smarty_tpl->tpl_vars['hook_position']->value) {?>checked="checked"<?php }?> />
						<?php echo smartyTranslate(array('s'=>'Display non-positionable hooks'),$_smarty_tpl);?>

					</label>
				</p>
			</form>
			<div id="modulePosition">
				<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
<?php  $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hooks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->key => $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->_loop = true;
?>
					<section class="hook_panel">
						<a name="<?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
"></a>
						<header class="hook_panel_header">
							<span class="hook_name"><?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
</span>
							<!-- <span class="hook_title"><?php echo $_smarty_tpl->tpl_vars['hook']->value['title'];?>
</span> -->
							<span class="badge pull-right">
	<?php if ($_smarty_tpl->tpl_vars['hook']->value['module_count']&&$_smarty_tpl->tpl_vars['can_move']->value) {?>
								<input type="checkbox" id="Ghook<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
" onclick="hookCheckboxes(<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
, 0, this)"/>
	<?php }?>
								<?php echo $_smarty_tpl->tpl_vars['hook']->value['module_count'];?>
 <?php if ($_smarty_tpl->tpl_vars['hook']->value['module_count']>1) {?><?php echo smartyTranslate(array('s'=>'Modules'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Module'),$_smarty_tpl);?>
<?php }?>
							</span>

	<?php if (!empty($_smarty_tpl->tpl_vars['hook']->value['description'])) {?>
							<div class="hook_description"><?php echo $_smarty_tpl->tpl_vars['hook']->value['description'];?>
</div>
	<?php }?>
						</header>

	<?php if ($_smarty_tpl->tpl_vars['hook']->value['module_count']) {?>
						<section class="module_list">
						<ul class="list-unstyled<?php if (count($_smarty_tpl->tpl_vars['hook']->value['modules'])>1) {?> sortable<?php }?>">

						<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hook']->value['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['module']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['module']->key;
 $_smarty_tpl->tpl_vars['module']->iteration++;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['module']->value['instance'])) {?>
							<li id="<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
" class="module_list_item<?php if ($_smarty_tpl->tpl_vars['can_move']->value&&$_smarty_tpl->tpl_vars['hook']->value['module_count']>=2) {?> draggable<?php }?>">
								<div class="module_col_select">
									<input type="checkbox" id="mod<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
" class="hook<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
" onclick="hookCheckboxes(<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
, 1, this)" name="unhooks[]" value="<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->id;?>
"/>
								</div>
								<?php if (!$_smarty_tpl->tpl_vars['display_key']->value) {?>
								<div class="module_col_position<?php if ($_smarty_tpl->tpl_vars['can_move']->value&&$_smarty_tpl->tpl_vars['hook']->value['module_count']>=2) {?> dragHandle<?php }?>" id="td_<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->id;?>
">
									<span class="positions"><?php echo $_smarty_tpl->tpl_vars['module']->iteration;?>
</span>
									<?php if ($_smarty_tpl->tpl_vars['can_move']->value) {?>
									<div class="btn-group-vertical">
										<a class="btn btn-default btn-xs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_module=<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
&amp;id_hook=<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
&amp;direction=0&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;changePosition#<?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
">
											<i class="icon-chevron-up"></i>
										</a>

										<a class="btn btn-default btn-xs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_module=<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
&amp;id_hook=<?php echo intval($_smarty_tpl->tpl_vars['hook']->value['id_hook']);?>
&amp;direction=1&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;changePosition#<?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
">
											<i class="icon-chevron-down"></i>
										</a>
									</div>
									<?php }?>
								</div>
								<?php }?>
								<div class="module_col_icon">
									<img src="../modules/<?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->name;?>
/logo.png" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['module']->value['instance']->name);?>
" />
								</div>
								<div class="module_col_infos">
									<span class="module_name">
										<?php echo stripslashes($_smarty_tpl->tpl_vars['module']->value['instance']->displayName);?>
 <?php if ($_smarty_tpl->tpl_vars['module']->value['instance']->version) {?>
										<small class="text-muted">&nbsp;-&nbsp;v<?php if (intval($_smarty_tpl->tpl_vars['module']->value['instance']->version)==$_smarty_tpl->tpl_vars['module']->value['instance']->version) {?><?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['module']->value['instance']->version);?>
<?php } else { ?><?php echo floatval($_smarty_tpl->tpl_vars['module']->value['instance']->version);?>
<?php }?></small><?php }?>
									</span>
									<div class="module_description"><?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->description;?>
</div>
								</div>
								<div class="module_col_actions">
									<!-- <div class="lab_modules_positions" for="mod<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value['instance']->id;?>
"></div> -->
									<div class="btn-group">
										<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_module=<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
&amp;id_hook=<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
&amp;editGraft<?php if ($_smarty_tpl->tpl_vars['display_key']->value) {?>&amp;show_modules=<?php echo $_smarty_tpl->tpl_vars['display_key']->value;?>
<?php }?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
">
											<i class="icon-pencil"></i>
											<?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

										</a>
										<a class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>&nbsp;
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_module=<?php echo intval($_smarty_tpl->tpl_vars['module']->value['instance']->id);?>
&amp;id_hook=<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
&amp;deleteGraft<?php if ($_smarty_tpl->tpl_vars['display_key']->value) {?>&amp;show_modules=<?php echo $_smarty_tpl->tpl_vars['display_key']->value;?>
<?php }?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
">
													<i class="icon-minus-sign-alt"></i>
													<?php echo smartyTranslate(array('s'=>'Unhook'),$_smarty_tpl);?>

												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<?php }?>
						<?php } ?>
						</ul>
						</section>
	<?php } else { ?>
							<!-- <p><?php echo smartyTranslate(array('s'=>'No module was found for this hook.'),$_smarty_tpl);?>
</p> -->
	<?php }?>
					</section>
<?php } ?>
					<div id="unhook_button_position_bottom">
						<button type="submit" class="btn btn-default" name="unhookform">
							<i class="icon-minus-sign-alt"></i>
							<?php echo smartyTranslate(array('s'=>'Unhook the selection'),$_smarty_tpl);?>

						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel">
			<h3><i class="icon-eye-open"></i> <?php echo smartyTranslate(array('s'=>'Live Edit'),$_smarty_tpl);?>
</h3>
			<?php if ($_smarty_tpl->tpl_vars['live_edit']->value) {?>
				<p><?php echo smartyTranslate(array('s'=>'You have to select a shop to use Live Edit'),$_smarty_tpl);?>
</p>
			<?php } else { ?>
				<p><?php echo smartyTranslate(array('s'=>'Click here to be redirected to the front-office of your shop where you can move and delete modules directly.'),$_smarty_tpl);?>
</p>
					<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_live_edit']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
						<i class="icon-edit"></i>
						<?php echo smartyTranslate(array('s'=>'Run Live Edit'),$_smarty_tpl);?>

					</a>
			<?php }?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.sortable').sortable({
		forcePlaceholderSize: true
	}).bind('sortupdate', function(e, ui) {
		var ids = ui.item.attr('id').split('_');
		var way = (ui.start_index < ui.end_index)? 1 : 0;
		var data = ids[0]+'[]=';

		$.each(e.target.children, function(index, element) {
			data += '&'+ids[0]+'[]='+$(element).attr('id');
		});

		$.ajax({
			type: 'POST',
			headers: { "cache-control": "no-cache" },
			async: false,
			url: currentIndex + '&token=' + token + '&' + 'rand=' + new Date().getTime(),
			data: data + '&action=updatePositions&id_hook='+ids[0]+'&id_module='+ids[1]+'&way='+way+'&ajax=1' ,
			success: function(data) {
				start = 0;

				$.each(e.target.children, function(index, element) {
					$(element).find('.positions').html(++start);
				});

				showSuccessMessage(update_success_msg);
			}
		});
	});
</script><?php }} ?>
