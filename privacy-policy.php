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

<style type="text/css">
.browsers-list {
    max-width: 920px;
    margin: 0 auto;
}

.browsers {
    border:none;
    display: inline-block;
    text-align: center;
    width: 120px;
}

.browsers img {
    border:none;
    display: inline-block;
    width: 50px;
}
</style>

<!-- Main -->
<div class="row first" id='main'>
    <section>
        <h1>Privacy Policy</h1>
        <p>This site (computefreely.org) makes use of cookies and services that use cookies.</p>
        <h2>Google Analytics</h2>
        <p>This site uses <a href="http://www.google.com/analytics/">Google Analytics</a>; analytic cookies are used to collect information (in an anonymous form) about how visitors use this website, including the number of visitors to the site, where visitors have come to the site from and the pages they visited, which is used to help improve it.</p>
        <h2>Do Not Track</h2>
        <p>This site honors the do-not-track setting found in most modern browsers and disables Google Analytics when it is present.</p>
        <h2>Cookies</h2>
        <p >You can choose to disable or selectively turn off any cookies or third-party cookies in your browser settings. Links to the relevant instructions can be found below.</p>
        <div class="browsers-list">
            <a target="_blank" href="https://support.google.com/chrome/answer/95647" class="browsers">
                <img src="img/browsers/chrome_128x128.png" alt="Google Chrome" />
                <h4>Chrome</h4>
            </a>
            <a target="_blank" href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored" class="browsers">
                <img src="img/browsers/firefox_128x128.png" alt="Firefox" />
                <h4>Firefox</h4>
            </a>
            <a target="_blank" href="http://windows.microsoft.com/en-gb/internet-explorer/delete-manage-cookies" class="browsers">
                <img src="img/browsers/internet-explorer_128x128.png" alt="Internet Explorer" />
                <h4>IE</h4>
            </a>
            <a target="_blank" href="http://help.opera.com/Windows/12.10/en/cookies.html" class="browsers">
                <img src="img/browsers/opera_128x128.png" alt="Opera" />
                <h4>Opera</h4>
            </a>
            <a target="_blank" href="http://support.apple.com/kb/PH17191" class="browsers">
                <img src="img/browsers/safari_128x128.png" alt="Safari" />
                <h4>Safari</h4>
            </a>
            <a target="_blank" href="http://midori-browser.org/faqs/#blacklist_cookies" class="browsers">
                <img src="img/browsers/midori_128x128.png" alt="Midori" />
                <h4>Midori</h4>
            </a>
            <a target="_blank" href="https://help.gnome.org/users/epiphany/stable/data-cookies.html.en" class="browsers">
                <img src="img/browsers/epiphany_128x128.png" alt="Epiphany" />
                <h4>Epiphany</h4>
            </a>
        </div>
    </section>
</div>

<?php
    include $template['footer'];
?>