<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8dc76622             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Traits; use CMB2; use CMB2_hookup; use CMB2_JS; use Exception; use Pmpr\Module\AdvancedCMS\Form\Field as Fields; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait FieldTrait { public static function qugwsaawyageaqgy($aokagokqyuysuksm, $ymqmyyeuycgmigyo = null, $mkqqqewsokcswckc = null) : Fields\Size { return new Fields\Size($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function ymuegqgyuagyucws(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\Text { return new Fields\Text($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function sgsesoiwcgqgckoo(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\Date { return new Fields\Date($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function sciaycsmsiekqueg(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = []) : Fields\Editor { return new Fields\Editor($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue); } public static function kimoeccokowuaiic(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\File { return new Fields\File($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function uouyygwcgsmygaee(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, string $mkqqqewsokcswckc = null) : Fields\Textarea { return new Fields\Textarea($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function cwiuiiakukcsaakw(string $aokagokqyuysuksm, ?string $eqgoocgaqwqcimie = null) : Fields\Hidden { return new Fields\Hidden($aokagokqyuysuksm, $eqgoocgaqwqcimie); } public static function aikamsoikcwsewac(string $aokagokqyuysuksm) : Fields\Html { return new Fields\Html($aokagokqyuysuksm); } public static function wcwmusaouiqaqeww(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Checkbox { return new Fields\Checkbox($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function mwmcsiqiwkweayuw(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Colorpicker { return new Fields\Colorpicker($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public function qywgugocoiwoayqa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null) : Fields\Depended { return new Fields\Depended($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $cwucaoaqgwqcwews, $mkqqqewsokcswckc); } public static function meikyccyyskqkqks(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\MultiCheck { return new Fields\MultiCheck($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function yyuwuqsiucweeoue(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Radio { return new Fields\Radio($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function mccagaqeagiikkec($aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Select { return new Fields\Select($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function kqcemgcowgomaqwa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Select2 { return new Fields\Select2($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function ckuwucygcwsiawms(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\BSSelect { return new Fields\BSSelect($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function qoeiescseggagsqs(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Button { return new Fields\Button($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function yqeauksoiomwkqkq(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\MultiButton { return new Fields\MultiButton($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function iseogkiymousogom(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $ikgwqyuyckaewsow = [], ?string $mkqqqewsokcswckc = null) : Fields\Group { return new Fields\Group($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ikgwqyuyckaewsow, $mkqqqewsokcswckc); } public static function aowmyucqigeeakaa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $somsiuiquigiqsmk = [], ?string $mkqqqewsokcswckc = null, array $ucwamkesemusoeyc = []) : Fields\Slider { return new Fields\Slider($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $somsiuiquigiqsmk, $ucwamkesemusoeyc, $mkqqqewsokcswckc); } public static function scweoguicmyeqqem(?string $aokagokqyuysuksm, ?string $eqgoocgaqwqcimie, ?string $ymqmyyeuycgmigyo = null) : Fields\Display { return new Fields\Display($aokagokqyuysuksm, $eqgoocgaqwqcimie, $ymqmyyeuycgmigyo); } public static function ekakmekqeqwcuacm(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $ukwokcuqauuosmoo = null) : Fields\Title { return new Fields\Title($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ukwokcuqauuosmoo); } public static function asimeyiqqkeawyoq() { CMB2_JS::enqueue(); CMB2_hookup::enqueue_cmb_js(); CMB2_hookup::enqueue_cmb_css(); } public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = []) { $nsmgceoqaqogqmuw = ''; $aokagokqyuysuksm = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->get($uiewakwqscemywuo, Constants::gouqcwikiiygyasc); if ($aokagokqyuysuksm) { goto wkgskiuiukiuyque; } $aokagokqyuysuksm = Constants::wqmuacwuckqmqcqs; $uiewakwqscemywuo[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; wkgskiuiukiuyque: $koaqeegoeiaiccse = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->get($uiewakwqscemywuo, Constants::qaacaqioeyiuakeu, true, false); if (!$ikgwqyuyckaewsow) { goto qkuiwoqksgayqqmg; } $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, $uiewakwqscemywuo); ob_start(); $eaoumsseceiowgsk->object_id($aokagokqyuysuksm); self::asimeyiqqkeawyoq(); $eaoumsseceiowgsk->show_form(); $nsmgceoqaqogqmuw = ob_get_clean(); if (!($omwmuycmeqcqokom = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->get($uiewakwqscemywuo, "\160\141\x72\x65\x6e\164", false))) { goto goqmywuiicciasyk; } $wwgucssaecqekuek = []; if (!is_array($omwmuycmeqcqokom)) { goto oyiuyywyeoskckuw; } $wwgucssaecqekuek = $omwmuycmeqcqokom; oyiuyywyeoskckuw: $nsmgceoqaqogqmuw = self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\163\163", "\146\x6f\162\155\55\x63\x6f\x6e\x74\x61\151\156\x65\x72")); goqmywuiicciasyk: if (!self::iwgqamekocwaigci()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto siecswkggyikqkga; } $nsmgceoqaqogqmuw .= self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->ssqqsemoqaeqcqka("\120\x4d\x50\x52\x54\x72\x69\x67\147\145\x72\56\x64\x6f\101\x63\164\151\x6f\x6e\50\x27\x66\151\145\154\x64\137\141\144\x64\x65\144\x5f\x74\x6f\137\x64\157\155\x27\x2c\x20\44\x28\47\43\143\x6d\x62\62\55\155\x65\x74\141\142\157\x78\x2d{$aokagokqyuysuksm}\x27\51\x29"); siecswkggyikqkga: qkuiwoqksgayqqmg: if (!$koaqeegoeiaiccse) { goto easqmyamcmeesgya; } echo $nsmgceoqaqogqmuw; easqmyamcmeesgya: return $nsmgceoqaqogqmuw; } public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = []) { $eaoumsseceiowgsk = null; if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) { goto smiemmcqqukyguuu; } $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow); $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eaoumsseceiowgsk->add_field($aiowsaccomcoikus); quaqmuusokiyqgqe: } yuqgwwmqwqiuwmaw: smiemmcqqukyguuu: return $eaoumsseceiowgsk; } public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) { $sogksuscggsicmac = null; if (!$aiowsaccomcoikus instanceof Fields\Field) { goto mmgmqogugasaqkgg; } if ($aqykuigiuwmmcieu === ARRAY_A) { goto skuqigsokaguscas; } $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea(); goto quyogmwugsyoaaiu; skuqigsokaguscas: $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea()); $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic(); if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) { goto qmoocweoekqueuyy; } foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { if (is_array($ccamueccusigaaio)) { goto ecouwqosmoyyqmkw; } $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio; goto mqiiqkuaoekeuswo; ecouwqosmoyyqmkw: foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) { $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok; eckcqesiokgwkkiw: } yoagcooekomeokwg: mqiiqkuaoekeuswo: yamyagayiooyeekg: } iksewmsaugayqaqq: qmoocweoekqueuyy: if (!$aiowsaccomcoikus instanceof Fields\Group) { goto sgiwoiscywusgmmm; } $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske)); sgiwoiscywusgmmm: $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq(); quyogmwugsyoaaiu: mmgmqogugasaqkgg: if (!is_string($aiowsaccomcoikus)) { goto wmumywgyyeagqoeq; } $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus; wmumywgyyeagqoeq: return $sogksuscggsicmac; } public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array { $ikgwqyuyckaewsow = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\145\164\120\x72\151\x6f\x72\x69\164\171"); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu); mgcuiguaomoqwwwm: } smcguieygyqcaqgs: return $ikgwqyuyckaewsow; } public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio { $sckumcuqemuukces = __("\155\x69\x6e", PR__CMN__FOUNDATION); $ygykagaqyuawwiyo = __("\150\162", PR__CMN__FOUNDATION); $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo]; $qiouiwasaauyaaue = [0 => __("\116\157\40\x4c\x69\155\151\x74", PR__CMN__FOUNDATION)]; foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) { $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60; $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\x20\x20{$iyqygqimawuycsyq}"; yuoeumyiuqkuouey: } eoyiumycaigawmmc: $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true); $aiowsaccomcoikus->eumecwmqmukqgyea(); return $aiowsaccomcoikus; } public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek) { return array_merge([Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy], $wwgucssaecqekuek); } private static function _getIconsMarkup($ykiyyumywksqcisg = []) { foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode([Constants::gouqcwikiiygyasc => $uusmaiomayssaecw, Constants::TEXT => $wkaqekwwgqsqwcoi]); sckioayasmkcoeoo: } eyiwqgqcsqakwqss: return $ykiyyumywksqcisg; } public static function _getEscapedIcons($ykiyyumywksqcisg = IconInterface::class, $iwkyyocymeukcceu = []) : array { $gskuwmeemyeuwogc = self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->cuumgioggkmuecyo(); $ygogqywsaqoukoqy = []; $mwaeiygkcuuqqgga = false; if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) { goto ooqksueucyagyuoe; } if (!is_array($ykiyyumywksqcisg)) { goto yssqmyoaokkksukc; } $mwaeiygkcuuqqgga = true; yssqmyoaokkksukc: goto osmmoyqkqoucsgow; ooqksueucyagyuoe: try { $kowuaykiywgmuuec = self::iwgqamekocwaigci()->ekkwaykokcgqkmoi()->cmmaeeeoaaeqqqmm($ykiyyumywksqcisg, "\x67\x65\164\103\157\x6e\x73\164\x61\156\x74\x73"); $ykiyyumywksqcisg = array_slice($kowuaykiywgmuuec, 0, 500); } catch (Exception $wgaoewqkwgomoaai) { $ykiyyumywksqcisg = []; } osmmoyqkqoucsgow: if (!$ykiyyumywksqcisg) { goto iwueukqcywkiyqge; } foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $swmoiamakysysggq = self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\x61\163\x73" => "\160\162\x2d\x69\143\x6f\x6e\40\151\143\157\x6e\55\160\x72\151\x6d\x61\x72\x79"], [Constants::ELEMENT => "\x69\155\x67"]); $meqocwsecsywiiqs = array_reverse(explode(DIRECTORY_SEPARATOR, self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, $wkaqekwwgqsqwcoi))); $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, reset($meqocwsecsywiiqs), $swmoiamakysysggq); if ($mwaeiygkcuuqqgga) { goto aukucaieceiwesmm; } $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu; goto kqyoakickmseyyeq; aukucaieceiwesmm: $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu; kqyoakickmseyyeq: iauwuugggmegwisk: } wgiygcmqaokywuqa: if ($mwaeiygkcuuqqgga) { goto micceocwuwkyusic; } $ygogqywsaqoukoqy = self::haqswuugoswcyoia()->mmsykuomogaqoaye()->sscegwueamckwmcy("\145\x73\143\x61\160\145\144\x5f\151\143\x6f\156\163\137\144\162\157\160\144\x6f\167\x6e", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc); micceocwuwkyusic: iwueukqcywkiyqge: return array_map("\x65\163\143\137\141\164\x74\x72", $ygogqywsaqoukoqy); } private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '') : string { $qimgcsugeskcqeyc = "\167\x68\151\164\x65"; if ($qoiwmokisgikggia) { goto ykwasaaoeeiuomim; } $qoiwmokisgikggia = self::iwgqamekocwaigci()->owgcciayoweymuws()->igcwuwuymeuomaqo($cmwygeyygwqaemaq); ykwasaaoeeiuomim: if (!(false !== strpos($qoiwmokisgikggia, "\154\151\147\x68\x74") || false !== strpos($qoiwmokisgikggia, "\x74\x65\162\164\x69\141\x72\x79") || false !== strpos($qoiwmokisgikggia, "\x71\x75\141\164\145\162\x6e\141\x72\x79") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) { goto acggikioyeueeowg; } $qimgcsugeskcqeyc = "\x64\141\x72\x6b"; acggikioyeueeowg: return self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->iaaacsuskiakkwui(self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\141\163\x73" => "\154\x68\55\154\147"]), ["\x63\154\x61\x73\x73" => "\x62\x67\55{$qoiwmokisgikggia}\40\x74\x65\170\164\x2d{$qimgcsugeskcqeyc}\x20\x74\x65\x78\164\x2d\143\x65\156\164\x65\162\40\160\x6f\163\151\164\x69\157\x6e\55\141\x62\163\157\154\x75\x74\x65\40\x77\55\x31\x30\60\40\150\55\61\x30\60\40\x74\x6f\160\x2d\60\x20\154\x65\x66\164\55\60\x20\x72\157\165\156\x64\x65\144"]); } private static function _generateColors($yyiwywqmmsqmwqes) : array { $ukqisiguweqciuei = ['' => __("\116\157\x6e\x65", PR__CMN__FOUNDATION)]; foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) { $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia); $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs); egaymskkosukqeao: } cwikoaeqmmoimmso: return $ukqisiguweqciuei; } public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect { if ($ukqisiguweqciuei) { goto kaiesowkgwogqseg; } $ukqisiguweqciuei = self::haqswuugoswcyoia()->mmsykuomogaqoaye()->sscegwueamckwmcy(self::iwgqamekocwaigci()->mmsykuomogaqoaye()->ygyygikyocoymgaw("\x63\157\154\x6f\162\x5f\x64\162\157\x70\x64\x6f\x77\x6e\x5f\x69\x74\x65\155\x73"), []); kaiesowkgwogqseg: $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei); foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) { $ukqisiguweqciuei[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $uusmaiomayssaecw, "\144\x61\164\141\x2d\x63\x6f\x6e\164\x65\x6e\164" => $qoiwmokisgikggia]; cwswueuqoamqasya: } kicwiowcogmauwiy: return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x43\157\x6c\x6f\162", PR__CMN__FOUNDATION), $ukqisiguweqciuei); } public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select { $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu); $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\x49\143\x6f\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg); if ($pacsomcuwcegguua) { goto kgmeiwiakwicgkkk; } $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg); kgmeiwiakwicgkkk: $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu); return $gmksciycsesoouoi; } public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect { $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu); foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $ykiyyumywksqcisg[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $uusmaiomayssaecw, "\x64\x61\x74\141\55\x63\157\156\x74\145\156\x74" => $wkaqekwwgqsqwcoi]; omykokikgocoikec: } suuskagowwgsouqw: return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x49\143\157\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg); } public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect { if ($meqocwsecsywiiqs) { goto csieaismmmocyacu; } $meqocwsecsywiiqs = __("\111\143\x6f\x6e", PR__CMN__FOUNDATION); csieaismmmocyacu: return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu(); } }
