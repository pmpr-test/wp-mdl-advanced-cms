<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6fe69d8d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Pmpr\Common\Foundation\Interfaces\Constants; class CMB2 extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('cmb2_after_group_rows', [$this, 'wgskaqayecicmsgi'])->qcsmikeggeemccuu('cmb2_before_group_rows', [$this, 'yqmceeqwiyggkkso'])->qcsmikeggeemccuu('cmb2_after_group_row_fields', [$this, 'pwqumygamucskggk'])->qcsmikeggeemccuu('cmb2_before_group_row_fields', [$this, 'iicmygqmususcuyc'])->qcsmikeggeemccuu('cmb2_after_form', [$this, 'umawqkgmmckyygyk'], 10, 4)->qcsmikeggeemccuu('cmb2_before_form', [$this, 'muaowgssocuyksym'], 10, 4); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('cmb2_meta_box_url', [$this, 'ockocugyaieycimk'])->cecaguuoecmccuse('deprecated_argument_trigger_error', '__return_false')->cecaguuoecmccuse('cmb2_override_meta_value', [$this, 'agucyisikcsmeeug'], 10, 4); $this->aqaqisyssqeomwom('cmn__fndtn_asset_moved_successfully', [$this, 'wugiyiqysiwioowc']); parent::kgquecmsgcouyaya(); } public function agucyisikcsmeeug($eqgoocgaqwqcimie, $aokagokqyuysuksm, $mmeioagwmyscwumo, $aiowsaccomcoikus) { if (Constants::wqmuacwuckqmqcqs === $aokagokqyuysuksm) { if ($aiowsaccomcoikus && isset($aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]) && $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]) { $eqgoocgaqwqcimie = $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]; } $qqswgiawgeaeoecu = (array) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus->group, Constants::ciyoccqkiamemcmm, []); if ($qqswgiawgeaeoecu && 'cmb2_field_no_override_val' === $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $qqswgiawgeaeoecu; } } return $eqgoocgaqwqcimie; } public function ockocugyaieycimk($uciwwqcgyeqmcyec) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); if (!$cwaqscoiqkokyase->cmaecekuqkwmemms('DONT_UPDATE_BOX_URL') && !$cwaqscoiqkokyase->wmcwegoisyeeosqu($uciwwqcgyeqmcyec)) { $uciwwqcgyeqmcyec = $this->cyecicwkmmoqaomw($uciwwqcgyeqmcyec, $this->caokeucsksukesyo()->cqusmgskowmesgcg()->eemiwoykwuoaemuk($this)); if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($uciwwqcgyeqmcyec)) { $uciwwqcgyeqmcyec = $this->cyecicwkmmoqaomw($uciwwqcgyeqmcyec, $cwaqscoiqkokyase->cmaecekuqkwmemms('PR_BASE_PATH')); } if ($ukwaqgesyueoiswk = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->omywegoesmqwcmss()) { $uciwwqcgyeqmcyec .= "{$ukwaqgesyueoiswk}/"; } } return $uciwwqcgyeqmcyec; } public function cyecicwkmmoqaomw($uciwwqcgyeqmcyec, $couygeouymagssgw) : string { return trailingslashit(str_replace("{$couygeouymagssgw}/vendor/narmafzam", $this->caokeucsksukesyo()->usugyumcgeaaowsi()->mkwomgueyaaooyye(), $uciwwqcgyeqmcyec)); } public function wugiyiqysiwioowc($mksyucucyswaukig) { $this->caokeucsksukesyo()->eiwcuqigayigimak()->wwckmeoskuagomki('DONT_UPDATE_BOX_URL', 1); $mksyucucyswaukig->aswegoaiwseumiss('cmb2', ['css' => $this->omgkgiasggyoyiew('css'), 'js' => $this->omgkgiasggyoyiew('js')]); } public function omgkgiasggyoyiew(string $mkomwsiykqigmqca) : ?string { $eeamcawaiqocomwy = null; if (function_exists('cmb2_utils')) { $cqswiiioaimeskoi = cmb2_utils(); if ($cqswiiioaimeskoi) { $eeamcawaiqocomwy = $cqswiiioaimeskoi::url($mkomwsiykqigmqca); } } return $eeamcawaiqocomwy; } public function yqmceeqwiyggkkso() { echo '<div class="row mx-0 w-100">'; } public function wgskaqayecicmsgi() { echo "</div>"; } public function iicmygqmususcuyc() { echo '<div class="mx-2 bg-white cmb2-group-container">'; } public function pwqumygamucskggk() { echo "</div>"; } public function swewemuwgoyasmam($ikgwqyuyckaewsow) : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($ikgwqyuyckaewsow, ['class' => 'row']); } public function muaowgssocuyksym($sogsqsawoyqmqsqu, $kqokimuosyuyyucg, $sqeykgyoooqysmca, $scegeeyqweaksmki) { if ($this->myomgmiksogoikuc($scegeeyqweaksmki)) { $sgssayiyusuaawmm = $this->oqmggeywwyoaocca($scegeeyqweaksmki, 'vertical_tabs'); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw('div', ['class' => 'pr-tabs-wrap pr-tabs-' . ($sgssayiyusuaawmm ? 'vertical' : 'horizontal')]); echo $this->iuygowkemiiwqmiw('tabs', ['tabs' => $this->oqmggeywwyoaocca($scegeeyqweaksmki, 'tabs'), 'cmb_id' => $sogsqsawoyqmqsqu]); } } public function umawqkgmmckyygyk($sogsqsawoyqmqsqu, $kqokimuosyuyyucg, $sqeykgyoooqysmca, $scegeeyqweaksmki) { if ($this->myomgmiksogoikuc($scegeeyqweaksmki)) { echo '</div>'; } } public function myomgmiksogoikuc($scegeeyqweaksmki) : bool { $ywoucyskcquysiwc = $this->oqmggeywwyoaocca($scegeeyqweaksmki, 'tabs'); return $ywoucyskcquysiwc && is_array($ywoucyskcquysiwc); } }
