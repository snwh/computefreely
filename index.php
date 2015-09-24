<?php
    include '_templates/sitewide.php';
    $page['name'] = 'Compute Freely';
    $page['title'] = 'Free your computer. Use Linux. - Compute Freely';
    include $template['header'];
?>

<!-- Header -->
<header>
    <div class="header-items">
        <a href="#distros" id="distros-link" class="jump-link header-item header-link right" title="What's Available?">What's Available?</a>
        <a href="#make-the-switch" id="make-the-switch-link" class="jump-link header-item header-link right" title="Switching">Switching</a>
        <a href="#benefits" id="benefits-link" class="jump-link header-item header-link right" title="Why Linux?">Why Linux?</a>
    </div>
</header>

<!-- CSS Import -->
<style type="text/css">@import url(/css/title.css);</style>

<!-- Title -->
<div class="row first" id='title'>
    <section>
        <h1 class="title">Compute <span class="freely">Freely</span></h1>
        <h2 class="subtitle">Free your computer. <b>Use Linux</b>.</h2>
    </section>
</div>

<!-- CSS Import -->
<style type="text/css">@import url(/css/benefits.css);</style>

<!-- Benefits Section -->
<div class="row" id='benefits'>
    <section>
        <h1>Why use a free &amp; open source operating system?</h1>
        <p style="margin-top:-3em;opacity:0.5;">(like Linux)</p>
        <br>
        <div class="col third">
            <h2>Completely Free</h2>
            <p>Most open source operating systems are completely <b>free</b> both in price &amp; in licensing. There are typically no fees, lengthy legal agreements, or restrictive copyright protections. You are even free to modify them and make copies to distribute to your friends.</p>
        </div>
        <!-- <div class="col third">
            <h2>Privacy &amp; Accountability</h2>
            <p>Free and open source operating systems are developed in the open.</p>
        </div> -->
        <div class="col third">
            <h2>Safe &amp; Secure</h2>
            <p>The robust GNU/Linux system is at the heart of most free &amp; open source platforms, running everything from world governments to the International Space Station. It powers much of the World Wide Web and billions of smart devices worldwide.</p>
        </div>
        <div class="col third">
            <h2>Accessibility</h2>
            <p>Free and open source operating systems are as diverse as the people who use and build them. Which means they come loaded with software meant to aid those with hearing, sight or motor impairment.</p>
        </div>
        <div class="col third">
            <h2>Community &amp; Support</h2>
            <p>The Linux &amp; open source ecosystem has a vibrant community surrounding it, and with that you get a world of support – from written documentation and forums, to mailing lists and live chat, to name just a few.</p>
        </div>
        <div class="col third">
            <h2>Versatility</h2>
            <p>Thanks to the Linux kernel most open source operating systems have unparalleled hardware support. You can install them on virtually any number of computers or other devices that you want.</p>
        </div>
        <div class="col third">
            <h2>Applications</h2>
            <p>There are thousands of free &amp; open source applications available to freely download and install without the need to browse the web. All this software undergoes scrutinous review before it reaches you, so you can find and use what you like with confidence.</p>
        </div>
    </section>
</div>

<!-- CSS Import -->
<style type="text/css">@import url(/css/switching.css);</style>

<!-- Switching Section -->
<div class="row" id='make-the-switch'>
    <section>
        <h1>Making The Switch</h1>
        <div class="switch">
            <div class="alternatives">
                <div class="pair">
                    <img class="alternative" src="/img/logos/logo-microsoft-office.png" alt="" title="Microsoft Office">
                    <img class="arrow" src="/img/arrow.svg" alt="">
                    <img class="alternative" src="/img/logos/logo-libreoffice.png" alt="" title="LibreOffice">
                </div>
            </div>
            <h2>If you work with Microsoft Office</h2>
            <p>Many free and open source operating systems have the <a href="https://libreoffice.org" target="_blank">LibreOffice suite</a> available which lets you create documents, spreadsheets, and presentations as you would with Microsoft Office. With LibreOffice, you can also open and edit any Word, Powerpoint, or Excel files you may already have.</p>
        </div>
        <div class="switch">
            <div class="browsers">
                <img class="browser" src="/img/browsers/chrome_128x128.png" alt="" title="Google Chrome">
                <img class="browser" src="/img/browsers/firefox_128x128.png" alt="" title="Mozilla Firefox">
                <img class="browser" src="/img/browsers/opera_128x128.png" alt="" title="Opera">
                <img class="browser" src="/img/browsers/epiphany_128x128.png" alt="" title="Epiphany">
                <img class="browser" src="/img/browsers/chromium_128x128.png" alt="" title="Chromium">
                <img class="browser" src="/img/browsers/midori_128x128.png" alt="" title="Midori">
            </div>
            <h2>Browsing the Web</h2>
            <p>You still have the best of the web available to you on Linux; popular browsers like Google Chrome, Mozilla Firefox and Opera support Linux. Plus the many other Linux-only browsers.</p>
        </div>
        <div class="switch">
            <div class="alternatives">
                <img class="alternative" src="/img/logos/logo-gimp.png" alt="" title="GIMP">
                <img class="alternative" src="/img/logos/logo-inkscape.png" alt="" title="Inkscape">
                <img class="alternative" src="/img/logos/logo-krita.png" alt="" title="Krita">
                <img class="alternative" src="/img/logos/logo-blender.png" alt="" title="Blender">
                <img class="alternative" src="/img/logos/logo-ardour.png" alt="" title="Ardour">
            </div>
            <h2>Open your Creativity</h2>
            <p>On other platforms, the creative field is dominated by proprietary programs, but there are several capable open source alternatives. Together <a href="http://gimp.org/" target="_blank">the GIMP</a>, <a href="http://inkscape.org/" target="_blank">Inkscape</a> &amp; <a href="http://krita.org/" target="_blank">Krita</a> make a great set graphics editing tools. <a href="http://blender.org/" target="_blank">Blender</a> is available for 3D animation and rendering. For digital audio, there's <a href="http://ardour.org/" target="_blank">Ardour</a>.</p>
        </div>
        <div class="switch">
            <div class="alternatives">
                <img class="alternative hide" src="/img/logos/logo-itunes.png" alt="" title="iTunes">
                <img class="alternative hide" src="/img/logos/logo-wmp.png" alt="" title="Windows Media Player">
                <img class="arrow hide" src="/img/arrow.svg" alt="">
                <img class="alternative" src="/img/logos/logo-rhythmbox.png" alt="" title="Rhythmbox">
                <img class="alternative" src="/img/logos/logo-gnome-music.png" alt="" title="GNOME Music">
                <img class="alternative" src="/img/logos/logo-amarok.png" alt="" title="Amarok">
                <img class="alternative" src="/img/logos/logo-noise.png" alt="" title="Noise">
            </div>
            <h2>Keep on Listening</h2>
            <p>Out of the box, many free and open source operating systems can manage your existing music library and keep you listening.</p>
        </div>
        <div class="switch">
            <div class="alternatives">
                <img class="alternative" src="/img/logos/logo-steam.png" alt="" title="Steam">
                <img class="alternative" src="/img/logos/logo-gog.png" alt="" title="GOG">
                <img class="alternative" src="/img/logos/logo-ubuntu-software-center.png" alt="" title="Ubuntu Software Center">
            </div>
            <h2>Game On</h2>
            <p>Gaming on Linux has never been more possible. The number of Linux games available are rapidly growing on platforms like <a href="http://store.steampowered.com/search/?term=&os=linux" target="_blank">Steam</a> and <a href="http://www.gog.com/games/linux" target="_blank">GOG</a>. Plus many indie games support Linux through Ubuntu's Software Center.</p>
        </div>
    </section>
</div>

<!-- CSS Import -->
<style type="text/css">@import url(/css/distros.css);</style>

<!-- Distros Section -->
<div class="row" id='distros'>
    <section class="distro-section">
        <h1>What's Available?</h1>
        <h3>There are thousands of free and open source Linux operating systems to try. Here are some of the most popular.</h3>
        <div id="distro-list">
            <a href="https://archlinux.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-arch-linux.svg" alt="" title="Arch Linux">
                <h1 class="name">Arch Linux</h1>
                <p class="difficulty hard">Advanced</p>
                <p class="distro-text">Arch Linux is lightweight &amp; very customizable, however its installation process is definitely for an experienced user.</p>
                <p class="distro-text">Arch's continuous update model can be taxing without the knowledge to fix any possible problems.</p>
            </a>
            <a href="https://debian.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-debian.svg" alt="" title="Debian">
                <h1 class="name">Debian</h1>
                <p class="difficulty medium">Intermediate</p>
                <p class="distro-text">As one of the oldest free software operating systems, Debian is very stable &amp; reliable.</p>
                <p class="distro-text">However its complex development cycle results in infrequent updates and a tendency to lag behind the competition.</p>
            </a>
            <a href="https://elementary.io/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-elementary.svg" alt="" title="elementary">
                <h1 class="name">elementary</h1>
                <p class="difficulty easy">Beginner</p>
                <p class="distro-text">elementary puts design first to ensure that it is not compromising on quality, usability or speed.</p>
                <p class="distro-text">With a custom-built set of applications and desktop, elementary boasts a unique and cohesive experience.</p>
            </a>
            <a href="https://getfedora.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-fedora.svg" alt="" title="Fedora">
                <h1 class="name">Fedora</h1>
                <p class="difficulty medium">Intermediate</p>
                <p class="distro-text">Fedora has reputation for being cutting-edge and taking an innovative role with open source technologies.</p>
                <p class="distro-text">However, being bleeding edge means each Fedora release is not supported for very long.</p>
            </a>
            <a href="http://www.linuxmint.com/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-linux-mint.svg" alt="" title="Linux Mint">
                <h1 class="name">Linux Mint</h1>
                <p class="difficulty easy">Beginner</p>
                <p class="distro-text">Linux Mint sports a community developed desktop with the aim of providing a more user-friendly option.</p>
                <p class="distro-text">Mint's diverse selection of included software gives it a more complete out-of-the-box experience.</p>
            </a>
            <a href="https://www.opensuse.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-opensuse.svg" alt="" title="openSUSE">
                <h1 class="name">openSUSE</h1>
                <p class="difficulty medium">Intermediate</p>
                <p class="distro-text">openSUSE is a rather general purpose operating system, built with stability and interoperability in mind.</p>
                <p class="distro-text">openSUSE also boasts its own comprehensive and acclaimed configuration &amp; administration tools.</p>
            </a>
            <a href="https://ubuntu.com/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-ubuntu.svg" alt="" title="Ubuntu">
                <h1 class="name">Ubuntu</h1>
                <p class="difficulty easy">Beginner</p>
                <p class="distro-text">Ubuntu has a very large userbase and community, as such it has a wealth of contributed support resources.</p>
                <p class="distro-text">Ubuntu also receives the most attention from third-party app developers and companies.</p>
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
        <!-- <h3>Curious what the some of the other thousands are? Here are some <a href="/more">more</a>.</h3> -->
    </section>
</div>

<!-- CSS Import -->
<style type="text/css">@import url(/css/share.css);</style>

<!-- Social Section -->
<div class="row last" id='share'>
    <section>
        <blockquote>I used your website to introduce my friend to Linux. I will be helping to load either Linux Mint or elementary OS tomorrow. Thanks for this great website, you made Linux a lot cooler!﻿</blockquote>
        <hr class="short">
        <a class="share tweet" href="http://www.twitter.com/home?status=Compute%20Freely%20is%20a%20friendly%20place%20to%20start%20if%20you're%20curious%20about%20switching%20to%20Linux.%20http://computefreely.org/" target="_blank"><span><i class="fa fa-twitter"></i>Tweet this Page</span></a>
        <a class="share facebook" href="http://www.facebook.com/share.php?u=http://computefreely.org/" target="_blank">
            <span><i class="fa fa-facebook-square"></i>Share on Facebook</span>
        </a>
        <a class="share googleplus" href="https://plus.google.com/share?url=http://computefreely.org/" target="_blank">
            <span><i class="fa fa-google-plus"></i>Share on Google+</span>
        </a>
    </section>
</div>

<?php
    include $template['footer'];
?>
