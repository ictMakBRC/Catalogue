
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Resullt Doc</title>
<style>
  body{margin:0;font-family:Nunito,sans-serif;font-size:.5rem;font-weight:400;line-height:1.5;color:#000000;background-color:#ffffff;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}
  hr{margin:1rem 0;color:inherit;background-color:currentColor;border:0;opacity:.25}
  hr:not([size]){height:1px}
      .text_centered {
        position: absolute;
        top: 56%;
        left: 6%;
        /* transform: translate(-50%, -50%); */
        color: red
        }
        table {
  border-collapse: collapse;
}


.btop{
    border: 0.4px solid rgb(133, 130, 130);
    border-top:1px solid #DDDDDD 1.0pt;mso-border-top-alt:
  solid #DDDDDD .75pt;mso-border-top-alt:
  solid #DDDDDD .75pt;mso-border-bottom-alt:
  solid #DDDDDD .75pt;
  padding: 1px;
  border-block-start-style: outset;
}
</style>
</head>

<body style="line-height:1.2; font-family:times;">
    <div class="row" style="line-height:0.9">
          <h2 style="text-align:center; font-family:times;"><img src="{{asset('assets/images/mbrc.jpg')}}" alt="Makerere University Logo" width="100%" style="vertical-align:middle;" onerror="this.onerror=null;this.src='{{asset('images/photos/20220130105722.jpg')}}';"></h2>
          
          <hr style="height:1px; width:100%; color:#6C757D;">
          <h6 style="text-align:center; font-family:times; color:red"><b>REQUEST DETAILS</b></h6>
    </div>
    <div  style="font-size:16px; margin-top:0px;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  
        <tr>        
            <td style="width:70%">
                    <b>Name: </b><font> {{$user->name}}</font><br>
                    <b>Position: </b>{{$user->position}} <br>
                    <b>Organization:</b> {{$user->organization}} <br>
                    <b>Contact:</b> {{$user->phone}} <br>
                     <b>Email:</b> {{$user->email}} <br>
                    <b>Country:</b> {{$user->country}} <br>
            </td>
            <td style="width:5%"></td>
       
            <td style="width:25%">
                <div>
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('svg')->size(100)->generate($user->session)) !!} "> 
                  <small style="color: #41b945"> {{$user->session}}   </small>                 
                </div>
            </td>
        </tr>
        {{--  --}}
        </table>
    </div>
    <div class="col-12 table-responsive" style="font-size:15px; margin-top:20px;">
        <table class="table table-striped" style="width:100%" id="tableEx">
            <thead>
                <tr class="btop">
                    <th class="btop">Item Type</th>
                    <th class="btop">Specimen type</th>
                    <th class="btop">Description</th>
                    <th class="btop">Project</th>
                </tr>
            </thead>
            <tbody class="fs--14 text-darkest">
                @if(count($requestItems)>0)
                @foreach($requestItems as $value)
                @if($value->item =='Tissue')
                <tr class="btop">
                    <td data-label="Rate" class="btop">
                        {{ $value->item}}
                    </td>
                    <td data-label="Products" class="btop">
                        {{ $value->specimen_type}}
                    </td>

                    <td data-label="Total Price" class="btop">
                        <p>Gender: {{ $value->gender}}, 
                            Age: {{ $value->age}}, 
                            Ethinicity: {{ $value->ethinicity}},
                            Donor Status: {{ $value->donor_status}}</p>
                    </td>
                    <td class="btop">{{$value->project_acronym}}</td>
                   
                </tr>
                @endif
                @endforeach
                @endif
            </tbody>
        </table>
        <table  class="table dt-responsive nowrap">
            
          <tbody>
         
           <br>
          <tr style="border-bottom: 1px solid rgb(f, f, f); margin-top: 20px">
            <td colspan="3" class="btop2">
                <div style="display:block; border: 1px solid rgb(221, 213, 213); border-radius: 4px; padding-right:10px; padding-left:10px; line-height:1">
                    <h3><u>Additional Details of the sample request :</u></h3>
                    <p> {{$user->details}}
                       </p>
                    <br>
                </div>
            </td>
        </tr>
        <br>
          <tr>
            <td class="btop2">
              _____________________
                <br>
                  <strong>Requested By: </strong><br>
                   [{{$user->name}}]
                </td>
            <td class="btop2">
              _____________________
                  <br>
                  <strong>Reviewed By: </strong><br>
                   [Kia Praiscillia]
                </td>
            <td class="btop2"> 
              _____________________
              <br>
                  <strong>Approved by: </strong> <br>
                   [Katabazi Fred Ashaba]
            </td>
         </tr>


          </tbody>
        </table>
            <footer>
                <table width="100%">
                    <tr>
                        <td colspan="2" style="width: 80%; text-alighn:center">
                            <h6 style="color:green;  ">
                                The Laboratory is Certified by the Ministry of Health Uganda
                            </h6>
                    </td>
                        <td style="width: 20%">
                            Completed
                        </td>
                    </tr>
                    <tr>
                        <td> <p style="text-align:center; font-size:10px; color:#4CAF50">Printed By: <font>Ked </font></p></td>
                        <td> <p style="text-align:center; font-size:10px; color:#4CAF50"> Print Date: {{date('l d-M-Y H:i:s')}}</font></p></td>
                        <td> <p style="text-align:center; font-size:10px; color:#4CAF50"> Printed 1 time(s)</font></p></td>
                    </tr>
                </table>
                {{-- <table style="border-bottom: 0.2px solid #6C757D; width: 100%">
                  <tr>
                    <td  style="color:#6C757D">  Page <span class="page">1</span> of <span class="topage">1</span></td>
                  
                  </tr>
                </table> --}}
            </footer>




      </div>
 
    <script type='text/php'>
        if (isset($pdf)) 
        {               
            $pdf->page_text(60, $pdf->get_height() - 50, "{PAGE_NUM} of {PAGE_COUNT}", null, 12, array(0,0,0));
        }
    </script>
   
    </body>
</html>
