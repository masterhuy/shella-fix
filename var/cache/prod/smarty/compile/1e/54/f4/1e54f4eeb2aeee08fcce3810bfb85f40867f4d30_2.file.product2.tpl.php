<?php
/* Smarty version 3.1.33, created on 2019-09-26 23:07:08
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\catalog\_partials\miniatures\product2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8d7cdc240c70_70020048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e54f4eeb2aeee08fcce3810bfb85f40867f4d30' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\catalog\\_partials\\miniatures\\product2.tpl',
      1 => 1559726632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8d7cdc240c70_70020048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-miniature js-product-miniature product-preview product-box flex-box" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
	<div class="preview flexbox">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18733840635d8d7cdc219b77_22165801', 'product_thumbnail');
?>
				
	</div>

    <div class="product-info">
    	<div class="block-label">
		  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9401344515d8d7cdc219b70_55013875', 'product_flags');
?>
	
		</div>
    	<?php if (isset($_smarty_tpl->tpl_vars['jpb_categoryname']->value) && $_smarty_tpl->tpl_vars['jpb_categoryname']->value) {?>
		    <span class="categoryname">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['product']->value['id_category_default']),$_smarty_tpl ) );?>
">
				<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
			</span>
	    <?php }?>
	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_441246025d8d7cdc219b77_90925286', 'product_name');
?>

		    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_786556325d8d7cdc219b74_09062067', 'product_price_and_shipping');
?>

	    <div class="product_button">
			<button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>" class="ajax-add-to-cart product-btn cart-button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-token="<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value) && $_smarty_tpl->tpl_vars['static_token']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');
}?>">
				<span class="la la-spin la-spinner"></span>
				<span class="la la-check"></span>
				<span class="text-addcart">
					<i class="la la-cart-plus"></i>
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</span>		
				<span class="text-outofstock">
					<i class="la la-ban"></i>
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</span>								   
			</button>
		</div>
    </div>
   
</div><?php }
/* {block 'product_thumbnail'} */
class Block_18733840635d8d7cdc219b77_22165801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_18733840635d8d7cdc219b77_22165801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-image <?php if (isset($_smarty_tpl->tpl_vars['jpb_phover']->value) && $_smarty_tpl->tpl_vars['jpb_phover']->value == 'image_swap') {?>image_swap<?php } else { ?>image_blur<?php }?>">
			<img class="img-responsive product-img1 replace-2x"
			  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
			  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
			  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
			/>
			<?php if (isset($_smarty_tpl->tpl_vars['jpb_phover']->value) && $_smarty_tpl->tpl_vars['jpb_phover']->value == 'image_swap' && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?>
				<img class="img-responsive product-img2 replace-2x"
				  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
				  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['legend'], ENT_QUOTES, 'UTF-8');?>
"
				  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
				/>
			<?php }?>
		  </a>
		<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_9401344515d8d7cdc219b70_55013875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_9401344515d8d7cdc219b70_55013875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                	<span class="label label-discount discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php }?>
				<?php }?>
		   <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_441246025d8d7cdc219b77_90925286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_441246025d8d7cdc219b77_90925286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html' )), ENT_QUOTES, 'UTF-8');?>
" class="product-link"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
	    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_786556325d8d7cdc219b74_09062067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_786556325d8d7cdc219b74_09062067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
		          <div class="content_price">
		          	<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
		              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

		              <span class="old price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
		              <span class="from"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'from','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
		            <?php }?>
		          	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

		            <span class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
		            
		            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


		            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

		          </div>
		        <?php }?>
		    <?php
}
}
/* {/block 'product_price_and_shipping'} */
}
