<?
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
\Bitrix\Main\Loader::includeModule('aspro.allcorp3');

$template = strtolower(CAllcorp3::GetFrontParametrValue('ORDER_BASKET_VIEW'));
if($bUseBasket = CAllcorp3::GetFrontParametrValue('ORDER_VIEW') === 'Y'){
	$arBasketItems = CAllcorp3::processBasket();
}
?>
<?$APPLICATION->IncludeComponent(
	"aspro:basket.allcorp3", 
	/*$template,*/
	"header_seonik", 
	array(
		"COMPONENT_TEMPLATE" => "header_seonik", /*$template,*/
		"SHOW_404" => "N",
		"HIDE_ON_CART_PAGE" => "Y",
	),
	false, array("HIDE_ICONS" => "Y")
);?>