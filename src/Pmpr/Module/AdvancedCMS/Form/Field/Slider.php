<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d00078a083             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Slider extends Field { protected array $images = []; protected array $flickity = []; protected array $imageAttributes = []; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $somsiuiquigiqsmk, array $ucwamkesemusoeyc = [], ?string $mkqqqewsokcswckc = null) { parent::__construct("\163\x6c\151\144\145\x72", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->images = $somsiuiquigiqsmk; $this->imageAttributes = $ucwamkesemusoeyc; } public function yumisumuwkywyyqk() : ?array { return $this->images; } public function gusyugwmyiwwsmui($somsiuiquigiqsmk) : self { $this->images = $somsiuiquigiqsmk; return $this; } public function igqaeymkskkcckac() : ?array { return $this->flickity; } public function quoekiugscwkoeoo($qweosuogcimgomwi) : self { $this->flickity = $qweosuogcimgomwi; return $this; } public function kkyeqssqcoqmoycc() : ?array { return $this->imageAttributes; } public function omsioukysssesasy($ucwamkesemusoeyc) : self { $this->imageAttributes = $ucwamkesemusoeyc; return $this; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\151\x6d\x61\x67\145\x2d\x61\x74\x74\162"] = $this->kkyeqssqcoqmoycc(); return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
