<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec39eb7fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Shortcode; use Pmpr\Module\AdvancedCMS\Form\Shortcode\Shortcode as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\AdvancedCMS\Shortcode\HTML\End; use Pmpr\Module\AdvancedCMS\Shortcode\HTML\Start; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Prerequisite; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Recommend; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Related; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Wikipedia; use Pmpr\Module\AdvancedCMS\Shortcode\Post\Product; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Example; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Free; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Notice; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Question; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Quotation; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Right; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Stat; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Text; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Tip; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Wrong; class Shortcode extends BaseClass { public function __construct() { $this->name = $this->aswwewigcsoawwqk(); parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\x43\x4d\x53\x20\123\150\157\x72\x74\x63\x6f\x64\145\x73", PR__MDL__ADVANCED_CMS); } public function enqueue() { parent::enqueue(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\143\x6f\144\x65\55\163\150\157\x72\164\x63\x6f\x64\x65", $eygsasmqycagyayw->get("\155\151\162\162\x6f\162\x2e\152\x73"))); } public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array { $eyagosskwwmgwmog = [Constants::TEXT => [Constants::qescuiwgsyuikume => __("\124\x65\170\164", PR__MDL__ADVANCED_CMS), Constants::qgqyauaqwqmqseim => IconInterface::wmygqmueoowayyae], Constants::mswoacegomcucaik => [Constants::qescuiwgsyuikume => __("\x50\157\163\x74", PR__MDL__ADVANCED_CMS), Constants::qgqyauaqwqmqseim => IconInterface::awmsmqouyuugigus], Constants::wwmgeoymmaiymyym => [Constants::qescuiwgsyuikume => __("\x49\156\x74\x65\x72\x6e\x61\154\40\114\x69\x6e\153", PR__MDL__ADVANCED_CMS), Constants::qgqyauaqwqmqseim => IconInterface::kaywykwgcsqckois], Constants::wouqosqskyksymwy => [Constants::qescuiwgsyuikume => __("\105\170\164\x65\162\156\x61\154\x20\x4c\151\156\153", PR__MDL__ADVANCED_CMS), Constants::qgqyauaqwqmqseim => IconInterface::gwyiwmwiwcmcmqem], Constants::gsqoooskigukokks => [Constants::qescuiwgsyuikume => __("\x48\x54\115\114\40\x54\141\147\163", PR__MDL__ADVANCED_CMS), Constants::qgqyauaqwqmqseim => IconBrandInterface::akyeqkegauoewowy]]; return parent::ckqaeiskasoyysmg($eyagosskwwmgwmog); } public function register($shortcodes = []) { $shortcodes = [ Tip::symcgieuakksimmu(), Text::symcgieuakksimmu(), Free::symcgieuakksimmu(), Stat::symcgieuakksimmu(), Right::symcgieuakksimmu(), Wrong::symcgieuakksimmu(), Notice::symcgieuakksimmu(), Example::symcgieuakksimmu(), Question::symcgieuakksimmu(), Quotation::symcgieuakksimmu(), Related::symcgieuakksimmu(), Recommend::symcgieuakksimmu(), Wikipedia::symcgieuakksimmu(), Prerequisite::symcgieuakksimmu(), Code::symcgieuakksimmu(), Blog::symcgieuakksimmu(), Download::symcgieuakksimmu(), Product::symcgieuakksimmu(), Start::symcgieuakksimmu(), End::symcgieuakksimmu(), ]; return parent::register($shortcodes); } }
