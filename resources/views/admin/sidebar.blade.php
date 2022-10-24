<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="{{ asset('template/admin/img/310367766_2847154665428519_8506908640324461498_n.jpg') }}" alt="">
        </div>

        <span class="logo_name">Fruitkha</span>
    </div>

    <div class="menu-items1">
        <ul class="nav-links1">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name1">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categories') }}">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name1">Categories</span>
                </a>
            </li>
            <li>
                <a href="{{ route('add-category') }}">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name1">Add Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('products') }}">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name1">Products</span>
                </a>
            </li>
            <li>
                <a href="{{ route('add-product') }}">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name1">Add Product</span>
                </a>
            </li>
        </ul>
        
        <ul class="logout-mode">
            <li>
                <form action="{{ route('logout') }}" method="post" id="logout-form">
                    @csrf
                    <a href="#" onclick="document.getElementById('logout-form').submit()">
                        <i class="uil uil-signout"></i>
                        <span class="link-name1">Logout</span>
                    </a>
                </form>
            </li>

            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                <span class="link-name1">Dark Mode</span>
            </a>

            <div class="mode-toggle">
                <span class="switch"></span>
            </div>
        </li>
        </ul>
    </div>
</nav>