<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мероприятия");
?><!-- Start Align Area -->
<div class="whole-wrap">
	<div class="container box_1170">
		<div class="section-top-border">
			<h3 class="mb-30">Расписание мероприятий</h3>
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="date">
							 Дата
						</div>
						<div class="title">
							 Название
						</div>
						<div class="agenda">
							 Программа
						</div>
						<div class="detail">
							 Регистрация
						</div>
					</div>
					 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"event_line",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "event_line",
		"DATE" => "d.m.Y",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"DATE", 1=>"PREVIEW_TEXT"),
		"IBLOCKS" => array(0=>"5",),
		"IBLOCK_TYPE" => "events",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "NAME",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	)
);?>
				</div>
			</div>
		</div>
	</div>
	 .
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>