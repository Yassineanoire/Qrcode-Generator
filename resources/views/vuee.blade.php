<<<<<<< HEAD
<html style="background:linear-gradient(150deg, #c8bebe98, 5%, #74b9de8e, 50%, #5e62cc9f);">

<div style="display:flex; margin-top:100px;padding-left:60px ;">


<img  src="images/lala.svg" alt="" srcset="">

<h1 style="margin-left:680px;margin-top:120px;font-size:200px">{{$data->scan_count}}</h1>
</div>
</html>

{{-- <h1>{{$hh}}</h1> --}}
=======
{{QrCode::size('300')->gradient(255,0,0,0,0,255,'vertical')->generate("http://127.0.0.1:8000/admin")}}
>>>>>>> 1d19bc00479be9365adf9fd9dae2a08bb8b94c04
