
					<div class="w3-sidebar w3-bar-block w3-black" style="display:none" id="mySidebar">
					<h1></h1>
						<button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
						<a href="/dashboard" class="w3-bar-item w3-button">Dashboard</a>
						@if(auth()->user()->role== 'admin')
						
						<a href="/hotel" class="w3-bar-item w3-button">Pegawai</a>
						<a href="/pengunjung" class="w3-bar-item w3-button">Pengunjung</a>
						<a href="/kamar" class="w3-bar-item w3-button">Kamar Hotel</a>
						<a href="/transaksi" class="w3-bar-item w3-button">Transaksi</a>
						@endif
						@if(auth()->user()->role== 'pegawai')
						<a href="/pengunjung" class="w3-bar-item w3-button">Pengunjung</a>
						<a href="/kamar" class="w3-bar-item w3-button">Kamar Hotel</a>
						@endif
						</div>

						<!-- Page Content -->
						<div class="w3-indigo">
						<h1>.</h1>
						<button class="w3-button w3-indigo w3-xlarge" onclick="w3_open()">☰</button>
						<div class="w3-container">
						</div>
						</div>


					

