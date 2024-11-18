<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:58:31
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/icon-status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374577938b62_28077861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eeaab2b783bff90b2f7b429810c3aae42d952c1' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/icon-status.tpl',
      1 => 1731674817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67374577938b62_28077861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('isSuccess', (($tmp = @$_smarty_tpl->tpl_vars['isSuccess']->value)===null||$tmp==='' ? false : $tmp));?>

<span class="icon-lg mr-1">
  <i
    class="material-icons-outlined <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('text-success'=>$_smarty_tpl->tpl_vars['isSuccess']->value,'text-danger'=>!$_smarty_tpl->tpl_vars['isSuccess']->value) ));?>
"
  >
    <?php if ($_smarty_tpl->tpl_vars['isSuccess']->value) {?>done<?php } else { ?>close<?php }?>
  </i>
</span>
<?php }
}
