<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d169a70242             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use JsonException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Module\AdvancedCMS\Form\MetaBox; class Field { use HelperTrait, WrapperTrait, ToArrayTrait, TemplateTrait, AttributeTrait; protected $sanitizer = "\163\141\x6e\x69\164\151\172\145\x5f\x74\x65\170\x74\137\x66\x69\145\154\x64"; protected array $ignorables = []; protected array $errors = []; protected ?string $id = null; protected ?int $priority = 0; protected ?string $type = null; protected ?string $name = null; protected $default = null; protected ?string $desc = null; protected $classes; protected $defaultCb = null; protected $restValueCb; protected $value; protected $showOnCb = null; protected ?string $rowEnd = ''; protected ?string $rowStart = ''; public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) { if (!$sqeykgyoooqysmca) { wp_die("\x66\151\145\x6c\144\x20\x74\171\160\145\40\x69\x73\x20\156\157\x74\40\x73\x65\x74\54\40\155\145\164\141\x42\x6f\x78\72\x20" . static::class); } $this->ggiaseqygioygumq($aokagokqyuysuksm); $this->type = $sqeykgyoooqysmca; $this->name = $ymqmyyeuycgmigyo; $this->desc = $mkqqqewsokcswckc; $this->attributes = []; $this->imgcoakmmgqsckkm(12); if (!in_array($this->gueasuouwqysmomu(), ["\147\162\157\x75\x70", "\x72\141\144\151\x6f", "\x62\165\164\x74\157\156", "\x6d\165\154\164\x69\x5f\142\165\164\x74\157\x6e\x73"])) { $this->qigsyyqgewgskemg("\x77\55\61\60\60"); } if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\163\x61\156\x69\x74\x69\x7a\x65")) { $this->sanitizer = [$this, $qgciuiagkkguykgs]; } } public function kyayukmuuqaokgmm(?callable $cygiacuaaswggouy) : self { $this->showOnCb = $cygiacuaaswggouy; return $this; } public function aeuecemcqwokyewi($ekcswiguywieeeoc) : self { $this->kyayukmuuqaokgmm(static function () use($ekcswiguywieeeoc) { return $ekcswiguywieeeoc; }); return $this; } public function mugkkmkwquagcecw(?string $ogygkgwwyemqousg) : self { $this->rowEnd = $ogygkgwwyemqousg; return $this; } public function kkauggiwqygmwesc(?string $kqskugkaoecgcywm) : self { $this->rowStart = $kqskugkaoecgcywm; return $this; } public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x73\155"); } public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\155\x64"); } public function oiwawawcmigageco($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6c\x67"); } public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self { $egkyssmuqcwaciya = "\143\x6f\x6c"; if ($gcgsqcoqciockquc) { $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}"; } $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}"; $this->usoqcyyugsuyiewc($egkyssmuqcwaciya); return $this; } public function mgymikeweqyoaweq() : self { return $this->usoqcyyugsuyiewc("\160\170\55\x30"); } public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self { $egkyssmuqcwaciya = "\143\x6f\154"; if ($gcgsqcoqciockquc) { $egkyssmuqcwaciya .= "\x2d{$gcgsqcoqciockquc}"; } $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}"; $this->yqoekuewicqoescm($egkyssmuqcwaciya); return $this; } public function iemaiogyauaiiesq() : self { $emkaqwyswammaako = ['', "\163\x6d", "\x6d\x64", "\154\147"]; for ($imgcoakmmgqsckkm = 1; $imgcoakmmgqsckkm <= 12; $imgcoakmmgqsckkm++) { foreach ($emkaqwyswammaako as $gcgsqcoqciockquc) { $this->eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc); } } return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; $this->yaqyemmwkmgegwqy($aokagokqyuysuksm); return $this; } public function yaqyemmwkmgegwqy($aokagokqyuysuksm) : self { $this->mykogkuaqwmycgog("\x66\151\x65\154\144\x2d\x69\144\55{$this->mwikyscisascoeea()}"); return $this->qigsyyqgewgskemg("\146\x69\x65\x6c\x64\x2d\151\x64\x2d{$aokagokqyuysuksm}")->gmywsauuqwcmakuc("\146\151\145\x6c\x64\55\151\144", $aokagokqyuysuksm); } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function jyumyyugiwwiqomk($sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function iukseawoegcgwcoy(&$wwgucssaecqekuek, $ggauoeuaesiymgee, $uusmaiomayssaecw = null) : self { $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $ggauoeuaesiymgee); return $this; } public function miwgyweukiaicmos() { return $this->defaultCb; } public function qqowmcseeoiskoug($qwiycwgywyomkoog) : self { $this->defaultCb = $qwiycwgywyomkoog; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } protected function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function oiswysuiioecsaae($aokagokqyuysuksm = null) { $ggauoeuaesiymgee = $this->default; if ($aokagokqyuysuksm) { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($aokagokqyuysuksm, $ggauoeuaesiymgee); } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $this->default = $ggauoeuaesiymgee; return $this; } public function uuwsoaqmkwcgaqes() : ?string { return $this->desc; } public function ccmwycqioaicegoc(?string $mkqqqewsokcswckc) : self { $this->desc = $mkqqqewsokcswckc; return $this; } public function cuisiyiswcqkuogm() { return $this->classes; } public function eumecwmqmukqgyea() : self { return $this->qcgocuceocquqcuw("\162\145\x71\x75\x69\x72\145\144", "\162\x65\161\x75\151\x72\x65\144"); } public function msmiagueogcsucgc() : ?string { return $this->waecsyqmwascmqoa("\x72\x65\161\x75\151\x72\145\144"); } public function awyimywmcyoukaao() : self { return $this->masauymeceuiyceo(); } public function masauymeceuiyceo() : self { return $this->qigsyyqgewgskemg("\x64\151\x72\145\143\x74\151\x6f\156\x2d\x72\x74\154"); } public function eigeeiacogyacogm() : self { return $this->yskkmqiusguummwa(); } public function yskkmqiusguummwa() : self { return $this->qigsyyqgewgskemg("\144\151\x72\145\x63\x74\x69\x6f\156\55\154\164\x72"); } public function usoqcyyugsuyiewc(?string $egkyssmuqcwaciya) : self { $this->classes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya); return $this; } public function yqoekuewicqoescm(?string $egkyssmuqcwaciya) : self { $this->classes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ogaeogwycyqqckeu($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya); return $this; } public function wkmawgqeysyeiakk(array $cmkqisoeyioisqaw) : self { foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $this->usoqcyyugsuyiewc($egkyssmuqcwaciya); } return $this; } public function mkmssscwmeekwgqo() : self { return $this->usoqcyyugsuyiewc("\143\x6d\x62\x2d\x72\x6f\167\x2d\151\156\x6c\x69\156\145"); } public function yoimakcqmoqokkcu() : self { return $this->mgymikeweqyoaweq()->usoqcyyugsuyiewc("\143\155\x62\55\x72\157\x77\55\142\x6c\x6f\143\153"); } public function oykaosmaegqwmoga() : self { return $this->qigsyyqgewgskemg("\x64\151\x73\x61\142\154\145\144")->qcgocuceocquqcuw("\144\151\x73\141\x62\154\145\x64", "\x64\x69\163\x61\142\154\x65\x64"); } public function qooeaookuemoqecm() { return $this->value; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->value = $eqgoocgaqwqcimie; return $this; } public function ccakgucwwemiwkoi($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie, JSON_THROW_ON_ERROR); } $this->qigsyyqgewgskemg("\x64\145\160\145\156\x64\145\x64\55\x74\157")->gmywsauuqwcmakuc("\144\x65\160\145\156\144\145\144", $uusmaiomayssaecw)->gmywsauuqwcmakuc("\144\x65\160\145\156\144\145\144\x2d\x76\141\x6c\165\x65", $eqgoocgaqwqcimie); return $this; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea()); if ($eqgoocgaqwqcimie) { $kkeqqkkkqwkocsyu[Constants::wikgqsqysyuoykse] = $eqgoocgaqwqcimie; } return $kkeqqkkkqwkocsyu; } public function agkauiesooccqsae() : ?callable { return $this->restValueCb; } public function aygqoksyisymwcuw(callable $wkmuskegugkocuwc) : self { $this->restValueCb = $wkmuskegugkocuwc; return $this; } public function awakiiaoeeiaiqgo() : self { $this->qigsyyqgewgskemg("\x77\55\x6d\x64\55\x31\x30\x30"); return $this; } public function giaekmqwqoqmqcic() { return $this->ignorables; } public function qicwqseeaecsiiia($momcykaoccoymeig) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->giaekmqwqoqmqcic(), $momcykaoccoymeig); } public function kqkccuwgcwemskey($momcykaoccoymeig, $ikgwqyuyckaewsow) : self { $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig); $oyumuuqqsmuacmak[Constants::ymckmcsiymwqucoq] = $ikgwqyuyckaewsow; $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak; return $this; } public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if ($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true)) { wp_die("\x79\x6f\x75\x20\141\162\145\x20\x74\x72\171\x69\x6e\x67\x20\x74\157\40\151\x67\x6e\x6f\x72\145\40{$this->mwikyscisascoeea()}\x20\151\156\x70\x75\164\40\142\171\x20\x69\x74\163\145\x6c\x66\x2e"); } $this->ignorables[] = [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; return $this; } public function render(?string $aokagokqyuysuksm = '', bool $koaqeegoeiaiccse = false) { $ywmkwiwkosakssii = [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::qaacaqioeyiuakeu => $koaqeegoeiaiccse]; return MetaBox::iuaucuookgoqiiio([$this], $ywmkwiwkosakssii); } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { if ($iswcokucwmiosiaq) { $this->errors[] = $iswcokucwmiosiaq; } return $this; } public function ymoyyqeymakckaee() : array { return $this->errors; } public function aoimcoqycewceekq(?callable $umcwwewscqegoqoe) : void { $this->sanitizer = $umcwwewscqegoqoe; } public function ikaukuqokwgsyeia() : ?callable { return $this->sanitizer; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic()) { $this->qigsyyqgewgskemg("\x70\x72\x2d\151\x67\156\x6f\162\x61\142\x6c\145\55\151\156\x70\x75\x74")->eskgwaywimqcwcyy("\x69\x67\x6e\157\x72\x61\x62\x6c\145\x2d\164\x61\162\x67\145\x74", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($aoaumkkqqmwekemo, JSON_UNESCAPED_SLASHES)); } if ($ueeagokqmgisgauy = $this->ymoyyqeymakckaee()) { $this->eskgwaywimqcwcyy(Constants::iwyueouqaqegmcas, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ueeagokqmgisgauy)); $ukwokcuqauuosmoo = $this->uuwsoaqmkwcgaqes(); foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $ukwokcuqauuosmoo .= $iswcokucwmiosiaq; } $this->ccmwycqioaicegoc($ukwokcuqauuosmoo); } if (is_string($this->qooeaookuemoqecm()) && !in_array($this->gueasuouwqysmomu(), ["\144\x69\163\160\x6c\x61\171", "\x74\145\170\x74\141\x72\145\x61", "\167\x79\x73\151\x77\x79\x67"])) { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $this->qooeaookuemoqecm()); } } }
