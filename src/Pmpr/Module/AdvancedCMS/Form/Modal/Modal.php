<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec39eb7fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Modal; use Pmpr\Module\AdvancedCMS\Form\Element; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Modal extends Element { protected array $segments = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\151\156\137\x66\x6f\157\x74\145\x72", [$this, "\x6f\x71\157\151\x63\x75\167\x77\151\163\171\161\x75\147\x75\151"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (!$this->qoqyomiqwooaeoiy()) { goto cgewcsueoyaeikgm; } $this->enqueue(); cgewcsueoyaeikgm: parent::yeyiguyegmmyusea(); } public function gsesiocqciggmauo() : array { return $this->segments; } public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self { $this->segments[$oceoauekaygmuoko->cisyiemkeykgkomc()] = $oceoauekaygmuoko; return $this; } public function skgwcckoyoqsascq() : bool { return !empty($this->segments); } public function oqoicuwwisyqugui() { if (!$this->qoqyomiqwooaeoiy()) { goto sukskmcwsoysiuqu; } $this->ecwgiiuacoaokqkw(); $qookweymeqawmcwo = $this->eeisgyksyecuceue(); $this->iuygowkemiiwqmiw("\155\157\144\141\154", $qookweymeqawmcwo, ["\143\x6c\141\163\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); sukskmcwsoysiuqu: } public function eeisgyksyecuceue() : array { $wsqkgswwooewwekw = $this->gsesiocqciggmauo(); $eyagosskwwmgwmog = $this->ckqaeiskasoyysmg(); $oammesyieqmwuwyi = ["\x61\x6c\x6c" => $wsqkgswwooewwekw, "\156\x6f\x5f\160\141\x72\145\x6e\164" => [], "\150\x61\x73\x5f\x70\141\162\x65\156\x74" => []]; if ($eyagosskwwmgwmog) { goto kooskuwkuayiuose; } $oammesyieqmwuwyi["\x6e\x6f\137\x70\x61\x72\145\x6e\164"] = $wsqkgswwooewwekw; goto qwcegcuowwgiccos; kooskuwkuayiuose: foreach ($wsqkgswwooewwekw as $momcykaoccoymeig => $oceoauekaygmuoko) { $omwmuycmeqcqokom = $oceoauekaygmuoko->ygqycmmkoiuocoia(); if ($omwmuycmeqcqokom && isset($eyagosskwwmgwmog[$omwmuycmeqcqokom])) { goto eyiamcekkgkiawqy; } $oammesyieqmwuwyi["\156\x6f\x5f\160\x61\x72\x65\156\164"][] = $oceoauekaygmuoko; goto twkmiuomimomscew; eyiamcekkgkiawqy: $oammesyieqmwuwyi["\150\141\163\137\160\x61\162\145\x6e\x74"][$omwmuycmeqcqokom][] = $oceoauekaygmuoko; twkmiuomimomscew: mqccmesakuemceqi: } igymseewwyiocoug: qwcegcuowwgiccos: return [Constants::NAME => $this->cisyiemkeykgkomc(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), "\x62\x75\x74\164\157\156\x73" => $this->imswwiyicyksouus(), "\x70\x61\x72\x65\156\164\163" => $eyagosskwwmgwmog, "\163\x65\147\155\x65\x6e\164\163" => $oammesyieqmwuwyi, "\143\x6c\x6f\163\145\137\x69\143\x6f\x6e" => IconInterface::ucomcyskmkiqysee, "\x61\x72\162\x6f\x77\137\151\x63\157\156" => IconInterface::ckqgusoqoosqqwyo, "\154\151\x73\164\137\x74\x69\164\x6c\145" => __("\x43\157\156\164\x65\156\164\163\x20\x4c\x69\163\164", PR__CMN__FOUNDATION), "\x63\x6c\157\163\145\x5f\x6d\x65\x73\163\x61\147\145" => __("\103\154\x6f\x73\x65\40\115\157\144\x61\x6c", PR__CMN__FOUNDATION)]; } public function imswwiyicyksouus() : array { return []; } public function qoqyomiqwooaeoiy() : bool { return true; } public function enqueue() { } public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x68\157\x72\x74\x63\157\144\145\137\166\x61\x6c\x69\144\x5f\x70\141\x72\145\x6e\164\x73"), $eyagosskwwmgwmog, $this); } }
