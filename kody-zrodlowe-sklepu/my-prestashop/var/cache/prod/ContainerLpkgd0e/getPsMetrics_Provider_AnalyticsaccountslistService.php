<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.provider.analyticsaccountslist' shared service.

return $this->services['ps_metrics.provider.analyticsaccountslist'] = new \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider(${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->load('getPsMetrics_Repository_ConfigurationService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.api.analytics']) ? $this->services['ps_metrics.api.analytics'] : $this->load('getPsMetrics_Api_AnalyticsService.php')) && false ?: '_'});
