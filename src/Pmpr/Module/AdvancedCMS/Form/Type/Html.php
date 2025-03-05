<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a4128579             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class Html extends Common { public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk) { $wwgucssaecqekuek = $ymygiwwuwyuakysk->parse_args($this->gueasuouwqysmomu(), [Constants::gouqcwikiiygyasc => $ymygiwwuwyuakysk->_id()]); $ekiuyucoiagmscgy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus->args, 'content_cb'); if ($ekiuyucoiagmscgy) { $aiowsaccomcoikus->args['content'] = call_user_func_array($aiowsaccomcoikus->args['content_cb'], [$aiowsaccomcoikus, $kqokimuosyuyyucg, $mqyaskyaekmkegmg]); } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs('div', $wwgucssaecqekuek, $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus->args, Constants::ssmskyqgcmeiayco)); } }
