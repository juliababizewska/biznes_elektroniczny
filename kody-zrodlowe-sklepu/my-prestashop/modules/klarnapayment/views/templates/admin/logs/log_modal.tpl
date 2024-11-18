{**
 * NOTICE OF LICENSE
 *
 * @author    Klarna Bank AB www.klarna.com
 * @copyright Copyright (c) permanent, Klarna Bank AB
 * @license   ISC
 * @see       /LICENSE
 *
 * International Registered Trademark & Property of Klarna Bank AB
 *}
<div
  class="btn btn-default button js-log-button"
  data-toggle="modal"
  data-log-id="{$log_id|escape:'htmlall':'UTF-8'}"
  data-information-type="{$log_information_type|escape:'htmlall':'UTF-8'}"
  data-target="log-modal-{$log_id|escape:'htmlall':'UTF-8'}-{$log_information_type|escape:'htmlall':'UTF-8'}"
>
    {l s='View' mod='klarnapayment'}
</div>

<div id="log-modal-{$log_id|escape:'htmlall':'UTF-8'}-{$log_information_type|escape:'htmlall':'UTF-8'}" class="modal">
  <div class="log-modal-overlay"></div>

  <div class="log-modal-window">
    <div class="log-modal-title">
      <h4>
          {if $log_information_type === 'request'}
              {$log_id|escape:'htmlall':'UTF-8'}: {l s='Request data' mod='klarnapayment'}
          {elseif $log_information_type === 'response'}
              {$log_id|escape:'htmlall':'UTF-8'}: {l s='Response data' mod='klarnapayment'}
          {elseif $log_information_type === 'context'}
              {$log_id|escape:'htmlall':'UTF-8'}: {l s='Context data' mod='klarnapayment'}
          {/if}
      </h4>
    </div>

    <div class="log-modal-content">
      <div class="log-modal-content-spinner hidden"></div>
      <pre class="log-modal-content-data hidden"></pre>
    </div>
  </div>
</div>


