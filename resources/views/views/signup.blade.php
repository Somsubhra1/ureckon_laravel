<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ureckon 2019 | Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/Asset 14.png')}}" type="image/x-icon">
</head>
<body>

        <nav class="top-right open navbar__links">
                <a href="/about" class="disc l1">
                  <div>About Us</div>
                </a>
                <a href="/talks" class="disc l2">
                  <div>Talks</div>
                </a>
                <a href="/workshop" class="disc l3">
                  <div>Workshop</div>
                </a>
                <a href="/events" class="disc l4">
                  <div>Events</div>
                </a>
                <a class="disc l5 toggle">
                  Menu
                </a>
        </nav>

        <!-- <div class="back"></div>
        <form action="/user/register" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Password Again</label>
                <input type="password" class="form-control" name="password_confirmation" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Institute</label>
                <input type="text" class="form-control" name="institute" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Year</label>
                <input type="text" class="form-control" name="year" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Course</label>
                <input type="text" class="form-control" name="course" id="" aria-describedby="helpId" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

<div class="progress">
        <div class="bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div> -->


<div class="back"></div>
<div class="registration-form">
    <header>
        <h1>Sign Up</h1>
        <p>Fill in all informations</p>
    </header>
    <form action="/user/register" method="post" enctype="multipart/form-data">
    @csrf
        <div class="input-section name-section">
            <input class="name" type="text" placeholder="ENTER YOUR FIRST NAME HERE" autocomplete="off" name="name" id="" aria-describedby="helpId" />
            <div class="animated-button">
                <span class="icon-paper-plane">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <span class="next-button name">
                    <i class="fa fa-arrow-up"></i>
                </span>
            </div>
        </div>

        <div class="input-section institute-section folded">
                <input class="institute" type="text" placeholder="ENTER YOUR INSTITUTE HERE" autocomplete="off" name="institute" id="" aria-describedby="helpId"/>
                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    <span class="next-button institute">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
        </div>

        <div class="input-section course-section folded">
                <input class="course" type="text" placeholder="ENTER YOUR COURSE HERE" autocomplete="off" name="course" id="" aria-describedby="helpId" />
                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    <span class="next-button course">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
        </div>

        <div class="input-section year-section folded">
                <input class="year" type="text" placeholder="ENTER YOUR USERNAME" autocomplete="off" name="username" id="" aria-describedby="helpId"/>
                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    <span class="next-button year">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
        </div>

        <div class="input-section phone-section folded">
                <input class="phone" type="text" placeholder="ENTER YOUR PHONE NO. HERE" autocomplete="off" name="phone" id="" aria-describedby="helpId"/>
                <div class="animated-button">
                    <span class="icon-paper-plane">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    <span class="next-button phone">
                        <i class="fa fa-arrow-up"></i>
                    </span>
                </div>
            </div>

        <div class="input-section email-section folded">
            <input class="email" type="email" placeholder="ENTER YOUR E-MAIL HERE" autocomplete="off" name="email" id="" aria-describedby="helpId"/>
            <div class="animated-button">
                <span class="icon-paper-plane">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <span class="next-button email">
                    <i class="fa fa-arrow-up"></i>
                </span>
            </div>
        </div>

        <div class="input-section password-section folded">
            <input class="password" type="password" placeholder="ENTER YOUR PASSWORD HERE" name="password" id="" aria-describedby="helpId"/>
            <div class="animated-button">
                <span class="icon-lock">
                    <i class="fa fa-lock"></i>
                </span>
                <span class="next-button password">
                    <i class="fa fa-arrow-up"></i>
                </span>
            </div>
        </div>

        <div class="input-section repeat-password-section folded">
            <input class="repeat-password" type="password" placeholder="REPEAT YOUR PASSWORD HERE" name="password_confirmation" id="" aria-describedby="helpId"/>
            <div class="animated-button">
                <span class="icon-repeat-lock">
                    <i class="fa fa-lock"></i>
                </span>
                <button type="submit" class="btn btn-primary">
                    <span class="next-button repeat-password">
                        <i class="fa fa-paper-plane"></i>
                    </span>
                </button>
            </div>
        </div>

        <div class="success">
            <p>REGISTRATION COMPLETE</p>
        </div>
    </form>

    <div class="go__back-signup">
        <a href="/"><i class="fas fa-arrow-left"></i></a>
        <a class="go__back-right" href="/signin">Log In</a>
    </div>
</div>

<div class="progress">
        <div class="bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>




    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/signup.js')}}"></script>
    <script src="{{ asset('js/Modules/header.js')}}"></script>
</body>
</html>
