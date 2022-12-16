   <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
       <div class="container">
           <a href="{{ route('index') }}" class="navbar-brand">Giga<span class="text-primary">Tera.</span></a>

           <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
               aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="navbar-collapse collapse" id="navbarContent">
               <ul class="navbar-nav ml-auto">
                   <li class="{{ session('active_button') == 'home' ? 'active' : '' }}">
                       <a class="nav-link" href="{{ route('index') }}">Home</a>
                   </li>
                   <li class="nav-item {{ session('active_button') == 'portofolio' ? 'active' : '' }}">
                       <a class="nav-link" href="{{ route('index.portofolio') }}">Portofolio</a>
                   </li>
                   <li class="nav-item {{ session('active_button') == 'blog' ? 'active' : '' }}">
                       <a class="nav-link" href="{{ route('index.blog') }}">Blog</a>
                   </li>
                   <li class="nav-item {{ session('active_button') == 'kontak' ? 'active' : '' }}">
                       <a class="nav-link" href="{{ route('index.kontak') }}">Kontak</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
