@extends('master')

@section('mainSection')
  <div class="col-9">
    <div class="card">
        <div class="card-header bg-primary text-light"><i class="fa fa-eye pr-2" style="font-size:25px;"></i>View Resume</div>
        <div class="card-body">
            <div class="row">
              <div class="col-6">
                <h3>Imran ahamed</h3>
                <tr><td>Address</td><td>: Nilphamari</td></tr><br>
                <tr><td>Phone No</td><td>: 01706764112</td></tr><br>
                <tr><td>Email</td><td>: imranahamed851999@gmail.com</td></tr>
              </div>
              <div class="col-3 offset-3">
                <img style="width:75%; height:140px;" src="{{asset('public/img/imran.png')}}" alt="Imran">
              </div>
            </div>
                
            <hr>

            <h5 class="bg-secondary py-2 pl-1 text-light">Career Objective:</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint dolor cumque magnam suscipit velit consectetur earum ipsa architecto assumenda obcaecati ex quis possimus doloribus odit laudantium, dolore ratione quos itaque!</p>
            <h5 class="bg-secondary py-2 pl-1 text-light">Career Summary:</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint dolor cumque magnam suscipit velit consectetur earum ipsa architecto assumenda obcaecati ex quis possimus doloribus odit laudantium, dolore ratione quos itaque!</p>
            <h5 class="bg-secondary py-2 pl-1 text-light">Special Qualification:</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint dolor cumque magnam suscipit velit consectetur earum ipsa architecto assumenda obcaecati ex quis possimus doloribus odit laudantium, dolore ratione quos itaque!</p>

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
                <tr>
                  <td>Diploma in Engineering</td>
                  <td>Computer Engineering</td>
                  <td>Thakurgaon polytechnic institute.</td>
                  <td>Appeared</td>
                  <td>2019</td>
                  <td>4 years</td>
                </tr>
              </tbody>
            </table>

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
                <tr>
                  <td>PHP Framework Laravel</td>
                  <td>Web</td>
                  <td>CSLiT</td>
                  <td>Bangladesh</td>
                  <td>Green Road, Panthapath Signal, Dhaka-1205</td>
                  <td>2019</td>
                  <td>3 month </td>
                </tr>
              </tbody>
            </table>

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
                  <td class="col-4"><i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>PHP(OOP) <br> <i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>Laravel Framework <br> <i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>Bootstrap <br> <i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>HTML & CSS <br> <i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>JavaScript <br> <i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>MySQL <br> <i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>AngularJS <br> <i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>REST API <br> <i class="fa fa fa-hand-o-right pr-1" style="font-size:18px;"></i>Ajax</td>
                  <td class="col-8">For the last 3 years, I have been working on the mentioned topics. Works on different projects have a good idea on these issues. Now we can do any project work with the mentioned topics.</td>
                </tr>
              </tbody>
            </table>

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
                <tr>
                  <td>Bangla</td>
                  <td>High</td>
                  <td>High</td>
                  <td>High</td>
                </tr>
              </tbody>
            </table>

            <h5 class="bg-secondary py-2 pl-1 text-light">Personal Details :</h5>
            <table class="small">
              <tr><td>Father's Name</td><td>:	Abdul Latif</td></tr>
              <tr><td>Mother's Name</td><td>:	Badrun Nahar Laky</td></tr>
              <tr><td>Date of Birth</td><td>:	May 8, 1999</td></tr>
              <tr><td>Gender</td><td>: Male</td></tr>
              <tr><td>Marital Status</td><td>: Unmarried</td></tr>
              <tr><td>Nationality</td><td>:	Bangladeshi</td></tr>
              <tr><td>Religion</td><td>: Islam</td></tr>
              <tr><td>Permanent Address</td><td>:	Boruya-gangber, Jadur-hat, 14-No Chapra union, Nilphamari Sadar, Nilphamari Sadar, Nilphamari 5300</td></tr>
              <tr><td>Current Location</td><td>: Dhaka</td></tr>
            </table>

            <h5 class="bg-secondary py-2 pl-1 text-light mt-2">Reference :</h5>
            <div class="col-12">
              <div class="row">
                <div class="col-6">
                  <table class="small">
                    <tr><td>Bablu Mazumber</td></tr>
                    <tr><td>Software Developer. </td></tr>
                    <tr><td>Spondonit </td></tr>
                    <tr><td>56/8 Panthapath, Dhanmondi (Near Square Hospital) Dhaka 1215 </td></tr>
                    <tr><td>+8801811843300 </td></tr>
                    <tr><td>bablupub@gmail.com  </td></tr>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection

