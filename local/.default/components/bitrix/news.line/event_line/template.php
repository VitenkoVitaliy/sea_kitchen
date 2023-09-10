<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<!-- Start Align Area -->
 
	                        
						<?foreach($arResult["ITEMS"] as $arItem):?>
							 <?
								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
								?>
									<div class="table-row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
										<div class="date"><?=$arItem["DATE"]?></div>
										<div class="title"><?=$arItem["NAME"]?></div>
										<div class="agenda"><?=$arItem["PREVIEW_TEXT"]?>
										</div>
										<div class="detail">
												<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="genric-btn success medium">Подробнее</a>
										</div>
									</div>
								
						<?endforeach;?>
						
						
       