<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:58:31
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_order_status_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374577a15ab0_94992277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af0d9cd4cb8c396f24720a3879704f81c9e24643' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/forms/pp_order_status_form.tpl',
      1 => 1731674817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../form-fields.tpl' => 2,
  ),
),false)) {
function content_67374577a15ab0_94992277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('dynamicField', $_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_CUSTOMIZE_ORDER_STATUS']);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162017833767374577a13d95_48597190', 'form_field');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./form.tpl");
}
/* {block 'form_field'} */
class Block_162017833767374577a13d95_48597190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_162017833767374577a13d95_48597190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('dynamicField', $_smarty_tpl->tpl_vars['form']->value['fields']['PAYPAL_CUSTOMIZE_ORDER_STATUS']);?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == 'PAYPAL_ENABLE_WEBHOOK') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field']->value,'dynamicField'=>false), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:../form-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field']->value,'dynamicField'=>$_smarty_tpl->tpl_vars['dynamicField']->value), 0, true);
?>
    <?php }?>

<?php
}
}
/* {/block 'form_field'} */
}
