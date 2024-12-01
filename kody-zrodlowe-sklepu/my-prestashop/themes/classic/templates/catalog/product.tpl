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

{extends file=$layout}

{block name='head' append}
  <meta property="og:type" content="product">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  {if $product.cover}
    <meta property="og:image" content="{$product.cover.large.url}">
  {/if}

  {if $product.show_price}
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
  {/if}
  {if isset($product.weight) && ($product.weight != 0)}
    <meta property="product:weight:value" content="{$product.weight}">
    <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='head_microdata_special'}
  {include file='_partials/microdata/product-jsonld.tpl'}
{/block}

{block name='content'}

  <section id="mainproduct" class="product-page">

    <meta content="{$product.url}">

    <div class="row product-container js-product-container">
      
      <!-- Sekcja Kategorii (Sidebar) -->
      <div class="col-lg-3 col-md-4 col-sm-12 categories-sidebar-vertical">
        {hook h='displayLeftColumn'}
      </div>


<!-- Sekcja Zdjęć Produktu -->
<div class="col-lg-6 col-md-4 col-sm-12">
  {block name='page_content_container'}
    <section class="page-content" id="content">
      {block name='page_content'}
        {include file='catalog/_partials/product-flags.tpl'}

        {block name='product_cover_thumbnails'}
          {include file='catalog/_partials/product-cover-thumbnails.tpl'}
        {/block}
        <div class="scroll-box-arrows">
          <i class="material-icons left">&#xE314;</i>
          <i class="material-icons right">&#xE315;</i>
        </div>
      {/block}
    </section>
  {/block}



              
{block name='product_tabs'}
  <div class="product-description-section">
    <h1 class="product-title">{$product.name}</h1>
    <div class="product-details">
      {$product.description nofilter}
    </div>
  </div>
{/block}



  <!-- Nowa sekcja: Komentarze i Recenzje -->
<section id="product-comments-reviews">
  <div class="reviews-section">
    <h2>Recenzje</h2>
    <p>Produkt nie posiada recenzji. <a href="#" class="add-review-link">Dodaj recenzję</a></p>
  </div>
  <div class="questions-section">
    <h2>Pytania do produktu</h2>
    <p>Zadaj pytanie dotyczące produktu. Nasz zespół z przyjemnością udzieli szczegółowej odpowiedzi na zapytanie.</p>
    <button type="button" class="ask-question-btn">Zadaj pytanie</button>
  </div>
</section>

</div>

<div class="product-information">
  <!-- Nagłówek i cena -->
  <h1 class="product-title">{$product.name}</h1>
  <div class="price-summary">
  </div>

  <div class="additional-info">
    <p><strong>Obserwuj produkt:</strong> 
      <a href="#" class="watch-product">
        <i class="material-icons">favorite</i>
      </a>
    </p>
    <p><strong>Dodaj recenzję:</strong> 
      <span class="star-rating">
        <i class="material-icons star">star</i>
        <i class="material-icons star">star</i>
        <i class="material-icons star">star</i>
        <i class="material-icons star">star</i>
        <i class="material-icons star">star</i>
      </span>
    </p>
    <p><strong>Kod produktu:</strong> {if is_string($product.reference)}{$product.reference}{else}N/A{/if}</p>
    <p><strong>Producent:</strong>
      {if is_string($product.manufacturer_name)}
        {$product.manufacturer_name}
      {else}
        N/A
      {/if}
    </p>
    <p><strong>Dostępność:</strong> 
      {if $product.quantity > 0}
        ({$product.quantity} szt.)
      {else}
        <span class="text-danger">Brak</span>
      {/if}
    </p>
  </div>

  
{block name='product_prices'}
  <div class="custom-price-wrapper">
    {include file='catalog/_partials/product-prices.tpl'}
  </div>
{/block}



  <!-- Przycisk "Dodaj do koszyka" -->
<div class="product-actions js-product-actions">
  {block name='product_buy'}
    <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="{$static_token}">
      <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
      <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id" class="js-product-customization-id">

      {block name='product_variants'}
        {include file='catalog/_partials/product-variants.tpl'}
      {/block}

      <!-- Kontener na manipulację ilością i przycisk -->
      <div class="quantity-add-to-cart-container">
        <div class="quantity-wrapper">
          
          <input id="quantity_wanted" class="js-quantity-product" type="number" value="1" min="1" name="qty">
          
        </div>

        <button type="submit" class="btn btn-primary btn-add-to-cart">
          <i class="material-icons">shopping_cart</i>
          Dodaj do koszyka
        </button>
      </div>
    </form>
  {/block}
</div>

</div>

    <!-- Sekcja Akcesoriów, Stopki itd. -->
    {block name='product_accessories'}
      {if $accessories}
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase">{l s='You might also like' d='Shop.Theme.Catalog'}</p>
          <div class="products row">
            {foreach from=$accessories item="product_accessory" key="position"}
              {block name='product_miniature'}
                {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory position=$position productClasses="col-xs-12 col-sm-6 col-lg-4 col-xl-3"}
              {/block}
            {/foreach}
          </div>
        </section>
      {/if}
    {/block}

    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Zawartość stopki -->
        {/block}
      </footer>
    {/block}
  </section>



{/block}
