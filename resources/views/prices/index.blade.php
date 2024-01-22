@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-row-reverse mb-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Add New
        </button>
    </div>

    <div id="addModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add New Data
                    </h4>                  
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Driver School Name</label>
                        <input type="text" class="form-control" id="name_add" placeholder="Enter Driver Schools Name" required  >
                    </div>

                    <div class="form-group">
                        <label for="email">Driver School Email</label>
                        <input type="email" class="form-control" id="email_add" placeholder="Enter Driver Schools Email"  >
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone_add" placeholder="Enter Phone Number"   >
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website_add" placeholder="Enter Website"   >
                    </div>

                    <div class="form-group">
                        <label for="zipcode">Zipcode</label>
                        <input type="text" class="form-control" id="zipcode_add" placeholder="Enter Zipcode" required  >
                    </div>                   

                    <div class="form-group">
                          <label for="coop_add" >Coop</label>
                          <select id='coop_add' class="form-control">
                              <option value='gold'>Gold</option>
                              <option value='silver'>Silver</option>
                              <option value=''>Null</option>
                          </select> 
                    </div> 

                    <div class="form-group">
                        <label for="license">License</label>
                        <input type="text" class="form-control" id="license_add" placeholder="Enter License" >
                    </div>

                    <div class="form-group">
                        <label for="product">Product</label>
                        <input type="number" class="form-control" id="product_add" placeholder="Enter Product" required  >
                    </div>

                    <div class="form-group">
                        <label for="books">Books</label>
                        <select id='books_add' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="tests">Tests</label>
                        <select id='tests_add' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="onsite">OnSite</label>
                        <select id='onsite_add' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="online">Online</label>
                        <select id='online_add' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="practical">Practical</label>
                        <select id='practical_add' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="numberOfPractical">Number of Practical</label>
                        <input type="number" class="form-control" id="numberOfPractical_add" placeholder="Enter Number of Practical" required  min = '0' >
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price_add" placeholder="Enter Price" required min = '0' >
                    </div>

                    <div class="form-group">
                        <label for="extraLesson">Extra Lesson</label>
                        <input type="number" class="form-control" id="extraLesson_add" placeholder="Enter Extra Lesson" required min = '0' >
                    </div>

                   
                </div>

                <div class="modal-footer">          
                    <input type="hidden" class="form-control" id="status"  value = 1 >                                               
                    <button type="button" class="btn btn-success btn-sm" id="btn_save_add">Save</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
    </div>

   <div id="updateModal" class="modal fade" role = 'dialog'>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Update
                    </h4>                 
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Driver School Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Driver Schools Name" required  >
                    </div>

                    <div class="form-group">
                        <label for="email">Driver School Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Driver Schools Email"  >
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number"   >
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website" placeholder="Enter Website"   >
                    </div>

                    <div class="form-group">
                        <label for="zipcode">Zipcode</label>
                        <input type="text" class="form-control" id="zipcode" placeholder="Enter Zipcode" required  >
                    </div>                   

                    <div class="form-group">
                          <label for="coop" >Coop</label>
                          <select id='coop' class="form-control">
                              <option value='gold'>Gold</option>
                              <option value='silver'>Silver</option>
                              <option value=''>Null</option>
                          </select> 
                    </div> 

                    <div class="form-group">
                        <label for="license">License</label>
                        <input type="text" class="form-control" id="license" placeholder="Enter License" >
                    </div>

                    <div class="form-group">
                        <label for="product">Product</label>
                        <input type="number" class="form-control" id="product" placeholder="Enter Product" required  >
                    </div>

                    <div class="form-group">
                        <label for="books">Books</label>
                        <select id='books' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="tests">Tests</label>
                        <select id='tests' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="onsite">OnSite</label>
                        <select id='onsite' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="online">Online</label>
                        <select id='online' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="practical">Practical</label>
                        <select id='practical' class="form-control">
                              <option value='Yes'>Yes</option>
                              <option value='No'>No</option>                             
                          </select> 
                    </div>

                    <div class="form-group">
                        <label for="numberOfPractical">Number of Practical</label>
                        <input type="number" class="form-control" id="numberOfPractical" placeholder="Enter Number of Practical" required  min = '0' >
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="Enter Price" required min = '0' >
                    </div>

                    <div class="form-group">
                        <label for="extraLesson">Extra Lesson</label>
                        <input type="number" class="form-control" id="extraLesson" placeholder="Enter Extra Lesson" required min = '0' >
                    </div>

                   
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="price_id" id='price_id' value = "0">
                    <input type="hidden" class="form-control" id="created_at" >
                    <input type="hidden" class="form-control" id="updated_at" value ="<?php echo date('Y-m-d H:i:s'); ?> ">
                    <button type="button" class="btn btn-success btn-sm" id="btn_save">Save</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Prices Table') }}</div>

                <div class="card-body table-responsive">
                    <table id='priceTable' width='100%' border="1" style='border-collapse: collapse;'>
                        <thead>
                            <tr>
                                <td>
                                    Action
                                </td>
                                <td>
                                    ID
                                </td>
                                <td>
                                    Name
                                </td>
                                <td>
                                    Email
                                </td>
                                <td>
                                    Phone
                                </td>
                                <td>
                                    Website
                                </td>
                                <td>
                                    Zipcode
                                </td>
                                <td>
                                    Coop
                                </td>
                                <td>
                                    License
                                </td>
                                <td>
                                    Product
                                </td>
                                <td>
                                    Books
                                </td>
                                <td>
                                    Tests
                                </td>
                                <td>
                                    OnSite
                                </td>
                                <td>
                                    Online
                                </td>
                                <td>
                                    Practical
                                </td>
                                <td>
                                    NumberOfPractical
                                </td>
                                <td>
                                    Price
                                </td>
                                <td>
                                    Extra Lesson
                                </td>
                                <td>
                                    Created At
                                </td>    
                                <td>
                                    Last Update
                                </td>                              
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')  
     
    <script type="text/javascript"> 
       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 

        $(document).ready(function(){

            // DataTable
            var priceTable = $('#priceTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url":"{{route('getDataTableData')}}",
                    'type': 'POST',
                    'data': {_token: CSRF_TOKEN}
                },
                columns: [
                    { data: "action"},
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'phone' },
                    { data: 'website' },                   
                    { data: 'zipcode' },
                    { data: 'coop' },
                    { data: 'license' },
                    { data: 'product' },
                    { data: 'books' },
                    { data: 'tests' },
                    { data: 'onsite' },
                    { data: 'online' },
                    { data: 'practical' },
                    { data: 'numberOfPractical' },
                    { data: 'price' },
                    { data: 'extraLesson' },
                    { data: 'created_at' },
                    { data: 'updated_at' },                   
                ]
            });      

             // Update record
            $('#priceTable').on('click','.updateUser',function(){
                var id = $(this).data('id');

                $('#price_id').val(id);

            // AJAX request
                $.ajax({
                    url: "{{ route('getPriceData') }}",
                    type: 'post',
                    data: {_token: CSRF_TOKEN, id: id},
                    dataType: 'json',
                    success: function(response){

                        if(response.success == 1){
                            $('#name').val(response.name);
                            $('#email').val(response.email);
                            $('#phone').val(response.phone);
                            $('#website').val(response.website);
                            $('#zipcode').val(response.zipcode);
                            $('#coop').val(response.coop);
                            $('#license').val(response.license);
                            $('#books').val(response.books);
                            $('#tests').val(response.tests);
                            $('#onsite').val(response.onsite);
                            $('#online').val(response.online);
                            $('#practical').val(response.practical);
                            $('#numberOfPractical').val(response.numberOfPractical);
                            $('#price').val(response.price);
                            $('#extraLesson').val(response.extraLesson);  
                            $('#created_at').val(response.created_at);                          
                            $('#updated_at').val(response.updated_at);

                            priceTable.ajax.reload();
                        }else{
                            alert("Invalid ID.");
                        }
                    }
                });

            });

            // Save user 
            $('#btn_save').click(function(){
                var id = $('#price_id').val();

                var name = $('#name').val().trim();
                var email = $('#email').val().trim();
                var phone = $('#phone').val().trim();
                var website = $('#website').val().trim();
                var zipcode = $('#zipcode').val().trim();
                var coop = $('#coop').val();
                var books = $('#books').val();
                var tests = $('#tests').val().trim();
                var onsite = $('#onsite').val().trim();
                var online = $('#online').val().trim();
                var practical = $('#practical').val().trim();
                var numberOfPractical = $('#numberOfPractical').val().trim();
                var price = $('#price').val().trim();
                var extraLesson = $('#extraLesson').val().trim();
                var extraLesson = $('#extraLesson').val().trim();
                var created_at = $('#created_at').val().trim();
                var updated_at = $('#updated_at').val().trim();
               

                if(name !='' && zipcode != ''){

                    // AJAX request
                    $.ajax({
                        url: "{{ route('updatePrices') }}",
                        type: 'post',
                        data: {
                            _token: CSRF_TOKEN,
                            id: id,
                            name: name, 
                            email: email, 
                            phone: phone, 
                            website: website,
                            zipcode: zipcode,
                            coop: coop,
                            books: books,
                            tests: tests,
                            onsite: onsite,
                            online: online,
                            practical: practical,
                            numberOfPractical: numberOfPractical,
                            price: price,
                            extraLesson: extraLesson,
                            created_at, created_at,
                            updated_at: updated_at
                        },
                        dataType: 'json',
                        success: function(response){
                            if(response.success == 1){
                                alert(response.msg);

                                // Empty and reset the values
                                $(
                                    '#name',
                                    '#email',
                                    '#phone', 
                                    '#website', 
                                    '#zipcode', 
                                    '#license',
                                    '#coop',
                                    '#updated_at',
                                    '#created_at'
                                ).val('');

                                $(
                                    '#books',
                                    '#tests',
                                    '#onsite',
                                    '#online',
                                    '#practical',
                                ).val('No');

                                $(
                                    '#price_id',
                                    '#product',
                                    '#numberOfPractical',
                                    '#price',
                                    '#extraLesson'                                   
                                ).val(0);                              

                                // Reload DataTable
                                priceTable.ajax.reload();

                                // Close modal
                                $('#updateModal').modal('toggle');
                            }else{
                                alert(response.msg);
                            }
                        }
                    });

                }else{
                    alert('Please fill all fields.');
                }
            });

            $('#btn_save_add').click(function(){
                var name = $('#name_add').val().trim();
                var email = $('#email_add').val().trim();
                var phone = $('#phone_add').val().trim();
                var website = $('#website_add').val().trim();
                var zipcode = $('#zipcode_add').val().trim();
                var coop = $('#coop_add').val();
                var books = $('#books_add').val();
                var tests = $('#tests_add').val().trim();
                var onsite = $('#onsite_add').val().trim();
                var online = $('#online_add').val().trim();
                var practical = $('#practical_add').val().trim();
                var numberOfPractical = $('#numberOfPractical_add').val().trim();
                var price = $('#price_add').val().trim();
                var extraLesson = $('#extraLesson_add').val().trim();
                var status = $('#status').val().trim();
                
      
                if(name !='' && zipcode != ''){
                    // AJAX request
                    $.ajax({
                        url: "{{ route('addPrices') }}",
                        type: 'post',
                        data: {
                            _token: CSRF_TOKEN,                      
                            name: name, 
                            email: email, 
                            phone: phone, 
                            website: website,
                            zipcode: zipcode,
                            coop: coop,
                            books: books,
                            tests: tests,
                            onsite: onsite,
                            online: online,
                            practical: practical,
                            numberOfPractical: numberOfPractical,
                            price: price,
                            extraLesson: extraLesson,
                            status: status                 
                        },
                        dataType: 'json',
                        success: function(response){
                            if(response.success == 1){
                                alert(response.msg);

                                // Empty and reset the values
                                $(
                                    '#name_add',
                                    '#email_add',
                                    '#phone_add', 
                                    '#website_add', 
                                    '#zipcode_add', 
                                    '#license_add',
                                    '#coop_add',                                
                                ).val('');

                                $(
                                    '#books_add',
                                    '#tests_add',
                                    '#onsite_add',
                                    '#online_add',
                                    '#practical_add',
                                ).val('No');

                                $(                                
                                    '#product_add',
                                    '#numberOfPractical_add',
                                    '#price_add',
                                    '#extraLesson_add'                                   
                                ).val(0);   

                                $(                                
                                    '#status'                                                  
                                ).val(1);                              

                                // Reload DataTable
                                priceTable.ajax.reload();

                                // Close modal
                                $('#addModal').modal('toggle');
                            }else{
                                alert(response.msg);
                            }
                        }
                    });

                }else{
                alert('Please fill all fields.');
                }
            });

            // Delete record
            $('#priceTable').on('click','.deleteUser',function(){
                var id = $(this).data('id');

                var deleteConfirm = confirm("Are you sure?");
                if (deleteConfirm == true) {
                    // AJAX request
                    $.ajax({
                        url: "{{ route('deletePrice') }}",
                        type: 'post',
                        data: {_token: CSRF_TOKEN,id: id},
                        success: function(response){
                            if(response.success == 1){
                                alert("Record deleted.");

                                // Reload DataTable
                                priceTable.ajax.reload();
                            }else{
                                    alert("Invalid ID.");
                            }
                        }
                    });
                }
            });

        });
    </script>

@endsection
