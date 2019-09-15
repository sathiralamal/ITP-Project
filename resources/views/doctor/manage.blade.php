@extends('main.layout.adminlayout');
@section('title', 'Doctor List')

@section('content')
<div class="container">
<div >
   <form>
        <input placeholder="Name, NIC or License" />
        <button type="submit"> Search </button>
   </form>
</div>
 @if(isset($doctors))
    <table class="table  .table-striped ">
    <thead>
        <tr>
            <th> Name </th>
            <th> NIC/License </th>
            <th> Appointments </th>
            <th> Schedule </th>
            <th> Details </th>
        </tr>
     </thead>
    <tbody>
        @foreach($doctors as $d )
        <tr>
            <td> {{$d['fullname']}} </td>
            <td> {{$d['nic']}} </td>
            <td> 
            <!-- redirect the user to the scheduling page for doctors of the schedule controller -->
                <form method="post" action="/manage/schedule/doctor/{{$d['docotor_id']}}/">
                @method('GET')
                    <button type="submit" class="btn btn-primary" style= "background-color: green">Schedule</button>                       
                </form>
            </td>
            <td>
            <!--redirect the user to the appointment mangement page of the appointment controller -->
                <form method="post" action="/manage/appointments/doctor/{{$d['doctor_id']}}">                    
                @method('GET')
                    <button type="submit" class="btn btn-primary" style= "background-color: blue">Appointments</button>
                </form>
            </td>
            <td>
            <!-- redirects the user to the doctor details page of a doctor -->
                <form method="post" action="/manage/doctors/{{ $d['doctor_id'] }}">
                @method('GET')
                     <button type="submit" class="btn btn-primary" style= "background-color: orange">Details</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
@else
    <!--Redirect this page to an appropiate error message -->
    An error ocurred.
@endif
</div>