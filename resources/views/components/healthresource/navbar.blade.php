<!-- ***** Header Area Start ***** -->
<div class="container">
    <div class="nav-header-text">
        <h2>Vitaway Health Resource Center</h2>
    </div>
</div>
<header class="subnavbar header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section" onmouseover="openSubmenu(this)" onmouseout="openSubmenu(this)">
                            <a class="active">Home</a>
                            <ul class="submenu">
                                <li><a href="#">link1</a></li>
                                <li><a href="#">link2</a></li>
                                <li><a href="#">link3</a></li>
                                <li><a href="#">link4</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section" onmouseover="openSubmenu(this)" onmouseout="openSubmenu(this)">
                            <a href="{{ route('resource.role') }}">Role</a>
                            <ul class="submenu">
                                <li><a href="#">link1</a></li>
                                <li><a href="#">link2</a></li>
                                <li><a href="#">link3</a></li>
                                <li><a href="#">link4</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section" onmouseover="openSubmenu(this)" onmouseout="openSubmenu(this)">
                            <a href="{{ route('resource.types') }}">Types</a>
                            <ul class="submenu">
                                <li><a href="#">link1</a></li>
                                <li><a href="#">link2</a></li>
                                <li><a href="#">link3</a></li>
                                <li><a href="#">link4</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section" onmouseover="openSubmenu(this)" onmouseout="openSubmenu(this)">
                            <a href="{{ route('resource.condition') }}">Condition</a>
                            <ul class="submenu">
                                <li><a href="#">link1</a></li>
                                <li><a href="#">link2</a></li>
                                <li><a href="#">link3</a></li>
                                <li><a href="#">link4</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<script>
    function openSubmenu(obj) {
        if (obj.lastChild.previousSibling.classList.contains('d-block')) {
            obj.lastChild.previousSibling.classList.remove("d-block");
        } else {
            obj.lastChild.previousSibling.classList.add("d-block");
        }
    }
</script>
