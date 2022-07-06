
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add cat</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
 #reg_btn{
    background-color: rgba(9, 34, 39, 0.877);
    border:none;
  }
  #reg_btn:hover{
background-color: rgba(168, 227, 238, 0.877);
color:black;
border:none;
  }
  label{
    font-weight: bolder;
  }
   </style>
</head>
<body>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<form action="{{url('Addcategories')}}" method="POST">
        @csrf 
       <div class="container mt-5 col-md-5" style="border: solid 5px  rgba(9, 34, 39, 0.877); border-radius: 20px;" >
       <br>
       <center> <h1 style="font-weight: bolder;">Add Category</h1></center> 
       <hr>

    <div class="container mt-5">
        <div class="form-group">
            <label>Category Name</label>
            <input type="text"  name="cname" class="form-control"  placeholder="Enter Name" >
            @error('cname')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-5">
        <button type="submit" id="reg_btn" class="btn btn-primary form-control">Add</button>
        <br>
        <br>
</div>
    </div>

</form>
</div>

<br>
<br>
  
</body>
</html>

