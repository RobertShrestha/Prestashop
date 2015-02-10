<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 12:52:47
         compiled from "E:\wamp\www\Emusic\prestashop\modules\dashactivity\views\templates\hook\dashboard_zone_one.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216765483426f4692c9-50280093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f81e9abb6a44d2fd293babd185dcd35912343b6' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\modules\\dashactivity\\views\\templates\\hook\\dashboard_zone_one.tpl',
      1 => 1406797040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216765483426f4692c9-50280093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_push' => 0,
    'dashactivity_config_form' => 0,
    'DASHACTIVITY_VISITOR_ONLINE' => 0,
    'DASHACTIVITY_CART_ACTIVE' => 0,
    'gapi_mode' => 0,
    'link' => 0,
    'date_subtitle' => 0,
    'date_format' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5483426f5b5788_12079522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5483426f5b5788_12079522')) {function content_5483426f5b5788_12079522($_smarty_tpl) {?>
<section id="dashactivity" class="panel widget<?php if ($_smarty_tpl->tpl_vars['allow_push']->value) {?> allow_push<?php }?>">
	<div class="panel-heading">
		<i class="icon-time"></i> <?php echo smartyTranslate(array('s'=>'Activity overview','mod'=>'dashactivity'),$_smarty_tpl);?>

		<span class="panel-heading-action">
			<a class="list-toolbar-btn" href="#" onclick="toggleDashConfig('dashactivity'); return false;" title="configure">
				<i class="process-icon-configure"></i>
			</a>
			<a class="list-toolbar-btn" href="#" onclick="refreshDashboard('dashactivity'); return false;" title="refresh">
				<i class="process-icon-refresh"></i>
			</a>
		</span>
	</div>
	<section id="dashactivity_config" class="dash_config hide">
		<header><i class="icon-wrench"></i> <?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'dashactivity'),$_smarty_tpl);?>
</header>
		<?php echo $_smarty_tpl->tpl_vars['dashactivity_config_form']->value;?>

	</section>
	<section id="dash_live" class="loading">
		<ul class="data_list_large">
			<li>
				<span class="data_label size_l">
					<?php echo smartyTranslate(array('s'=>'Online Visitors','mod'=>'dashactivity'),$_smarty_tpl);?>

					<small class="text-muted"><br/>
						<?php echo smartyTranslate(array('s'=>'in the last %d minutes','sprintf'=>intval($_smarty_tpl->tpl_vars['DASHACTIVITY_VISITOR_ONLINE']->value),'mod'=>'dashactivity'),$_smarty_tpl);?>

					</small>
				</span>
				<span class="data_value size_xxl">
					<span id="online_visitor"></span>
				</span>
			</li>
			<li>
				<span class="data_label size_l">
					<?php echo smartyTranslate(array('s'=>'Active Shopping Carts','mod'=>'dashactivity'),$_smarty_tpl);?>

					<small class="text-muted"><br/>
						<?php echo smartyTranslate(array('s'=>'in the last %d minutes','sprintf'=>intval($_smarty_tpl->tpl_vars['DASHACTIVITY_CART_ACTIVE']->value),'mod'=>'dashactivity'),$_smarty_tpl);?>

					</small>
				</span>
				<span class="data_value size_xxl">
					<span id="active_shopping_cart"></span>
				</span>
			</li>
		</ul>			
	</section>
	<section id="dash_pending" class="loading">
		<header><i class="icon-time"></i> <?php echo smartyTranslate(array('s'=>'Currently Pending','mod'=>'dashactivity'),$_smarty_tpl);?>
</header>
		<ul class="data_list">
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Orders','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_l">
					<span id="pending_orders"></span>
				</span>
			</li>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Return/Exchanges','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_l">
					<span id="return_exchanges"></span>
				</span>
			</li>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Abandoned Carts','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_l">
					<span id="abandoned_cart"></span>
				</span>
			</li>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Out of Stock Products','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_l">
					<span id="products_out_of_stock"></span>
				</span>
			</li>
		</ul>
	</section>
	<section id="dash_notifications" class="loading">
		<header><i class="icon-exclamation-sign"></i> <?php echo smartyTranslate(array('s'=>'Notifications','mod'=>'dashactivity'),$_smarty_tpl);?>
</header>
		<ul class="data_list_vertical">
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'New Messages','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_l">
					<span id="new_messages"></span>
				</span>
			</li>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Product Reviews','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_l">
					<span id="product_reviews"></span>
				</span>
			</li>
		</ul>
	</section>
	<section id="dash_customers" class="loading">
		<header><i class="icon-user"></i> <?php echo smartyTranslate(array('s'=>'Customers & Newsletters','mod'=>'dashactivity'),$_smarty_tpl);?>
 <span class="subtitle small" id="customers-newsletters-subtitle"></span></header>
		<ul class="data_list">
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'New Customers','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_md">
					<span id="new_customers"></span>
				</span>
			</li>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'New Subscriptions','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_md">
					<span id="new_registrations"></span>
				</span>
			</li>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Total Subscribers','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_md">
					<span id="total_suscribers"></span>
				</span>
			</li>
		</ul>		
	</section>
	<section id="dash_traffic" class="loading">
		<header>
			<i class="icon-globe"></i> <?php echo smartyTranslate(array('s'=>'Traffic','mod'=>'dashactivity'),$_smarty_tpl);?>
 <span class="subtitle small" id="traffic-subtitle"></span>
		</header>
		<ul class="data_list">
			<?php if ($_smarty_tpl->tpl_vars['gapi_mode']->value) {?>
				<li>
					<span class="data_label">
						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&<?php echo $_smarty_tpl->tpl_vars['gapi_mode']->value;?>
=gapi"><img src="../modules/dashactivity/gapi-logo.gif" width="16" height="16" /> <?php echo smartyTranslate(array('s'=>"Link to your Google Analytics account",'mod'=>"dashactivity"),$_smarty_tpl);?>
</a>
					</span>
				</li>
			<?php }?>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Visits','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_md">
					<span id="visits"></span>
				</span>
			</li>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Unique Visitors','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<span class="data_value size_md">
					<span id="unique_visitors"></span>
				</span>
			</li>
			<li>
				<span class="data_label"><?php echo smartyTranslate(array('s'=>'Traffic Sources','mod'=>'dashactivity'),$_smarty_tpl);?>
</span>
				<ul class="data_list_small" id="dash_traffic_source">
				</ul>
				<div id="dash_traffic_chart2" class='chart with-transitions'>
					<svg></svg>
				</div>
			</li>
		</ul>		
	</section>
</section>
<script type="text/javascript">
	date_subtitle = "<?php echo $_smarty_tpl->tpl_vars['date_subtitle']->value;?>
";
	date_format   = "<?php echo $_smarty_tpl->tpl_vars['date_format']->value;?>
";
</script>
<?php }} ?>
