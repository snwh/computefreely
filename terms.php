<?php
    include '_templates/sitewide.php';
    $page['title'] = 'Copying & Terms';
    include $template['header'];
?>

<!-- Header -->
<header>
    <div class="header-items">
        <a href="/" class="header-item header-link left" title="Home">Home</a>
    </div>
</header>

<!-- Main -->
<div class="row first" id='main'>
    <section>
        <h1>Copying &amp; Terms</h1>
        <p>This website is copyright &copy; 2015 Sam Hewitt, with some rights reserved.</p>
        <p>Site content is licensed under the <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/legalcode" target="_blank">Creative Commons Attribution-ShareAlike 3.0</a>, unless otherwise noted. Any unique source code is free software, licensed under the terms of the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, unless otherwise noted.</p>
        <p>Non-unique elements are licensed under the terms of their accompanying licenses, or stated within their source code.</p>
        <p>All logos used are trademarks of their respective projects and this site has been in no way endorsed by any of the featured projects.</p>
    </section>
</div>

<?php
    include $template['footer'];
?>