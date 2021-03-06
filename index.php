<?php  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TEST</title>
  <script type="text/javascript" src=""></script>
  <script type="text/javascript" src="../uikit-3.0.0-beta.42/uikit-3.0.0-beta.42/dist/js/uikit.min.js"></script>
  <script type="text/javascript" src="../uikit-3.0.0-beta.42/uikit-3.0.0-beta.42/dist/js/uikit-icons.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../uikit-3.0.0-beta.42/uikit-3.0.0-beta.42/dist/css/uikit.min.css">
</head>

<body>
  <header class="uk-nav-header">
    <nav class="uk-navbar-container" uk-navbar>
      <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-navbar-toggle uk-logo uk-invisible-large" href="#">Logo</a>
        <ul class="uk-navbar-nav">
          <li class="uk-hidden-touch">
            <a href="#">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                    Features
                </a>
          </li>
        </ul>

        <nav class="uk-navbar-container uk-margin uk-hidden-touch" uk-navbar>
          <div class="uk-navbar-item">
            <div>Some <a href="#">Link</a></div>
          </div>
          <div class="uk-navbar-item uk-hidden-touch">
            <form action="javascript:void(0)">
              <input class="uk-input uk-form-width-small" type="text" placeholder="Input">
              <button class="uk-button uk-button-default">Button</button>
            </form>
          </div>
      </div>
      <div class="uk-navbar-right uk-margin-right">
        <a href="#offcanvas-slide" class="uk-button uk-button-default uk-hidden-notouch" uk-toggle>Menu</a>
        <div class="uk-inline uk-hidden-touch">
          <button class="uk-button uk-button-default" type="button">Menu</button>
          <div uk-dropdown>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
        </div>
      </div>
      </nav>

      <div id="offcanvas-slide" uk-offcanvas>
        <div class="uk-offcanvas-bar">

          <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
          </ul>

        </div>
      </div>
      </div>
    </nav>
  </header>
  <article class="article-container">

    <div class="container uk-grid-small uk-child-width-1-4@l uk-child-width-1-2@s uk-text-center uk-grid-match uk-width-1-1" uk-grid>
      <div class="uk-card uk-card-default uk-card-body uk-margin-medium-right uk-margin-medium-left">
        <div class="uk-card uk-card-default uk-card-body">
          <h3>TITLE</h3>
          <p>DIT IS EEN TEKST</p>
        </div>
        <div class="uk-card uk-card-default uk-card-body">
          <h3>TITLE</h3>
          <p>DIT IS EEN TEKST</p>
        </div>
      </div>
      <div class="uk-card uk-card-default uk-card-body uk-margin-medium-right uk-margin-medium-left ">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-2">
          <h3>TITLE</h3>
          <p>DIT IS EEN TEKST</p>
        </div>
        <div class="uk-card uk-card-default uk-card-body uk-width-1-2">
          <h3>TITLE</h3>
          <p>DIT IS EEN TEKST</p>
        </div>
      </div>
      <div class="uk-card uk-card-default uk-card-body uk-margin-medium-right uk-margin-medium-left uk-width-auto">
        <div class="uk-card uk-card-default uk-card-body">
          <h3>TITLE</h3>
          <p>DIT IS EEN TEKST</p>
        </div>
        <div class="uk-card uk-card-default uk-card-body">
          <h3>TITLE</h3>
          <p>DIT IS EEN TEKST</p>
        </div>
      </div>
    </div>
    <ul class="uk-pagination" data-uk-pagination="{items:100, itemsOnPage:10}">
    </ul>

  </article>
</body>

</html>
