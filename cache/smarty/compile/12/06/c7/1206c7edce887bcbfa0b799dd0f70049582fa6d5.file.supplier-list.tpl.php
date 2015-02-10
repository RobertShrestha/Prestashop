<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 17:34:34
         compiled from "E:\wamp\www\Emusic\prestashop\themes\default-bootstrap\supplier-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2901754833e2a540994-65650106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1206c7edce887bcbfa0b799dd0f70049582fa6d5' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\themes\\default-bootstrap\\supplier-list.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2901754833e2a540994-65650106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbSuppliers' => 0,
    'errors' => 0,
    'supplier' => 0,
    'suppliers_list' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'link' => 0,
    'img_sup_dir' => 0,
    'mediumSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54833e2ad61ea6_15792531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54833e2ad61ea6_15792531')) {function content_54833e2ad61ea6_15792531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\function.math.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Suppliers:'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading product-listing"><?php echo smartyTranslate(array('s'=>'Suppliers:'),$_smarty_tpl);?>

	<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value==0) {?><?php echo smartyTranslate(array('s'=>'There are no suppliers.'),$_smarty_tpl);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is %d supplier.','sprintf'=>$_smarty_tpl->tpl_vars['nbSuppliers']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There are %d suppliers.','sprintf'=>$_smarty_tpl->tpl_vars['nbSuppliers']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
</h1>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	
<?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value>0) {?>
	<div class="content_sortPagiBar">
        <div class="sortPagiBar clearfix">
			<?php if (isset($_smarty_tpl->tpl_vars['supplier']->value)&&$_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0) {?>
				<ul class="display hidden-xs">
					<li class="display-title">
						<?php echo smartyTranslate(array('s'=>'View:'),$_smarty_tpl);?>

					</li>
					<li id="grid">
						<a rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>
">
							<i class="icon-th-large"></i><?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>

						</a>
					</li>
					<li id="list">
						<a rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>
">
							<i class="icon-th-list"></i><?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>

						</a>
					</li>
				</ul>
			<?php }?>
	        <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="top-pagination-content clearfix bottom-line">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div> <!-- .content_sortPagiBar --> 

    <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['suppliers_list']->value), null, 0);?>
    <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>


	<ul id="suppliers_list" class="list row">
		<?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['supplier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier']['total'] = $_smarty_tpl->tpl_vars['supplier']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier']['iteration']++;
?>
	    	<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

	        <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

	        <?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
	        <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, null, 0);?><?php }?>
			<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?> last-in-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> first-in-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0) {?>last-item-of-tablet-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1) {?>first-item-of-tablet-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['total']-$_smarty_tpl->tpl_vars['totModuloTablet']->value)) {?>last-tablet-line<?php }?>col-xs-12">
				<div class="mansup-container">
					<div class="row"> 
		            	<div class="left-side col-xs-12 col-sm-3">
							<!-- logo -->
							<div class="logo">
								<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
								<?php }?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_sup_dir']->value;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
								<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0) {?>
									</a>
								<?php }?>
							</div> <!-- .logo -->
						</div> <!-- .left-side -->

						<div class="middle-side col-xs-12 col-sm-5">	
							<h3>
								<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0) {?>
									<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
">
								<?php }?>
								<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['supplier']->value['name'],60,'...'), ENT_QUOTES, 'UTF-8', true);?>

								<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0) {?>
									</a>
								<?php }?>
							</h3>
							<div class="description">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['supplier']->value['description'],180,'...');?>

							</div>
			            </div><!-- .middle-side -->

						<div class="right-side col-xs-12 col-sm-4">
			            	<div class="right-side-content">
			                    <p class="product-counter">
			                        <?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0) {?>
			                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
">
			                        <?php }?>
			                        <?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']==1) {?><?php echo smartyTranslate(array('s'=>'%d product','sprintf'=>intval($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d products','sprintf'=>intval($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])),$_smarty_tpl);?>
<?php }?>
			                    	<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0) {?>
			                        	</a>
			                    	<?php }?>
			                    </p>
			                    <?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0) {?>
			                        <a class="btn btn-default button exclusive-medium" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo smartyTranslate(array('s'=>'View products'),$_smarty_tpl);?>
 <i class="icon-chevron-right right"></i></span></a>
			                    <?php }?>
			                </div>
						</div><!-- .right-side -->
					</div>
		        </div>
			</li>
		<?php } ?>
	</ul>
	<div class="content_sortPagiBar">
        <div class="bottom-pagination-content clearfix">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

        </div>
    </div>
<?php }?>
<?php }?>
<?php }} ?>
