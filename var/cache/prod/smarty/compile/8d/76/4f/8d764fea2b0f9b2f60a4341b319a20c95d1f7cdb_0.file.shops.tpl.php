<?php
/* Smarty version 3.1.33, created on 2019-09-26 03:19:02
  from 'D:\xamppp\htdocs\jms_shella\modules\ps_facetedsearch\views\templates\admin\_partials\shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8c6666b7c4b0_74528041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d764fea2b0f9b2f60a4341b319a20c95d1f7cdb' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\shops.tpl',
      1 => 1568881162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8c6666b7c4b0_74528041 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['asso_shops']->value)) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
