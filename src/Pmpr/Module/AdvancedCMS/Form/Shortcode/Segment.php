<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d00078a083             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Shortcode; use Pmpr\Module\AdvancedCMS\Form\Modal\Segment as BaseClass; use Pmpr\Module\AdvancedCMS\Form\Field\BSSelect; use Pmpr\Module\AdvancedCMS\Form\Field\Field; use Pmpr\Module\AdvancedCMS\Form\Field\Group; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Segment extends BaseClass { protected $target = Constants::ALL; protected bool $enableInAmp = true; public function squsacgomqgkakaw() { return $this->target; } public function kqeoeeayumeoyaoa() : ?bool { return $this->enableInAmp; } public function mwikyscisascoeea() : ?string { $aokagokqyuysuksm = parent::mwikyscisascoeea(); if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = $this->aakmagwggmkoiiyu(); } return $aokagokqyuysuksm; } public function gosmqcmmomkqwmis() { parent::gosmqcmmomkqwmis(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { if ($post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get()) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post); if (has_shortcode($ewgwqamkygiqaawc, $this->cisyiemkeykgkomc()) || has_shortcode($ewgwqamkygiqaawc, "\x70\155\160\162\137{$this->aakmagwggmkoiiyu()}")) { $this->enqueue(); } } } } public function init() { parent::init(); $this->gkoiuyagqcoecigk(); } public function enqueue() { } public function gkoiuyagqcoecigk() { add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\163\x65\x61\143\161\x69\155\x65\x63\x77\x67\x67\141\x6b\167"]); add_shortcode("\x70\155\x70\162\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x73\x65\x61\143\x71\x69\155\145\x63\x77\x67\147\x61\x6b\x77"]); } public function isqsicqgwyyasyke() : array { return $this->sscegwueamckwmcy("\x73\x68\157\x72\164\x63\x6f\x64\145\137\x63\x6f\154\x75\x6d\156\163", []); } public function oseacqimecwggakw($wwgucssaecqekuek) : string { $nsmgceoqaqogqmuw = ''; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu() && !$this->kqeoeeayumeoyaoa()) { return $nsmgceoqaqogqmuw; } if (is_array($wwgucssaecqekuek)) { $ggauoeuaesiymgee = $this->gwquaaaaikcwcges(); $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek); } else { $wwgucssaecqekuek = []; } $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, Constants::sqomuccqsqwsckyw, $this->aakmagwggmkoiiyu()); if ($iqyiekoceqqsqoow) { $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek); $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\x73\150\x6f\x72\164\143\157\x64\145\137\141\164\164\x72\x73"), $wwgucssaecqekuek, $this); $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek)); $qookweymeqawmcwo["\x73\x68\x6f\162\164\143\157\144\x65\x5f\x6e\x61\155\x65"] = $this->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\144\145\146\x61\x75\154\x74" => "\151\x6e\x64\145\170\x2e\150\x74\x6d\154\x2e\x74\x77\x69\x67"]); } else { wp_die(__("\x63\x61\x6e\156\x6f\164\40\x66\x6f\x75\x6e\x64\x20\164\x65\x6d\160\154\x61\164\x65\x20\146\x6f\162\40\x63\x72\x65\141\x74\x65\40\x6d\x61\x72\153\x75\x70\x20\151\x6e\x20\163\150\157\x72\x74\143\x6f\144\x65\x20\x6f\x66\72\40" . static::class, PR__CMN__FOUNDATION)); } return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x68\x6f\x72\x74\x63\157\144\145\137\x68\x74\x6d\154"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this); } public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array { $this->ecwgiiuacoaokqkw(); if (!$ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); } foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, $aokagokqyuysuksm); $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus); } } return $wwgucssaecqekuek; } public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null) { if ($aiowsaccomcoikus instanceof Field) { if ($aiowsaccomcoikus instanceof Group) { $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus); } elseif ($aiowsaccomcoikus instanceof BSSelect) { if ($aiowsaccomcoikus->zosqeeykkcqmmkqs()) { $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie); } } elseif (is_string($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie); } } return $eqgoocgaqwqcimie; } public function ocwoiywammqiuggq() : string { return "\x70\162\x2d\163\150\x6f\162\x74\x63\157\144\x65"; } public function ccmewsuaqiaegqso($eqgoocgaqwqcimie) { preg_match("\57\x7b\x28\56\52\x3f\51\x7d\57", $eqgoocgaqwqcimie, $uammqaqiwgcmeska); if (isset($uammqaqiwgcmeska[1])) { $shortcode = do_shortcode("\133" . $uammqaqiwgcmeska[1] . "\135"); $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $shortcode, $eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } public function squkoowcgeokaywq($somsiuiquigiqsmk) : array { $oammesyieqmwuwyi = []; foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) { $oammesyieqmwuwyi[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x69\x6d\147", ["\x73\162\x63" => $mcqieaigyeeyaksm]); } return $oammesyieqmwuwyi; } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { return $wwgucssaecqekuek; } public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array { $aqykuigiuwmmcieu = []; preg_match_all("\x2f\134\50\x28\56\x2a\x3f\51\x5c\51\x2f", $icwicymcioeyeyek, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = explode("\x2c", $uammqaqiwgcmeska); foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) { preg_match("\57\x28\133\x5e\x3d\x5d\53\x29\x2f", $igqsaukqcqscimok, $uusmaiomayssaecw); preg_match("\57\x27\x28\133\x5e\47\135\x2a\51\47\57", $igqsaukqcqscimok, $eqgoocgaqwqcimie); $uusmaiomayssaecw = $uusmaiomayssaecw[1]; if (isset($eqgoocgaqwqcimie[1])) { $uskwgmsuqowaosow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw); $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow); } } } return $aqykuigiuwmmcieu; } public function acgiiomwuewkmgei($eqgoocgaqwqcimie) { if (is_string($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = explode("\54", $eqgoocgaqwqcimie); if (count($aqykuigiuwmmcieu) <= 1) { $eqgoocgaqwqcimie = explode("\174", $eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = $aqykuigiuwmmcieu; } } return $eqgoocgaqwqcimie; } public abstract function gwquaaaaikcwcges() : array; }
