<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?
$result = array('success' => false);
if ($_POST['send'] == 'Y') {
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	if (strlen($name) > 0 && strlen($phone) > 0) {
		$arEventFields = array(
			'NAME' => $name,
			'PHONE' => $phone
		);
		if ($eventId = CEvent::Send('DISCOUNT_FORM', SITE_ID, $arEventFields, 'N')) {
			$result = array('success' => true);
		}
	}
}
echo json_encode($result);
die();
?>