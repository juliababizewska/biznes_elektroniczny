<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:48:21
  from '/var/www/html/modules/klarnapayment/views/templates/admin/klarna_payment_settings/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374315b16f74_33709526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13829edebd62b4c4304b80e3c95f09a74c252242' => 
    array (
      0 => '/var/www/html/modules/klarnapayment/views/templates/admin/klarna_payment_settings/helpers/form/form.tpl',
      1 => 1731674815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67374315b16f74_33709526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98574490267374315b14198_74491310', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_98574490267374315b14198_74491310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_98574490267374315b14198_74491310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('useOffset', !in_array($_smarty_tpl->tpl_vars['input']->value['name'],array('osm-images-preview','klarna-payments-preview','kec-image-preview')));?>

    <div class="klarna-input-wrapper<?php if ($_smarty_tpl->tpl_vars['useOffset']->value) {?> col-lg-offset-3<?php }?>">
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    </div>
<?php
}
}
/* {/block "input_row"} */
}
