<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a4128579             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Exception; class Page extends Element { protected ?string $type = ''; protected ?string $label = ''; protected ?string $pageTitle = ''; protected ?int $menuPosition = 0; protected ?string $menuTitle = ''; protected ?MetaTab $metaTab = null; protected ?string $parentMenu = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'kkucmcaayaieasyi'])->qcsmikeggeemccuu('cmb2_admin_init', [$this, 'icwmkesyskgskquu'], 12); parent::wigskegsqequoeks(); } public final function kkucmcaayaieasyi() { if ($this->sgeaogakoscmysgc()) { $this->enqueue(); } } public function enqueue() { } public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self { $this->aeqcqgsamsqomowm()->sikqggwmmykuiymy($qkweikswegyciaie); return $this; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->aeqcqgsamsqomowm()->aucimgwswmgaocae($cciauwuwuqaywgce); return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { $this->aeqcqgsamsqomowm()->ciwuiwsyckiiogwo($ywoucyskcquysiwc); return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function aeqcqgsamsqomowm() : ?MetaTab { return $this->metaTab; } public function uikgwcuascgeissw() : ?string { return $this->label; } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function mmqossqsksemasay() : ?string { return $this->pageTitle; } public function cowekeaeqoiuokue(?string $cmyoswawcimsecyy) : self { $this->pageTitle = $cmyoswawcimsecyy; return $this; } public function kigkkuoayyscqiuq() : ?string { return $this->menuTitle; } public function keyusaamwmwewmqi() : ?int { return $this->menuPosition; } public function wweqioyisauoyoga(?string $kuysccmeoqgaiumc) : self { $this->menuTitle = $kuysccmeoqgaiumc; return $this; } public function cgugaaoykcyiomuk() : ?string { return $this->parentMenu; } public function gyiwwuiiqgqmocmy(?string $cicseccwqcweeksc) : self { $this->parentMenu = $cicseccwqcweeksc; return $this; } public function icwmkesyskgskquu() : ?bool { try { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if ($uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc())) { $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg('pr-page pr-metabox-page')->qaygoqgeieeugsey('page_title', $this->mmqossqsksemasay())->qaygoqgeieeugsey('menu_title', $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey('position', $this->keyusaamwmwewmqi())->qaygoqgeieeugsey('capability', $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey('view_capability', $this->gwaeeegmgggawiyi()); $this->metaTab = $uqcooyiiyysckskk; if ($uqcooyiiyysckskk->csaueuycewaiuaay()) { $this->ecwgiiuacoaokqkw(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}_after_generate_form"), $this); $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}_tabs"), [], $this->aeqcqgsamsqomowm()); if ($ywoucyskcquysiwc) { $this->ciwuiwsyckiiogwo($ywoucyskcquysiwc); } $this->metaTab = $this->cosqcmekuiigqywc($this->aeqcqgsamsqomowm()); self::asimeyiqqkeawyoq(); } } } } catch (Exception $wgaoewqkwgomoaai) { } return parent::icwmkesyskgskquu(); } public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab { return $uqcooyiiyysckskk; } public function sgeaogakoscmysgc() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($this->cisyiemkeykgkomc()); } public function oiucukewkckkwiqc() : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->cisyiemkeykgkomc()); } }
