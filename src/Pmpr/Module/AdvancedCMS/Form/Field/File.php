<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a4128579             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class File extends OptionAwareField { protected $previewSize; protected array $queryArgs = []; protected ?string $idValue = null; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) { parent::__construct('file', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->qigsyyqgewgskemg('cmb2-upload-file')->wyqeckayigciacse('thumbnail')->kesomeowemmyygey(Constants::auqoykcmsiauccao, false); } public function eswksowyeqcsokew(?string $oiegiwogmwmawkeo) : self { return $this->oieccmgqekecomks(Constants::waguuiqqgsysuukq, $oiegiwogmwmawkeo); } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca) : self { $qgeeqyucwycemwmo = $this->ykykkiyoumuomwiq(Constants::squoamkioomemiyi, []); if (!in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true)) { $qgeeqyucwycemwmo[] = $sqeykgyoooqysmca; $this->oieccmgqekecomks(Constants::squoamkioomemiyi, $qgeeqyucwycemwmo); } return $this; } public function ewsymcsuimmoicgg($yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ['mp4']; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("video/{$sqeykgyoooqysmca}"); } } return $this; } public function esauscaiuyiikmgc(array $yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ['png', 'jpeg', 'svg+xml', 'webp']; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("image/{$sqeykgyoooqysmca}"); } } return $this; } public function wyqeckayigciacse($cosceaceqiwayaag) : self { $this->previewSize = $cosceaceqiwayaag; return $this; } public function oieccmgqekecomks($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->queryArgs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function ykykkiyoumuomwiq($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->queryArgs, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function qagaugomegkiimwa(array $seauiwyeoycowegg) : self { foreach ($seauiwyeoycowegg as $uusmaiomayssaecw => $awacioyscseiomkc) { $this->oieccmgqekecomks($uusmaiomayssaecw, $awacioyscseiomkc); } return $this; } public function eoiciaagaoaaguim(?string $yiaeyeagmeucwgos) : self { $this->idValue = $yiaeyeagmeucwgos; return $this; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu[Constants::TEXT]['add_upload_file_text'] = __('Add or Upload File', PR__CMN__FOUNDATION); $wmcaeewaokocymiy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei('', ['class' => 'my-1 d-block']); $ukwokcuqauuosmoo = $this->uuwsoaqmkwcgaqes(); if ($qgeeqyucwycemwmo = $this->ykykkiyoumuomwiq(Constants::squoamkioomemiyi)) { $qgeeqyucwycemwmo = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq('code', [], implode("</code> | <code>", $qgeeqyucwycemwmo)); $ukwokcuqauuosmoo .= $wmcaeewaokocymiy . sprintf('%s: %s', $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__('Valid media types', PR__CMN__FOUNDATION)), $qgeeqyucwycemwmo) . $wmcaeewaokocymiy; } if ($oiegiwogmwmawkeo = $this->ykykkiyoumuomwiq(Constants::waguuiqqgsysuukq)) { $oiegiwogmwmawkeo = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iuwsgyqakicakuoq($oiegiwogmwmawkeo); if ($oiegiwogmwmawkeo) { $ukwokcuqauuosmoo .= $wmcaeewaokocymiy . sprintf('%s: <code>%s</code>', $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__('valid image size', PR__CMN__FOUNDATION)), "{$oiegiwogmwmawkeo['width']}x{$oiegiwogmwmawkeo['height']}") . $wmcaeewaokocymiy; } } $kkeqqkkkqwkocsyu['desc'] = $ukwokcuqauuosmoo; $this->ccmwycqioaicegoc($ukwokcuqauuosmoo); return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
