<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet"/>

    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all"/>


</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="#">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{ Request::is('/') ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
                <li class="{{ Request::is('clients') ? 'current_page_item' : ''}}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                <li class="{{ Request::is('about') ? 'current_page_item' : ''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
                <li class="{{ Request::is('articles') ? 'current_page_item' : ''}}"><a href="/articles" accesskey="4" title="">Articles</a></li>
                <li class="{{ Request::is('contacts') ? 'current_page_item' : ''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
            </ul>
        </div>
    </div>
    @yield('header-featured')
</div>
@yield('content')

<div id="copyright" class="container">
    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>

@yield('test-content')
</body>
</html>
