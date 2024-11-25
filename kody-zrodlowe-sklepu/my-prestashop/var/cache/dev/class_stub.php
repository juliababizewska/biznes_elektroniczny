<?php

class PrestaShopBackup extends PrestaShopBackupCore {};
class CacheXcache extends CacheXcacheCore {};
abstract class Cache extends CacheCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheApc extends CacheApcCore {};
class ProductSupplier extends ProductSupplierCore {};
class Language extends LanguageCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Validate extends ValidateCore {};
class Contact extends ContactCore {};
class Notification extends NotificationCore {};
class Dispatcher extends DispatcherCore {};
class Risk extends RiskCore {};
class Message extends MessageCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class CustomerSession extends CustomerSessionCore {};
class Category extends CategoryCore {};
class Currency extends CurrencyCore {};
class Hook extends HookCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class PDF extends PDFCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class LinkProxy extends LinkProxyCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class ProductDownload extends ProductDownloadCore {};
class CustomizationField extends CustomizationFieldCore {};
class Link extends LinkCore {};
class Cart extends CartCore {};
class ImageManager extends ImageManagerCore {};
class QuickAccess extends QuickAccessCore {};
class State extends StateCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class DbPDO extends DbPDOCore {};
abstract class Db extends DbCore {};
class DbQuery extends DbQueryCore {};
class DbMySQLi extends DbMySQLiCore {};
class Group extends GroupCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class Search extends SearchCore {};
class Attribute extends AttributeCore {};
class Access extends AccessCore {};
class LocalizationPack extends LocalizationPackCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyCustom extends SmartyCustomCore {};
class TemplateFinder extends TemplateFinderCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class Guest extends GuestCore {};
class Customization extends CustomizationCore {};
class Page extends PageCore {};
class Chart extends ChartCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class MetaLang extends MetaLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class DataLang extends DataLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class GenderLang extends GenderLangCore {};
class AttributeLang extends AttributeLangCore {};
class CarrierLang extends CarrierLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class ContactLang extends ContactLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class TabLang extends TabLangCore {};
class FeatureLang extends FeatureLangCore {};
class CategoryLang extends CategoryLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class ProfileLang extends ProfileLangCore {};
class ThemeLang extends ThemeLangCore {};
class GroupLang extends GroupLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class RiskLang extends RiskLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class Configuration extends ConfigurationCore {};
class Address extends AddressCore {};
class DateRange extends DateRangeCore {};
class CustomerMessage extends CustomerMessageCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class Tree extends TreeCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class TreeToolbar extends TreeToolbarCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class Module extends ModuleCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class RequestSql extends RequestSqlCore {};
class Meta extends MetaCore {};
class Tab extends TabCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Uploader extends UploaderCore {};
class Shop extends ShopCore {};
class ShopGroup extends ShopGroupCore {};
class ShopUrl extends ShopUrlCore {};
class CMS extends CMSCore {};
class Media extends MediaCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperView extends HelperViewCore {};
class HelperShop extends HelperShopCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperKpi extends HelperKpiCore {};
class HelperForm extends HelperFormCore {};
class Helper extends HelperCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperList extends HelperListCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class FormField extends FormFieldCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class Customer extends CustomerCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
abstract class ObjectModel extends ObjectModelCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutSession extends CheckoutSessionCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class AddressValidator extends AddressValidatorCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class Pack extends PackCore {};
class Mail extends MailCore {};
class SearchEngine extends SearchEngineCore {};
class Supplier extends SupplierCore {};
class Carrier extends CarrierCore {};
class Combination extends CombinationCore {};
class ProductAssembler extends ProductAssemblerCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Zone extends ZoneCore {};
class OrderState extends OrderStateCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderSlip extends OrderSlipCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderReturn extends OrderReturnCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderDetail extends OrderDetailCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderMessage extends OrderMessageCore {};
class OrderDiscount extends OrderDiscountCore {};
class Order extends OrderCore {};
class Translate extends TranslateCore {};
class SupplierAddress extends SupplierAddressCore {};
class CMSRole extends CMSRoleCore {};
class GroupReduction extends GroupReductionCore {};
class CustomerThread extends CustomerThreadCore {};
class FeatureValue extends FeatureValueCore {};
class Profile extends ProfileCore {};
class Store extends StoreCore {};
class Referrer extends ReferrerCore {};
class Upgrader extends UpgraderCore {};
class CustomerAddress extends CustomerAddressCore {};
class Manufacturer extends ManufacturerCore {};
class Connection extends ConnectionCore {};
class RangeWeight extends RangeWeightCore {};
class RangePrice extends RangePriceCore {};
class CartRule extends CartRuleCore {};
class Employee extends EmployeeCore {};
class AttributeGroup extends AttributeGroupCore {};
class AdminController extends AdminControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
abstract class Controller extends ControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class SpecificPrice extends SpecificPriceCore {};
class Product extends ProductCore {};
class Attachment extends AttachmentCore {};
class Country extends CountryCore {};
class Tag extends TagCore {};
class CSV extends CSVCore {};
class EmployeeSession extends EmployeeSessionCore {};
class Cookie extends CookieCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class ImageType extends ImageTypeCore {};
class PhpEncryption extends PhpEncryptionCore {};
class Context extends ContextCore {};
class Windows extends WindowsCore {};
class Gender extends GenderCore {};
class AddressFormat extends AddressFormatCore {};
class CMSCategory extends CMSCategoryCore {};
class Alias extends AliasCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxRule extends TaxRuleCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class Tax extends TaxCore {};
class TaxCalculator extends TaxCalculatorCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class SupplyOrder extends SupplyOrderCore {};
class Stock extends StockCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class Warehouse extends WarehouseCore {};
class StockMvt extends StockMvtCore {};
class StockMvtWS extends StockMvtWSCore {};
class StockManager extends StockManagerCore {};
class StockMvtReason extends StockMvtReasonCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class StockAvailable extends StockAvailableCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class FileUploader extends FileUploaderCore {};
class AddressChecksum extends AddressChecksumCore {};
class Tools extends ToolsCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class Image extends ImageCore {};
class ProductSale extends ProductSaleCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class CccReducer extends CccReducerCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class StylesheetManager extends StylesheetManagerCore {};
class JsMinifier extends JsMinifierCore {};
class JavascriptManager extends JavascriptManagerCore {};
class Curve extends CurveCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Delivery extends DeliveryCore {};
class Feature extends FeatureCore {};