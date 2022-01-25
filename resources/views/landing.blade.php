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
                      <h5 class="mb-0 white-text">N 5, 231, 690, 546</h5>
                      
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
                      <p> Receipts Printed </p>
                   </div>
                   <div class="col s5 m5 right-align">
                      <h6 class="mb-0 white-text">Daily Transactions</h6>
                      
                      <h5 class="mb-0 white-text">#2,900</h5>
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
                     <h5 class="mb-0 white-text">N 195, 231, 690, 546</h5>
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
                      <p> Receipts Printed </p>
                   </div>
                   <div class="col s5 m5 right-align">
                     <h6 class="mb-0 white-text">Monthly Transactions</h6>
                      
                     <h5 class="mb-0 white-text">#112,900</h5>
                     
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
                  <tr><td><a href='/new-collection'>New Collection</a></td></tr>
                  <tr><td><a href=''>Collection Reports</a></td></tr>
                  <tr><td><a href=''>Manage Wallets</a></td></tr>
                  <tr><td><a href=''>Manage Vendors</a></td></tr>
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
       </div>
       <div class="col s12 m4">
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
       </div>
    </div>
    <div class="row">
      <div class="col s12 m6">
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
      <div class="col s12 m6">

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
@endsection
