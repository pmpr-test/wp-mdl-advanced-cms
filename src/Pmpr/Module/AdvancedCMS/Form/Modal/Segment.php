<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839bedbb08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Modal; use Pmpr\Module\AdvancedCMS\Form\Element; use Pmpr\Module\AdvancedCMS\Form\Tab; use Pmpr\Module\AdvancedCMS\Form\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Segment extends Element { protected array $tabs = []; protected array $fields = []; protected array $buttons = []; protected ?string $icon = null; protected ?string $prefix = null; protected ?string $parent = null; public function __construct() { if (!$this->aakmagwggmkoiiyu()) { $this->name = $this->caokeucsksukesyo()->owgcciayoweymuws()->sggauymmqugqouay($this); } parent::__construct(); } public function ogqgmqymcwsqikme() : ?string { return $this->prefix; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : void { $this->icon = $wkaqekwwgqsqwcoi; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $this->mkksewyosgeumwsa($aiowsaccomcoikus); } } return $this; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self { if ($cciauwuwuqaywgce) { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; } return $this; } public function imswwiyicyksouus() : array { return $this->buttons; } public function ycewecmqyuksugoi() : bool { return !empty($this->imswwiyicyksouus()); } public function igmamuiesywmkgeu($meqocwsecsywiiqs, $wwgucssaecqekuek) : self { $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'button button-large'); $this->buttons[] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ysskgssgwuwmqwym => $wwgucssaecqekuek]; return $this; } public function ugmceccgwaaaigiy() : array { $ywoucyskcquysiwc = $this->equiyaoamqmaeckc(); $ikgwqyuyckaewsow = $this->fields; if ($ywoucyskcquysiwc) { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if ($cciauwuwuqaywgce instanceof Tab) { foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}_{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc('pt-3'); $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus; } } } } } return $ikgwqyuyckaewsow; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = parent::cisyiemkeykgkomc(); if ($yuwymayicwwqiske = $this->ogqgmqymcwsqikme()) { $uusmaiomayssaecw = "{$yuwymayicwwqiske}_{$uusmaiomayssaecw}"; } return $uusmaiomayssaecw; } public function render() { $this->ecwgiiuacoaokqkw(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $uiewakwqscemywuo = ['hookup' => false, Constants::gouqcwikiiygyasc => $this->cisyiemkeykgkomc(), Constants::qaacaqioeyiuakeu => true]; if ($this->equiyaoamqmaeckc()) { $uiewakwqscemywuo['tabs'] = $this->equiyaoamqmaeckc(); } self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo); } } }
