<div class="modal fade" id="bookatable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
           </div>
           <div class="modal-body">
               <div class="fs-wrapper">
                   <form class="fs-form" method="post">
                       <input type="hidden" name="action" value="flex-reservations-submit">
                       <input type="hidden" name="nonce" value="79835a9b53">
                       <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                               <h2 class="center title ui-field-title">Reservation</h2>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6 col-left">
                               <label for="timepiker">Time:</label>
                               <input type="text" class="input-field  timepicker" placeholder="Time">
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-6">
                               <div class=" number">
                                   <label for="pepole">Number Of Pepole:</label>
                                   <input type="number" class="input-field " required="required">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6 col-left">
                               <div class=" date">
                                   <label for="date">Date:</label>
                                   <input type="date" class="input-field field-date" name="fs_date" required="required">
                               </div>
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-6">
                               <div class="text">
                                   <label for="phone">Phone Number:</label>
                                   <input type="text" class="input-field field-text" name="fs_phone" required="required">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                               <div class="text">
                                   <label for="name">Full Name:</label>
                                   <input type="text" class="input-field field-text" name="fs_name" required="required">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                               <div class=" textarea">
                                   <label for="details">Details:</label>
                                   <textarea class="input-field field-textarea" name="fs_message"></textarea>
                               </div>
                           </div>
                       </div>
                       <div class="submin-btn">
                           <input type="submit" name="fs_submit" class="btn-main" value="BOOK A TABLE">

                       </div>
               </div>
           </div>
           </form>
           <div class="success-wrapper"></div>
       </div>
   </div>
</div>