@extends('layouts.master')

@section('content')
<div id="main">
    <div class="row">
      <div class="col s12">
        <div class="container">
          <div class="section">

<!--card stats start-->
   <div id="card-stats" class="pt-0">
       <div class="row">
         <div class="col s12 m6 l6 xl3">
          <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
             <div class="padding-4">
                <div class="row">
                   <div class="col s2 m2">
                      <i class="material-icons background-round mt-5">equalizer</i>
                      <p> &nbsp </p>
                   </div>
                   <div class="mr-2 right-align">
                      <h6 class="mb-0 white-text">Daily Collection</h6>
                      <br>
                      <h5 class="mb-0 white-text">N {{number_format($revenue->daily)}}</h5>
                      
                   </div>
                </div>
             </div>
          </div>
         </div>
       <div class="col s12 m6 l6 xl3">
          <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
             <div class="padding-4">
                <div class="row">
                   <div class="col s7 m7">
                      <i class="material-icons background-round mt-5">perm_identity</i>
                      <p> Policess Printed </p>
                   </div>
                   <div class="col s5 m5 right-align">
                      <h6 class="mb-0 white-text">Daily Policies</h6>
                      <br>
                      <h5 class="mb-0 white-text"># {{$revenue->daily_trans}}</h5>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col s12 m6 l6 xl3">
          <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
             <div class="padding-4">
                <div class="row">
                   <div class="col s2 m2">
                      <i class="material-icons background-round mt-5">timeline</i>
                      <p> &nbsp </p>
                   </div>
                   <div class="mr-2 right-align">
                     <h6 class="mb-0 white-text">Monthly Collection</h6>
                     <br>
                     <h5 class="mb-0 white-text">N {{number_format($revenue->monthly)}}</h5>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col s12 m6 l6 xl3" style="height: 150px">
          <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
             <div class="padding-4">
                <div class="row">
                   <div class="col s7 m7">
                      <i class="material-icons background-round mt-5">perm_identity</i>
                      <p> Policies Printed </p>
                   </div>
                   <div class="col s5 m5 right-align">
                     <h6 class="mb-0 white-text">Monthly Transactions</h6>
                      
                     <h5 class="mb-0 white-text"># {{$revenue->monthly_trans}}</h5>
                     
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
   </div>
<!--card stats end-->

 <!-- ecommerce product start-->
 <div id="ecommerce-product">
    <div class="row">
       <div class="col s12 m4">
          <div class="card animate fadeLeft">
             <div class="card-content  center">
                <h6 class="card-title font-weight-600 mb-0">Quick Links</h6>
               
                <table class="highlight">
                  <tr><td><a href="{{route("bills")}}">New Insurance Policy</a></td></tr>
                  <tr><td><a href="{{route("reports")}}">Collection Reports</a></td></tr>
                  <tr><td><a href=''>Place holder</a></td></tr>
                  <tr><td><a href=''>Place Holder</a></td></tr>
                  <tr><td><a href=''>Logout</a></td></tr>
               </table>
             </div>
            
          </div>
       </div>
       <div class="col s12 m4">
          <div class="card animate fadeUp">
          
             <div class="card-content">
               <h6 class="card-title center-align font-weight-800 mb-0">Collection Items</h6>

               <ul class="collapsible collapsible-accordion">
                  <li>
                     <div class="collapsible-header"> Daily Items Summary </div>
                     <div class="collapsible-body">

                        <table class="highlight">
                           <tr><td>Motor Vehicle (Comm) </td><td style='text-align:right;'>N {{number_format($stat->revenue->daily->cvo)}} [{{number_format($stat->trans->daily->cvo)}}]</td></tr>
                           <tr><td>Motor Vehicle (Private) </td><td style='text-align:right;'>N {{number_format($stat->revenue->daily->pmo)}}  [{{number_format($stat->trans->daily->pmo)}}]</td></tr>
                           <tr><td>Motorcyle/Tricycle  </td><td style='text-align:right;'>N {{number_format($stat->revenue->daily->mco)}}  [{{number_format($stat->trans->daily->mco)}}]</td></tr>
                           
                        </table>
                     </div>
                  </li>
               </ul>
               <ul class="collapsible collapsible-accordion">
                  <li>
                     <div class="collapsible-header"> Monthly Items Summary </div>
                     <div class="collapsible-body">

                        <table>
                           <tr><td>Motor Vehicle (Comm) </td><td style='text-align:right;'>N {{number_format($stat->revenue->monthly->cvo)}} [{{number_format($stat->trans->monthly->cvo)}}]</td></tr>
                           <tr><td>Motor Vehicle (Private) </td><td style='text-align:right;'>N {{number_format($stat->revenue->monthly->pmo)}} [{{number_format($stat->trans->monthly->pmo)}}]</td></tr>
                           <tr><td>Motorcyle/Tricycle  </td><td style='text-align:right;'>N {{number_format($stat->revenue->monthly->mco)}} [{{number_format($stat->trans->monthly->mco)}}]</td></tr>
                        </table>
                     </div>
                  </li>
               </ul>
             </div>
            
          </div>
       </div>
       {{-- <div class="col s12 m4">
          <div class="card animate fadeRight">
             <div class="card-content center">
                <h6 class="card-title font-weight-800 mb-0">Monthly Collection</h6>
                  <ul class="collapsible collapsible-accordion">
                     <li>
                        <div class="collapsible-header"> High Court of Justice </div>
                        <div class="collapsible-body">

                           <table>
                              <tr><td><a href=''>Court Fees</a></td></tr>
                              <tr><td><a href=''>Court Fines</a></td></tr>
                              <tr><td><a href=''>Probate</a></td></tr>
                           </table>
                        </div>
                     </li>
                  </ul>
                  <ul class="collapsible collapsible-accordion">
                     <li>
                        <div class="collapsible-header"> Sharia Court of Appeal </div>
                        <div class="collapsible-body">

                           <table>
                              <tr><td><a href=''>Court Fees</a></td></tr>
                              <tr><td><a href=''>Court Fines</a></td></tr>
                              <tr><td><a href=''>Probate</a></td></tr>
                           </table>
                        </div>
                     </li>
                  </ul>
                  
             </div>
             
          </div>
       </div> --}}
    </div>
    <div class="row">
      <div class="col s12 m4">
         {{-- Online Vendors --}}
         <ul class="collapsible collapsible-accordion">
            <li>
               <div class="collapsible-header"> Vendors Online</div>
               <div class="collapsible-body">

                  <table>
                     <tr><td><a href=''>vendor 1</a></td></tr>
                     <tr><td><a href=''>Vendor 2</a></td></tr>
                     <tr><td><a href=''>Vendor 3</a></td></tr>
                  </table>
               </div>
            </li>
         </ul>
      </div>
      {{-- offline Vendors --}}
      <div class="col s12 m4">

         <ul class="collapsible collapsible-accordion">
            <li>
               <div class="collapsible-header"> Vendors Offline</div>
               <div class="collapsible-body">

                  <table>
                     <tr><td><a href=''>vendor 1</a></td></tr>
                     <tr><td><a href=''>Vendor 2</a></td></tr>
                     <tr><td><a href=''>Vendor 3</a></td></tr>
                  </table>
               </div>
            </li>
         </ul>
      </div>
    </div>
    
    <div class="mt-10"></div>
 </div>

   @section('script')
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="js/scripts/dashboard-ecommerce.min.js"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="js/scripts/extra-components-sweetalert.min.js"></script>

    <script>
      //  js code here
    </script>
   @endsection

@endsection
