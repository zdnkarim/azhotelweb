<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  @if(auth()->user()->role== 'admin')
      <a class="navbar-brand" href="/dashboard">Z & A HOTEL (Admin)
	  @endif
	  @if(auth()->user()->role== 'pegawai')
	  <a class="navbar-brand" href="/dashboard">Z & A HOTEL (Pegawai)
	  @endif
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/logout">LOGOUT</a></li>
        </li>

        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>