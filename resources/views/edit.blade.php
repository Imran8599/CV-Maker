@extends('master')

@section('mainSection')
  <div class="col-9" ng-app="">
    @if(Session::has('success'))
      <div class="alert alert-success pb-0 alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        <p>{{Session::get('success')}}</p>
      </div>
    @elseif(Session::has('danger'))
      <div class="alert alert-danger pb-0 alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        <p>{{Session::get('danger')}}</p>
      </div>
    @endif
    <div class="card">
        <div class="card-header bg-primary text-light"><i class="fa fa-pencil pr-2" style="font-size:20px;"></i>Edit Resume</div>
        <div class="card-body">
          <div class="accordion" id="accordionExample">
            <!-- Personal Details -->
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h4>Personal Details<i class="fa fa-chevron-down pr-2 pl-2" style="font-size:20px;"></i></h4>
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">

                <form action="{{url('personal-details')}}"  method="POST" name="pd" novalidate>
                  @csrf
                  <input type="hidden" name="id" value="{{$user->id}}">
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" class="form-control" type="text" name="name" value="{{$user->name}}" ng-model="name" ng-required="true">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="f_name">Father's Name</label>
                        <input type="text" class="form-control" id="f_name" name="f_name" value="{{$user->f_name}}" ng-model="f_name" ng-required="true">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="m_name">Mother's Name</label>
                        <input type="text" class="form-control" id="m_name" name="m_name" value="{{$user->m_name}}" ng-model="m_name" ng-required="true">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{$user->email}}" ng-model="email" ng-required="true">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone"  value="{{$user->phone}}" ng-model="phone" ng-required="true">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="p_address">Permanent Address</label>
                      <input type="text" class="form-control" id="p_address" name="p_address"  value="{{$user->p_address}}" ng-model="p_address" ng-required="true">
                    </div>
                    <div class="form-group">
                      <label for="c_address">Current Address</label>
                      <input type="text" class="form-control" id="c_address" name="c_address"  value="{{$user->c_address}}" ng-model="c_address" ng-required="true">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputState">Religion</label>
                        <select id="inputState" class="form-control" name="religion" ng-name="religion" ng-model="religion" ng-required="true">
                          <option value="Islam" {{$user->religion == "Islam" ? 'selected':''}}>Islam</option>
                          <option value="Hindu" {{$user->religion == "Hindu" ? 'selected':''}}>Hindu</option>
                          <option value="Christian" {{$user->religion == "Christian" ? 'selected':''}}>Christian</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Gender</label>
                        <select id="inputState" class="form-control" name="gender" ng-name="gender" ng-model="gender" ng-required="true">
                          <option value="Male" {{$user->gender == "Male" ? 'selected':''}}>Male</option>
                          <option value="Female" {{$user->gender == "Female" ? 'selected':''}}>Female</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Marital Status</label>
                        <select id="inputState" class="form-control" name="marital_status" ng-name="marital_status" ng-model="marital_status" ng-required="true">
                          <option value="Married" {{$user->marital_status == "Married" ? 'selected':''}}>Married</option>
                          <option value="Unmarried" {{$user->marital_status == "Unmarried" ? 'selected':''}}>Unmarried</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality"  value="{{$user->nationality}}" ng-model="nationality" ng-required="true">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="date_of">Date of Birth</label>
                        <input type="text" class="form-control" id="date_of" name="date_of"  value="{{$user->date_of}}" ng-model="date_of" ng-required="true">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" ng-disabled="pd.$invalid">Save</button>
                  </form>
                </div>
              </div>
            </div>

            <!-- Other Information -->          
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h4>Other Information<i class="fa fa-chevron-down pr-2 pl-2" style="font-size:20px;"></i></h4>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <form method="POST" action="{{url('career-obj')}}" name="co" novalidate>
                    @csrf
                    <div class="form-group">
                      <label for="career_objective">Career Objective</label>
                      <textarea id="career_objective" class="form-control" name="career_obj" rows="3" placeholder="Career Objective" ng-model="career_obj" ng-required="true"></textarea>
                    </div>
                    <button class="btn btn-primary mb-5" type="submit" ng-disabled="co.$invalid">Save</button>
                  </form>
                  
                  <form method="POST" action="{{url('career-sum')}}" name="cs" novalidate>
                    @csrf
                    <div class="form-group">
                      <label for="career_summary">Career Summary</label>
                      <textarea id="career_summary" class="form-control" name="career_sum" rows="3" placeholder="Career Summary" ng-model="career_summary" ng-required="true"></textarea>
                    </div>
                    <button class="btn btn-primary mb-5" type="submit" ng-disabled="cs.$invalid">Save</button>
                  </form>

                  </form>
                  <form method="POST" action="{{url('special-qua')}}" name="sq" novalidate>
                    @csrf
                    <div class="form-group">
                      <label for="special_qualification">Special Qualification</label>
                      <textarea id="special_qualification" class="form-control" name="special_qua" rows="3" placeholder="Special Qualification" ng-model="special_qualification" ng-required="true"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" ng-disabled="sq.$invalid">Save</button>
                  </form>
                </div>
              </div>
            </div>





            <!-- Academic Qualification -->
            <div class="card">
              <div class="card-header" id="headingfive">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                    <h4>Academic Qualification<i class="fa fa-chevron-down pr-2 pl-2" style="font-size:20px;"></i></h4>
                  </button>
                </h2>
              </div>
              <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                <div class="card-body">
                  <form method="POST" action="{{url('academic-qua')}}" name="aq" novalidate>
                    @csrf
                    <div class="form-group">
                      <label for="exam_title">Exam Title</label>
                      <input id="exam_title" class="form-control" type="text" name="exam_title"  ng-model="exam_title" ng-required="true">
                    </div>
                    <div class="form-group">
                      <label for="major">Concentration/Major</label>
                      <input id="major" class="form-control" type="text" name="major" ng-model="major" ng-required="true">
                    </div>
                    <div class="form-group">
                      <label for="institute">Institute</label>
                      <input id="institute" class="form-control" type="text" name="institute" ng-model="institute" ng-required="true">
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                          <label for="result">Result</label>
                          <input id="result" class="form-control" type="text" name="result" ng-model="result" ng-required="true">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="pas_year">Pas.Year</label>
                          <input id="pas_year" class="form-control" type="text" name="pas_year" ng-model="pas_year" ng-required="true">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="duration">Duration</label>
                          <input id="duration" class="form-control" type="text" name="duration" ng-model="duration" ng-required="true">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" ng-disabled="aq.$invalid">Save</button>
                  </form>
                </div>
              </div>
            </div>




            <!-- Training Summary -->
            <div class="card">
              <div class="card-header" id="headingsix">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                    <h4>Training Summary<i class="fa fa-chevron-down pr-2 pl-2" style="font-size:20px;"></i></h4>
                  </button>
                </h2>
              </div>
              <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                <div class="card-body">
                <form method="POST" action="{{url('training-sum')}}" name="ts" novalidate>
                  @csrf
                    <div class="form-group">
                      <label for="training_title">Training Title</label>
                      <input id="training_title" class="form-control" type="text" name="title" ng-model="title" ng-required="true">
                    </div>
                    <div class="form-group">
                      <label for="topic">Topic</label>
                      <input id="topic" class="form-control" type="text" name="topic" ng-model="topic" ng-required="true">
                    </div>
                    <div class="form-group">
                      <label for="institute">Institute</label>
                      <input id="institute" class="form-control" type="text" name="institute" ng-model="institute" ng-required="true">
                    </div>
                    <div class="form-group">
                      <label for="location">Location</label>
                      <input id="location" class="form-control" type="text" name="location" ng-model="location" ng-required="true">
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                          <label for="country">Country</label>
                          <input id="country" class="form-control" type="text" name="country" ng-model="country" ng-required="true">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="year">Year</label>
                          <input id="year" class="form-control" type="text" name="year" ng-model="year" ng-required="true">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="duration">Duration</label>
                          <input id="duration" class="form-control" type="text" name="duration" ng-model="duration" ng-required="true">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" ng-disabled="ts.$invalid">Save</button>
                  </form>
                </div>
              </div>
            </div>




            <!-- Specialization -->
            <div class="card">
              <div class="card-header" id="headingseven">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                    <h4>Specialization<i class="fa fa-chevron-down pr-2 pl-2" style="font-size:20px;"></i></h4>
                  </button>
                </h2>
              </div>
              <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                <div class="card-body">
                  <form method="POST" action="{{url('specialization')}}" name="fs" novalidate>
                    @csrf
                    <div class="form-group">
                      <label for="specialization">Fields of Specialization</label>
                      <input id="specialization" class="form-control" type="text" name="specialization" ng-model="specialization" ng-required="true">
                    </div>
                    <button class="btn btn-primary mb-5" type="submit" ng-disabled="fs.$invalid">Save</button>
                  </form>
                  <form method="POST" action="" id="description" name="desc" novalidate>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea id="description" class="form-control" name="description" ng-model="description" ng-required="true" rows="3" placeholder="Description"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" ng-disabled="desc.$invalid">Save</button>
                  </form>
                </div>
              </div>
            </div>



            <!-- Language Proficiency -->
            <div class="card">
              <div class="card-header" id="headingfour">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    <h4>Language Proficiency<i class="fa fa-chevron-down pr-2 pl-2" style="font-size:20px;"></i></h4>
                  </button>
                </h2>
              </div>
              <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                <div class="card-body">
                  <form method="POST" action="{{url('language')}}" name="language_pro" novalidate>
                    <div class="form-group">
                      <label for="language">Language</label>
                      <input id="language" class="form-control" type="text" name="language" ng-model="language" ng-required="true">
                    </div>
                    <div class="form-group">
                      <label for="reading">Reading</label>
                      <select id="inputState" class="form-control" name="reading" ng-model="reading" ng-required="true">
                          <option value="Low">Low</option>
                          <option value="Medium">Medium</option>
                          <option value="High">High</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="writing">Writing</label>
                      <select id="inputState" class="form-control" name="writing" ng-model="writing" ng-required="true">
                          <option value="Low">Low</option>
                          <option value="Medium">Medium</option>
                          <option value="High">High</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="speaking">Speaking</label>
                      <select id="inputState" class="form-control" name="speaking" ng-model="speaking" ng-required="true">
                          <option value="Low">Low</option>
                          <option value="Medium">Medium</option>
                          <option value="High">High</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit" ng-disabled="language_pro.$invalid">Save</button>
                  </form>
                </div>
              </div>
            </div>




            <!-- Reference -->
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h4>Reference<i class="fa fa-chevron-down pr-2 pl-2" style="font-size:20px;"></i></h4>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <form method="POST" action="{{url('reference')}}" name="reference" novalidate>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" class="form-control" type="text" name="name" placeholder="Name" ng-model="name" ng-required="true">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" ng-model="email" ng-required="true">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" ng-model="phone" ng-required="true">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Address" ng-model="address" ng-required="true">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="organization">Organization</label>
                        <input type="text" class="form-control" id="organization" name="organization" placeholder="Organization" ng-model="organization" ng-required="true">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" ng-model="designation" ng-required="true">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" ng-disabled="reference.$invalid">Save</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection