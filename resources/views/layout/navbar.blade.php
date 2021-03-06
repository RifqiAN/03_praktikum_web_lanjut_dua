<div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="#" class="navbar-brand tm-site-name">Sixteen Clothing Products</a>
            <nav class="navbar tm-main-nav">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>
                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item {{ $judul === "Index" ? 'active' : '' }}">
                            <a href="/index" class="nav-link">Index</a>
                        </li>
                        <li class="nav-item {{ $judul === "About" ? 'active' : '' }}">   
                            <a href="/about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item {{ $judul === "Products" ? 'active' : '' }}">
                            <a href="/products" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item {{ $judul === "Contact" ? 'active' : '' }}">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                    </ul>                        
                </div>
            </nav>  
        </div>                                  
    </div>            
</div>