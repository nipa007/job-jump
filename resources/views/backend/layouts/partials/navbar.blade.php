@php
    $userId = Auth::id();
    $personalDetailExists = \App\Models\Candidate\PersonalInfo::where('user_id', $userId)->exists();
    $educationDetailExists = \App\Models\Candidate\Education::where('user_id', $userId)->exists();
@endphp




<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link-->
        <a href="{{ route('home.page') }}" class="brand-link">
           <h4>Job Jump</h4>
        </a>

        </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                  @if (Auth::user()->role == 'admin')
                  <a href="{{ route('admin.dashboard') }}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>Dashboard</p></a>
                      @elseif (Auth::user()->role == 'company')
                      <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>Dashboard</p></a>
                  @else
                      <a href="{{route('candidate.dashboard')}}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>Dashboard</p></a>
                  @endif

                </li>


                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'company')
                    <li class="nav-item">
                        <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>Compnay<i class="nav-arrow bi bi-chevron-right"></i></p></a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                            <p>{{ Auth::user()->role == 'admin' ? 'All Companies' : 'My Company' }}</p>
                            </a>
                        </li>


                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Add New Company</p>
                            </a>
                        </li>


                            @if(Auth::user()->role == 'admin')
                            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Pending Company</p>
                                </a>
                            </li>

                            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Featured Companies</p>
                                </a>
                            </li>
                            @endif


                    </ul>
                </li>
                @endif


                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'company')
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                        Jobs
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                            <p>Jobs List</p>
                        </a> </li>


                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Add New Job</p>
                            </a> </li>


                </ul>
            </li>

            <li class="nav-item menu-open">
                <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>Application Received</p></a>
            </li>
            @endif


            @if (Auth::user()->role == 'admin')
            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                <p>
                    Jobs Category
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Category List</p>
                    </a> </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Add New Category</p>
                    </a> </li>
            </ul>
        </li>


            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                <p>
                    Job Type
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Type List</p>
                    </a> </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                        <p>Add New Type</p>
                    </a> </li>

            </ul>
        </li>


        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>
                Degrees
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>Degree List</p>
                </a> </li>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>Add New Degree</p>
                </a> </li>

        </ul>
        </li>
        @endif


        @if (Auth::user()->role == 'candidate')
        <li class="nav-item">
            <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>My Profile<i class="nav-arrow bi bi-chevron-right"></i></p>
            </a>
        <ul class="nav nav-treeview">
                @if (Auth::user()->is_profile_created == 0)
                @if ($personalDetailExists)
                <li class="nav-item">
                    <a href="{{ route('personal.info.edit', ['id' => $userId]) }}" class="nav-link">
                        <i class="nav-icon bi bi-pencil"></i>
                        <p>Edit Personal Details</p>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('personal.info') }}" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Create Personal Details</p>
                    </a>
                </li>
            @endif

            @if ($educationDetailExists)

            <li class="nav-item">
                <a href="{{ route('education.edit', ['id' => $userId]) }}" class="nav-link"> <i class="nav-icon bi bi-circle">

                </i>
                    <p>Edit Education Info</p>
                </a>
            </li>

            @else
            <li class="nav-item">
                <a href="{{ route('create.education') }}" class="nav-link"> <i class="nav-icon bi bi-circle">

                </i>
                    <p>Education Details</p>
                </a>
            </li>


            @endif



                <li class="nav-item">
                    <a href="{{ route('personal.info') }}" class="nav-link"> <i class="nav-icon bi bi-circle">

                    </i>
                        <p>Training</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('personal.info') }}" class="nav-link"> <i class="nav-icon bi bi-circle">

                    </i>
                        <p>Skills</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('personal.info') }}" class="nav-link"> <i class="nav-icon bi bi-circle">

                    </i>
                        <p>Experience</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('personal.info') }}" class="nav-link"> <i class="nav-icon bi bi-circle">

                    </i>
                        <p>Languages Proficiency</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('personal.info') }}" class="nav-link"> <i class="nav-icon bi bi-circle">

                    </i>
                        <p>Career and Application Info</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('personal.info') }}" class="nav-link"> <i class="nav-icon bi bi-circle">

                    </i>
                        <p>References</p>
                    </a>
                </li>
                @endif


            <li class="nav-item">
                {{-- <a href="{{ route('candidate.profile.view', ['id' => auth()->user()->id]) }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>View</p>
                </a> --}}
            </li>

            <li class="nav-item">
                {{-- <a href="{{ route('candidate.profile.update') }}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                    <p>Update</p>
                </a> --}}
            </li>
        </ul>
        </li>


        <li class="nav-item menu-open">
                <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>My Application</p></a>
        </li>
      @endif

            {{-- plugins start --}}

        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'company')
            <li class="nav-item menu-open">
                {{-- <a href="{{ route('plugin.index') }}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>Plugins</p></a> --}}
            </li>
        @endif
            {{-- plugins end --}}


            <li class="nav-item menu-open">
                {{-- <a href="{{ route('account.setting', Auth::user()->id) }}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i><p>Account Settings</p></a> --}}
            </li>



            </ul>
        </nav>
    </div>
</aside>
