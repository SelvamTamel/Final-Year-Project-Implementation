<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/stdinfo.css') }}" rel="stylesheet">

    <title>CyberPersona -Student Personal Details Page</title>
</head>
<body>

	

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>CyberPersona -Student Personal Details Page</h1>
    </div>
</div>


    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                <div class="card mb-3">
                    <img src="{{ asset('assets/images/ComputerGrading4.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">How to use this web system?</h2>
                        <form action="#" method="#">
                            <div class="form-group">
                                <p>01. Create an account to use the cyber personality quiz.</p>
                            </div>
                            <div class="form-group">
                                <p>02. Go to the Cyber Personality Quiz page via the top navigation bar.</p>
                            </div>
                            <div class="form-group">
                                <p>03. Redirect User to the Student Personal Information Page.</p>
                            </div>
                            <div class="form-group">
                                <p>04. Navigate yourself to fill up details that require before start the cyber personality quiz.</p>
                            </div>
                            <div class="form-group">
                                <p>05. Submit the personal information form to nagivate yourself to the quiz page.</p>
                            </div>
                            <div class="form-group">
                                <p>06. After you have completed the student Personal Information Page, you can start doing the quiz.</p>
                            </div>
                            <div class="form-group">
                                <p>07. Start the cyber personality quiz by answering the 50 question list.</p>
                            </div>
                            <div class="form-group">
                                <p>08. After students have submitted their answers, go to the result page which display big five traits result based on cyber threats</p>
                            </div>
                            <div class="form-group">
                                <p>09. After the scoreing result has been display, go to the bottom of the page to view cyber threats relationships between big five traits.</p>
                            </div>
                            <div class="form-group">
                                <p>10. At the bottom of the page, you may go to the homepage.</p>
                            </div>
                        </form>
                            <a href="{{ url('home') }}">
                            <input type="submit" class="btn btn-info" value="Home">
                        </a> 
                    </div>
                </div>

            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    
                    <div class="card-body">
                        <h5 class="card-title">Fill Up the Personal information Below:</h5>
                        <form method="POST" action="keep">
                            @csrf
                            {{-- User Input For Student ID --}}
                            <div class="form-group">
                                <label>Student ID</label>
                                <input value="" name="studentid" type="number" class="form-control"  placeholder="Enter Your Student ID (EX:01XXXXX)">
                                {{-- Validate Require --}}
                                <span class="text-danger">@error('studentid'){{ $message }} @enderror</span>
                            </div>
                             {{-- User Input For Name --}}
                            <div class="form-group">
                                <label>Student Name</label>
                                <input value="" name="name" type="text" class="form-control"  placeholder="Enter the Full Name">
                                {{-- Validate Require --}}
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>
                             {{-- User Input For DOB --}}
                            <div class="form-group">
                                <label>Date of Birth (DOB)</label>
                                <input name="dateofbirth" type="date" class="form-control">
                                {{-- Validate Require --}}
                                <span class="text-danger">@error('dateofbirth'){{ $message }} @enderror</span>
                            </div>
                             {{-- User Input For Gender --}}
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" type="text" class="form-control"  placeholder="Enter the Gender">
                                    <option name="Male" type="text">Male</option>
                                    <option name="Female" type="text">Female</option>
                                    <option name="Rather Not Say" type="text">Rather Not Say</option>
                                    {{-- Validate Require --}}
                                    <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                                </select>
                            </div>
                             {{-- User Input For Nationality --}}
                            <div class="form-group">
                                <label>Nationality</label>
                                <input value="" name="nationality" type="text" class="form-control"  placeholder="Enter Student Nationality">
                                {{-- Validate Require --}}
                                <span class="text-danger">@error('nationality'){{ $message }} @enderror</span>
                            </div>
                             {{-- User Input For Education --}}
                            <div class="form-group">
                                <label>Education</label>
                                <select name="education" type="text" class="form-control"  placeholder="Enter the Education">
                                    <option name="STPM/ A-Level" type="text">STPM/ A-Level</option>
                                    <option name="Foundation Studies" type="text">Foundation Studies</option>
                                    <option name="Diploma" type="text">Diploma</option>
                                    <option name="Bachelor's Degree" type="text">Bachelor's Degree</option>
                                    <option name="IGCSE" type="text">IGCSE</option>
                                    <option name="Australian Matriculation" type="text">Australian Matriculation</option>
                                    <option name="Others" type="text">Others</option>
                                {{-- Validate Require --}}
                                <span class="text-danger">@error('education'){{ $message }} @enderror</span>
                            </select>
                            </div>
                            <a href="#" >
                            <input type="submit" class="btn btn-success" value="Take Quiz">
                        </a> 
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>