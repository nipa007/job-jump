
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
