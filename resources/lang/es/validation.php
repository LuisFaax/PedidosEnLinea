





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://assets-cdn.github.com">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/frameworks-c9193575f18b28be82c0a963e144ff6fa7a809dd8ae003a1d1e5979bed3f7f00.css" integrity="sha256-yRk1dfGLKL6CwKlj4UT/b6eoCd2K4AOh0eWXm+0/fwA=" media="all" rel="stylesheet" />
  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-1214f71e8309b7d4dab489c2765c4de1523517be4c68b861a78d93c8e840648e.css" integrity="sha256-EhT3HoMJt9TatInCdlxN4VI1F75MaLhhp42TyOhAZI4=" media="all" rel="stylesheet" />
  
  
  
  

  <meta name="viewport" content="width=device-width">
  
  <title>Laravel-lang/validation.php at master · caouecs/Laravel-lang</title>
  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    
    <meta content="https://avatars3.githubusercontent.com/u/447849?s=400&amp;v=4" property="og:image" /><meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="caouecs/Laravel-lang" property="og:title" /><meta content="https://github.com/caouecs/Laravel-lang" property="og:url" /><meta content="Laravel-lang - List of 62 languages for Laravel 4/5" property="og:description" />

  <link rel="assets" href="https://assets-cdn.github.com/">
  <link rel="web-socket" href="wss://live.github.com/_sockets/VjI6MjI0NzEzODI0OjMxMGM4NDU0YmIzNjU4YWM3ODY4MjEwOTM5NzNhYjgyN2RiYmNlNDJmMjE2NDk1MTg1NWMwMjQ3ZGFiODdkNTM=--c562b1f305ce2900307e2e646538bff2b648d931">
  <meta name="pjax-timeout" content="1000">
  <link rel="sudo-modal" href="/sessions/sudo_modal">
  <meta name="request-id" content="3ABB:28E7:E743D5:18875B5:5A2310BA" data-pjax-transient>
  

  <meta name="selected-link" value="repo_source" data-pjax-transient>

  <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
<meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
<meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="https://collector.githubapp.com/github-external/browser_event" name="octolytics-event-url" /><meta content="3ABB:28E7:E743D5:18875B5:5A2310BA" name="octolytics-dimension-request_id" /><meta content="iad" name="octolytics-dimension-region_edge" /><meta content="iad" name="octolytics-dimension-region_render" /><meta content="30512732" name="octolytics-actor-id" /><meta content="LuisFaax" name="octolytics-actor-login" /><meta content="13fedcfa7a9d26e85b35b6338a2c0d3c26da5ac6bb33fec1011a71826037cc0f" name="octolytics-actor-hash" />
<meta content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/show" data-pjax-transient="true" name="analytics-location" />




  <meta class="js-ga-set" name="dimension1" content="Logged In">


  

      <meta name="hostname" content="github.com">
  <meta name="user-login" content="LuisFaax">

      <meta name="expected-hostname" content="github.com">
    <meta name="js-proxy-site-detection-payload" content="ZTc2YjM4OGIwZGJkMDY4NDU5YjRjZGU1ODlkOTU2ZTcyNzFjZjBlMzQ4MWE4ZTRlYzVjMGNlN2UzZjQ0OWVmNHx7InJlbW90ZV9hZGRyZXNzIjoiMTg5LjEzNS4xMzIuNTQiLCJyZXF1ZXN0X2lkIjoiM0FCQjoyOEU3OkU3NDNENToxODg3NUI1OjVBMjMxMEJBIiwidGltZXN0YW1wIjoxNTEyMjQ3NDg2LCJob3N0IjoiZ2l0aHViLmNvbSJ9">

    <meta name="enabled-features" content="UNIVERSE_BANNER,FREE_TRIALS">

  <meta name="html-safe-nonce" content="83127f68cc6bd91c3e4291a8d350b3c8298e6492">

  <meta http-equiv="x-pjax-version" content="61c05d23545f26764725f429e94cfab4">
  

      <link href="https://github.com/caouecs/Laravel-lang/commits/master.atom" rel="alternate" title="Recent Commits to Laravel-lang:master" type="application/atom+xml">

  <meta name="description" content="Laravel-lang - List of 62 languages for Laravel 4/5">
  <meta name="go-import" content="github.com/caouecs/Laravel-lang git https://github.com/caouecs/Laravel-lang.git">

  <meta content="447849" name="octolytics-dimension-user_id" /><meta content="caouecs" name="octolytics-dimension-user_login" /><meta content="10371103" name="octolytics-dimension-repository_id" /><meta content="caouecs/Laravel-lang" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="10371103" name="octolytics-dimension-repository_network_root_id" /><meta content="caouecs/Laravel-lang" name="octolytics-dimension-repository_network_root_nwo" /><meta content="false" name="octolytics-dimension-repository_explore_github_marketplace_ci_cta_shown" />


    <link rel="canonical" href="https://github.com/caouecs/Laravel-lang/blob/master/src/es/validation.php" data-pjax-transient>


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://assets-cdn.github.com/favicon.ico">

<meta name="theme-color" content="#1e2327">


  <meta name="u2f-support" content="true">

  </head>

  <body class="logged-in env-production page-blob">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="bg-black text-white p-3 show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    



        
<header class="Header  f5" role="banner">
  <div class="d-flex px-3 flex-justify-between container-lg">
    <div class="d-flex flex-justify-between">
      <a class="header-logo-invertocat" href="https://github.com/" data-hotkey="g d" aria-label="Homepage" data-ga-click="Header, go to dashboard, icon:logo">
  <svg aria-hidden="true" class="octicon octicon-mark-github" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>


    </div>

    <div class="HeaderMenu d-flex flex-justify-between flex-auto">
      <div class="d-flex">
            <div class="">
              <div class="header-search scoped-search site-scoped-search js-site-search" role="search">
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/caouecs/Laravel-lang/search" class="js-site-search-form" data-scoped-search-url="/caouecs/Laravel-lang/search" data-unscoped-search-url="/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <label class="form-control header-search-wrapper js-chromeless-input-container">
        <a href="/caouecs/Laravel-lang/blob/master/src/es/validation.php" class="header-search-scope no-underline">This repository</a>
      <input type="text"
        class="form-control header-search-input js-site-search-focus js-site-search-field is-clearable"
        data-hotkey="s"
        name="q"
        value=""
        placeholder="Search"
        aria-label="Search this repository"
        data-unscoped-placeholder="Search GitHub"
        data-scoped-placeholder="Search"
        autocapitalize="off">
        <input type="hidden" class="js-site-search-type-field" name="type" >
    </label>
</form></div>

            </div>

          <ul class="d-flex pl-2 flex-items-center text-bold list-style-none" role="navigation">
            <li>
              <a href="/pulls" aria-label="Pull requests you created" class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:pulls context:user" data-hotkey="g p" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls">
                Pull requests
</a>            </li>
            <li>
              <a href="/issues" aria-label="Issues you created" class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:issues context:user" data-hotkey="g i" data-selected-links="/issues /issues/assigned /issues/mentioned /issues">
                Issues
</a>            </li>
                <li>
                  <a href="/marketplace" class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:marketplace context:user" data-selected-links=" /marketplace">
                    Marketplace
</a>                </li>
            <li>
              <a href="/explore" class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:explore" data-selected-links="/explore /trending /trending/developers /integrations /integrations/feature/code /integrations/feature/collaborate /integrations/feature/ship showcases showcases_search showcases_landing /explore">
                Explore
</a>            </li>
          </ul>
      </div>

      <div class="d-flex">
        
<ul class="user-nav d-flex flex-items-center list-style-none" id="user-links">
  <li class="dropdown js-menu-container">
    <span class="d-inline-block  px-2">
      

    </span>
  </li>

  <li class="dropdown js-menu-container">
    <details class="dropdown-details details-reset js-dropdown-details d-flex px-2 flex-items-center">
      <summary class="HeaderNavlink"
         aria-label="Create new…"
         data-ga-click="Header, create new, icon:add">
        <svg aria-hidden="true" class="octicon octicon-plus float-left mr-1 mt-1" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 9H7v5H5V9H0V7h5V2h2v5h5z"/></svg>
        <span class="dropdown-caret mt-1"></span>
      </summary>

      <ul class="dropdown-menu dropdown-menu-sw">
        
<a class="dropdown-item" href="/new" data-ga-click="Header, create new repository">
  New repository
</a>

  <a class="dropdown-item" href="/new/import" data-ga-click="Header, import a repository">
    Import repository
  </a>

<a class="dropdown-item" href="https://gist.github.com/" data-ga-click="Header, create new gist">
  New gist
</a>

  <a class="dropdown-item" href="/organizations/new" data-ga-click="Header, create new organization">
    New organization
  </a>



  <div class="dropdown-divider"></div>
  <div class="dropdown-header">
    <span title="caouecs/Laravel-lang">This repository</span>
  </div>
    <a class="dropdown-item" href="/caouecs/Laravel-lang/issues/new" data-ga-click="Header, create new issue">
      New issue
    </a>

      </ul>
    </details>
  </li>

  <li class="dropdown js-menu-container">

    <details class="dropdown-details details-reset js-dropdown-details d-flex pl-2 flex-items-center">
      <summary class="HeaderNavlink name mt-1"
        aria-label="View profile and more"
        data-ga-click="Header, show menu, icon:avatar">
        <img alt="@LuisFaax" class="avatar float-left mr-1" src="https://avatars0.githubusercontent.com/u/30512732?s=40&amp;v=4" height="20" width="20">
        <span class="dropdown-caret"></span>
      </summary>

      <ul class="dropdown-menu dropdown-menu-sw">
        <li class="dropdown-header header-nav-current-user css-truncate">
          Signed in as <strong class="css-truncate-target">LuisFaax</strong>
        </li>

        <li class="dropdown-divider"></li>

        <li><a class="dropdown-item" href="/LuisFaax" data-ga-click="Header, go to profile, text:your profile">
          Your profile
        </a></li>
        <li><a class="dropdown-item" href="/LuisFaax?tab=stars" data-ga-click="Header, go to starred repos, text:your stars">
          Your stars
        </a></li>
          <li><a class="dropdown-item" href="https://gist.github.com/" data-ga-click="Header, your gists, text:your gists">Your Gists</a></li>

        <li class="dropdown-divider"></li>

        <li><a class="dropdown-item" href="https://help.github.com" data-ga-click="Header, go to help, text:help">
          Help
        </a></li>

        <li><a class="dropdown-item" href="/settings/profile" data-ga-click="Header, go to settings, icon:settings">
          Settings
        </a></li>

        <li><!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/logout" class="logout-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="BdjFuhTu0iZmmqBRrF3CDg9G0q3frFb96HyOsKPMss1OmPBW6i5VF3Kb1YQierskSRwmxoO12lu5H48QZXDqbQ==" /></div>
          <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
            Sign out
          </button>
        </form></li>
      </ul>
    </details>
  </li>
</ul>


        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/logout" class="sr-only right-0" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="W4WIVfgxd+9rWIC6KQw3V4Og5HzjKUYWFjHRwADkreIQxb25BvHw3n9Z9W+nK059xfoQF78wyrBHUtBgxlj1Qg==" /></div>
          <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
            Sign out
          </button>
</form>      </div>
    </div>
  </div>
</header>


      

  </div>

  <div id="start-of-content" class="show-on-focus"></div>

    <div id="js-flash-container">
</div>



  <div role="main">
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode">
    <div id="js-repo-pjax-container" data-pjax-container>
      





  <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav ">
    <div class="repohead-details-container clearfix container ">

      <ul class="pagehead-actions">
  <li>
        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="2FhFzfzZwH4/BF1mAHC6w7Ykw2de37e5FkwZyCglZer2qcpGpGKFeQo42SNmcnVJq6YMqh9dz7EPE+9n5X2L/A==" /></div>      <input class="form-control" id="repository_id" name="repository_id" type="hidden" value="10371103" />

        <div class="select-menu js-menu-container js-select-menu">
          <a href="/caouecs/Laravel-lang/subscription"
            class="btn btn-sm btn-with-count select-menu-button js-menu-target"
            role="button"
            aria-haspopup="true"
            aria-expanded="false"
            aria-label="Toggle repository notifications menu"
            data-ga-click="Repository, click Watch settings, action:blob#show">
            <span class="js-select-button">
                <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                Watch
            </span>
          </a>
          <a class="social-count js-social-count"
            href="/caouecs/Laravel-lang/watchers"
            aria-label="121 users are watching this repository">
            121
          </a>

        <div class="select-menu-modal-holder">
          <div class="select-menu-modal subscription-menu-modal js-menu-content">
            <div class="select-menu-header js-navigation-enable" tabindex="-1">
              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
              <span class="select-menu-title">Notifications</span>
            </div>

              <div class="select-menu-list js-navigation-container" role="menu">

                <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                    <span class="select-menu-item-heading">Not watching</span>
                    <span class="description">Be notified when participating or @mentioned.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                      Watch
                    </span>
                  </div>
                </div>

                <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                    <span class="select-menu-item-heading">Watching</span>
                    <span class="description">Be notified of all conversations.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                        Unwatch
                    </span>
                  </div>
                </div>

                <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input id="do_ignore" name="do" type="radio" value="ignore" />
                    <span class="select-menu-item-heading">Ignoring</span>
                    <span class="description">Never be notified.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-mute" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8 2.81v10.38c0 .67-.81 1-1.28.53L3 10H1c-.55 0-1-.45-1-1V7c0-.55.45-1 1-1h2l3.72-3.72C7.19 1.81 8 2.14 8 2.81zm7.53 3.22l-1.06-1.06-1.97 1.97-1.97-1.97-1.06 1.06L11.44 8 9.47 9.97l1.06 1.06 1.97-1.97 1.97 1.97 1.06-1.06L13.56 8l1.97-1.97z"/></svg>
                        Stop ignoring
                    </span>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
</form>
  </li>

  <li>
    
  <div class="js-toggler-container js-social-container starring-container ">
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/caouecs/Laravel-lang/unstar" class="starred js-social-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="hnYdfPt4hbGdhXhAwExHgjZzCwJe+hHryKrFS6xPe4lE8KYzutkvbm0RjEkNRZsJNtQ5Ed3EdrcCcbLPtpiPxA==" /></div>
      <input type="hidden" name="context" value="repository"></input>
      <button
        type="submit"
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Unstar this repository" title="Unstar caouecs/Laravel-lang"
        data-ga-click="Repository, click unstar button, action:blob#show; text:Unstar">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
        Unstar
      </button>
        <a class="social-count js-social-count" href="/caouecs/Laravel-lang/stargazers"
           aria-label="2393 users starred this repository">
          2,393
        </a>
</form>
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/caouecs/Laravel-lang/star" class="unstarred js-social-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="p7ej2UN7iu0rp6mh6HduCTJg0pLo3vnXY7KxigoCGYKI+akHYf7WwL5FNTuKVspKwY5e2WJtV705O5UNUrn0jQ==" /></div>
      <input type="hidden" name="context" value="repository"></input>
      <button
        type="submit"
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Star this repository" title="Star caouecs/Laravel-lang"
        data-ga-click="Repository, click star button, action:blob#show; text:Star">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
        Star
      </button>
        <a class="social-count js-social-count" href="/caouecs/Laravel-lang/stargazers"
           aria-label="2393 users starred this repository">
          2,393
        </a>
</form>  </div>

  </li>

  <li>
          <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/caouecs/Laravel-lang/fork" class="btn-with-count" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="p/TwnhiuaEKLVXLvQYFyS7yIT/JLZYh0qjuVmDeVH2PIrv20PHSPbC6bkUcEE/hs90Y9T49THWBuY8HKaH5OFg==" /></div>
            <button
                type="submit"
                class="btn btn-sm btn-with-count"
                data-ga-click="Repository, show fork modal, action:blob#show; text:Fork"
                title="Fork your own copy of caouecs/Laravel-lang to your account"
                aria-label="Fork your own copy of caouecs/Laravel-lang to your account">
              <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
              Fork
            </button>
</form>
    <a href="/caouecs/Laravel-lang/network" class="social-count"
       aria-label="991 users forked this repository">
      991
    </a>
  </li>
</ul>

      <h1 class="public ">
  <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
  <span class="author" itemprop="author"><a href="/caouecs" class="url fn" rel="author">caouecs</a></span><!--
--><span class="path-divider">/</span><!--
--><strong itemprop="name"><a href="/caouecs/Laravel-lang" data-pjax="#js-repo-pjax-container">Laravel-lang</a></strong>

</h1>

    </div>
    
<nav class="reponav js-repo-nav js-sidenav-container-pjax container"
     itemscope
     itemtype="http://schema.org/BreadcrumbList"
     role="navigation"
     data-pjax="#js-repo-pjax-container">

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/caouecs/Laravel-lang" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches repo_packages /caouecs/Laravel-lang" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a href="/caouecs/Laravel-lang/issues" class="js-selected-navigation-item reponav-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /caouecs/Laravel-lang/issues" itemprop="url">
        <svg aria-hidden="true" class="octicon octicon-issue-opened" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"/></svg>
        <span itemprop="name">Issues</span>
        <span class="Counter">3</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/caouecs/Laravel-lang/pulls" class="js-selected-navigation-item reponav-item" data-hotkey="g p" data-selected-links="repo_pulls /caouecs/Laravel-lang/pulls" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-git-pull-request" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0 0 10 15a1.993 1.993 0 0 0 1-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v6.56A1.993 1.993 0 0 0 2 15a1.993 1.993 0 0 0 1-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
      <span itemprop="name">Pull requests</span>
      <span class="Counter">2</span>
      <meta itemprop="position" content="3">
</a>  </span>

    <a href="/caouecs/Laravel-lang/projects" class="js-selected-navigation-item reponav-item" data-hotkey="g b" data-selected-links="repo_projects new_repo_project repo_project /caouecs/Laravel-lang/projects">
      <svg aria-hidden="true" class="octicon octicon-project" height="16" version="1.1" viewBox="0 0 15 16" width="15"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/></svg>
      Projects
      <span class="Counter" >0</span>
</a>
    <a href="/caouecs/Laravel-lang/wiki" class="js-selected-navigation-item reponav-item" data-hotkey="g w" data-selected-links="repo_wiki /caouecs/Laravel-lang/wiki">
      <svg aria-hidden="true" class="octicon octicon-book" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"/></svg>
      Wiki
</a>

  <a href="/caouecs/Laravel-lang/pulse" class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors dependency_graph pulse /caouecs/Laravel-lang/pulse">
    <svg aria-hidden="true" class="octicon octicon-graph" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"/></svg>
    Insights
</a>

</nav>


  </div>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content">

    
  <a href="/caouecs/Laravel-lang/blob/746896db434fa3e37700f8e74a0b1237f161af68/src/es/validation.php" class="d-none js-permalink-shortcut" data-hotkey="y">Permalink</a>

  <!-- blob contrib key: blob_contributors:v21:53876350fad3bd83c8c504249a67ed17 -->

  <div class="file-navigation js-zeroclipboard-container">
    
<div class="select-menu branch-select-menu js-menu-container js-select-menu float-left">
  <button class=" btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    
    type="button" aria-label="Switch branches or tags" aria-expanded="false" aria-haspopup="true">
      <i>Branch:</i>
      <span class="js-select-button css-truncate-target">master</span>
  </button>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
        <span class="select-menu-title">Switch branches/tags</span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="form-control js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/caouecs/Laravel-lang/blob/capital_letters/src/es/validation.php"
               data-name="capital_letters"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                capital_letters
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/caouecs/Laravel-lang/blob/gh-pages/src/es/validation.php"
               data-name="gh-pages"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                gh-pages
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/caouecs/Laravel-lang/blob/laravel4/src/es/validation.php"
               data-name="laravel4"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                laravel4
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/caouecs/Laravel-lang/blob/master/src/es/validation.php"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                master
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/caouecs/Laravel-lang/blob/v2/src/es/validation.php"
               data-name="v2"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                v2
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.39/src/es/validation.php"
              data-name="3.0.39"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.39">
                3.0.39
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.38/src/es/validation.php"
              data-name="3.0.38"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.38">
                3.0.38
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.37/src/es/validation.php"
              data-name="3.0.37"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.37">
                3.0.37
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.36/src/es/validation.php"
              data-name="3.0.36"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.36">
                3.0.36
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.35/src/es/validation.php"
              data-name="3.0.35"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.35">
                3.0.35
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.34/src/es/validation.php"
              data-name="3.0.34"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.34">
                3.0.34
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.33/src/es/validation.php"
              data-name="3.0.33"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.33">
                3.0.33
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.32/src/es/validation.php"
              data-name="3.0.32"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.32">
                3.0.32
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.31/src/es/validation.php"
              data-name="3.0.31"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.31">
                3.0.31
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.30/src/es/validation.php"
              data-name="3.0.30"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.30">
                3.0.30
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.29/src/es/validation.php"
              data-name="3.0.29"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.29">
                3.0.29
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.28/src/es/validation.php"
              data-name="3.0.28"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.28">
                3.0.28
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.27/src/es/validation.php"
              data-name="3.0.27"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.27">
                3.0.27
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.26/src/es/validation.php"
              data-name="3.0.26"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.26">
                3.0.26
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.25/src/es/validation.php"
              data-name="3.0.25"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.25">
                3.0.25
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.24/src/es/validation.php"
              data-name="3.0.24"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.24">
                3.0.24
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.23/src/es/validation.php"
              data-name="3.0.23"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.23">
                3.0.23
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.22/src/es/validation.php"
              data-name="3.0.22"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.22">
                3.0.22
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.21/src/es/validation.php"
              data-name="3.0.21"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.21">
                3.0.21
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.20/src/es/validation.php"
              data-name="3.0.20"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.20">
                3.0.20
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.19/src/es/validation.php"
              data-name="3.0.19"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.19">
                3.0.19
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.18/src/es/validation.php"
              data-name="3.0.18"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.18">
                3.0.18
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.17/src/es/validation.php"
              data-name="3.0.17"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.17">
                3.0.17
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.16/src/es/validation.php"
              data-name="3.0.16"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.16">
                3.0.16
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.15/src/es/validation.php"
              data-name="3.0.15"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.15">
                3.0.15
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.14/src/es/validation.php"
              data-name="3.0.14"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.14">
                3.0.14
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.13/src/es/validation.php"
              data-name="3.0.13"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.13">
                3.0.13
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.12/src/es/validation.php"
              data-name="3.0.12"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.12">
                3.0.12
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.11/src/es/validation.php"
              data-name="3.0.11"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.11">
                3.0.11
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.10/src/es/validation.php"
              data-name="3.0.10"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.10">
                3.0.10
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.9/src/es/validation.php"
              data-name="3.0.9"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.9">
                3.0.9
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.8/src/es/validation.php"
              data-name="3.0.8"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.8">
                3.0.8
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.7/src/es/validation.php"
              data-name="3.0.7"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.7">
                3.0.7
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.6/src/es/validation.php"
              data-name="3.0.6"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.6">
                3.0.6
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.5/src/es/validation.php"
              data-name="3.0.5"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.5">
                3.0.5
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.4/src/es/validation.php"
              data-name="3.0.4"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.4">
                3.0.4
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.3/src/es/validation.php"
              data-name="3.0.3"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.3">
                3.0.3
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.2/src/es/validation.php"
              data-name="3.0.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.2">
                3.0.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.1/src/es/validation.php"
              data-name="3.0.1"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.1">
                3.0.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/3.0.0/src/es/validation.php"
              data-name="3.0.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="3.0.0">
                3.0.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.43/src/es/validation.php"
              data-name="2.0.43"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.43">
                2.0.43
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.42/src/es/validation.php"
              data-name="2.0.42"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.42">
                2.0.42
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.41/src/es/validation.php"
              data-name="2.0.41"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.41">
                2.0.41
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.40/src/es/validation.php"
              data-name="2.0.40"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.40">
                2.0.40
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.39/src/es/validation.php"
              data-name="2.0.39"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.39">
                2.0.39
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.38/src/es/validation.php"
              data-name="2.0.38"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.38">
                2.0.38
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.37/src/es/validation.php"
              data-name="2.0.37"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.37">
                2.0.37
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.36/src/es/validation.php"
              data-name="2.0.36"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.36">
                2.0.36
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.35/src/es/validation.php"
              data-name="2.0.35"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.35">
                2.0.35
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.34/src/es/validation.php"
              data-name="2.0.34"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.34">
                2.0.34
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.33/src/es/validation.php"
              data-name="2.0.33"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.33">
                2.0.33
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.32/src/es/validation.php"
              data-name="2.0.32"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.32">
                2.0.32
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.31/src/es/validation.php"
              data-name="2.0.31"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.31">
                2.0.31
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.30/src/es/validation.php"
              data-name="2.0.30"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.30">
                2.0.30
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.29/src/es/validation.php"
              data-name="2.0.29"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.29">
                2.0.29
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.28/src/es/validation.php"
              data-name="2.0.28"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.28">
                2.0.28
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.27/src/es/validation.php"
              data-name="2.0.27"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.27">
                2.0.27
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.26/src/es/validation.php"
              data-name="2.0.26"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.26">
                2.0.26
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.25/src/es/validation.php"
              data-name="2.0.25"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.25">
                2.0.25
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.24/src/es/validation.php"
              data-name="2.0.24"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.24">
                2.0.24
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.23/src/es/validation.php"
              data-name="2.0.23"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.23">
                2.0.23
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.22/src/es/validation.php"
              data-name="2.0.22"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.22">
                2.0.22
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.21/src/es/validation.php"
              data-name="2.0.21"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.21">
                2.0.21
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.20/src/es/validation.php"
              data-name="2.0.20"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.20">
                2.0.20
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.19/src/es/validation.php"
              data-name="2.0.19"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.19">
                2.0.19
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.18/src/es/validation.php"
              data-name="2.0.18"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.18">
                2.0.18
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.17/src/es/validation.php"
              data-name="2.0.17"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.17">
                2.0.17
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.16/src/es/validation.php"
              data-name="2.0.16"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.16">
                2.0.16
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.15/src/es/validation.php"
              data-name="2.0.15"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.15">
                2.0.15
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.14/src/es/validation.php"
              data-name="2.0.14"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.14">
                2.0.14
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.13/src/es/validation.php"
              data-name="2.0.13"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.13">
                2.0.13
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.12/src/es/validation.php"
              data-name="2.0.12"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.12">
                2.0.12
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.11/src/es/validation.php"
              data-name="2.0.11"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.11">
                2.0.11
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.10/src/es/validation.php"
              data-name="2.0.10"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.10">
                2.0.10
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.9/src/es/validation.php"
              data-name="2.0.9"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.9">
                2.0.9
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.8/src/es/validation.php"
              data-name="2.0.8"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.8">
                2.0.8
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.7/src/es/validation.php"
              data-name="2.0.7"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.7">
                2.0.7
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.6/src/es/validation.php"
              data-name="2.0.6"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.6">
                2.0.6
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.5/src/es/validation.php"
              data-name="2.0.5"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.5">
                2.0.5
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.4/src/es/validation.php"
              data-name="2.0.4"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.4">
                2.0.4
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.3/src/es/validation.php"
              data-name="2.0.3"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.3">
                2.0.3
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.2/src/es/validation.php"
              data-name="2.0.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.2">
                2.0.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/2.0.1/src/es/validation.php"
              data-name="2.0.1"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="2.0.1">
                2.0.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/caouecs/Laravel-lang/tree/1.0.2/src/es/validation.php"
              data-name="1.0.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="1.0.2">
                1.0.2
              </span>
            </a>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

    <div class="BtnGroup float-right">
      <a href="/caouecs/Laravel-lang/find/master"
            class="js-pjax-capture-input btn btn-sm BtnGroup-item"
            data-pjax
            data-hotkey="t">
        Find file
      </a>
      <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm BtnGroup-item tooltipped tooltipped-s" data-copied-hint="Copied!" type="button">Copy path</button>
    </div>
    <div class="breadcrumb js-zeroclipboard-target">
      <span class="repo-root js-repo-root"><span class="js-path-segment"><a href="/caouecs/Laravel-lang"><span>Laravel-lang</span></a></span></span><span class="separator">/</span><span class="js-path-segment"><a href="/caouecs/Laravel-lang/tree/master/src"><span>src</span></a></span><span class="separator">/</span><span class="js-path-segment"><a href="/caouecs/Laravel-lang/tree/master/src/es"><span>es</span></a></span><span class="separator">/</span><strong class="final-path">validation.php</strong>
    </div>
  </div>


  
  <div class="commit-tease">
      <span class="float-right">
        <a class="commit-tease-sha" href="/caouecs/Laravel-lang/commit/1455597a68827db2268e2db5b19b7510ad99f28e" data-pjax>
          1455597
        </a>
        <relative-time datetime="2017-10-05T13:54:38Z">Oct 5, 2017</relative-time>
      </span>
      <div>
        <img alt="@palmtagwdplus" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/15248375?s=40&amp;v=4" width="20" />
        <a href="/palmtagwdplus" class="user-mention" rel="contributor">palmtagwdplus</a>
          <a href="/caouecs/Laravel-lang/commit/1455597a68827db2268e2db5b19b7510ad99f28e" class="message" data-pjax="true" title="Removed duplicate &quot;such&quot; in documentation">Removed duplicate "such" in documentation</a>
      </div>

    <div class="commit-tease-contributors">
      <button type="button" class="btn-link muted-link contributors-toggle" data-facebox="#blob_contributors_box">
        <strong>7</strong>
         contributors
      </button>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="Frondor" href="/caouecs/Laravel-lang/commits/master/src/es/validation.php?author=Frondor"><img alt="@Frondor" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/5123709?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="alejandrozorita" href="/caouecs/Laravel-lang/commits/master/src/es/validation.php?author=alejandrozorita"><img alt="@alejandrozorita" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/8058244?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="scrubmx" href="/caouecs/Laravel-lang/commits/master/src/es/validation.php?author=scrubmx"><img alt="@scrubmx" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/2574295?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="fernandobandeira" href="/caouecs/Laravel-lang/commits/master/src/es/validation.php?author=fernandobandeira"><img alt="@fernandobandeira" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/8373980?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="caouecs" href="/caouecs/Laravel-lang/commits/master/src/es/validation.php?author=caouecs"><img alt="@caouecs" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/447849?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="yammadev" href="/caouecs/Laravel-lang/commits/master/src/es/validation.php?author=yammadev"><img alt="@yammadev" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/12621550?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="palmtagwdplus" href="/caouecs/Laravel-lang/commits/master/src/es/validation.php?author=palmtagwdplus"><img alt="@palmtagwdplus" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/15248375?s=40&amp;v=4" width="20" /> </a>


    </div>

    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header" data-facebox-id="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list" data-facebox-id="facebox-description">
          <li class="facebox-user-list-item">
            <img alt="@Frondor" height="24" src="https://avatars1.githubusercontent.com/u/5123709?s=48&amp;v=4" width="24" />
            <a href="/Frondor">Frondor</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@alejandrozorita" height="24" src="https://avatars1.githubusercontent.com/u/8058244?s=48&amp;v=4" width="24" />
            <a href="/alejandrozorita">alejandrozorita</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@scrubmx" height="24" src="https://avatars1.githubusercontent.com/u/2574295?s=48&amp;v=4" width="24" />
            <a href="/scrubmx">scrubmx</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@fernandobandeira" height="24" src="https://avatars1.githubusercontent.com/u/8373980?s=48&amp;v=4" width="24" />
            <a href="/fernandobandeira">fernandobandeira</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@caouecs" height="24" src="https://avatars0.githubusercontent.com/u/447849?s=48&amp;v=4" width="24" />
            <a href="/caouecs">caouecs</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@yammadev" height="24" src="https://avatars0.githubusercontent.com/u/12621550?s=48&amp;v=4" width="24" />
            <a href="/yammadev">yammadev</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@palmtagwdplus" height="24" src="https://avatars1.githubusercontent.com/u/15248375?s=48&amp;v=4" width="24" />
            <a href="/palmtagwdplus">palmtagwdplus</a>
          </li>
      </ul>
    </div>
  </div>


  <div class="file">
    <div class="file-header">
  <div class="file-actions">

    <div class="BtnGroup">
      <a href="/caouecs/Laravel-lang/raw/master/src/es/validation.php" class="btn btn-sm BtnGroup-item" id="raw-url">Raw</a>
        <a href="/caouecs/Laravel-lang/blame/master/src/es/validation.php" class="btn btn-sm js-update-url-with-hash BtnGroup-item" data-hotkey="b">Blame</a>
      <a href="/caouecs/Laravel-lang/commits/master/src/es/validation.php" class="btn btn-sm BtnGroup-item" rel="nofollow">History</a>
    </div>

        <a class="btn-octicon tooltipped tooltipped-nw"
           href="x-github-client://openRepo/https://github.com/caouecs/Laravel-lang?branch=master&amp;filepath=src%2Fes%2Fvalidation.php"
           aria-label="Open this file in GitHub Desktop"
           data-ga-click="Repository, open with desktop, type:windows">
            <svg aria-hidden="true" class="octicon octicon-device-desktop" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M15 2H1c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5.34c-.25.61-.86 1.39-2.34 2h8c-1.48-.61-2.09-1.39-2.34-2H15c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm0 9H1V3h14v8z"/></svg>
        </a>

        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/caouecs/Laravel-lang/edit/master/src/es/validation.php" class="inline-form js-update-url-with-hash" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="UEkmnWiTGrDjZkoBcwuirIDsMAEx3HFG7fhrgmgm7lW9qZegljL18L3dWesLBBmNg7BS0nUnIHoA2+L2ne8tGw==" /></div>
          <button class="btn-octicon tooltipped tooltipped-nw" type="submit"
            aria-label="Fork this project and edit the file" data-hotkey="e" data-disable-with>
            <svg aria-hidden="true" class="octicon octicon-pencil" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"/></svg>
          </button>
</form>        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/caouecs/Laravel-lang/delete/master/src/es/validation.php" class="inline-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="v4GbV69zFqHOu34TEN5gj+PfVVzMxJamghI8bE3Rem/L1iX5B/hBXw2l5y/voilMG3mXeqSHVd2TSaeOsQNAig==" /></div>
          <button class="btn-octicon btn-octicon-danger tooltipped tooltipped-nw" type="submit"
            aria-label="Fork this project and delete the file" data-disable-with>
            <svg aria-hidden="true" class="octicon octicon-trashcan" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M11 2H9c0-.55-.45-1-1-1H5c-.55 0-1 .45-1 1H2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1v9c0 .55.45 1 1 1h7c.55 0 1-.45 1-1V5c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm-1 12H3V5h1v8h1V5h1v8h1V5h1v8h1V5h1v9zm1-10H2V3h9v1z"/></svg>
          </button>
</form>  </div>

  <div class="file-info">
      156 lines (147 sloc)
      <span class="file-info-divider"></span>
    8.1 KB
  </div>
</div>

    

  <div itemprop="text" class="blob-wrapper data type-php">
      <table class="highlight tab-size js-file-line-container" data-tab-size="4">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">return</span> [</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c"><span class="pl-c">/*</span></span></span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | Validation Language Lines</span></span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | The following language lines contain the default error messages used by</span></span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | the validator class. Some of these rules have multiple versions such</span></span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | as the size rules. Feel free to tweak each of these messages.</span></span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    <span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>accepted<span class="pl-pds">&#39;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser aceptado.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>active_url<span class="pl-pds">&#39;</span></span>           <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute no es una URL válida.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>after<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser una fecha posterior a :date.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>after_or_equal<span class="pl-pds">&#39;</span></span>       <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser una fecha posterior o igual a :date.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>alpha<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute sólo debe contener letras.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>alpha_dash<span class="pl-pds">&#39;</span></span>           <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute sólo debe contener letras, números y guiones.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>alpha_num<span class="pl-pds">&#39;</span></span>            <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute sólo debe contener letras y números.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>array<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser un conjunto.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>before<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser una fecha anterior a :date.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>before_or_equal<span class="pl-pds">&#39;</span></span>      <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser una fecha anterior o igual a :date.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>between<span class="pl-pds">&#39;</span></span>              <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>numeric<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute tiene que estar entre :min - :max.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>file<span class="pl-pds">&#39;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe pesar entre :min - :max kilobytes.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>string<span class="pl-pds">&#39;</span></span>  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute tiene que tener entre :min - :max caracteres.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>array<span class="pl-pds">&#39;</span></span>   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute tiene que tener entre :min - :max ítems.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>boolean<span class="pl-pds">&#39;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute debe tener un valor verdadero o falso.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>confirmed<span class="pl-pds">&#39;</span></span>            <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>La confirmación de :attribute no coincide.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>date<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute no es una fecha válida.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>date_format<span class="pl-pds">&#39;</span></span>          <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute no corresponde al formato :format.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>different<span class="pl-pds">&#39;</span></span>            <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute y :other deben ser diferentes.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>digits<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe tener :digits dígitos.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>digits_between<span class="pl-pds">&#39;</span></span>       <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe tener entre :min y :max dígitos.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>dimensions<span class="pl-pds">&#39;</span></span>           <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Las dimensiones de la imagen :attribute no son válidas.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>distinct<span class="pl-pds">&#39;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute contiene un valor duplicado.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>email<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute no es un correo válido<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>exists<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute es inválido.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>file<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute debe ser un archivo.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>filled<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute es obligatorio.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>image<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser una imagen.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>in<span class="pl-pds">&#39;</span></span>                   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute es inválido.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>in_array<span class="pl-pds">&#39;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute no existe en :other.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>integer<span class="pl-pds">&#39;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser un número entero.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>ip<span class="pl-pds">&#39;</span></span>                   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser una dirección IP válida.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>ipv4<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser un dirección IPv4 válida<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>ipv6<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser un dirección IPv6 válida.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>json<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute debe tener una cadena JSON válida.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>max<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>numeric<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute no debe ser mayor a :max.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>file<span class="pl-pds">&#39;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute no debe ser mayor que :max kilobytes.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>string<span class="pl-pds">&#39;</span></span>  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute no debe ser mayor que :max caracteres.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>array<span class="pl-pds">&#39;</span></span>   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute no debe tener más de :max elementos.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>mimes<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser un archivo con formato: :values.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>mimetypes<span class="pl-pds">&#39;</span></span>            <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser un archivo con formato: :values.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>min<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>numeric<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El tamaño de :attribute debe ser de al menos :min.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>file<span class="pl-pds">&#39;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El tamaño de :attribute debe ser de al menos :min kilobytes.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>string<span class="pl-pds">&#39;</span></span>  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe contener al menos :min caracteres.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>array<span class="pl-pds">&#39;</span></span>   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe tener al menos :min elementos.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>not_in<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute es inválido.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>numeric<span class="pl-pds">&#39;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe ser numérico.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>present<span class="pl-pds">&#39;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute debe estar presente.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>regex<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El formato de :attribute es inválido.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>required<span class="pl-pds">&#39;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute es obligatorio.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>required_if<span class="pl-pds">&#39;</span></span>          <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute es obligatorio cuando :other es :value.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>required_unless<span class="pl-pds">&#39;</span></span>      <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute es obligatorio a menos que :other esté en :values.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>required_with<span class="pl-pds">&#39;</span></span>        <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute es obligatorio cuando :values está presente.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>required_with_all<span class="pl-pds">&#39;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute es obligatorio cuando :values está presente.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>required_without<span class="pl-pds">&#39;</span></span>     <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute es obligatorio cuando :values no está presente.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>required_without_all<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute es obligatorio cuando ninguno de :values estén presentes.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>same<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute y :other deben coincidir.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>size<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>numeric<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El tamaño de :attribute debe ser :size.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>file<span class="pl-pds">&#39;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El tamaño de :attribute debe ser :size kilobytes.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>string<span class="pl-pds">&#39;</span></span>  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe contener :size caracteres.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>array<span class="pl-pds">&#39;</span></span>   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute debe contener :size elementos.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>string<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El campo :attribute debe ser una cadena de caracteres.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>timezone<span class="pl-pds">&#39;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El :attribute debe ser una zona válida.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>unique<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:attribute ya ha sido registrado.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>uploaded<span class="pl-pds">&#39;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Subir :attribute ha fallado.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>url<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El formato :attribute es inválido.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c"><span class="pl-c">/*</span></span></span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | Custom Validation Language Lines</span></span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | Here you may specify custom validation messages for attributes using the</span></span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | convention &quot;attribute.rule&quot; to name the lines. This makes it quick to</span></span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | specify a specific custom language line for a given attribute rule.</span></span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    <span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>custom<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>password<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">            <span class="pl-s"><span class="pl-pds">&#39;</span>min<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>La :attribute debe contener más de :min caracteres<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        ],</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>email<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">            <span class="pl-s"><span class="pl-pds">&#39;</span>unique<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>El :attribute ya ha sido registrado.<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        ],</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c"><span class="pl-c">/*</span></span></span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | Custom Validation Attributes</span></span></td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | The following language lines are used to swap attribute place-holders</span></span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | with something more reader friendly such as E-Mail Address instead</span></span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | of &quot;email&quot;. This simply helps us make messages a little cleaner.</span></span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    <span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>attributes<span class="pl-pds">&#39;</span></span>           <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>name<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>nombre<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>username<span class="pl-pds">&#39;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>usuario<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>email<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>correo electrónico<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>first_name<span class="pl-pds">&#39;</span></span>            <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>nombre<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>last_name<span class="pl-pds">&#39;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>apellido<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>password<span class="pl-pds">&#39;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>contraseña<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>password_confirmation<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>confirmación de la contraseña<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>city<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ciudad<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>country<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>país<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>address<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>dirección<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>phone<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>teléfono<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>mobile<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>móvil<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>age<span class="pl-pds">&#39;</span></span>                   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>edad<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>sex<span class="pl-pds">&#39;</span></span>                   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>sexo<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>gender<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>género<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>year<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>año<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>month<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>mes<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>day<span class="pl-pds">&#39;</span></span>                   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>día<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>hour<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>hora<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>minute<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>minuto<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>second<span class="pl-pds">&#39;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>segundo<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>title<span class="pl-pds">&#39;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>título<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>content<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>contenido<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>body<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>contenido<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>description<span class="pl-pds">&#39;</span></span>           <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>descripción<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>excerpt<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>extracto<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>date<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>fecha<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>hora<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>subject<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>asunto<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>message<span class="pl-pds">&#39;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>mensaje<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">];</span></td>
      </tr>
</table>

  <div class="BlobToolbar position-absolute js-file-line-actions dropdown js-menu-container js-select-menu d-none" aria-hidden="true">
    <button class="btn-octicon ml-0 px-2 p-0 bg-white border border-gray-dark rounded-1 dropdown-toggle js-menu-target" id="js-file-line-action-button" type="button" aria-expanded="false" aria-haspopup="true" aria-label="Inline file action toolbar" aria-controls="inline-file-actions">
      <svg aria-hidden="true" class="octicon octicon-kebab-horizontal" height="16" version="1.1" viewBox="0 0 13 16" width="13"><path fill-rule="evenodd" d="M1.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>
    </button>
    <div class="dropdown-menu-content js-menu-content" id="inline-file-actions">
      <ul class="BlobToolbar-dropdown dropdown-menu dropdown-menu-se mt-2">
        <li><a class="js-zeroclipboard dropdown-item" style="cursor:pointer;" id="js-copy-lines" data-original-text="Copy lines">Copy lines</a></li>
        <li><a class="js-zeroclipboard dropdown-item" id= "js-copy-permalink" style="cursor:pointer;" data-original-text="Copy permalink">Copy permalink</a></li>
        <li><a href="/caouecs/Laravel-lang/blame/746896db434fa3e37700f8e74a0b1237f161af68/src/es/validation.php" class="dropdown-item js-update-url-with-hash" id="js-view-git-blame">View git blame</a></li>
          <li><a href="/caouecs/Laravel-lang/issues/new" class="dropdown-item" id="js-new-issue">Open new issue</a></li>
      </ul>
    </div>
  </div>

  </div>

  </div>

  <button type="button" data-facebox="#jump-to-line" data-facebox-class="linejump" data-hotkey="l" class="d-none">Jump to Line</button>
  <div id="jump-to-line" style="display:none">
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
      <input class="form-control linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
      <button type="submit" class="btn">Go</button>
</form>  </div>

  </div>
  <div class="modal-backdrop js-touch-events"></div>
</div>

    </div>
  </div>

  </div>

      
<div class="footer container-lg px-3" role="contentinfo">
  <div class="position-relative d-flex flex-justify-between py-6 mt-6 f6 text-gray border-top border-gray-light ">
    <ul class="list-style-none d-flex flex-wrap ">
      <li class="mr-3">&copy; 2017 <span title="0.17337s from unicorn-3501714702-slbh2">GitHub</span>, Inc.</li>
        <li class="mr-3"><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li class="mr-3"><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li class="mr-3"><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li class="mr-3"><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>

    <a href="https://github.com" aria-label="Homepage" class="footer-octicon" title="GitHub">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>
    <ul class="list-style-none d-flex flex-wrap ">
        <li class="mr-3"><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
      <li class="mr-3"><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li class="mr-3"><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li class="mr-3"><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li class="mr-3"><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>
  </div>
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
    You can't perform that action at this time.
  </div>


    
    <script crossorigin="anonymous" integrity="sha256-R7c3eUp64zkx0aUKgHD8RyBMQTxCRYqXgUMLHeA4450=" src="https://assets-cdn.github.com/assets/frameworks-47b737794a7ae33931d1a50a8070fc47204c413c42458a9781430b1de038e39d.js"></script>
    
    <script async="async" crossorigin="anonymous" integrity="sha256-Qkc87DGR10XKre61lV2syUoYE2acFhpZ4zg4WtwcvJA=" src="https://assets-cdn.github.com/assets/github-42473cec3191d745caadeeb5955dacc94a1813669c161a59e338385adc1cbc90.js"></script>
    
    
    
    
  <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <div class="facebox" id="facebox" style="display:none;">
  <div class="facebox-popup">
    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
    </div>
    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
  </div>
</div>


  </body>
</html>

