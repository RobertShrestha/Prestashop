<?php /* Smarty version Smarty-3.1.19, created on 2014-12-06 13:02:11
         compiled from "E:\wamp\www\Emusic\prestashop\admin1914\themes\default\template\helpers\kpi\kpi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8110548344a3691f11-34414097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c427d770383ac2f5c415ae3f37877b974f2d2e6a' => 
    array (
      0 => 'E:\\wamp\\www\\Emusic\\prestashop\\admin1914\\themes\\default\\template\\helpers\\kpi\\kpi.tpl',
      1 => 1406796956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8110548344a3691f11-34414097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'id' => 0,
    'color' => 0,
    'icon' => 0,
    'chart' => 0,
    'title' => 0,
    'subtitle' => 0,
    'value' => 0,
    'source' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548344a3922243_66797932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548344a3922243_66797932')) {function content_548344a3922243_66797932($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\wamp\\www\\Emusic\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?>
<<?php if (isset($_smarty_tpl->tpl_vars['href']->value)&&$_smarty_tpl->tpl_vars['href']->value) {?>a style="display:block" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php } else { ?>div<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="box-stats <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<div class="kpi-content">
	<?php if (isset($_smarty_tpl->tpl_vars['icon']->value)&&$_smarty_tpl->tpl_vars['icon']->value) {?>
		<i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
"></i>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['chart']->value)&&$_smarty_tpl->tpl_vars['chart']->value) {?>
		<div class="boxchart-overlay">
			<div class="boxchart">
			</div>
		</div>
	<?php }?>
	
		<span class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<span cLass="subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<span class="value"><?php echo smarty_modifier_replace(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true),'&amp;','&');?>
</span>
	</div>
	
</<?php if (isset($_smarty_tpl->tpl_vars['href']->value)&&$_smarty_tpl->tpl_vars['href']->value) {?>a<?php } else { ?>div<?php }?>>

<?php if (isset($_smarty_tpl->tpl_vars['source']->value)&&$_smarty_tpl->tpl_vars['source']->value!='') {?>
<script>
	$.ajax({
		url: '<?php echo addslashes($_smarty_tpl->tpl_vars['source']->value);?>
' + '&rand=' + new Date().getTime(),
		dataType: 'json',
		type: 'GET',
		cache: false,
		headers: { 'cache-control': 'no-cache' },
		success: function(jsonData){
			if (!jsonData.has_errors)
			{
				if (jsonData.value != undefined)
					$('#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .value').html(jsonData.value);
				if (jsonData.data != undefined)
				{
					$("#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .boxchart svg").remove();
					set_d3_<?php echo addslashes(str_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
(jsonData.data);
				}
			}
		}
	});
</script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['chart']->value) {?>
<script>
	function set_d3_<?php echo addslashes(str_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
(jsonObject)
	{
		var data = new Array;
		$.each(jsonObject, function (index, value) {
			data.push(value);
		});
		var data_max = d3.max(data);

		var chart = d3.select("#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .boxchart").append("svg")
			.attr("class", "data_chart")
			.attr("width", data.length * 6)
			.attr("height", 45);

		var y = d3.scale.linear()
			.domain([0, data_max])
			.range([0, data_max * 45]);

		chart.selectAll("rect")
			.data(data)
			.enter().append("rect")
			.attr("y", function(d) { return 45 - d * 45 / data_max; })
			.attr("x", function(d, i) { return i * 6; })
			.attr("width", 4)
			.attr("height", y);
	}
	
	<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
		set_d3_<?php echo addslashes(str_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
($.parseJSON("<?php echo addslashes($_smarty_tpl->tpl_vars['data']->value);?>
"));
	<?php }?>
</script>
<?php }?><?php }} ?>
