<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a></div>
      <div class="sidebar-wrapper">
      <ul class="nav">
      @if(Auth::user()->email == 'mayor0014u@yahoo.com')
                  @if(Session::has('dashboard'))
                  <li class="nav-item active  ">
                          <a class="nav-link" href="{{URL::to('/admin')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                          </a>
                  </li>
                  {{Session::put('dashboard',null)}}
                  @else
                    <li class="nav-item">
                          <a class="nav-link" href="{{URL::to('/admin')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                          </a>
                        </li>
                  @endif
              

                  @if(Session::has('userprofile'))
                    <li class="nav-item active">
                      <a class="nav-link" href="{{URL::to('/userprofile')}}">
                        <i class="material-icons">person</i>
                        <p>Freelancher Profile</p>
                      </a>
                    </li>
                    {{Session::put('userprofile',null)}}
                  @else
                    <li class="nav-item ">
                      <a class="nav-link" href="{{URL::to('/userprofile')}}">
                        <i class="material-icons">person</i>
                        <p>Freelancher Profile</p>
                      </a>
                    </li>
                  @endif

                  @if(Session::has('addcategory'))
                    <li class="nav-item active">
                      <a class="nav-link" href="{{URL::to('/category')}}">
                        <i class="material-icons">person</i>
                        <p>Add category</p>
                      </a>
                    </li>
                  {{Session::put('addcategory',null)}}
                  @else
                  <li class="nav-item ">
                    <a class="nav-link" href="{{URL::to('/category')}}">
                      <i class="material-icons">person</i>
                      <p>Add category</p>
                    </a>
                  </li>
                  @endif


                  @if(Session::has('users'))
                  <li class="nav-item active">
                    <a class="nav-link" href="{{URL::to('/users')}}">
                      <i class="material-icons">content_paste</i>
                      <p>Freelanchers</p>
                    </a>
                  </li>
                  {{Session::put('users',null)}}
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/users')}}">
                      <i class="material-icons">content_paste</i>
                      <p>Freelanchers</p>
                    </a>
                  </li>
                  @endif

            @if(Session::has('trash'))
              <li class="nav-item active">
                  <a class="nav-link" href="{{URL::to('/trash')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Trash</p>
                  </a>
                </li>
                {{Session::put('trash',null)}}
            @else
            <li class="nav-item">
                  <a class="nav-link" href="{{URL::to('/trash')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Trash</p>
                  </a>
                </li>
            @endif


            @if(Session::has('allcategories'))
                  
                  <li class="nav-item active ">
                          <a class="nav-link" href="{{URL::to('/allcategories')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Freelancher categories</p>
                          </a>
                  </li>
                  {{Session::put('allcategories',null)}}
            @else
              <li class="nav-item ">
                  <a class="nav-link" href="{{URL::to('/allcategories')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Freelancher categories</p>
                  </a>
              </li>
            @endif
              
              
              
              <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                  <i class="material-icons">library_books</i>
                  <p>Typography</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                  <i class="material-icons">bubble_chart</i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                  <i class="material-icons">location_ons</i>
                  <p>Maps</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                  <i class="material-icons">notifications</i>
                  <p>Notifications</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./rtl.html">
                  <i class="material-icons">language</i>
                  <p>RTL Support</p>
                </a>
              </li>
              <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                  <i class="material-icons">unarchive</i>
                  <p>Upgrade to PRO</p>
                </a>
              </li>
      @else
              @if(Session::has('dashboard'))
              <li class="nav-item active  ">
                      <a class="nav-link" href="{{URL::to('/admin')}}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                      </a>
              </li>
              {{Session::put('dashboard',null)}}
              @else
                <li class="nav-item">
                      <a class="nav-link" href="{{URL::to('/admin')}}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                      </a>
                    </li>
              @endif
          

              @if(Session::has('userprofile'))
                <li class="nav-item active">
                  <a class="nav-link" href="{{URL::to('/userprofile')}}">
                    <i class="material-icons">person</i>
                    <p>Freelancher Profile</p>
                  </a>
                </li>
                {{Session::put('userprofile',null)}}
              @else
                <li class="nav-item ">
                  <a class="nav-link" href="{{URL::to('/userprofile')}}">
                    <i class="material-icons">person</i>
                    <p>Freelancher Profile</p>
                  </a>
                </li>
              @endif
      @endif
        
      </ul>
    </div>
  </div>