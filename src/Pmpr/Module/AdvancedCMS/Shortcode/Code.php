<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6fe69d8d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Shortcode; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Code extends Segment { const yaiacqocwcgmooio = 'editor'; const wsiyuewcsugmoqam = 'language'; const swwowcuawuuusagg = 'code_right'; protected bool $jsAdded = false; public function __construct() { $this->target = self::aacsuuycgqoywikw; parent::__construct(); } public function gogaagekwoisaqgu() { $this->icon = IconInterface::ywswaeisusymaeii; $this->title = __('Code', PR__MDL__ADVANCED_CMS); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae($this->kwosaecaikgmoeyo()->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::wsiyuewcsugmoqam, __('Language', PR__MDL__ADVANCED_CMS), ['php' => __('PHP', PR__MDL__ADVANCED_CMS), 'css' => __('CSS', PR__MDL__ADVANCED_CMS), 'sass' => __('SASS', PR__MDL__ADVANCED_CMS), 'scss' => __('SCSS', PR__MDL__ADVANCED_CMS), 'json' => __('JSON', PR__MDL__ADVANCED_CMS), 'nginx' => __('Nginx', PR__MDL__ADVANCED_CMS), 'htmlmixed' => __('HTML Mixed', PR__MDL__ADVANCED_CMS), 'javascript' => __('JavaScript', PR__MDL__ADVANCED_CMS), 'apacheconf' => __('Apache Configuration', PR__MDL__ADVANCED_CMS)])->iyouqgqicyqkiswi(6)->eyygsasuqmommkua('php')->ccmwycqioaicegoc(__('Select your Opinion code language', PR__MDL__ADVANCED_CMS)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::swwowcuawuuusagg, __('Code in Right', PR__MDL__ADVANCED_CMS), __('Check this item, if you want show code in right fo screen', PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::yaiacqocwcgmooio, __('Code Text', PR__MDL__ADVANCED_CMS), __('Write your code here.', PR__MDL__ADVANCED_CMS))->qigsyyqgewgskemg('code-editor')->yskkmqiusguummwa()->eskgwaywimqcwcyy('language', self::wsiyuewcsugmoqam)->eskgwaywimqcwcyy('input', Constants::vswoiouoaykswgym))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(Constants::eqkeooqcsscoggia, __('Description', PR__MDL__ADVANCED_CMS))->gsomueooycksswcy())->mkksewyosgeumwsa(self::cwiuiiakukcsaakw(Constants::vswoiouoaykswgym, ''))); } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { if (isset($wwgucssaecqekuek[Constants::vswoiouoaykswgym])) { $wwgucssaecqekuek[Constants::vswoiouoaykswgym] = base64_encode($wwgucssaecqekuek[Constants::vswoiouoaykswgym]); if (!isset($wwgucssaecqekuek[self::yaiacqocwcgmooio])) { $wwgucssaecqekuek[self::yaiacqocwcgmooio] = $wwgucssaecqekuek[Constants::vswoiouoaykswgym]; } } return parent::kyaweigsqwomykaa($wwgucssaecqekuek); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'mirror', 'mirror.js')->simswskycwagoeqy())->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, 'mirror', 'mirror.css')); parent::enqueue(); } }
