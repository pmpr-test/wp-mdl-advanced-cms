<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68169e27911f3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Date extends Field { protected ?string $timezoneMetaKey; protected ?string $dateFormat = 'Y-m-d'; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) { parent::__construct('text_date', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->qigsyyqgewgskemg('pr-datepicker'); $this->masauymeceuiyceo(); } public function meceicoawqkgwmoo() : ?string { return $this->timezoneMetaKey; } public function cyegqewoikkewamk(?string $kuywwkakmayqquok) : self { $this->timezoneMetaKey = $kuywwkakmayqquok; return $this; } public function uyomwmskouyyqyyq() : ?string { return $this->dateFormat; } public function migyiqecesmwseuy(?string $qquguecmwwmwomew) : self { $this->dateFormat = $qquguecmwwmwomew; return $this; } }
