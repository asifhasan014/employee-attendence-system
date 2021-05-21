 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title text-center" id="exampleModalLabel">Employee Registration Form</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="" id="employeeResForm" method="POST">
                     <div class="form-group">
                         <label for="exampleInputEmail1">Employee Name</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter employee name">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Email address</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email address">
                         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                     </div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">Password</label>
                         <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">Confirm Password</label>
                         <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password" placeholder="Confirm password">
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlSelect1">Company Name</label>
                         <select class="form-control" id="exampleFormControlSelect1" name="company_name">
                             <option>-- select option --</option>
                             <option value="Together Initiative">Together Initiative</option>
                             <option value="Intellier Ltd">Intellier Ltd</option>
                             <option value="BJIT">BJIT</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Company Code</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" name="company_code" aria-describedby="emailHelp" placeholder="Enter company code">
                     </div>
                     <br>
                     <button type="submit" class="btn btn-info btn-md">Submit</button>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!-- <script>
     $(function() {

         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });

         $('#employeeResForm').submit(function(e) {
             e.preventDefault();
             console.log('submitted');
             var data = $(this).serialize();
             var url = "{{route('createEmployee')}}"
             console.log(data);

             $.ajax({
                 url: url,
                 method: 'POST',
                 data: data,
                 success: function(response) {
                     console.log("success field");
                     console.log(response);
                     $('#exampleModal').modal('hide');
                     // You will get response from your PHP page (what you echo or print)
                 },
                 error: function(error) {
                     console.log("error field");
                     console.log(error);
                 }
             });
         })
     })
 </script> -->