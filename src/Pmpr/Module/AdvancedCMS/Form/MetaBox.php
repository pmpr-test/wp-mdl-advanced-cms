<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839bedbb08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use CMB2; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\AdvancedCMS\Form\Field\Field; class MetaBox extends Element { protected array $tabs = []; protected array $fields = []; protected ?string $icon = null; protected array $postTypes = []; protected bool $hookAble = false; protected array $taxonomies = []; protected bool $isVerticalTab = true; protected ?string $context = 'normal'; public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false) { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; $this->hookAble = $yiyasiwyokuumigg; parent::__construct($aokagokqyuysuksm); } public function wigskegsqequoeks() { if ($this->qwkguquqiiaekmsi() && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $this->qcsmikeggeemccuu('cmb2_admin_init', [$this, 'register']); } parent::wigskegsqequoeks(); } public function yqsycyoeiusqqqgm() : ?string { return $this->context; } public function sucsaaaeiecgqcem(?string $mgkceomocowocqyo) : self { $this->context = $mgkceomocowocqyo; return $this; } public function maosyyqsuygkawma() : self { $this->sucsaaaeiecgqcem('normal'); return $this; } public function igeseuiwcwwsuesi() : self { $this->sucsaaaeiecgqcem('side'); return $this; } public function ymyesuiosuagoaco() : self { $this->sucsaaaeiecgqcem('advanced'); return $this; } public function qwkguquqiiaekmsi() : ?bool { return $this->hookAble; } public function cmuqkakwwqyywqke(bool $yiyasiwyokuumigg) : self { $this->hookAble = $yiyasiwyokuumigg; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function kyccqycmcyqomiqm() : ?bool { return $this->isVerticalTab; } public function cgmuykwsyqgaymgm(bool $kyccqycmcyqomiqm) : self { $this->isVerticalTab = $kyccqycmcyqomiqm; return $this; } public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, $cciauwuwuqaywgce->ugmceccgwaaaigiy()); } } return $ikgwqyuyckaewsow; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) { $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); } $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $this->mkksewyosgeumwsa($aiowsaccomcoikus); } } return $this; } public function mukiwuqwmywsckco() : bool { return !empty($this->ugmceccgwaaaigiy()); } public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self { if (!is_array($this->objectType)) { $this->objectType = []; } $this->objectType[] = $mqyaskyaekmkegmg; return $this; } public function iakygkwocqoukwuc() : ?array { return $this->postTypes; } public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self { if (!in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc(), true)) { $this->postTypes[] = $useksmwkuswkwcqg; $this->kukswgcoysaeescm($useksmwkuswkwcqg); } return $this; } public function aueosikimququsko(array $sciomagaqmgggsiu) : self { foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if ($useksmwkuswkwcqg) { $this->mgieiwsmcswmmiim($useksmwkuswkwcqg); } } return $this; } public function iwqugwigmoiagwec() : ?string { $meqocwsecsywiiqs = $this->qcgakseyaikigqco(); if ($this->eyamqkqiykagecsw()) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ['class' => 'pr-metabox-icon icon-sm']); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui([$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs], ['class' => 'pr-metabox-title my-auto']); } return $meqocwsecsywiiqs; } public function mqmocoguqcyymgqu() : ?array { return $this->taxonomies; } public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self { if (!in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) { $this->taxonomies[] = $kesssewsiegssiya; } return $this; } public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self { foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($kesssewsiegssiya) { $this->acqyqaaeeogkosoq($kesssewsiegssiya); } } return $this; } public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if ($cciauwuwuqaywgce instanceof Tab) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } } return $this; } public function osqsemgesogkmios() : bool { return !empty($this->equiyaoamqmaeckc()); } public function register($uusmaiomayssaecw = null) : CMB2 { if (!$uusmaiomayssaecw) { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); } $uiewakwqscemywuo = $this->weqsyyuyccsemacu($uusmaiomayssaecw); if ($this->osqsemgesogkmios()) { foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) { if ($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik()) { $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy()); } } $uiewakwqscemywuo['tabs'] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) { return $cciauwuwuqaywgce->wkkcmkuiigsukyik(); }); } if ($this->mukiwuqwmywsckco()) { $uiewakwqscemywuo[Constants::ymckmcsiymwqucoq] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy()); } $scegeeyqweaksmki = new_cmb2_box($uiewakwqscemywuo); $scegeeyqweaksmki->object_type($this->aaamyckgicycisqq()); return $scegeeyqweaksmki; } public function gisikkgygmseekyi() : self { return $this->ycgswwsswoyyeqgc(['comment']); } public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array { $uiewakwqscemywuo = [Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::qescuiwgsyuikume => $this->iwqugwigmoiagwec(), Constants::osiogououyayqyck => $this->yqsycyoeiusqqqgm(), Constants::iuqumwggccmcuyem => $this->qwkguquqiiaekmsi() ? 'low' : $this->yywskysiycwkwsgw(), 'show_names' => $this->eoceqqugyiaqqayw(), 'capability' => $this->gwaeeegmgggawiyi(), 'display_cb' => false, 'object_types' => $this->aaamyckgicycisqq(), 'vertical_tabs' => $this->kyccqycmcyqomiqm(), 'admin_menu_hook' => false]; $egkyssmuqcwaciya = 'form-container'; if ($this->iakygkwocqoukwuc()) { $uiewakwqscemywuo['post_types'] = $this->iakygkwocqoukwuc(); $egkyssmuqcwaciya .= ' pr-metabox'; } else { if ($this->mqmocoguqcyymgqu()) { $egkyssmuqcwaciya .= ' pr-term'; $uiewakwqscemywuo['taxonomies'] = $this->mqmocoguqcyymgqu(); $uiewakwqscemywuo['object_types'] = ['term']; } } if (!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms) { $uiewakwqscemywuo['show_on'] = ['key' => $this->aaamyckgicycisqq(), 'value' => [$kooiowmeygoykmms]]; } $uiewakwqscemywuo['classes'] = $egkyssmuqcwaciya; $this->megwuoouecmkuaqm($uiewakwqscemywuo); return $this->configuration; } }
