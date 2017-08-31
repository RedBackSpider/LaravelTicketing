<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='{{url('home')}}'><img src="{{asset('image/rmit.png')}}">RMIT Support and Service</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                <li><a href="{{url('faq')}}">FAQ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <!-- CUSTOMER FORM -->
                        <li><a href="{{url('ticket/create')}}">Create Ticket</a></li>
                        <li><a href="{{url('person/create')}}">Create Person</a></li>
                        <!-- INDEX PAGES -->
                        <li><a href="{{url('person')}}">View All People</a></li>
                        <li><a href="{{url('ticket')}}">View All Tickets</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false">References <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="http://mams.rmit.edu.au/2dcdyb3ky5fd.pdf">RMIT Brand Guide</a></li>
                        <li><a href="{{URL::asset('pdf/Assignment1.pdf')}}">Assignment Specifications</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>