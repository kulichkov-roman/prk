<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"yenisite:menu.ext", 
	"", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL_FINISH" => "4",
		"DEPTH_LEVEL_SECTIONS" => "0",
		"DEPTH_LEVEL_START" => "1",
		"ELEMENT_CNT" => "N",
		"ELEMENT_SORT_FIELD" => "name",
		"ELEMENT_SORT_ORDER" => "asc",
		"GET_SECTION_UF" => "N",
		"HIDE_ELEMENT" => "ACTIVE",
		"IBLOCK_ID" => array(
			0 => "all",
		),
		"IBLOCK_SORT_FIELD" => "id",
		"IBLOCK_SORT_ORDER" => "asc",
		"IBLOCK_TYPE" => array(
			0 => "services",
			1 => "",
		),
		"IBLOCK_TYPE_MASK" => array(
		),
		"IBLOCK_TYPE_SORT_FIELD" => "id",
		"IBLOCK_TYPE_SORT_ORDER" => "asc",
		"IBLOCK_TYPE_URL" => "",
		"IBLOCK_TYPE_URL_REPLACE" => "#SITE_DIR#",
		"ID" => $_REQUEST["ID"],
		"SECTION_SORT_FIELD" => "sort",
		"SECTION_SORT_ORDER" => "asc",
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/services/zashhita_prav_grazhdan/",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/",
	),
	false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>