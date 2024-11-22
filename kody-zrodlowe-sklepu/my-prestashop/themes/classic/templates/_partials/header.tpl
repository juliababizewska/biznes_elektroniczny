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
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<header class="custom-header">
  <div class="header-container">
    <!-- Zdjęcie logo -->
    <div class="header-logo">
      <img src="{$urls.base_url}themes/classic/assets/img/logo.jpeg" alt="Logo" class="logo-image">
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
        <a href="{$urls.pages.my_account}">
          <span>Moje konto</span>
          <i class="material-icons">person</i>
        </a>
      </div>

      <!-- Koszyk -->
      <div class="header-item">
        <a href="{$urls.pages.cart}">
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
