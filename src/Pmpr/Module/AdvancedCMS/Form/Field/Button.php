<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc07269ac0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Button extends Field { protected ?string $link = null; protected ?string $element = null; protected ?string $target = null; protected ?string $label = null; protected ?string $icon = null; protected ?string $action = null; public function __construct(?string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy, ?string $mkqqqewsokcswckc = null) { parent::__construct("\142\x75\164\x74\157\x6e", $aokagokqyuysuksm, '', $mkqqqewsokcswckc); $this->eqggmusacqoqcwuk($pkyyagewkiyckmwy)->comqsuwokcsmkcau("\x62\165\x74\164\157\156"); } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs = null) : self { return $this->igmaewykumgwoaoy("\x74\x69\164\x6c\145", $meqocwsecsywiiqs); } public function micmwmywmkguiyyk() { return $this->qigsyyqgewgskemg("\x62\165\x74\x74\157\156\x2d\x70\162\151\x6d\x61\x72\171"); } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function uikgwcuascgeissw() : ?string { return $this->label; } public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self { $this->link = $iwywmkygwewiamwm; $this->comqsuwokcsmkcau("\x61"); return $this; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function cwqickkaaokiquuo(?string $aiamqeawckcsuaou) : self { $this->action = $aiamqeawckcsuaou; return $this; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function comqsuwokcsmkcau(?string $kqywgoqsmuswammk) : self { $this->element = $kqywgoqsmuswammk; return $this; } public function ygagwkucacyassau() : self { return $this->usoqcyyugsuyiewc("\160\162\x2d\141\143\x74\151\157\156"); } public function gioaiiyakuoimewa($qoiwmokisgikggia, $quyoyomkimissiqu = false) : self { $quyoyomkimissiqu = $quyoyomkimissiqu ? "\x2d\157\165\164\154\151\x6e\145" : ''; return $this->qigsyyqgewgskemg("\x62\x74\156\x20\x62\164\156{$quyoyomkimissiqu}\55{$qoiwmokisgikggia}"); } public function muywawimuacwmkgw($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x64\x61\x6e\x67\145\162", $quyoyomkimissiqu); } public function wksqkiomigqkkcgu($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x77\141\x72\x6e\x69\x6e\x67", $quyoyomkimissiqu); } public function miqekcqciusawwie($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x69\156\146\x6f", $quyoyomkimissiqu); } public function gmscmskmuissgywk($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\160\x72\x69\155\141\162\171", $quyoyomkimissiqu); } public function goqoickiksqsaeyk($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x73\145\143\x6f\156\144\141\162\x79", $quyoyomkimissiqu); } public function mweyuoqsqugqwcca($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x73\165\143\143\145\x73\x73", $quyoyomkimissiqu); } public function igkwmqewuauogeus(string $gwgqcsmomamyqsmy) : self { return $this->eskgwaywimqcwcyy("\x6e\157\x6e\x63\x65", wp_create_nonce($gwgqcsmomamyqsmy)); } public function ukmcmuaawacquume($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\x62\x75\x74\x74\157\156") : self { $this->qigsyyqgewgskemg("\x70\x72\x2d\143\x6f\x6e\x66\x69\x72\155\141\142\154\x65\x2d\x61\143\164\151\x6f\156"); return $this->gmywsauuqwcmakuc("\x63\x6f\x6e\146\151\x67", $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy($ywmkwiwkosakssii, $kqywgoqsmuswammk)); } }
