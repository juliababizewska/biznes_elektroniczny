<?php
/* Smarty version 3.1.48, created on 2024-11-29 15:09:26
  from '/var/www/html/admin123/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6749cb161caf64_93563412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94c4766480ee19cea1fe1b1c0990b73f49c90edd' => 
    array (
      0 => '/var/www/html/admin123/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1732833173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6749cb161caf64_93563412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12374778886749cb161ca5e3_49692575', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_12374778886749cb161ca5e3_49692575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_12374778886749cb161ca5e3_49692575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
