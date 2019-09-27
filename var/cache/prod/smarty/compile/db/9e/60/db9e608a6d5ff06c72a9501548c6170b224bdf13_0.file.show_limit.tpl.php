<?php
/* Smarty version 3.1.33, created on 2019-09-26 03:19:02
  from 'D:\xamppp\htdocs\jms_shella\modules\ps_facetedsearch\views\templates\admin\_functions\show_limit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8c6666b553b1_00707025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db9e608a6d5ff06c72a9501548c6170b224bdf13' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\modules\\ps_facetedsearch\\views\\templates\\admin\\_functions\\show_limit.tpl',
      1 => 1568881162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8c6666b553b1_00707025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'get_limit_select' => 
  array (
    'compiled_filepath' => 'D:\\xamppp\\htdocs\\jms_shella\\var\\cache\\prod\\smarty\\compile\\db\\9e\\60\\db9e608a6d5ff06c72a9501548c6170b224bdf13_0.file.show_limit.tpl.php',
    'uid' => 'db9e608a6d5ff06c72a9501548c6170b224bdf13',
    'call_name' => 'smarty_template_function_get_limit_select_21321580795d8c6666b2e2b7_90203447',
  ),
));
?>

<?php }
/* smarty_template_function_get_limit_select_21321580795d8c6666b2e2b7_90203447 */
if (!function_exists('smarty_template_function_get_limit_select_21321580795d8c6666b2e2b7_90203447')) {
function smarty_template_function_get_limit_select_21321580795d8c6666b2e2b7_90203447(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('element'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('name', ((string)$_smarty_tpl->tpl_vars['element']->value)."_filter_show_limit");?>
  <select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No limit','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
    <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 20+1 - (2) : 2-(20)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 2, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</option>
    <?php }
}
?>
  </select>
<?php
}}
/*/ smarty_template_function_get_limit_select_21321580795d8c6666b2e2b7_90203447 */
}
