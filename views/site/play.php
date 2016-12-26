<?php

/* @var $this yii\web\View */

$this->title = 'VIDO - Play now ';
?>
<style type="text/css">
    /* image thumbnail */
    .thumb {
        display: block;
        width: 100%;
        margin: 0;
    }

    /* Style to article Author */
    .by-author {
        font-style: italic;
        line-height: 1.3;
        color: #aab6aa;
    }

    /* Main Article [Module]
    -------------------------------------
    * Featured Article Thumbnail
    * have a image and a text title.
    */
    .featured-article {
        width: 482px;
        height: 350px;
        position: relative;
        margin-bottom: 1em;
    }

    .featured-article .block-title {
        /* Position & Box Model */
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 1;
        /* background */
        background: rgba(0, 0, 0, 0.7);
        /* Width/Height */
        padding: .5em;
        width: 100%;
        /* Text color */
        color: #fff;
    }

    .featured-article .block-title h2 {
        margin: 0;
    }

    /* Featured Articles List [BS3]
    --------------------------------------------
    * show the last 3 articles post
    */

    .main-list {
        padding-left: .5em;
    }

    .main-list .media {
        padding-bottom: 1.1em;
        border-bottom: 1px solid #e8e8e8;
    }
</style>
<div class="site-index">
    <div class="row">
        <h1>Article Thumbnails</h1>
        <p>Use it to your news site, feature a article.</p>
    </div>
    <div class="row">
        <div class="col-md-5 col-lg-5">
            <!-- artigo em destaque -->
            <div class="featured-article">
                <a href="#">
                    <img src="http://placehold.it/482x350" alt="" class="thumb">
                </a>
                <div class="block-title">
                    <h2>Lorem ipsum dolor asit amet</h2>
                    <p class="by-author">
                        <small>By Jhon Doe</small>
                    </p>
                </div>
            </div>
            <!-- /.featured-article -->
        </div>
        <div class="col-md-7 col-lg-7">
            <ul class="media-list main-list">
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/150x90" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                        <p class="by-author">By Jhon Doe</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/150x90" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                        <p class="by-author">By Jhon Doe</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/150x90" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                        <p class="by-author">By Jhon Doe</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/150x90" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                        <p class="by-author">By Jhon Doe</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
