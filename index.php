<?php
    include '_templates/sitewide.php';
    $page['name'] = 'Compute Freely';
    $page['title'] = 'Free your computer. Use Linux.';
    include $template['header'];
?>

<!-- Header -->
<header>
    <div class="header-items">
        <a href="#distros" id="distros-link" class="jump-link header-item header-link" title="What's Available?">What's Available?</a>
        <a href="#make-the-switch" id="make-the-switch-link" class="jump-link header-item header-link" title="Switching">Switching</a>
        <a href="#benefits" id="benefits-link" class="jump-link header-item header-link" title="Why Linux?">Why Linux?</a>
    </div>
</header>

<!-- Title -->
<div id='title'>
    <section>
    	<div class="content">
            <h1 class="title">Compute <span class="freely">Freely</span></h1>
            <h2 class="subtitle">Free your computer. <b>Use Linux</b>.</h2>
        </div>
    </section>
</div>
<!-- Benefits Section -->
<div id='benefits'>
    <section>
        <div class="content">
            <h1>Why use a free &amp; open source operating system?</h1>
        </div>
        <br>
        <div class="column">
            <h2>Completely Free</h2>
            <p>Most open source operating systems are completely <b>free</b> both in-price &amp; licensing. There are typically no fees, lengthy legal agreements, or restrictive copyright protections. You are even free to modify them and make copies to distribute to your friends.</p>
        </div>
        <div class="column">
            <h2>Safe &amp; Secure</h2>
            <p>The robust GNU/Linux system is at the heart of most free &amp; open source platforms, running everything from world governments to the International Space Station. It powers much of the World Wide Web and billions of smart devices worldwide.</p>
        </div>
        <div class="column">
            <h2>Accessibility</h2>
            <p>Free and open source operating systems are as diverse as the people who use and build them. Which means they come loaded with software meant to aid those with hearing, sight or motor impairment.</p>
        </div>
        <div class="column">
            <h2>Community &amp; Support</h2>
            <p>The Linux &amp; open source ecosystem has a vibrant community surrounding it, and with that you get a world of support –from written documentation and forums, to mailing lists and live chat, to name just a few.</p>
        </div>
        <div class="column">
            <h2>Versatility</h2>
            <p>Thanks to the Linux kernel most open source operating systems have unparalleled hardware support. You can install them on virtually any number of computers or other devices that you want.</p>
        </div>
        <div class="column">
            <h2>Applications</h2>
            <p>There are thousands of free &amp; open source applications available to freely download and install without the need to browse the web. All this software undergoes scrutinous review before it reaches you, so you can find and use what you like with confidence.</p>
        </div>
    </section>
</div>
<!-- Benefits Section -->
<div id='make-the-switch'>
    <section>
        <div class="content">
            <h1>Making The Switch</h1>
        </div>
        <div class="content switch">
            <div class="alternatives">
                <div class="pair">
                    <img src="/img/logos/logo-microsoft-office.svg" alt="">
                    <img src="/img/arrow.svg" alt="">
                    <img src="/img/logos/logo-libreoffice.svg" alt="">
                </div>
            </div>
            <h2>If you work with Microsoft Office</h2>
            <p>Many free and open source operating systems have the LibreOffice suite available which lets you create documents, spreadsheets, and presentations as you would with Microsoft Office. With LibreOffice, you can also open and edit any Word, Powerpoint, or Excel files you may already have.</p>
        </div>
        <div class="content switch">
            <div class="browsers">
                <img class="browser hide" src="/img/browsers/internet-explorer_128x128.png" alt="">
                <img class="browser hide" src="/img/browsers/safari_128x128.png" alt="">
                <img class="arrow hide" src="/img/arrow.svg" alt="">
                <img class="browser" src="/img/browsers/chrome_128x128.png" alt="">
                <img class="browser" src="/img/browsers/firefox_128x128.png" alt="">
                <img class="browser" src="/img/browsers/opera_128x128.png" alt="">
                <img class="browser" src="/img/browsers/epiphany_128x128.png" alt="">
                <img class="browser" src="/img/browsers/chromium_128x128.png" alt="">
                <img class="browser" src="/img/browsers/midori_128x128.png" alt="">
            </div>
            <h2>Browsing the Web</h2>
            <p>While Internet Explorer and Safari are not available, popular web browsers, like Google Chrome, Mozilla Firefox and Opera support Linux. Not forgetting the other, quite capable platform-specific browsers.</p>
        </div>
        <div class="content switch">
            <div class="alternatives">
                <img class="alternative hide" src="/img/logos/logo-adobe-creative-cloud.png" alt="">
                <img class="arrow hide" src="/img/arrow.svg" alt="">
                <img class="alternative" src="/img/logos/logo-gimp.png" alt="">
                <img class="alternative" src="/img/logos/logo-inkscape.png" alt="">
                <img class="alternative" src="/img/logos/logo-krita.png" alt="">
            </div>
            <h2>Open your Creativity</h2>
            <p>The Adobe suite is quite popular and very powerful, and while it isn't available on free and open source platforms. Apps like <a href="http://gimp.org/" target="_blank">The GIMP</a>, <a href="http://inkscape.org/" target="_blank">Inkscape</a> and <a href="http://krita.org/" target="_blank">Krita</a> are capable alternatives.</p>
        </div>
        <div class="content switch">
            <div class="alternatives">
                <img class="alternative hide" src="/img/logos/logo-itunes.png" alt="">
                <img class="alternative hide" src="/img/logos/logo-wmp.png" alt="">
                <img class="arrow hide" src="/img/arrow.svg" alt="">
                <img class="alternative" src="/img/logos/logo-rhythmbox.png" alt="">
                <img class="alternative" src="/img/logos/logo-gnome-music.png" alt="">
                <img class="alternative" src="/img/logos/logo-amarok.png" alt="">
                <img class="alternative" src="/img/logos/logo-noise.png" alt="">
            </div>
            <h2>Keep on Listening</h2>
            <p>Out of the box, many free and open source operating systems can manage your existing music library and keep you listening.</p>
        </div>
        <div class="content switch">
            <div class="alternatives">
                <img class="alternative" src="/img/logos/logo-gaming.png" alt="">
                <img class="alternative" src="/img/logos/logo-steam.png" alt="">
                <img class="alternative" src="/img/logos/logo-ubuntu-software-center.png" alt="">
            </div>
            <h2>Game On</h2>
            <p>Gaming on Linux has never been more possible. There are over 1000 games (and growing) available on Steam for Linux, and many indie games support Linux as a platform through the Ubuntu Software Center.</p>
        </div>
    </section>
</div>
<!-- Distros Section -->
<div id='distros'>
    <section>
        <div class="content">
            <h1>What's Available?</h1>
            <h3>There are thousands of free and open source Linux operating systems to try. Here are some of the most popular.</h3>
        </div>
        <div id="distro-list">
            <a href="https://ubuntu.com/" target="_blank" class="distro">
                <img class="logo" src="/img/logos/distro-ubuntu.svg" alt="" title="Ubuntu">
                <h1 class="name">Ubuntu</h1>
                <p class="difficulty easy">Beginner</p>
                <p class="distro-text">Ubuntu has a very large userbase and community, as such it has a wealth of contributed support resources.</p>
                <p class="distro-text">Ubuntu also receives the most attention from third-party app developers and companies.</p>
            </a>
            <a href="https://getfedora.org/" target="_blank" class="distro">
                <img class="logo" src="/img/logos/distro-fedora.svg" alt="" title="Fedora">
                <h1 class="name">Fedora</h1>
                <p class="difficulty medium">Intermediate</p>
                <p class="distro-text">Fedora has reputation for being cutting-edge and taking an innovative role with open source technologies.</p>
                <p class="distro-text">The development team takes pride in Fedora being one of the most secure operating systems.</p>
            </a>
            <a href="https://elementary.io/" target="_blank" class="distro">
                <img class="logo" src="/img/logos/distro-elementary.svg" alt="" title="elementary">
                <h1 class="name">elementary</h1>
                <p class="difficulty easy">Beginner</p>
                <p class="distro-text">elementary puts design first to ensure that it is not compromising on quality, usability or speed.</p>
                <p class="distro-text">With a custom-built set of applications and desktop, elementary boasts a unique and cohesive experience.</p>
            </a>
            <a href="https://archlinux.org/" target="_blank" class="distro">
                <img class="logo" src="/img/logos/distro-arch-linux.svg" alt="" title="Arch Linux">
                <h1 class="name">Arch Linux</h1>
                <p class="difficulty hard">Advanced</p>
                <p class="distro-text">Arch Linux is lightweight &amp; very customizable, however its installation process is definitely for an experienced user.</p>
                <p class="distro-text">Arch's continuous update model can be taxing without the knowledge to fix any possible problems.</p>
            </a>
            <a href="https://debian.org/" target="_blank" class="distro">
                <img class="logo" src="/img/logos/distro-debian.svg" alt="" title="Debian">
                <h1 class="name">Debian</h1>
                <p class="difficulty medium">Intermediate</p>
                <p class="distro-text">As one of the oldest free software operating systems, Debian is very stable &amp; reliable.</p>
                <p class="distro-text">However its complex development cycle results in infrequent updates and a tendency to lag behind the competition.</p>
            </a>
            <a href="https://www.opensuse.org/" target="_blank" class="distro">
                <img class="logo" src="/img/logos/distro-opensuse.svg" alt="" title="openSUSE">
                <h1 class="name">openSUSE</h1>
                <p class="difficulty medium">Intermediate</p>
                <p class="distro-text">openSUSE is a rather general purpose operating system, built with stability and interoperability in mind.</p>
                <p class="distro-text">openSUSE also boasts its own comprehensive and acclaimed configuration &amp; administration tools.</p>
            </a>
            <a href="http://www.linuxmint.com/" target="_blank" class="distro">
                <img class="logo" src="/img/logos/distro-linux-mint.svg" alt="" title="Linux Mint">
                <h1 class="name">Linux Mint</h1>
                <p class="difficulty easy">Beginner</p>
                <p class="distro-text">Linux Mint sports a community developed desktop with the aim of providing a more user-friendly option.</p>
                <p class="distro-text">Mint's diverse selection of included software gives it a more complete out-of-the-box experience.</p>
            </a>
        </div>
        <!-- Randomize list -->
        <script type="text/javascript">
        // For those who may scream "This is biased! Why is [X] first?!"
        var list = document.getElementById('distro-list');
        for (var i = list.children.length; i >= 0; i--) {
            list.appendChild(list.children[Math.random() * i | 0]);
        }
        </script>
    </section>
</div>
<div id='quote'>
    <section>
        <div class="content">
            <blockquote>I used your website to introduce my friend to Linux. I will be helping to load either Linux Mint or elementary OS tomorrow. Thanks for this great website, you made Linux a lot cooler!﻿</blockquote>
            <hr class="short">
            <a class="share tweet" href="http://www.twitter.com/home?status=Compute%20Freely%20is%20a%20friendly%20place%20to%20start%20if%20you're%20curious%20about%20switching%20to%20Linux.%20http://computefreely.org/" target="_blank"><span><i class="fa fa-twitter"></i>Tweet this Page</span></a>
            <a class="share facebook" href="http://www.facebook.com/share.php?u=http://computefreely.org/" target="_blank">
                <span><i class="fa fa-facebook-square"></i>Share on Facebook</span>
            </a>
            <a class="share googleplus" href="https://plus.google.com/share?url=http://computefreely.org/" target="_blank">
                <span><i class="fa fa-google-plus"></i>Share on Google+</span>
                </a>
        </div>
    </section>
</div>

<?php
    include $template['footer'];
?>