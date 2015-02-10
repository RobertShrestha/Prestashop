<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:33:57
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\modules\productcomments\products-comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3154554833e05651818-80390058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab03644842b059cf62d85ca0e14a350e1d04d03' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\modules\\productcomments\\products-comparison.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3154554833e05651818-80390058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_ids_product' => 0,
    'id_product' => 0,
    'grades' => 0,
    'classname' => 0,
    'grade' => 0,
    'grade_id' => 0,
    'product_grades' => 0,
    'tab_grade' => 0,
    'list_product_average' => 0,
    'product_comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e05cecf89_06916193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e05cecf89_06916193')) {function content_54833e05cecf89_06916193($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\function.cycle.php';
?>

<tr class="comparison_header">
    <td class="feature-name td_empty">
    	<span><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'productcomments'),$_smarty_tpl);?>
</span>
    </td>
    <?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
    	<td class="product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
"></td>
    <?php } ?>
</tr>

<?php  $_smarty_tpl->tpl_vars['grade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grade']->_loop = false;
 $_smarty_tpl->tpl_vars['grade_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['grades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->key => $_smarty_tpl->tpl_vars['grade']->value) {
$_smarty_tpl->tpl_vars['grade']->_loop = true;
 $_smarty_tpl->tpl_vars['grade_id']->value = $_smarty_tpl->tpl_vars['grade']->key;
?>
    <tr>
    <?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

        <td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 feature-name">
        	<strong><?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
</strong>
        </td>
        <?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
        	<?php $_smarty_tpl->tpl_vars['tab_grade'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_grades']->value[$_smarty_tpl->tpl_vars['grade_id']->value], null, 0);?>
        	<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos ajax_block_product product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" align="center">
        		<?php if (isset($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&$_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value]) {?>
        			<div class="product-rating">
        				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['average'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['average']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['name'] = 'average';
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total']);
?>
        					<input class="auto-submit-star" disabled="disabled" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['grade_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['average']['index'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&round($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])!=0&&$_smarty_tpl->getVariable('smarty')->value['section']['average']['index']==round($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])) {?>checked="checked"<?php }?> />
        				<?php endfor; endif; ?>
        			</div>
        		<?php } else { ?>
        			-
        		<?php }?>
        	</td>
        <?php } ?>
    </tr>				
<?php } ?>

<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

<tr>
    <td  class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 feature-name">
    	<strong><?php echo smartyTranslate(array('s'=>'Average','mod'=>'productcomments'),$_smarty_tpl);?>
</strong>
    </td>
	<?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
		<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" align="center" >
			<?php if (isset($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&$_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value]) {?>
				<div class="product-rating">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['average'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['average']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['name'] = 'average';
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total']);
?>
						<input class="auto-submit-star" disabled="disabled" type="radio" name="average_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" <?php if (round($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])!=0&&$_smarty_tpl->getVariable('smarty')->value['section']['average']['index']==round($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])) {?>checked="checked"<?php }?> />
					<?php endfor; endif; ?>
				</div>
			<?php } else { ?>
				-
			<?php }?>
		</td>	
	<?php } ?>
</tr>

<tr>
<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos feature-name">&nbsp;</td>
    <?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
    	<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" align="center" >
    		<?php if (isset($_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&$_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value]) {?>
    			<a class="btn btn-default button button-small" href="#" data-id-product-comment="<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
" rel="#comments_<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
">
    				<span>
    					<?php echo smartyTranslate(array('s'=>'View comments','mod'=>'productcomments'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i>
    				</span>
    			</a>
    			<div style="display:none" id="comments_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
">   
    				<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>	
    					<div class="well well-sm">
    						<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>
 </strong>
    						<small class="date"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
</small>
                            <div class="comment_title"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['title'], ENT_QUOTES, 'UTF-8', true));?>
</div>
                            <div class="comment_content"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['content'], ENT_QUOTES, 'UTF-8', true));?>
</div>
    					</div>
    				<?php } ?>
    			</div>
    		<?php } else { ?>
    			-
    		<?php }?>
    	</td>	
    <?php } ?>
</tr>
<?php }} ?>
