<?php
/* Smarty version 3.1.33, created on 2019-09-26 03:19:02
  from 'D:\xamppp\htdocs\jms_shella\modules\ps_facetedsearch\views\templates\admin\_partials\categories-tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8c6666b7c4b7_84238177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3bb87b31afc548eb49141cea3d8ab6cebb1e33' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\categories-tree.tpl',
      1 => 1568881162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8c6666b7c4b7_84238177 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories used for this template:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <?php if (trim($_smarty_tpl->tpl_vars['categories_tree']->value) != '') {?>
      <?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

    <?php } else { ?>
      <div class="alert alert-warning">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories selection is disabled because you have no categories or you are in a "all shops" context.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
  </div>
</div>
<?php }
}
