<h2 class="accordion-header"><?php
translate("server_ip_address_and_hostname");
?></h2>
<div class="accordion-content">
	<strong><?php Template::escape($_SERVER['SERVER_ADDR']);?></strong> <?php
if (function_exists("gethostbyaddr")) {
    ?>(<?php translate("hostname");?>: <?php Template::escape(gethostbyaddr($_SERVER['SERVER_ADDR']));?>)
<?php }?>
</div>