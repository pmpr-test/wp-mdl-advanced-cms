<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4af920840             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Shortcode; use Pmpr\Module\AdvancedCMS\AdvancedCMS; use Pmpr\Module\AdvancedCMS\Form\Modal\Modal; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Shortcode extends Modal { public ?string $icon = null; public bool $isRendered = false; public bool $isButtonRendered = false; public function eyamqkqiykagecsw() : string { return $this->icon; } public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function gakuqssqwcuekqqi() : bool { return $this->isRendered; } public function eqesqooyciwmagsa(bool $gakuqssqwcuekqqi) : self { $this->isRendered = $gakuqssqwcuekqqi; return $this; } public function ocmescguywiskicc() : bool { return $this->isButtonRendered; } public function ywmaqqqoiueymkyu(bool $ocmescguywiskicc) : self { $this->isButtonRendered = $ocmescguywiskicc; return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x72\145\147\x69\163\x74\x65\x72"])->qcsmikeggeemccuu("\x74\150\145\137\143\157\156\164\145\x6e\164", [$this, "\167\165\155\x65\145\151\x77\147\x79\165\x6d\x6d\x6d\x79\x79\143"], 0)->qcsmikeggeemccuu("\x6d\x65\144\151\141\137\x62\x75\x74\164\x6f\x6e\163", [$this, "\163\145\x77\161\163\167\145\x67\143\167\171\167\141\x6d\165\167"], 20); parent::wigskegsqequoeks(); } public function wumeeiwgyummmyyc($ewgwqamkygiqaawc) { $ucccueqywigcukcc = get_shortcode_regex(); $ucccueqywigcukcc = sprintf("\57\74\x70\133\x5e\x3e\135\52\x3f\76\x25\x73\x3c\x5c\57\x70\x3e\x2f", $ucccueqywigcukcc); return preg_replace($ucccueqywigcukcc, "\x5b\44\61\44\62\44\x33\44\x34\x24\x35\x24\x36\x24\x37\44\70\x5d", $ewgwqamkygiqaawc); } public function gsesiocqciggmauo() : array { $oammesyieqmwuwyi = []; $wsqkgswwooewwekw = parent::gsesiocqciggmauo(); foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) { if ($oceoauekaygmuoko instanceof Segment) { $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw(); if ($ccamueccusigaaio === Constants::ALL || is_array($ccamueccusigaaio) && $this->uqwgsuysegkweago($ccamueccusigaaio)) { $oceoauekaygmuoko->igmamuiesywmkgeu(__("\x49\x6e\163\x65\162\164\40\123\150\x6f\162\x74\143\x6f\144\145", PR__CMN__FOUNDATION), ["\143\x6c\141\x73\x73" => "\163\150\157\162\164\x63\157\144\x65\55\142\x75\164\x74\157\156\55\x69\156\163\x65\162\164"]); $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko; } } } return $oammesyieqmwuwyi; } public function sewqswegcwywamuw($igwkwmgowquoucyk) { if (Constants::ssmskyqgcmeiayco === $igwkwmgowquoucyk && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq()) { echo $this->cyeuiyggkcqmoecc(); $this->ywmaqqqoiueymkyu(true); } } public function cyeuiyggkcqmoecc() : string { return $this->iuygowkemiiwqmiw("\142\165\164\164\157\156", [Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::NAME => $this->cisyiemkeykgkomc()], ["\x63\x6c\141\163\x73" => self::class]); } public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool { if (!$ccamueccusigaaio) { $ccamueccusigaaio = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas(); } return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($ccamueccusigaaio); } public function enqueue() { $eygsasmqycagyayw = AdvancedCMS::symcgieuakksimmu()->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x73\150\x6f\162\x74\143\157\144\x65", $eygsasmqycagyayw->get("\x73\x68\157\x72\x74\x63\157\x64\145\56\152\x73"))->ayuciigykaswwqeo("\167\x70\55\x74\151\x6e\x79\x6d\143\x65")->simswskycwagoeqy()); global $shortcode_tags; $eygsasmqycagyayw->ikqyiskqaaymscgw("\163\x68\157\x72\x74\x63\157\144\145", ["\x6e\141\155\x65\x73" => array_keys($shortcode_tags)]); parent::enqueue(); } public function register($shortcodes = []) { $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\137\162\145\x67\x69\163\164\145\162\x5f\x73\150\x6f\x72\164\143\x6f\x64\145\163", $shortcodes); } public function cisyiemkeykgkomc() : ?string { return parent::cisyiemkeykgkomc() . "\x5f\163\x68\157\x72\164\x63\157\144\x65"; } public function qoqyomiqwooaeoiy() : bool { return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago(); } }
