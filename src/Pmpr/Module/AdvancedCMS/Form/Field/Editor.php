<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839bedbb08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Editor extends OptionAwareField { public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = []) { $this->sanitizer = null; parent::__construct('wysiwyg', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue); $this->qigsyyqgewgskemg('cmb2_textarea cmb2-wysiwyg-placeholder'); } public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self { $this->kesomeowemmyygey('textarea_rows', (string) $essikcmqiyqaqoaq); return $this; } public function gsomueooycksswcy() : self { $this->kesomeowemmyygey('media_buttons', false); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->kesomeowemmyygey('editor_class', $this->waecsyqmwascmqoa('class')); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
