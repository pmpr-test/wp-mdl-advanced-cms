<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839bedbb08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Modal; use Pmpr\Module\AdvancedCMS\Form\Element; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Modal extends Element { protected array $segments = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_footer', [$this, 'oqoicuwwisyqugui']); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qoqyomiqwooaeoiy()) { $this->enqueue(); } parent::yeyiguyegmmyusea(); } public function gsesiocqciggmauo() : array { return $this->segments; } public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self { $this->segments[$oceoauekaygmuoko->cisyiemkeykgkomc()] = $oceoauekaygmuoko; return $this; } public function skgwcckoyoqsascq() : bool { return !empty($this->segments); } public function oqoicuwwisyqugui() { if ($this->qoqyomiqwooaeoiy()) { $this->ecwgiiuacoaokqkw(); $qookweymeqawmcwo = $this->eeisgyksyecuceue(); $this->iuygowkemiiwqmiw('modal', $qookweymeqawmcwo, ['class' => self::class, Constants::qaacaqioeyiuakeu => true]); } } public function eeisgyksyecuceue() : array { $wsqkgswwooewwekw = $this->gsesiocqciggmauo(); $eyagosskwwmgwmog = $this->ckqaeiskasoyysmg(); $oammesyieqmwuwyi = ['all' => $wsqkgswwooewwekw, 'no_parent' => [], 'has_parent' => []]; if ($eyagosskwwmgwmog) { foreach ($wsqkgswwooewwekw as $momcykaoccoymeig => $oceoauekaygmuoko) { $omwmuycmeqcqokom = $oceoauekaygmuoko->ygqycmmkoiuocoia(); if ($omwmuycmeqcqokom && isset($eyagosskwwmgwmog[$omwmuycmeqcqokom])) { $oammesyieqmwuwyi['has_parent'][$omwmuycmeqcqokom][] = $oceoauekaygmuoko; } else { $oammesyieqmwuwyi['no_parent'][] = $oceoauekaygmuoko; } } } else { $oammesyieqmwuwyi['no_parent'] = $wsqkgswwooewwekw; } return [Constants::NAME => $this->cisyiemkeykgkomc(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), 'buttons' => $this->imswwiyicyksouus(), 'parents' => $eyagosskwwmgwmog, 'segments' => $oammesyieqmwuwyi, 'close_icon' => IconInterface::ucomcyskmkiqysee, 'arrow_icon' => IconInterface::ckqgusoqoosqqwyo, 'list_title' => __('Contents List', PR__CMN__FOUNDATION), 'close_message' => __('Close Modal', PR__CMN__FOUNDATION)]; } public function imswwiyicyksouus() : array { return []; } public function qoqyomiqwooaeoiy() : bool { return true; } public function enqueue() { } public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('shortcode_valid_parents'), $eyagosskwwmgwmog, $this); } }
