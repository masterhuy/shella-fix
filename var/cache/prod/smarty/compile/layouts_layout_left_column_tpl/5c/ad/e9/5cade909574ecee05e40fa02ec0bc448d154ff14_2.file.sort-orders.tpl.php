<?php
/* Smarty version 3.1.33, created on 2019-09-26 23:07:08
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\catalog\_partials\sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8d7cdc28ee75_17788195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cade909574ecee05e40fa02ec0bc448d154ff14' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\catalog\\_partials\\sort-orders.tpl',
      1 => 1560222955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8d7cdc28ee75_17788195 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="inlude_sort_by">
	<span class="hidden-sm-down sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
:</span>
	<div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {
} else {
}?>  products-sort-order dropdown">
		<a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?></span>
			<i class="fa fa-angle-down"></i>
		</a>
		<div class="dropdown-menu">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
?>
			<a
				rel="nofollow"
				href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
				class="select-list <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
			>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

			</a>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div>
<?php }
}
