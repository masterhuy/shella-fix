<?php
/* Smarty version 3.1.33, created on 2019-09-26 23:08:48
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\modules\jmspagebuilder\views\templates\hook\addonhtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8d7d40ca8796_57610084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '567ba9e42a474d34abf26ec7928eab8d686b93b9' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\modules\\jmspagebuilder\\views\\templates\\hook\\addonhtml.tpl',
      1 => 1558585495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8d7d40ca8796_57610084 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }
echo $_smarty_tpl->tpl_vars['html_content']->value;
}
}
