<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d169a70242             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Slider extends Field { protected array $images = []; protected array $flickity = []; protected array $imageAttributes = []; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $somsiuiquigiqsmk, array $ucwamkesemusoeyc = [], ?string $mkqqqewsokcswckc = null) { parent::__construct("\163\x6c\x69\x64\x65\x72", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->images = $somsiuiquigiqsmk; $this->imageAttributes = $ucwamkesemusoeyc; } public function yumisumuwkywyyqk() : ?array { return $this->images; } public function gusyugwmyiwwsmui($somsiuiquigiqsmk) : self { $this->images = $somsiuiquigiqsmk; return $this; } public function igqaeymkskkcckac() : ?array { return $this->flickity; } public function quoekiugscwkoeoo($qweosuogcimgomwi) : self { $this->flickity = $qweosuogcimgomwi; return $this; } public function kkyeqssqcoqmoycc() : ?array { return $this->imageAttributes; } public function omsioukysssesasy($ucwamkesemusoeyc) : self { $this->imageAttributes = $ucwamkesemusoeyc; return $this; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x69\x6d\141\147\x65\x2d\x61\164\164\x72"] = $this->kkyeqssqcoqmoycc(); return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
