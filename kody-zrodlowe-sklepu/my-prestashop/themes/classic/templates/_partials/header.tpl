{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *}

<header class="custom-header" id="main-header">
  <div class="header-container">
    <!-- Zdjęcie logo -->
    <div class="header-logo" id="logo-section">
     <a href="https://localhost:8080">
      <img src="{$urls.base_url}themes/classic/assets/img/logo.jpeg" alt="Logo" class="logo-image">
    </div>

    <!-- Elementy obok logo -->
    <div class="header-content" id="header-content">
      <!-- Formularz wyszukiwania -->
      <form class="search-box" action="{$urls.pages.search}" method="GET" id="search-box">
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
        <a href="{$urls.pages.my_account}">
          <span>Moje konto</span>
          <i class="material-icons">person</i>
        </a>
      </div>

      <!-- Koszyk -->
      <div class="header-item" id="cart-item">
        <a href="{$urls.pages.cart}">
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
