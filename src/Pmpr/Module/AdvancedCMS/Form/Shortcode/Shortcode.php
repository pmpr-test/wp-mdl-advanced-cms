<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d97ef23b15             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Shortcode; use Pmpr\Module\AdvancedCMS\AdvancedCMS; use Pmpr\Module\AdvancedCMS\Form\Modal\Modal; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Shortcode extends Modal { public ?string $icon = null; public bool $isRendered = false; public bool $isButtonRendered = false; public function eyamqkqiykagecsw() : string { return $this->icon; } public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function gakuqssqwcuekqqi() : bool { return $this->isRendered; } public function eqesqooyciwmagsa(bool $gakuqssqwcuekqqi) : self { $this->isRendered = $gakuqssqwcuekqqi; return $this; } public function ocmescguywiskicc() : bool { return $this->isButtonRendered; } public function ywmaqqqoiueymkyu(bool $ocmescguywiskicc) : self { $this->isButtonRendered = $ocmescguywiskicc; return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x72\x65\x67\151\x73\164\145\x72"])->qcsmikeggeemccuu("\164\150\145\x5f\143\157\x6e\164\145\156\164", [$this, "\x77\165\155\x65\145\151\167\147\171\x75\x6d\x6d\155\171\171\x63"], 0)->qcsmikeggeemccuu("\x6d\x65\x64\x69\141\137\142\x75\x74\164\157\156\x73", [$this, "\163\x65\x77\161\163\167\145\147\x63\167\x79\167\x61\x6d\165\x77"], 20); parent::wigskegsqequoeks(); } public function wumeeiwgyummmyyc($ewgwqamkygiqaawc) { $ucccueqywigcukcc = get_shortcode_regex(); $ucccueqywigcukcc = sprintf("\x2f\x3c\160\x5b\136\76\x5d\52\77\76\x25\x73\x3c\134\x2f\x70\x3e\x2f", $ucccueqywigcukcc); return preg_replace($ucccueqywigcukcc, "\133\44\x31\x24\62\x24\63\x24\x34\44\65\x24\66\44\67\44\70\x5d", $ewgwqamkygiqaawc); } public function gsesiocqciggmauo() : array { $oammesyieqmwuwyi = []; $wsqkgswwooewwekw = parent::gsesiocqciggmauo(); foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) { if ($oceoauekaygmuoko instanceof Segment) { $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw(); if ($ccamueccusigaaio === Constants::ALL || is_array($ccamueccusigaaio) && $this->uqwgsuysegkweago($ccamueccusigaaio)) { $oceoauekaygmuoko->igmamuiesywmkgeu(__("\x49\x6e\x73\x65\162\x74\40\123\x68\157\162\164\143\x6f\144\x65", PR__CMN__FOUNDATION), ["\143\x6c\141\163\x73" => "\163\x68\157\x72\164\143\157\x64\x65\x2d\142\165\164\x74\157\156\55\x69\156\x73\x65\x72\x74"]); $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko; } } } return $oammesyieqmwuwyi; } public function sewqswegcwywamuw($igwkwmgowquoucyk) { if (Constants::ssmskyqgcmeiayco === $igwkwmgowquoucyk && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq()) { echo $this->cyeuiyggkcqmoecc(); $this->ywmaqqqoiueymkyu(true); } } public function cyeuiyggkcqmoecc() : string { return $this->iuygowkemiiwqmiw("\x62\165\164\164\x6f\x6e", [Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::NAME => $this->cisyiemkeykgkomc()], ["\143\154\141\163\x73" => self::class]); } public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool { if (!$ccamueccusigaaio) { $ccamueccusigaaio = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); } return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ccamueccusigaaio); } public function enqueue() { $eygsasmqycagyayw = AdvancedCMS::symcgieuakksimmu()->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\163\x68\157\162\164\x63\157\x64\x65", $eygsasmqycagyayw->get("\x73\150\157\162\164\143\157\144\x65\56\152\163"))->ayuciigykaswwqeo("\167\160\55\164\151\x6e\171\155\x63\x65")->simswskycwagoeqy()); global $shortcode_tags; $eygsasmqycagyayw->ikqyiskqaaymscgw("\x73\150\157\x72\164\143\157\x64\x65", ["\x6e\x61\155\145\x73" => array_keys($shortcode_tags)]); parent::enqueue(); } public function register($shortcodes = []) { $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\x5f\162\145\x67\151\x73\x74\145\162\137\x73\150\157\162\164\143\x6f\x64\145\x73", $shortcodes); } public function cisyiemkeykgkomc() : ?string { return parent::cisyiemkeykgkomc() . "\137\x73\150\x6f\x72\x74\143\157\x64\x65"; } public function qoqyomiqwooaeoiy() : bool { return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago(); } }
