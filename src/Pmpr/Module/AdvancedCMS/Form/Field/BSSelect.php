<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e78481de3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class BSSelect extends Select { protected ?array $items = []; protected bool $isCustom = false; protected ?string $target = null; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\142\163\x73\x65\x6c\x65\x63\164"); $this->gmywsauuqwcmakuc("\163\164\171\154\145", "\x62\164\156\55\167\150\x69\x74\145")->gmywsauuqwcmakuc("\154\151\166\x65\55\163\145\x61\162\143\150", "\164\162\165\145")->gmywsauuqwcmakuc("\144\x65\x73\x65\154\145\143\x74\x2d\141\x6c\x6c\55\x74\145\170\164", __("\x44\x65\x73\145\154\145\143\164", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\x72\x2d\x62\157\157\x73\x74\x72\x61\x70\x2d\x73\x65\x6c\145\143\164\x20\x62\x6f\157\163\164\x72\x61\160\55\x73\x65\x6c\x65\x63\x74"); } public function wasgwsogmuquqeaa() : ?array { return $this->items; } public function icsmsougoccqosgc(?array $oammesyieqmwuwyi) : self { $this->items = $oammesyieqmwuwyi; return $this; } public function oeewiaacscgyamai($igqsaukqcqscimok) : self { $this->items[] = $igqsaukqcqscimok; return $this; } public function wiweskwucmkcukcm($oammesyieqmwuwyi = []) : self { if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto gicyayswqyuoekcq; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->oeewiaacscgyamai($igqsaukqcqscimok); kosaqwikueyksqmw: } mqkmcysgoiaouiwm: gicyayswqyuoekcq: return $this; } public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self { if (!$giqggecqqikcysgq) { goto iikiiioqiyegyaak; } $this->gmywsauuqwcmakuc("\155\141\x78\x2d\157\x70\x74\151\x6f\x6e\163", (string) $giqggecqqikcysgq); iikiiioqiyegyaak: return $this; } public function soyqkauogoaqekos() : self { $this->oockkiieqcwiocga("\x75\x73\145\x72\x73"); return $this; } public function yyayequseyasoyks() : self { $this->oockkiieqcwiocga("\x74\145\162\x6d\x73"); return $this; } public function smmismmuuccmscya() : self { $this->oockkiieqcwiocga("\x70\x6f\x73\164\x73"); return $this; } public function wkqyoukciomqiyew() : self { $this->oockkiieqcwiocga("\x6d\157\144\145\x6c\163"); return $this; } public function kacywqgmseagyuyu() : self { $this->oockkiieqcwiocga("\x69\x63\157\x6e\x73"); return $this; } public function imwouwmsiukakwqi() : self { $this->oockkiieqcwiocga("\x63\x6f\155\x6d\x65\x6e\164\x73"); return $this; } public function euagkaqymgiigyaa() : self { $this->oockkiieqcwiocga("\x73\x74\x61\164\151\143\137\151\155\141\x67\x65\163"); return $this; } public function squsacgomqgkakaw() : ?string { return $this->target; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self { $this->gmywsauuqwcmakuc(Constants::okeuagwgwkmiokac, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES)); return $this; } public function osmkwgikieoyykwg() : self { $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\157\x72\x74\x61\142\154\x65\55\x73\145\154\145\x63\x74")->qigsyyqgewgskemg("\163\157\x72\x74\x61\142\x6c\145\x2d\163\145\x6c\x65\x63\164"); return $this; } public function somyygqqawwswkyk() : ?bool { return $this->isCustom; } public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self { $this->isCustom = $somyygqqawwswkyk; return $this; } public function oikgogcweiiaocka() : self { $this->sanitizer = null; return $this->aseocggwwegcmqes("\155\165\154\164\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw(); } public function zosqeeykkcqmmkqs() : bool { return strpos($this->gueasuouwqysmomu(), "\155\x75\154\x74\151") !== false; } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self { return $this->qcgocuceocquqcuw(Constants::qescuiwgsyuikume, $iwiewowoqmoekyqi); } public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self { $uiymkeeaukcyqqik = "\x63\157\165\x6e\164"; if (!$gaeqamemwmwsyukm) { goto uiosisocuwokwkie; } $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\40\76\x20{$gaeqamemwmwsyukm}"; uiosisocuwokwkie: return $this->gmywsauuqwcmakuc("\163\x65\x6c\x65\x63\164\x65\144\x2d\164\145\x78\164\55\x66\157\162\155\x61\x74", $uiymkeeaukcyqqik); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); if (!is_array($oammesyieqmwuwyi)) { goto gcckqucukawcasgk; } if (!$this->squsacgomqgkakaw()) { goto cuumeogeomowqisc; } $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $this->squsacgomqgkakaw()); cuumeogeomowqisc: $this->gmywsauuqwcmakuc(Constants::qwumqqyuasyskkkc, wp_json_encode($oammesyieqmwuwyi, JSON_THROW_ON_ERROR)); gcckqucukawcasgk: if ($this->msmiagueogcsucgc()) { goto csammceowmqwaamq; } $iwiewowoqmoekyqi = __("\x43\x68\157\157\x73\145\40\141\x6e\40\157\x70\x74\151\x6f\x6e\x2e\56\56", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\x64\145\163\145\154\x65\143\164\x2d\x61\154\x6c\x2d\164\x65\170\x74", __("\x44\145\x73\x65\154\145\x63\164", PR__CMN__FOUNDATION)); if ($this->zosqeeykkcqmmkqs()) { goto qmkaeeomgkwggoyo; } $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; qmkaeeomgkwggoyo: csammceowmqwaamq: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if (!$this->squsacgomqgkakaw()) { goto ocaguquugeamqckq; } $kkeqqkkkqwkocsyu["\142\145\x66\x6f\162\x65"] = "\x3c\144\151\166\40\x63\x6c\141\163\163\x3d\42\x70\157\x73\151\x74\x69\x6f\x6e\55\162\x65\154\x61\164\151\x76\145\x22\x3e"; $kkeqqkkkqwkocsyu["\x61\146\x74\145\162"] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi([Constants::waguuiqqgsysuukq => "\x31\170", "\143\x6f\156\x74\x61\x69\x6e\x65\162\x5f\x63\x6c\141\163\x73" => "\x70\x6f\163\x69\x74\151\x6f\x6e\x2d\x73\164\x61\x74\151\143"]) . "\74\57\144\x69\x76\76"; ocaguquugeamqckq: return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
