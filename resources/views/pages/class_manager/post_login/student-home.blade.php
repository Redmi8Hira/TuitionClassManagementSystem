{{-- students home page code here --}}

@extends('layouts.class_manager.post-login')


@section('dashboard-content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title flex-wrap">
                            <div class="input-group search-area mb-md-0 mb-3">
                                <input type="text" class="form-control" placeholder="Search here...">
                                <span class="input-group-text"><a href="javascript:void(0)">
                                    <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF"/>
                                    </svg>
                                </a></span>
                            </div>
                            <div>
                                <select class="image-select bs-select dashboard-select me-3" id="paymentFilter" aria-label="Payment Filter">
                                    <option value="all" selected>All Payments</option>
                                    <option value="online">Online Payments</option>
                                    <option value="manual">Manual Payments</option>
                                </select>

                                <select class="image-select bs-select dashboard-select me-3" aria-label="Default">
                                    <option selected>Newest</option>
                                    <option value="1">Oldest</option>
                                    <option value="2">Recent</option>
                                </select>
                                <!-- Button trigger modal -->
                                @can('create_student')
                                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                 + New Student
                                </button>
                                @endcan
                            </div>
                        </div>
                    </div>
                    {{-- colomn namne --}}
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="table-responsive full-data">
                            <table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer" id="example-student">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                        </th>
                                        <th>Name</th>
                                        <th>Student ID</th>
                                        <th>Register Date</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Payment</th>
                                        <th>Paid</th>
                                        <th class="text-end">More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        
                                    @foreach ($students as $student)  {{-- database eke variable eke data table ekata gannawa --}}
                      
                                    {{-- payemnt filter option --}}
                                    <tr class="payment-row" data-payment-type="{{ $student->payment_option }}">
                                        <!-- Your existing table columns -->

                                        {{-- check box --}}
                                        <td>
                                            <div class="checkbox me-0 align-self-center">
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="form-check-input" id="check8" required="">
                                                    <label class="custom-control-label" for="check8"></label>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- student picture --}}
                                        <td>
                                            <div class="trans-list">

                                                @if ($student->student_profile_photo !== null)
												<img src="{{ asset('student_profile_photos/' . $student->student_profile_photo) }}" alt="" class="avatar avatar-xl">
												@else
												<img src="{{ asset('images/user.jpg') }}" class="avatar avatar-xl">
												@endif


                                                {{--  <img src="../images/trans/1.jpg" alt="" class="avatar avatar-sm me-3">                                                 --}}
                                                <h4>
                                                    <a href="{{ route('dashboard.student.profile', ['student_id' => $student->student_id]) }}">
                                                    {{ $student->first_name }} {{ $student->last_name}}
                                                    </a>

                                                </h4>
                                            </div>
                                        </td>

                                        {{-- student id --}}
                                        <td><span class="text-primary font-w600"> {{ $student->student_id }}</span></td>

                                        {{-- register date --}}
                                        <td>
                                            <div class="date">{{ $student->created_at }}</div>
                                        </td>

                                        {{-- student email --}}
                                        <td><h6 class="mb-0"> {{ $student->email }}</h6></td>

                                        {{-- student contact number --}}
                                        <td><h6 class="mb-0"> {{ $student->contact_no }}</h6></td>
                                        
                                        {{-- Payment --}}
                                        <td>
                                            
                                                <div class="d-flex">
                                                    <!-- Paid Button -->
                                                    <button class="btn btn-success btn-sm me-2" onclick="updatePaymentStatus('paid')">Paid</button>
                                                    <!-- Not Paid Button -->
                                                    {{--  <button class="btn btn-danger btn-sm me-2" onclick="updatePaymentStatus('not_paid')">Not Paid</button>  --}}
                                                    <!-- Hold Button -->
                                                    <button class="btn btn-warning btn-sm" onclick="updatePaymentStatus('hold')">Hold</button>
                                                </div>
                                            
                                            
                                        </td>

                                        {{-- paid --}}
                                        <td>
                                            {{--  @if($row->payment_status === 'paid')
                                                <div class="badge bg-success">
                                                    Paid
                                                </div>
                                            @elseif($row->payment_status === 'not_paid')
                                                <div class="badge bg-danger">
                                                    Not Paid
                                                </div>
                                            @elseif($row->payment_status === 'hold')
                                                <div class="badge bg-warning">
                                                    Hold
                                                </div>
                                            @endif  --}}
                                        </td>

                                        {{--  more button  --}}
                                        <td>
                                            <div class="dropdown custom-dropdown float-end">
                                                <div class="btn sharp tp-btn " data-bs-toggle="dropdown">
                                                    <svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0012 0.359985C11.6543 0.359985 11.3109 0.428302 10.9904 0.561035C10.67 0.693767 10.3788 0.888317 10.1335 1.13358C9.88829 1.37883 9.69374 1.67 9.56101 1.99044C9.42828 2.31089 9.35996 2.65434 9.35996 3.00119C9.35996 3.34803 9.42828 3.69148 9.56101 4.01193C9.69374 4.33237 9.88829 4.62354 10.1335 4.8688C10.3788 5.11405 10.67 5.3086 10.9904 5.44134C11.3109 5.57407 11.6543 5.64239 12.0012 5.64239C12.7017 5.64223 13.3734 5.36381 13.8686 4.86837C14.3638 4.37294 14.6419 3.70108 14.6418 3.00059C14.6416 2.3001 14.3632 1.62836 13.8677 1.13315C13.3723 0.637942 12.7004 0.359826 12 0.359985H12.0012ZM3.60116 0.359985C3.25431 0.359985 2.91086 0.428302 2.59042 0.561035C2.26997 0.693767 1.97881 0.888317 1.73355 1.13358C1.48829 1.37883 1.29374 1.67 1.16101 1.99044C1.02828 2.31089 0.959961 2.65434 0.959961 3.00119C0.959961 3.34803 1.02828 3.69148 1.16101 4.01193C1.29374 4.33237 1.48829 4.62354 1.73355 4.8688C1.97881 5.11405 2.26997 5.3086 2.59042 5.44134C2.91086 5.57407 3.25431 5.64239 3.60116 5.64239C4.30165 5.64223 4.97339 5.36381 5.4686 4.86837C5.9638 4.37294 6.24192 3.70108 6.24176 3.00059C6.2416 2.3001 5.96318 1.62836 5.46775 1.13315C4.97231 0.637942 4.30045 0.359826 3.59996 0.359985H3.60116ZM20.4012 0.359985C20.0543 0.359985 19.7109 0.428302 19.3904 0.561035C19.07 0.693767 18.7788 0.888317 18.5336 1.13358C18.2883 1.37883 18.0937 1.67 17.961 1.99044C17.8283 2.31089 17.76 2.65434 17.76 3.00119C17.76 3.34803 17.8283 3.69148 17.961 4.01193C18.0937 4.33237 18.2883 4.62354 18.5336 4.8688C18.7788 5.11405 19.07 5.3086 19.3904 5.44134C19.7109 5.57407 20.0543 5.64239 20.4012 5.64239C21.1017 5.64223 21.7734 5.36381 22.2686 4.86837C22.7638 4.37294 23.0419 3.70108 23.0418 3.00059C23.0416 2.3001 22.7632 1.62836 22.2677 1.13315C21.7723 0.637942 21.1005 0.359826 20.4 0.359985H20.4012Z" fill="#A098AE"/>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    @can('show_student_profile')
                                                        <a class="dropdown-item" href="{{ route('dashboard.student.profile',['student_id' => $student->student_id]) }}">Profile</a>
                                                    @endcan	


                                                    @can('delete_student')
                                                        <a class="dropdown-item" href="{{ route('dashboard.student.remove',['student_id' => $student->student_id]) }}">Remove</a>
                                                    @endcan
                                                   
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/column-->
                </div>
            </div>
        </div>
        
    </div>
</div>




@endsection




@push('js')

{{-- payemnt option filer process --}}
<script>
    document.getElementById('paymentFilter').addEventListener('change', function() {
        var selectedValue = this.value;
        var paymentRows = document.querySelectorAll('.payment-row');

        paymentRows.forEach(function(row) {
            var rowPaymentType = row.getAttribute('data-payment-type');

            if (selectedValue === 'all' || rowPaymentType === selectedValue) {
                row.style.display = 'table-row';
            } else if (selectedValue === 'online' && rowPaymentType === 'online') {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });


</script>




@endpush