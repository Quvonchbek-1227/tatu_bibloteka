<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Barcha Bo`limlar</li>
            <li><a class="has-arrow" href="{{ route('admin.home') }}" aria-expanded="false">
                    <i class="la la-home"></i>
                    <span class="nav-text">Bosh Sahifa</span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">Kitoblar Bo`limi.</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.book.index') }}">Barcha Kitoblar</a></li>
                    <li><a href="{{ route('admin.book.create') }}">Kitob Qo`shish</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Yangiliklar</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('blog.index') }}">Barcha Yangiliklar</a></li>
                    <li><a href="{{ route('blog.create') }}">Yangilik Qo`shish</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-graduation-cap"></i>
                    <span class="nav-text">Kitoblar Kategoriyalari</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('category.index') }}">Barcha Kategoriyalar</a></li>
                    <li><a href="{{ route('category.create') }}">Kategoriya Qo`shish</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="{{ route('all_messages') }}" aria-expanded="false">
                    <i class="la fab-fa-telegram"></i>
                    <span class="nav-text">Murojatlar</span>
                </a>
            </li>
            <li><a class="has-arrow" href="#" aria-expanded="false">
                    <i class="la fab-fa-telegram"></i>
                    <span class="nav-text">Accountni Boshqarish</span>
                </a>
            </li>
        </ul>
    </div>
</div>