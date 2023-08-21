<div class="header">
	<div class="row align-items-center">
		<div class="col-md-8">
			<h2><img src="{{ asset(env('adminIamgePath').'assets/images/hand.gif') }}" alt=""> Hello <span style="text-transform: uppercase">{{ Auth::user()->name }} {{ Auth::user()->last_name }}!</span></h2>
		</div>
		<div class="col-md-4">
			<div class="headerRight">
				<div class="notifyicon">
					<a href="#"><span>1</span> <i class="fas fa-bell"></i></a>
				</div>
				<div class="usrlist">
					<div class="dropdown-nav">
						<div class="usrimg">
							<img src="{{ asset(env('adminIamgePath').'assets/images/user.png') }}" alt="">
							<span><i class="fa fa-angle-down"></i>
						</div>
						<ul class="dropdown">
							<li><a href="#">Profile</a></li>
							<li><a href="#">Settings</a></li>
							<li><a href="#">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button style="background-color: transparent; border: none; outline: none; padding: 0%; margin: 0%"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out
                                        </button>
                                </form></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
