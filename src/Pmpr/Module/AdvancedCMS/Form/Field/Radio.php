<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d00078a083             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Radio extends OptionAwareField { protected bool $inline; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { if (is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue) { $this->eyygsasuqmommkua(key($qiouiwasaauyaaue)); } parent::__construct("\x72\141\x64\x69\157", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue); } public function wmociykwcyesssui() : ?bool { return $this->inline; } public function awagieqcmmwkgwgs(bool $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function mkmssscwmeekwgqo() : Field { $this->awagieqcmmwkgwgs(true); return parent::mkmssscwmeekwgqo(); } public function sqoiuykcoueiucgc($pkyyagewkiyckmwy, $wwgucssaecqekuek) { return array_merge(["\x6c\141\x62\x65\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek); } }
