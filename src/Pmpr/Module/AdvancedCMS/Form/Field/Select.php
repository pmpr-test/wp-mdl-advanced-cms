<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4af920840             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Select extends OptionAwareField { public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\163\x65\154\x65\x63\x74") { parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field { if ($eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie); } $this->gmywsauuqwcmakuc("\x76\x61\154\x75\145\163", (string) $eqgoocgaqwqcimie); } return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self { foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) { if ($yuwymayicwwqiske) { unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]); $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\137" . $eqgoocgaqwqcimie; } if ($pkyyagewkiyckmwy) { $meqocwsecsywiiqs .= "\40\x28{$pkyyagewkiyckmwy}\x29"; } $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs; } if (is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue) { $this->kesomeowemmyygey($uusmaiomayssaecw, ["\154\141\x62\145\x6c" => $pkyyagewkiyckmwy, "\157\x70\x74\x69\x6f\x6e\163" => $qiouiwasaauyaaue]); } return $this; } public function qgcscuuessikoiko($igaagwuyasawwqms) : self { $this->qigsyyqgewgskemg("\x70\x72\x2d\x75\x70\x64\141\x74\141\142\x6c\145\55\151\x6e\x70\x75\x74")->eskgwaywimqcwcyy("\165\x70\x64\x61\164\x61\x62\x6c\145", $igaagwuyasawwqms); return $this; } }
