<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b6cb6c16d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Button extends Field { protected ?string $link = null; protected ?string $element = null; protected ?string $target = null; protected ?string $label = null; protected ?string $icon = null; protected ?string $action = null; public function __construct(?string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy, ?string $mkqqqewsokcswckc = null) { parent::__construct("\142\x75\164\x74\157\x6e", $aokagokqyuysuksm, '', $mkqqqewsokcswckc); $this->eqggmusacqoqcwuk($pkyyagewkiyckmwy)->comqsuwokcsmkcau("\x62\165\164\164\x6f\x6e"); } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs = null) : self { return $this->igmaewykumgwoaoy("\164\151\x74\154\145", $meqocwsecsywiiqs); } public function micmwmywmkguiyyk() { return $this->qigsyyqgewgskemg("\x62\x75\x74\x74\x6f\156\55\160\162\x69\155\x61\x72\x79"); } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function uikgwcuascgeissw() : ?string { return $this->label; } public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self { $this->link = $iwywmkygwewiamwm; $this->comqsuwokcsmkcau("\x61"); return $this; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function cwqickkaaokiquuo(?string $aiamqeawckcsuaou) : self { $this->action = $aiamqeawckcsuaou; return $this; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function comqsuwokcsmkcau(?string $kqywgoqsmuswammk) : self { $this->element = $kqywgoqsmuswammk; return $this; } public function ygagwkucacyassau() : self { return $this->usoqcyyugsuyiewc("\x70\x72\55\x61\143\x74\151\x6f\156"); } public function gioaiiyakuoimewa($qoiwmokisgikggia, $quyoyomkimissiqu = false) : self { $quyoyomkimissiqu = $quyoyomkimissiqu ? "\55\157\x75\164\154\151\x6e\x65" : ''; return $this->qigsyyqgewgskemg("\x62\164\x6e\40\x62\x74\156{$quyoyomkimissiqu}\55{$qoiwmokisgikggia}"); } public function muywawimuacwmkgw($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x64\141\x6e\147\x65\x72", $quyoyomkimissiqu); } public function wksqkiomigqkkcgu($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\167\x61\x72\156\151\x6e\147", $quyoyomkimissiqu); } public function miqekcqciusawwie($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x69\156\x66\157", $quyoyomkimissiqu); } public function gmscmskmuissgywk($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x70\162\x69\155\x61\162\171", $quyoyomkimissiqu); } public function goqoickiksqsaeyk($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x73\145\x63\x6f\x6e\x64\x61\162\171", $quyoyomkimissiqu); } public function mweyuoqsqugqwcca($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x73\165\x63\x63\x65\163\163", $quyoyomkimissiqu); } public function igkwmqewuauogeus(string $gwgqcsmomamyqsmy) : self { return $this->eskgwaywimqcwcyy("\156\x6f\x6e\x63\x65", wp_create_nonce($gwgqcsmomamyqsmy)); } public function ukmcmuaawacquume($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\x62\x75\x74\164\157\x6e") : self { $this->qigsyyqgewgskemg("\160\162\55\143\157\x6e\146\151\x72\155\x61\142\x6c\x65\55\141\143\164\151\x6f\x6e"); return $this->gmywsauuqwcmakuc("\143\x6f\x6e\146\151\x67", $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy($ywmkwiwkosakssii, $kqywgoqsmuswammk)); } }
