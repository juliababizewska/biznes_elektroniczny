<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider' shared service.

return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->load('getPsxmarketingwithgoogle_ContextService.php')) && false ?: '_'});
