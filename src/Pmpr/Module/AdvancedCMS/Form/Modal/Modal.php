<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d00078a083             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Modal; use Pmpr\Module\AdvancedCMS\Form\Element; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Modal extends Element { protected array $segments = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\x66\x6f\x6f\164\145\162", [$this, "\157\x71\x6f\x69\143\165\x77\167\x69\x73\x79\x71\x75\x67\165\151"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qoqyomiqwooaeoiy()) { $this->enqueue(); } parent::yeyiguyegmmyusea(); } public function gsesiocqciggmauo() : array { return $this->segments; } public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self { $this->segments[$oceoauekaygmuoko->cisyiemkeykgkomc()] = $oceoauekaygmuoko; return $this; } public function skgwcckoyoqsascq() : bool { return !empty($this->segments); } public function oqoicuwwisyqugui() { if ($this->qoqyomiqwooaeoiy()) { $this->ecwgiiuacoaokqkw(); $qookweymeqawmcwo = $this->eeisgyksyecuceue(); $this->iuygowkemiiwqmiw("\155\157\144\x61\x6c", $qookweymeqawmcwo, ["\x63\x6c\x61\163\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); } } public function eeisgyksyecuceue() : array { $wsqkgswwooewwekw = $this->gsesiocqciggmauo(); $eyagosskwwmgwmog = $this->ckqaeiskasoyysmg(); $oammesyieqmwuwyi = ["\141\x6c\x6c" => $wsqkgswwooewwekw, "\156\x6f\x5f\160\141\x72\x65\156\x74" => [], "\x68\141\x73\x5f\x70\141\162\145\x6e\x74" => []]; if ($eyagosskwwmgwmog) { foreach ($wsqkgswwooewwekw as $momcykaoccoymeig => $oceoauekaygmuoko) { $omwmuycmeqcqokom = $oceoauekaygmuoko->ygqycmmkoiuocoia(); if ($omwmuycmeqcqokom && isset($eyagosskwwmgwmog[$omwmuycmeqcqokom])) { $oammesyieqmwuwyi["\x68\141\163\x5f\x70\141\162\x65\156\x74"][$omwmuycmeqcqokom][] = $oceoauekaygmuoko; } else { $oammesyieqmwuwyi["\156\x6f\x5f\x70\141\x72\145\156\x74"][] = $oceoauekaygmuoko; } } } else { $oammesyieqmwuwyi["\x6e\x6f\137\160\x61\162\145\156\164"] = $wsqkgswwooewwekw; } return [Constants::NAME => $this->cisyiemkeykgkomc(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), "\142\x75\164\x74\x6f\x6e\163" => $this->imswwiyicyksouus(), "\160\x61\162\x65\156\164\163" => $eyagosskwwmgwmog, "\163\145\147\155\145\x6e\164\x73" => $oammesyieqmwuwyi, "\143\x6c\x6f\163\145\x5f\151\143\157\x6e" => IconInterface::ucomcyskmkiqysee, "\141\162\162\x6f\x77\137\151\143\157\x6e" => IconInterface::ckqgusoqoosqqwyo, "\x6c\x69\x73\164\137\x74\x69\x74\154\x65" => __("\103\157\156\164\x65\156\164\x73\40\x4c\151\163\x74", PR__CMN__FOUNDATION), "\x63\x6c\x6f\x73\145\x5f\x6d\145\163\x73\141\147\145" => __("\103\x6c\x6f\163\145\40\115\x6f\x64\x61\154", PR__CMN__FOUNDATION)]; } public function imswwiyicyksouus() : array { return []; } public function qoqyomiqwooaeoiy() : bool { return true; } public function enqueue() { } public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x68\157\x72\x74\x63\157\144\145\137\166\141\x6c\x69\144\x5f\x70\141\162\145\156\x74\x73"), $eyagosskwwmgwmog, $this); } }
