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
            width: 220px;
        }

        .title{
            text-align: center;               
            /* background-color: #6262c5;
            color: #fff; */
            font-size: 14px;
            font-weight: 600;
            padding: 10px 0px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);     
            height: 90px;      
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
            height: 40px;
            line-height: 13px;
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
           margin-top: -50px;
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

            <div class="mt-3 mb-3 text-center">
                <h5>
                    Descubre la mejor autoescuela en el código postal 08206
                </h5>
            </div>
            
        <div>
    </section>
<!--     
    <section class = 'blog-section'>
        <div class="container">
            <div class="mt-5" id = "blog"> 
                <h2>
                    Blogs
                </h2>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm">
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
    </section> -->

    <section class = 'pricingTable-section'>
        <div class="container">
            <div class="mt-5">
                
                <div class="description">

                    <div class="mt-5 priceTable">
                        <div class="title first_title">
                            Producto
                        </div>
                        <div class="divider">
                            Datos básicos
                        </div>
                        <div class="priceItem">
                            Teléfono
                        </div>
                        <div class="priceItem">
                            Web
                        </div>
                        <div class="divider">
                            Servicios
                        </div>
                        <div class="priceItem">
                            Libros 
                        </div>
                        <div class="priceItem">
                            Tests  
                        </div>
                        <div class="priceItem">
                            Teóricas Presenciales
                        </div>
                        <div class="priceItem">
                            Teóricas Online
                        </div>
                        <div class="priceItem">
                            Nº Prácticas
                        </div>
                        <div class="priceItem">
                            Precio 
                        </div>
                        <div class="priceItem">
                            Clase extra
                        </div>                       
                    </div>
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

            $('#searchBtn').click(function(){
                var zipcode = $('#zipcode').val();
                $('.appendCol').css('display', 'none');
                
                if(numberRegex.test(zipcode)){
                    if(zipcode.length != 5){
                       alert('Please check your zip-code. zip-code has 5 letters.');
                    }else{
                        $.ajax({
                            url: "{{ route('getShools') }}",
                            type: 'post',
                            data: {_token: CSRF_TOKEN, zipcode: zipcode},
                            dataType: 'json',
                            success: function(response){
                                if(response.length > 0){
                                    $('.description').css('display', 'flex');

                                    var originalArray = response;
                                    originalArray.forEach(orderArray);

                                    function orderArray(item){
                                        if(item.coop == 'silver'){
                                            const valuesToMove = response.filter(item => item.coop == 'silver');
                                            const remainingValues = response.filter(item => item.coop !== 'silver');
                                            originalArray = valuesToMove.concat(remainingValues);        
                                        }else if(item.coop == 'gold'){
                                            const valuesToMove = response.filter(item => item.coop == 'gold');
                                            const remainingValues = response.filter(item => item.coop !== 'gold');
                                            originalArray = valuesToMove.concat(remainingValues);   
                                        }                                                                       
                                    }                                    
                                    
                                    originalArray.forEach(displayTable);

                                    function displayTable(item){                                      
                                        var badgeClass = '';
                                        var badge = '';
                                        if(item.coop == 'silver'){
                                            badge = 'Prefered Offer'
                                            badgeClass = 'silver';
                                        }else if(item.coop == 'gold'){
                                            badge = 'Gold Badge';
                                            badgeClass = 'gold';
                                        }else{
                                            badge = '';
                                            badgeClass = '';
                                        }

                                        const formattedDate = (item.updated_at).replace("T", " ").replace(".000000Z", "");
                                        
                                        $('.description').append("<div class='mt-5 priceTable appendCol'> <div class='title'><div class='"+
                                                (item.coop == 'silver'?"badge-img":"")+"'>" + 
                                                (item.coop == 'silver'?"<img src= {{ asset('public/img/favorite.png') }} />":"")+
                                                
                                                "</div><div class='priceName'>" + item.name +
                                                "</div><div class='price'>" + item.price + "€"+
                                                "</div></div><div class='divider'>"+
                                                "</div><div class='priceItem'>" + item.phone +                                                       
                                                " </div> <div class='priceItem'><a href = '" + (item.website ) + "'>"+ (item.website) +"</a>"+
                                                "</div><div class='divider'>" +                                                      
                                                " </div> <div class='priceItem'>" + (item.books == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-check'></i>") +
                                                " </div> <div class='priceItem'>" + (item.tests == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-check'></i>") +
                                                " </div> <div class='priceItem'>" + (item.onsite == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-check'></i>") +
                                                " </div> <div class='priceItem'>" + (item.online == 'Yes'?"<i class='fa-regular fa-circle-check acive-icon'></i>":"<i class='fa-regular fa-circle-check'></i>") +
                                                " </div> <div class='priceItem'>" + item.numberOfPractical +
                                                " </div> <div class='priceItem'>" + item.price + "€" +
                                                " </div> <div class='priceItem'>" + item.extraLesson + "€" +
                                                "</div></div>"
                                            );
                                    }
                                }else{
                                    // $('.description').css('display', 'none');
                                    alert('We do not have any driving school in that Zip Code, please check our preferred Partner in that province');
                                    $('.appendCol').css('display', 'none');
                                    $.ajax({
                                        url: "{{ route('getShools') }}",
                                        type: 'post',
                                        data: {_token: CSRF_TOKEN, coop: 'gold'},
                                        dataType: 'json',
                                        success: function(response){
                                            if(response.length > 0){
                                                $('.description').css('display', 'flex');
                                                var originalArray = response;
                                                originalArray.forEach(displayTable);

                                                function displayTable(item){                                      
                                                    var badgeClass = '';
                                                    var badge = '';
                                                    if(item.coop == 'silver'){
                                                        badge = 'Prefered Offer'
                                                        badgeClass = 'silver';
                                                    }else if(item.coop == 'gold'){
                                                        badge = 'Gold Badge';
                                                        badgeClass = 'gold';
                                                    }else{
                                                        badge = '';
                                                        badgeClass = '';
                                                    }

                                                    const formattedDate = (item.updated_at).replace("T", " ").replace(".000000Z", "");
                                                    
                                                    $('.description').append("<div class='mt-5 priceTable appendCol'> <div class='title'><div class='"+
                                                        (item.coop == 'silver'?"badge-img":"")+"'>" + 
                                                        (item.coop == 'silver'?"<img src= {{ asset('public/img/favorite.png') }} />":"")+
                                                        "</div><div class='priceName'>" + item.name +
                                                        "</div> <div class='price'>" + item.price + "€"+
                                                        "</div> </div> <div class='divider'>"+
                                                        "</div> <div class='priceItem'>" + item.phone +                                                       
                                                        " </div> <div class='priceItem'> <a href = '" + (item.website != 'null'? item.website: '') + "'>"+ (item.website != 'null'? item.website: '') +"</a>"+
                                                        "</div> <div class='divider'>" +                                                      
                                                        " </div> <div class='priceItem'>" + item.books +
                                                        " </div> <div class='priceItem'>" + item.tests +
                                                        " </div> <div class='priceItem'>" + item.onsite +
                                                        " </div> <div class='priceItem'>" + item.online +
                                                        " </div> <div class='priceItem'>" + item.numberOfPractical +
                                                        " </div> <div class='priceItem'>" + item.price + "€" +
                                                        " </div> <div class='priceItem'>" + item.extraLesson + "€" +
                                                    "</div></div>");
                                                }
                                                
                                            }
                                        }
                                    })

                                    console.log('no data');
                                }

                            }
                        })
                    }
                }else{
                    alert('Zip code must number');
                }
            })
        })
    </script>
@endsection