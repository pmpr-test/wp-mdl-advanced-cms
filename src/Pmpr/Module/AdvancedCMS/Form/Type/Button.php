<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a4128579             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Type; class Button extends Common { public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk) { echo $this->generate($aiowsaccomcoikus->args, $ymygiwwuwyuakysk); } public function generate($ywmkwiwkosakssii = [], $ymygiwwuwyuakysk = null) : string { $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $wwgucssaecqekuek = $ymygiwwuwyuakysk->parse_args($sqeykgyoooqysmca, ['id' => $ymygiwwuwyuakysk->_id(), 'type' => 'button', 'name' => $ymygiwwuwyuakysk->_name(), 'class' => 'button button-' . $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'button', ''), 'element' => $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'element', 'button')]); $aiamqeawckcsuaou = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'action'); if ($aiamqeawckcsuaou) { $wwgucssaecqekuek['value'] = $aiamqeawckcsuaou; $wwgucssaecqekuek['name'] = 'pr-action'; $wwgucssaecqekuek['type'] = 'submit'; } $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'type'); if ($sqeykgyoooqysmca === 'link') { $geecqyososceumsk = 'javascript:void(0);'; if (isset($ywmkwiwkosakssii['link'])) { $geecqyososceumsk = $ywmkwiwkosakssii['link']; } $wwgucssaecqekuek['href'] = $geecqyososceumsk; if (isset($ywmkwiwkosakssii['target'])) { $wwgucssaecqekuek['target'] = $ywmkwiwkosakssii['target']; } $kqywgoqsmuswammk = 'a'; } else { $kqywgoqsmuswammk = 'button'; } $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'icon', ''); if ($wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi); } return sprintf('%s<%s %s>%s</%s>%s', $ymygiwwuwyuakysk->_desc(true), $kqywgoqsmuswammk, $ymygiwwuwyuakysk->concat_attrs($wwgucssaecqekuek), $wkaqekwwgqsqwcoi . (isset($ywmkwiwkosakssii['label']) && !empty($ywmkwiwkosakssii['label']) ? $ywmkwiwkosakssii['label'] : $ywmkwiwkosakssii['name']), $kqywgoqsmuswammk, $ywmkwiwkosakssii['message'] ?? $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei('', ['id' => "{$ymygiwwuwyuakysk->_id()}_message", 'class' => 'message'])); } }
