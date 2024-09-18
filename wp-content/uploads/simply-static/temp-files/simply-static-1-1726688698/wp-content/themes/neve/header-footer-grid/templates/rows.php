<script type="text/html" id="tmpl-hfg--cb-panel">
	<div class="hfg--cp-rows">

		<# if ( ! _.isUndefined( data.rows.top ) ) { #>
		<div class="hfg--row-top hfg--cb-row" data-id="{{ data.id }}_top">
			<a class="hfg--cb-row-settings" title="{{ data.rows.top.title || data.rows.top }}" data-id="top" href="#">
			<div class="hfg--row-inner">
				<div class="row--title">{{ data.rows.top.title || data.rows.top }}
				<div class="row--grid">
					<br />
<b>Fatal error:  Uncaught Error: Call to undefined function HFG\esc_attr() in C:\xampp\htdocs\Daeshaun_Portfolio_WP\wp-content\themes\neve\header-footer-grid\templates\rows.php:26
Stack trace:
#0 {main}
  thrown in <b>C:\xampp\htdocs\Daeshaun_Portfolio_WP\wp-content\themes\neve\header-footer-grid\templates\rows.php on line <b>26<br />
</script>