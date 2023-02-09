<aside id="sidebar" class="sidebar">



    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('all_category') }}">
              <i class="bi bi-circle"></i><span>All Category list</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add_category') }}">
              <i class="bi bi-circle"></i><span>Create Category</span>
            </a>
          </li>

        </ul>
      </li><!-- End Category Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#post-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Post</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="post-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('all_post') }}">
              <i class="bi bi-circle"></i><span>All Post list</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add_post') }}">
              <i class="bi bi-circle"></i><span>Create Post</span>
            </a>
          </li>

        </ul>
      </li><!-- End Post Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#bio-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Personal info</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="bio-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('all_bio') }}">
              <i class="bi bi-circle"></i><span>All Bio list</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add_bio') }}">
              <i class="bi bi-circle"></i><span>Create Bio</span>
            </a>
          </li>

        </ul>
      </li><!-- End Biograpgy Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#emp-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Employee</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="emp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('all_emp') }}">
              <i class="bi bi-circle"></i><span>All Employees list</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add_emp') }}">
              <i class="bi bi-circle"></i><span>Create Employee</span>
            </a>
          </li>

        </ul>
      </li><!-- End employees Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#arcive-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Archive </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="arcive-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('personal_list') }}">
              <i class="bi bi-circle"></i><span> Personal Images</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add_image') }}">
              <i class="bi bi-circle"></i><span>Insert Image</span>
            </a>
          </li>

        </ul>
      </li><!-- End Manage Archive Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#prod-nav" data-bs-toggle="collapse" href="#">
            <i class="fa-sharp fa-solid fa-gear"></i><span>Product Settings </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="prod-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <ul>
                <i class="fa-sharp fa-solid fa-hammer"></i> UOM
                    <a href="{{ route('all_uom') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i> <span> UOM List</span>
                    </a>

                    <a href="{{ route('add_uom') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span>Create UOM</span>
                    </a>
                    {{-- <a href="{{ route('uom_edit') }}">
                        <i class="bi bi-circle"></i><span>Edit UOM</span>
                      </a> --}}
                </li>
                <i class="fa-sharp fa-solid fa-hammer"></i> Brand
                    <a href="{{ route('all_brand') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span> Brand List</span>
                    </a>

                    <a href="{{ route('add_brand') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span>Create Brand</span>
                    </a>
                </li>
                <i class="fa-sharp fa-solid fa-hammer"></i> Item Category
                    <a href="{{ route('all_category') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span> Category List</span>
                    </a>

                    <a href="{{ route('add_category') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span>Create Category</span>
                    </a>
                </li>
                <i class="fa-sharp fa-solid fa-hammer"></i> Item Type
                    <a href="{{ route('itemtype_list') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span> Item Type List</span>
                    </a>

                    <a href="{{ route('add_itemtype') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span>Create Item Type</span>
                    </a>
                </li>

                <i class="fa-sharp fa-solid fa-hammer mhamcls"></i> Item Model
                    <a href="{{ route('item_model_list') }}">
                      <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span> Item Model List</span>
                    </a>

                    <a href="{{ route('add_itemmodel') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i></i><span>Create Item Model</span>
                    </a>
                </li>

                <i class="fa-sharp fa-solid fa-hammer mhamcls"></i> Actual Item
                    <a href="{{ route('item_list') }}">
                      <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><span> Item List</span>
                    </a>

                    <a href="{{ route('add_item') }}">
                        <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i></i><span>Create Item </span>
                    </a>
                </li>

            </ul>
          </li>

        </ul>
      </li><!-- End Product Setting Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <img src="{{ asset('backend/assets/img/SD-9144.jpg') }}" height="50px" width="50px" alt="Profile" class="rounded-circle"><span>Profile Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="{{ route('user_list') }}">
              <i class="bi bi-circle"></i><span>User's List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Profile  Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->



    </ul>

</aside>
