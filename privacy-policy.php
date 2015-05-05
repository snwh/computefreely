<?php
    include '_templates/sitewide.php';
    $page['title'] = 'Privacy Policy';
    include $template['header'];
?>

<!-- Header -->
<header>
    <div class="header-items">
        <a href="/" class="header-item header-link left" title="Home">Home</a>
    </div>
</header>

<!-- Main -->
<div id='main'>
    <section >
        <h1>Privacy Policy</h1>
        <p>This site (computefreely.org) makes use of cookies and services that use cookies.</p>
        <ol style="margin-left:2em;">
            <li>A "cookie acceptance" cookie</li>
            <li>Google Analytics cookies</li>
        </ol>
        <h2>Analytics</h2>
        <p>This site uses <a href="http://www.google.com/analytics/">Google Analytics</a>; analytic cookies are used to collect information about how visitors use this website, which is used to help improve it.</p>
        <p>The cookies collect information in an anonymous form, including the number of visitors to the site, where visitors have come to the site from and the pages they visited.</p>
        <h4 style="text-align:center;">You can choose to disable or selectively turn off any cookies or third-party cookies in your browser settings.</h4>
    </section>
</div>

<?php
    include $template['footer'];
?>