<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675f1d0160ad0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Modal; use Pmpr\Module\AdvancedCMS\Form\Element; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Modal extends Element { protected array $segments = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\156\137\x66\x6f\x6f\164\x65\162", [$this, "\x6f\161\157\x69\x63\165\x77\167\x69\x73\x79\161\165\x67\165\x69"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qoqyomiqwooaeoiy()) { $this->enqueue(); } parent::yeyiguyegmmyusea(); } public function gsesiocqciggmauo() : array { return $this->segments; } public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self { $this->segments[$oceoauekaygmuoko->cisyiemkeykgkomc()] = $oceoauekaygmuoko; return $this; } public function skgwcckoyoqsascq() : bool { return !empty($this->segments); } public function oqoicuwwisyqugui() { if ($this->qoqyomiqwooaeoiy()) { $this->ecwgiiuacoaokqkw(); $qookweymeqawmcwo = $this->eeisgyksyecuceue(); $this->iuygowkemiiwqmiw("\155\x6f\144\141\154", $qookweymeqawmcwo, ["\x63\x6c\141\163\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); } } public function eeisgyksyecuceue() : array { $wsqkgswwooewwekw = $this->gsesiocqciggmauo(); $eyagosskwwmgwmog = $this->ckqaeiskasoyysmg(); $oammesyieqmwuwyi = ["\141\x6c\x6c" => $wsqkgswwooewwekw, "\156\x6f\137\x70\x61\x72\145\156\x74" => [], "\150\141\163\137\x70\x61\x72\x65\156\x74" => []]; if ($eyagosskwwmgwmog) { foreach ($wsqkgswwooewwekw as $momcykaoccoymeig => $oceoauekaygmuoko) { $omwmuycmeqcqokom = $oceoauekaygmuoko->ygqycmmkoiuocoia(); if ($omwmuycmeqcqokom && isset($eyagosskwwmgwmog[$omwmuycmeqcqokom])) { $oammesyieqmwuwyi["\150\141\163\x5f\160\141\162\145\156\164"][$omwmuycmeqcqokom][] = $oceoauekaygmuoko; } else { $oammesyieqmwuwyi["\x6e\x6f\137\160\x61\162\x65\x6e\x74"][] = $oceoauekaygmuoko; } } } else { $oammesyieqmwuwyi["\x6e\157\137\x70\x61\162\x65\156\x74"] = $wsqkgswwooewwekw; } return [Constants::NAME => $this->cisyiemkeykgkomc(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), "\142\x75\164\164\x6f\x6e\x73" => $this->imswwiyicyksouus(), "\x70\141\162\145\x6e\164\x73" => $eyagosskwwmgwmog, "\163\x65\147\155\x65\156\x74\163" => $oammesyieqmwuwyi, "\x63\154\x6f\x73\145\x5f\151\x63\x6f\x6e" => IconInterface::ucomcyskmkiqysee, "\141\162\x72\157\x77\x5f\151\143\157\x6e" => IconInterface::ckqgusoqoosqqwyo, "\x6c\151\x73\x74\137\164\151\164\x6c\x65" => __("\103\x6f\156\164\145\x6e\164\x73\40\x4c\x69\163\164", PR__CMN__FOUNDATION), "\x63\154\x6f\x73\x65\x5f\x6d\x65\163\x73\x61\147\145" => __("\103\154\x6f\163\145\40\x4d\x6f\x64\x61\154", PR__CMN__FOUNDATION)]; } public function imswwiyicyksouus() : array { return []; } public function qoqyomiqwooaeoiy() : bool { return true; } public function enqueue() { } public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x68\157\x72\164\143\x6f\x64\145\137\x76\x61\x6c\151\144\137\x70\141\162\145\156\x74\x73"), $eyagosskwwmgwmog, $this); } }
