<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc07269ac0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Exception; class Page extends Element { protected ?string $type = ''; protected ?string $label = ''; protected ?string $pageTitle = ''; protected ?int $menuPosition = 0; protected ?string $menuTitle = ''; protected ?MetaTab $metaTab = null; protected ?string $parentMenu = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\137\151\156\151\x74", [$this, "\153\x6b\x75\143\x6d\x63\x61\x61\171\141\x69\145\x61\163\171\x69"])->qcsmikeggeemccuu("\143\x6d\x62\62\137\141\x64\155\x69\156\137\x69\156\151\x74", [$this, "\151\143\167\155\153\x65\163\x79\163\x6b\147\x73\x6b\x71\x75\x75"], 12); parent::wigskegsqequoeks(); } public final function kkucmcaayaieasyi() { if ($this->sgeaogakoscmysgc()) { $this->enqueue(); } } public function enqueue() { } public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self { $this->aeqcqgsamsqomowm()->sikqggwmmykuiymy($qkweikswegyciaie); return $this; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->aeqcqgsamsqomowm()->aucimgwswmgaocae($cciauwuwuqaywgce); return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { $this->aeqcqgsamsqomowm()->ciwuiwsyckiiogwo($ywoucyskcquysiwc); return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function aeqcqgsamsqomowm() : ?MetaTab { return $this->metaTab; } public function uikgwcuascgeissw() : ?string { return $this->label; } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function mmqossqsksemasay() : ?string { return $this->pageTitle; } public function cowekeaeqoiuokue(?string $cmyoswawcimsecyy) : self { $this->pageTitle = $cmyoswawcimsecyy; return $this; } public function kigkkuoayyscqiuq() : ?string { return $this->menuTitle; } public function keyusaamwmwewmqi() : ?int { return $this->menuPosition; } public function wweqioyisauoyoga(?string $kuysccmeoqgaiumc) : self { $this->menuTitle = $kuysccmeoqgaiumc; return $this; } public function cgugaaoykcyiomuk() : ?string { return $this->parentMenu; } public function gyiwwuiiqgqmocmy(?string $cicseccwqcweeksc) : self { $this->parentMenu = $cicseccwqcweeksc; return $this; } public function icwmkesyskgskquu() : ?bool { try { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if ($uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc())) { $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\160\x72\x2d\160\141\x67\145\x20\160\162\55\155\145\164\141\x62\x6f\170\x2d\x70\141\147\145")->qaygoqgeieeugsey("\160\x61\x67\145\137\x74\151\x74\154\x65", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\x6d\x65\156\165\137\164\151\x74\x6c\x65", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\x70\157\x73\151\164\x69\157\x6e", $this->keyusaamwmwewmqi())->qaygoqgeieeugsey("\x63\x61\x70\x61\x62\151\154\x69\164\x79", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\x76\151\x65\167\x5f\143\x61\160\x61\x62\x69\x6c\151\164\171", $this->gwaeeegmgggawiyi()); $this->metaTab = $uqcooyiiyysckskk; if ($uqcooyiiyysckskk->csaueuycewaiuaay()) { $this->ecwgiiuacoaokqkw(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\137\x61\146\x74\x65\x72\x5f\147\x65\156\145\162\141\x74\x65\137\146\x6f\162\x6d"), $this); $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\x5f\164\x61\x62\163"), [], $this->aeqcqgsamsqomowm()); if ($ywoucyskcquysiwc) { $this->ciwuiwsyckiiogwo($ywoucyskcquysiwc); } $this->metaTab = $this->cosqcmekuiigqywc($this->aeqcqgsamsqomowm()); self::asimeyiqqkeawyoq(); } } } } catch (Exception $wgaoewqkwgomoaai) { } return parent::icwmkesyskgskquu(); } public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab { return $uqcooyiiyysckskk; } public function sgeaogakoscmysgc() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($this->cisyiemkeykgkomc()); } public function oiucukewkckkwiqc() : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->cisyiemkeykgkomc()); } }
