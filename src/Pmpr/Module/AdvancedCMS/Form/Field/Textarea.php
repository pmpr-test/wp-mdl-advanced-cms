<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6fe69d8d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Textarea extends Text { public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null) { $this->sanitizer = 'sanitize_textarea_field'; parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, 'textarea'); $this->qigsyyqgewgskemg('cmb2_textarea'); } public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self { $this->qcgocuceocquqcuw('rows', (string) $essikcmqiyqaqoaq); return $this; } public function wcgckeeiiseccqkc() : self { $this->aseocggwwegcmqes('textarea_code'); $this->sanitizer = [$this, 'ekgoooigaeikwekw']; return $this; } public function ekgoooigaeikwekw($cmwygeyygwqaemaq) { return $cmwygeyygwqaemaq; } }
