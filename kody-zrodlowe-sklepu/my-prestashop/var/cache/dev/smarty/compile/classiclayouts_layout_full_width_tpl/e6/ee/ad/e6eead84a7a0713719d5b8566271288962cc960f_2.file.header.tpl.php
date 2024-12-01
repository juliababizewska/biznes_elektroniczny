<?php
/* Smarty version 3.1.48, created on 2024-12-01 03:35:38
  from '/var/www/html/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674bcb7a310988_74483919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6eead84a7a0713719d5b8566271288962cc960f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/header.tpl',
      1 => 1733020522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674bcb7a310988_74483919 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="custom-header" id="main-header">
  <div class="header-container">
    <!-- Zdjęcie logo -->
    <div class="header-logo" id="logo-section">
      <a href="https://localhost:8080">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/logo.jpeg" alt="Logo" class="logo-image">
      </a>
    </div>

    <!-- Elementy obok logo -->
    <div class="header-content" id="header-content">
      <!-- Formularz wyszukiwania -->
      <form class="search-box" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['search'], ENT_QUOTES, 'UTF-8');?>
" method="GET" id="search-box">
        <input 
          type="text" 
          name="s" 
          class="search-input" 
          id="search-input" 
          placeholder="Wpisz, czego szukasz..." 
          required 
        />
        <button type="submit" class="search-btn" id="search-btn">
          <i class="material-icons">search</i>
        </button>
      </form>

      <!-- Moje konto -->
      <div class="header-item" id="account-item">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">
          <span>Moje konto</span>
          <i class="material-icons">person</i>
        </a>
      </div>

      <!-- Koszyk -->
      <div class="header-item" id="cart-item">
        <a href="https://localhost:8080/pl/koszyk?action=show">
          <span>Koszyk</span>
          <i class="material-icons">shopping_cart</i>
        </a>
      </div>

      <!-- Język i waluta -->
      <div class="header-item" id="language-currency-item">
        <a href="#">
          <span>Język i waluta</span>
          <i class="material-icons">flag</i>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Dodaj skrypt na końcu dokumentu -->
<?php echo '<script'; ?>
>
  document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const searchBox = document.getElementById('search-box');

    // Zapobiegaj wysłaniu formularza przy kliknięciu w pole input
    searchInput.addEventListener('click', function(event) {
      event.preventDefault();
      // Opcjonalnie: ustaw fokus na polu input, jeśli potrzebujesz
      searchInput.focus();
    });

    // Formularz zostanie wysłany normalnie przy kliknięciu przycisku lub naciśnięciu Enter
  });
<?php echo '</script'; ?>
>
<?php }
}
