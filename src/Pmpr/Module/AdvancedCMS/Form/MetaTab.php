<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d6cf09f0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\AttributeTrait; use CMB2_Boxes; class MetaTab extends Common { use AttributeTrait; protected ?string $id = null; protected bool $hide = false; protected bool $once = false; protected bool $regKey = true; protected ?string $hook = null; protected ?string $topMenu = null; protected ?string $postsSlug = null; protected ?string $key = "\155\x79\x5f\157\160\x74\x69\157\156"; protected array $menuArgs = ["\x76\x69\145\167\137\x63\141\x70\141\142\151\x6c\x69\164\171" => '', "\160\x61\162\145\x6e\164\137\163\x6c\x75\x67" => '', "\160\141\147\x65\137\164\x69\x74\154\x65" => '', "\155\x65\x6e\165\137\x74\x69\x74\154\145" => '', "\143\141\160\141\142\151\154\x69\x74\171" => "\155\141\156\x61\147\x65\137\x6f\x70\164\151\157\x6e\163", "\x6d\145\x6e\x75\137\x73\x6c\x75\147" => '', "\x69\x63\157\156\137\x75\162\154" => '', "\x70\157\163\151\164\x69\157\x6e" => null, "\x6e\x65\164\167\x6f\162\153" => false]; protected array $tabs = []; protected int $column = 1; protected $saveText = false; protected $resetText = false; protected array $load = []; protected ?string $title = ''; protected ?string $page = null; protected ?array $metaBoxes = []; public function __construct($uusmaiomayssaecw = null) { if (is_admin() && class_exists("\x43\x4d\102\62")) { $this->id = $this->iaqckqwoiseyqaku(); $this->key = $uusmaiomayssaecw; parent::__construct(); } } public function qsqiqgmeoowykuue() : ?array { return $this->metaBoxes; } public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self { $this->metaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie; return $this; } public function swqsasqieqqgusew(?string $suaemuyiacqyugsm) : self { $this->page = $suaemuyiacqyugsm; return $this; } public function kyqakacqeumicgag() : ?string { return $this->page; } public function ecogksqmogoywequ(bool $caeimyuwaykuuaay) : self { $this->hide = $caeimyuwaykuuaay; return $this; } public function ekwgmoqoeywwwccw() : bool { return $this->hide; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function licekmysugkqeoay() : array { return $this->menuArgs; } public function qaygoqgeieeugsey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->menuArgs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function mmsykuomogaqoaye() : ?string { return $this->hook; } public function oggwewqswcggccae(?string $iaakskwmyqceoscy) : self { $this->hook = $iaakskwmyqceoscy; return $this; } public function ceiqwucmgawwmawo($ioeaaqcyogamwwqc) : self { $this->saveText = $ioeaaqcyogamwwqc; return $this; } public function kusoyyuwiukiokww() { return $this->saveText; } public function kkigeuaeguyueaem($kqkwemukaemqoyas) : self { $this->resetText = $kqkwemukaemqoyas; return $this; } public function occsuagsiuuimcoy() { return $this->resetText; } public function eigooueumicckoge() : array { return $this->load; } public function agcaegggmmeuammg($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->licekmysugkqeoay(), $uusmaiomayssaecw); } public function ecmssiawmckmucas(bool $msykisgooaaamcio) : self { $this->regKey = $msykisgooaaamcio; return $this; } public function agciemoaikwmiugi() : bool { return $this->regKey; } public function iaqckqwoiseyqaku() : string { return "\143\155\157" . rand(1000, 99999); } public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self { if ($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1) { $qgoqiacsiccwoawi = 1; } $this->column = $qgoqiacsiccwoawi; return $this; } public function myywwqkyiwawwquy() : int { return $this->column; } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self { $this->key = $uusmaiomayssaecw; return $this; } public function wigskegsqequoeks() { $kiiwewqkgqgqwwue = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsaomcwyacqcumaa() && $this->agcaegggmmeuammg("\156\x65\164\x77\157\162\153") ? "\156\x65\x74\167\157\x72\153\137" : ''; $this->qcsmikeggeemccuu("\x61\144\x6d\x69\156\137\150\x65\141\x64", [$this, "\x75\165\x71\x71\153\x67\171\x71\x65\x6b\155\147\x79\x63\x67\161"])->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\x69\156\151\164", [$this, "\171\x65\171\x69\147\165\x79\x65\147\x6d\155\171\x75\x73\145\141"])->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\145\x6e\x71\x75\145\165\145\137\163\x63\162\151\x70\164\x73", [$this, "\x77\x71\161\x63\x6b\153\x6d\x71\x61\153\x69\161\165\171\143\163"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\141\144\155\151\x6e\x5f\155\x65\156\x75", [$this, "\163\157\143\143\x6f\x6d\x61\x6b\x77\145\161\147\x73\x6b\x69\143"], 20)->qcsmikeggeemccuu("\x63\155\142\x32\137\162\x65\x6e\144\145\162\137\x6f\160\164\151\157\156\x73\137\163\141\166\x65\137\142\x75\x74\164\157\156", [$this, "\x65\143\171\x79\161\163\147\x77\167\x75\165\153\x67\163\x73\x67"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->agciemoaikwmiugi()) { register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc()); } $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\x70\x61\162\x65\x6e\164\x5f\163\x6c\165\x67"); $ewuukoycimkekouc = $this->agcaegggmmeuammg("\x6d\x65\156\x75\137\x73\x6c\x75\x67"); $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom === $ewuukoycimkekouc); $this->swqsasqieqqgusew($ewuukoycimkekouc ?: $this->cisyiemkeykgkomc()); $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\151\145\167\x5f\143\x61\x70\x61\x62\151\x6c\151\164\x79"); if (!$eiiwoqgkgmosakem) { $this->qaygoqgeieeugsey("\x76\x69\x65\x77\137\x63\x61\x70\141\142\x69\x6c\x69\x74\x79", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\x63\x61\x70\x61\x62\151\x6c\x69\164\x79") : false); } } public function ccauywsgwsesgmua() : bool { return $this->once; } public function ikqkaioeswqeaqkw(?string $uwkoaemcqekeqqkw) : self { $this->topMenu = $uwkoaemcqekeqqkw; return $this; } public function eyqwmckgumyaoams() : ?string { return $this->topMenu; } public function aeecsqoyykuekais(?string $sgeeumkioegwiymu) : self { $this->postsSlug = $sgeeumkioegwiymu; return $this; } public function kecacgyqmgeeqmme() : ?string { return $this->postsSlug; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce, $egkeamycaysqsoma = true) : self { if ($egkeamycaysqsoma) { $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\164\141\x62", $cciauwuwuqaywgce, $this); } if ($cciauwuwuqaywgce instanceof Tab) { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; } return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } return $this; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function qessyiueeiwwgyag() { $eiiwoqgkgmosakem = $this->sscegwueamckwmcy("\x66\x6f\162\155\137\147\145\x6e\x65\x72\141\x74\x6f\x72\137\x62\x61\143\x6b\x65\156\144\137\160\141\147\145\137\x63\x61\x70\x61\142\x69\x6c\x69\x74\171", $this->agcaegggmmeuammg($this->agcaegggmmeuammg("\x76\151\145\x77\137\143\x61\x70\x61\142\x69\154\x69\x74\x79"))); if (!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eiiwoqgkgmosakem))) { $iogqeouiuqyewuqe = ''; $kqweykcqkgkmoqay = ''; $this->qigsyyqgewgskemg("\x77\x72\x61\160\40\x63\x6d\142\x32\55\x6f\x70\x74\151\157\x6e\163\x2d\160\x61\147\145\x20\143\x6d\x6f\55\157\160\164\151\x6f\156\x73\x2d\x70\x61\147\x65")->qigsyyqgewgskemg($this->cisyiemkeykgkomc()); $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($this->equiyaoamqmaeckc()); foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if ($cciauwuwuqaywgce instanceof Tab) { if ($cciauwuwuqaywgce->wkkcmkuiigsukyik()) { $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea(); $qgoqiacsiccwoawi = 1; $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\137\164\141\142\137\163\151\144\145\137\x6d\x65\164\x61\142\157\170\145\x73", $cciauwuwuqaywgce->weookicuaacigemm()); if (!empty($scwwkgcyecqgioqs)) { $scwwkgcyecqgioqs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($scwwkgcyecqgioqs, "\x67\x65\x74\120\162\x69\x6f\162\151\x74\x79"); foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) { if ($qkweikswegyciaie instanceof MetaBox) { $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\137\163\x69\x64\x65\137\x6d\x65\x74\x61\142\x6f\170\x65", $qkweikswegyciaie); if ($qkweikswegyciaie->mukiwuqwmywsckco()) { $qkweikswegyciaie->register($this->cisyiemkeykgkomc()); $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\x6f\x72\x6d\137\155\141\x6b\x65\162\137\x74\141\x62\137\x73\151\x64\x65\x5f\x63\157\x6e\164\x61\151\156\145\162\137{$aokagokqyuysuksm}", "\x73\151\x64\x65"); $qgoqiacsiccwoawi = 2; } } } } $iogqeouiuqyewuqe .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia([$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()], "\x23", [Constants::gouqcwikiiygyasc => "\157\x70\164\x2d\164\x61\142\55{$aokagokqyuysuksm}", "\143\154\x61\x73\x73" => "\x6e\x61\x76\55\164\x61\142\40\157\160\x74\55\164\141\142\x20\160\x72\x2d\x74\x61\142", "\x64\141\164\141\x2d\157\x70\x74\x63\157\156\164\x65\x6e\x74" => "\43\157\x70\164\55\143\x6f\156\164\x65\156\x74\x2d{$aokagokqyuysuksm}"]); $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\143\x6f\156\x74\x65\156\x74", [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi, "\x64\x65\163\143\x72\x69\x70\x74\151\x6f\x6e" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\x63\x6f\156\164\x61\x69\x6e\x65\x72\x5f\x61\164\x74\x72\x73" => ["\x69\144" => "\x6f\x70\164\55\x63\157\x6e\164\x65\156\x74\55{$aokagokqyuysuksm}", "\x63\154\141\x73\x73" => "\x6f\160\x74\55\x63\x6f\156\x74\x65\x6e\164", "\x64\141\x74\x61\55\142\x6f\170\145\163" => implode("\x2c", array_keys($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue())))]]); } } } $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]); echo $this->iuygowkemiiwqmiw("\155\145\164\x61\164\x61\142", ["\153\x65\171" => $this->cisyiemkeykgkomc(), "\x68\157\157\153" => $this->mmsykuomogaqoaye(), "\x74\141\x62\163" => $iogqeouiuqyewuqe, "\160\x61\x67\x65" => $this->kyqakacqeumicgag(), "\143\157\x6c\165\155\156" => $this->myywwqkyiwawwquy(), "\156\157\156\x63\145\x73" => [wp_nonce_field("\155\145\164\x61\x2d\x62\157\170\x2d\x6f\x72\x64\145\162", "\155\x65\x74\141\55\x62\x6f\170\55\x6f\162\144\x65\162\x2d\156\x6f\x6e\143\x65", false, false), wp_nonce_field("\143\154\x6f\x73\145\x64\160\x6f\x73\164\x62\157\x78\145\163", "\x63\154\x6f\x73\145\x64\x70\x6f\163\x74\142\x6f\170\x65\x73\x6e\157\x6e\x63\145", false, false)], "\x62\165\x74\x74\x6f\x6e\163" => $qyukicweqoisimwg, "\143\x6f\156\164\145\x6e\164\163" => $kqweykcqkgkmoqay, "\160\141\x67\145\137\164\151\164\154\x65" => esc_html(get_admin_page_title()), "\143\x6f\x6e\x74\141\x69\156\x65\162\137\141\x74\164\162\163" => $this->ccekeuwwqqoiwuwy()]); $this->once = false; } } public function makgumuaykymweaq() : array { $ywmkwiwkosakssii = []; $omwmuycmeqcqokom = $this->eyqwmckgumyaoams(); $omwmuycmeqcqokom = $this->agcaegggmmeuammg(Constants::qoquaeuooeycomks) ?: $omwmuycmeqcqokom; $cmyoswawcimsecyy = $this->agcaegggmmeuammg(Constants::ysgwugcqguggmigq) ?: $this->qcgakseyaikigqco(); if ($omwmuycmeqcqokom) { $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\x3f\160\157\x73\x74\x5f\x74\171\x70\x65\75{$this->kecacgyqmgeeqmme()}" : ''; $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc; } $ywmkwiwkosakssii[] = $cmyoswawcimsecyy; $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::qsegwakiwaiyimyy) ?: $cmyoswawcimsecyy; $ywmkwiwkosakssii[] = $this->sscegwueamckwmcy("\x66\157\x72\155\137\147\145\x6e\x65\x72\x61\164\x6f\x72\x5f\142\141\x63\x6b\145\156\144\137\160\141\x67\x65\x5f\x63\x61\160\141\142\x69\154\x69\x74\171", $this->agcaegggmmeuammg(Constants::ucmueuwwcmocgmig)); $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::wuowaiyouwecckaw) ?: $this->cisyiemkeykgkomc(); $ywmkwiwkosakssii[] = [$this, "\x71\145\163\163\x79\x69\165\x65\145\151\167\167\147\171\x61\x67"]; if (!$omwmuycmeqcqokom) { $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x69\143\157\x6e\x5f\165\x72\x6c") ?: ''; } else { $ywmkwiwkosakssii[] = null; } $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::kekcgssiyagioocg) === null ? null : (int) $this->agcaegggmmeuammg(Constants::kekcgssiyagioocg); $ywmkwiwkosakssii["\x63\x62"] = $omwmuycmeqcqokom ? "\141\x64\x64\137\x73\x75\x62\155\x65\156\165\137\160\x61\x67\x65" : "\x61\x64\x64\137\x6d\x65\156\x75\137\160\x61\147\x65"; return $ywmkwiwkosakssii; } public function soccomakweqgskic() { $ywmkwiwkosakssii = $this->makgumuaykymweaq(); $iaakskwmyqceoscy = $ywmkwiwkosakssii["\x63\142"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6], $ywmkwiwkosakssii[7]); $this->oggwewqswcggccae($iaakskwmyqceoscy); $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\137\160\162\x69\156\164\137\x73\x74\171\154\145\x73\55{$this->mmsykuomogaqoaye()}", ["\103\115\x42\62\137\150\157\157\153\x75\160", "\145\156\161\165\x65\x75\145\x5f\143\x6d\142\137\143\163\163"])->qcsmikeggeemccuu("\x61\144\x64\137\x6d\x65\164\141\x5f\x62\157\170\x65\163\x5f{$this->mmsykuomogaqoaye()}", [$this, "\167\x61\143\x65\155\x6b\161\x6d\x69\167\165\161\157\165\147\141"])->qcsmikeggeemccuu("\154\x6f\x61\144\x2d{$this->mmsykuomogaqoaye()}", [$this, "\x6f\x67\153\x69\x69\x65\x77\163\143\x65\155\141\161\x6b\167\147"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x66\x74\145\x72\x5f\151\x6e\151\x74\x5f\x68\x6f\157\153", false), $iaakskwmyqceoscy, $this); $this->siqqwyaiwgagokug(); } private function siqqwyaiwgagokug() { $symcuwcoqkwoscsg = $this->eigooueumicckoge(); $iaakskwmyqceoscy = $this->mmsykuomogaqoaye(); if ($symcuwcoqkwoscsg) { foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) { $ywmkwiwkosakssii = (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::okeuagwgwkmiokac, 1); $aiamqeawckcsuaou = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::uqgcmmosieyimiku); $ekiuyucoiagmscgy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::wwgusigoaksqmwsm); $sqqewmoeaekuyyas = (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::iuqumwggccmcuyem, 10); if ($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi[Constants::uqgcmmosieyimiku], "\55\x5b\150\x6f\157\x6b\135")) { $aiamqeawckcsuaou = str_replace("\x5b\x68\157\157\x6b\135", $iaakskwmyqceoscy, $aiamqeawckcsuaou); $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10; $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1; $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas); } } } } public function wacemkqmiwuqouga() { $ywoucyskcquysiwc = $this->equiyaoamqmaeckc(); if ($ywoucyskcquysiwc) { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc()); if ($cciauwuwuqaywgce->sekaaukqmiysugws()) { $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\164\141\x62\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x6d\145\164\x61\x62\x6f\170\x65\x73", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this); $uaqusiikkokccqou = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($uaqusiikkokccqou, "\147\x65\164\120\162\151\x6f\162\x69\x74\171"); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\x74\141\142\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\155\x65\164\x61\x62\157\x78\x5f{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this); if ($qkweikswegyciaie instanceof MetaBox) { $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm(); $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\163\151\x64\145" ? "\156\157\x72\x6d\x61\154" : $mgkceomocowocqyo); } } } } } foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) { if ($qkweikswegyciaie instanceof MetaBox) { $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\163\151\144\x65"); } } } public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\156\157\x72\x6d\x61\x6c") { if (is_array($uoeiskamgscgeccq)) { $uoeiskamgscgeccq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea()); } if ($this->uaicqoagkoeacawy($uoeiskamgscgeccq)) { $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea(); $this->qcsmikeggeemccuu("\143\155\142\62\x5f\x73\x61\166\145\137\x6f\x70\x74\x69\x6f\x6e\x73\55\160\x61\147\x65\x5f\146\151\x65\154\144\163\x5f{$aokagokqyuysuksm}", [$this, "\x67\x6f\x79\x65\155\151\153\157\147\x65\165\x73\x6b\x67\x61\x73"], 10, 2); $wyicesskmckwqeec = "\160\157\x73\x74\x62\x6f\170\137\143\x6c\x61\163\x73\145\163\x5f{$this->mmsykuomogaqoaye()}\x5f{$aokagokqyuysuksm}"; if ("\x73\x69\x64\x65" !== $mgkceomocowocqyo && $this->myomgmiksogoikuc()) { $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x65\x77\163\x6b\153\167\x75\167\153\x6b\x6b\x61\x71\x77\x67\x6b"]); } if ($uoeiskamgscgeccq->meta_box["\143\x6c\x6f\163\x65\x64"]) { $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\171\x69\145\x6d\x75\x73\x67\161\x6d\157\x79\x6d\x73\x67\x65\x67"]); } $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo); } } public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $qkweikswegyciaie->mwikyscisascoeea(), Constants::qescuiwgsyuikume => $qkweikswegyciaie->iwqugwigmoiagwec(), Constants::cacismqswgaewkuu => $iaakskwmyqceoscy, Constants::osiogououyayqyck => $mgkceomocowocqyo, Constants::wwgusigoaksqmwsm => [$this, "\141\x75\x73\x79\x6d\155\x67\x73\x6b\x73\x6f\161\167\x75\161\153"]]); } public function wqqckkmqakiquycs() { if ($this->csaueuycewaiuaay() && $this->myomgmiksogoikuc()) { $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\55\x61\x64\x6d\151\x6e"; $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->imsomwwswyoquoqk($eueuqacmukymcyya, $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, "\155\x75\154\164\151\157\x70\164\x73\56\152\163")); $ywoucyskcquysiwc = $this->equiyaoamqmaeckc(); $cciauwuwuqaywgce = reset($ywoucyskcquysiwc); $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->fowiaymccsmewemu($eueuqacmukymcyya, "\120\115\120\x52\x4f\x70\164\x54\141\142\x73", [Constants::ascagqcquwgmygkm => $this->kyqakacqeumicgag(), "\160\157\163\x74\164\x79\160\x65" => $this->kecacgyqmgeeqmme(), "\144\x65\x66\141\165\x6c\164\x74\x61\x62" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']); } } public function uuqqkgyqekmgycgq() { if ($this->myomgmiksogoikuc()) { $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\x6d\x65\164\141\x74\141\142\56\x63\163\163", [Constants::imywcsggckkcywgk => $this->kyqakacqeumicgag()]); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\163\x74\171\154\145", [Constants::gouqcwikiiygyasc => "\160\162\55\164\141\x62\x2d\x63\x6c\x65\x61\156\x75\x70\55\143\x73\163"], true, $icyaoosaykeskiuu); } } public function iaggsikquucsoiko() { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x73\143\x72\151\x70\x74", [], true, "\x6a\x51\x75\x65\162\x79\50\144\157\x63\165\155\x65\x6e\x74\51\56\x72\145\141\x64\171\x28\x66\165\x6e\143\x74\151\x6f\x6e\x28\x29\x7b\160\157\163\x74\142\157\x78\145\163\x2e\141\144\x64\x5f\160\x6f\163\x74\x62\157\170\x5f\x74\x6f\x67\x67\154\145\x73\x28\42\160\157\163\164\x62\x6f\x78\x2d\143\x6f\x6e\x74\x61\x69\156\145\162\42\x29\73\175\x29\x3b"); } public function ecyyqsgwwuukgssg() { if ($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw()) { echo $this->uaasoaieuoymsgsi(); } } private function uaicqoagkoeacawy($uoeiskamgscgeccq) : bool { return isset($uoeiskamgscgeccq->meta_box["\x73\150\157\167\x5f\157\x6e"][Constants::ascagqcquwgmygkm]) && $uoeiskamgscgeccq->meta_box["\x73\x68\157\167\x5f\157\x6e"][Constants::ascagqcquwgmygkm] === "\x6f\160\164\x69\x6f\156\x73\x2d\160\141\147\x65" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\163\150\157\167\x5f\x6f\156"][Constants::ciyoccqkiamemcmm], true); } public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu) { if ($sogsqsawoyqmqsqu && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && !$this->ccauywsgwsesgmua()) { add_settings_error("{$this->cisyiemkeykgkomc()}\x2d\156\157\x74\151\x63\145\x73", '', __("\x53\x65\164\x74\x69\156\147\x73\40\x55\160\x64\141\x74\145\144", PR__CMN__FOUNDATION), "\x75\x70\144\141\x74\x65\144"); settings_errors("{$this->cisyiemkeykgkomc()}\x2d\x6e\157\x74\x69\x63\x65\163"); $this->once = true; } } public function uaasoaieuoymsgsi() : ?string { return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\143\154\x61\163\x73" => "\x62\x75\x74\164\x6f\x6e\55\x70\x72\x69\x6d\x61\162\171", Constants::NAME => "\163\165\x62\155\151\x74\55\143\x6d\142", Constants::squoamkioomemiyi => "\163\x75\x62\155\151\x74"], true); } public function omeeeegkauuouaka() : string { return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\143\154\141\163\x73" => "\x62\165\164\164\x6f\x6e\55\163\145\143\x6f\156\144\141\162\171", Constants::NAME => "\x72\145\x73\145\164\55\143\155\142", Constants::squoamkioomemiyi => "\142\165\x74\x74\x6f\x6e"]); } public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = [], $omiygkiiauwgkegg = false) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\x63\154\x61\163\x73" => "\x62\165\x74\x74\157\156", Constants::ciyoccqkiamemcmm => $pkyyagewkiyckmwy]); $nsmgceoqaqogqmuw = ''; if ($pkyyagewkiyckmwy) { if ($omiygkiiauwgkegg) { $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\x73\163", "\160\157\x73\x69\164\151\157\156\x2d\162\x65\154\x61\x74\x69\x76\x65"); $pkyyagewkiyckmwy .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->kqmkicmuscsgqeoi([Constants::waguuiqqgsysuukq => "\61\x78"]); } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x62\165\164\164\157\156", $wwgucssaecqekuek, $pkyyagewkiyckmwy); } return $nsmgceoqaqogqmuw; } public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\157\x70\x74\x2d\150\151\x64\144\145\156"; return $cmkqisoeyioisqaw; } public function yiemusgqmoymsgeg($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\x63\154\157\163\x65\x64"; return $cmkqisoeyioisqaw; } public function ogkiiewscemaqkwg() { $this->cqscqicucmeamkyq("\141\144\144\137\x6d\145\x74\141\x5f\x62\157\170\x65\x73\137{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\141\144\144\137\155\145\x74\141\137\x62\157\x78\x65\163", $this->mmsykuomogaqoaye(), null); } public function ausymmgsksoqwuqk($post, $qkweikswegyciaie) { $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie[Constants::gouqcwikiiygyasc], $this->cisyiemkeykgkomc()); if ($scegeeyqweaksmki) { $icwicymcioeyeyek = $_POST; if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) { $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek); } else { if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->cisyiemkeykgkomc()); } } $scegeeyqweaksmki->show_form(); } } private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki) : bool { $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki); $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $gaqymcswicmikcuu); $ooewkimkcskcwsso = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\162\x65\x73\145\164\55\x63\x6d\142"); $kqokimuosyuyyucg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\157\x62\x6a\145\143\x74\x5f\x69\144"); return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq($gaqymcswicmikcuu), $gaqymcswicmikcuu); } private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki) : bool { $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki); $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $gaqymcswicmikcuu); $kqokimuosyuyyucg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\x6f\142\152\145\x63\x74\x5f\151\x64"); return $this->oqmggeywwyoaocca($scegeeyqweaksmki, "\163\141\x76\145\137\x66\x69\145\154\x64\x73") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $gaqymcswicmikcuu); } public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool { if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = $_POST; } return (bool) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\163\x75\x62\155\x69\x74\x2d\143\x6d\142", false); } public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array { $saouceauqqiwcwas = []; if ($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui)) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) { if (!is_object($qkweikswegyciaie)) { $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie); } } } return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas; } public function csaueuycewaiuaay() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($this->cisyiemkeykgkomc()); } public function __toString() { return self::class; } }
