<?php
/* Smarty version 3.1.33, created on 2019-09-26 23:08:48
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8d7d40de0f98_13176312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cdfb4ec01c7f108b4781d3aa4b0a15e221a8ad0' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1568877180,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8d7d40de0f98_13176312 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cart-wrap clearfix">
	<a class="preview-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<img alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" class="preview img-responsive" data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
	</a>
	<div class="description"> 
		<a class="product-link" href="" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

		</a>
		<div class="property-value">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'property_value', false, 'property');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['property']->value => $_smarty_tpl->tpl_vars['property_value']->value) {
?>
				<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property_value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div class="line">
			<div class="quantity-formated">
				<span class="quantity">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 
				</span>
				<span>x</span>
			</div>
			<div class="content_price">
				<span class="price new">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

				</span>
			</div>
		</div>
		<span class="remove_link">
			<a class="remove-from-cart" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-from-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" >
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			</a>
		</span>
	</div>
</div><?php }
}
