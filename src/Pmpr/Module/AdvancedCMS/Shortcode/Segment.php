<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a4128579             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Shortcode; use Pmpr\Module\AdvancedCMS\Form\Field\Field; use Pmpr\Module\AdvancedCMS\Form\Shortcode\Segment as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\AdvancedCMS\Form\Tab; abstract class Segment extends BaseClass { const maceymcueussmqaw = 'shortcode_title'; const iewiwcuasykigmkm = 'shortcode_description'; const aacsuuycgqoywikw = ['post', 'product']; const iswqqwqguucescay = ['page', 'service']; public function __construct() { if (!$this->prefix) { $this->prefix = Shortcode::symcgieuakksimmu()->aakmagwggmkoiiyu(); } parent::__construct(); } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { if (!isset($wwgucssaecqekuek[Constants::qescuiwgsyuikume])) { $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = $this->qcgakseyaikigqco(); } return parent::kyaweigsqwomykaa($wwgucssaecqekuek); } public function gwquaaaaikcwcges() : array { return []; } public function sksgugioemuysuqa() : array { return [self::uouyygwcgsmygaee('call_to_action_description', __('Call to Action Description', PR__MDL__ADVANCED_CMS))->qigsyyqgewgskemg('w-md-100'), self::iseogkiymousogom('call_to_actions', __('Call to Action items', PR__MDL__ADVANCED_CMS), [self::ymuegqgyuagyucws(Constants::TEXT, __('Text', PR__MDL__ADVANCED_CMS)), self::ckuwucygcwsiawms('action', __('Link', PR__MDL__ADVANCED_CMS))->smmismmuuccmscya(), self::yyuwuqsiucweeoue('size', __('Size', PR__MDL__ADVANCED_CMS), ['sm' => __('Small', PR__MDL__ADVANCED_CMS), 'md' => __('Medium', PR__MDL__ADVANCED_CMS), 'lg' => __('Large', PR__MDL__ADVANCED_CMS)])->eyygsasuqmommkua('md')->awagieqcmmwkgwgs(true)])->usosgsaaimqcysyk()]; } public function iqkugkokaewieock($aokagokqyuysuksm, $sqeykgyoooqysmca = 'block') : Field { return self::yyuwuqsiucweeoue($aokagokqyuysuksm, __('Alignment', PR__MDL__ADVANCED_CMS), [$sqeykgyoooqysmca === 'block' ? 'left' : 'start' => __('Left align', PR__MDL__ADVANCED_CMS), 'center' => __('Center align', PR__MDL__ADVANCED_CMS), $sqeykgyoooqysmca === 'block' ? 'right' : 'end' => __('Right align', PR__MDL__ADVANCED_CMS)])->eyygsasuqmommkua($sqeykgyoooqysmca === 'block' ? 'right' : 'end')->iyouqgqicyqkiswi(6)->mkmssscwmeekwgqo(); } public function swoqymqskqesekok() : array { return [self::ymuegqgyuagyucws(self::maceymcueussmqaw, __('Shortcode Title', PR__MDL__ADVANCED_CMS)), self::sciaycsmsiekqueg(self::iewiwcuasykigmkm, __('Shortcode Description', PR__MDL__ADVANCED_CMS))->gsomueooycksswcy()]; } public function kwosaecaikgmoeyo() : Tab { return self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . Constants::iusoecsswgekecks, __('General', PR__MDL__ADVANCED_CMS))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy); } }
