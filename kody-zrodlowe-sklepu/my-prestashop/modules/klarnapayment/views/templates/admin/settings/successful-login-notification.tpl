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
{l s='Successfully logged in. Connected regions:' mod='klarnapayment'}
{if $isProduction}
<br>
<br>
<b>{l s='Production:' mod='klarnapayment'}</b> {if !empty($successfullyLoggedInRegions['production'])}{implode(', ', $successfullyLoggedInRegions['production'])}{else}-{/if}
{else}
<br>
<br>
<b>{l s='Playground:' mod='klarnapayment'}</b> {if !empty($successfullyLoggedInRegions['sandbox'])}{implode(', ', $successfullyLoggedInRegions['sandbox'])}{else}-{/if}
{/if}
