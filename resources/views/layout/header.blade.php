<nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="{{ route('home')}}">Home</a></li>
                  <li><a href="{{ route('about')}}">About</a></li>
                  <li><a href="">Cars</a>
                      <ul>
                          <li><a href="{{ route('cars-raja')}}"> Raja Sewa Mobil </a></li>
                          <li><a href="{{ route('cars-platinum')}}">Platinum Rent Car</a></li>
                          <li><a href="{{ route('cars-artharent')}}">Artharent Car</a></li>
                          <li><a href="{{ route('cars-cakra')}}">Cakra Rental Mobil</a></li>
                          <li><a href="{{ route('cars-bintangmas')}}">Bintangmas Rent Car</a></li>
                          <li><a href="{{ route('cars-keken')}}">Keken Rent Car</a></li>
                      </ul>
                  </li>	
                  <li><a href="{{ route('blog-home')}}">Blog</a></li>	
                  <li><a href="{{ route('contact')}}">Contact</a></li>
                  <li><a href="{{ route('login')}}">Admin</a></li>				          
              </ul>
          </nav>