<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($_COOKIE["hide_discount_window"] == "Y") {
	$arResult["HIDE"] = "Y";
} else {
	setcookie("hide_discount_window", "Y", time()+24*3600*365, "/");
}
$this->IncludeComponentTemplate();
?>