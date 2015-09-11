<!doctype html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <title>Bark and Boogie Ball</title>
    <script type="application/javascript" src="<% elixir('js/all.js') %>"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="<% elixir('css/all.css') %>"/>
</head>
<body ng-app="todoApp" ng-controller="MainController" ng-init="getAuthenticatedUser()">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Bark and Boogie Ball</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ng-class="{active:isActive('/todos')}"><a href="/todos">Todos</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/auctionitems">Auction Items</a></li>
                        <li class="divider"></li>
                        <li><a href="/attendees">Attendees</a></li>
                        <!-- <li class="divider"></li>
                        <li><a href="/seats">Seats</a></li> -->
                    </ul>s
                </li>
                <li ng-class="{active:isActive('/checkin')}"><a href="/checkin">Check In/Out    </a></li>
                <li ng-class="{active:isActive('/assignauctionitems')}"><a href="/assignauctionitems">Assign Items</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li ng-if="authenticatedUser == null" ng-class="{active:isActive('/auth/signup')}"><a href="/auth/signup">Sign Up</a></li>
                <li ng-if="authenticatedUser == null" ng-class="{active:isActive('/auth/login')}"><a href="/auth/login">Log in</a></li>
                <li ng-if="authenticatedUser != null" ng-class="{active:isActive('/users/view/' + authenticatedUser.id)}"><a ng-href="/users/view/{{authenticatedUser.id}}">{{authenticatedUser.username}}</a></li>
                <li ng-if="authenticatedUser != null" ng-click="logout()"><a ng-href="#">Log out</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div ng-view>
    </div>
</div>

</body>
</html>
