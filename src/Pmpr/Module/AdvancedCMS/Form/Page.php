<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4af920840             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Exception; class Page extends Element { protected ?string $type = ''; protected ?string $label = ''; protected ?string $pageTitle = ''; protected ?int $menuPosition = 0; protected ?string $menuTitle = ''; protected ?MetaTab $metaTab = null; protected ?string $parentMenu = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\x5f\x69\156\151\x74", [$this, "\x6b\x6b\165\143\x6d\x63\141\141\171\141\151\145\141\x73\171\x69"])->qcsmikeggeemccuu("\x63\155\142\x32\137\x61\144\155\151\x6e\137\x69\156\151\164", [$this, "\x69\x63\167\155\x6b\145\163\171\x73\153\147\163\x6b\x71\x75\165"], 12); parent::wigskegsqequoeks(); } public final function kkucmcaayaieasyi() { if ($this->sgeaogakoscmysgc()) { $this->enqueue(); } } public function enqueue() { } public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self { $this->aeqcqgsamsqomowm()->sikqggwmmykuiymy($qkweikswegyciaie); return $this; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->aeqcqgsamsqomowm()->aucimgwswmgaocae($cciauwuwuqaywgce); return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { $this->aeqcqgsamsqomowm()->ciwuiwsyckiiogwo($ywoucyskcquysiwc); return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function aeqcqgsamsqomowm() : ?MetaTab { return $this->metaTab; } public function uikgwcuascgeissw() : ?string { return $this->label; } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function mmqossqsksemasay() : ?string { return $this->pageTitle; } public function cowekeaeqoiuokue(?string $cmyoswawcimsecyy) : self { $this->pageTitle = $cmyoswawcimsecyy; return $this; } public function kigkkuoayyscqiuq() : ?string { return $this->menuTitle; } public function keyusaamwmwewmqi() : ?int { return $this->menuPosition; } public function wweqioyisauoyoga(?string $kuysccmeoqgaiumc) : self { $this->menuTitle = $kuysccmeoqgaiumc; return $this; } public function cgugaaoykcyiomuk() : ?string { return $this->parentMenu; } public function gyiwwuiiqgqmocmy(?string $cicseccwqcweeksc) : self { $this->parentMenu = $cicseccwqcweeksc; return $this; } public function icwmkesyskgskquu() : ?bool { try { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if ($uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc())) { $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg("\160\162\x2d\160\141\x67\145\40\160\x72\55\155\x65\164\x61\142\157\170\55\x70\x61\147\x65")->qaygoqgeieeugsey("\160\141\147\145\137\x74\x69\164\154\x65", $this->mmqossqsksemasay())->qaygoqgeieeugsey("\155\145\x6e\x75\x5f\164\151\x74\154\x65", $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey("\160\x6f\163\x69\164\x69\157\x6e", $this->keyusaamwmwewmqi())->qaygoqgeieeugsey("\143\141\160\141\x62\151\x6c\x69\x74\171", $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey("\x76\x69\145\167\137\143\141\x70\x61\x62\151\x6c\151\164\171", $this->gwaeeegmgggawiyi()); $this->metaTab = $uqcooyiiyysckskk; if ($uqcooyiiyysckskk->csaueuycewaiuaay()) { $this->ecwgiiuacoaokqkw(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\x5f\141\x66\164\145\x72\137\147\145\156\145\x72\x61\164\x65\137\146\x6f\162\155"), $this); $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}\x5f\x74\141\x62\x73"), [], $this->aeqcqgsamsqomowm()); if ($ywoucyskcquysiwc) { $this->ciwuiwsyckiiogwo($ywoucyskcquysiwc); } $this->metaTab = $this->cosqcmekuiigqywc($this->aeqcqgsamsqomowm()); self::asimeyiqqkeawyoq(); } } } } catch (Exception $wgaoewqkwgomoaai) { } return parent::icwmkesyskgskquu(); } public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab { return $uqcooyiiyysckskk; } public function sgeaogakoscmysgc() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($this->cisyiemkeykgkomc()); } public function oiucukewkckkwiqc() : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->cisyiemkeykgkomc()); } }
