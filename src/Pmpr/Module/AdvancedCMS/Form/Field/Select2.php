<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d6cf09f0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Select2 extends Select { protected ?array $items = []; protected bool $isCustom = false; protected ?string $target = null; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x73\145\154\145\x63\164\x32"); $this->eskgwaywimqcwcyy("\141\144\144\x61\x62\154\x65", "\x66\x61\x6c\163\x65"); } public function wasgwsogmuquqeaa() : ?array { return $this->items; } public function icsmsougoccqosgc(?array $oammesyieqmwuwyi) : self { $this->items = $oammesyieqmwuwyi; return $this; } public function oeewiaacscgyamai($igqsaukqcqscimok) : self { $this->items[] = $igqsaukqcqscimok; return $this; } public function wiweskwucmkcukcm($oammesyieqmwuwyi = []) : self { if (is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi) { foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->oeewiaacscgyamai($igqsaukqcqscimok); } } return $this; } public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self { if ($giqggecqqikcysgq) { $this->eskgwaywimqcwcyy("\x6d\x61\170\151\155\x75\155\x2d\163\x65\154\x65\x63\x74\151\x6f\x6e\55\x6c\x65\156\x67\164\150", (string) $giqggecqqikcysgq); } return $this; } public function soyqkauogoaqekos() : self { $this->oockkiieqcwiocga("\x75\163\145\x72\x73"); return $this; } public function yyayequseyasoyks() : self { $this->oockkiieqcwiocga("\x74\x65\x72\155\163"); return $this; } public function smmismmuuccmscya() : self { $this->oockkiieqcwiocga("\x70\x6f\163\164\x73"); return $this; } public function squsacgomqgkakaw() : ?string { return $this->target; } public function imwouwmsiukakwqi() : self { $this->oockkiieqcwiocga("\143\157\x6d\x6d\145\156\x74\163"); return $this; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self { $this->eskgwaywimqcwcyy("\141\x72\147\163", json_encode($ywmkwiwkosakssii)); return $this; } public function osmkwgikieoyykwg() : self { $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\x73\157\x72\x74\x61\x62\154\145\55\x73\x65\154\x65\x63\x74\x32")->qigsyyqgewgskemg("\x73\x6f\x72\x74\141\x62\x6c\x65\x2d\163\145\154\145\143\164\62"); return $this; } public function somyygqqawwswkyk() : ?bool { return $this->isCustom; } public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self { $this->isCustom = $somyygqqawwswkyk; return $this; } public function oikgogcweiiaocka() : self { return $this->aseocggwwegcmqes("\155\165\154\x74\x69{$this->gueasuouwqysmomu()}"); } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self { return $this->eskgwaywimqcwcyy("\160\154\x61\x63\145\x68\157\x6c\x64\145\x72", $iwiewowoqmoekyqi); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($this->somyygqqawwswkyk()) { $this->igmaewykumgwoaoy("\x63\154\x61\163\x73", "\143\x75\163\164\157\155\55\x73\x65\154\145\x63\164\x32\55\163\145\154\x65\x63\x74\x6f\x72"); } else { $this->igmaewykumgwoaoy("\x63\154\x61\x73\x73", "\x73\145\154\145\143\164\x32\x2d\163\x65\154\145\143\164\157\x72"); } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); if (is_array($oammesyieqmwuwyi)) { if ($this->squsacgomqgkakaw()) { $this->eskgwaywimqcwcyy("\164\x61\162\147\x65\x74", $this->squsacgomqgkakaw()); } $this->eskgwaywimqcwcyy("\x69\164\145\x6d\x73", json_encode($oammesyieqmwuwyi)); } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
