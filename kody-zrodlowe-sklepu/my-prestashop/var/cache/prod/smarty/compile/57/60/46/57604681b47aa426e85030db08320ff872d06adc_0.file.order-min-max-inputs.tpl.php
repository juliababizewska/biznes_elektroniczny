<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:48:21
  from '/var/www/html/modules/klarnapayment/views/templates/admin/settings/order-min-max-inputs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374315c8d9a8_90225754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57604681b47aa426e85030db08320ff872d06adc' => 
    array (
      0 => '/var/www/html/modules/klarnapayment/views/templates/admin/settings/order-min-max-inputs.tpl',
      1 => 1731674815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67374315c8d9a8_90225754 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="order-min-max-selector">
    <label class="control-label" for="minOrderValue"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order minimum value','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</label>
    <div class="input-group fixed-width-lg">
        <span class="input-group-addon price_unit"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klarnapayment']->value['currency_symbol'],'htmlall','UTF-8' ));?>
</span>
        <input
                name="minOrderValue"
                class="form-control"
                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klarnapayment']->value['min_value'],'htmlall','UTF-8' ));?>
"
                type="number"
                min="0"
                step="0.01"
                pattern="\d+(\.\d(1,2))?"
        >
    </div>
    <label class="control-label" for="maxOrderValue"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order maximum value','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</label>
    <div class="input-group fixed-width-lg">
        <span class="input-group-addon price_unit"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klarnapayment']->value['currency_symbol'],'htmlall','UTF-8' ));?>
</span>
        <input
                name="maxOrderValue"
                class="form-control"
                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klarnapayment']->value['max_value'],'htmlall','UTF-8' ));?>
"
                type="number"
                min="0"
                step="0.01"
                pattern="\d+(\.\d(1,2))?"
        >
    </div>
</div>
<?php }
}
