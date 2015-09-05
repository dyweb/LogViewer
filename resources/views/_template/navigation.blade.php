<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LogViewer</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ route('log-viewer::dashboard') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
        </ul>
    </div>
</nav>