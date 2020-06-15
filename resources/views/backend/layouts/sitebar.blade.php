@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp

<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
      
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('users.view')}}" class="nav-link {{ ($route=='users.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View User</p>
                    </a>
                   </li>
                   </ul>
              </li>      
          <li class="nav-item has-treeview {{($prefix=='/profile')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profile.view')}}" class="nav-link {{ ($route=='profile.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profile</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{ route('password.view')}}" class="nav-link {{ ($route=='password.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
            </li>

            <li class="nav-item has-treeview {{($prefix=='/suppliers')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Supplier
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('suppliers.view')}}" class="nav-link {{ ($route=='suppliers.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Supplier</p>
                </a>
              </li>
            </ul>
            </li>

            <li class="nav-item has-treeview {{($prefix=='/customers')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Customer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('customers.view')}}" class="nav-link {{ ($route=='customers.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Customer</p>
                </a>
              </li>
            </ul>
            </li>

             <li class="nav-item has-treeview {{($prefix=='/units')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Unit
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('units.view')}}" class="nav-link {{ ($route=='units.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Unit</p>
                </a>
              </li>
            </ul>
            </li>

            <li class="nav-item has-treeview {{($prefix=='/categories')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categories.view')}}" class="nav-link {{ ($route=='categories.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Categories</p>
                </a>
              </li>
            </ul>
            </li>


            <li class="nav-item has-treeview {{($prefix=='/products')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('products.view')}}" class="nav-link {{ ($route=='products.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Products</p>
                </a>
              </li>
            </ul>
            </li>

             <li class="nav-item has-treeview {{($prefix=='/purchase')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Purchase
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('purchase.view')}}" class="nav-link {{ ($route=='purchase.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Purchase</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('purchase.pending.list')}}" class="nav-link {{ ($route=='purchase.pending.list')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approval Purchase</p>
                </a>
              </li>
            </ul>
            </li>

            <li class="nav-item has-treeview {{($prefix=='/invoice')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Invoice
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('invoice.view')}}" class="nav-link {{ ($route=='invoice.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Invoice</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('invoice.pending.list')}}" class="nav-link {{ ($route=='invoice.pending.list')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approval Invoice</p>
                </a>
              </li>
            </ul>
            </li>
          </nav>
      <!-- /.sidebar-menu -->
    </div>