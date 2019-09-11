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

                <form action="{{url('personal-details')}}"  method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$per_det != '' ? $per_det->id : ''}}">
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" class="form-control" type="text" name="name" value="{{$per_det != '' ? $per_det->name : ''}}">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="f_name">Father's Name</label>
                        <input type="text" class="form-control" id="f_name" name="f_name" value="{{$per_det != '' ? $per_det->f_name : ''}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="m_name">Mother's Name</label>
                        <input type="text" class="form-control" id="m_name" name="m_name" value="{{$per_det != '' ? $per_det->m_name : ''}}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$per_det != '' ? $per_det->email : ''}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{$per_det != '' ? $per_det->phone : ''}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="p_address">Permanent Address</label>
                      <input type="text" class="form-control" id="p_address" name="p_address" value="{{$per_det != '' ? $per_det->p_address : ''}}">
                    </div>
                    <div class="form-group">
                      <label for="c_address">Current Address</label>
                      <input type="text" class="form-control" id="c_address" name="c_address" value="{{$per_det != '' ? $per_det->c_address : ''}}">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputState">Religion</label>
                        <select id="inputState" class="form-control" name="religion">
                          <option value="">--Select--</option>
                          <option value="Islam" {{$per_det != '' ? ($per_det->religion == 'Islam' ? 'selected' : '') : ''}}>Islam</option>
                          <option value="Hindu" {{$per_det != '' ? ($per_det->religion == 'Hindu' ? 'selected' : '') : ''}}>Hindu</option>
                          <option value="Christian" {{$per_det != '' ? ($per_det->religion == 'Christian' ? 'selected' : '') : ''}}>Christian</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Gender</label>
                        <select id="inputState" class="form-control" name="gender">
                          <option value="">--Select--</option>
                          <option value="Male" {{$per_det != '' ? ($per_det->gender == 'Male' ? 'selected' : '') : ''}}>Male</option>
                          <option value="Female" {{$per_det != '' ? ($per_det->gender == 'Female' ? 'selected' : '') : ''}}>Female</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Marital Status</label>
                        <select id="inputState" class="form-control" name="marital_status">
                          <option value="">--Select--</option>
                          <option value="Married" {{$per_det != '' ? ($per_det->marital_status == 'Married' ? 'selected' : '') : ''}}>Married</option>
                          <option value="Unmarried" {{$per_det != '' ? ($per_det->marital_status == 'Unmarried' ? 'selected' : '') : ''}}>Unmarried</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" value="{{$per_det != '' ? $per_det->nationality : ''}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="date_of">Date of Birth</label>
                        <input type="text" class="form-control" id="date_of" name="date_of" value="{{$per_det != '' ? $per_det->date_of : ''}}">
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
                  <!--Career Objective-->
                  <form method="POST" action="{{url('career-obj')}}" name="co" novalidate>
                    @csrf
                    <input type="hidden" name="id" value="{{$car_obj != '' ? $car_obj->id : ''}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="career_objective">Career Objective</label>
                      <textarea id="career_objective" class="form-control" name="career_obj" rows="3">{{$car_obj != '' ? $car_obj->career_obj : ''}}</textarea>
                    </div>
                    <button class="btn btn-primary mb-5" type="submit">Save</button>
                  </form>
                  <!--Career Sum-->
                  <form method="POST" action="{{url('career-sum')}}" name="cs" novalidate>
                    @csrf
                    <input type="hidden" name="id" value="{{$car_sum != '' ? $car_sum->id : ''}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="career_summary">Career Summary</label>
                      <textarea id="career_summary" class="form-control" name="career_sum" rows="3">{{$car_sum != '' ? $car_sum->career_sum : ''}}</textarea>
                    </div>
                    <button class="btn btn-primary mb-5" type="submit">Save</button>
                  </form>
                  <!--Special Qualification-->
                  </form>
                  <form method="POST" action="{{url('special-qua')}}" name="sq" novalidate>
                    @csrf
                    <input type="hidden" name="id" value="{{$spe_qul != '' ? $spe_qul->id : ''}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="special_qualification">Special Qualification</label>
                      <textarea id="special_qualification" class="form-control" name="special_qua" rows="3">{{$spe_qul != '' ? $spe_qul->special_qua : ''}}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
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
                    <table class="table table-bordered small">
                        <thead>
                          <tr>
                            <th scope="col">Exam Title</th>
                            <th scope="col">Concentration/Major</th>
                            <th scope="col">Institute</th>
                            <th scope="col">Result</th>
                            <th scope="col">Pas.Year</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($aca_quas as $aca_qua)
                            <tr>
                              <td>{{$aca_qua != '' ? $aca_qua->exam_title : ''}}</td>
                              <td>{{$aca_qua != '' ? $aca_qua->major : ''}}</td>
                              <td>{{$aca_qua != '' ? $aca_qua->institute : ''}}</td>
                              <td>{{$aca_qua != '' ? $aca_qua->result : ''}}</td>
                              <td>{{$aca_qua != '' ? $aca_qua->pas_year : ''}}</td>
                              <td>{{$aca_qua != '' ? $aca_qua->duration : ''}}</td>
                              <td><a class="text-danger" href="{{url('aca-del',$aca_qua->id)}}">X</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                  <form method="POST" action="{{url('academic-qua')}}" name="aq" novalidate>
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="exam_title">Exam Title</label>
                      <input id="exam_title" class="form-control" type="text" name="exam_title">
                    </div>
                    <div class="form-group">
                      <label for="major">Concentration/Major</label>
                      <input id="major" class="form-control" type="text" name="major">
                    </div>
                    <div class="form-group">
                      <label for="institute">Institute</label>
                      <input id="institute" class="form-control" type="text" name="institute">
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                          <label for="result">Result</label>
                          <input id="result" class="form-control" type="text" name="result">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="pas_year">Pas.Year</label>
                          <input id="pas_year" class="form-control" type="text" name="pas_year">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="duration">Duration</label>
                          <input id="duration" class="form-control" type="text" name="duration">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
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
                    <table class="table table-bordered small">
                        <thead>
                          <tr>
                            <th scope="col">Training Title</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Institute</th>
                            <th scope="col">Country</th>
                            <th scope="col">Location</th>
                            <th scope="col">Year</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tra_sums as $tra_sum)
                            <tr>
                              <td>{{$tra_sums != '' ? $tra_sum->title : ''}}</td>
                              <td>{{$tra_sums != '' ? $tra_sum->topic : ''}}</td>
                              <td>{{$tra_sums != '' ? $tra_sum->institute : ''}}</td>
                              <td>{{$tra_sums != '' ? $tra_sum->country : ''}}</td>
                              <td>{{$tra_sums != '' ? $tra_sum->location : ''}}</td>
                              <td>{{$tra_sums != '' ? $tra_sum->year : ''}}</td>
                              <td>{{$tra_sums != '' ? $tra_sum->duration : ''}}</td>
                              <td><a class="text-danger" href="{{url('tra_del',$tra_sum->id)}}">X</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                <form method="POST" action="{{url('training-sum')}}" name="ts" novalidate>
                  @csrf
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="training_title">Training Title</label>
                      <input id="training_title" class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                      <label for="topic">Topic</label>
                      <input id="topic" class="form-control" type="text" name="topic">
                    </div>
                    <div class="form-group">
                      <label for="institute">Institute</label>
                      <input id="institute" class="form-control" type="text" name="institute">
                    </div>
                    <div class="form-group">
                      <label for="location">Location</label>
                      <input id="location" class="form-control" type="text" name="location">
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                          <label for="country">Country</label>
                          <input id="country" class="form-control" type="text" name="country">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="year">Year</label>
                          <input id="year" class="form-control" type="text" name="year">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="duration">Duration</label>
                          <input id="duration" class="form-control" type="text" name="duration">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
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
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <table class="small">
                      <tbody>
                        @foreach ($specials as $special)
                        <tr>
                          <td>{{$special->specialization}}</td><td><a class="btn text-danger" href="{{url('del_spe',$special->id)}}">X</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                    <div class="form-group">
                      <label for="specialization">Fields of Specialization</label>
                      <input id="specialization" class="form-control" type="text" name="specialization" ng-model="specialization" ng-required="true">
                    </div>
                    <button class="btn btn-primary mb-5" type="submit" ng-disabled="fs.$invalid">Save</button>
                  </form>

                  <!--Description-->
                  <form method="POST" action="{{url('description')}}" name="desc" novalidate>
                    @csrf
                    <input type="hidden" name="id" value="{{$description != '' ? $description->id : ''}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea id="description" class="form-control" name="description">{{$description != '' ? $description->description : ''}}</textarea>
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

                  @if ($languages != "")
                    <table class="table table-bordered small">
                      <thead>
                        <tr>
                          <th scope="col">Language</th>
                          <th scope="col">Reading</th>
                          <th scope="col">Writing</th>
                          <th scope="col">Speaking</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($languages as $language)
                          <tr>
                            <td>{{$language != '' ? $language->language : ''}}</td>
                            <td>{{$language != '' ? $language->reading : ''}}</td>
                            <td>{{$language != '' ? $language->writing : ''}}</td>
                            <td>{{$language != '' ? $language->speaking : ''}}</td>
                            <td><a class="text-danger" href="{{url('lang_del',$language->id)}}">X</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @endif

                  <form method="POST" action="{{url('language')}}" name="language_pro" novalidate>
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="language">Language</label>
                      <input id="language" class="form-control" type="text" name="language" ng-model="language" ng-required="true">
                    </div>
                    <div class="form-group">
                      <label for="reading">Reading</label>
                      <select id="inputState" class="form-control" name="reading">
                        <option value="">--Select--</option>
                          <option value="Low">Low</option>
                          <option value="Medium">Medium</option>
                          <option value="High">High</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="writing">Writing</label>
                      <select id="inputState" class="form-control" name="writing">
                        <option value="">--Select--</option>
                          <option value="Low">Low</option>
                          <option value="Medium">Medium</option>
                          <option value="High">High</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="speaking">Speaking</label>
                      <select id="inputState" class="form-control" name="speaking">
                          <option value="">--Select--</option>
                          <option value="Low">Low</option>
                          <option value="Medium">Medium</option>
                          <option value="High">High</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
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
                    @csrf
                    <input type="hidden" name="id" value="{{$reference != '' ? $reference->id : ''}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" class="form-control" type="text" name="name" value="{{$reference != '' ? $reference->name : ''}}">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$reference != '' ? $reference->email : ''}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{$reference != '' ? $reference->phone : ''}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" value="{{$reference != '' ? $reference->address : ''}}">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="organization">Organization</label>
                        <input type="text" class="form-control" id="organization" name="organization" value="{{$reference != '' ? $reference->organization : ''}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" value="{{$reference != '' ? $reference->designation : ''}}">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection