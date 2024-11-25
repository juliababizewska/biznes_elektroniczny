<?php
/* Smarty version 3.1.48, created on 2024-11-25 01:53:31
  from '/var/www/html/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6743ca8b530e92_10898920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6eead84a7a0713719d5b8566271288962cc960f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/header.tpl',
      1 => 1732315342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6743ca8b530e92_10898920 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="custom-header">
  <div class="header-container">
    <!-- Zdjęcie logo -->
    <div class="header-logo">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/logo.jpeg" alt="Logo" class="logo-image">
    </div>

    <!-- Elementy obok logo -->
    <div class="header-content">
      <!-- Wyszukiwarka -->
      <div class="search-box">
        <input type="text" class="search-input" placeholder="Wpisz czego szukasz.">
        <button type="submit" class="search-btn">
          <i class="material-icons">search</i>
        </button>
      </div>



    

      <!-- Moje konto -->
      <div class="header-item">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">
          <span>Moje konto</span>
          <i class="material-icons">person</i>
        </a>
      </div>

      <!-- Koszyk -->
      <div class="header-item">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
">
          <span>Koszyk</span>
          <i class="material-icons">shopping_cart</i>
        </a>
      </div>

      <!-- Język i waluta -->
      <div class="header-item">
        <a href="#">
          <span>Język i waluta</span>
          <i class="material-icons">flag</i>
        </a>
      </div>
    </div>
  </div>
</header>
<?php }
}
