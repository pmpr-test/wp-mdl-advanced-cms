<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d6cf09f0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Exception; class Page extends Element { protected ?string $type = ''; protected ?string $label = ''; protected ?string $pageTitle = ''; protected ?int $menuPosition = 0; protected ?string $menuTitle = ''; protected ?MetaTab $metaTab = null; protected ?string $parentMenu = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\x6e\x5f\x69\x6e\151\x74", [$this, "\x6b\153\x75\x63\x6d\x63\x61\x61\171\141\151\145\141\x73\x79\x69"])->qcsmikeggeemccuu("\143\x6d\x62\62\x5f\x61\x64\x6d\x69\156\x5f\x69\x6e\x69\164", [$this, "\151\x63\x77\155\153\145\163\171\163\153\147\163\x6b\x71\x75\x75"], 12); parent::wigskegsqequoeks(); } public final function kkucmcaayaieasyi() { if ($this->sgeaogakoscmysgc()) { $this->enqueue(); } } public function enqueue() { } public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self { $this->aeqcqgsamsqomowm()->sikqggwmmykuiymy($qkweikswegyciaie); return $this; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->aeqcqgsamsqomowm()->aucimgwswmgaocae($cciauwuwuqaywgce); return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { $this->aeqcqgsamsqomowm()->ciwuiwsyckiiogwo($ywoucyskcquysiwc); return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function aeqcqgsamsqomowm() : ?MetaTab { return $this->metaTab; } public function uikgwcuascgeissw() : ?string { return $this->label; } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function mmqossqsksemasay() : ?string { return $this->pageTitle; } public function cowekeaeqoiuokue(?string $cmyoswawcimsecyy) : self { $this->pageTitle = $cmyoswawcimsecyy; return $this; } public function kigkkuoayyscqiuq() : ?string { return $this->menuTitle; } public function keyusaamwmwewmqi() : ?int { return $this->menuPosition; } public function wweqioyisauoyoga(?string $kuysccmeoqgaiumc) : self { $this->menuTitle = $kuysccmeoqgaiumc; return $this; } public function cgugaaoykcyiomuk() : ?string { return $this->parentMenu; } public function gyiwwuiiqgqmocmy(?string $cicseccwqcweeksc) : self { $this->parentMenu = $cicseccwqcweeksc; return $this; } public function icwmkesyskgskquu() : ?bool { try { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if ($uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc())) { $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\160\x72\x2d\x70\x61\147\145\40\160\x72\55\x6d\145\x74\141\x62\x6f\170\x2d\x70\x61\x67\x65")->qaygoqgeieeugsey("\160\141\147\145\x5f\x74\x69\x74\154\x65", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\x6d\x65\156\165\137\x74\151\164\x6c\x65", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\x70\x6f\163\x69\164\x69\x6f\x6e", $this->keyusaamwmwewmqi())->qaygoqgeieeugsey("\x63\141\160\x61\142\151\x6c\x69\164\x79", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\x76\151\145\x77\137\143\141\160\141\142\x69\154\151\x74\x79", $this->gwaeeegmgggawiyi()); $this->metaTab = $uqcooyiiyysckskk; if ($uqcooyiiyysckskk->csaueuycewaiuaay()) { $this->ecwgiiuacoaokqkw(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\137\x61\x66\164\145\162\137\147\x65\156\x65\x72\x61\x74\x65\x5f\x66\x6f\x72\155"), $this); $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\137\164\141\x62\163"), [], $this->aeqcqgsamsqomowm()); if ($ywoucyskcquysiwc) { $this->ciwuiwsyckiiogwo($ywoucyskcquysiwc); } $this->metaTab = $this->cosqcmekuiigqywc($this->aeqcqgsamsqomowm()); self::asimeyiqqkeawyoq(); } } } } catch (Exception $wgaoewqkwgomoaai) { } return parent::icwmkesyskgskquu(); } public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab { return $uqcooyiiyysckskk; } public function sgeaogakoscmysgc() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($this->cisyiemkeykgkomc()); } public function oiucukewkckkwiqc() : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->cisyiemkeykgkomc()); } }
