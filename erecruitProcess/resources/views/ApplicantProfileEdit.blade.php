<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/edit" method="post" enctype="multipart/form-data">
        @csrf
       {{-- @method('PUT')--}}
        <div>
            <input type="hidden" name="id" value="{{$data->id}}" >
        </div>
        <div>
            <input type="name" name="name" value="{{$data->applicantname}}" >
        </div>
        <div>
        <input type="name" name="email" value="{{$data->applicantemail}}" >
        </div>
        <div>
            <input type="name" name="phone" value="{{$data->applicantMoblie}}" >
            </div>
        <div>
            <input type="hidden" name="password" value="{{$data->applicantPassword}}" >
        </div>
        <div>
            <input type="name" name="preaddress" value="{{$data->applicantPreAddress}}" >
        </div>
        <div>
            <input type="name" name="paraddress" value="{{$data->applicantParAddress}}" >
        </div>
        <div>
            <input type="file" name="image" ><img src="{{asset('public/Image/'.$data->ProfilePicture->profileImage)}}" weight="70px" height="70px" alt="image">
        </div>
        
        
        
        <div>
            <input type="submit" value="update data" >
        </div>
    </form>
</body>
</html>





