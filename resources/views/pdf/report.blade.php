<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1 style="text-align:center;">Nepal Rastra Bank</h1>
  <h1 style="text-align:center;">Information and Technology Department</h1>
  <h1 style="text-align:center;">IT Incidence Report</h1>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align: left;
      line-height: 16px;
    }
  </style>
  <p style="text-align:right;">Incident Report No: {{$incident['incident_report_no']}}</p>
  
  <table style="width:100%">
    <tr>
      <th colspan="2">Incidence Description</th>
    </tr>

    <tr>
      <td>Type </td>
      <td>{{$incident['type']}}</td>
    </tr>

    <tr>
      <td>Location </td>
      <td>{{$incident['location']}}</td>
    </tr>

    <tr>
      <td>Occured Date/Time </td>
      <td>{{$incident['incident_date_detected']}}</td>
    </tr>

    <tr>
      <td>Reported Date/Time</td>
      <td>{{$incident['incident_date_reported']}}</td>
    </tr>

    <tr>
      <td>Description </td>
      <td>{{$incident['description']}}</td>
    </tr>

    <tr>
      <td>Initial Response </td>
      <td>{{$incident['initial_response']}}</td>
    </tr>
  </table>
  <br>
  <table style="width:100%">
    <tr>
      <th colspan="2">Incidence Reported By</th>
    </tr>
    <tr>
      <td>Name </td>
      <td>{{$incident['incidence_reported_by_name']}}</td>
    </tr>

    <tr>
      <td>Contact </td>
      <td>{{$incident['incidence_reported_from_contact']}}</td>
    </tr>

    <tr>
      <td>Email </td>
      <td>{{$incident['incidence_reported_from_email']}}</td>
    </tr>
  </table>

  <br>


  <body>

    <table style="width:100%">
      <tr>
        <th colspan="3">Informed To</th>

      </tr>
      <tr>
        <td>Name</td>
        <td>Designation</td>
        <td>Deapartment/Division</td>
      </tr>
      <tbody>
        @foreach ($incident['inform'] as $inform)

        <tr>
          <td>{{ $inform['members_name'] }}</td>
          <td>{{ $inform['members_designation'] }}</td>
          <td>{{ $inform['members_unit'] }}</td>

        </tr>
        @endforeach
      </tbody>


    </table>
    <br>

    <table style="width:100%">
      <tr>
        <th colspan="4">Incidence Response Team</th>

      </tr>

      <tr>
        <td>Emp.Code</td>
        <td>Name</td>
        <td>Department</td>
        <td>Unit</td>

      </tr>
      <tbody>
        @foreach ($incident['response'] as $inform)

        <tr>
          <td>{{ $inform['members_code'] }}</td>
          <td>{{ $inform['members_name'] }}</td>
          <td>{{ $inform['members_designation'] }}</td>
          <td>{{ $inform['members_unit'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  <br>

    <table style="width:100%">
      <tr>
        <th colspan="2" text-align: left>Impact</th>
      </tr>
      <tr>
        <td>Area</td>
        <td>{{$incident['impact']}}</td>
      </tr>
    </table>
    <br>

    <table style="width:100%">
      <tr>
        <th colspan="4">Members Involved</th>
      </tr>
      <tr>
        <td>Name</td>
        <td>Designation</td>
        <td>Department/Division</td>
        <td>Unit</td>
      </tr>
      <tbody>
        @foreach ($incident['members'] as $inform)
        <tr>
          <td>{{ $inform['members_code'] }}</td>
          <td>{{ $inform['members_name'] }}</td>
          <td>{{ $inform['members_designation'] }}</td>
          <td>{{ $inform['members_unit'] }}</td>
        </tr>
        @endforeach
  </tbody>
    </table>
    <br>

    <table style="width:100%">
      <tr>
        <th colspan="1" text-align: left>Findings</th>

      </tr>
      <tr>
        <td style="height:50px">{{$incident['finding']}}</td>
      </tr>
    </table>
    <br>

    <table style="width:100%">
      <tr>
        <th colspan="1" text-align: left>Action Taken</th>

      </tr>
      <tr>
        <td style="height:50px">{{$incident['action']}}</td>
      </tr>
    </table>
    <br>
    <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align: left;
      line-height: 16px;
    }
  </style>
    <table style="width:100%">
    <tr>
      <th colspan="2">Incidence Status</th>
    </tr>
    <tr>
      <td>Status </td>
      <td>{{$incident['status']}}</td>
    </tr>
    
  </table>

    <br>
    <table style="width:100%">
      <tr>
        <th colspan="4" text-align: left>Reported By</th>

      </tr>
      <tr>
        <td style="height:100px"></td>
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
    </table>
  </br>

    <table style="width:30%">
      <tr>
        <th >Reported To</th>

      </tr>
      <tr>
        <td style="height:100px"></td>
      </tr>
    </table>





  </body>

</html>