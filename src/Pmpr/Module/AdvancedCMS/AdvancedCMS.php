<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f89dab2e8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\AdvancedCMS\Form\Admin; use Pmpr\Module\AdvancedCMS\Media\Media; use Pmpr\Module\AdvancedCMS\Salary\Salary; use Pmpr\Module\AdvancedCMS\Shortcode\Shortcode; class AdvancedCMS extends ModuleInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Advanced CMS', PR__MDL__ADVANCED_CMS); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function aqyikqugcomoqqqi() { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->goecwaaykqoaaagg()) { Admin::symcgieuakksimmu(); } if (!$owaoeyikmqaeegma->mcgoysmkqsqooceq()) { Shortcode::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Media::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('salary')) { Salary::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->waqewsckuayqguos('before_enqueue_frontend_assets', [$this, 'saoyckekguwqwgcq']); } public function saoyckekguwqwgcq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qkqeooqcomucuwyk($this, Constants::mswoacegomcucaik, $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu())->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'inline')->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, 'inline.js'))); } } }
