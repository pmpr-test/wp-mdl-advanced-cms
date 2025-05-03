<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68169e27911f3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Colorpicker extends OptionAwareField { public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) { parent::__construct('colorpicker', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->kesomeowemmyygey('alpha', true)->qigsyyqgewgskemg('color-picker')->eskgwaywimqcwcyy('colorpicker', ''); add_action('admin_footer', [$this, 'enqueue'], 9999); } public function enqueue() { wp_enqueue_script('wp-color-picker'); wp_enqueue_script('wp-color-picker-alpha'); } }
