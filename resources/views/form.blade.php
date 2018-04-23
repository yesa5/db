<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{asset("css/style.css")}}>
    <style>
        #centered{
            margin-left: 32%;
        }
        #check{
            margin-right:90%;
        }
        #check2{
            margin-right:89%;
        }
        #submit{
            width: 15%;
            background-color: #e5d5b3;
            font-family: 'Cormorant Garamond', serif;
            color: #00163a;
            border: 1px solid #00163a;
            font-size: 16pt;
            font-weight: 600;
            padding: 12px;
        }
    </style>
</head>
<body>
<div>
    <div class="col-xs-1 center-block">
        <div class="form-area">
            <form method="POST" action="{{route('processAddEmp')}}">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Add employee</h3>
                <div id="centered">
                    <input type="text" class="form-control mb-1 w-50" name="name" placeholder="Name" required>
                    <input type="text" class="form-control mb-1 w-50" name="surname" placeholder="Surname" required>
                    <input type="text" class="form-control mb-1 w-50" name="job" placeholder="Job" required>
                </div>
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>