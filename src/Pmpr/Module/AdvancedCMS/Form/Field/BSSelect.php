<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d6cf09f0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class BSSelect extends Select { protected ?array $items = []; protected bool $isCustom = false; protected ?string $target = null; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x62\x73\163\145\x6c\x65\143\x74"); $this->gmywsauuqwcmakuc("\x73\164\x79\154\145", "\x62\164\x6e\55\167\x68\x69\x74\x65")->gmywsauuqwcmakuc("\154\x69\166\x65\x2d\x73\x65\141\162\x63\x68", "\x74\x72\165\x65")->gmywsauuqwcmakuc("\x64\145\163\145\154\145\x63\x74\x2d\141\x6c\154\55\x74\145\x78\164", __("\x44\x65\x73\145\154\x65\143\164", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\x72\55\142\157\x6f\163\164\162\x61\x70\55\x73\x65\154\x65\143\x74\40\142\x6f\157\x73\x74\x72\x61\160\x2d\163\x65\x6c\x65\143\x74"); } public function wasgwsogmuquqeaa() : ?array { return $this->items; } public function icsmsougoccqosgc(?array $oammesyieqmwuwyi) : self { $this->items = $oammesyieqmwuwyi; return $this; } public function oeewiaacscgyamai($igqsaukqcqscimok) : self { $this->items[] = $igqsaukqcqscimok; return $this; } public function wiweskwucmkcukcm($oammesyieqmwuwyi = []) : self { if (is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi) { foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->oeewiaacscgyamai($igqsaukqcqscimok); } } return $this; } public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self { if ($giqggecqqikcysgq) { $this->gmywsauuqwcmakuc("\x6d\141\170\x2d\157\x70\164\151\157\156\163", (string) $giqggecqqikcysgq); } return $this; } public function soyqkauogoaqekos() : self { $this->oockkiieqcwiocga("\165\x73\145\162\163"); return $this; } public function yyayequseyasoyks() : self { $this->oockkiieqcwiocga("\164\145\x72\x6d\x73"); return $this; } public function smmismmuuccmscya() : self { $this->oockkiieqcwiocga("\x70\x6f\x73\164\x73"); return $this; } public function wkqyoukciomqiyew() : self { $this->oockkiieqcwiocga("\x6d\x6f\144\x65\x6c\x73"); return $this; } public function kacywqgmseagyuyu() : self { $this->oockkiieqcwiocga("\151\143\157\156\163"); return $this; } public function imwouwmsiukakwqi() : self { $this->oockkiieqcwiocga("\143\157\155\x6d\145\156\x74\x73"); return $this; } public function euagkaqymgiigyaa() : self { $this->oockkiieqcwiocga("\x73\164\141\164\x69\x63\137\151\x6d\x61\147\145\163"); return $this; } public function squsacgomqgkakaw() : ?string { return $this->target; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self { $this->gmywsauuqwcmakuc(Constants::okeuagwgwkmiokac, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES)); return $this; } public function osmkwgikieoyykwg() : self { $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\157\162\x74\141\142\x6c\145\55\x73\x65\154\x65\143\164")->qigsyyqgewgskemg("\163\157\x72\x74\141\142\x6c\x65\x2d\x73\145\x6c\145\x63\x74"); return $this; } public function somyygqqawwswkyk() : ?bool { return $this->isCustom; } public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self { $this->isCustom = $somyygqqawwswkyk; return $this; } public function oikgogcweiiaocka() : self { $this->sanitizer = null; return $this->aseocggwwegcmqes("\x6d\x75\x6c\x74\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw(); } public function zosqeeykkcqmmkqs() : bool { return strpos($this->gueasuouwqysmomu(), "\155\165\154\164\x69") !== false; } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self { return $this->qcgocuceocquqcuw(Constants::qescuiwgsyuikume, $iwiewowoqmoekyqi); } public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self { $uiymkeeaukcyqqik = "\x63\157\x75\x6e\x74"; if ($gaeqamemwmwsyukm) { $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\40\x3e\40{$gaeqamemwmwsyukm}"; } return $this->gmywsauuqwcmakuc("\163\145\154\145\x63\x74\145\x64\55\x74\145\170\164\55\x66\157\162\x6d\x61\164", $uiymkeeaukcyqqik); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); if (is_array($oammesyieqmwuwyi)) { if ($this->squsacgomqgkakaw()) { $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $this->squsacgomqgkakaw()); } $this->gmywsauuqwcmakuc(Constants::qwumqqyuasyskkkc, wp_json_encode($oammesyieqmwuwyi, JSON_THROW_ON_ERROR)); } if (!$this->msmiagueogcsucgc()) { $iwiewowoqmoekyqi = __("\x43\x68\157\157\163\145\x20\141\156\40\157\160\x74\x69\157\156\56\x2e\56", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\x64\x65\x73\x65\154\145\x63\x74\x2d\141\154\154\x2d\164\145\x78\x74", __("\x44\x65\163\x65\154\145\x63\x74", PR__CMN__FOUNDATION)); if (!$this->zosqeeykkcqmmkqs()) { $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if ($this->squsacgomqgkakaw()) { $kkeqqkkkqwkocsyu["\142\145\x66\x6f\x72\x65"] = "\74\144\151\x76\40\143\x6c\x61\x73\x73\x3d\x22\160\x6f\x73\151\164\151\x6f\x6e\55\162\x65\x6c\141\164\151\x76\145\x22\76"; $kkeqqkkkqwkocsyu["\141\146\x74\x65\x72"] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi([Constants::waguuiqqgsysuukq => "\61\x78", "\143\x6f\156\164\x61\151\156\x65\162\137\x63\154\x61\x73\163" => "\160\x6f\163\151\164\151\157\156\55\163\164\141\164\x69\143"]) . "\x3c\57\x64\151\166\x3e"; } return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
