<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6fe69d8d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Shortcode; use Pmpr\Module\AdvancedCMS\Form\Modal\Segment as BaseClass; use Pmpr\Module\AdvancedCMS\Form\Field\BSSelect; use Pmpr\Module\AdvancedCMS\Form\Field\Field; use Pmpr\Module\AdvancedCMS\Form\Field\Group; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Segment extends BaseClass { protected $target = Constants::ALL; protected bool $enableInAmp = true; public function squsacgomqgkakaw() { return $this->target; } public function kqeoeeayumeoyaoa() : ?bool { return $this->enableInAmp; } public function mwikyscisascoeea() : ?string { $aokagokqyuysuksm = parent::mwikyscisascoeea(); if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = $this->aakmagwggmkoiiyu(); } return $aokagokqyuysuksm; } public function gosmqcmmomkqwmis() { parent::gosmqcmmomkqwmis(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { if ($post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get()) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post); if (has_shortcode($ewgwqamkygiqaawc, $this->cisyiemkeykgkomc()) || has_shortcode($ewgwqamkygiqaawc, "pmpr_{$this->aakmagwggmkoiiyu()}")) { $this->enqueue(); } } } } public function init() { parent::init(); $this->gkoiuyagqcoecigk(); } public function enqueue() { } public function gkoiuyagqcoecigk() { add_shortcode($this->cisyiemkeykgkomc(), [$this, 'oseacqimecwggakw']); add_shortcode("pmpr_{$this->aakmagwggmkoiiyu()}", [$this, 'oseacqimecwggakw']); } public function isqsicqgwyyasyke() : array { return $this->sscegwueamckwmcy('shortcode_columns', []); } public function oseacqimecwggakw($wwgucssaecqekuek) : string { $nsmgceoqaqogqmuw = ''; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu() && !$this->kqeoeeayumeoyaoa()) { return $nsmgceoqaqogqmuw; } if (is_array($wwgucssaecqekuek)) { $ggauoeuaesiymgee = $this->gwquaaaaikcwcges(); $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek); } else { $wwgucssaecqekuek = []; } $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, Constants::sqomuccqsqwsckyw, $this->aakmagwggmkoiiyu()); if ($iqyiekoceqqsqoow) { $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek); $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}_shortcode_attrs"), $wwgucssaecqekuek, $this); $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek)); $qookweymeqawmcwo['shortcode_name'] = $this->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ['default' => 'index.html.twig']); } else { wp_die(__('cannot found template for create markup in shortcode of: ' . static::class, PR__CMN__FOUNDATION)); } return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('shortcode_html'), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this); } public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array { $this->ecwgiiuacoaokqkw(); if (!$ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); } foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, $aokagokqyuysuksm); $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus); } } return $wwgucssaecqekuek; } public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null) { if ($aiowsaccomcoikus instanceof Field) { if ($aiowsaccomcoikus instanceof Group) { $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus); } elseif ($aiowsaccomcoikus instanceof BSSelect) { if ($aiowsaccomcoikus->zosqeeykkcqmmkqs()) { $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie); } } elseif (is_string($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie); } } return $eqgoocgaqwqcimie; } public function ocwoiywammqiuggq() : string { return 'pr-shortcode'; } public function ccmewsuaqiaegqso($eqgoocgaqwqcimie) { preg_match('/{(.*?)}/', $eqgoocgaqwqcimie, $uammqaqiwgcmeska); if (isset($uammqaqiwgcmeska[1])) { $shortcode = do_shortcode('[' . $uammqaqiwgcmeska[1] . ']'); $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $shortcode, $eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } public function squkoowcgeokaywq($somsiuiquigiqsmk) : array { $oammesyieqmwuwyi = []; foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) { $oammesyieqmwuwyi[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('img', ['src' => $mcqieaigyeeyaksm]); } return $oammesyieqmwuwyi; } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { return $wwgucssaecqekuek; } public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array { $aqykuigiuwmmcieu = []; preg_match_all('/\\((.*?)\\)/', $icwicymcioeyeyek, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = explode(',', $uammqaqiwgcmeska); foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) { preg_match('/([^=]+)/', $igqsaukqcqscimok, $uusmaiomayssaecw); preg_match("/'([^']*)'/", $igqsaukqcqscimok, $eqgoocgaqwqcimie); $uusmaiomayssaecw = $uusmaiomayssaecw[1]; if (isset($eqgoocgaqwqcimie[1])) { $uskwgmsuqowaosow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw); $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow); } } } return $aqykuigiuwmmcieu; } public function acgiiomwuewkmgei($eqgoocgaqwqcimie) { if (is_string($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = explode(',', $eqgoocgaqwqcimie); if (count($aqykuigiuwmmcieu) <= 1) { $eqgoocgaqwqcimie = explode('|', $eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = $aqykuigiuwmmcieu; } } return $eqgoocgaqwqcimie; } public abstract function gwquaaaaikcwcges() : array; }
