@extends('layouts.app')

@section('style')
    <style>
        

        #searchBtn{
            cursor: pointer;
        }

        .description{
            display: none;
            width: fit-content;
            margin: auto;
        }

        .priceTable{
            background-color: #e5dede;
            color: #000;
            border-radius: 5px;
            padding: 0px 0px 0px 0px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
            position: relative;
            width: 190px;
        }

        .appendCol{
            width: 220px !important;
        }

        .title{
            text-align: center;               
            /* background-color: #6262c5;
            color: #fff; */
            font-size: 19px;
            font-weight: 600;
            padding: 10px 0px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);     
            height: 90px;   
            padding: 10px 0;   
        }

        .first_title{
            padding-top: 30px;
            font-size: 24px;
        }

        .divider{
            background-color: #004a98;
            color: #fff;
            padding: 10px 10px;
            height: 45px;
        }

        .priceItem{
            text-align: center;
            border-bottom: solid 1px #a78f8f;
            padding: 10px 0px 0px 0px;
            font-size: 15px;
            height: 58px;
            line-height: 23px;
            word-wrap: break-word;
        }

        .priceItem i{
            font-size: 20px;
            color: #ff0000;
        }

        .silver{
            background-color: #b4b4c5;
        }

        .gold{
            background-color: #cfca24;
        }

        .appendCol{
            background-color: #fff;
        }

        .price{
            color: #ff778f;
        }

        .acive-icon{
            color: #73ad1d !important;
        }

        .badge-img img{
           width: 55px;
           position: absolute;
            top: -35px;
            left: 80px;
        }      

        .show-zipcode{
            display: none;
        }

    </style>
@endsection



@section('content')
    <section class = 'zipcode-section'>
        <div class="container">
            <div class="mt-3 mb-3 text-center">
                <h3>
                    Encuentra la mejor autoescuela por código postal
                </h3>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="zip-input" id="zip-input">
                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter ZipCode" id="zipcode">
                            <span class="input-group-text" id="searchBtn">Search</span>
                        </div>            
                    </div> 
                </div>
            </div>

            <div class="mt-3 mb-3 text-center show-zipcode">
                <h5>
                    Descubre la mejor autoescuela en el código postal
                    <span class = 'search-zipCode'>08206</span> 
                </h5>
            </div>
            
        <div>
    </section>
    
    <section class = 'blog-section'>
        <div class="container">
            <div class="mt-5" id = "blog"> 
                <h2>
                    Blogs
                </h2>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm-12 mb-5">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        {{ $post->title }}
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $post->body }}
                                    </p>
                                </div>                               
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class = "contact-section">
        <div class="container">
            <div class="mt-5" id = "contact"> 
                
                <form action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class = 'text-center'>
                                Contact Us
                            </h2>                
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="contact-email" id="contact-email" class = 'form-control' required>
                            </div>            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="contact-phone" id="contact-phone" class = 'form-control' required>
                            </div>            
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text">Text</label>
                                <textarea type="text" name="contact-text" id="contact-text" class = 'form-control' required></textarea>
                            </div> 
                            <div class="form-group mt-3">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>                
                    
                    </div>
            </form>
            </div>
        </div>
    </section>

@endsection

@section('script')  
     
    <script type="text/javascript"> 
       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 

        $(document).ready(function(){
            var numberRegex = /^\d+$/;  
            
            document.querySelector('#zipcode').addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    var zipcode = $('#zipcode').val();
                    if(numberRegex.test(zipcode)){
                        if(zipcode.length != 5){
                            Swal.fire({
                                title: "Warning!",
                                text: "Please check your zip-code. zip-code has 5 letters.",
                                icon: "success"
                            });
                        }else{
                            
                            $('.show-zipcode').css('display', 'block');
                            $('.search-zipCode').text(zipcode);

                            var url = "{{ route('getShools.show', ":slug") }}";
                            url = url.replace(':slug', zipcode);
                              
                            $.ajax({
                                url: "{{ route('getShools') }}",
                                type: 'post',
                                data: {_token: CSRF_TOKEN, zipcode: zipcode},
                                dataType: 'json',
                                success: function(response){
                                    if(response.length > 0){                                       
                                        window.location.href=url;  
                                    }else{  
                                        Swal.fire({
                                            title: "Warning!",
                                            text: "We do not have any driving school in that Zip Code, please check our preferred Partner in that province.",
                                            icon: "success",
                                            confirmButtonText: 'Accept',
                                            showCancelButton: true,
                                        }).then((result) =>{
                                            if(result.isConfirmed){
                                                window.location.href=url;  
                                            }else{
                                                console.log('Cancelled!')
                                            }                                            
                                        });                              
                                    }
                                }
                            })
                        }
                    }else{      
                        Swal.fire({
                            title: "Warning!",
                            text: "Zip code must number.",
                            icon: "success"
                        });                
                    }
                }
            });


            $('#searchBtn').click(function(){
                var zipcode = $('#zipcode').val();
                if(numberRegex.test(zipcode)){
                    if(zipcode.length != 5){
                        Swal.fire({
                            title: "Warning!",
                            text: "Please check your zip-code. zip-code has 5 letters.",
                            icon: "success"
                        });
                    }else{
                        
                        $('.show-zipcode').css('display', 'block');
                        $('.search-zipCode').text(zipcode);

                        var url = "{{ route('getShools.show', ":slug") }}";
                        url = url.replace(':slug', zipcode);
                            
                        $.ajax({
                            url: "{{ route('getShools') }}",
                            type: 'post',
                            data: {_token: CSRF_TOKEN, zipcode: zipcode},
                            dataType: 'json',
                            success: function(response){
                                if(response.length > 0){                                       
                                    window.location.href=url;  
                                }else{  
                                    Swal.fire({
                                        title: "Warning!",
                                        text: "We do not have any driving school in that Zip Code, please check our preferred Partner in that province.",
                                        icon: "success",
                                        confirmButtonText: 'Accept',
                                        showCancelButton: true,
                                    }).then((result) =>{
                                        if(result.isConfirmed){
                                            window.location.href=url;  
                                        }else{
                                            console.log('Cancelled!')
                                        }                                            
                                    });                              
                                }
                            }
                        })
                    }
                }else{      
                    Swal.fire({
                        title: "Warning!",
                        text: "Zip code must number.",
                        icon: "success"
                    });                
                }
            })
        })
    </script>
@endsection