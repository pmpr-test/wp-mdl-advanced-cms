<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec39eb7fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Type; use Pmpr\Common\Foundation\Interfaces\Constants; use CMB2_Type_Select; abstract class Select extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x6d\142\62\x5f\x72\145\156\x64\145\162\137\x6d\x75\154\x74\x69{$this->gueasuouwqysmomu()}", [$this, "\170\157\165\x75\147\x63\163\x6d\x75\145\157\x67\x61\x79\165\165"], 10, 5); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\143\x6d\142\62\137\163\x61\x6e\x69\164\151\172\x65\137\x6d\x75\154\164\x69{$this->gueasuouwqysmomu()}", [$this, "\171\x61\x77\x75\143\x61\x61\163\x69\x77\151\x67\171\x77\x6d\x6f"], 10, 4)->cecaguuoecmccuse("\x63\155\x62\x32\x5f\x74\171\160\145\163\137\x65\163\143\x5f\x6d\x75\154\x74\x69{$this->gueasuouwqysmomu()}", [$this, "\163\171\x79\x63\x65\167\x77\x6b\171\157\x73\x6d\167\147\155\155"], 10, 3)->cecaguuoecmccuse("\x63\155\142\62\137\162\x65\x70\x65\x61\164\137\x74\141\x62\x6c\x65\137\162\x6f\167\137\164\x79\160\145\163", [$this, "\165\143\x71\161\161\143\x63\x69\143\x63\151\145\x63\x65\151\163"], 10, 1); parent::kgquecmsgcouyaya(); } public function yawucaasiwigywmo($gioggcykgoikcwiy, $meta_value, $object_id, $field_args) { if (!(!is_array($meta_value) || !$field_args["\x72\145\160\x65\141\164\141\142\154\x65"])) { goto iggyqogweyosuikc; } return $gioggcykgoikcwiy; iggyqogweyosuikc: foreach ($meta_value as $uusmaiomayssaecw => $uiymkeeaukcyqqik) { $meta_value[$uusmaiomayssaecw] = array_map("\x73\x61\156\x69\x74\151\x7a\x65\137\164\145\x78\x74\x5f\146\x69\145\x6c\x64", $uiymkeeaukcyqqik); ssoucoucsgccekwe: } qqewoyookaskiuek: return $meta_value; } public function syycewwkyosmwgmm($gioggcykgoikcwiy, $ugugimquukqwogge, $field_args) { if (!(!is_array($ugugimquukqwogge) || !$field_args["\x72\x65\x70\x65\x61\164\x61\142\154\x65"])) { goto qkcyqocqqwmqgqww; } return $gioggcykgoikcwiy; qkcyqocqqwmqgqww: foreach ($ugugimquukqwogge as $uusmaiomayssaecw => $uiymkeeaukcyqqik) { $ugugimquukqwogge[$uusmaiomayssaecw] = array_map("\145\x73\143\x5f\141\x74\x74\162", $uiymkeeaukcyqqik); eegqyykygiccaoeo: } miyqyeiwquwsacsm: return $ugugimquukqwogge; } public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk) { $this->gksiugsggmoeqawm($this->gueasuouwqysmomu(), $ymygiwwuwyuakysk, $eqgoocgaqwqcimie); } public function xouugcsmueogayuu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk) { $this->gksiugsggmoeqawm("\155\x75\x6c\164\x69{$this->gueasuouwqysmomu()}", $ymygiwwuwyuakysk, $eqgoocgaqwqcimie, ["\x6e\x61\155\145" => $ymygiwwuwyuakysk->_name() . "\133\135", "\x6d\165\x6c\x74\151\x70\154\145" => "\155\165\154\164\151\x70\x6c\x65"]); } public function gksiugsggmoeqawm($ymqmyyeuycgmigyo, $ymygiwwuwyuakysk, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = []) { $ymygiwwuwyuakysk->type = new CMB2_Type_Select($ymygiwwuwyuakysk); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => $ymygiwwuwyuakysk->_id(), Constants::NAME => $ymygiwwuwyuakysk->_name(), "\144\x65\163\143" => $ymygiwwuwyuakysk->_desc(true), "\143\x6c\x61\x73\x73" => $this->geecegsgyyayeouq(), "\x6f\x70\164\151\x6f\156\x73" => $this->oosmqciwueygimmo((array) $ymygiwwuwyuakysk->field->options(), $eqgoocgaqwqcimie)]); $yiasugywggckywoa = $ymygiwwuwyuakysk->parse_args($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); if (!is_array($eqgoocgaqwqcimie)) { goto ywqgcegomwaiuquc; } $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie, JSON_THROW_ON_ERROR); ywqgcegomwaiuquc: $yiasugywggckywoa["\144\x61\x74\x61\x2d\x76\x61\x6c\165\145\x73"] = $eqgoocgaqwqcimie; $mkqqqewsokcswckc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($yiasugywggckywoa, "\x64\145\x73\x63"); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($yiasugywggckywoa, "\x6f\160\164\x69\157\x6e\163"); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\145\x6c\x65\143\x74", $yiasugywggckywoa, $qiouiwasaauyaaue); echo $mkqqqewsokcswckc; } public function oosmqciwueygimmo($qiouiwasaauyaaue, $ymmmmaiuoocagigk) : string { $yuukcswmsgcsigms = ''; foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $pkyyagewkiyckmwy) { $wwgucssaecqekuek = []; if (!is_array($pkyyagewkiyckmwy)) { goto acaqummmoyiemqss; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($pkyyagewkiyckmwy, Constants::uissasisiuymwsmu); $wwgucssaecqekuek = $pkyyagewkiyckmwy; $pkyyagewkiyckmwy = $meqocwsecsywiiqs; acaqummmoyiemqss: $wwgucssaecqekuek[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; if (!($ymmmmaiuoocagigk === $eqgoocgaqwqcimie || is_array($ymmmmaiuoocagigk) && in_array($eqgoocgaqwqcimie, $ymmmmaiuoocagigk, true))) { goto suswcqoyyqkkquuo; } $wwgucssaecqekuek[] = "\x73\x65\x6c\x65\x63\164\145\x64"; suswcqoyyqkkquuo: $yuukcswmsgcsigms .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x6f\160\164\x69\157\156", $wwgucssaecqekuek, $pkyyagewkiyckmwy); soqqemyioggmoakg: } wmmggowmigekyoso: return $yuukcswmsgcsigms; } public function sksqyikucwoogkuc(array $uomewyckeuqoqocu, array $ugsswuekcqyycoaa) : array { $pgugkagcumkaqucc = []; foreach ($ugsswuekcqyycoaa as $uusmaiomayssaecw) { $omkysikckkcieckq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uomewyckeuqoqocu, $uusmaiomayssaecw); if (!$omkysikckkcieckq) { goto foeeqckqsyockkak; } $pgugkagcumkaqucc[$uusmaiomayssaecw] = $omkysikckkcieckq; foeeqckqsyockkak: oqugqwcyomiaaoqu: } eeqesooyqagwawae: return $pgugkagcumkaqucc + $uomewyckeuqoqocu; } public function ucqqqcciccieceis($gioggcykgoikcwiy) { $gioggcykgoikcwiy[] = "\155\165\154\x74\151{$this->gueasuouwqysmomu()}"; return $gioggcykgoikcwiy; } public abstract function geecegsgyyayeouq() : string; }
