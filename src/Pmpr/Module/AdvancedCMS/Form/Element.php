<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d169a70242             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Pmpr\Module\AdvancedCMS\Form\Traits\FieldTrait; use Pmpr\Module\AdvancedCMS\Form\Traits\ElementTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; class Element extends Common { use FieldTrait, ToArrayTrait, ElementTrait; protected int $priority = 10; protected bool $show = true; protected ?string $id = null; protected ?string $name = null; protected ?string $title = null; protected bool $showNames = false; protected $objectType = "\x6f\x70\x74\151\157\156\x73\55\x70\x61\147\145"; protected ?string $capability = null; protected array $configuration = []; public function __construct($aokagokqyuysuksm = null) { $this->id = $aokagokqyuysuksm; $this->showNames = true; $this->capability = "\155\141\156\x61\147\145\137\x6f\160\x74\151\x6f\156\163"; $this->configuration = []; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160", [$this, "\147\157\x73\x6d\x71\143\x6d\x6d\x6f\155\153\161\x77\x6d\x69\x73"], 99)->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x69\x6e\x69\x74"], 99)->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\151\156\151\x74", [$this, "\x79\145\x79\151\147\165\171\145\x67\x6d\155\x79\x75\163\145\x61"], 99); } public function gogaagekwoisaqgu() { } public function init() { $this->gogaagekwoisaqgu(); } public function yeyiguyegmmyusea() { } public function gosmqcmmomkqwmis() { } public function wkkcmkuiigsukyik() : bool { return $this->show; } public function wiukukykqcgssssq($ekcswiguywieeeoc = true) : self { $this->show = $ekcswiguywieeeoc; return $this; } public function gwaeeegmgggawiyi() : ?string { return $this->capability; } public function womysscuckiacoua(string $eogowigeyucaauig) : self { $this->capability = $eogowigeyucaauig; return $this; } public function aaamyckgicycisqq() { return $this->objectType; } public function ycgswwsswoyyeqgc($mqyaskyaekmkegmg) : self { $this->objectType = $mqyaskyaekmkegmg; return $this; } public function ekwcyuwcmeeoyqqm(array $seyqqsmuaiegkeeq = []) : self { $this->wcweamocuicuusky("\x74\141\x78\x6f\x6e\x6f\155\151\145\x73", $seyqqsmuaiegkeeq); return $this->ycgswwsswoyyeqgc("\164\x65\x72\x6d"); } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ecwgiiuacoaokqkw() { } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function eoceqqugyiaqqayw() : ?bool { return $this->showNames; } public function eioykqwseqsqaskq(bool $egmsqkuugooyouuu) : self { $this->showNames = $egmsqkuugooyouuu; return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(string $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function cisyiemkeykgkomc() : ?string { $aokagokqyuysuksm = $this->mwikyscisascoeea(); $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); return $aokagokqyuysuksm ?: $ymqmyyeuycgmigyo; } public function icwmkesyskgskquu() : ?bool { return true; } public function weqsyyuyccsemacu() : array { return $this->configuration; } public function megwuoouecmkuaqm($oyuikeusicgqgwak) : self { foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { $this->wcweamocuicuusky($uusmaiomayssaecw, $uiewakwqscemywuo); } return $this; } public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { if (!isset($this->configuration[$uusmaiomayssaecw])) { $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } return $this; } }
