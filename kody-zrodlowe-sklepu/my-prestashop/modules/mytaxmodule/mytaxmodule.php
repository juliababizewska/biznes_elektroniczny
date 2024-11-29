<?php
if (!defined('_PS_VERSION_')) {
	exit;
}

class MyTaxModule extends Module
{
	public function __construct()
	{
		$this->name = 'mytaxmodule';
		$this->tab = 'pricing_promotion';
		$this->version = '1.0.0';
		$this->author = 'Julia Babizewska';
		$this->need_instance = 0;

		parent::__construct();

		$this->displayName = $this->l('My Tax Module');
		$this->description = $this->l('Adjust product prices to include 23% VAT as a part of the given price');
	}

	public function install()
	{
		return parent::install();
	}

	public function executeTaxUpdate()
	{
		$products = Product::getProducts((int)Configuration::get('PS_LANG_DEFAULT'), 0, 0, 'id_product', 'ASC');

		foreach ($products as $product) {
			$id_product = $product['id_product'];
			$productObj = new Product($id_product);
			// Oblicz nową cenę netto z brutto
            		$bruttoPrice = $productObj->price; // Cena zapisana w bazie (obecnie brutto)
            		$nettoPrice = $bruttoPrice / 1.23; // Wyliczenie netto przy VAT 23%

            		// Przypisz nową cenę netto i regułę podatkową
            		$productObj->price = $nettoPrice;
            		$productObj->id_tax_rules_group = $this->getTaxRuleGroupId();

            		// Zapisz zmiany
            		$productObj->save();
        	}
    	}

	private function getTaxRuleGroupId()
	{
		// Pobierz grupy reguł podatkowych
		$taxRuleGroups = TaxRulesGroup::getTaxRulesGroups(true); // true oznacza, że wynik będzie w formie tablicy
		
		// Sprawdź, czy istnieje grupa z 23% VAT
		foreach ($taxRuleGroups as $group) {
			// Sprawdzamy, czy grupa ma nazwę "23% VAT"
			if (isset($group['name']) && $group['name'] === '23% VAT') {
				return (int)$group['id_tax_rules_group'];
			}
		}
		
			// Jeśli nie ma grupy z VAT 23%, tworzymy nową grupę
		$taxRuleGroup = new TaxRulesGroup();
		$taxRuleGroup->name = '23% VAT';
		$taxRuleGroup->active = 1;
		$taxRuleGroup->save();
		
			// Tworzymy regułę podatkową
		$tax = new Tax();
		$tax->rate = 23.00;  // Podatek 23%
		$tax->name = 'VAT 23%';
		$tax->active = 1;
		$tax->id_tax_rules_group = $taxRuleGroup->id;
		$tax->save();
		
		return $taxRuleGroup->id;
	}
		
	public function getContent()
	{
		$output = '';

		// Sprawdzanie, czy przycisk został kliknięty
		if (Tools::isSubmit('submitTaxUpdate')) {
			$this->executeTaxUpdate(); // Wywołanie funkcji przeliczającej ceny
			$output .= $this->displayConfirmation($this->l('Prices have been updated with 23% VAT.'));
		}

		// Wyświetlenie przycisku
		return $output . $this->renderForm();
	}

	private function renderForm()
	{
		// Formularz z przyciskiem w panelu administracyjnym
		$form = '<form action="' . Tools::safeOutput($_SERVER['REQUEST_URI']) . '" method="post">';
		$form .= '<button type="submit" name="submitTaxUpdate" class="btn btn-primary">';
		$form .= $this->l('Update Prices with 23% VAT');
		$form .= '</button>';
		$form .= '</form>';

		return $form;
	}
}
