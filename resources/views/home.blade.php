@extends('master')

@section('mainSection')
  <div class="col-9">
    <div class="card">
        <div class="card-header bg-primary text-light"><i class="fa fa-eye pr-2" style="font-size:25px;"></i>View Resume</div>
        <div class="card-body">
          @if ($per_det != "")
            <div class="row">
              <div class="col-6">
                <h3>{{$per_det->name}}</h3>
                <tr><td><strong>Address</strong>: {{$per_det->c_address}}</td></tr><br>
                <tr><td><strong>Phone</strong>: {{$per_det->phone}}</td></tr><br>
                <tr><td><strong>Email</strong>: {{$per_det->email}}</td></tr>
              </div>
              <div class="col-3 offset-3">
                <img style="width:75%; height:140px;" src="{{asset('public/img/imran.png')}}" alt="Imran">
              </div>
            </div>
                
            <hr>
          @endif

          @if ($car_obj != "")
            <h5 class="bg-secondary py-2 pl-1 text-light">Career Objective:</h5>
            <p>{{$car_obj->career_obj}}</p>
          @endif

          @if ($car_sum != "")
            <h5 class="bg-secondary py-2 pl-1 text-light">Career Summary:</h5>
            <p>{{$car_sum->career_sum}}</p>
          @endif

          @if ($spe_qul != "")
            <h5 class="bg-secondary py-2 pl-1 text-light">Special Qualification:</h5>
            <p>{{$spe_qul->special_qua}}</p>
          @endif

          @if ($aca_quas != "")
            <h5 class="bg-secondary py-2 pl-1 text-light">Academic Qualification:</h5>
            <table class="table table-bordered small">
              <thead>
                <tr>
                  <th scope="col">Exam Title</th>
                  <th scope="col">Concentration/Major</th>
                  <th scope="col">Institute</th>
                  <th scope="col">Result</th>
                  <th scope="col">Pas.Year</th>
                  <th scope="col">Duration</th>
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
                  </tr>
                @endforeach
              </tbody>
            </table>
          @endif  
            
          @if ($tra_sums != '')
            <h5 class="bg-secondary py-2 pl-1 text-light">Training Summary:</h5>
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
                </tr>
              </thead>
              <tbody>
                @foreach ($tra_sums as $tra_sum)
                <tr>
                  <td>{{$tra_sum != '' ? $tra_sum->title : ''}}</td>
                  <td>{{$tra_sum != '' ? $tra_sum->topic : ''}}</td>
                  <td>{{$tra_sum != '' ? $tra_sum->institute : ''}}</td>
                  <td>{{$tra_sum != '' ? $tra_sum->country : ''}}</td>
                  <td>{{$tra_sum != '' ? $tra_sum->location : ''}}</td>
                  <td>{{$tra_sum != '' ? $tra_sum->year : ''}}</td>
                  <td>{{$tra_sum != '' ? $tra_sum->duration : ''}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          @endif
            
          @if ($specials != '')
            <h5 class="bg-secondary py-2 pl-1 text-light mt-2">Specialization:</h5>
            <table class="table table-bordered small">
              <thead>
                <tr>
                  <th scope="col">Fields of Specialization</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="col-4">
                    @foreach ($specials as $special)<i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>{{$specials != "" ? $special->specialization : ""}} <br>
                    @endforeach
                  </td>
                  <td class="col-8">{{$description != "" ? $description->description : ""}}</td>
                </tr>
              </tbody>
            </table>
          @endif


          @if ($languages != "")
            <h5 class="bg-secondary py-2 pl-1 text-light">Language Proficiency:</h5>
            <table class="table table-bordered small">
              <thead>
                <tr>
                  <th scope="col">Language</th>
                  <th scope="col">Reading</th>
                  <th scope="col">Writing</th>
                  <th scope="col">Speaking</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($languages as $language)
                <tr>
                  <td>{{$languages != '' ? $language->language : ""}}</td>
                  <td>{{$languages != '' ? $language->reading : ""}}</td>
                  <td>{{$languages != '' ? $language->writing : ""}}</td>
                  <td>{{$languages != '' ? $language->speaking : ""}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          @endif

          @if ($per_det != "")
            <h5 class="bg-secondary py-2 pl-1 text-light">Personal Details :</h5>
            <table class="small">
              <tr><th>Father's Name</th><td>:	{{$per_det != "" ? $per_det->f_name : ""}}</td></tr>
              <tr><th>Mother's Name</th><td>:	{{$per_det != "" ? $per_det->m_name : ""}}</td></tr>
              <tr><th>Date of Birth</th><td>:	{{$per_det != "" ? $per_det->date_of : ""}}</td></tr>
              <tr><th>Gender</th><td>: {{$per_det != "" ? $per_det->gender : ""}}</td></tr>
              <tr><th>Marital Status</th><td>: {{$per_det != "" ? $per_det->marital_status : ""}}</td></tr>
              <tr><th>Nationality</th><td>:	{{$per_det != "" ? $per_det->nationality : ""}}</td></tr>
              <tr><th>Religion</th><td>: {{$per_det != "" ? $per_det->religion : ""}}</td></tr>
              <tr><th>Permanent Address</th><td>:	{{$per_det != "" ? $per_det->p_address : ""}}</td></tr>
            </table>
          @endif
            
          @if ($reference != "")
            <h5 class="bg-secondary py-2 pl-1 text-light mt-2">Reference :</h5>
            <table class="small">
              <tr><th>Name</th><td>: {{$reference != "" ? $reference->name : ""}}</td></tr>
              <tr><th>Designation</th><td>: {{$reference != "" ? $reference->designation : ""}}</td></tr>
              <tr><th>Organization</th><td>: {{$reference != "" ? $reference->organization : ""}}</td></tr>
              <tr><th>Email</th><td>: {{$reference != "" ? $reference->email : ""}}</td></tr>
              <tr><th>Phone</th><td>: {{$reference != "" ? $reference->phone : ""}}</td></tr>
              <tr><th>Address</th><td>: {{$reference != "" ? $reference->address : ""}}</td></tr>
            </table>
          @endif
            
        </div>
    </div>
  </div>
@endsection

