{{-- sidebar start --}}

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img width="100" src="{{ asset('frontend/assets/img/logow.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h6 class="logo-text">Polytech-Books</h6>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('create.category') }}"><i class="bx bx-right-arrow-alt"></i>Add</a>
                </li>
                <li> <a href="{{ route('all.category') }}"><i class="bx bx-right-arrow-alt"></i>All Category </a>
                </li>
                {{-- <li> <a href="{{ route('create.subCategory') }}"><i class="bx bx-right-arrow-alt"></i>Add Sub Category</a> --}}
                </li>
                <li> <a href="{{ route('all.subCategory') }}"><i class="bx bx-right-arrow-alt"></i>All Sub-Category</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Book Managment</div>
            </a>
            <ul>
                <li> <a href="{{ route('create.product') }}"><i class="bx bx-right-arrow-alt"></i>Add Book</a>
                </li>
                <li> <a href="{{ route('all.Products') }}"><i class="bx bx-right-arrow-alt"></i>All books</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Recycle Bin</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.restore') }}"><i class="bx bx-right-arrow-alt"></i>book Recycle</a>
                </li>

            </ul>
        </li>

        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Cupon</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.product.cupon') }}"><i class="bx bx-right-arrow-alt"></i>Cupon</a>
                </li>

            </ul>
        </li> --}}


        {{-- PAYMENT STATUS START --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">payment</div>
            </a>
            <ul>
                <li> <a href="{{ route('payment') }}"><i class="bx bx-right-arrow-alt"></i>payment list</a>
                </li>

            </ul>
        </li>
        {{-- PAYMENT STATUS END --}}

    </ul>
    <!--end navigation-->
</div>

{{-- sidebar end --}}
