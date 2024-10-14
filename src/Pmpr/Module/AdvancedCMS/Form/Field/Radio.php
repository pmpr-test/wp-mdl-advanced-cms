<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d97ef23b15             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Radio extends OptionAwareField { protected bool $inline; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { if (is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue) { $this->eyygsasuqmommkua(key($qiouiwasaauyaaue)); } parent::__construct("\x72\x61\144\x69\157", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue); } public function wmociykwcyesssui() : ?bool { return $this->inline; } public function awagieqcmmwkgwgs(bool $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function mkmssscwmeekwgqo() : Field { $this->awagieqcmmwkgwgs(true); return parent::mkmssscwmeekwgqo(); } public function sqoiuykcoueiucgc($pkyyagewkiyckmwy, $wwgucssaecqekuek) { return array_merge(["\x6c\141\142\145\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek); } }
